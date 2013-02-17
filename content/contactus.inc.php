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
				<div class="menuHeader" style="background-image:url(source/images/header/header_contactus.png); background-position:right; background-repeat:no-repeat;">Contact Us</div>
			</div>
            <div id="headerBarJapan">
            	<div class="menuHeaderJapan">
                	<div id="japanHeaderFrame" style="height:10px;"></div>
				</div>
            </div>
        </div>
        
        <div id="main">
        	<div id="aboutUsDesc">
            	<div id="contactUS_mainFrame">
                	<div id="contactUS_mainFrame_left">
                    	<h1>NEED TO GET IN TOUCH?</h1>
                    	<p>
                        	We aim to have 100% customer satisfaction and a smooth operation ensuring that you receive the attention and care you deserve. However if you have any question regarding our service or products please check out our <a href="index.php?location=faq">FaQ section.</a>
                        </p>
                        
                        <p>
                        	If you can't find what you are looking for feel free to email us with your query and we will get back
to you within 5 working days.
                        </p>
                    	<form name="frm_sendEmail" action="actions/sendMail.php" method="post">
                    	<table width="100%">
                        	<tr>
                                <td>
                                	Name <span class="required">(required*)</span><br />
                                    <input type="text" name="tb_name" id="tb_name" class="inputTextStyle" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email Address <span class="required">(required*)</span><br />
                                    <input type="text" name="tb_email" id="tb_email" class="inputTextStyle" />
                                </td>
                            </tr>
                            <tr>
                            	<td>
                                	Your Message <span class="required">(required*)</span><br />
                                    <textarea name="tb_message" id="tb_message" class="inputTextAreaStyle" ></textarea>
                                </td>
                            </tr>
                            <tr>
                            	<td>
                                	<input type="submit" value="Send Message" class="fsSubmitButton" />
                                </td>
                            </tr>
                        </table>
                        </form>
                        <p>&nbsp;</p>
                        <div id="contactUS_mainFrame_right_Table" class="dropShadow">
                        	<table width="100%" style="margin:10px;">
                            	<tr valign="middle">
                                	<td width="50px"><img src="source/images/contactus/masterpiece-telephone.png" width="40" height="40" alt="Telephone icon" /></td>
                                    <td>+62 21 37311131</td>
                                </tr>
                                
                                <tr valign="middle">
                                	<td><img src="source/images/contactus/masterpiece-email.png" width="40" height="40" alt="Email icon" /></td>
                                    <td><a href="mailto:info@masterpiece-windowfilm.com">info@masterpiece-windowfilm.com</a></td>
                                </tr>
                                
                                <tr valign="middle">
                                	<td><img src="source/images/contactus/masterpiece-facebook.png" width="40" height="40" alt="Facebook icon" /></td>
                                    <td><a href="http://www.facebook.com/masterpiece.windowfilm.7?ref=ts">facebook.com/masterpiece.windowfilm.7</a></td>
                                </tr>
                                <tr valign="middle">
                                	<td><img src="source/images/contactus/masterpiece-twitter.png" width="40" height="40" alt="Twitter icon" /></td>
                                    <td><a href="https://twitter.com/Masterpiecewf/">@Masterpiecewf</a></td>
                                </tr>
                                
                                <tr>
                                	<td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                
                                <tr valign="top">
                                	<td>Share</td>
                                    <td>
                                    	<a name="fb_share" type="button_count" share_url="www.masterpiece-windowfilm.com/index.php" href="http://www.facebook.com/sharer.php">On Facebook</a>
                                    </td>
                                </tr>
                                <tr valign="top">
                                	<td></td>
                                    <td><a href="http://twitter.com/home?status=Currently reading http://www.masterpiece-windowfilm.com/" title="Click to share this post on Twitter">On Twitter</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div id="contactUS_mainFrame_right">
                    	<div id="contactUS_mainFrame_right_Map" class="dropShadow"></div>
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