<!DOCTYPE HTML>
<html lang="pl">
<head>
  <meta title="VW Decoder PL">
  <title>WV Decoder PL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <?php
  //include cfgs
  include 'vars.php';
  // Add var to how many codes is need
   ?>
    <?php
    include 'menu.php';
     ?>
  <div name="main">
    <form action="result.php" method="post">
      <!-- TODO pętla dla elastyczności -->
      Kod 1:<input type="text" maxlength="3" name="code1" required>
      <?php
      for($i= 2; $i <= 10; $i++){
        echo "Kod ".$i.":<input type=\"text\" maxlength=\"3\" name=\"code$i\" >";
        if($i % 3 == 0){
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
<?php

 ?>
  </div>
  <footer>
    <?php echo "Copyright©".$year." By Scoobydowsky";?>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>