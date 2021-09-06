<?php
$array=[1,2,3,6,13,15,4,27,30,4];
$multipliTre=[];

$somma=0;
$grandezza=0;
echo "i numeri divisibili per 3 sono: " ;
for ($i=0; $i<count($array);$i++){
    if($array[$i] % 3 == 0){
        
    $grandezza++;
    echo "<br>";
    echo $array[$i];
    $somma= $array[$i] + $somma;
      
    }
}

$media= $somma/$grandezza;
echo ("<br>");
echo "la media è: " . $media;

?>