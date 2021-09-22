<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <?php
  //include cfgs
  include 'vars.php';

   ?>
  <nav>
  </nav>
  <div name="main">
    <form action="result.php" method="post">
      Kod 1:<input type="text" maxlength="3" name="code1" required>
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
      <input type="button" value="Resetuj">
    </form>
<?php

 ?>
  </div>
  <footer>
    <?php echo "Copyright©".$year." By Scoobydowsky";?>
  </footer>
</body>
</html>
