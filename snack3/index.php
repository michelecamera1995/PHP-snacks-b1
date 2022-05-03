
<?php

//Creare un array con 15 numeri casuali, 
//tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

$array = array();
$min = 0;
$max = 100;

for ($i = 0; $i < 15; $i++) {
    $randomnumber = rand($min, $max);
    if (!in_array($randomnumber, $array)) {
        $array = $randomnumber;
    }
}

echo ($array);


?>

