<?php

$email = $_POST['email'];

$senha = $_POST['senha'];


$emailCerto = "google@google.com";
$senhaCerta = "123";


if ($email == $emailCerto && $senha == $senhaCerta) {
    header("Location: loginValido.php");
}
