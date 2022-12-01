<?php

$categoria = [];
$categoria[] = 'Infantil';
$categoria[] = 'Adolescente';
$categoria[] = 'Adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo "O nome não pode estar vazio.";
    return;
}

if (strlen ($nome) < 3){
    echo "O nome deve conter mais de 3 caracteres";
    return;
}

if (strlen ($nome) > 40) {
    echo "O nome é muito extenso";
    return;
}

if (!is_numeric($idade)) {
    echo "Informe um número da idade";
    return;
}


if ($idade >= 6 && $idade <=12){

    for ($i = 0; $i <= count($categoria); $i++){
        if ($categoria[$i] == 'Infantil') {
            echo "O atleta " . $nome . " compete na categoria " . $categoria[$i];
        }
    }

} else if ($idade > 12 && $idade <=18){

    for ($i = 0; $i <= count($categoria); $i++){
        if ($categoria[$i] == 'Adolescente') {
            echo "O atleta " . $nome . " compete na categoria " . $categoria[$i];
        }
    }

}else if ($idade > 18 && $idade <= 40){

    for ($i = 0; $i <= count($categoria); $i++){
        if ($categoria[$i] == 'Adulto') {
            echo "O atleta " . $nome . " compete na categoria " . $categoria[$i];
        }
    }

}