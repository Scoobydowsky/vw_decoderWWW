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
<script>

</script>
</head>


<body data-spy="scroll" data-target=".nav-menu" data-offset="50">
<?php
include 'vars.php';
?>
    <!-- Page Loader-->
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
      <?php
      //check on start codes
      //TODO pętla dla elastyczności
      @$kod1 = $_POST["code1"];
      @$kod2 = $_POST["code2"];
      @$kod3 = $_POST["code3"];
      @$kod4 = $_POST["code4"];
      @$kod5 = $_POST["code5"];
      @$kod6 = $_POST["code6"];
      @$kod7 = $_POST["code7"];
      @$kod8 = $_POST["code8"];
      @$kod9 = $_POST["code9"];
      @$kod10 = $_POST["code10"];
      ?>
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
                              for($i= 1; $i <= 9; $i++){
                                $j =  1 + $i;
                              echo "Kod ".$j.":<input type=\"text\" maxlength=\"3\" name=\"code$j\" style='margin: 10px;'>";
                              if($i % 2  > 0){
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
                  <h2 class="main_title">Kody</h2>
                  <p class="skills-description">Oto twoje kody:</p>

                  <!-- Progress Content -->
                  <div class="progress-content">
                  <!-- zamiana w tabelę-->
                  <?php
                  try{
                    include 'conn.php';
                    //connect to db
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $login, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    //echo "baza podłaczona";
                    //test connection pass ^
                  }catch(PDOException $e) {
                    //echo "Connection failed: " . $e->getMessage();
                    //test connection failed ^
                  }




                  //check codes work good
                  //echo $kod1;
                  echo "<table style='border: solid 1px black;padding: 10px;width: -webkit-fill-available;'>";
                  echo "<tr><th>KOD</th><th>OPIS</th></tr>";

                  class TableRows extends RecursiveIteratorIterator {
                    function __construct($it) {
                      parent::__construct($it, self::LEAVES_ONLY);
                    }

                    function current() {
                      return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
                    }

                    function beginChildren() {
                      echo "<tr>";
                    }

                    function endChildren() {
                      echo "</tr>" . "\n";
                    }
                  }
                  //load form db eq description
                  $stmt = $conn->prepare("SELECT `Kod`,`Opis` FROM `kody_pl`WHERE `Kod` IN ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )");
                  //TODO pętla dla elastyczności
                    $stmt->execute([$kod1, $kod2, $kod3, $kod4, $kod5, $kod6, $kod7, $kod8, $kod9, $kod10]);

                    // set the resulting array to associative
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    // display on tablevwiev
                    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                      echo $v;
                  }//fetch to array
                  echo "</table>";
                   ?>

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
