<!--Map-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    
    <!--<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript">
			var map;
			var mainMap;
			function initialize() {
				var myOptions = {
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true,
					zoom: 15,
					center: new google.maps.LatLng(-6.23779, 106.62894),
					mapTypeId: google.maps.MapTypeId.ROADMAP
            };
			map = new google.maps.Map(document.getElementById('delaerMap'),myOptions);
          }
    
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>-->
<!--End Map-->

    	<div id="mainHead">
   	    <img src="source/images/header/mainLogo.png" width="800" height="107" alt="Masterpiece Window Film | The Power of WIndow Film" longdesc="http://masterpiece-windowfilm.com" /></div>
        
        <div id="headerBar">
            <div id="headerBarLatin">
				<div class="menuHeader">Dealer's Locations</div>
            </div>
            <div id="headerBarJapan">
            	<div class="menuHeaderJapan">
                	<div id="japanHeaderFrame" style="height:20px; background-image:url(source/images/header/header_dealers.png);"></div>
				</div>
            </div>
        </div>
        
        <div id="main">
        	<div id="aboutUsDesc">
				<div id="products_wrapper_text">
					<h1>WHERE WE LOCATED</h1>
                    	<p>
                        	Unfortunately, this page is under construction and not available yet. We are sorry for the inconvenience and appreciate your patience. This page will availabe as soon as possible. Maybe you can visit our other pages. See you soon.. 
                        </p>
                        
                        <p>
                        	If you can't find what you are looking for here, feel free to email us with your query and we will get back
to you within 5 working days.
                        </p>
                </div>
                
                <div id="products_wrapper_text">
                	<div id="delaerMap"></div>
                </div>
                
                <div id="products_wrapper_text">
                    <div id="dealer_address">
                   	  
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
            <script type="text/javascript">
swfobject.registerObject("FlashID");
            </script>
