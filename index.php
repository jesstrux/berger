<?php include 'includes/templates/header.php'; ?>    
    <!-- START BANNER -->
    <div id="banner">
        <div class="container layout vertical center-justified">
            <h1>Are you looking for paint?</h1>
            <p>You've come to the right place</p>
        </div>
    </div>
    <!-- END BANNER -->


    <div id="callCards">
        <div class="container">
            <div class="cards layout center justified">
                <div class="call-card" text="ABOUT US">
                    <div class="image">
                        <img src="" alt="">
                    </div>
                </div>

                <div class="call-card" text="DR. RANGI">
                    <div class="image">
                        <img src="" alt="">
                    </div>
                </div>

                <div class="call-card" text="PROJECTS">
                    <div class="image">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="sampleProductCatalog" class="text-center">
        <h1 class="section-title">
            Our Products
        </h1>

        <div class="container">
            <div id="products" class="layout wrap">
                <?php
                    for ($i=0; $i < 6; $i++) { 
                        echo '
                            <div class="product">
                                <div class="image"></div>
                                <div class="text"></div>
                            </div>
                        ';
                    }
                ?>
            </div>
        </div>

        <div class="color-bg"></div>
    </div>

    <div id="enquiry" class="text-center">
        <h1 class="section-title">
            Enquiries
        </h1>

        <form action="#" class="container layout vertical">
            <div class="layout">
                <input type="text" name="name" placeholder="Your full Name">
                <input type="text" name="email" placeholder="An active email">
            </div>

            <textarea name="message" cols="30" rows="5" placeholder="type your message in here"></textarea>

            <button class="layout center-center">
                SUBMIT MESSAGE
            </button>
        </form>
    </div>

<?php include 'includes/templates/footer.php'; ?>
