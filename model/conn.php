<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "tbl_crud";
$port = 3307;

$conn = new mysqli($host, $user, $pass, $banco, $port);


if(!isset($conn)){
    die("conexao nao deu certo" . $conn->error);
}

