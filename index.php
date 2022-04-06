<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Roux Academy</title>
    <!--Bootstrap-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!--Stylesheets-->
    <link id="estilos" rel="stylesheet" type="text/css" href="css/style.css">
    <!--Responsive-->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!--Animation-->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!--Prettyphoto-->
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
    <!--Font-Awesome-->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <!--Owl-Slider-->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  [endif]-->
</head>

<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
    <!--Preloader-->
    <div id="preloader">
        <div id="pre-status">
            <div class="preload-placeholder"></div>
        </div>
    </div>
    <!--Navigation-->
    <header id="menu">
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span
                                class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand" href="#menu"><img src="images/Logo/01.png" alt=""></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a class="scroll" href="#menu">Home</a></li>
                            <li><a class="scroll" href="#about">Artists</a></li>
                            <li><a class="scroll" href="#service">Schedule</a></li>
                            <li><a class="scroll" href="#features">Venue/traveler</a></li>
                            <li><a class="scroll" href="#portfolio">Artist</a></li>

                            <?php

                            session_start();
                            if (!isset($_SESSION['usuario'])) {
                                echo '<li><a class="scroll" href="login/login.php">Login</a></li>';
                            } else {
                                echo '<li><a class="scroll" href="login/cerrar_session.php">Logout</a>' . "<p> usuario: " . $_SESSION['usuario'] . "</p>" . '</li>';
                            }

                            include 'login/conexion.php';
                            if (!empty($datos)) {
                            } else {
                                $datos = retornar_datos_usuario($_SESSION['usuario'], $conexion);
                                if ($datos === 'administrador') {
                                    echo '<li><a class="scroll" href="asistentes.php">Admin</a></li>';
                                }
                            }

                            ?>


                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>
    </header>
    <!--Slider-Start-->
    <section id="slider">
        <div id="home-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image:url(images/Slider/art01.jpg)">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <h1>Featured Artists</h1>
                                <p>The Roux Academy selects approximately 200 distinct pieces of contemporary art for
                                    display in their collective exhibit. Nine individuals are granted his or her own
                                    exhibit hall to display entire collections or themed pieces. Each Featured Artist
                                    has an opportunity to speak at the conference to share his or her vision,
                                    perspective, and techniques with conference attendees.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item" style="background-image:url(images/Slider/art01.jpg)">
                    <div class="carousel-caption container">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <h1>About the Event</h1>
                                <p>The Roux Academy’s annual conference and exhibit is designed to foster a close-knit
                                    relationship amongst artists at various universities around the world. But sign up
                                    early, as this not-to-miss conference sells out quickly, and the waiting list is
                                    long. In addition, art students are encouraged to send in works from their school
                                    portfolios to be considered for hanging in the CAC exhibit halls, as well as to be
                                    selected as a Featured Artist.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i
                        class="fa fa-angle-left"></i></a> <a class="home-carousel-right" href="#home-carousel"
                    data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!--/#home-carousel-->
    </section>
    <!--About-Section-Start-->
    <section id="about">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h2>Roux Conference</h2>
                    <div class="line"></div>
                    <p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the
                        world for five days of lectures by world-renowned art scholars and artists, and seven days and
                        nights of gallery exhibits featuring the best in contemporary art, including painting,
                        sculpture, and more, in the beautiful halls of Hotel Contempo in the heart of Seattle.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ab-sec">
                    <div class="col-md-6">
                        <h3 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Featured Artists
                        </h3>
                        <p><span><strong>The Roux Academy</strong></span> selects approximately 200 distinct pieces of
                            contemporary art for display in their collective exhibit. Nine individuals are granted his
                            or her own exhibit hall to display entire collections or themed pieces. Each Featured Artist
                            has an opportunity to speak at the conference to share his or her vision, perspective, and
                            techniques with conference attendees.</p>

                        <div class="artistgroup clearfix">
                            <ul class="clearfix">
                                <!--primeros 3-->
                                <li><img src="images/artists/Barot_Bellingham_tn.jpg" alt="Barot Bellingham">
                                    <img src="images/artists/Constance_Smith_tn.jpg" alt="Constance Smith">
                                    <img src="images/artists/Hassum_Harrod_tn.jpg" alt="Hassum Harrod">
                                </li>
                                <!--segundos 3-->
                                <li><img src="images/artists/Hillary_Goldwynn_tn.jpg" alt="Hillary Goldwynn">
                                    <img src="images/artists/Jennifer_Jerome_tn.jpg" alt="Jennifer Jerome">
                                    <img src="images/artists/Jonathan_Ferrar_tn.jpg" alt="Jonathan Ferrar">
                                </li>

                                <li><img src="images/artists/LaVonne_LaRue_tn.jpg" alt="LaVonne LaRue">
                                    <img src="images/artists/Riley_Rewington_tn.jpg" alt="Riley Rewington">
                                    <img src="images/artists/Xhou_Ta_tn.jpg" alt="Xhou Ta">
                                </li>
                            </ul>

                        </div>

                    </div>
                    <div class="col-md-6 ab-sec-img wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms"><img
                            src="images/Aboutus/iphone.png" alt=""> </div>
                </div>
            </div>
        </div>
    </section>
    <!--About-Sec-2-Start-->
    <div class="bg-sec">

    </div>
    <!--Service-Section-Start-->
    <section id="service">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h2>Schedule<span></span></h2>
                    <div class="line"></div>
                    <p>With over 35 seminars and 60 exhibits at this year’s Roux Academy CAC, there is truly something
                        for every art student. Learn about color, light, and texture; see spray paint tagging in a new
                        light, as a breath-taking 20 ft high graffiti wall is built before your very eyes over the
                        course of the week; and rub paint brushes with some of the most talented artists in the world.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="features-sec">
                    <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">

                            <div class="media-body">
                                <h5 class="media-heading">Art in Full Color</h5>
                                <p>The first day of CAC events and exhibits is kicked off under the theme of Art in Full
                                    Color From a demonstration in graffiti art on a wall of the Rousseau Room, to the
                                    exhibit of colorful glazed modern glassware in the Dover Hall, Art in Full Color
                                    will get CAC started in full swing!</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms"
                        data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="media-body">
                                <h5 class="media-heading">Art in Unexpected Places</h5>
                                <p>09:30-10:30am:
                                    Elizabeth Hall
                                    Watch LaVonne L. LaRue, a Chicago graffiti artist share her love and skill of mural
                                    art on Monday’s schedule, as she starts the painting of a 20-foot high wall in the
                                    Rousseau Room of Hotel Contempo, which will be finished at the end of the
                                    conference. Make sure to show up a bit early, as this session will be standing-room
                                    only.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms"
                        data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="media-body">
                                <h5 class="media-heading">Art in Full Bloom</h5>
                                <p>11:00am-1pm:
                                    Victoria Hall
                                    Drawing and painting flowers may seem like a first-year art student’s assignment,
                                    but Constance Smith brings depth, shadows, light, and color to new heights with his
                                    unique technique of painting on canvas with ceramic glaze. This session is sure to
                                    be a hit with mixed media buffs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="bg-sec">

    </div>

    <!--Features-Section-Start-->
    <section id="features">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h2>Venue/Traveler</h2>
                    <div class="line"></div>
                </div>
            </div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab-1" role="tab" data-toggle="tab"><i
                            class="fa fa-paper-plane"></i></a></li>
                <li role="presentation"><a href="#tab-2" role="tab" data-toggle="tab"><i class="fa fa-hotel"></i></a>
                </li>
                <li role="presentation"><a href="#tab-3" role="tab" data-toggle="tab"><i class="fa fa-bed"></i></a>
                </li>
                <li role="presentation"><a href="#tab-4" role="tab" data-toggle="tab"><i class="fa fa-bed"></i></a>
                </li>
                <li role="presentation"><a href="#tab-5" role="tab" data-toggle="tab"><i class="fa fa-bed"></i></a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active feat-sec" id="tab-1">
                    <div class="col-md-6 tab">
                        <h5>The Venue</h5>
                        <div class="line"></div>
                        <div class="clearfix"></div>
                        <p class="feat-sec">Hotel Contempo is the perfect spot for a gathering of modern artists. Not
                            only are the conference rooms and halls decked with breathtaking contemporary art and
                            sculptures, but the individual rooms are as unique as the renowned artists who were
                            commissioned to decorate them. From the Ross Monroe Purple suite filled wall to wall with
                            paintings in his palette of violet and lavender to the Tess Lessinger Sculpted Universe
                            suite, with dozens of original sculptures, including the bronze-casted toilet, visitors are
                            sure to be intrigued and comforted during their stay at Hotel Contempo. For those who opt to
                            stay at another location, there is no shortage of hotels in Downtown Seattle. Ranging from
                            shabby chic to the ultimate in sophistication.<br>
                        </p>
                    </div>
                    <div class="col-md-6 tab-img"><img src="images/Features/hotel_contempo.jpg" class="img-responsive"
                            alt=""></div>
                </div>
                <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-2">
                    <div class="col-md-6 tab">
                        <h5>Phillips of Bell town</h5>
                        <div class="line"></div>
                        <div class="clearfix"></div>
                        <p class="feat-sec">Situated amongt the hip, youthful culture of Downtown Seattle, Phillips of
                            Belltown is the place to be any time of the day or night. Choose from Jazz and Rock music at
                            the various music venues, and shop until you drop at an assortment of thrift stores and
                            upscale boutiques. The hotel itself is a historical gem, with architectural achievements in
                            every beam, brick, and support.<br>
                        </p>

                    </div>
                    <div class="col-md-6 tab-img"><img src="images/Features/hotel_phillips.jpg" class="img-responsive"
                            alt=""></div>
                </div>
                <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-3">
                    <div class="col-md-6 tab">
                        <h5>The Otter Renaissance Hotel</h5>
                        <div class="line"></div>
                        <div class="clearfix"></div>
                        <p class="feat-sec">Hotel founder, Henry Chasings, had a love of otters, having been raised in
                            an Alaskan village where otters played out his back door. As his tribute to the sea
                            creatures of his early days, Henry was insistent upon having an otter in every hall, wall,
                            and room inside the Otter Renaissance Hotel<br>
                        </p>

                    </div>
                    <div class="col-md-6 tab-img"><img src="images/Features/hotel_otter.jpg" class="img-responsive"
                            alt=""></div>
                </div>
                <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-4">
                    <div class="col-md-6 tab">
                        <h5>The Rage Hotel</h5>
                        <div class="line"></div>
                        <div class="clearfix"></div>
                        <p class="feat-sec">Seattle’s South Lake Union district plays home to the ultra modern Rage
                            Hotel, that is outfitted with a state-of-the-art computer and printing facility in the
                            penthouse, and draws tech professionals from all over the world for business conferences and
                            vacations, alike.<br>
                        </p>
                    </div>
                    <div class="col-md-6 tab-img"><img src="images/Features/hotel_rage.jpg" class="img-responsive"
                            alt=""></div>
                </div>
                <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-5">
                    <div class="col-md-6 tab">
                        <h5>Gwendoline’s Fancy</h5>
                        <div class="line"></div>
                        <div class="clearfix"></div>
                        <p class="feat-sec">In the heart of the West Edge district in Seattle, Gwendoline’s Fancy, named
                            after a Navy submarine that got lost at sea in 1910, is a central landing place for history
                            buffs who can immerse themselves in the Museum of History located in the hotel mezzanine.
                            For those travelers who aren’t into history, there are plenty of other nearby sights to keep
                            them entertained, including Pike Place Market and the Seattle Art Museum.<br>
                        </p>
                    </div>
                    <div class="col-md-6 tab-img"><img src="images/Features/hotel_gwendoline.jpg" class="img-responsive"
                            alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-sec">

    </div>
    <!--Portfolio-Section-Start-->
    <section id="portfolio">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="heading">
                    <h2>ARTIST</h2>
                    <div class="line"></div>
                    <p><span><strong>T</strong></span>he artist in this section</p>
                </div>
            </div>
            <div class="text-center">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">Artist</a></li>
                    <li><a href="#" data-filter=".creative">Best Artist</a></li>
                    <li><a href="#" data-filter=".corporate">New Artist</a></li>

                </ul>
                <!--/#portfolio-filter-->
            </div>
            <div class="portfolio-items">
                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item creative">
                    <div class="portfolio-item-inner"> <img class="img-responsive"
                            src="images/artists/Hillary_Goldwynn_tn.jpg" alt="">

                    </div>
                </div>
                <!--/.portfolio-item-->
                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item creative">
                    <div class="portfolio-item-inner"> <img class="img-responsive" src="images/artists/Xhou_Ta_tn.jpg"
                            alt="">

                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item corporate portfolio">
                    <div class="portfolio-item-inner"> <img class="img-responsive"
                            src="images/artists/Barot_Bellingham_tn.jpg" alt="">

                    </div>
                </div>


            </div>
        </div>
    </section>


    <footer id="footer">
        <div class="bg-sec">
            <div class="container">
                <h2>LOOKING FORWARD TO <strong>HEARING </strong>FROM YOU!</h2>
            </div>
        </div>
    </footer>
    <footer id="footer-down">

        <h2>Presentas daltonismo?, Cuál es tu tipo?</h2>

        <!-- * Aqui van las funciones para cambiar de css de acuerdo a los tipos de daltonismo -->

        <script>
        function cambiarcss() {
            document.getElementById('estilos').href = "css/tritanopia.css";
        }

        function normalcss() {
            document.getElementById('estilos').href = "css/style.css";
        }
        </script>

        <button onclick="cambiarcss()" type="button">Protanopia</button>
        <button onclick="normalcss()" type="button">Normal</button>



        <h2>Follow Us On</h2>
        <ul class="social-icon">
            <li class="facebook hvr-pulse"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
            <li class="twitter hvr-pulse"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="linkedin hvr-pulse"><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li class="google-plus hvr-pulse"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li class="youtube hvr-pulse"><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li class="instagram hvr-pulse"><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li class="behance hvr-pulse"><a href="#"><i class="fa fa-behance"></i></a></li>
        </ul>


    </footer>
    <!--Jquery-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!--Boostrap-Jquery-->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!--Preetyphoto-Jquery-->
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <!--NiceScroll-Jquery-->
    <script type="text/javascript" src="js/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <!--Isotopes-->
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <!--Wow-Jquery-->
    <script type="text/javascript" src="js/wow.js"></script>
    <!--Count-Jquey-->
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/jquery.inview.min.js"></script>
    <!--Owl-Crousels-Jqury-->
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <!--Main-Scripts-->
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>

<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->