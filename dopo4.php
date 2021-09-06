<?php


function dopoIl4(){
$array=[8,14,2,4,6,21];
$array2=[];
$in4=0;
$variabile=0;
 for ($i=0; $i<count($array); $i++){
     if($array[$i] == 4){
      $in4=$i;
     }
 }
 for ($i=$in4+1; $i<count($array);$i++){
    $variabile=$array[$i];
   array_push($array2,$variabile);
   
    }

    print_r ($array2); 
}
dopoIl4();


?>