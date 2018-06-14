<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>FourOnTheFlour</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../scripts/bootstrap/bootstrap.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="../../scripts/ionicons/css/ionicons.min.css">
    <!-- Toast -->
    <link rel="stylesheet" href="../../scripts/toast/jquery.toast.min.css">
    <!-- OwlCarousel -->
    <link rel="stylesheet" href="../../scripts/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../../scripts/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="../../scripts/sweetalert/dist/sweetalert.css">
    <!-- Custom style -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/skins/all.css">
    <link rel="stylesheet" href="../../css/demo.css">
</head>
<body class="skin-blue">

<header class="primary up"  style="top: 0px;">

    <!-- Start nav -->
    <nav class="menu">
        <div class="container">
            <div class="brand">
                <a href="">
                    <img src="../../img/ff/fof.png" alt="Magz Logo">
                </a>
            </div>
            <div class="mobile-toggle">
                <a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
            </div>
            <div class="mobile-toggle">
                <a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
            </div>
            <div id="menu-list">

                <div class="col-md-8 col-sm-12 text-left">
                    <ul class="nav-icons">

                        <li><a href="#">Artistas</a></li>
                        <li><a href="#">Eventos</a></li>
                        <li><a href="">Mi Dashboard</a></li>
                        <li><a href="../Salir.php">Cerrar Session</a></li>
                    </ul>
                </div>
            </div>
    </nav>

</header>

<section class="home">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="owl-carousel owl-theme slide" id="featured">
                    <!-- carga del evento principal -->
                    <div class="item">
                        <article class="featured">
                            <div class="overlay"></div>
                            <figure>
                                <img src="../../img/ff/space.jpg" alt="Sample Article">
                            </figure>
                            <!--<div class="details">
                              <div class="category"><a href="category.html">Texto</a></div>
                              <h1><a href="#">Texto</a></h1>
                              <div class="time">Texto</div>
                            </div>-->
                        </article>

                    </div>

                </div>


                <div class="line">
                    <div>Eventos Proximos</div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <article class="article col-md-12">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src="../../img/ff/16.jpeg" alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <div class="detail">
                                            <div class="time">December 10, 2016</div>
                                            <div class="category"><a href="category.html">Healthy</a></div>
                                        </div>
                                        <h2><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        <footer>
                                            <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1263</div></a>
                                            <a class="btn btn-primary more" href="single.html">
                                                <div>More</div>
                                                <div><i class="ion-ios-arrow-thin-right"></i></div>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                            <article class="article col-md-12">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src="../../img/ff/17.jpeg" alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <div class="detail">
                                            <div class="time">December 22, 2016</div>
                                            <div class="category"><a href="category.html">Healthy</a></div>
                                        </div>
                                        <h2><a href="single.html">Exercitation ullamco laboris nisi ut aliquip</a></h2>
                                        <p>Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat sollicitudin ut est. In fringilla dui dui.</p>
                                        <footer>
                                            <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>327</div></a>
                                            <a class="btn btn-primary more" href="single.html">
                                                <div>More</div>
                                                <div><i class="ion-ios-arrow-thin-right"></i></div>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <article class="article col-md-12">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src="../../img/ff/18.jpeg" alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <div class="detail">
                                            <div class="time">December 09, 2016</div>
                                            <div class="category"><a href="category.html">Lifestyle</a></div>
                                        </div>
                                        <h2><a href="single.html">Mauris elementum libero at pharetra auctor</a></h2>
                                        <p>Vivamus in efficitur mi. Nullam semper justo ut elit lacinia lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                                        <footer>
                                            <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1083</div></a>
                                            <a class="btn btn-primary more" href="single.html">
                                                <div>More</div>
                                                <div><i class="ion-ios-arrow-thin-right"></i></div>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                            <article class="article col-md-12">
                                <div class="inner">
                                    <figure>
                                        <a href="single.html">
                                            <img src="../../img/ff/19.jpeg" alt="Sample Article">
                                        </a>
                                    </figure>
                                    <div class="padding">
                                        <div class="detail">
                                            <div class="time">December 21, 2016</div>
                                            <div class="category"><a href="category.html">Sport</a></div>
                                        </div>
                                        <h2><a href="single.html">Sed do eiusmod tempor incididunt ut labore</a></h2>
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris elementum libero at pharetra auctor.</p>
                                        <footer>
                                            <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>980</div></a>
                                            <a class="btn btn-primary more" href="single.html">
                                                <div>More</div>
                                                <div><i class="ion-ios-arrow-thin-right"></i></div>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>






            </div>


            <div class="col-xs-6 col-md-4 sidebar" id="sidebar">
                <div class="sidebar-title for-tablet">Sidebar</div>
                <aside>
                    <div class="aside-body">
                        <div class="featured-author">
                            <div class="featured-author-inner">
                                <div class="featured-author-cover" style="background-image: url('img/FOF-Negocio.jpg');">
                                    <div class="badges">

                                    </div>

                                </div>

                                <div class="block">

                                </div>

                            </div>
                        </div>
                </aside>


                <aside>
                    <h1 class="aside-title">Top 10</h1>
                    <div class="aside-body">
                        <article class="article-mini">
                            <iframe width="400" height="100" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/357129791&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                        </article>



                        <article class="article-mini">
                            <iframe width="400" height="100" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/96396519&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                        </article>


                        <article class="article-mini">
                            <iframe width="400" height="100" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/387674225&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                        </article>


                        <article class="article-mini">
                            <iframe width="400" height="100" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/309884764&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                        </article>


                        <article class="article-mini">
                            <iframe width="400" height="100" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/392357130&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                        </article>



                        <article class="article-mini">
                            <iframe width="400" height="100" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/476793111&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                        </article>
                    </div>
                </aside>


                <aside>

                </aside>


                <aside id="sponsored">


                </aside>

            </div>
        </div>
    </div>

