<?php

session_start();
require_once 'connect.php';

function getUserIP() {
    
    if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
        
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
            
            $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($addr[0]);
            
        } else {
            
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
        }
        
    } else {

        return $_SERVER['REMOTE_ADDR'];
        
    }
    
}

function registerEntrance() {
    
    $date = date('Y-m-d');
    $time = date('H:i:s');
    $ip = getUserIP();
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    
//    echo $date . "<br>" . $time . "<br>" . $ip . "<br>";
    
    $sql = "INSERT INTO `visits` (`id`, `date`, `time`, `ip`, `language`) VALUES (NULL, '$date', '$time', '$ip', '$lang');";
    
    return $sql;
    
}

if ( !isset( $_SESSION['visited'] ) ) {
    
    try {

        $connection = new mysqli( $db_host, $db_user, $db_password, $db_name );

        if ($connection->connect_errno!=0) {

            throw new Exception(mysql_connect_errno());

        } else {

            if ( $query = $connection->query( registerEntrance() ) ) {

                $_SESSION['visited'] = true;

            }

        }


    } catch (Exception $e) {
        echo $e;
    }
    
}

?>