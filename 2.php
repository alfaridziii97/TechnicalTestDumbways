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


$Kembalian = $Total - $Uang;

echo 'Kembalian Anda '.number_format($Kembalian,0,",","."),'<br/><br/>';

$Pecahan1=$Kembalian/50000;
$Sisa1=$Kembalian%50000;

$Pecahan2=$Sisa1/20000;
$Sisa2=$Sisa1%20000;

$Pecahan3=$Sisa2/10000;
$Sisa3=$Sisa2%10000;

$Pecahan4=$Sisa3/5000;
$Sisa4=$Sisa3%5000;

$Pecahan5=$Sisa4/2000;
$Sisa5=$Sisa4%2000;

$Pecahan6=$Sisa5/1000;
$Sisa6=$Sisa5%1000;

$Pecahan7=$Sisa6/500;
$Sisa7=$Sisa6%500;

echo ''.(int) $Pecahan1.' x Rp.50,000';
echo '<br/>';
echo ''.(int) $Pecahan2.' x Rp.20.000';
echo '<br/>';
echo ''.(int) $Pecahan3.' x Rp.10.000';
echo '<br/>';
echo ''.(int) $Pecahan4.' x Rp.5.000';
echo '<br/>';
echo ''.(int) $Pecahan5.' x Rp.2.000';
echo '<br/>';
echo ''.(int) $Pecahan6.' x Rp.1.000';
echo '<br/>';
echo ''.(int) $Pecahan7.' x Rp.500';
echo '<br/>';
if ($Sisa7<500){
echo ''.number_format($Sisa7,0,",",".").' Disumbangkan karena tidak ada pecahan dibawah 500';
echo '<br/>';
}
}
?>
</body>
</html>