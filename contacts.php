<?php
    $page = "contacts";
    include 'includes/templates/header.php';
?>
    <style>
        footer{
            background: #f5f5f5;
        }
    </style>
    <div id="contactUsPage">
    	<div class="banner">
    		<div class="container layout vertical center-justified">
	            <h1>Contact US</h1>
	            <p>
	                Say hi, reach out tell us what you want.
	            </p>
	        </div>
    	</div>

        <div class="layout">
            <div class="flex layout center-justified">
                <div id="theMap" style="height: 450px; margin-right: -40px; width: 500px; margin-top: 45px; background: #f0f0f0">
                    
                </div>
            </div>
            <div id="enquiry">
                <h1 class="section-title" style="margin-left: 60px;">
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
        </div>
    </div>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClGUi2nojUCAB1c-N1EJqkiBLId1hzx_s&callback=initMap">
    </script>

    <script>
        function initMap() {
            var opt = { minZoom: 17, maxZoom: 17, type: 'satellite', mapTypeControl: false };

            var map1 = new google.maps.Map(document.getElementById('theMap'), {
                zoom: 17,
                center: {lat: -6.7561356, lng: 39.2468857}
            });

            map1.setOptions(opt);

            var image = 'images/marker.png';

            var marker = new google.maps.Marker({
                position: {lat: -6.7561356, lng: 39.2468857},
                map: map1,
                icon: image
            });
        }
    </script>
<?php include 'includes/templates/footer.php'; ?>        
