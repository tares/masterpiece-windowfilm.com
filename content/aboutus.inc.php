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
   	    	<img src="source/images/header/mainLogo.png" width="800" height="107" alt="MASTERPIECE Window Film | The Power of WIndow Film" longdesc="http://masterpiece-windowfilm.com" />
        </div>
        
        <div id="headerBar">
            <div id="headerBarLatin">
				<div class="menuHeader">About US</div>
            </div>
            <div id="headerBarJapan">
            	<div class="menuHeaderJapan">
                	<div id="japanHeaderFrame" style="height:20px; background-image:url(source/images/header/header_aboutus.png);"></div>
				</div>
            </div>
        </div>
        
        <div id="main">
        	<div id="aboutUsDesc">
            	<div id="products_wrapper_text">
                    <h1>HAVE KNOW MORE ABOUT US</h1>
                        <!--<p>
                            We aim to have 100% customer satisfaction and a smooth operation ensuring that you receive the attention and care you deserve. However if you have any question regarding our service or products please check out our <a href="index.php?location=faq">FaQ section.</a>
                        </p>
                        
                        <p>
                            If you can't find what you are looking for feel free to email us with your query and we will get back
    to you within 5 working days.
                        </p>-->
                </div>
                
                <div id="products_wrapper_text" style="font-family:'century gothic', 'trebuchet ms', Helvetica, sans-serif, Arial; font-weight:bold;">
                    <!--<div id="popUpHeader"></div>-->
                    Please Select Language 
                    <form action="" method="post" name="Bahasa">
                        <select onchange="javascript: setLan(this.value)" name="Lan" id="myselect" size="0">
                            <option value="en">English</option>
                            <option value="id">Bahasa</option>
                        </select>
                    </form>
                </div>
            
            	<div id="disp" style="display:none">
                    <div id="faq_en">
                    	<div id="AboutUs_frame_top_def">
                            <p>
                                MASTERPIECE Window Film is a product made from the unification of the two best technology in Japan. Combination of sputtered technology and heat shielding technology,    
                            </p>
                            <p>
                                MASTERPIECE Window Film produced with high credibility to reject heat and also formed a great shield in preventive UV ray and infrared from the sun heat.
                            </p>
                            <p> 
                                MASTERPIECE Window Film specially designed to perform luxury and comfortable when driving.
                            </p>
                            <p>
                                MASTERPIECE Window Film has some superior performance :
                             </p>
                        </div>
                        
                        <div id="AboutUs_frame_top_def">
                            <table width="100%">
                                <tr valign="top">
                                    <td width="100%">
                                        <div id="headerBarLatin" class="dropShadow">
                                            <div id="longBannerGreen"></div>
                                            <div id="AboutUs_table_header">Save Energy </div>
                                        </div>
                                    </td>
                                </tr>
                            	<tr valign="top">
                                    <td>
                                        <div id="AboutUs_table_content" class="dropShadow">
                                            MASTERPIECE Window Film improves performance and fuel efficiency of the air conditioner by blocking penetrating heat rays.
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr><td>&nbsp;</td></tr>
                                
                                <tr valign="top">
                                    <td width="100%">
                                        <div id="headerBarLatin" class="dropShadow">
                                            <div id="longBannerGreen"></div>
                                            <div id="AboutUs_table_header">Clear View</div>
                                        </div>
                                    </td>
                                </tr>
                            	<tr valign="top">
                                    <td>
                                        <div id="AboutUs_table_content" class="dropShadow">
                                            MASTERPIECE Window Film has great visible light transmittance which prevents dazzling effect when comming out of a tunnel and while driving at night.
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr><td>&nbsp;</td></tr>
                                
                                <tr valign="top">
                                    <td width="100%">
                                        <div id="headerBarLatin" class="dropShadow">
                                            <div id="longBannerGreen"></div>
                                            <div id="AboutUs_table_header">Stainless</div>
                                        </div>
                                    </td>
                                </tr>
                            	<tr valign="top">
                                    <td>
                                        <div id="AboutUs_table_content" class="dropShadow">
                                            MASTERPIECE Window Film are corrosion free.
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr><td>&nbsp;</td></tr>
                                <tr valign="top">
                                    <td width="100%">
                                        <div id="headerBarLatin" class="dropShadow">
                                            <div id="longBannerGreen"></div>
                                            <div id="AboutUs_table_header">Reduce Glare</div>
                                        </div>
                                    </td>
                                </tr>
                            	<tr valign="top">
                                    <td>
                                        <div id="AboutUs_table_content" class="dropShadow">
                                            MASTERPIECE Window Film provides convenience to the drivers by protect them from heat and dazzling caused by infrared rays.
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr><td>&nbsp;</td></tr>
                                <tr valign="top">
                                    <td width="100%">
                                        <div id="headerBarLatin" class="dropShadow">
                                            <div id="longBannerGreen"></div>
                                            <div id="AboutUs_table_header">Colour Stability</div>
                                        </div>
                                    </td>
                                </tr>
                            	<tr valign="top">
                                    <td>
                                        <div id="AboutUs_table_content" class="dropShadow">
                                            MASTERPIECE Window Film blocks 98% of harmful ultraviolet rays at minimum which causes discolouration.
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr><td>&nbsp;</td></tr>
                                <tr valign="top">
                                    <td width="100%">
                                        <div id="headerBarLatin" class="dropShadow">
                                            <div id="longBannerGreen"></div>
                                            <div id="AboutUs_table_header">Security</div>
                                        </div>
                                    </td>
                                </tr>
                            	<tr valign="top">
                                    <td>
                                        <div id="AboutUs_table_content" class="dropShadow">
                                            MASTERPIECE Window Film prevents glass from shattering in the unfortunate event of an accident.
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr><td>&nbsp;</td></tr>
                                <tr valign="top">
                                    <td width="100%">
                                        <div id="headerBarLatin" class="dropShadow">
                                            <div id="longBannerGreen"></div>
                                            <div id="AboutUs_table_header">Free Signal Interference</div>
                                        </div>
                                    </td>
                                </tr>
                            	<tr valign="top">
                                    <td>
                                        <div id="AboutUs_table_content" class="dropShadow">
                                            MASTERPIECE Window Film are carefully designed to provide high infrared reduction while allowing visible light transmission. the non - application of metal in this aspect provides a tinting solution that has no interference to electronic transmission device.
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr><td>&nbsp;</td></tr>
                            </table>
                        </div>
                        
                        <div id="AboutUs_frame_top_def02">
                            <p>
                                <img src="source/images/aboutus/logo.png" width="30" height="30" alt="Maasterpiece Logo" /> 
                                <span><span class="blueFont">Technology :</span>  IR Nanotechnology</span><br />
                                Performance Infra Films are carefully designed to provide high Infrared reduction while allowing visible light transmission. The non-application of metals in this aspect provides a tinting solution that has no interference to electronic transmission devices. 
                            </p>
                            
                            <p>
                                <img src="source/images/aboutus/logo.png" width="30" height="30" alt="Maasterpiece Logo" />
                                <span><span class="blueFont">Technology :</span>  Neutralized Sputtering</span><br />
                                Outstanding Total Solar Energy Rejection among all non-reflective films. Neutralized Sputtering takes away the strong reflection while retaining the high heat reduction properties of sputtering technology. 
                            </p>
                            
                            <p>
                                <img src="source/images/aboutus/logo.png" width="30" height="30" alt="Maasterpiece Logo" />
                                <span><span class="blueFont">Technology :</span>  Precision Vacuum Depositing</span><br />
                                Unlike conventional vacuum coating, precision metal depositing is applied to the film to achieve high standards of neutral colored optical clarity.
                            </p>
                            
                            <p>
                                <img src="source/images/aboutus/logo.png" width="30" height="30" alt="Maasterpiece Logo" />
                                <span><span class="blueFont">Technology :</span>  Reinforced Mounting Adhesive</span><br />
                                The need for limiting the impact from shattered glass brought about the development of the Safety Films. Available in various thicknesses. Special laminating adhesives are added to the film to reduce the impact from blasts and natural disasters. The film also acts as a strong deterrence against theft. 
                           </p>
                            
                            <p>
                                <img src="source/images/aboutus/logo.png" width="30" height="30" alt="Maasterpiece Logo" />
                                <span><span class="blueFont">Technology :</span>  Precision Neutralized Sputtering</span><br />
                                A class above conventional non-reflective dyed film, Meadow is designed for enhanced outlook and high optical clarity with minimal reflection, 
                            </p>
                            
                            <p>
                                <img src="source/images/aboutus/logo.png" width="30" height="30" alt="Maasterpiece Logo" />
                                <span><span class="blueFont">Technology :</span>  Vacuum Depositing and Sputter Coating</span><br />
                                Applying coating of various metals through two types of technology, the end result is a highly reflective chrome-gold appearance.
                            </p>
                            
                            <p>
                                <img src="source/images/aboutus/logo.png" width="30" height="30" alt="Maasterpiece Logo" />
                                <span> <span class="blueFont">Technology :</span> Vacuum Depositing &amp; Neutralized Sputtering</span><br />
                                Combining two of the core methods in metallization, Versa is a range of dark neutral reflective film for absolute production against harmful rays from the sun. 
                            </p>
        
                            <p>
                                <img src="source/images/aboutus/logo.png" width="30" height="30" alt="Maasterpiece Logo" />
                                <span><span class="blueFont">Technology :</span>  Multi-Layered Sputtering</span><br />
                                High heat reduction and engineered for exceptional aesthetics unmatched by any window films,  Multi-Layered Sputtering technique is the pride of the window film industry through the extensive use of precious metals.
                            </p>
						</div>
                    </div>
                </div>
                
                <div id="disp" style="display:none">
                    <div id="faq_id">
                    	<div id="AboutUs_frame_top_def">
                            <p>
                                Kaca Film MASTERPIECE adalah produk dengan perpaduan 2 (dua) teknologi terbaik dari Jepang yang merupakan kombinasi dari teknologi sputter (sputtered technology) dan teknologi perisai panas (heat shielding technology), sehingga menghasilkam kaca film dengan kekuatan untuk menolak panas serta membentuk suatu perisai yang hebat dalam menangkal sinar ultraviolet dan infrared dari panas matahari.
                            </p>
                            <p>
                                Kaca Film MASTERPIECE diproduksi dengan kredibilitas tinggi untuk menolak panas dan juga membentuk perisai yang baik dalam pencegahan terhadap sinar UV inframerah dari panas matahari.
                            </p>
                            <p> 
                                Kaca Film MASTERPIECE di design khusus untuk menampilkan kemewahan sekaligus kenyamanan.
                            </p>
                            <p>
                               Kaca Film MASTERPIECE memiliki beberapa keunggulan :
                             </p>
                        </div>
                        
                        <div id="AboutUs_frame_top_def">
                            <table width="100%">
                                <tr valign="top">
                                    <td width="100%">
                                        <div id="headerBarLatin" class="dropShadow">
                                            <div id="longBannerGreen"></div>
                                            <div id="AboutUs_table_header">Save Energy </div>
                                        </div>
                                    </td>
                                </tr>
                            	<tr valign="top">
                                    <td>
                                        <div id="AboutUs_table_content" class="dropShadow">
                                            Kaca Film MASTERPIECE dapat membuat anda menghemat bbm atau listrik, penggunaan Kaca Film MASTERPIECE membuat suasana di dalam kendaraan ataupun ruangan terasa sejuk, sehingga tidak memerlukan pemakaian ac/pendingin secara berlebihan. 
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr><td>&nbsp;</td></tr>
                                
                                <tr valign="top">
                                    <td width="100%">
                                        <div id="headerBarLatin" class="dropShadow">
                                            <div id="longBannerGreen"></div>
                                            <div id="AboutUs_table_header">Clear View</div>
                                        </div>
                                    </td>
                                </tr>
                            	<tr valign="top">
                                    <td>
                                        <div id="AboutUs_table_content" class="dropShadow">
                                            Kaca Film MASTERPIECE tidak membuat pandangan dari dalam bias, dan tidak gelap pada saat anda berkendara di waktu malam hari, meskipun pemakaian Kaca Film MASTERPIECE dengan tipe / warna yang gelap.
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr><td>&nbsp;</td></tr>
                                
                                <tr valign="top">
                                    <td width="100%">
                                        <div id="headerBarLatin" class="dropShadow">
                                            <div id="longBannerGreen"></div>
                                            <div id="AboutUs_table_header">Stainless</div>
                                        </div>
                                    </td>
                                </tr>
                            	<tr valign="top">
                                    <td>
                                        <div id="AboutUs_table_content" class="dropShadow">
                                            Kaca Film MASTERPIECE terbuat dari bahan berkualitas tinggi yang telah teruji secara material tidak akan menyebabkan karat pada kaca.
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr><td>&nbsp;</td></tr>
                                <tr valign="top">
                                    <td width="100%">
                                        <div id="headerBarLatin" class="dropShadow">
                                            <div id="longBannerGreen"></div>
                                            <div id="AboutUs_table_header">Reduce Glare</div>
                                        </div>
                                    </td>
                                </tr>
                            	<tr valign="top">
                                    <td>
                                        <div id="AboutUs_table_content" class="dropShadow">
                                            Kaca Film MASTERPIECE dibuat dengan bahan pilihan terbaik  dan menggunakan perpaduan 2 (dua) proses teknologi tercanggih dari jepang, sehingga mampu melindungi anda dari panas matahari secara maksimal.
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr><td>&nbsp;</td></tr>
                                <tr valign="top">
                                    <td width="100%">
                                        <div id="headerBarLatin" class="dropShadow">
                                            <div id="longBannerGreen"></div>
                                            <div id="AboutUs_table_header">Colour Stability</div>
                                        </div>
                                    </td>
                                </tr>
                            	<tr valign="top">
                                    <td>
                                        <div id="AboutUs_table_content" class="dropShadow">
                                            Kaca Film MASTERPIECE memiliki lapisan warna yang kuat, sehingga tidak akan  mengalami pemudaran warna dalam jangka waktu yang singkat.
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr><td>&nbsp;</td></tr>
                                <tr valign="top">
                                    <td width="100%">
                                        <div id="headerBarLatin" class="dropShadow">
                                            <div id="longBannerGreen"></div>
                                            <div id="AboutUs_table_header">Security</div>
                                        </div>
                                    </td>
                                </tr>
                            	<tr valign="top">
                                    <td>
                                        <div id="AboutUs_table_content" class="dropShadow">
                                            Kaca Film MASTERPIECE terdiri dari beberapa lapisan material yang di desain khusus untuk keamanan dan kenyamanan anda.
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr><td>&nbsp;</td></tr>
                                <tr valign="top">
                                    <td width="100%">
                                        <div id="headerBarLatin" class="dropShadow">
                                            <div id="longBannerGreen"></div>
                                            <div id="AboutUs_table_header">Free Signal Interference</div>
                                        </div>
                                    </td>
                                </tr>
                            	<tr valign="top">
                                    <td>
                                        <div id="AboutUs_table_content" class="dropShadow">
                                            Kaca Film MASTERPIECE dibuat dengan bahan khusus yang tidak akan menggangu signal gps, handphone dan radio.
                                        </div>
                                    </td>
                                </tr>
                                
                                <tr><td>&nbsp;</td></tr>
                            </table>
                        </div>
                        
                        <div id="AboutUs_frame_top_def02">
                            <p>
                                <img src="source/images/aboutus/logo.png" width="30" height="30" alt="Maasterpiece Logo" /> 
                                <span><span class="blueFont">Technology :</span>  IR Nanotechnology</span><br />
                                Merupakan kinerja nanoteknologi, dimana kaca film dirancang agar memiliki angka IR ( Infrared ) dan angka VLT ( kejernihan ) yang seimbang. Pengaplikasian bahan non-logam proses ini memberikan solusi permasalahan gangguan perangkat elektronik seperti : GPS, signal radio, dll.
                            </p>
                            
                            <p>
                                <img src="source/images/aboutus/logo.png" width="30" height="30" alt="Maasterpiece Logo" />
                                <span><span class="blueFont">Technology :</span>  Neutralized Sputtering</span><br />
                                Merupakan pross penetralan bayangan ( refleksi ) yang terjadi karena proses sputtering, dalam upaya nya untuk mempertahankan angka IR ( infrared ) agar tetap maksimal, tetapi tetap mempertahankan kualitas agar tidak menyebabkan bias.
                            </p>
                            
                            <p>
                                <img src="source/images/aboutus/logo.png" width="30" height="30" alt="Maasterpiece Logo" />
                                <span><span class="blueFont">Technology :</span>  Precision Vacuum Depositing</span><br />
                                Merupakan teknologi dimana proses ini menyimpan logam dalam suatu lapisan tipis dan pewarnaan, sehingga penggabungan teknologi ini memberikan efek terhadap standard kejernihan optik yang tinggi.
                            </p>
                            
                            <p>
                                <img src="source/images/aboutus/logo.png" width="30" height="30" alt="Maasterpiece Logo" />
                                <span><span class="blueFont">Technology :</span>  Reinforced Mounting Adhesive</span><br />
                                Merupakan proses penempatan lapisan pelekat ( lem ) yang berfungsi sebagai penahan apabila terjadi pecahan terhadap kaca, lapisan ini tersedian dalam berbagai ketebalan. Adapun jenis pelekat yang mampu mengurangi dampak dari ledakan/bencana alam. Lapisan ini fungsi nya lebih pada keamanan.
                           </p>
                            
                            <p>
                                <img src="source/images/aboutus/logo.png" width="30" height="30" alt="Maasterpiece Logo" />
                                <span><span class="blueFont">Technology :</span>  Precision Neutralized Sputtering</span><br />
                                Merupakan teknologi yang berhubungan dengan pewarnaan, teknologi ini dirancang untuk meningkatkan pandangan dan kejelasan optik tinggi dengan refleksi minimal.
                            </p>
                            
                            <p>
                                <img src="source/images/aboutus/logo.png" width="30" height="30" alt="Maasterpiece Logo" />
                                <span><span class="blueFont">Technology :</span>  Vacuum Depositing and Sputter Coating</span><br />
                                Merupakan penggabungan antara lapisan metal dan pewarnaan. pengaplikasian dari teknologi ini menghasilkan suatu lapisan yang memiliki intensitas warna silver yang pekat.
                            </p>
                            
                            <p>
                                <img src="source/images/aboutus/logo.png" width="30" height="30" alt="Maasterpiece Logo" />
                                <span> <span class="blueFont">Technology :</span> Vacuum Depositing &amp; Neutralized Sputtering</span><br />
                               Merupakan proses metalisasi, diterapkan pada lapisan berwarna pekat/gelap, sehingga tetap memiliki tampilan yang jernih dari dalam dan gelap dari luar.
                            </p>
        
                            <p>
                                <img src="source/images/aboutus/logo.png" width="30" height="30" alt="Maasterpiece Logo" />
                                <span><span class="blueFont">Technology :</span>  Multi-Layered Sputtering</span><br />
                                Merupakan proses penebalan yang menyebabkan tingkat IR ( infrared ) yang ditolak menjadi sangat tinggi.
                            </p>
						</div>
                        
                    </div>
                </div>
              
                <div id="faqFrame">
                	<script>
						setLan('en');
					</script>
                </div>
                
			</div>
        </div>
        
		<div id="main">
        	<div id="longBannerGreen"></div>
            <div id="longBannerBlue"></div>
            
            <?php
				include("include/bottomNav.inc.php");
			?>