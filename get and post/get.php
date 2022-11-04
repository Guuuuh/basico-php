<?php

//echo $_GET['planeta'];
//echo "<br>";
//echo $_GET['cor'];

// ?planeta=Marte&cor=Azul  =  Querry String

$planeta = isset($_GET['planeta']) ? $_GET['planeta'] : false;

if($planeta != false) {
    echo $planeta; 
}
else {
    echo "Planeta não informado";
}

//$cor = $_GET['cor'] ?? "Cor não informada!";

//echo $cor;