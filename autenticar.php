<?php

require_once("conexao.php");

@session_start();

$user = $_POST['user'];

$senha = $_POST['senha'];

$query = $pdo->prepare("SELECT * FROM tb_usuario WHERE user = '$user' AND senha = '$senha';");

$query->execute();

//LOGADO

$res = $query->fetchAll(PDO::FETCH_ASSOC);

$total_reg = @count($res);

if ($total_reg > 0) {

    $_SESSION['email'] = $res[0]['email'];

    $_SESSION['user'] = $res[0]['user'];
}

header("Location: main/index.php", 1);
