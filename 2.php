<html>
<body>
<form action="" method="POST">
<input type="text" name="uang" placeholder="Masukan Total Belanja"><br>
<input type="text" name="total" placeholder="Masukan Jumlah Uang"><br>
<input type="submit" name="hitung" value="HITUNG KEMBALIAN">
</form>
<?php
error_reporting(0);
if(isset($_POST["hitung"])){
$Uang=$_POST["uang"];
$Total=$_POST["total"];

if($uang>=200000){
$diskon = $uang*0.1;
$kembalian = $uang - $diskon;
echo '('.number_format($kembalian,0,",","."),' , '.number_format($Uang,0,",","."),')<br/><br/>';
} else
echo '('.number_format($Total,0,",","."),' , '.number_format($Uang,0,",","."),')<br/><br/>';
}


$Kembalian = $Total - $Uang;

echo 'Kembalian Anda '.number_format($Kembalian,0,",","."),'<br/><br/>';

$Pecahan1=$Kembalian/100000;
$Sisa1=$Kembalian%100000;

$Pecahan2=$Sisa1/50000;
$Sisa2=$Sisa1%50000;

$Pecahan3=$Sisa2/20000;
$Sisa3=$Sisa2%20000;

$Pecahan4=$Sisa3/10000;
$Sisa4=$Sisa3%10000;

$Pecahan5=$Sisa4/5000;
$Sisa5=$Sisa4%5000;

echo ''.(int) $Pecahan1.' x Rp.100,000';
echo '<br/>';
echo ''.(int) $Pecahan2.' x Rp.50.000';
echo '<br/>';
echo ''.(int) $Pecahan3.' x Rp.20.000';
echo '<br/>';
echo ''.(int) $Pecahan4.' x Rp.10.000';
echo '<br/>';
echo ''.(int) $Pecahan5.' x Rp.5.000';
echo '<br/>';
if ($Sisa5<5000){
echo ''.number_format($Sisa5,0,",",".").' Disumbangkan karena tidak ada pecahan dibawah 5000';
echo '<br/>';
}

?>
</body>
</html>