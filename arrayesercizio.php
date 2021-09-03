<?php
function trovaNumeroMaggiore(){
$numeri=[115,30,90,80,110];
$j=0;
$numeroMaggiore=0;
for ($i=0;$i<count($numeri);$i++){

    if($numeri[$j]<$numeri[$i]){
   $numeri[$j]=$numeri[$i];
}
$numeroMaggiore=$numeri[$j];
   
}
echo ("il numero maggiore è " . $numeroMaggiore);
}
function trovaNumeroMinore(){
    $numeri=[130,30,5,20,110];
    $j=0;
    $numeroMinore=0;
    for ($i=0;$i<count($numeri);$i++){
    
        if($numeri[$j]>$numeri[$i]){
       $numeri[$j]=$numeri[$i];
    }
    $numeroMinore=$numeri[$j];
       
    }
    echo ( "il numero maggiore è " . $numeroMinore);
    }
    trovaNumeroMaggiore();
    echo "<br>";
    trovaNumeroMinore();

?>