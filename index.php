<?php
    
if(!isset($_GET['lang'])) {

    $test = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    if ($test == "pl") {
        $lang = "pl";
    }
    else {
        $lang = "en";
    }

    header('Location: ?lang='.$lang);
    exit();

} else {

    if ($_GET['lang'] == "pl") {
        $lang = "pl";
    }
    else {
        $lang = "en";
    }

}

//require_once 'statistics/entrance.php';

?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="keywords" content="button, studio, net, web, programer, designer, front-end, developer">
    <meta name="description" content="ButtonStudio.net - Designer, front-end developer">
    
    <meta property="og:image" content="images/ogimage.jpg" />

    <!-- Text/css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Hind|Montserrat:700|Righteous" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    
    
    <!-- Title -->
    <title>ButtonStudio.net</title>

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
        
        <div class="switch">
            <input type="checkbox" name="lang" id="lang">
            <a href="?lang=en">EN</a><a href="?lang=pl" >PL</a>
        </div>

    </nav>
    
    <!-- Section Intro -->
    
    <section id="intro">
       
        <div class="container-floud">
                   
            <div class="banner">
                
                <div class="content">

                    <?php if ($lang != "pl") { ?>
                       
                        <p>var Hi = function() {</p>
                        <p class="tab">I’m Simon</p>
                        <p class="tab">Front-end developer</p>
                        <p>};</p> 
                          
                    <?php } else { ?>
                       
                        <p>var Hi = function() {</p>
                        <p class="tab">Jestem Szymon</p>
                        <p class="tab">Front-end developer</p>
                        <p>};</p> 

                    <?php } ?>

                </div>

            </div>
            
        </div>
        
    </section>
    
    <!-- Section About -->

    <section id="about">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    <article class="about">

                        <header class="header">

                            <div class="icon">
                                <i class="fa fa-user-secret" aria-hidden="true"></i>
                            </div>

                            <?php if ($lang != "pl") { ?>

                                <h6>Personal</h6>
                                <h4 class="typing">Who the f!@#?</h4>

                            <?php } else { ?>

                                <h6>O mnie</h6>
                                <h4 class="typing">Że kto?</h4>

                            <?php } ?>

                        </header>

                        <?php if ($lang != "pl") { ?>

                            <p class="content">
                                My name is Szymon, I'm a student upper secondary school.<br> 
                                Besides, I'm designer of user interfaces (UIs) and front-end developer.<br>
                                <br>
                                Programming and creating websites are my passion and always try to make a high quality website.<br>
                                Despite my young age and little experience, I could surprise you of my skills and passion.
                            </p>

                        <?php } else { ?>

                            <p class="content">
                                Nazywam się Szymon i jestem uczniem technikum.<br> 
                                Poza tym zajmuje się projektowaniem oraz tworzeniem stron internetowych.<br>
                                <br>
                                Tworzenie witryn internetowych jest moją pasją dlatego też zawsze staram się tworzyć strony na wysokim poziomie. Pomimo mojego młodego wieku i niewielkiego doświadczenie, mogę zaskoczyć cię moimi umiejętnościami i pasją.
                            </p>

                        <?php } ?>

                        <footer class="footer">

                            <?php if ($lang != "pl") { ?>

                                <a class="button scrollTo" href="#contact">Contact</a>

                            <?php } else { ?>

                                <a class="button scrollTo" href="#contact">Kontakt</a>

                            <?php } ?>
                        </footer>

                    </article>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    <article class="quote">

                        <header class="header">

                            <div class="icon">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>

                        </header>

                        <?php if ($lang != "pl") { ?>

                            <p class="content">Creativity is intelligence having fun.</p>

                            <footer class="footer">
                                <h6>Albert Einstein</h6>
                            </footer>

                        <?php } else { ?>

                            <p class="content">Kreatywność jest zabawą inteligencji.</p>

                            <footer class="footer">
                                <h6>Albert Einstein</h6>
                            </footer>

                        <?php } ?>

                    </article>

                    <article class="image">

                        <header class="header">

                            <div class="icon">
                                <i class="fa fa-picture-o" aria-hidden="true"></i>
                            </div>

                        </header>

                        <footer class="footer">

                            <?php if ($lang != "pl") { ?>

                                <h6>Image</h6>

                            <?php } else { ?>

                                <h6>Zdjęcie</h6>

                            <?php } ?>

                            <h4>Szymon "Button" Guzik</h4>

                        </footer>

                    </article>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    <article class="about">

                        <header class="header">

                            <div class="icon">
                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                            </div>

                            <?php if ($lang != "pl") { ?>

                                <h6>Work</h6>
                                <h4 class="typing">What I do?</h4>

                            <?php } else { ?>

                                <h6>Praca</h6>
                                <h4 class="typing">Czym się zajmuje?</h4>

                            <?php } ?>

                        </header>

                        <?php if ($lang != "pl") { ?>

                            <p class="content">
                                I design and create visual forms of websites (front-end). I make a website user interface starting from the drawing on the sheet and finishing on the full functionality website.<br>
                                <br>
                                The websites, which I do use the latest technology, so that every project what I made was perfectly presented to the highest standards like W3C.
                            </p>

                            <?php } else { ?>

                            <p class="content">
                                Projektuje i wykonuje strony internetowe od strony wizualnej (front-end). Tworzę interfejsy użytkownika zaczynając od rysunku na kartce papieru, kończąc na w pełni funkcjonalnej stronie www.<br>
                                <br>
                                Strony wykonane przeze mnie wykorzystują najnowsze technologie dlatego też każdy projekt jest dostosowany do najwyższych standardów takich jak W3C.
                            </p>

                        <?php } ?>

                        <footer class="footer">

                            <?php if ($lang != "pl") { ?>

                                <a class="button scrollTo" href="#portfolio">Portfolio</a>

                            <?php } else { ?>

                                <a class="button scrollTo" href="#portfolio">Portfolio</a>

                            <?php } ?>

                        </footer>

                    </article>

                </div>

            </div>

        </div>

    </section>

    <!-- Portfolio -->

    <section id="portfolio">

        <div class="container">

            <!-- First -->

            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">

                    <article class="image">

                        <header class="header">

                            <img src="images/portfolio_1.jpg" alt="Page 1">
                            <div class="icon">
                                <i class="fa fa-camera" aria-hidden="true"></i>
                            </div>

                        </header>

                        <footer class="footer">

                            <?php if ($lang != "pl") { ?>

                                <h6>Portfolio / Resume</h6>

                            <?php } else { ?>

                                <h6>Portfolio</h6>

                            <?php } ?>

                            <h4><a href="portfolio/old/" target="_blank">Button Studio</a></h4>

                        </footer>

                    </article>

                </div>


                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">

                    <article class="image">

                        <header class="header">

                            <img src="images/portfolio_2.jpg" alt="Page 3">
                            <div class="icon">
                                <i class="fa fa-paint-brush" aria-hidden="true"></i>
                            </div>

                        </header>

                        <footer class="footer">

                            <?php if ($lang != "pl") { ?>

                                <h6>Portfolio / Blog</h6>

                            <?php } else { ?>

                                <h6>Wizytówka / Blog</h6>

                            <?php } ?>

                            <h4><a href="portfolio/loremipsum/" target="_blank">Lorem ipsum</a></h4>

                        </footer>

                    </article>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                    <article class="about">

                        <header class="header">

                            <div class="icon">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </div>

                            <?php if ($lang != "pl") { ?>

                                <h6>Portfolio</h6>
                                <h4 class="typing">My projects</h4>

                            <?php } else { ?>

                                <h6>Portfolio</h6>
                                <h4 class="typing">Moje projekty</h4>

                            <?php } ?>

                        </header>

                        <?php if ($lang != "pl") { ?>

                            <p class="content">
                                A few selected projects created by me.
                            </p>

                            <?php } else { ?>

                            <p class="content">
                                Kilka wybranych projektów stworzonych przeze mnie.
                            </p>

                        <?php } ?>

                    </article>

                </div>

            </div>

            <!-- Second -->

            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                    <article class="quote">

                        <header class="header">

                            <div class="icon">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>

                        </header>

                        <?php if ($lang != "pl") { ?>

                            <p class="content">Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while. That's because they were able to connect experiences they've had and synthesize new things.</p>

                            <footer class="footer">
                                <h6>Steve Jobs</h6>
                            </footer>

                        <?php } else { ?>

                            <p class="content">Kreatywność to po prostu łączenie rzeczy. Kiedy pytasz kreatywnych ludzi, jak oni coś zrobili, czują się trochę winni, ponieważ tak naprawdę nie zrobili tego, po prostu coś zobaczyli. Po pewnym czasie wydawało im się to oczywiste. To dlatego, że potrafili połączyć doświadczenia, które mieli i syntetyzować nowe rzeczy.</p>

                            <footer class="footer">
                                <h6>Steve Jobs</h6>
                            </footer>

                        <?php } ?>

                    </article>

                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">

                    <article class="image">

                        <header class="header">

                            <img src="images/portfolio_3.jpg" alt="Page 3">
                            <div class="icon">
                                <i class="fa fa-picture-o" aria-hidden="true"></i>
                            </div>

                        </header>

                        <footer class="footer">

                            <?php if ($lang != "pl") { ?>

                                <h6>Website of therapy cabinet</h6>

                            <?php } else { ?>

                                <h6>Strona internetowa gabinetu</h6>

                            <?php } ?>

                            <h4><a href="http://preview.buttonstudio.net/szplotka.pl/" target="_blank">Szplotka.pl</a></h4>

                        </footer>

                    </article>

                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">

                    <article class="image">

                        <header class="header">

                            <img src="images/portfolio_4.jpg" alt="Page 4">
                            <div class="icon">
                                <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                            </div>

                        </header>

                        <footer class="footer">

                            <?php if ($lang != "pl") { ?>

                                <h6>RPG game front-page</h6>

                            <?php } else { ?>

                                <h6>Strona główna gry RPG</h6>

                            <?php } ?>

                            <h4><a href="portfolio/game/" target="_blank">Game</a></h4>

                        </footer>

                    </article>

                </div>

            </div>

        </div>

    </section>
    
    <!-- Section Developer & Designer -->
    
    <section id="offer">
       
        <div class="container">
           
            <div class="row">
               
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                   
                    <div class="description">
                        
                        <h3>Developer</h3>
                        <i class="fa fa-code pulse" aria-hidden="true"></i>
                        
                        <?php if ($lang != "pl") { ?>
                        
                            <p>A brand is only as successful as it's implementation, great products should not be defined by design alone, but also by functionality and great user experience. Developers need to strive for clean, elegant and efficient code to assure long-term sustainability and keep software's maintainability.</p>
                        
                        <?php } else { ?>
                        
                            <p>Marka jest tylko tak skuteczna, jak jej wdrożenie a produkty nie powinny być definiowane przez samego projektanta, ale również przez funkcjonalność i duże doświadczenie użytkowników. Deweloperzy muszą dążyć do czystego, eleganckiego i skutecznego kodu, aby zapewnić długoterminową stabilność i zachować jego poprawność.</p>
                        
                        <?php } ?>
                        
                    </div>
                    
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                   
                    <div class="description">
                       
                        <h3>Designer</h3>
                        <i class="fa fa-paint-brush pulse" aria-hidden="true"></i>
                       
                        <?php if ($lang != "pl") { ?>
                           
                            <p>Designing is a challenge for human creativity. The task of a designer is not just to create a drawing or a web page template, but to address the needs of the market and the customer so as to create a cohesive whole. Designing something that is supposed to be effecient and eye-friendly is a challenge.</p>
                        
                        <?php } else { ?>
                        
                            <p>Projektowanie jest wyzwaniem dla ludzkiej kreatywności. Zadaniem designer'a nie jest tylko stworzeniem rysunku czy też szablonu strony internetowej, ale przewidzenie wymagań rynku i klienta tak aby stworzyć między nim spójną całość. Zaprojektowanie czegoś co ma być efektywne i przyjazne dla oka jest nie lada wyzwaniem.</p>
                        
                        <?php } ?>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </section>
    
    <!-- Section Contact -->
    
    <section id="contact">
        
        <div class="container">
            
            <div class="row">
               
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                    <div class="description">
                        
                        <?php if ($lang != "pl") { ?>
                        
                            <h3>Contact</h3>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <p>
                                You may use the contact form or<br>directly if that's how you that prefer.<br>
                                <a href="mailto:contact@buttonstudio.net">contact@buttonstudio.net</a><br>
                                Say hello!<br>
                                I'd <i class="fa fa-heart-o pulse" aria-hidden="true"></i><span class="sr-only">love</span> to hear about your project
                            </p>
                        
                        <?php } else { ?>
                            
                            <h3>Kontakt</h3>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <p>
                                Możesz użyć formularza kontaktowego lub<br>wysłać maila bezpośrednio, jeśli tak właśnie wolisz.<br>
                                <a href="mailto:contact@buttonstudio.net">contact@buttonstudio.net</a><br>
                                Powiedz cześć!<br>
                                Chciałbym usłyszeć <i class="fa fa-heart-o pulse" aria-hidden="true"></i><span class="sr-only">o</span> Twoim projekcie 
                            </p>
                        
                        <?php } ?>
                        
                    </div>
                    
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                    <form action="mail.php?lang=<?php if ($lang != "pl") echo "EN"; else echo "PL"; ?>" method="post" class="contact">
                        
                        <?php if ($lang != "pl") { ?>
                           
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" id="name" name="name" placeholder="Name">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" id="email" name="email" placeholder="E-mail">
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-xs-12">
                                    <input type="text" id="subject" name="subject" placeholder="Subject">
                                </div>

                            </div>


                            <div class="row">

                                <div class="col-xs-12">
                                    <textarea name="message" id="message" rows="4" placeholder="Message"></textarea>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-xs-12">
                                    <button class="button" id="send">Send</button>
                                </div>

                            </div>
                        
                        <?php } else { ?>
                        
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" id="name" name="name" placeholder="Imie i nazwisko">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" id="email" name="email" placeholder="E-mail">
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-xs-12">
                                    <input type="text" id="subject" name="subject" placeholder="Temat">
                                </div>

                            </div>


                            <div class="row">

                                <div class="col-xs-12">
                                    <textarea name="message" id="message" rows="4" placeholder="Wiadomość"></textarea>
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-xs-12">
                                    <button class="button" id="send">Wyślij</button>
                                </div>

                            </div>
                        
                        <?php } ?>
                        
                    </form>
                    
                </div>
                
            </div>
            
        </div>
        
        <?php if ($lang != "pl") { ?>
        
            <footer id="footer"><a href="/">ButtonStudio.net</a> <?php call_user_func(function($y){$c=date('Y');echo $y.(($y!=$c)?'-'.$c:'');}, 2017); ?> &copy; All rights reserved!</footer>
        
        <?php } else { ?>
        
            <footer id="footer"><a href="/">ButtonStudio.net</a> <?php call_user_func(function($y){$c=date('Y');echo $y.(($y!=$c)?'-'.$c:'');}, 2017); ?> &copy; Wszelkie prawa zastrzeżone!</footer>
        
        <?php } ?>
        
    </section>
    
    <div id="modal-dialog" class="modal fade" role="dialog">
               
        <div class="modal-dialog">

            <div class="modal-content">
               
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                
                <div class="modal-body text-center"></div>
                
            </div>

        </div>

    </div>
    
    <?php if ( isset( $_GET['signin'] ) ) { ?>
    
        <div id="modal-dialog-signin" class="modal" role="dialog">

            <div class="modal-dialog">

                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Sign in</h4>
                    </div>

                    <div class="modal-body">

                        <form action="statistics/signin.php?signin=true" method="post" class="modal-form">

                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" name="login" placeholder="Login">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" name="email" placeholder="E-mail">
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-xs-12">
                                    <input type="password" name="password" placeholder="Password">
                                </div>

                            </div>

                            <div class="row">

                                <div class="col-xs-12">
                                    <button class="button">Sign in</button>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>    
       
    <?php } ?>
    
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>$('body').removeClass('nojs');</script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    
    <?php if ( isset( $_GET['signin'] ) ) { ?>
    
    <script>$('#modal-dialog-signin').modal('show');</script>
    
    <?php } ?>

</body>

</html>
