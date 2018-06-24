<div class="row">
    <div class="col-md-8 col-sm-12 col-xs-12">
        <div class="owl-carousel owl-theme " id="featured">
            <!-- carga del evento principal -->
            <div class="item">
                <article class="featured">
                    <div class="overlay"></div>
                    <?php
                    while ($Evento = $consulta->fetch_assoc())
                    {
                    ?>
                    ?>
                    <figure>
                        <img src= "<?php echo $Evento['Flyer']; ?>" alt="Sample Article">
                    </figure>

                    <div class="details">
                      <div class="category"><a href="category.html"><?php echo $Evento['Lugar']; ?></a></div>
                      <h1><a href="#"><?php echo $Evento['InicioH']; ?></a></h1>
                      <div class="time"><?php echo $Evento['FechaEvento']; ?></div>
                    </div>
                </article>
                <?php
                }
                ?>

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
                                    <img src="img/ff/16.jpeg" alt="Sample Article">
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
                                    <img src="img/ff/17.jpeg" alt="Sample Article">
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
                                    <img src="img/ff/18.jpeg" alt="Sample Article">
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
                                    <img src="img/ff/19.jpeg" alt="Sample Article">
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
                    <a href="FOFNegocio" class="btn btn-lg btn-primary">Más info.</a>

                </div>
                <br>
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