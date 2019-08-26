<?php
require_once '../db/mdl_jobs.php';
$conn = new mdljobs();

$data = "Brian Nehemia Prasetyo";
$dataencode1= "ZWxlbWVudGFsNw==";
$dataencode5 = "Vmxaak1WTXlUa2RpUm1oUFVqSlNWbGxzV21Ga2JHUnpXVE5vYWxKdGVGVlZWM2hIWVcxS1ZsZHFXbGhpUjJoVVZHeGtTMDB4UWxWTlJEQTk=";
$coba = "123456";

echo date("dmy") ."<br/>";

echo base64_encode($data);
echo "<br/>"; // encode 5

echo "encode 5 kali <br/>";
echo base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($data)))));

echo "<br/>"; // decode 5
echo "decode 5 kali <br/>";
echo base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($dataencode5)))));

echo "<br/><br/>";
// $conn->countdatapelamar();

echo "<br/><br/>";
echo "ini hasil";
echo base64_decode($dataencode1);

echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
echo date('Y-m-d');
?>


<form method="post" action="../controller/backup.php?action=coba">
<select name="bulan">
<option value="01">Januari</option>
<option value="02">Februari</option>
<option value="03">Maret</option>
<option value="04">April</option>
<option value="05">Mei</option>
<option value="06">Juni</option>
<option value="07">Juli</option>
<option value="08">Agustus</option>
<option value="09">September</option>
<option value="10">Oktober</option>
<option value="12">November</option>
<option value="12">Desember</option>
</select>
<input type="submit" class="btn btn-info">
</form>

<?php
 require_once('../db/config.php');
    
 if(isset($_GET['bulan'])){
    $tgl = $_GET['bulan'];
    $sql = mysqli_query($this->conn, "SELECT * FROM tbcoba WHERE MONTH(tanggal) = '$coba'");
}else{
    $sql = mysqli_query($this->conn, "SELECT *  FROM tbcoba ");
}

while($data = mysqli_fetch_array($sql)){ 
 $data['tanggal'];
 $data['total'];
}
?>