</section>

<section class="best-of-the-week">
    <div class="container">


        <h1><div class="text">Otro Sellos de Campeche</div>
            <div class="carousel-nav" id="best-of-the-week-nav">
                <div class="prev">
                    <i class="ion-ios-arrow-left"></i>
                </div>
                <div class="next">
                    <i class="ion-ios-arrow-right"></i>
                </div>
            </div>
        </h1>


        <div class="owl-carousel owl-theme carousel-1">
            <article class="article">
                <div class="inner">
                    <figure>
                        <a href="single.html">
                            <img src="../../img/ff/16.jpeg" alt="Sample Article">
                        </a>
                    </figure>
                    <div class="padding">
                        <div class="detail">
                            <div class="time">December 11, 2016</div>
                            <div class="category"><a href="category.html">Travel</a></div>
                        </div>
                        <h2><a href="single.html">tempor interdum Praesent tincidunt</a></h2>
                        <p>Praesent tincidunt, leo vitae congue molestie.</p>
                    </div>
                </div>
            </article>
            <article class="article">
                <div class="inner">
                    <figure>
                        <a href="single.html">
                            <img src="../../img/ff/17.jpeg" alt="Sample Article">

                        </a>
                    </figure>
                    <div class="padding">
                        <div class="detail">
                            <div class="time">December 09, 2016</div>
                            <div class="category"><a href="category.html">Sport</a></div>
                        </div>
                        <h2><a href="single.html">Maecenas porttitor sit amet turpis a semper</a></h2>
                        <p> Proin vulputate, urna id porttitor luctus, dui augue facilisis lacus.</p>
                    </div>
                </div>
            </article>
            <article class="article">
                <div class="inner">
                    <figure>
                        <a href="single.html">
                            <img src="../../img/ff/18.jpeg" alt="Sample Article">
                        </a>
                    </figure>
                    <div class="padding">
                        <div class="detail">
                            <div class="time">December 26, 2016</div>
                            <div class="category"><a href="category.html">Lifestyle</a></div>
                        </div>
                        <h2><a href="single.html">Fusce ac odio eu ex volutpat pellentesque</a></h2>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus</p>
                    </div>
                </div>
            </article>
            <article class="article">
                <div class="inner">
                    <figure>
                        <a href="single.html">
                            <img src="../../img/ff/19.jpeg" alt="Sample Article">
                        </a>
                    </figure>
                    <div class="padding">
                        <div class="detail">
                            <div class="time">December 26, 2016</div>
                            <div class="category"><a href="category.html">Travel</a></div>
                        </div>
                        <h2><a href="single.html">Nulla facilisis odio quis gravida vestibulum</a></h2>
                        <p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
                    </div>
                </div>
            </article>
            <article class="article">
                <div class="inner">
                    <figure>
                        <a href="single.html">
                            <img src="../../img/ff/20.jpeg" alt="Sample Article">
                        </a>
                    </figure>
                    <div class="padding">
                        <div class="detail">
                            <div class="time">December 26, 2016</div>
                            <div class="category"><a href="category.html">Travel</a></div>
                        </div>
                        <h2><a href="single.html">Fusce Ullamcorper Elit At Felis Cursus Suscipit</a></h2>
                        <p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
                    </div>
                </div>
            </article>
            <article class="article">
                <div class="inner">
                    <figure>
                        <a href="single.html">
                            <img src="../../img/ff/21.jpeg" alt="Sample Article">
                        </a>
                    </figure>
                    <div class="padding">
                        <div class="detail">
                            <div class="time">December 26, 2016</div>
                            <div class="category"><a href="category.html">Travel</a></div>
                        </div>
                        <h2><a href="single.html">Donec consequat arcu at ultrices sodales</a></h2>
                        <p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>

</section>


<!-- JS -->


<script src="../../js/APP_JS/jquery.js"></script>
<script src="../../js/APP_JS/jquery.migrate.js"></script>
<script src="../../scripts/bootstrap/bootstrap.min.js"></script>
<script>var $target_end=$(".best-of-the-week");</script>
<script src="../../scripts/jquery-number/jquery.number.min.js"></script>
<script src="../../scripts/owlcarousel/dist/owl.carousel.min.js"></script>
<script src="../../scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="../../scripts/eas escroll/jquery.easeScroll.js"></script>
<script src="../../scripts/sweetalert/dist/sweetalert.min.js"></script>
<script src="../../scripts/toast/jquery.toast.min.js"></script>

<script src="../../js/APP_JS/e-magz.js"></script>

</body>

</html>
