	<!--Map-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript">
			var map;
			var mainMap;
			function initialize() {
				var myOptions = {
					panControl: false,
					zoomControl: false,
					mapTypeControl: false,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: false,
					zoom: 15,
					center: new google.maps.LatLng(-6.23779, 106.62894),
					mapTypeId: google.maps.MapTypeId.ROADMAP
            };
			map = new google.maps.Map(document.getElementById('contactUS_mainFrame_right_Map'),myOptions);
          }
    
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
    <!--End Map-->

		<div id="mainHead">
			<img src="source/images/header/mainLogo.png" width="800" height="107" alt="Masterpiece Window Film | The Power of WIndow Film" longdesc="http://masterpiece-windowfilm.com" />
        </div>
        
        <div id="headerBar">
            <div id="headerBarLatin">
				<div class="menuHeader" style="background-image:url(source/images/header/header_contactus.png); background-position:right; background-repeat:no-repeat;">Contact US</div>
			</div>
            <div id="headerBarJapan">
            	<div class="menuHeaderJapan">
                	<div id="japanHeaderFrame" style="height:10px;"></div>
				</div>
            </div>
        </div>
        
        <div id="main">
        	<div id="aboutUsDesc">
            	<div id="contactUS_mainFrame" style="height:200px;">
                	<div id="contactUS_mainFrame_left">
                    	<h1>THANK YOU..</h1>
                    	<p style="font-size:14px;">
                        	Thank you for sending us a message. Your message was sucessuflly sent and we will respond it as soon as possible..
                        </p>
                        <p><a href="index.php?location=contactus">Back to Contact US page..</a></p>
                    </div>
                </div>
			</div>
        </div>
        
		<div id="main">
        	<div id="longBannerGreen"></div>
            <div id="longBannerBlue"></div>
            
            <?php
				include("include/bottomNav.inc.php");
			?>