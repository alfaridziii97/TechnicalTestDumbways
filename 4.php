<html>
<body>
<form action="" method="POST">
<label>Pilih Kualitas</label>
<select name="kualitas">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
</select>
<br>
<br>
<label>Kuantitas</label>
    <input type="text" name="total" placeholder="Jumlah">
    <br>
    <br>
<input type="submit" name="hitung" value="HITUNG TOTAL">
</form>
<?php
error_reporting(0);
if(isset($_POST["hitung"])){
$Kualitas=$_POST["kualitas"];
$Total=$_POST["total"];

$a = 3000;
$b = 3500;
$c = 5000;

switch($Kualitas){
    case "A";
    switch ($Total){
        case ($Total>10);
        echo "Total Harga Barang : ".($Total*$a)."<br>";
        echo "Potongan : ".($Total*500)."<br>";
        echo "Total Bayar : " .(($a-500)*$Total)."<br>";
        break;
    }
    break;
    case "B";
    switch ($Total){
        case ($Total>5);
        $bayar = $Total * $b;
        $diskon = 0.5 * $bayar; 
        $totalbayar = $bayar - $diskon;
        echo "Total Harga Barang : ".$bayar."<br>";
        echo "Potongan : ".$diskon."<br>";
        echo "Total Bayar : ". $totalbayar."<br>";
        break;
    }
    break;
    case "C";
    $bayar = $Total * $c;
    echo "Kualitas C Tidak mendapat Potongan <br>";
    echo "Total Bayar : ".$bayar;
}

}
?>
</body>
</html>