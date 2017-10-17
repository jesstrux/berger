<?php
    $page = "home";
    include 'includes/templates/header.php';
?>
    <!-- START BANNER -->
    <div id="banner">
        <div class="slider">
            <div id="slideScroller" class="layout slide-scroller">
                <?php
                    // for ($i=0; $i < 4; $i++) { 
                    //     echo '
                    //         <div class="slide-item" style="background-image: url(assets/images/img'.($i + 1).'.jpg)" alt=""></div>
                    //     ';
                    // }
                    echo '<div class="slide-item" style="background-image: url(assets/images/img3.jpg)" alt=""></div>'
                ?>
            </div>

            <div class="layout center justified slider-buttons">
                <button onclick="prevSlide()">
                    <i class="fa fa-angle-left"></i>
                </button>
                <button onclick="nextSlide()">
                    <i class="fa fa-angle-right"></i>
                </button>
            </div>
        </div>
        <div class="scrim" style="color: #fff">
            <div class="container layout vertical center-justified">
                <h1>Looking for paint?</h1>
                <p>You've come to the right place.</p>
            </div>
        </div>
    </div>
    <!-- END BANNER -->

    <script>
        var counter = 1;
        var max = 3;
        var scroller = document.getElementById("slideScroller");
        return;

        setInterval(function(){
            console.log(counter);
            scroller.style.transform = "translateX("+ counter * - 100 +"%)";
            counter++;

            if(counter == 4)
                counter = 0;
        }, 3500);
    </script>

<?php include 'includes/templates/footer.php'; ?>
