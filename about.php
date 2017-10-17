<?php
    $page = "about";
    include 'includes/templates/header.php';
?>
	<div id="aboutPage">
	    <div class="banner">
	        <div class="container layout vertical center-justified">
	            <h1>About Us</h1>
	            <p>
	            	Simba paints was incepted in the year 2012 to become a solution
	            	for bulk paint provision all across the city and nation at large, we work with the simple motto of "getting it just right".
	            </p>
	        </div>
	    </div>

	    <div id="theObvious">
	    	<div class="container">
	    		<div class="layout justified">
			    	<div id="ourVision" class="obvious-item">
			    		<i class="fa fa fa-lightbulb-o"></i>
			    		<div class="text">
			    			<h3>Our Vision</h3>
			    			<p>
			    				To become the quickest connect between an unfinished surface and a finished modern looking memory that will enlighten the minds of whoever sees it.
			    			</p>
			    		</div>
			    	</div>

			    	<div id="ourMission" class="obvious-item">
			    		<i class="fa fa-send-o"></i>
			    		<div class="text">
			    			<h3>Our Mission</h3>
			    			<p>
			    				To reduce the hustle and pain that is associated with finding the correct paint for both customers, builders and designers alike whilst being the lead in our field.
			    			</p>
			    		</div>
			    	</div>

			    	<!-- <div id="ourValues" class="obvious-item">
			    		<i class="fa fa-heart-o"></i>
			    		<div class="text">
			    			<h3>Our Values</h3>
			    			<p>
			    				Esse dolores sunt nemo consequuntur aut maxime maiores. Sapiente rem i quam optio ducimus fuga
			    			</p>
			    		</div>
			    	</div> -->
			    </div>
	    	</div>
	    </div>

	    <hr style="border: none; border-bottom: 1px solid #ddd; width: 30%; margin: auto; margin-top: 70px">

	    <div id="companyBackground" class="container">
	    	<div class="layout">
	    		<div class="potrait-image"></div>
	    		<div class="flex">
	    			<h2>More than just the colour</h2>
	    			<p>
	    				The paint choice could make all the difference on where it is applied or completely ruin the look if special attention isn't observed. Work with us, we'll make sure you get paired with the correct paint for your purpose surface and intention to make sure whatever you're working on has a very professional looking finish.
	    			</p>
	    		</div>
	    	</div>
	    </div>

	    <div id="whatWeDo">
	    	<div class="container">
	    		<h2>What we do</h2>
	    		<p>
	    			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eveniet, neque harum voluptas rem et aspernatur deleniti omnis dicta ut, sed nisi qui eius, odit? But we mostly deal with
	    		</p>

	    		<ul>
	    			<li>adipisicing elit. Dignissimos quae omnis, pariatur</li>
	    			<li>ex vel aliquam magnam? Reprehenderit quaerat molestias.</li>
	    			<li>Repudiandae unde! Voluptates in dicta id accusantium.</li>
	    		</ul>
	    	</div>
	    </div>
	</div>

	<div id="meetTheTeam" class="text-center">
        <h1 class="section-title">
            Meet the team
        </h1>

        <div class="container">
            <div id="teamMembers" class="layout wrap">
                <?php
	                for ($i=0; $i < 4; $i++) { 
	                    echo '
	                        <div class="team-member layout">
	                            <div class="image"></div>
	                            <div class="text">
	                            	<h3>Person Name</h3>
	                            	<h5>Their role</h5>
	                            	<p>
	                            		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eveniet, neque harum voluptas
	                            	</p>
	                            </div>
	                        </div>
	                    ';
	                }
	            ?>
            </div>
        </div>
    </div>

<?php include 'includes/templates/footer.php'; ?>        
