<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <?php
  include 'conn.php';
  //check on start codes
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

  echo $kod1;

   ?>
  <nav>
  </nav>
  <div name="main">
    <form action="#" method="post">
      Kod 1:<input type="text" maxlength="3" name="code1" value="<?php echo @$kod1; ?>">
      Kod 2:<input type="text" maxlength="3" name="code2">
      Kod 3:<input type="text" maxlength="3" name="code3"><br>
      Kod 4:<input type="text" maxlength="3" name="code4">
      Kod 5:<input type="text" maxlength="3" name="code5">
      Kod 6:<input type="text" maxlength="3" name="code6"><br>
      Kod 7:<input type="text" maxlength="3" name="code7">
      Kod 8:<input type="text" maxlength="3" name="code8">
      Kod 9:<input type="text" maxlength="3" name="code9"><br>
      Kod 10:<input type="text" maxlength="3" name="code10"><br>
      <input type="submit" value="Sprawdź">
      <input type="button" value="Resetuj" onclick="<?php $kod1 =""; echo @$kod1;
      ?>">
    </form>

  </div>
  <footer>
  </footer>
</body>
</html>
