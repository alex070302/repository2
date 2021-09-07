<?php
function pariDispariArray(){
    $array=[2,7,5,6,4,5,6];
    $variabile1=0;
    $variabile2=0;
    $arrayPari=[];
    $arrayDispari=[];
    $arrayFinale=[];
        for ($i=0; $i<count($array);$i++){
        if($array[$i] % 2 == 0){
            $variabile1=$array[$i];
            array_push($arrayPari,$variabile1);
        }
        else{
            $variabile2=$array[$i];
            array_push($arrayDispari,$variabile2);
        }
    }
      $arrayFinale=array_merge($arrayPari,$arrayDispari);
      
    print_r ($arrayFinale); 
   

}
pariDispariArray();
?>