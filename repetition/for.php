<?php

/*
for ($i = 0; $i <= 10; $i++) {
    echo $i. ' ';
}
*/

$frutas = [
    "Banana",
    "Maçã",
    "Laranja",
    "Melancia",
    "Abacaxi"
];

for($i = 0; $i < count($frutas); $i++) {
    echo $frutas[$i].'<br>';
}