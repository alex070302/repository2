<?php
function vero(){
    $vero='vero';
    $array= [1,1,2,1,7,1,3];
    $array2=[];
    $variabile=0;
    for ($i=0; $i<count($array);$i++){
        if ($array[$i]==1 || $array[$i]==3){
        $variabile=$array[$i];
        array_push($array2,$variabile);       
        }

     

    }
    $esiste3=false;
    $esiste1=false;
  
    for ($i=0; $i<count($array2);$i++){
       if($array2[$i]==1){
        $esiste1=true;
       }
       if($array2[$i]==3){
        $esiste3=true;
       }
    }
if ($esiste1=='true' && $esiste3=='true'){
    $vero='false';
}

    return $vero;
 
}
echo "non contenendo 1 3 è vero? ";
echo vero();
?>
