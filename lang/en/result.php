<script>
  //load how many codes are
  var codeamnt = sessionStorage.getItem("codeamnt");

</script>
<?php
//pobierz ilosć kodów
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
//load code amount needed loop for
@$codeamnt = $_COOKIE["codeamnt"];
//check on start codes
//loop for load codes
for ($codecounter = 1; $codecounter <= $codeamnt; $codecounter++){
@$kod[$codecounter] = $_COOKIE["kod".$codecounter];
}
//check codes work good
echo "<div id='howManyCodes'></div>";
echo "<div id='testCode'></div>";
echo "<table style='border: solid 1px black;padding: 10px;width: -webkit-fill-available;'>";
echo "<tr><th>CODE</th><th>DESCRIPTION</th></tr>";

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

$stmt = $conn->prepare("SELECT `Kod`,`Opis` FROM `kody_en`WHERE `Kod` IN (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?  )");//tutaj pętla
//TODO pętla dla elastyczności
  $stmt->execute([@$kod[1], @$kod[2], @$kod[3], @$kod[4], @$kod[5], @$kod[6], @$kod[7], @$kod[8], @$kod[9], @$kod[10],
  @$kod[11], @$kod[12], @$kod[13], @$kod[14], @$kod[15], @$kod[16], @$kod[17], @$kod[18], @$kod[19], @$kod[20],
  @$kod[21], @$kod[22], @$kod[23], @$kod[24], @$kod[25], @$kod[26], @$kod[27], @$kod[28], @$kod[29], @$kod[30],
  @$kod[31], @$kod[32], @$kod[33], @$kod[34], @$kod[35], @$kod[36], @$kod[37], @$kod[38], @$kod[39], @$kod[40],
  @$kod[41], @$kod[42], @$kod[43], @$kod[44], @$kod[45], @$kod[46], @$kod[47], @$kod[48], @$kod[49], @$kod[50],
  @$kod[51], @$kod[52], @$kod[53], @$kod[54], @$kod[55], @$kod[56], @$kod[57], @$kod[58], @$kod[59], @$kod[60],   ]);//tutaj petla

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  // display on tablevwiev
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
}//fetch to array
echo "</table>";
 ?>
 	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
