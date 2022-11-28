<?php
//Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
//punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

//Olimpia Milano - Cantù | 55-60
$matches = [
    [
        $sCasa = 'Olimpia Milano',
        $sTrasferta = 'Cantù',
        $puntiCasa = 80,
        $puntiTrasferta = 50,
    ],
    [
        $sCasa = 'Olimpia Milano',
        $sTrasferta = 'Barca',
        $puntiCasa = 20,
        $puntiTrasferta = 50,
    ],
    [
        $sCasa = 'Olimpia Milano',
        $sTrasferta = 'Liverpool',
        $puntiCasa = 60,
        $puntiTrasferta = 40,
    ],
];
var_dump($matches);
//creo ciclo foreach per stampare le partite
foreach ($matches as $match) {
    foreach ($match as $key => $value) {
        echo $value . ' ';
        if ($key == count($match) - 1) {
            echo '<br>';
        }
    }
}
