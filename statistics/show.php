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
                        
                    echo '<table class="table table-striped table-hover">';
                    echo "<thead><tr><th>ID</th><th>Date</th><th>Time</th><th>IP address</th><th>Language</th></thead>";

                    while($row = $query->fetch_assoc()) {

                        echo "<tr><th>" . $row['id'] . "</th><th>" . $row['date'] . "</th><th>" . $row['time'] . "</th><th>" . $row['ip'] . "</th><th>" . $row['language'] . "</th></tr>";

                    }

                    echo "</table>";


                }

            }

        }


    } catch (Exception $e) {
        echo $e;
    }
    
}

?>