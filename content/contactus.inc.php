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
				<div class="menuHeader">Contact US</div>
			</div>
            <div id="headerBarJapan">
            	<div class="menuHeaderJapan">
                	<div id="japanHeaderFrame" style="height:20px; background-image:url(source/images/header/header_contactus.png);"></div>
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
                    	<form name="frm_sendEmail" action="sendEmail.php" method="post">
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
                                    <textarea name="tb_email" id="tb_email" class="inputTextAreaStyle" ></textarea>
                                </td>
                            </tr>
                            <tr>
                            	<td>
                                	<input type="submit" value="Send Message" class="fsSubmitButton" />
                                </td>
                            </tr>
                        </table>
                        </form>
                    </div>
                    <div id="contactUS_mainFrame_right">
                    	<div id="contactUS_mainFrame_right_Map" class="dropShadow"></div>
                        <div id="contactUS_mainFrame_right_Table" class="dropShadow">
                        	<table width="100%">
                            	<tr valign="top">
                                	<td width="70px">Telephone</td>
                                    <td>+62 21 37311131</td>
                                </tr>
                                
                                <tr valign="top">
                                	<td>Email</td>
                                    <td>info@masterpiece-windowfilm.com</td>
                                </tr>
                                
                                <tr valign="top">
                                	<td>Facebook</td>
                                    <td><a href="http://www.facebook.com/masterpiece.windowfilm.7?ref=ts">Our Facebook</a></td>
                                </tr>
                                <tr valign="top">
                                	<td>Twitter</td>
                                    <td><a href="https://twitter.com/Masterpiecewf/">@Masterpiecewf</a></td>
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
                                
                                <tr>
                                	<td colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                	<td colspan="2"><a href="mailto:info@masterpiece-windowfilm.com">Send an Email</a></td>
                                </tr>
                            </table>
                        </div>
                        
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