<?php
    
if(!isset($_GET['lang'])) {

    $test = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    if ($test == "pl") {
        $lang = "pl";
    }
    else {
        $lang = "en";
    }

    header('Location: ' . $lang);
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
    
    <meta property="og:image" content="dist/img/ogimage.jpg" />

    <!-- Text/css -->
    <link href="dist/bundle.css?version=1.5" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="dist/img/favicon.png">
    
    <!-- Title -->
    <title>ButtonStudio.net</title>

</head>

<body class="nojs">

    <script>document.body.classList.remove('nojs');</script>

    <!--
    
    *    Proudly supported by:
    *		unsplash.com
    *       getbootstrap.com
    *		google.com/fonts
    *		jquery.com
    *       daneden.github.io/animate.css/
    *       fontawesome.io
    
    -->

    <!-- Section Preloader -->

    <div id="preloader">

        <div class="loader"></div>
        
    </div>
    
    <!-- Navbar -->
    
    <nav id="navbar">

        <h4 class="logo hidden-xs"><a href="./">&#60;ButtonStudio.net /&#62;</a></h4>
	
		<div class="switch">
			<input type="checkbox" name="lang" id="lang">
			<a href="en">EN</a><a href="pl" >PL</a>
		</div>

    </nav>
    
    <!-- Section Intro -->
    
    <section id="intro">
       
		<div class="container-floud">
                   
            <div class="banner">
                
                <div class="content">

                    <?php if ($lang != "pl"): ?>
                       
                        <p>var Hi = function() {</p>
                        <p class="tab">I’m Simon</p>
                        <p class="tab">Front-end developer</p>
                        <p>};</p> 
                          
                    <?php else: ?>
                       
                        <p>var Hi = function() {</p>
                        <p class="tab">Jestem Szymon</p>
                        <p class="tab">Front-end developer</p>
                        <p>};</p> 

                    <?php endif; ?>

                </div>

            </div>
            
        </div>
        
    </section>
    
    <!-- Section About -->

    <section id="about">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    <div class="about">

                        <header class="header">

                            <div class="icon">
                                <i class="fa fa-user-secret" aria-hidden="true"></i>
                            </div>

                            <?php if ($lang != "pl"): ?>

                                <h6>Personal</h6>
                                <h4 class="typing">Who the f!@#?</h4>

                            <?php else: ?>

                                <h6>O mnie</h6>
                                <h4 class="typing">Że kto?</h4>

                            <?php endif; ?>

                        </header>

                        <?php if ($lang != "pl"): ?>

                            <p class="content">
                                My name is Simon, I'm graduated of upper secondary school for IT technician. <br> 
                                Now I deal with the design of user interfaces (UIs) for web and web development.<br><br>
                                Programming, designing and creating a website is my biggest hobby. I do it with passion for that I always try to make height quality projects. Despite my young age and little experience, I could surprise you because I do it for the love of coding.

                            </p>

                        <?php else: ?>

                            <p class="content">
                                Nazywam się Szymon, jestem absolwentem technikum na kierunku informatyka.<br> 
                                Zajmuję się projektowaniem interfejsów użytkownika (UI) oraz tworzeniem stron internetowych. <br>
                                <br>
                                Programowanie, projektowanie i tworzenie stron internetowych to moje największe hobby. Robię to z pasją, zawsze staram się tworzyć projekty o wysokiej jakości. Pomimo młodego wieku i niewielkiego doświadczenia mogę cię zaskoczyć, ponieważ robię to z miłości do kodowania.
                            </p>

                        <?php endif; ?>

                        <footer class="footer">

                            <?php if ($lang != "pl"): ?>

                                <a class="button scrollTo" href="#contact">Contact</a>

                            <?php else: ?>

                                <a class="button scrollTo" href="#contact">Kontakt</a>

                            <?php endif; ?>
                        </footer>

                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    <blockquote class="quote">

                        <header class="header">

                            <div class="icon">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>

                        </header>

                        <?php if ($lang != "pl"): ?>

                            <p class="content">Creativity is intelligence having fun.</p>

                            <footer class="footer">
                                <h6>Albert Einstein</h6>
                            </footer>

                        <?php else: ?>

                            <p class="content">Kreatywność jest zabawą inteligencji.</p>

                            <footer class="footer">
                                <h6>Albert Einstein</h6>
                            </footer>

                        <?php endif; ?>

                    </blockquote>

                    <div class="image">

                        <header class="header">

                            <div class="icon">
                                <i class="fa fa-picture-o" aria-hidden="true"></i>
                            </div>

                        </header>

                        <footer class="footer">

                            <?php if ($lang != "pl"): ?>

                                <h6>Image</h6>

                            <?php else: ?>

                                <h6>Zdjęcie</h6>

                            <?php endif; ?>

                            <h4>Szymon "Button" Guzik</h4>

                        </footer>

                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    <div class="about">

                        <header class="header">

                            <div class="icon">
                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                            </div>

                            <?php if ($lang != "pl"): ?>

                                <h6>Work</h6>
                                <h4 class="typing">What I do?</h4>

                            <?php else: ?>

                                <h6>Praca</h6>
                                <h4 class="typing">Czym się zajmuje?</h4>

                            <?php endif; ?>

                        </header>

                        <?php if ($lang != "pl"): ?>

                            <p class="content">
                                I design and create visual form of website (front-end).<br>
                                I make a website user interface with step by step starting at devise template and ending at full functionally website.<br>
                                <br>
                                I use many of the latest technologies like HTML 5, CSS 3, JavaScript ES6, responsive web design, so that every project what I made is modern and perfectly presented to the highest standards like W3C.
                            </p>

                            <?php else: ?>

                            <p class="content">
                                Projektuje i wykonuje strony internetowe od strony wizualnej (front-end'u).<br>
                                Tworzę interfejsy użytkownika krok po kroku zaczynając od wymyślenia szablonu i kończąc na wpełni funkcjonalnej stronie www.<br>
                                <br><br>
                                Używam najnowszych technolgii takich jak HTML 5, CSS 3, JavaScript ES6, responsive web design, dlatego dlatego też każdy projekt jest nowoczesny oraz jest dostosowany do najwyższych standardów takich jak W3C.
                            </p>

                        <?php endif; ?>

                        <footer class="footer">

                            <?php if ($lang != "pl"): ?>

                                <a class="button scrollTo" href="#portfolio">Portfolio</a>

                            <?php else: ?>

                                <a class="button scrollTo" href="#portfolio">Portfolio</a>

                            <?php endif; ?>

                        </footer>

                    </div>

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

                    <div class="item">

                        <header class="header">

                            <img src="dist/img/portfolio_ecommerce.jpg" alt="Page 3">
                            <div class="icon">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>

                        </header>

                        <footer class="footer">

                            <?php if ($lang != "pl"): ?>

                                <h6>React application</h6>
								<h4><a href="https://github.com/Ghornon/Ecommerce-app">Ecommerce app</a></h4>

                            <?php else: ?>

                                <h6>Aplikacja napisana w React</h6>
								<h4><a href="https://github.com/Ghornon/Ecommerce-app">Sklep internetowy</a></h4>

                            <?php endif; ?>

                        </footer>

                    </div>

                </div>

				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">

					<div class="item">

						<header class="header">

							<img src="dist/img/portfolio_nowajaga.jpg" alt="Page 3">
							<div class="icon">
								<i class="fa fa-cutlery" aria-hidden="true"></i>
							</div>

						</header>

						<footer class="footer">

							<?php if ($lang != "pl"): ?>

								<h6>Website of restaurant</h6>

							<?php else: ?>

								<h6>Strona internetowa restauracji</h6>

							<?php endif; ?>

							<h4><a href="https://nowajaga.pl/">nowajaga.pl</a></h4>

						</footer>

					</div>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                    <div class="about">

                        <header class="header">

                            <div class="icon">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </div>

                            <?php if ($lang != "pl"): ?>

                                <h6>Portfolio</h6>
                                <h4 class="typing">My projects</h4>

                            <?php else: ?>

                                <h6>Portfolio</h6>
                                <h4 class="typing">Moje projekty</h4>

                            <?php endif; ?>

                        </header>

                        <?php if ($lang != "pl"): ?>

                            <p class="content">
                                A few selected projects created by me.
                            </p>
                            <p class="github">See also my <a href="https://github.com/Ghornon">github <i class="fa fa-github" aria-hidden="true"></i></a> repositories.</p>

                            <?php else: ?>

                            <p class="content">
                                Kilka wybranych projektów stworzonych przeze mnie.
                            </p>
                            <p class="github">Zobacz również moje repozytoria na <a href="https://github.com/Ghornon">github <i class="fa fa-github" aria-hidden="true"></i></a>.</p>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

            <!-- Second -->

            <div class="row">

				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
					
					<div class="item">

						<header class="header">

							<img src="dist/img/portfolio_szplotka.jpg" alt="Page 3">
							<div class="icon">
								<i class="fa fa-picture-o" aria-hidden="true"></i>
							</div>

						</header>

						<footer class="footer">

							<?php if ($lang != "pl"): ?>

								<h6>Website of therapy cabinet</h6>

							<?php else: ?>

								<h6>Strona internetowa gabinetu</h6>

							<?php endif; ?>

							<h4><a href="http://szplotka.pl/">Szplotka.pl</a></h4>

						</footer>

						</div>

                </div>

				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">

					<div class="item">

						<header class="header">

							<img src="dist/img/portfolio_buttonstudio.jpg" alt="Page 1">
							<div class="icon">
								<i class="fa fa-camera" aria-hidden="true"></i>
							</div>

						</header>

						<footer class="footer">

							<?php if ($lang != "pl"): ?>

								<h6>My old website</h6>

							<?php else: ?>

								<h6>Moja dawna strona www</h6>

							<?php endif; ?>

							<h4><a href="http://portfolio.buttonstudio.net/buttonstudio/">Button Studio</a></h4>

						</footer>

					</div>

                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">

                    <div class="item">

                        <header class="header">

                            <img src="dist/img/portfolio_loremipsum.jpg" alt="Page 3">
                            <div class="icon">
                                <i class="fa fa-paint-brush" aria-hidden="true"></i>
                            </div>

                        </header>

                        <footer class="footer">

                            <?php if ($lang != "pl"): ?>

                                <h6>Static website</h6>

                            <?php else: ?>

                                <h6>Statyczna strona www</h6>

                            <?php endif; ?>

                            <h4><a href="http://portfolio.buttonstudio.net/loremipsum/">Lorem ipsum</a></h4>

                        </footer>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">

                    <div class="item">

                        <header class="header">

                            <img src="dist/img/portfolio_zwyrtany.jpg" alt="Page 4">
                            <div class="icon">
                                <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                            </div>

                        </header>

                        <footer class="footer">

                            <?php if ($lang != "pl"): ?>

                                <h6>Simple blog</h6>

                            <?php else: ?>

                                <h6>Prosty blog</h6>

                            <?php endif; ?>

                            <h4><a href="http://preview.buttonstudio.net/zwyrtany_v2/">Zwyrtany</a></h4>

                        </footer>

                    </div>

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
                        
                        <h3>Designer</h3>
                        <i class="fa fa-paint-brush pulse" aria-hidden="true"></i>
                       
                        <?php if ($lang != "pl"): ?>
                           
                            <p>Designing is a challenge for human creativity. The task of a designer is not just to create a drawing or a web page template, but to address the needs of the market and the customer so as to create a cohesive whole. Designing something that is supposed to be effecient and eye-friendly is a challenge.</p>
                        
                        <?php else: ?>
                        
                            <p>Projektowanie jest wyzwaniem dla ludzkiej kreatywności. Zadaniem designer'a nie jest tylko stworzeniem rysunku czy też szablonu strony internetowej, ale przewidzenie wymagań rynku i klienta tak aby stworzyć między nim spójną całość. Zaprojektowanie czegoś co ma być efektywne i przyjazne dla oka jest nie lada wyzwaniem.</p>
                        
                        <?php endif; ?>
                        
                    </div>
                    
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                   
                    <div class="description">
                       
                        <h3>Developer</h3>
                        <i class="fa fa-code pulse" aria-hidden="true"></i>
                        
                        <?php if ($lang != "pl"): ?>
                        
                            <p>A brand is only as successful as it's implementation, great products should not be defined by design alone, but also by functionality and great user experience. Developers need to strive for clean, elegant and efficient code to assure long-term sustainability and keep software's maintainability.</p>
                        
                        <?php else: ?>
                        
                            <p>Marka jest tylko tak skuteczna, jak jej wdrożenie a produkty nie powinny być definiowane przez samego projektanta, ale również przez funkcjonalność i duże doświadczenie użytkowników. Deweloperzy muszą dążyć do czystego, eleganckiego i skutecznego kodu, aby zapewnić długoterminową stabilność i zachować jego poprawność.</p>
                        
                        <?php endif; ?>
                        
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
                        
                        <?php if ($lang != "pl"): ?>
                        
                            <h3>Contact</h3>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <p>
                                You may use the contact form or<br>directly if that's how you that prefer.<br>
								<span class="reverse">ten.oidutsnottub@tcatnoc</span><br>
                                Say hello!<br>
                                I'd <i class="fa fa-heart-o pulse" aria-hidden="true"></i><span class="sr-only">love</span> to hear about your project
                            </p>
                        
                        <?php else: ?>
                            
                            <h3>Kontakt</h3>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <p>
                                Możesz użyć formularza kontaktowego lub<br>wysłać maila bezpośrednio, jeśli tak właśnie wolisz.<br>
								<span class="reverse">ten.oidutsnottub@tcatnoc</span><br>
                                Powiedz cześć!<br>
                                Chciałbym usłyszeć <i class="fa fa-heart-o pulse" aria-hidden="true"></i><span class="sr-only">o</span> Twoim projekcie 
                            </p>
                        
                        <?php endif; ?>
                        
                    </div>
                    
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    
                    <form action="mail.php?lang=<?php echo $lang ?>" method="post" class="contact">
                        
                        <?php if ($lang != "pl"): ?>
                           
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
                                    <button class="button" id="send" type="submit">Send</button>
                                </div>

                            </div>
                        
                        <?php else: ?>
                        
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
                                    <button class="button" id="send" type="submit">Wyślij</button>
                                </div>

                            </div>
                        
                        <?php endif; ?>
                        
                    </form>
                    
                </div>
                
            </div>
            
        </div>
        
        <?php if ($lang != "pl"): ?>
        
            <footer id="footer"><a href="./">ButtonStudio.net</a> <?php call_user_func(function($y){$c=date('Y');echo $y.(($y!=$c)?'-'.$c:'');}, 2017); ?> &copy; All rights reserved!</footer>
        
        <?php else: ?>
        
            <footer id="footer"><a href="./">ButtonStudio.net</a> <?php call_user_func(function($y){$c=date('Y');echo $y.(($y!=$c)?'-'.$c:'');}, 2017); ?> &copy; Wszelkie prawa zastrzeżone!</footer>
        
        <?php endif; ?>
        
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
    
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script src="dist/bundle.js"></script>

</body>

</html>
