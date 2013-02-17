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
		var faq_en = new String();
		var faq_id = new String();
		var lang="en";
		function loadPage() {
			faq_en = document.getElementById('faq_en').innerHTML;
			faq_id = document.getElementById('faq_id').innerHTML;
			switch(lang){
				case "en":{
					Javascript: document.getElementById('faqFrame').innerHTML = faq_en;
				}break
				
				case "id":{
					Javascript: document.getElementById('faqFrame').innerHTML = faq_id;
				}break;
			}
		}
		
		function setLan(val){
			lang=val;
			loadPage();
		}
		
    </script>

    	<div id="mainHead">
   	    	<img src="source/images/header/mainLogo.png" width="800" height="107" alt="Masterpiece Window Film | The Power of WIndow Film" longdesc="http://masterpiece-windowfilm.com" />
        </div>
        
        <div id="headerBar">
            <div id="headerBarLatin">
				<div class="menuHeader" style="background-image:url(source/images/header/header_aboutus.png); background-position:right; background-repeat:no-repeat;">About US</div>
            </div>
            <div id="headerBarJapan">
            	<div class="menuHeaderJapan">
                	<div id="japanHeaderFrame" style="height:10px;"></div>
				</div>
            </div>
        </div>
        
        <div id="main">
        	<div id="aboutUsDesc">
            	<div id="products_wrapper_text">
                    <h1>MASTERPIECE WINDOW FILM FOR AUTOMOBILE</h1>
                    <p>
                        <!--<div id="popUpHeader"></div>-->
                  <form action="" method="post" name="Bahasa">
                            Please Select Language : <select onchange="javascript: setLan(this.value)" name="Lan" id="myselect" size="0">
                                <option value="en">English</option>
                                <option value="id">Bahasa</option>
                            </select>
                        </form>
                    </p>
                    
                    <div id="disp" style="display:none">
                        <div id="faq_en">
                            <p align="right"><img src="source/images/automobile/pic/logo.png" width="240" height="50" alt="logo" /></p>
                            <center><p><img src="source/images/automobile/pic/automobile.jpg" width="320" height="180" alt="automobile" /></p></center>
                            
                            <p>
                                <img src="source/images/aboutus/mast_xs.png" width="132" height="14" alt="Masterpiece Logo" /> <b> WINDOW FILM</b> very suitable applied on your vehicle, it can control the heat up to 99%, and provide clarity color display with 20%. Choice diverse darkness makes the vehicle look can be customized to your taste. 
                            </p>
                            
                            <p>
                                The application of <img src="source/images/aboutus/mast_xs.png" width="132" height="14" alt="Masterpiece Logo" /> <b> WINDOW FILM</b> also supported by skilled personnel who are trained, so that installation errors can be minimized.   
                            </p>
                            <p>&nbsp;</p>
                            <div id="aboutUsDesc" style="margin:20px">
                                <div id="automobile_box_container">
                                    <div id="automobile_box" class="automobile_box1"><a class="fancybox" href="source/images/automobile/pic/img_1.jpg" data-fancybox-group="gallery" title="MASTERPIECE Window Film for Automobile"><img src="source/images/automobile/thumb/img_1.jpg" width="150" height="90" alt="automobile" /></a></div>
                                    <div id="automobile_box" class="automobile_box2"><a class="fancybox" href="source/images/automobile/pic/img_2.jpg" data-fancybox-group="gallery" title="MASTERPIECE Window Film for Automobile"><img src="source/images/automobile/thumb/img_2.jpg" width="150" height="90" alt="automobile" /></a></div>
                                    <div id="automobile_box" class="automobile_box3"><a class="fancybox" href="source/images/automobile/pic/img_3.jpg" data-fancybox-group="gallery" title="MASTERPIECE Window Film for Automobile"><img src="source/images/automobile/thumb/img_3.jpg" width="150" height="90" alt="automobile" /></a></div>
                                </div>
                                <div id="automobile_box_container">
                                    <div id="automobile_box" class="automobile_box1"><a class="fancybox" href="source/images/automobile/pic/img_4.jpg" data-fancybox-group="gallery" title="MASTERPIECE Window Film for Automobile"><img src="source/images/automobile/thumb/img_4.jpg" width="150" height="90" alt="automobile" /></a></div>
                                    <div id="automobile_box" class="automobile_box2"><a class="fancybox" href="source/images/automobile/pic/img_5.jpg" data-fancybox-group="gallery" title="MASTERPIECE Window Film for Automobile"><img src="source/images/automobile/thumb/img_5.jpg" width="150" height="90" alt="automobile" /></a></div>
                                    <div id="automobile_box" class="automobile_box3"><a class="fancybox" href="source/images/automobile/pic/img_6.jpg" data-fancybox-group="gallery" title="MASTERPIECE Window Film for Automobile"><img src="source/images/automobile/thumb/img_6.jpg" width="150" height="90" alt="automobile" /></a></div>
                                </div>
                            </div>
                            <p>&nbsp;</p>
                            <p>
                                Stage installation of <img src="source/images/aboutus/mast_xs.png" width="132" height="14" alt="Masterpiece Logo" /> <b> WINDOW FILM</b>:
                                <ul>
                                    <li>Clean the glass with glass cleaner or a liquid detergent.</li>
                                    <li>Spray water detergent to the glass surface that is ready to be installed window film.</li>
                                    <li>Cut window film slightly wider than the width of the glass to be fitted with window film and window film with a water spray detergent.</li>
                                    <li>Trim the location of window film to the glass, and then press using a rubber spatula while being moved towards the edge of the liquid detergent that is between the glass and window film pushed out. Do it repeatedly until no more air in the window film.</li>
                                    <li>In certain glass made using a warm dryer for easier installation.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    
                    <div id="disp" style="display:none">
                        <div id="faq_id">
                            <p align="right"><img src="source/images/automobile/pic/logo.png" width="240" height="50" alt="logo" /></p>
                            <center><p><img src="source/images/automobile/pic/automobile.jpg" width="320" height="180" alt="automobile" /></p></center>
                            
                            <p>
                                <img src="source/images/aboutus/mast_xs.png" width="132" height="14" alt="Masterpiece Logo" /> <b> WINDOW FILM</b> sangat cocok diaplikasikan pada kendaraan anda, karena dapat mengendalikan panas hingga 99%, dan memberikan tampilan warna yang dengan kejernihan 20%. Pilihan kegelapan yang beragam membuat tampilan kendaraan dapat disesuaikan dengan selera anda. 
                            </p>
                            
                            <p>
                                Pengaplikasian <img src="source/images/aboutus/mast_xs.png" width="132" height="14" alt="Masterpiece Logo" /> <b> WINDOW FILM</b> juga didukung dengan tenaga terampil yang terlatih, Sehingga kesalahan pemasangan dapat diminimalisasikan.
                            <p>&nbsp;</p>
                            <div id="aboutUsDesc" style="margin:20px">
                                <div id="automobile_box_container">
                                    <div id="automobile_box" class="automobile_box1"><a class="fancybox" href="source/images/automobile/pic/img_1.jpg" data-fancybox-group="gallery" title="MASTERPIECE Window Film for Automobile"><img src="source/images/automobile/thumb/img_1.jpg" width="150" height="90" alt="automobile" /></a></div>
                                    <div id="automobile_box" class="automobile_box2"><a class="fancybox" href="source/images/automobile/pic/img_2.jpg" data-fancybox-group="gallery" title="MASTERPIECE Window Film for Automobile"><img src="source/images/automobile/thumb/img_2.jpg" width="150" height="90" alt="automobile" /></a></div>
                                    <div id="automobile_box" class="automobile_box3"><a class="fancybox" href="source/images/automobile/pic/img_3.jpg" data-fancybox-group="gallery" title="MASTERPIECE Window Film for Automobile"><img src="source/images/automobile/thumb/img_3.jpg" width="150" height="90" alt="automobile" /></a></div>
                                </div>
                                <div id="automobile_box_container">
                                    <div id="automobile_box" class="automobile_box1"><a class="fancybox" href="source/images/automobile/pic/img_4.jpg" data-fancybox-group="gallery" title="MASTERPIECE Window Film for Automobile"><img src="source/images/automobile/thumb/img_4.jpg" width="150" height="90" alt="automobile" /></a></div>
                                    <div id="automobile_box" class="automobile_box2"><a class="fancybox" href="source/images/automobile/pic/img_5.jpg" data-fancybox-group="gallery" title="MASTERPIECE Window Film for Automobile"><img src="source/images/automobile/thumb/img_5.jpg" width="150" height="90" alt="automobile" /></a></div>
                                    <div id="automobile_box" class="automobile_box3"><a class="fancybox" href="source/images/automobile/pic/img_6.jpg" data-fancybox-group="gallery" title="MASTERPIECE Window Film for Automobile"><img src="source/images/automobile/thumb/img_6.jpg" width="150" height="90" alt="automobile" /></a></div>
                                </div>
                            </div>
                            <p>&nbsp;</p>
                            <p>
                                Tahap pemasangan <img src="source/images/aboutus/mast_xs.png" width="132" height="14" alt="Masterpiece Logo" /> <b> WINDOW FILM</b>:
                                <ul>
                                    <li>Bersihkan permukaan kaca dengan glass cleaner ataupun dengan cairan detergen.</li>
                                    <li>Semprotkan air detergen ke permukaan kaca yang siap dipasang kaca film.</li>
                                    <li>Potong kaca film sedikit lebih lebar dibandingkan dengan luas kaca yang akan dipasangi kaca film,
dan semprot kaca film dengan air detergen.</li>
                                    <li>Rapikan letak kaca film pada kaca, kemudian tekan menggunakan spatula karet sambil digeser kearah pinggir agar cairan detergen yang berada diantara kaca dan kaca film terdorong keluar. Lakukan berulang-ulang hingga tidak ada udara lagi pada kaca film.</li>
                                    <li>Pada kaca tertentu dilakukan pemanasan menggunakan dryer untuk memudahkan pemasangan.</li>
                                    <li>Potong dengan cutter pinggiran kaca film mengikuti bentuk kaca.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    
                    <div id="faqFrame">
						<script>
                            setLan('en');
                        </script>
                    </div>
                </div>
                
                <div id="spander"></div>    
			</div>
        </div>
        
		<div id="main">
        	<div id="longBannerGreen"></div>
            <div id="longBannerBlue"></div>
            
            <?php
				include("include/bottomNav.inc.php");
			?>