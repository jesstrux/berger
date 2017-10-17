<div id="sampleProductCatalog" class="text-center">
        <h1 class="section-title">
            Featured Products
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