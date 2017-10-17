<?php
    $page = "products";
    include 'includes/templates/header.php';
?>
    <div id="productsPage">
    	<div class="banner">
    		<div class="container layout vertical center-justified">
	            <h1>Products</h1>
	            <p>
	                We deal in a diversity of paint products, please check them out below.
	            </p>
	        </div>
    	</div>

    	<div id="productCatalog" class="text-center">
	        <!-- <h1 class="section-title">
	            The Products
	        </h1> -->
	        <div class="container">
	            <div class="layout wrap">
	                <?php
	                    for ($i=0; $i < 6; $i++) { 
	                        echo '
	                            <div class="product-item">
	                                <div class="image"></div>
	                                <div class="text">
	                                	<h5>suscipit distinctio est</h5>
                                    	<p>@23,000Tshs.</p>
	                                </div>
	                            </div>
	                        ';
	                    }
	                ?>
	            </div>
	        </div>
	    </div>
    </div>
<?php include 'includes/templates/footer.php'; ?>        
