<?php
$array=[1,2,6,9,13,15,5];
$multipliTre=[];
$media=0;
$somma=0;
for ($i=0; $i<count($array);$i++){
    if($array[$i] % 3 == 0){
        $multipliTre=$array[$i];
        $somma= $array[$i] + $media;
        echo ("<br>" );
        echo "i numeri divisibili per 3 sono: " . $multipliTre;
      
    }
}
$media= $somma/2;
echo ("<br>");
echo "la media è: " . $media;

?>