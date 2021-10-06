<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include 'vars.php';
  ?>
    <meta charset="utf-8" />
    <title>VW Decoder- Rozkoduj swoje wyposażenie</title>
    <meta lang="pl" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- CSS Files -->

	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/animate.min.css" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/settings.css" />
	<link rel="stylesheet" href="css/responsive.css" />
	<link rel="stylesheet" href="css/mystyle.css" />

	<!-- End CSS Files -->
<script type="text/javascript">
//Look on lang
function prevLangPL() {
  document.getElementById("startOverTxt").innerHTML = "Rozpocznij od nowa";
  document.getElementById("rightText").innerHTML = "Wszystkie prawa zastrzeżone";
  document.getElementById("lang").innerHTML = " Język";
  document.getElementById("title").innerHTML = " Wybierz język";
  document.getElementById("info").innerHTML = "   W celu sprawdzenia kodów są zapisywane pliki cookies (po kliknięciu w przycisk sprawdź, które kasuja się po zamknieciu przeglądarki), jeżeli nie zgadasz się<br/> ZAMKNIJ TĄ STRONĘ<br/> Strona mobilna obsługuje tylko max 10 kodów na raz, odpal stronę na komputerze żeby móc rozkodować 60 kodów na raz.";
}
function prevLangEN() {
  document.getElementById("startOverTxt").innerHTML = "Start Over";
  document.getElementById("rightText").innerHTML = "All Rights Reserved";
  document.getElementById("lang").innerHTML = " Language";
  document.getElementById("title").innerHTML = " Choose language";
  document.getElementById("info").innerHTML = " Cookies are stored in order to check the codes (after clicking on the button, check which ones delete after closing the browser), if you don't agree <br/> CLOSE THIS PAGE <br/> The mobile website only supports max 10 codes at a time, run the page on your computer to be able to decode 60 codes at a time.";
}
</script>
</head>


<body data-spy="scroll" data-target=".nav-menu" data-offset="50">

    <!-- Page Loader-->
    <div id="pageloader">
        <div class="loader-item">
          <img src="images/loading.gif" alt='Loading...' />
        </div>
    </div>
    <!-- End Page Loader-->

    <!-- Home Section -->
	<section id="home">
        <!-- Top Bar Section -->
		<section id="pagetop">
            <!-- Content -->
			<div class="content pagetop">

                <!-- Top Details-->
				<div class="col-xs-9 left">
                     <div class="top_details">
                        <!-- Languages DropDown-->
                        <div class="languages drop">
                           <a href="#"><i class="fa fa-globe"id="lang"> Język</i></a>
                           <div class="languages-panel">
                               <ul class="content">
                                  <li><a href="lang\pl\">Polski</i></a></li>
                                  <li><a href="lang\en\index.php">English</a></li>
                               </ul>
                           </div>
                        </div>
                        <!-- End Languages DropDown-->

                     </div>
				</div>
                <!-- End Top Details-->

                <!-- Top Social Media-->
				<div class="col-xs-3 right">
					<div class="top-social-media">
                        <a href="<?php echo $myWebsite;?>"><i class="fa fa-globe"></i></a>
                    </div>
				</div>
				<!-- End Social Media-->
				<div class="clear"></div>
			</div>
		    <!-- End Content -->
		</section>
		<!-- End Top Bar Section -->

        <!-- Navigation Section -->
        <section id="navigation" class="shadow">
            <!-- Content -->
            <div class="content navigation">
                <!-- Logo -->
                <div class="logo">
                    <a class="scroll" href="#home"><h2 class="main_title">WV Decoder</h2></a>
                </div>
                <!-- End Logo -->

                <!-- Nav Menu -->
                <div class="nav-menu">
                    <ul class="nav main-nav">
                        <li><a class="scroll" href="#"><p id="startOverTxt">Rozpocznij od nowa</p></a></li>
                    </ul>
                </div>
                <!-- End Nav Menu -->

                <!-- Dropdown Menu For Mobile Devices-->
                <div class="dropdown mobile-drop">
                    <a data-toggle="dropdown" class="mobile-menu" href="#"><i class="fa fa-bars"></i></a>
                    <ul class="nav dropdown-menu fullwidth" role="menu" >
                      <li><a class="scroll" href="#">Rozpocznij od nowa</a></li>
                    </ul>
                </div>
                <!-- End Dropdown Menu For Mobile Devices-->
                <div class="clear"></div>
            </div>
            <!-- End Content -->
        </section>
        <!-- End Navigation Section -->

	</section>


    <!-- Skills and Possibilities -->
    <section id="skills-and-possibilities">
         <!-- Content -->
         <div class="content">
              <!-- Tabs -->
              <div class="tabs animated" data-animation="fadeInLeft" data-animation-delay="300">

                  <h2 class="main_title" id="title">Wybierz język</h2>

                  <!-- Tab Content -->
                  <div class="tab-content">
                       <!-- Tab -->
                       <div class="tab-pane fade in active" id="first">
                          <div class="tab-description">
                            <a href="lang/pl/"><img class="natflags" src="images/plFlag.png" onmouseover="prevLangPL()" /></a>
                            <a href="lang/en/" onmouseover="prevLangEN()"><img class="natflags" src="images/usaFlag.png" /></a>



                              <p class="info" id="info">
                                W celu sprawdzenia kodów są zapisywane pliki cookies
                                (po kliknięciu w przycisk sprawdź, które kasuja się po zamknieciu przeglądarki),
                                jeżeli nie zgadasz się<br/>
                                ZAMKNIJ TĄ STRONĘ<br/>
                                Strona mobilna obsługuje tylko max 10 kodów na raz, odpal stronę na komputerze żeby móc rozkodować 60 kodów na raz.
                              </p>
                          </div>
                      </div>
                      <!-- End Tab -->


                  </div>
                  <!-- End Tab Content -->
              </div>

              <div class="clear"></div>
         </div>
         <!-- End Content -->
    </section>
    <!-- End Skills and Possibilities -->


	<!-- Footer Section -->
	<section id="footer" class="main-content">
		<div class="content footer">
            <div class="col-xs-12 align-center">

                <!-- Go To Top -->
                <div id="go-top" class="animated" data-animation="fadeInUp" data-animation-delay="0">
                    <a href="#home" class="scroll"><i class="fa fa-chevron-up"></i></a>
                </div><!-- End Go To Top -->

                <span class="footer-logo animated" data-animation="fadeInUp" data-animation-delay="500">VW Decoder</span>
                <!-- Site Copyright -->
				<div class="footer-text copyright animated" data-animation="fadeInUp" data-animation-delay="700">
					Copyright © <?php echo $year ?> - Scoobydowsky.<div id="rightText">Wszystkie prawa zastrzeżone</div></div> <!--All Rights Reserved.-->
				<!-- End Site Copyright --></div>
			<div class="clear"></div>
		</div>
        <!-- End Footer Content -->
	</section>
    <!-- End Footer Section -->

	<!-- JS Files -->

	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

	<!-- End JS Files -->

</body>

</html>
