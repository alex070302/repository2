<?php
function vero(){
    $vero='false';
    $array= [1,2,3,5,7,3,4];
    for ($i=0; $i<count($array);$i++){
        if ($array[$i]==1 and $array[$i]==3){
              $vero='false';
              
        }
        else{
            $vero='true';
        }
        

    }
    return $vero;
 
}
echo "non contenendo 1 3 è vero? ";
echo vero();
?>
