<?php

$array=array(
    array('a','c','b'),
    array('b','c','a'),
    array('e','d','a')
   );
    
echo "Belum Terurut: ";
echo "<br />";
print_r($array);


for($j = 0; $j < count($array); $j ++) {
    for($i = 0; $i < count($array)-1; $i ++){

        if($array[$i] > $array[$i+1]) {
            $temp = $array[$i+1];
            $array[$i+1]=$array[$i];
            $array[$i]=$temp;
        }       
    }
}

echo "<br><br>Terurut: ";
echo "<br />";
print_r($array)


?>