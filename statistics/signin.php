<?php

if ( !isset( $_GET['signin'] ) || isset( $_SESSION['loged'] ) || !isset( $_POST['login'] ) || !isset( $_POST['email'] ) || !isset( $_POST['password'] ) ) {
    
    header( 'Location: ../index.php' );
    exit();
    
}

require_once 'connect.php';

$login = htmlentities( $_POST['login'], ENT_QUOTES, "UTF-8" );
$email = htmlentities( $_POST['email'], ENT_QUOTES, "UTF-8" );
$password = htmlentities( $_POST['password'], ENT_QUOTES, "UTF-8" );

//$hash = password_hash( $password, PASSWORD_DEFAULT );

$valid = true;

if ( $valid ) {
    
    try {

        $connection = new mysqli( $db_host, $db_user, $db_password, $db_name );

        if ( $connection->connect_errno != 0 ) {

            throw new Exception( $connection->connect_errno );

        } else {

            if ( $result = $connection->query(sprintf("SELECT * FROM users WHERE login='%s' AND email='%s' ",
                                                 mysqli_real_escape_string( $connection, $login ),
                                                 mysqli_real_escape_string( $connection, $email )
                                                ))) {
                
                $nom_rows = $result->num_rows;
                
                if ( $nom_rows > 0 ) {
                    
                    session_start();
                    
                    $row = $result->fetch_assoc();
                    
                    if ( password_verify( $password, $row['password'] ) ) {
                        
                        $_SESSION['loged'] = true;
                        $_SESSION['login'] = $row['login'];
                        $_SESSION['email'] = $row['email'];

                        header( 'Location: summary.php' );
                        
                    } else {
                        
                        echo "Bad login, password or email!";
                        
                    }     
                    
                } else {
                    
                    echo "Bad login, password or email!";
                    
                }
                
                $result->close();
                
            } 

        }

    } catch ( Exception $e ) {

        echo $e;

    }
    
}

?>