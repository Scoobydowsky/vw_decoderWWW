<!DOCTYPE html>
<html lang="pl">
<head>
  <?php
  include '../../vars.php';
  ?>
    <meta charset="utf-8" />
    <title>VW Decoder- Rozkoduj swoje wyposażenie</title>
    <meta lang="pl" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- CSS Files -->

	<link rel="stylesheet" href="../../css/reset.css" />
	<link rel="stylesheet" href="../../css/animate.min.css" />
	<link rel="stylesheet" href="../../css/bootstrap.css" />
	<link rel="stylesheet" href="../../css/style.css" />
	<link rel="stylesheet" href="../../css/font-awesome.css" />
	<link rel="stylesheet" href="../../css/settings.css" />
	<link rel="stylesheet" href="../../css/responsive.css" />

	<!-- End CSS Files -->
<script type="text/javascript">
 function moreCodes(){
// adding new codes
let number = document.getElementById("addMoreCodes").value;

// convert to decimental
var numberInt = parseInt(number,10);
//load code qty
var codeqty = "<?php echo $code_qty;?>" ;
//convert to decimental
var codeqtyInt = parseInt(codeqty,10);
// calc added codes+ codes in default
var codeamnt =  codeqtyInt + numberInt;
//get div under form
var containerINPUT = document.getElementById("containerINPUT");
 // Clear previous contents of that div
while (containerINPUT.hasChildNodes()) {
containerINPUT.removeChild(containerINPUT.lastChild);
}
//helping var to count code
var codeJsNo;
//for for creating input
 for (step = 1 ; step <= numberInt ; step++){
   codeJsNo = codeqtyInt + step ;
   containerINPUT.appendChild(document.createTextNode("Kod "+ codeJsNo ));//create text before input
    var input = document.createElement("input");//create input
    input.type = "text"; //set type of input
    input.name = "code" + codeJsNo ;//set name of input
    input.id  = "code" + codeJsNo ;//set id of input
    input.style = "margin: 10px;"//set style of input
    containerINPUT.appendChild(input);//show after child
    //check is 2nd input for brake line
    if(parseInt(codeJsNo,10) % 2 == 0){
    containerINPUT.appendChild(document.createElement("br"));//break line
    }
  }
 }
 function loadData(){
   var tableDiv = document.getElementById("tableDiv");
   // Clear previous content of the div
   while (tableDiv.hasChildNodes()) {
   tableDiv.removeChild(tableDiv.lastChild);
   };


   // adding new codes
   let number = document.getElementById("addMoreCodes").value;
   // convert to decimental
   var numberInt = parseInt(number,10);
   //load code qty
   var codeqty = "<?php echo $code_qty;?>" ;
   //convert to decimental
   var codeqtyInt = parseInt(codeqty,10);
   // calc added codes+ codes in default
   var codeamnt =  codeqtyInt + numberInt;
   //save code ammount to next use
   document.cookie = "codeamnt="+codeamnt;
   // create new array
   var codeArr = [];
   //loop to save codes to next use
   for(saveCode = 1; saveCode <= codeamnt; saveCode++){
     codeArr[saveCode] = document.getElementById("code"+ saveCode ).value;
     document.cookie = "kod"+saveCode+"="+codeArr[saveCode];
   }
document.getElementById("main_title").innerHTML = "TWOJE KODY";
document.getElementById("skills-description").innerHTML = "Oto twoje kody wraz z opisami:";
$("#tableDiv").load("result.php");
}
</script>
</head>


