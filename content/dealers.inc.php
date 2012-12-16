<!--Map-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
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
	</script>
<!--End Map-->

<script src="source/scripts/swfobject_modified.js" type="text/javascript"></script>
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
                    <div id="dealer_address_margin">
                   	  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="600" height="400" id="FlashID" title="Address List">
                    	  <param name="movie" value="source/object/addresslist.swf" />
                    	  <param name="quality" value="high" />
                    	  <param name="wmode" value="opaque" />
                    	  <param name="swfversion" value="6.0.65.0" />
                    	  <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
                    	  <param name="expressinstall" value="source/scripts/expressInstall.swf" />
                    	  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
                    	  <!--[if !IE]>-->
                    	  <object type="application/x-shockwave-flash" data="source/object/addresslist.swf" width="600" height="400">
                    	    <!--<![endif]-->
                    	    <param name="quality" value="high" />
                    	    <param name="wmode" value="opaque" />
                    	    <param name="swfversion" value="6.0.65.0" />
                    	    <param name="expressinstall" value="Scripts/expressInstall.swf" />
                    	    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
                    	    <div>
                    	      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                    	      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
                  	      </div>
                    	    <!--[if !IE]>-->
                  	    </object>
                    	  <!--<![endif]-->
                  	  </object>
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
