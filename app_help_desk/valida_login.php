<?php

session_start();

$usuario_autenticado = false;

//aqui é onde tem os usuarios cadastrados
//foi adicionado mais dois usuarios aluno e suporte
$usuario_cadastrado = [
    ['email' => 'admin@senai.br',
    'senha' => 12345],

    ['email' => 'aluno@senai.br',
    'senha' => 'abcde'],

    ['email' => 'suporte@senai.br',
    'senha' => 12345],
];

//aqui foi usado o foreach para verificar se o usuario esta autenticado
foreach($usuario_cadastrado as $user){
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

//aqui se o usuario for autenticado ele ira para o painel.php
if($usuario_autenticado){
    $_SESSION['autenticado'] = 'SIM';
    echo "Usuário autenticado com sucesso";
    header('Location: painel.php');

    //aqui ele permanecera na pagina de login 
}else{
    //echo "Usuário ou senha incorreto";
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro');
}
?>

