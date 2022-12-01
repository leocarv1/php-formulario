<?php

session_start();

$categoria = [];
$categoria[] = 'Infantil';
$categoria[] = 'Adolescente';
$categoria[] = 'Adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    $_SESSION['mensagem de erro'] = "O nome não pode ser vazio";
    header('location: index.php');
    return;
}

if (strlen ($nome) < 3){
    $_SESSION['mensagem de erro'] = "O nome deve conter mais de 3 caracteres";
    header('location: index.php');
    return;
}

if (strlen ($nome) > 40) {
    $_SESSION['mensagem de erro'] = "O nome é muito extenso. O máximo de caracter permitido é 40";
    header('location: index.php');
    return;
}

if (!is_numeric($idade)) {
    $_SESSION['mensagem de erro'] = "Informe um número da idade";
    header('location: index.php');    
    return;
}


if ($idade >= 6 && $idade <=12){

    for ($i = 0; $i <= count($categoria); $i++){
        if ($categoria[$i] == 'Infantil') {
            $_SESSION['mensagemDeSucesso'] = "O atleta " . $nome . " compete na categoria " . $categoria[$i];
            header('location: index.php');
            return;
        }
    }

} else if ($idade > 12 && $idade <=18){

    for ($i = 0; $i <= count($categoria); $i++){
        if ($categoria[$i] == 'Adolescente') {
            $_SESSION['mensagemDeSucesso'] = "O atleta " . $nome . " compete na categoria " . $categoria[$i];
        }
    }

}else if ($idade > 18 && $idade <= 40){

    for ($i = 0; $i <= count($categoria); $i++){
        if ($categoria[$i] == 'Adulto') {
            $_SESSION['mensagemDeSucesso'] = "O atleta " . $nome . " compete na categoria " . $categoria[$i];
        }
    }

}