<?php include 'sendMail.php';?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.1/css/line.css">
        
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>William Pennebaker</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="" class="nav__logo">William P.</a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="#home" class="nav__link">
                                <i class="uil uil-home nav__icon"></i> Home
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class="uil uil-user nav__icon"></i> About
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#qualification" class="nav__link">
                                <i class="uil uil-briefcase nav__icon"></i> Qualifications
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#portfolio" class="nav__link">
                                <i class="uil uil-book nav__icon"></i> Portfolio
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">
                                <i class="uil uil-message nav__icon"></i> Contact
                            </a>
                        </li>
                    </ul>
                    <i class="uil uil-times nav__close" id="nav-close"></i>
                </div>

                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="uil uil-moon change-theme" id="theme-button"></i>
                    <div class="nav__toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__content grid">
                        <div class="home__social">
                            <a href="https://www.linkedin.com/in/william-pennebaker/" target="_blank" class="home__social-icon">
                                <i class="uil uil-linkedin"></i>
                            </a>
                            <a href="https://github.com/WilliamPennebaker" target="_blank" class="home__social-icon">
                                <i class="uil uil-github"></i>
                            </a>
                            <a href="https://twitter.com/william_aqua" target="_blank" class="home__social-icon">
                                <i class="uil uil-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com/william_pennebaker/" target="_blank" class="home__social-icon">
                                <i class="uil uil-instagram"></i>
                            </a>
                        </div>
                        <div class="home__img">
                            <img src="assets/img/IMG_2587.jpeg" alt="" class="home__img">
                        </div>

                        <div class="home__data">
                            <h1 class="home__title">Hi, I'm William Pennebaker</h1>
                            <h3 class="home__subtitle">Software Engineer</h3>
                            <p class="home__description">I'm a passionate developer that enjoys creating useful things for the internet.</p>
                            <a href="mailto:wpennebaker@hotmail.com" class="button button--flex">
                                Contact Me &nbsp;<i class="uil uil-message" button__icon></i>
                            </a>
                        </div>
                    </div>
                    <div class="home__scroll">
                        <a href="" class="home__scroll-button button--flex"></a>
                            <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                            <span class="home__scroll-name">Scroll down</span>
                            <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <h2 class="section__title">About Me</h2>
                <span class="section__subtitle">My introduction</span>

                <div class="about__container container grid">
                    <img src="assets/img/IMG_3097.JPG" alt="" class="about__img">

                    <div class="about__data">
                        <p class="about__description">I'm a Software Engineer with 1 year of experience. 
                            I recently graduated from Florida International University with my Bachelors in CS and I'm currently persuing my Masters in Computer Science.
                        </p>
                        <p class="about__description">
                            I'm looking for a New-Grad or Full-Time position as a Software Engineer or Developer.
                        </p>
                            

                        <div class="about__info">
                            <div>
                                <span class="about__info-title"></span>
                                <span class="about__info-name"></span>
                            </div>
                        </div>

                        <div class="about__buttons">
                            <a href="assets/pdf/WilliamPennebaker2022_pdf.pdf" class="button button--flex">
                                Resume download &nbsp;<i class="uil uil-file-download" button__icon></i>
                            </a>
                        </div>

                    </div>
                </div>
            </section>

            <!--==================== SKILLS ====================-->
            <!--<section class="skills section" id="skills"></section>-->

            <!--==================== QUALIFICATION ====================-->
            <section class="qualification section" id="qualification">
                <h2 class="section__title">Qualifications</h2>
                <span class="section__subtitle">Experience and Education</span>

                <div class="qualification__container container grid">
                    <div class="qualification__content">
                        <h2 class="qualification__title">
                            <i class="uil uil-briefcase-alt qualification__title-icon"></i>
                            Work Experience
                        </h2>

                        <div class="grid">

                            <div class="qualification__data">
                                <h3 class="qualification__area">Software Engineer Intern</h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class="uil uil-briefcase-alt qualification__icon"></i>
                                        Chevron - Houston, TX
                                    </span>

                                    <span class="qualification__work">
                                        <i class="uil uil-calendar-alt"></i>
                                        May 2022 - Aug 2022
                                    </span>
                                </div>
                            </div>

                            <div class="qualification__data">
                                <h3 class="qualification__area">DevSecOps Software Engineer</h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class="uil uil-briefcase-alt qualification__icon"></i>
                                        Assurant - Miami, FL
                                    </span>

                                    <span class="qualification__work">
                                        <i class="uil uil-calendar-alt"></i>
                                        May 2020 - Mar 2021
                                    </span>
                                </div>
                            </div>

                            <div class="qualification__data">
                                <h3 class="qualification__area">Learning Assistant</h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class="uil uil-briefcase-alt qualification__icon"></i>
                                        Florida International University - Miami, FL
                                    </span>

                                    <span class="qualification__work">
                                        <i class="uil uil-calendar-alt"></i>
                                        Jan 2019 - May 2020
                                    </span>
                                </div>
                            </div>

                            
                        </div>
                    </div>

                    <div class="qualification__content">
                        <h2 class="qualification__title">
                            <i class="uil uil-book qualification__title-icon"></i>
                            Education
                        </h2>

                        <div class="grid">
                            <div class="qualification__data">
                                <h3 class="qualification__area">Masters in Computer Science</h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class="uil uil-book-alt qualification__icon"></i>
                                        Florida International University - Miami, FL
                                        Current GPA: 3.72
                                    </span>

                                    <span class="qualification__work">
                                        <i class="uil uil-calendar-alt"></i>
                                        Spring 2023
                                    </span>
                                </div>
                            </div>

                            <div class="qualification__data">
                                <h3 class="qualification__area">Bachelors in Computer Science</h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class="uil uil-book-alt qualification__icon"></i>
                                        Florida International University - Miami, FL
                                        GPA: 3.63
                                    </span>

                                    <span class="qualification__work">
                                        <i class="uil uil-calendar-alt"></i>
                                        Aug 2021
                                    </span>
                                </div>
                            </div>

                            <div class="qualification__data">
                                <h3 class="qualification__area">Associates in Computer Science</h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class="uil uil-book-alt qualification__icon"></i>
                                        Broward College - Davie, FL
                                        GPA: 3.5
                                    </span>

                                    <span class="qualification__work">
                                        <i class="uil uil-calendar-alt"></i>
                                        Apr 2018
                                    </span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PORTFOLIO ====================-->
            <section class="portfolio section" id="portfolio">
                <h2 class="section__title">Portfolio</h2>
                <span class="section__subtitle">Most Recent Work<br>
                Check my 
                <a href="https://github.com/WilliamPennebaker" target="_blank" style="color:blue;">
                    Github
                </a>
                for more.
                </span>
                <div class="portfolio__container container swiper mySwiper">
                    <div class="swiper-wrapper">
                        <!--1-->
                        <div class="portfolio__content grid swiper-slide">
                            <img src="assets/img/portfolio1.jpg" alt="" class="portfolio__img">
                            <div class="portfolio__data">
                                <h3 class="portfolio__title">This website!</h3>
                                <p class="portfolio__description">My own personal website created with HTML, CSS and Javascript to showcase myself and work/future work.</p>
                                <p class="portfolio__description">Planned projects include Static React page, a MERN stack app, and a PHP page loading MySQL.</p>
                                <!--<a href="./" class="button button--flex button--small portfolio__button">
                                    Demo
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>-->
                            </div>
                        </div>

                        <!--2-->
                        <div class="portfolio__content grid swiper-slide">
                            <img src="assets/img/portfolio1.jpg" alt="" class="portfolio__img">
                            <div class="portfolio__data">
                                <h3 class="portfolio__title">Static React Page</h3>
                                <p class="portfolio__description">This is a placeholder for a Static React page project.</p>
                                <p class="portfolio__description">Project plan: None yet.</p>
                                <a href="" class="button button--flex button--small portfolio__button">
                                    Demo
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>

                        <!--3-->
                        <div class="portfolio__content grid swiper-slide">
                            <img src="assets/img/portfolio1.jpg" alt="" class="portfolio__img">
                            <div class="portfolio__data">
                                <h3 class="portfolio__title">Mern Stack App</h3>
                                <p class="portfolio__description">This is a placeholder for a Mern stack app.</p>
                                <p class="portfolio__description">Project plan: General idea is to have a landing page that loads news from a custom forums page.</p>
                                <a href="" class="button button--flex button--small portfolio__button">
                                    Demo
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>

                        <!--4-->
                        <div class="portfolio__content grid swiper-slide">
                            <img src="assets/img/portfolio1.jpg" alt="" class="portfolio__img">
                            <div class="portfolio__data">
                                <h3 class="portfolio__title">PHP loading MySQL</h3>
                                <p class="portfolio__description">This is a placeholder for a PHP page loading MySQL.</p>
                                <p class="portfolio__description">Project plan: PHP page loading some information from a MySQL database. ie, Highscore page.</p>
                                <a href="" class="button button--flex button--small portfolio__button">
                                    Demo
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>



                    </div>
                    <div class="swiper-button-next">
                        <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">
                <h2 class="section__title">Contact Me</h2>
                <span class="section__subtitle">Get in touch</span>
                
                <div class="contact__container container grid">
                    <div class="contact__info">
                        <div class="contact__information">
                            <i class="uil uil-envelope contact__icon"></i>
                            <div>
                                <h3 class="contact__title">Email</h3>
                                <span class="contact__subtitle">
                                    <a href="mailto:wpennebaker@hotmail.com">wpennebaker@hotmail.com</a>
                                </span>
                            </div>
                        </div>
                        
                        <div class="contact__information">
                            <i class="uil uil-map-marker contact__icon"></i>
                            <div>
                                <h3 class="contact__title">Location</h3>
                                <span class="contact__subtitle">Fort Lauderdale, Florida</span>
                            </div>
                        </div>
                    </div>

                    <form action="" class="contact__form grid" method="POST">
                        <!--<div class="contact__inputs grid">
                            <div class="contact__content">
                                <label for="" class="contact__label">First Name</label>
                                <input type="text" class="contact__input">
                            </div>
                            <div class="contact__content">
                                <label for="" class="contact__label">Last Name</label>
                                <input type="text" class="contact__input">
                            </div>
                        </div> -->
                        <div class="contact__content">
                            <label for="" class="contact__label">Full Name</label>
                            <input name="name" type="text" class="contact__input">
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact__label">Email</label>
                            <input name="email" type="email" class="contact__input">
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact__label">Subject</label>
                            <input name="subject" type="subject" class="contact__input">
                        </div>
                        <div class="contact__content">
                            <label for="" class="contact__label">Message</label>
                            <textarea name="message" id="" cols="0" rows="7" class="contact__input" style="resize: none;"></textarea>
                        </div>
                        <div>
                            <button type="submit" name="submit" class="button button--flex">
                                <?php
                                    if(isset($_POST['submit'])) {
                                        $mailto = "wpennebaker@hotmail.com";
                                        $name = $_POST['name'];
                                        $fromEmail = $_POST['email'];
                                        $subject = $_POST['subject'];
                                        $message = $_POST['message'];
                                        $header = array("From: " . $fromEmail, "Reply-To: " . $fromEmail, "X-Mailer: PHP/" . PHP_VERSION);
                                        $header = implode("\r\n", $header);
                                        mail($mailto, $subject, $message, $header);
                                    }
                                ?>
                                Send Message
                                <i class="uil uil-message button__icon"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <div class="footer__bg">
                <div class="footer__container container grid">
                <h1 class="footer__title">William Pennebaker</h1>
                <p class="footer__description">I'm William Pennebaker, a Software Engineer. Welcome to my website!</p>
                
                <div class="footer__social">
                    <a href="https://www.linkedin.com/in/william-pennebaker/" class="footer__link"><i class="uil uil-linkedin"></i></a>
                    <a href="https://github.com/WilliamPennebaker" class="footer__link"><i class="uil uil-github"></i></a>
                    <a href="https://twitter.com/william_aqua" class="footer__link"><i class="uil uil-twitter"></i></a>
                    <a href="https://www.instagram.com/william_pennebaker/" class="footer__link"><i class="uil uil-instagram"></i></a>
                </div>
                <p class="footer__copy">Crafted by William Pennebaker</p>
            </div>
            </div>
        </footer>
        
        <!--==================== SCROLL TOP ====================-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="uil uil-arrow-up scrollup__icon"></i>
        </a>

        <!--==================== SWIPER JS ====================-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--==================== MAIN JS ====================-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
