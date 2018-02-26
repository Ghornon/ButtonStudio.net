<?php

session_start();

if ( !isset( $_SESSION['loged'] ) ) {
    
    header( 'Location: ../index.php' );
    exit();
    
}

require_once 'show.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="keywords" content="button, studio, net, web, programer, designer, front-end, developer">
    <meta name="description" content="ButtonStudio.net - Designer, front-end developer">

    <!-- Text/css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Hind|Montserrat:700|Righteous" rel="stylesheet">
    <link href="../css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="shortcut icon" type="../image/png" href="images/favicon.png">

    <!-- Title -->
    <title>ButtonStudio.net - summary statistics</title>

</head>

<body class="nojs">

    <!------------------------------------------------------------------
    ╔═══╦╗───────────────╔╗───────╔╗───────────────────────────────╔╗───
    ║╔═╗║║───────────────║║─────╔╦╝╚╗──────────────────────────────║║───
    ║╚═╝║║╔══╦══╦══╦══╗╔═╝╠══╦═╗║╠╗╔╝╔══╦══╦══╦╗─╔╗╔╗╔╦╗─╔╗╔══╦══╦═╝╠══╗
    ║╔══╣║║║═╣╔╗║══╣║═╣║╔╗║╔╗║╔╗╬╝║║─║╔═╣╔╗║╔╗║║─║║║╚╝║║─║║║╔═╣╔╗║╔╗║║═╣
    ║║──║╚╣║═╣╔╗╠══║║═╣║╚╝║╚╝║║║║─║╚╗║╚═╣╚╝║╚╝║╚═╝║║║║║╚═╝║║╚═╣╚╝║╚╝║║═╣
    ╚╝──╚═╩══╩╝╚╩══╩══╝╚══╩══╩╝╚╝─╚═╝╚══╩══╣╔═╩═╗╔╝╚╩╩╩═╗╔╝╚══╩══╩══╩══╝
    ───────────────────────────────────────║║─╔═╝║────╔═╝║──────────────
    ───────────────────────────────────────╚╝─╚══╝────╚══╝──────────────
    
    *    Proudly supported by:
    *		unsplash.com
    *       getbootstrap.com
    *		google.com/fonts
    *		jquery.com
    *       daneden.github.io/animate.css/
    *       fontawesome.io
    
    ------------------------------------------------------------------->

    <!-- Section Preloader -->

    <div id="preloader">
        
        <div class="loader"></div>
        
    </div>
    
    <!-- Navbar -->
    
    <nav id="navbar">

        <h4 class="logo hidden-xs"><a href="/">&#60;ButtonStudio.net /&#62;</a></h4>

    </nav>
    
    <!-- Section Intro -->
    
    <section id="intro">
       
        <div class="container-floud">
                   
            <div class="banner">
                
                <div  class="content">
                       
                    <p>var Hi = function() {</p>
                    <p class="tab">Hello <?php echo $_SESSION['login']; ?></p>
                    <p class="tab">:)</p>
                    <p>};</p> 
                          

                </div>

            </div>
            
        </div>
        
    </section>

    <section id="about">

        <div class="container">

            <div class="row">
                             
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <article class="about" id="monthly">

                        <header class="header">

                            <div class="icon">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </div>
                            
                            <h6>Statistics</h6>
                            <h4 class="typing">Daily</h4>
                            
                        </header>
                        
                        <div  class="content" style="width: 100%;">
                            
                            <?php 
                                
                            show( "day" );
                                    
                            ?>
                            
                        </div>

                    </article>

                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <article class="about" id="monthly">

                        <header class="header">

                            <div class="icon">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </div>
                            
                            <h6>Statistics</h6>
                            <h4 class="typing">Weekly</h4>
                            
                        </header>
                        
                        <div  class="content" style="width: 100%;">
                            
                            <?php 
                                
                            show( "week" );
                                    
                            ?>
                            
                        </div>

                    </article>

                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <article class="about" id="monthly">

                        <header class="header">

                            <div class="icon">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </div>
                            
                            <h6>Statistics</h6>
                            <h4 class="typing">Monthly</h4>
                            
                        </header>
                        
                        <div  class="content" style="width: 100%;">
                            
                            <?php 
                                
                            show( "month" );
                                    
                            ?>
                            
                        </div>

                    </article>

                </div>
                
            </div>

        </div>

    </section>

</body>

</html>