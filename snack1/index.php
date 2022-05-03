
<?php

//Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
//Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
//Stampiamo a schermo tutte le partite con questo schema.
//Olimpia Milano - Cantù | 55-60

$games = [
    [
        "homesquad" => "Miami Heat",
        "outsquad" => "Dallas Mavericks",
        "homesquadpoint" => "10",
        "outsquadpoint" => "5",
    ],
    [
        "homesquad" => "L.A. Lakers",
        "outsquad" => "Cleveland Cavaliers",
        "homesquadpoint" => "15",
        "outsquadpoint" => "17",
    ],
    [
        "homesquad" => "Phoenix Suns",
        "outsquad" => "Orlando Magic",
        "homesquadpoint" => "11",
        "outsquadpoint" => "8",
    ],
];

for ($i = 0; $i < count($games); $i++) {
    $homesquad = $games[$i]['homesquad'];
    $outsquad = $games[$i]['outsquad'];
    $homesquadpoint = $games[$i]['homesquadpoint'];
    $outsquadpoint = $games[$i]['outsquadpoint'];
    echo ("<p> $homesquad . $outsquad |  $homesquadpoint . $outsquadpoint</p>");
}


?>
