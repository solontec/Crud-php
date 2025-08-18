<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "tbl_crud";
$port = 3307;

$conn = new mysqli($host, $user, $pass, $banco, $port);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
