<?php
$a = array(1,2,3,4,5);

$angka1 = array(2,3,4,5);
$jumlah1 = array_sum($angka1);
$angka2 = array(1,3,4,5);
$jumlah2 = array_sum($angka2);
$angka3 = array(1,2,4,5);
$jumlah3 = array_sum($angka3);
$angka4 = array(1,2,3,5);
$jumlah4 = array_sum($angka4);
$angka5 = array(1,2,3,4);
$jumlah5 = array_sum($angka5);

foreach($a as $angka){
    echo " ".$angka;
}
echo "<br><br>";

echo "Angka 1: $angka1[0] + $angka1[1] + $angka1[2] + $angka1[3] = ".$jumlah1."<br>";
echo "Angka 2: $angka2[0] + $angka2[1] + $angka2[2] + $angka2[3] = ".$jumlah2."<br>";
echo "Angka 3: $angka3[0] + $angka3[1] + $angka3[2] + $angka3[3] = ".$jumlah3."<br>";
echo "Angka 4: $angka4[0] + $angka4[1] + $angka4[2] + $angka4[3] = ".$jumlah4."<br>";
echo "Angka 5: $angka5[0] + $angka5[1] + $angka5[2] + $angka5[3] = ".$jumlah5."<br><br>";

$maks = max(array($jumlah1,$jumlah2,$jumlah3,$jumlah4,$jumlah5));
$mins = min(array($jumlah1,$jumlah2,$jumlah3,$jumlah4,$jumlah5));

echo "Nilai Terbesar adalah ". $maks ." Dan Nilai Terkecil adalah ". $mins;
 ?>