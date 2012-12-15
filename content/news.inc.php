<!-- START JQUERY FANCY BOX -->
	<!-- Add jQuery library -->
	<script type="text/javascript" src="source/script/jquery/lib/jquery-1.8.0.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="source/script/jquery/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/script/jquery/source/jquery.fancybox.js?v=2.1.0"></script>
	<link rel="stylesheet" type="text/css" href="source/script/jquery/source/jquery.fancybox.css?v=2.1.0" media="screen" />

	<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
<!-- END JQUERY FANCY BOX -->

<script type="text/javascript">
	var cs_car = new String();
	var cs_building = new String();
	var pos="car";
	function loadPage() {
		cs_car = document.getElementById('cs_car').innerHTML;
		cs_building = document.getElementById('cs_building').innerHTML;
		switch(pos){
			case "car":{
				Javascript: document.getElementById('csFrame').innerHTML = cs_car;
			}break
			
			case "building":{
				Javascript: document.getElementById('csFrame').innerHTML = cs_building;
			}break;
		}
	}
	
	function setPos(val){
		pos=val;
		loadPage();
		
	}
	
</script>

    	<div id="mainHead">
   	    <img src="source/images/header/mainLogo.png" width="800" height="119" alt="Masterpiece Window Film | The Power of WIndow Film" longdesc="http://masterpiece-windowfilm.com" /></div>
        
        <div id="headerBar">
            <div id="headerBarLatin">
				<div class="menuHeader">News &amp; Events</div>
            </div>
            <div id="headerBarJapan">
            	<div class="menuHeaderJapan">
                	<div id="japanHeaderFrame" style="height:20px; background-image:url(source/images/header/header_aboutus.png);"></div>
				</div>
            </div>
        </div>
        
        <div id="cs_menuHeader">
        	<div id="cs_menuContainer">
            	<div id="cs_menuContainer_opt" class="cs_menuContainer_opt_left">
                	<div id="cs_menu_opt" onclick="setPos('car')" style="background-image:url(source/style/image/bkgrdnews.png)"></div>
                </div>
            	<div id="cs_menuContainer_opt" class="cs_menuContainer_opt_right">
                	<div id="cs_menu_opt" onclick="setPos('building')" style="background-image:url(source/style/image/bkgrdevents.png)"></div>
                </div>
            </div>
        </div>
        
		<div id="main">            
            <div id="disp" style="display:none">
                <div id="cs_car">
					<div id="aboutUsDesc">
                        <div id="products_wrapper_text">
                            <h1>SOME NEWS ABOUT US</h1>
                        </div>
                        
                        <?php 
							include_once("include/sys_inc/estcon.inc.php");
						?>
                        
                        <div id="products_wrapper_text" style="margin-top:40px;">
                        	<?php
                             	//query News
								$query = "SELECT *
											FROM data_newsAndEvent
											WHERE category = 'News' AND flag = '1'";
								
								$result = mysql_query($query);
								$i=1;
								while($row = mysql_fetch_array($result))
									{	
										if ($i%2){
											echo "<div id=\"newsWrapper\">";
											echo "	<div id=\"picThumb\"><img src=\"source/images/news/thumbnail/".$row['picThumb']."\" width=\"100\" height=\"100\" alt=\"".$row['picThumb']."\" /></div>";
											echo "	<div id=\"newsContent\" class=\"newsContent_left\">";
											echo "		<h4><a  class=\"fancybox\" href=\"#".$row['contentID']."\" title=\"".$row['additionalInfo']."\">".$row['contentTitle']."</a></h4>";
											echo "		<span class=\"newsDate\">".date_format(date_create($row['addedDate']), 'l jS F Y')."</span>";
											echo "		<p>".$row['shortDesc']." <a class=\"fancybox\" href=\"#".$row['contentID']."\" title=\"".$row['additionalInfo']."\">( read more.. )</a>";
											echo "	</p>";
											echo "	</div>";
											echo "</div>";
										}else{
											echo "<div id=\"newsWrapper\">";
											echo "	<div id=\"picThumb\" class=\"picThumb_right\"><img src=\"source/images/news/thumbnail/".$row['picThumb']."\" width=\"100\" height=\"100\" alt=\"".$row['picThumb']."\" /></div>";
											echo "	<div id=\"newsContent\" class=\"newsContent_right\">";
											echo "		<h4><a  class=\"fancybox\" href=\"#".$row['contentID']."\" title=\"".$row['additionalInfo']."\">".$row['contentTitle']."</a></h4>";
											echo "		<span class=\"newsDate\">".date_format(date_create($row['addedDate']), 'l jS F Y')."</span>";
											echo "		<p>".$row['shortDesc']." <a class=\"fancybox\" href=\"#".$row['contentID']."\" title=\"".$row['additionalInfo']."\">( read more.. )</a>";
											echo "	</p>";
											echo "	</div>";
											echo "</div>";
										}
										
										echo "<div id=\"".$row['contentID']."\" style=\"width:640px; display: none;\">";
										echo "	<h2 style=\"font-size:24px; margin:10px 20px; line-height: 120%;\">".$row['additionalInfo']."</h2>";
										echo "	".$row['content']."";
										echo "</div>";
										
										if($flagLine == true){
											echo '</div>';
										}
										$i++;
									}
								?>
                        
                   	    	<!--<div id="newsWrapper">
                            	<div id="picThumb"><img src="source/images/news/test.png" width="100" height="100" alt="test" /></div>
                                <div id="newsContent" class="newsContent_left">
                                	<h4><a href="#">Masterpiece: Kaca Film Kualitas Teratas Dengan Harga Terjangkau by EYANXJENDRAL.COM, 30 July 2011.</a></h4>
                                    <span class="newsDate">10 December 2012</span>
                                    <p>
                                    Unfortunately, this page is under construction and not available yet. We are sorry for the inconvenience and appreciate your patience. This page will availabe as soon as possible. Maybe you can visit our other pages. See you soon.. <a href="#">( read more.. )</a>
                                </p>
                                </div>
                            </div>
                            
                            <div id="newsWrapper">
                            	<div id="picThumb" class="picThumb_right"><img src="source/images/news/test.png" width="100" height="100" alt="test" /></div>
                                <div id="newsContent" class="newsContent_right">
                                	<h4><a href="#">Masterpiece: Kaca Film Kualitas Teratas Dengan Harga Terjangkau by EYANXJENDRAL.COM, 30 July 2011.</a></h4>
                                    <span class="newsDate">10 December 2012</span>
                                    <p>
                                    Unfortunately, this page is under construction and not available yet. We are sorry for the inconvenience and appreciate your patience. This page will availabe as soon as possible. Maybe you can visit our other pages. See you soon.. <a href="#">( read more.. )</a>
                                </p>
                                </div>
                            </div>-->
                            
                        </div>
                        
                        <div id="products_wrapper_text">
                        	<p>&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="disp" style="display:none">
                <div id="cs_building">
                	<div id="aboutUsDesc">
                        <div id="products_wrapper_text">
                            <h1>OUR LATEST EVENTS</h1>
                        </div>
                        
						<?php
                            //query News
                            $query_event = "SELECT *
                                        FROM data_newsAndEvent
                                        WHERE category = 'Events' AND flag = '1'
										ORDER BY 1 DESC";
                            
                            $result_event = mysql_query($query_event);
                            while($row_event = mysql_fetch_array($result_event))
                                {	
                                    echo "<div id=\"products_wrapper_text\" style=\"margin-top:60px;\">";
									echo "	<div id=\"event_InfoWrapper\">";
									echo "		<h3>".$row_event['contentTitle']."</h3>";
									echo "		<span class=\"newsDate\">".date_format(date_create($row_event['addedDate']), 'l jS F Y')."</span>";
									echo "		<p>".$row_event['shortDesc']."</p>";
									echo "	</div>";
									echo "	<div id=\"eventWrapper\">";
									echo "		<center>";
												$query_event_pic = "SELECT *
															FROM data_picTable
															WHERE contentID = '".$row_event['contentID']."' AND flag = '1'";
												
												$result_event_pic = mysql_query($query_event_pic);
												while($row_event_pic = mysql_fetch_array($result_event_pic))
													{
														echo "		<a class=\"fancybox\" href=\"source/images/news/pic/".$row_event_pic['urlPic']."\" data-fancybox-group=\"gallery\" title=\"".$row_event_pic['captions']."\"><img id=\"event_picThumb\" src=\"source/images/news/thumbnail/".$row_event_pic['urlThumb']."\" width=\"100\" height=\"100\" alt=\"".$row_event_pic['picThumb']."\" /></a>";
													}
									echo "		</center>";
									echo "	</div>";
									echo "</div>";
                                }
                            ?>
                        <!--<div id="products_wrapper_text" style="margin-top:60px;">
                        	<div id="event_InfoWrapper">
                                <h3>INDONESIA INTERNATIONAL MOTOR SHOW ( IIMS ) 2011 @ JIExpo Kemayoran - Jakarta</h3>
                                <span class="newsDate">10 December 2012</span>
                                <p>
                                    If you can't find what you are looking for here, feel free to email us with your query and we will get back
        to you within 5 working days.
                                </p>
                            </div>
                   	    	<div id="eventWrapper">
                            	<center>
                                <img id="event_picThumb" src="source/images/news/test.png" width="100" height="100" alt="test" />
                                <img id="event_picThumb" src="source/images/news/test.png" width="100" height="100" alt="test" />
                                <img id="event_picThumb" src="source/images/news/test.png" width="100" height="100" alt="test" />
                                <img id="event_picThumb" src="source/images/news/test.png" width="100" height="100" alt="test" />
                                <img id="event_picThumb" src="source/images/news/test.png" width="100" height="100" alt="test" />
                                </center>
                            </div>
                        </div>-->
                        
                        <div id="products_wrapper_text">
                        	<p>&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="csFrame">
				<script>
                    setPos('car');
                </script>
            </div> 
        </div>
        
		<div id="main">
        	<div id="longBannerGreen"></div>
            <div id="longBannerBlue"></div>
            
            <?php
				include("include/bottomNav.inc.php");
			?>