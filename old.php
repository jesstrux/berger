<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Innovative</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

        <link href="favicon.png" rel="shortcut icon" type="image/x-icon" />
        <link href="bower_components/materialize/dist/css/materialize.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
<!--         <link href="css/animate.css" rel="stylesheet"/> -->
        <link href="css/styles.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="navbar-fixed visible">
            <nav class="orange crown no-shadow animated lighten-1 ighten-2" role="navigation">
                <div class="nav-wrapper containe" style="padding: 0 30px">
                    <a id="logo-container" href="#home" class="brand-logo orange-text text-lighten-5">Innovative</a>
                    <ul class="table-of-contents right lg-nav hide-on-med-and-down">
                        <li><a class="waves-effect waves-light" href="#home">Home</a></li>
                        <li><a class="waves-effect waves-light" href="#products">Products</a></li>
                        <li><a class="waves-effect waves-light" href="#location">Location</a></li>
                        <li><a class="waves-effect waves-light" href="#imgrow">Gallery</a></li>
                        <li><a class="waves-effect waves-light" href="#theTeam">The team</a></li>
                        <li><a class="waves-effect waves-light" href="#contactUs">Contact Us</a></li>
                    </ul>

                    <ul id="nav-mobile" class="side-nav table-of-contents">
                        <li><a href="#">Home</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#location">Location</a></li>
                        <li><a href="#imgrow">Gallery</a></li>
                        <li><a href="#theTeam">The team</a></li>
                        <li><a href="#contactUs">Contact Us</a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse">
                        <i class="zmdi zmdi-menu white-text" style="font-size: 25px"></i>
                    </a>
                </div>
            </nav>
        </div>
        <!-- START WELCOME -->
        <div id="home" style="margin-top:-65px;" class="orange lighten-1 full-screen center layout-flex center-center demo section scrollspy">
            <div class="container">
                <h1 class="section-head orange-text text-lighten-5">Innovative Co. Ltd</h1>
                <p class="flow-text orange-text text-lighten-4" style="font-size: 30px">
                    The supplying company you can trust. We've got you covered.
                </p>
                <br>
                <a href="#contactUs" class="btn waves-effect waves-light orange lighten-5 grey-text text-darken-4" style="font-size: 20px; height: 50px; line-height: 52px; width: 200px">
                    CONTACT US
                </a>
            </div>
        </div>
        <!-- END WELCOME -->

        <!-- START ABOUT -->
        <div id="products" class="full-screen center layout-flex center-center section scrollspy">
            <div class="row">
                <div class="col l6 s12">
                    <img src="img/gastanks.png" alt="" style="width:100%;height: 350px">
                </div>
                <div class="col l5 s12">
                    <h3 class="section-head grey-text text-darken-1" style="margin-bottom: 0px;font-weight:300;">
                        <span class="coma-text">Big,</span> <span class="coma-text">small,</span> <span class="coma-text">any</span>
                    </h3>
                    <p class="flow-text grey-text">
                        We are very flexible about orders, and packages, have over 14 years of experience and are the <strong>go-tos</strong> of a very large and pleased client base.
                    </p>
                    <a href="#contactUs" class="btn-flat grey-text text-darken-2 waves-effect" style="font-size: 20px">ORDER NOW</a>
                </div>
            </div>
        </div>
        <!-- END ABOUT -->
        <hr style="border:0;border-bottom:1px solid #e0e0e0">
        <!-- START WHERE WE AT -->
        <div id="location" class="layout-flex as-column center-center section scrollspy">
            <br><br><br><br>
            <div class="container layout-flex center-center">
                <div class="row">
                    <div class="col l5 m5 s12">
                        <div id="whereImg"></div>
                        &nbsp;
                    </div>
                    <div id="where" class="col l7 m7 s12">
                        <h3 class="section-head where-header grey-text text-darken-1" style="margin-botto: 0px;font-weight:300;">
                            Where to find us
                        </h3>
                        <p class="flow-text grey-text where-text">
                            Our headquarters are located in Mwenge Dar-Es-Salaam, opposite the Tanzania Revenue Authorities (TRA) building.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END WHERE WE AT -->
        
        <!-- START GALLERY  -->
        <div id="imgrow" class="grey lighten-4 layout-flex as-column center-center section scrollspy" style="min-height: 300px">
            <br><br>
            <div class="grey lighten-4 center" style="width:100%;margin-top: -230px;padding-top: 80px">
                    <div class="container">
                        <h3 class="section-head grey-text text-darken-1" style="margin-bottom: 0px;font-weight:300;">
                            Gallery
                        </h3>
                        <p class="flow-text grey-text">
                            Here are pictures of some of the products that we've supplied over the years.
                        </p>
                    </div>
            </div>
            <br><br>
            <div class="layout-flex v-center h-space-between hide-on-small-only" style="height: 50px; font-size: 24px;width: 100%;padding: 0 20px">
                <a href="javascript:void(0);" id="prev" class="grey-text text-darken-">
                    <i class="zmdi zmdi-chevron-left" style="font-size: 45px"></i>
                </a>
                <a href="javascript:void(0);" id="next" class="grey-text text-darken-">
                    <i class="zmdi zmdi-chevron-right" style="font-size: 45px"></i>
                </a>
            </div>
            <div id="slideshow-container">
                <div id="slideshow" clas="layout-flex">
                    <a data-caption="Electrical &amp; electronic devices" class="carousel-ite" href="#one!"><img src="img/electric.jpg"></a>
                    <a data-caption="Sanitary ware" class="carousel-ite" href="#two!"><img src="img/sanitary.jpg"></a>
                    <a data-caption="Furniture" class="carousel-ite" href="#three!"><img src="img/furniture.jpg"></a>
                    <a data-caption="Carpets" class="carousel-ite" href="#four!"><img src="img/carpet.jpg"></a>
                    <a data-caption="Textile" class="carousel-ite" href="#four!"><img src="img/textile.jpg"></a>
                    <a data-caption="Cosmetics" class="carousel-ite" href="#four!"><img src="img/cosmetics2.jpg"></a>
                </div>
            </div>
        </div>
        <!-- END GALLERY -->

        <!-- START MEET THE TEAM -->
        <div id="theTeam" class="layout-flex as-column center center-center section scrollspy">
            <br><br><br>
            <div class="container">
                <h3 class="section-head grey-text text-darken-1" style="margin-bottom: 0px;font-weight:300;">
                    Meet the team
                </h3>
                <p class="flow-text grey-text">
                    Here is our award winning, customer satisfying, golden team. <br> Or so we've been called.
                </p>
                <br><br>
                <div class="row">
                    <div class="col l4 m6 s12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" height="200px" src="img/male2.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4 layout-flex center-center">
                                    Daniel Kapama
                                    <i style="margin-left: auto;" class="zmdi zmdi-more-vert"></i>
                                </span>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">Daniel Kapama<i class="zmdi zmdi-close right"></i></span>
                              <hr>
                              <p>Here is some more information about this Daniel that we know of.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l4 m6 s12">
                        <div class="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" height="200px" src="img/male1.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4 layout-flex center-center">
                                    James Olson
                                    <i style="margin-left: auto;" class="zmdi zmdi-more-vert"></i>
                                </span>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">James Olson<i class="zmdi zmdi-close right"></i></span>
                              <hr>
                              <p>Here is some more information about this James that we know of.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MEET THE TEAM -->

        <!-- START FOOTER -->
        <footer id="contactUs" class="page-footer orange lighten-1 scrollspy">
            <br><br>
            <div class="container" styl="min-height: 400px">
                <div class="row">
                    <div class="col l6 s12 left">
                        <h3 class="section-head white-text">Contact Us</h3>
                        <br>
                        <ul class="collection">
                            <li class="collection-item avatar">
                              <i class="zmdi zmdi-pin circle"></i>
                              <p>P. O. Box 3251 Mwenge <br> Dar-Es-Salaam</p>
                            </li>
                            <li class="collection-item avatar one-line">
                              <i class="zmdi zmdi-phone circle"></i>
                              <p>+255794567890</p>
                            </li>
                            <li class="collection-item avatar one-line">
                              <i class="zmdi zmdi-email circle"></i>
                              <p>info@innocoltd.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col l6 s12 cente">
                        <h3 class="section-head white-text left-align">Social</h3>
                        <br>
                        <ul class="collection">
                            <li class="collection-item avatar one-line">
                                <i class="zmdi zmdi-facebook circle"></i>
                                <p class="left-align white-text"><a href="http://facebook.com/innocoltdtz" class="white-text">Innovative Company Limited</a></p>
                            </li>
                            <li class="collection-item avatar one-line">
                                <i class="zmdi zmdi-twitter circle"></i>
                                <p class="left-align">
                                    <a class="white-text" href="http://twitter.com/innocoltdtz">@innocoltdtz</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container center">
                    Copyright © 2016 Innovative Co. Ltd.
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/materialize/dist/js/materialize.min.js"></script>
        <script src="bower_components/jquery.serialscroll/jquery.serialScroll.min.js"></script>
        <script src="bower_components/jquery.scrollTo/jquery.scrollTo.min.js"></script>
        <script src="js/TweenMax.min.js"></script>
        <script src="js/scrollreveal.min.js"></script>
        <script src="js/init.js"></script>
     </body>
 </html>