<?php include 'includes/templates/header.php'; ?>    
    <!-- START WELCOME -->
    <div id="home" style="margin-top:-65px;" class="black lighten-1 full-screen center layout-flex center-center demo section scrollspy">
        <div class="container">
            <h1 class="section-head white-text text-lighten-5" style="margin-bottom: 0"><?php echo $site_name ?> Co.</h1>
            <p class="flow-text grey-text text-lighten-1" style="font-size: 30px; margin-bottom: 0; margin-top: 0;">
                More paint than you'll ever need.
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
                <img src="assets/img/gastanks.png" alt="" style="width:100%;height: 350px">
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
                <a data-caption="Electrical &amp; electronic devices" class="carousel-ite" href="#one!"><img src="assets/img/electric.jpg"></a>
                <a data-caption="Sanitary ware" class="carousel-ite" href="#two!"><img src="assets/img/sanitary.jpg"></a>
                <a data-caption="Furniture" class="carousel-ite" href="#three!"><img src="assets/img/furniture.jpg"></a>
                <a data-caption="Carpets" class="carousel-ite" href="#four!"><img src="assets/img/carpet.jpg"></a>
                <a data-caption="Textile" class="carousel-ite" href="#four!"><img src="assets/img/textile.jpg"></a>
                <a data-caption="Cosmetics" class="carousel-ite" href="#four!"><img src="assets/img/cosmetics2.jpg"></a>
            </div>
        </div>
    </div>
    <!-- END GALLERY -->
<?php include 'includes/templates/footer.php'; ?>        
