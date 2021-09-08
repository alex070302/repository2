<?php
    function bubble_Sort($vettore )
    {
    do
    {
            $scambiato = false;
            for( $i = 0, $c = count( $vettore ) - 1; $i < $c; $i++ )
            {
                if( $vettore[$i] > $vettore[$i + 1] )
                {
                    $temp = $vettore[$i + 1];
                    $vettore[$i + 1] = $vettore[$i];
                    $vettore[$i] = $temp;
                    $scambiato = true;
                }
            }
    }
    while($scambiato );
return $vettore;
}
$vettore = array(5, 3, 9, 11, 32, -4, 20);
//array[3,5,9,11,-4,32,20];
//array[3,5,9,-4,11,20,32];
echo "Vettore Iniziale: ";
echo implode(", ",$vettore );
echo "<br>Vettore Ordinato: ";
echo implode(", ",bubble_Sort($vettore));


?>