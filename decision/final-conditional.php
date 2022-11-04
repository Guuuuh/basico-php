<?php

$media = 7;
$media_recperacao = 5;
$frequencia = 70;

$media_aluno = 7;
$frequencia_aluno = 50;

$reprovado_por_faltas = $frequencia_aluno < $frequencia ? true : false;

if (!$reprovado_por_faltas) {

    if ($media_aluno < $media_recperacao) {
        echo "Reprovado!";
    }

    else if ($media_aluno < $media) {
        echo "Recuperação!";
    }
    
    else {
        echo "Aprovado!";
    }
}
else {
    echo "Reprovado por falta!";

}