<body data-spy="scroll" data-target=".nav-menu" data-offset="50">

    <!-- Page Loader-->
    <div id="pageloader">
        <div class="loader-item">
          <img src="../../images/loading.gif" alt='Loading...' />
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
                                  <li class="active"><a href="../pl/index.php">Polski<i class="fa fa-check lang_checked"></i></a></li>
                                  <li><a href="../en/index.php">English</a></li>
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
                    <a class="scroll" href="../../"><h2 class="main_title">WV Decoder</h2></a>
                </div>
                <!-- End Logo -->

                <!-- Nav Menu -->
                <div class="nav-menu">
                    <ul class="nav main-nav">
                        <li><a class="scroll" href="index.php">Rozpocznij od nowa</a></li>
                        <li><p class="scroll">Dodaj pola:</p></li>
                        <li><input type="number" id="addMoreCodes" min="1" max="50" value="0" /><button type="button" onclick="moreCodes()"><i class="fa fa-plus"></i></button></li>
                    </ul>
                </div>
                <!-- End Nav Menu -->

                <!-- Dropdown Menu For Mobile Devices-->
                <div class="dropdown mobile-drop">
                    <a data-toggle="dropdown" class="mobile-menu" href="#"><i class="fa fa-bars"></i></a>
                    <ul class="nav dropdown-menu fullwidth" role="menu" >
                      <li><a class="scroll" href="index.php">Rozpocznij od nowa</a></li>
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

                  <h2 class="main_title">Podaj Kody</h2>

                  <!-- Tab Content -->
                  <div class="tab-content">
                       <!-- Tab -->
                       <div class="tab-pane fade in active" id="first">
                          <div class="tab-description">
                             <form action="" method="POST">
                              <!-- TODO pętla dla elastyczności -->
                              Kod 1:<input type="text" maxlength="3" name="code1" id="code1" required>
                              <?php
                              for($i= 2; $i <= $code_qty; $i++){
                              echo "Kod ".$i.":<input type=\"text\" maxlength=\"3\" name=\"code$i\" id=\"code$i\" style='margin: 10px;'>";
                              if($i % 2 == 0){
                              echo "<br />";
                            };

                          }?>
                          <!-- ADD more code area-->
                          <div id="containerINPUT">
                          </div>
                              <?php
                              if($i == $code_qty){
                              echo "<br />";
                              }
                              ?>
                              <!-- pętla js dodająca pola -->

                              <!-- Koniec pętli-->
                              <input type="button" value="Sprawdź" onclick="loadData()">
                              <input type="reset" value="Resetuj">
                              <p>
                                W celu sprawdzenia kodów są zapisywane pliki cookies
                                (po kliknięciu w przycisk sprawdź, które kasuja się po zamknieciu przeglądarki),
                                jeżeli nie zgadasz się<br/>
                                ZAMKNIJ TĄ STRONĘ<br/>
                                Strona mobilna obsługuje tylko max 10 kodów na raz, odpal stronę na komputerze żeby móc rozkodować 60 kodów na raz.
                              </p>
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
                  <h2 class="main_title" id="main_title">Gdzie znaleźć kody wyposażenia?</h2>
                  <p class="skills-description" id="skills-description">W przypadku VW znajdują się one w instrukcji albo pod wykładziną bagażnika przy kole.</p>

                  <!-- Progress Content -->
                  <div class="progress-content">
                    <div id="tableDiv">
                      <img src="../../images/desc1.jpg" alt=""/>
                      <!-- zamiana w tabelę-->
                      <p class="skills-description">Na zdjęciu oznaczone nr 4</p>
                    </div>
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
					Copyright © <?php echo $year ?> - Scoobydowsky. Wszystkie prawa zastrzeżone <!--All Rights Reserved.-->
				</p><!-- End Site Copyright -->

            </div>
			<div class="clear"></div>
		</div>
        <!-- End Footer Content -->
	</section>
    <!-- End Footer Section -->

	<!-- JS Files -->

	<script type="text/javascript" src="../../js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
	<script type="text/javascript" src="../../js/jquery.appear.js"></script>
	<script type="text/javascript" src="../../js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="../../js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="../../js/owl.carousel.js"></script>
	<script type="text/javascript" src="../../js/jquery.isotope.js"></script>
	<script type="text/javascript" src="../../js/scripts.js"></script>

	<!-- End JS Files -->

</body>

</html>
