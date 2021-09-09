<?php

function stampaZigZag() {
    
$array=[10,20,40,23,13,23,21,23,42,43];
$arrayZigZag=[];
$j=9;
$variabiledim=count($array)/2;
$primivalori=0;
$ultimivalori=0;
for ($i=0; $i<$variabiledim;$i++,$j--)
    {
     $primivalori=$array[$i];
     $secondiValori=$array[$j];
     array_push($arrayZigZag,$primivalori);
     array_push($arrayZigZag,$secondiValori);
     
    }

    print_r($arrayZigZag);
    
    
}
stampaZigZag();

?>