<?php


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ibrahim | Junior Front-End and Software Developer">
    <link rel="icon" href="assets/img/title.png">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <title>Ibrahim | Junior Front-End and Software Developer</title>
</head>
<body>

    <!-- Header  -->
    <div class="header-section" id="main">
        <nav class="top-bar">            
            <a href="#" class="logo">Ib codes</a>       
            
            <ul>
                <li><a href="index.html" class="nav-text">Home</a></li>
                <li><a href="#about-section" class="nav-text">About</a></li>
                <li><a href="#porfolio-section" class="nav-text">Portfolio</a></li>
                <li><a href="#Contact" class="nav-text">Contact</a></li>
            </ul>
            
            <img src="assets/img/svg/bars-solid.svg" alt="icon" class="menu" onclick="openMenu()">
            
        </nav>
        
        <aside id="aside">
            <img src="assets/img/svg/share-square-regular.svg" id="img" alt="icon" height="20px" onclick="closeMenu()">
            <a href="index.html" class="nav-text-sidebar top">Home</a>
            <a href="#about-section" class="nav-text-sidebar">About</a>
            <a href="#porfolio-section" class="nav-text-sidebar">Portfolio</a>
            <a href="#Contact" class="nav-text-sidebar">Contact</a>
          </aside>

          
        <div class="caption-wrapper" >
            <div class="caption">
                <h1>Hi, I'm Ibrahim</h1>
                <h2>Front End and Software <span class="dev">Developer</span> </h2>
            </div>
        </div>
    </div>


    <!-- About -->
    <section class="about-section" id="about-section">
        <div class="about-wrapper">
            <div class="about-image">
                <img src="assets/img/about/003.jpg" alt="">
            </div>
            <div class="about-text">
                <h3>About Me</h3>
                <div class="line"></div>
                <p>I'm Ibrahim, a Front End and Software Developer.
                    I'm passionate about designing and building web and software applications.
                    I enjoy the entire development process from design to completion. If I can't do what you want, I'll surely figure it out.
                    My interest in programming has led me to learn both front-end and software technologies such as HTML5, CSS3, PHP, JavaScript, and Java.
                    I've worked alongside senior designers and developers who have raised my standards for whats expected of any web and software application.
                    Please scroll down to see some more information and don't forget to get in touch.
                </p>
                <a href="assets/folder/my_resume.pdf" target="_blank" rel="noopener noreferrer">
            
                <button class="about-btn">
                        DOWNLOAD RESUME
                    </button>
                </a>
                
            </div> 
        </div>

        <div class="resources">
            <h2>My Resources</h2>
            <div class="resources-line"></div>
            <p class="cap">Here are all the skills I've learnt and use to develop web applications and software</p>
            <div class="resources-list">
                <div class="html">
                    <img src="assets/img/svg/html5-brands.svg" alt="" class="resource-logo">
                    <p>HTML5</p>
                </div>
                <div class="css">
                    <img src="assets/img/svg/css3-alt-brands.svg" alt="" class="resource-logo">
                    <p>CSS3</p>
                </div>
                <div class="js">
                    <img src="assets/img/svg/js-brands.svg" alt="" class="resource-logo">
                    <p>JS</p>
                </div>
                <div class="php">
                    <img src="assets/img/svg/php-brands.svg" alt="" class="resource-logo">
                    <p>PHP</p>
                </div>
                <div class="java">
                    <img src="assets/img/svg/java-brands.svg" alt="" class="resource-logo">
                    <p>JAVA</p>
                </div>
            </div>
        </div>     
    </section>


    <!-- Portfolio -->
    <section class="porfolio-section" id="porfolio-section">
       
        <div class="portfolio-wrapper">
            <div class="portfolio-header">
                <h2>Portfolio</h2>
                <div class="resources-line port"></div>
                <p class="cap portt">Here are my latest work</p>
                <!-- <div class="portfolio-buttons">
                    <div class="Port-btn">ALL</div>
                    <div class="Port-btn">FRONT-END</div>
                    <div class="Port-btn">SOFTWARE</div>
                </div> -->
            </div>

            <div class="port-showcase">
                <div class="show">
                    <a href="https://goofy-williams-cbcb33.netlify.app/"><img src="assets/img/portfolio/web/SS.png" alt=""></a>
                    <h2>OSHOP</h2>
                    <p>This is a project I built after my first month into web development and by far the most challenging HTML, CSS and JavaScript project I've built.</p>
                    <a href="https://goofy-williams-cbcb33.netlify.app/" class="about-btn portfolio">Preview</a>
                </div>
                <div class="show">
                    <a href=""><img src="assets/img/portfolio/software/stock/top.png" alt=""></a>     
                    <h2>VERTEX</h2>
                    <p>VERTEX is a Desktop application software built for Stock Management Program.  I built this project for my client from scratch with Java GUI on the front-end and MySqli on the back-end.</p>
                    <!-- <a href="" class="about-btn portfolio">Preview</a> -->
                </div>
                <div class="show">
                    <a href="https://ibrahim-dev.herokuapp.com/"><img src="assets/img/portfolio/web/Screenshot (90).png" alt=""></a>
                    <h2>MY PORTFOLIO</h2>
                    <p>My portfolio is a website I built for myself to showcase my work for potential clients and employers. I use MySqli to store my projects for better performance and for easier update of new projects.</p>
                    <a href="https://ibrahim-dev.herokuapp.com/" class="about-btn portfolio">Preview</a>
                </div>
                <div class="show">
                    <a href="https://adventourswithaisha.herokuapp.com/"><img src="assets/img/portfolio/web/Screenshot (110).png" alt=""></a>
                    <h2>AdvenTours with Aisha</h2>
                    <p>AdvenTours with Aisha is a Travel Blog for whoever is exicted about travelling, or at least open your mind a little bit and give you a bit more information about some beautiful destinations in Nigeria.
                        I built this project for my client from scratch with HTML, CSS and JavaScript on the front-end and PHP on the back-end. </p>
                    <a href="https://adventourswithaisha.herokuapp.com/" class="about-btn portfolio">Preview</a>
                </div>
                <div class="show">
                    <a href="https://o-delivery.herokuapp.com/"><img src="assets/img/portfolio/web/Odelivery/Screenshot (79).png" alt=""></a>
                    <h2>ODELIVERY</h2>
                    <p>ODELIVERY is an e-commerce site built for Food Delivery.
                         I built this project from scratch with HTML, CSS, PHP and JavaScript.
                           PHP is use to send email to custormer update about their order. 
                        Finally i use Paystack and Stripe as the payment gateway.</p>
                    <a href="https://o-delivery.herokuapp.com/" class="about-btn portfolio">Preview</a>
                </div>
                
                <div class="show">
                    <a href=""><img src="assets/img/portfolio/software/Screenshot (113).png" alt=""></a>
                    <h2>Task Manager</h2>
                    <p>Task manager is my first Desktop application project that I built, my goal was to use it to kick start my Java GUI skills. It utilize MySqli to manage task which make completion, updating and deleting of tasks much easier to implement.</p>
                    <!-- <a href="" class="about-btn portfolio">Preview</a> -->
                </div>
            </div>       
        </div>  
    </section>


    
    <section class="contact" id="Contact">

        <div class="portfolio-header contact" >
            <h2>Let's Build Something Together</h2>
            <div class="resources-line port contactw"></div>
            <div class="resources-line port contact"></div>
            <p class="cap portt contact">Feel free to reach out if you're looking for a developer or just want to connect</p>
            
        </div>
        <div class="contact-section">
        <ul>
            <li>
                <span class="keytitle">Email:</span><br><br>
                <a href="mailto:>akinola10302@gmail.com">
                    <span class="val">akinola10302@gmail.com</span>
                </a>
            </li>
            <li>
                <span class="keytitle">Phone:</span><br><br>
                
                <a href="tel:+2348073374150"><span class="val">+2348073374150</span></a>
            </li>
        </ul>
        </div>
    </section>

    <footer>
        <div class="footer-wrapper">
            <div class="footer-row">
                <div class="left">
                    <p>&copy; Copyright MyPortfolio. All Rights Reserved.</p> <br>
                    <p>Designed by <a href="https://ibrahim-dev.herokuapp.com/" class="footer-nametag">Ib Codes</a></p>
                        
        
                </div>
                <div class="right">
                    <a href="https://github.com/Kolabalogun"><img src="assets/img/svg/github-brands.svg" alt="" class="footer-icn"></a>
                    <a href="https://www.linkedin.com/in/ibrahim-kolabalogun-7130631b9/"><img src="assets/img/svg/linkedin-in-brands.svg" alt="" class="footer-icn"></a>
                    <a href="https://www.instagram.com/ib.codes/"><img src="assets/img/svg/instagram-brands.svg" alt="" class="footer-icn"></a>
                </div>
            </div>

        </div>
    </footer>

<script src="assets/js/main.js"></script>
    
</body>
</html>