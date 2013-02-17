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
 	  	    <img src="source/images/header/mainLogo.png" width="800" height="107" alt="Masterpiece Window Film | The Power of WIndow Film" longdesc="http://masterpiece-windowfilm.com" />
        </div>
        
        <div id="headerBar">
            <div id="headerBarLatin">
				<div class="menuHeader" style="background-image:url(source/images/header/header_casestudy.png); background-position:right; background-repeat:no-repeat;">Case Study</div>
            </div>
            <div id="headerBarJapan">
            	<div class="menuHeaderJapan">
                	<div id="japanHeaderFrame" style="height:10px;"></div>
				</div>
            </div>
        </div>
        
        <div id="cs_menuHeader">
        	<div id="cs_menuContainer">
            	<div id="cs_menuContainer_opt" class="cs_menuContainer_opt_left">
                	<div id="cs_menu_opt" onclick="setPos('car')" style="background-image:url(source/style/image/bkgrdcars.png)"></div>
                </div>
            	<div id="cs_menuContainer_opt" class="cs_menuContainer_opt_right">
                	<div id="cs_menu_opt" onclick="setPos('building')" style="background-image:url(source/style/image/bkgrdbuilding.png)"></div>
                </div>
            </div>
        </div>
        
        <div id="main">            
            <div id="disp" style="display:none">
                <div id="cs_car">
					<div id="aboutUsDesc">
                        <div id="products_wrapper_text">
                            <h1>OUR CASE STUDY ON CARS</h1>
                                <p>
                                    MASTERPIECE window film strives to cooperate with the leading car showroom in the installation of window film. With α good heat rejecting quality, MASTERPIECE believes that it can dominate the window film market. 
                                </p>
                                
                                <p>
                                    The exclusive look of MASTERPIECE window film gives classic car users their pride. Supported by highly skilled and experienced installers, MASTERPIECE window film warrants your car to get that amazing look all the time.
                                </p>
                                
                                <p>
                                    Below are list of our car showroom partners in the installation of window film:
                                </p>
                        </div>
                    </div>
                    <div id="aboutUsDesc">
                        <div id="cs_box_container">
                            <div id="cs_box" class="cs_box1"><img src="source/images/casestudy/toyota.png" width="120" height="120" alt="Toyota Logo" /></div>
                            <div id="cs_box" class="cs_box2"><img src="source/images/casestudy/honda.png" width="120" height="120" alt="Honda Logo" /></div>
                            <div id="cs_box" class="cs_box3"><img src="source/images/casestudy/suzuki.png" width="120" height="120" alt="Suzuki Logo" /></div>
                            <div id="cs_box" class="cs_box4"><img src="source/images/casestudy/mazda.png" width="120" height="120" alt="Mazda Logo" /></div>
                        </div>
                        <div id="cs_box_container">
							<div id="cs_box" class="cs_box1"><img src="source/images/casestudy/bmw.png" width="120" height="120" alt="BMW Logo" /></div>
                            <div id="cs_box" class="cs_box2"><img src="source/images/casestudy/mitsubishi.png" width="120" height="120" alt="Mitsubishi Logo" /></div>
                            <div id="cs_box" class="cs_box3"><img src="source/images/casestudy/daihatsu.png" width="120" height="120" alt="Daihatsu Logo" /></div>
                            <div id="cs_box" class="cs_box4"><img src="source/images/casestudy/mini.png" width="120" height="120" alt="Mini Logo" /></div>
                        </div>
                        <div id="cs_box_container">
							<div id="cs_box" class="cs_box1"><img src="source/images/casestudy/chevrolet.png" width="120" height="120" alt="Chevrolet Logo" /></div>
                            <div id="cs_box" class="cs_box2"><img src="source/images/casestudy/ford.png" width="120" height="120" alt="Ford Logo" /></div>
                            <div id="cs_box" class="cs_box3"><img src="source/images/casestudy/mercedes.png" width="120" height="120" alt="Mercedes Benz Logo" /></div>
                            <div id="cs_box" class="cs_box4"><img src="source/images/casestudy/subaru.png" width="120" height="120" alt="Subaru Logo" /></div>
                        </div>
                    </div>
                    
                    <div id="aboutUsDesc">
                        <div id="products_wrapper_text">
                                <p>
                                    Not only that, MASTERPIECE window film is realiable in the installation of window films in car showrooms, it is also trustworthy to work with well known automotive clubs such as TERUCI ( Terios Rush Club Indonesia ) which is has thousands of members.
                                </p>
                        </div>
                    </div>
                    
                    <div id="aboutUsDesc">
                        <div id="cs_box_Teruci"><img src="source/images/casestudy/logo.jpg" width="510" height="69" alt="Terios Rush Club Indonesia" /></div>
                    </div>
                    
                    <div id="aboutUsDesc">
                        <div id="products_wrapper_text">
                            <p style="margin-bottom:100px;">&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="disp" style="display:none">
                <div id="cs_building">
                	<div id="aboutUsDesc">
                        <div id="products_wrapper_text">
                            <h1>OUR CASE STUDY ON BUILDINGS</h1>
                            <p>Besides in the installation of window film on vehicles, MASTERPIECE window film trustworthy on installing home, offices, and commercial buildings. MASTERPIECE able to reject the heat very well, protect the window, provide comfort and a give customers great view. </p>
                            <p>MASTERPIECE window film is a two way vision window film, which is the view from the inside will remain light, but from the outside will look dark.</p>
                        </div>
                        
						<div id="products_wrapper_text" align="center" style="border-color:#9ACD32;border-style:dotted;">
                            <p>&nbsp;</p>
                            <h2>OFFICE BUILDING PT SUMBER HARAPAN</h2>
                            <h3>Jl. Pulau Karam - Padang</h3>
                            <p>&nbsp;</p>
    						<p align="left" style="margin-left:50px;">Pemasangan : <b>Oktober 2010</b></p>
						</div>
                        
                        <div id="products_wrapper_text">
                       		<p>&nbsp;</p>
						</div>
                        
                        <div id="products_wrapper_text" align="center" style="border-color:#9ACD32;border-style:dotted;">
                        	<p>&nbsp;</p>
                        	<img src="source/images/casestudy/GoldsGym.png" width="252" height="254" alt="Gold's GYM" longdesc="http://www.goldsgym.co.id" />
                            <h2>GOLD'S GYM</h2>
                            <h3>PX Pavilion</h3>
                            <p>&nbsp;</p>
                            <p align="left" style="margin-left:50px;">Pemasangan : <b>Oktober 2010</b></p>
						</div>
                      
						<div id="products_wrapper_text">
                       		<p>&nbsp;</p>
						</div>
                      
                        <div id="products_wrapper_text" align="center" style="border-color:#9ACD32;border-style:dotted;">
                        	<p>&nbsp;</p>
                            <img src="source/images/casestudy/toto_logo.png" width="300" height="64" alt="TOTO" longdesc="http://www.toto.co.id"/>
                            <h2>PT. SURYA TOTO INDONESIA</h2>
                            <h3>Jl. M.H. Thamrin KM.7 Serpong, Tangerang 15001 Indonesia</h3>
                            <p>&nbsp;</p>
                            <p align="left" style="margin-left:50px;">Pemasangan : <b>November 2010</b></p>
                            
                        </div>
                        
						<div id="products_wrapper_text" class="columns_3">
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