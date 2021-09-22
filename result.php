<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
try{
  include 'conn.php';
  //connect to db
  $conn = new PDO("mysql:host=$servername;dbname=vw_decoder", $login, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //echo "baza podłaczona";
  //test connection pass ^
}catch(PDOException $e) {
  //echo "Connection failed: " . $e->getMessage();
  //test connection failed ^
}

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

//check codes work good
//echo $kod1;
echo "<table style='border: solid 1px black;'>";
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
  $stmt->execute([$kod1, $kod2, $kod3, $kod4, $kod5, $kod6, $kod7, $kod8, $kod9, $kod10]);

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  // display on tablevwiev
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
}//fetch to array
echo " <form action=\"index.php\">
   <input type=\"submit\" value=\"Wróć do wpisywania kodów\">
 </form>";

 ?>
</body>
</html>
