<?php

//Header location

if (!isset($_POST['name']) && !isset($_POST['email']) && !isset($_POST['subject']) && !isset($_POST['message'])) {

    header('Location: index.php');
    exit();

}

//Set Get's variables

if (isset($_GET['lang'])) {

    if ($_GET['lang'] == "pl")
        $lang = ($_GET['lang']);
    else 
        $lang = "en";

} else {
    $lang = "en";
}

if (isset($_GET['quiet'])) {

    if ($_GET['quiet'])
        $quiet = true;
    else
        $quiet = false; 

} else {
    $quiet = false;
}

//Functions

function check() {

    $validation = true;

    $name = $_POST['name'];

    if (strlen($name) < 3 && strlen($name) > 40 && ctype_alnum($name) == false) {
        $validation = false;
    }

    $subject = $_POST['subject'];

    if (strlen($subject) < 3 && strlen($subject) > 40 && ctype_alnum($subject) == false) {
        $validation = false;
    }

    $email = $_POST['email'];

    $email_filter = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (filter_var($email_filter, FILTER_SANITIZE_EMAIL == false) || ($email_filter != $email)) {
        $validation = false;
    }

    $message = $_POST['message'];

    if (strlen($message) < 10) {
        $validation = false;
    }

    if ($validation)
        return true;
    else
        return false;

}

function respond( $type, $mute, $lang ) {

    if ( $mute ) {

        if ( $type )
            echo "true";
        else
            echo "false";

    } else {

        if ( $lang != "pl" ) {

            if ( $type )
                echo "Message sent correctly!";
            else
                echo "Message didn't send correctly! Something went wrong!";

        } else {

            if ( $type )
                echo "Wiadomość została wysłana poprawnie!";
            else
                echo "Wiadomość nie została wysłana poprawnie! Coś poszło nie tak!";

        }

    }
         
}
    
//Main

if ( check() ) {

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "<br>";
    $subject = $_POST['subject'];
    $from = "Message from: <br>Email: " . $_POST['email'] . "<br>Name: " . $_POST['name'] . "<br>----------------------------------------------<br>";
    $message = $from . $_POST['message'];

    if( @mail('contact@buttonstudio.net', $subject, $message, $headers) ) {

        respond(true, $quiet, $lang);

    } else {

        respond(false, $quiet, $lang);

    }


} else {

    respond(false, $quiet, $lang);

}

//respond(true, $quiet, $lang);

?>