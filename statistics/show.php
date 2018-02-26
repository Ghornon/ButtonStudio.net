<?php

function show( $period ) {
    
    require 'connect.php';
    
    try {

        $connection = new mysqli( $db_host, $db_user, $db_password, $db_name );

        if ($connection->connect_errno!=0) {

            throw new Exception(mysql_connect_errno());

        } else {
            
            $today = date('Y-m-d');
            $fromdate = date( 'Y-m-d', strtotime( $today . " - 1 " . $period ) ); //month, week, day
            
            if ( $period == "day" ) {
                $fromdate = date('Y-m-d');
            }
            
//            echo $fromdate;
            
            if ( $query = $connection->query( "SELECT * FROM visits WHERE date BETWEEN '$fromdate' AND '$today' ORDER BY id DESC" ) ) {

                if ($query->num_rows > 0) {
                        
                    echo '<div class="table-responsive"><table class="table table-striped table-hover">';
                    echo "<thead><tr><th>ID</th><th>ID in database </th><th>Date</th><th>Time</th><th>IP address</th><th>Language</th></thead>";
                    
                    $a = 1;
                    
                    while($row = $query->fetch_array()) {

//                        echo "<tr><th>" . $row['id'] . "</th><th>" . $row['date'] . "</th><th>" . $row['time'] . "</th><th>" . $row['ip'] . "</th><th>" . $row['language'] . "</th></tr>";
//                        print_r($row);
                        
                        echo "<tr><td>" . $a++ . "</td>";
                        
                        for ( $i = 0; $i < count($row) / 2; $i++ ) {
                            
                            echo "<td>" . $row[ $i ] . "</td>";
                            
                        }
                        
                        echo "</tr>";

                    }

                    echo "</table></div>";


                }

            }

        }


    } catch (Exception $e) {
        echo $e;
    }
    
}

?>