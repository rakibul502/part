<?php

session_start();
if ($_SESSION['islogin'] == true) {


} else {
    header("location:log.php");

    // 

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index11.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--  -->
</head>

<body>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="#">portfo<span>lio.</span></a>
            </div>
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#abut">About</a></li>
                <li><a href="php.php">Services</a></li>
                <li><a href="card.php
                ">card</a></li>
                <li><a class="btn btn-primary" href="logu.php">logout</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </nav>
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my Name is</div>
                <div class="text-2">Rakib ul</div>
                <div class="text-3">i'm a <span class="typing bg-dark"></span></div>
                <!-- <a href="#"></a> -->
            </div>
        </div>
    </section>
    <!--  -->
    <section class="abut" id="abut">
        <div class="max-width">
            <h2 class="Taite">Abut me</h2>
            <div class="about-content">
                <div class="column laft">
                    <img src="img/images (1).jpg" alt="" srcset="" />
                </div>
                <div class="column right">
                    <div class="text">
                        I'm Rakib ul And I'm a <span class="type2"></span>
                    </div>
                    <p>
                        Point Soft : Frontend Course <br>
                        Starting Year : 2019<br>
                        Creative IT : PHP Laravel Course<br>
                        Starting Year : 2021<br>
                        Creative IT : Database Courses<br>
                        Starting Year : 2022
                    </p>
                    <a href="#"></a>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="Taite">My-Services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fa fa-paint-brush"></i>
                        <div class="text text-danger">Frontend Developer And Dackend Developer</div>
                        <p class="text-primary">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi,
                            est.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="Taite">My Skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & expriences.</div>
                    <p>
                        Innovative, task-driven professional
                        with 1+ years of experience in web
                        design and web development across
                        industries. Equipped with a track
                        record of success in consistently
                        identifying and delivering on the
                        technological needs of companies
                        through intelligent innovation.
                        Proficient in creating databases,
                        creating user interfaces, writing and
                        testing code, solving simple/complex
                        problems and implementing new
                        features based on user feedback.

                    </p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <!--  -->
                        <div class="bars">
                            <div class="info">
                                <span>Php</span>
                                <span>60%</span>
                            </div>
                            <div class="line Php"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>larave</span>
                                <span>40%</span>
                            </div>
                            <div class="line larave"></div>
                        </div>
                        <div class="bars">
                            <div class="info">
                                <span>Mysql</span>
                                <span>70%</span>
                            </div>
                            <div class="line Mysql"></div>
                        </div>
                        <!--  -->
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line HTML"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>70%</span>
                        </div>
                        <div class="line CSS"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Tailwind CSS
                            </span>
                            <span>80%</span>
                        </div>
                        <div class="line CSS"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Bootstrap</span>
                            <span>80%</span>
                        </div>
                        <div class="line bootstrap"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>50%</span>
                        </div>
                        <div class="line javaScript"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>jQuery</span>
                            <span>70%</span>
                        </div>
                        <div class="line jQuery"></div>
                    </div>
                    <!--  -->

                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="Taite">Contact me</h2>
            <div class="contact-contact">
                <div class="column">
                    <div class="text">Get in touch</div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In rerum,
                        corporis ducimus vel optio reiciendis minima doloremque a
                        reprehenderit beatae?
                    </p>
                    <div class="icons">
                        <div class="row">
                            <i class="fa fa-user"></i>
                            <div class="info">
                                <div class="head">name</div>
                                <div class="sub-taite">Rakib ul</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-taite">Dhaka Bangladesh</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-taite">rakibul532502@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columl right">
                    <div class="text">message</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="name" required />
                            </div>
                            <br />
                            <div class="field email">
                                <input type="email" placeholder="Email" required />
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required />
                        </div>
                        <div class="field textarea">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Descrive project.."
                                required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <span>Created By <a href="#">CodinBangladesh</a> | <span class="fa fa-copright"></span>2021 All rights
            reserved.</span>
    </footer>



    <!--  -->
    <script src="js/index12.js"></script>
</body>

</html>