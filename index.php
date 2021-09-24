<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>Arwen OnePage HTML Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- CSS Files -->

	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/animate.min.css" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/settings.css" />
	<link rel="stylesheet" href="css/prettyPhoto.css" />
	<link rel="stylesheet" href="css/responsive.css" />
	<link rel="stylesheet" href="css/player/YTPlayer.css" />
	<!-- End CSS Files -->

</head>


<body data-spy="scroll" data-target=".nav-menu" data-offset="50">
<?php
include 'vars.php';
?>
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
                           <a href="#"><i class="fa fa-globe"></i> Język</a>
                           <div class="languages-panel">
                               <ul class="content">
                                  <li class="active"><a href="#">Polski<i class="fa fa-check lang_checked"></i></a></li>
                                  <li><a href="#">English</a></li>
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
                        <a href="#"><i class="fa fa-globe"></i></a>
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
                        <li><a class="scroll" href="index.php">Rozpocznij od nowa</a></li>
                        <li><a class="scroll" href="#important_links">About</a></li>
                        <li><a class="scroll" href="#history">History</a></li>
                        <li><a class="scroll" href="#team">Team</a></li>
                    </ul>
                </div>
                <!-- End Nav Menu -->

                <!-- Dropdown Menu For Mobile Devices-->
                <div class="dropdown mobile-drop">
                    <a data-toggle="dropdown" class="mobile-menu" href="#"><i class="fa fa-bars"></i></a>
                    <ul class="nav dropdown-menu fullwidth" role="menu" >
                        <li><a class="scroll" href="#home">Home</a></li>
                        <li><a class="scroll" href="#important_links">About</a></li>
                        <li><a class="scroll" href="#history">History</a></li>
                        <li><a class="scroll" href="#team">Team</a></li>
                    </ul>
                </div>
                <!-- End Dropdown Menu For Mobile Devices-->
                <div class="clear"></div>
            </div>
            <!-- End Content -->
        </section>
        <!-- End Navigation Section -->

	</section>
>


    <!-- Skills and Possibilities -->
    <section id="skills-and-possibilities">
         <!-- Content -->
         <div class="content">
              <!-- Tabs -->
              <div class="tabs animated" data-animation="fadeInLeft" data-animation-delay="300">

                  <h2 class="main_title">Podaj Kody</h2>

                  <!-- Tab Content -->
                  <div class="tab-content">
                       <!-- Tab -->
                       <div class="tab-pane fade in active" id="first">
                          <div class="tab-description">
                             <form action="result.php" method="post">
                              <!-- TODO pętla dla elastyczności -->
                              Kod 1:<input type="text" maxlength="3" name="code1" required>
                              <?php
                              for($i= 2; $i <= 10; $i++){
                              echo "Kod ".$i.":<input type=\"text\" maxlength=\"3\" name=\"code$i\">";
                              if($i % 2 == 0){
                              echo "<br />";
                              };
                              if($i == $code_qty){
                              echo "<br />";
                              }
                              }

                              ?>
                              <!-- Koniec pętli-->
                              <input type="submit" value="Sprawdź">
                              <input type="button" value="Resetuj">
                              </form>
                          </div>
                      </div>
                      <!-- End Tab -->


                  </div>
                  <!-- End Tab Content -->
              </div>
              <!-- End Tabs -->

              <!-- Progress -->
              <div class="progress-bars animated" data-animation="fadeInRight" data-animation-delay="600">

                <!-- TODO asynchroniczny formularz-->
                  <h2 class="main_title">Gdzie znaleźć kody wyposażenia?</h2>
                  <p class="skills-description">W przypadku VW znajdują się one w instrukcji albo pod wykładziną bagażnika przy kole.</p>

                  <!-- Progress Content -->
                  <div class="progress-content">
                  <img src="images/desc1.jpg" alt=""/>
                  <!-- zamiana w tabelę-->
                  <p class="skills-description">Na zdjęciu oznaczone nr 4</p>
                  <?php //include 'result.php';?>
                  </div>
                  <!-- End Progress Content -->
              </div>
              <!-- End Progress -->
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
				<p class="footer-text copyright animated" data-animation="fadeInUp" data-animation-delay="700">
					Copyright © <? echo : ?> - Scoobydowsky. All Rights Reserved.
				</p><!-- End Site Copyright -->

            </div>
			<div class="clear"></div>
		</div>
        <!-- End Footer Content -->
	</section>
    <!-- End Footer Section -->

	<!-- JS Files -->

	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/modernizr-latest.js"></script>
	<script type="text/javascript" src="js/SmoothScroll.js"></script>
	<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.sticky.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.js"></script>
	<script type="text/javascript" src="js/rev-slider/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
    <script type="text/javascript" src="js/jquery.mapmarker.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

	<!-- End JS Files -->

</body>

</html>
