<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <title>Karel Zamazal Portfolio</title>
</head>
<body>
    <input type="checkbox" id="hamburger-checkbox" />
    <label for="hamburger-checkbox" class="hamburger-icon">
        <span></span>
        <span></span>
        <span></span>
    </label>
    <nav class="nav">
        <ul>
            <li id="firstLink"><a class="nav_link" href="#header">Home</a></li>
            <li><a class="nav_link" href="#skills">Skills</a> </li>
            <li><a class="nav_link" href="#projects">Projects</a> </li>
            <li><a class="nav_link" href="#about">About</a></li>
            <li><a class="nav_link" href="#contact">Contact</a></li>
        </ul>
    </nav>
    <div class="wrapper">
        <header class="header" id="header">
            <div class="header-container">
                <div class="header-img-small">
                    <img src="images/me.png" alt="picture of myself">
                </div>
                <div class="u-centered">
                    <div class="call-to-action">
                        <h1 class="call-to-action-title">Hey There,</h1>
                        <div class="call-to-action-title-animated">I Am
                            <span id="typed" style="white-space:pre;" class="typed"></span>
                        </div>
                        <p class="call-to-action-description">from Ostrava, Czech Republic</p> 
                    </div>
                    <a class="call-to-action-btn" href="#projects">Projects</a>
                </div>
            </div>
        </header>
        <main>

            <section id="skills">
                <h2 class="section-title">Skills</h2>
                <div class="skills-inner-wrapper">

                    <div class="devtools-wrapper">
                        <div class="devtools-container fade-in">             
                            <h3 class="devtools-headline">Web Development</h3>
                            <div class="web-technologies">
                                <div class="web-technology-pair">
                                    <img src="images/Icons/html5.svg" alt="html5 icon">
                                    <span class="web-technology-name">html5</span>
                                </div>
                                <div class="web-technology-pair">
                                    <img src="images/Icons/css3.svg" alt="css3 icon">
                                    <span class="web-technology-name">CSS3</span>
                                </div>
                                <div class="web-technology-pair">
                                    <img src="images/Icons/js.svg" alt="javascript icon">
                                    <span class="web-technology-name">JavaScript</span>
                                </div>
                                <div class="web-technology-pair">
                                    <img src="images/Icons/react.svg" alt="react icon">
                                    <span class="web-technology-name">React</span>
                                </div>
                                <div class="web-technology-pair">
                                    <img src="images/Icons/php.svg" alt="php icon">
                                    <span class="web-technology-name">PHP</span>
                                </div>
                            </div>
                        </div>

                        <hr class="divider fade-in">

                        <div class="devtools-container fade-in">        
                            <h3 class="devtools-headline">Mobile & Desktop App Development</h3>
                            <div class="app-technologies">
                                <div class="app-technology-pair">
                                    <img src="images/Icons/csharp.svg" alt="csharp icon">
                                    <span class="app-technology-name">C#</span>
                                </div>
                                <div class="app-technology-pair">
                                    <img src="images/Icons/java.svg" alt="java icon">
                                    <span class="app-technology-name">Java</span>
                                </div>
                                <div class="app-technology-pair">
                                    <img src="images/Icons/xamarin.svg" alt="xamarin icon">
                                    <span class="app-technology-name">Xamarin</span>
                                </div>
                                <div class="app-technology-pair">
                                    <img src="images/Icons/android.svg" alt="android studio icon">
                                    <span class="app-technology-name">Android Studio</span>
                                </div>
                            </div>
                        </div>

                        <hr class="divider fade-in">

                        <div class="devtools-container fade-in">  
                            <h3 class="devtools-headline">Databases</h3>
                            <p class="devtools-summary"></p>
                            <div class="databases">
                                <div class="databases-pair">
                                    <img src="images/Icons/oracle.svg" alt="oracle db icon">
                                    <span class="database-name">Oracle</span>
                                </div>
                                <div class="databases-pair">
                                    <img src="images/Icons/ms-access.svg" alt="ms access icon">
                                    <span class="database-name">MS Access</span>
                                </div>
                                <div class="databases-pair">
                                    <img src="images/Icons/mysql.svg" alt="mysql icon">
                                    <span class="database-name">MySql</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="myCanvasContainer">
                        <canvas width="500" height="500" id="myCanvas">
                            <ul>
                                <li><a href="#" target="_blank">CSS3</a></li>
                                <li><a href="#" target="_blank">SASS</a></li>
                                <li><a href="#" target="_blank">HTML5</a></li>
                                <li><a href="#" target="_blank">BootStrap</a></li>
                                <li><a href="#" target="_blank">JavaScript</a></li>
                                <li><a href="#" target="_blank">jQuery</a></li>
                                <li><a href="#" target="_blank">PHP</a></li>
                                <li><a href="#" target="_blank">React</a></li>
                                <li><a href="#" target="_blank">C#</a></li>
                                <li><a href="#" target="_blank">Java</a></li>
                                <li><a href="#" target="_blank">Oracle</a></li>
                                <li><a href="#" target="_blank">MySql</a></li>
                                <li><a href="#" target="_blank">GIT</a></li>
                                <li><a href="#" target="_blank">GitHub</a></li>
                            </ul>
                        </canvas>
                    </div>
                </div>
            </section>

            <section id="projects">
                <h2 class="section-title" style="color: #F6F8FF;margin-bottom: 1rem">PROJECTS</h2>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <!-- First Project - Theatre Website -->
                        <div class="swiper-slide">
                            <div class="project-container" style="background: linear-gradient( to bottom,rgba(3, 20, 30, .2) 30%, rgba(1, 21, 29, .3) 70%), url(images/project1.jpg) no-repeat center center;">             
                                <div class="card__face card__face--front">
                                    <h2 class="project-number">01</h2>
                                    <h3 class="project-title">Arena</h3>
                                    <div class="technology-container-sm">
                                        <div class="technologies-used-sm">
                                            <div class="techno-pair">
                                                <i class="fab fa-html5 fa-3x"></i>
                                                <span class="techno-title">html5</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-css3-alt fa-3x"></i>
                                                <span class="techno-title">css3</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-js fa-3x"></i>
                                                <span class="techno-title">Javascript</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="btn-details">Details</span>
                                </div>
                                <div class="card__face card__face--back">
                                    <div class="project-summary">
                                        Website about local theatre, I have used grid to create multidimensional layout, without need of any framework.
                                    </div>
                                    <div class="technology-container">
                                        <div class="technologies-used">
                                            <div class="techno-pair">
                                                <i class="fab fa-html5 fa-3x"></i>
                                                <span class="techno-title">html5</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-css3-alt fa-3x"></i>
                                                <span class="techno-title">css3</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-js fa-3x"></i>
                                                <span class="techno-title">Javascript</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a href="https://karelza.github.io/ArenaTheatre" target="_blank" class="visit-btn">Visit</a>
                                        <a href="https://github.com/KarelZa/ArenaTheatre" target="_blank" class="visit-btn">GitHub</a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <!-- Second Project - Alien Breaker -->
                        <div class="swiper-slide">
                            <div class="project-container" style="background: linear-gradient( to bottom,rgba(3, 20, 30, .5) 30%, rgba(1, 21, 29, .7) 70%), url(images/project2.jpg) no-repeat center center;">           
                                <div class="card__face card__face--front">
                                    <h2 class="project-number">02</h2>
                                    <h3 class="project-title">Alien Breaker</h3>
                                    <div class="technology-container-sm">
                                        <div class="technologies-used-sm">
                                            <div class="techno-pair">
                                                <img src="images/Icons/processing2.svg" alt="processing lang logo" height="45">
                                                <span class="techno-title">Processing</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="btn-details">Details</span>
                                </div>
                                <div class="card__face card__face--back">
                                    <div class="project-summary">
                                        A mini-game created with processing language, to learn basics of programming and visual design, processing uses Java syntax.
                                    </div>
                                    <div class="technology-container">
                                        <div class="technologies-used">
                                            <div class="techno-pair">
                                                <img src="images/Icons/processing2.svg" alt="processing lang logo" height="45">
                                                <span class="techno-title">Processing</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a href="https://github.com/KarelZa/Processing/tree/main/AlienBreaker" target="_blank" class="visit-btn">GitHub</a>
                                    </div>
                                </div> 
                            </div>
                        </div>          
                        <!-- Third Project - Solaris Hotel -->
                        <div class="swiper-slide">
                            <div class="project-container" style="background: linear-gradient( to bottom,rgba(3, 20, 30, .8) 20%, rgba(1, 21, 29, .6) 80%), url(images/project3.jpg) no-repeat center center;">             
                                <div class="card__face card__face--front">
                                    <h2 class="project-number">03</h2>
                                    <h3 class="project-title">Solaris</h3>
                                    <div class="technology-container-sm">
                                        <div class="technologies-used-sm">
                                            <div class="techno-pair">
                                                <i class="fab fa-html5 fa-3x"></i>
                                                <span class="techno-title">html5</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-css3-alt fa-3x"></i>
                                                <span class="techno-title">css3</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-bootstrap fa-3x"></i>
                                                <span class="techno-title">BootStrap</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-js fa-3x"></i>
                                                <span class="techno-title">JS</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="btn-details">Details</span>
                                </div>
                                <div class="card__face card__face--back">
                                    <div class="project-summary">
                                        Single webpage about fictional hotel, with reservation form. Utilizing bootstrap components,Font-Awasome and Vanilla JS.
                                    </div>
                                    <div class="technology-container">
                                        <div class="technologies-used">
                                            <div class="techno-pair">
                                                <i class="fab fa-html5 fa-3x"></i>
                                                <span class="techno-title">html5</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-css3-alt fa-3x"></i>
                                                <span class="techno-title">css3</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-bootstrap fa-3x"></i>
                                                <span class="techno-title">BootStrap</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-js fa-3x"></i>
                                                <span class="techno-title">JS</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a href="https://karelza.github.io/Hotel_Solaris" target="_blank" class="visit-btn">Visit</a>
                                        <a href="https://github.com/KarelZa/Hotel_Solaris" target="_blank" class="visit-btn">GitHub</a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <!-- 4th Project - Library System PHP -->
                        <div class="swiper-slide">
                            <div class="project-container" style="background: linear-gradient( to bottom,rgba(3, 20, 30, .8) 20%, rgba(1, 21, 29, .6) 80%), url(images/library.jpg) no-repeat center center;">             
                                <div class="card__face card__face--front">
                                    <h2 class="project-number">04</h2>
                                    <h3 class="project-title">Library</h3>
                                    <div class="technology-container-sm">
                                        <div class="technologies-used-sm">
                                            <div class="techno-pair">
                                                <i class="fab fa-php fa-3x"></i>
                                                <span class="techno-title">PHP</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-js fa-3x"></i>
                                                <span class="techno-title">JS</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="btn-details">Details</span>
                                </div>
                                <div class="card__face card__face--back">
                                    <div class="project-summary">
                                    A simple library system that keeps records of books in database, users can insert books, see all records or search for a specific book based on multiple criteria.
                                    </div>
                                    <div class="technology-container">
                                        <div class="technologies-used">
                                            <div class="techno-pair">
                                                <i class="fab fa-php fa-3x"></i>
                                                <span class="techno-title">PHP</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-js fa-3x"></i>
                                                <span class="techno-title">JS</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a href="https://karelzamazal.cz/library/form.php" target="_blank" class="visit-btn">Visit</a>
                                        <a href="https://github.com/KarelZa/LibrarySystem" target="_blank" class="visit-btn">GitHub</a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <!-- 5th Project - Bikeshop -->
                        <div class="swiper-slide">
                            <div class="project-container" style="background: linear-gradient( to bottom,rgba(3, 20, 30, .8) 20%, rgba(1, 21, 29, .6) 80%), url(images/project4.jpg) no-repeat center center;">             
                                <div class="card__face card__face--front">
                                    <h2 class="project-number">05</h2>
                                    <h3 class="project-title">Bikeshop</h3>
                                    <div class="technology-container-sm">
                                        <div class="technologies-used-sm">
                                            <div class="techno-pair">
                                                <i class="fab fa-html5 fa-3x"></i>
                                                <span class="techno-title">html5</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-css3-alt fa-3x"></i>
                                                <span class="techno-title">css3</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-js fa-3x"></i>
                                                <span class="techno-title">JS</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-react fa-3x"></i>
                                                <span class="techno-title">React</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="btn-details">Details</span>
                                </div>
                                <div class="card__face card__face--back">
                                    <div class="project-summary">
                                        Interactive form build with JS framework React. Form displays price based on user's inputs.
                                    </div>
                                    <div class="technology-container">
                                        <div class="technologies-used">
                                            <div class="techno-pair">
                                                <i class="fab fa-html5 fa-3x"></i>
                                                <span class="techno-title">html5</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-css3-alt fa-3x"></i>
                                                <span class="techno-title">css3</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-js fa-3x"></i>
                                                <span class="techno-title">JS</span>
                                            </div>
                                            <div class="techno-pair">
                                                <i class="fab fa-react fa-3x"></i>
                                                <span class="techno-title">React</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a href="https://karelza.github.io/React_Bikeform/" target="_blank" class="visit-btn">Visit</a>
                                        <a href="https://github.com/KarelZa/React_Bikeform" target="_blank" class="visit-btn">GitHub</a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="about">
                <h2 class="section-title">ABOUT</h2>
                <div class="about-container">
                    <div class="personal-info">
                        <div class="about-img">
                            <!-- <img src="images/png/pic-nz-500.png" alt="portrait of me"> -->
                            <img src="images/png/pic-nz-500.png"
                            srcset="images/png/pic-nz-500.png 500w,
                            images/png/pic-nz-1000.png 1000w,
                            images/png/pic-nz-1500.png 1500w"
                            sizes="(min-width: 600px) 50vw, 100vw"  
                            alt="">
                        </div>
                        <div class="general-container">
                            <p class="about-lead fade-in"><span class="strongerText">I'm a Junior Software Developer based in the Czech Republic, currently studying the Object-Oriented Programming course at the Technical University of Ostrava</span><br> I am also looking for a job opportunity where I could utilize and further develop my skills, I will be fully available from April 2022.</p>
                            <h2 class="fade-in">Hobbies</h2>
                            <div class="hobbies">
                                <div class="first-hobby fade-in">
                                    <i class="fas fa-camera-retro fa-2x"></i>
                                    <div class="hobby-content">
                                        <h4>Travel</h4>
                                        <p>Travel takes me out of my comfort zones and inspires me to see, taste and try new things. It constantly challenges me, not only to adapt to and explore new surroundings, but also to engage with different people. 
                                        </p>
                                    </div>
                                </div>
    
                                <hr class="divider fade-in">
    
                                <div class="second-hobby fade-in">
                                    <i class="fas fa-brain fa-2x"></i>
                                    <div class="hobby-content">
                                        <h4>IT courses</h4>
                                        <p>
                                            Whenever I find some spare time I am going over Udemy courses to expand my knowledge, as there is always something new to learn. 
                                        </p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <section id="contact">
                <div class="text-zone">
                    <h2 class="section-title" style="color: #F6F8FF">Contact me</h2>
                    <p class="contact-text">
                        Whether you want to colaborate on project or just have an interisting idea, don't hesitate to use the form.
                    </p>
                    <div class="contact-form">
                        <form  action="sendMail.php" method='POST' autocomplete="off">
                            <ul>
                                <div class="flex-form-box">
                                    <li class="half input-box">
                                        <input type="text" id="name" name='name' placeholder=" " class="input__field">
                                        <label for="name" class="input__label">Name</label>
                                    </li>
                                    <li class="half input-box">
                                        <input type="email" id="email" name='email' placeholder=" " class="input__field">
                                        <label for="email" class="input__label">Email</label>
                                    </li>
                                </div>
                                <li class="input-box">
                                    <input type="text" id="subject" name='subject' placeholder=" " class="input__field"> 
                                    <label for="subject" class="input__label">Subject</label>
                                </li>
                                <li class="input-box">
                                    <textarea id="message" name='message' placeholder=" " class="input__field"></textarea >
                                    <label for="message" style="top:2rem" class="input__label">Message</label>
                                </li>
                                <li class="submit-box">
                                    <button id='submit' class="call-to-action-btn submit-btn" type="submit" name="submit">Send Message</button>
                                </li>                                
                            </ul>
                        </form>
                        <div class="form-message"></div>  
                    </div>
                </div>
                <div class="map">
                </div>
            </section>
        </main>
        <footer>
            <div class="social-links">
                <ul class="social">
                    <li><a href="#">
                        <i class="fab fa-github-square fa-2x"></i>
                    </a></li>
                    <li><a href="#">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a></li>
                    <li><a href="#">
                        <i class="fab fa-twitter-square fa-2x"></i>
                    </a></li>
                </ul>
            </div>
            <div class="creator">
                <h4>Karel Zamazal &copy;2k21 </h4>
            </div>
        </footer>
    </div>

    <script src="https://kit.fontawesome.com/b9e0ebf908.js" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="javascript/tagcanvas.min.js"></script>
    <script src="javascript/app.js"></script>
</body>
</html>