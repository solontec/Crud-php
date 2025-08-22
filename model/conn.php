<?php

require_once "connClass.php";

$conn = new Conexao();
$conn->setHost("localhost");
$conn->setUser("root");
$conn->setPass("");
$conn->setBanco("tbl_crud");
$conn->setPort(3307);

$db = $conn->conectar();