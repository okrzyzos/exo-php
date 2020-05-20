<?php




function nombre(){

$min = 0;
$max = 100;
$chiffres_pairs = 0;
$i = 0;
 
        for ($i = 0; $i < 100; $i++)
        {
            $chiffres_pairs = 2*$i;
        }
 
echo "Les chiffres pairs compris entre 0 et 100 sont: $chiffres_pairs";

    }

nombre();

?>