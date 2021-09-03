<?php




$stringa="viva la figa";
$stringaRibaltata=strrev($stringa);
echo ("stringa ribaltata: ". $stringaRibaltata);
echo ("<br>");
$stringaTrattini="";

for ($i=0; $i<strlen($stringaRibaltata); $i++){
    
    $stringaTrattini= "-" . $stringaRibaltata[$i];
    echo $stringaTrattini;
}



?>