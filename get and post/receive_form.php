<?php

var_dump($_POST);


$nome = $_POST['nome'];
$email = $_POST['email'];
$interesses = $_POST['interesse'];
$onde_conheceu = $_POST['onde_conheceu'];
$mensagem = $_POST['mensagem'];
$redirecionar = $_POST['redirecionar'];
echo "<br>";

echo "<strong>Nome: </strong> : $nome<br>";
echo "<strong>E-mail: </strong> : $email<br>";

echo "<strong>Interesses: </strong><br>";
echo "<ul>";
foreach ($interesses as $interesse) {
    echo "<li>$interesse</li>";
}
echo "</ul><br>";

echo "<strong>Onde conheceu: </strong> : $onde_conheceu<br>";
echo "<strong>Mensagem: </strong> $mensagem<br>";
echo "<strong>Redirecionar: </strong> : $redirecionar<br>";