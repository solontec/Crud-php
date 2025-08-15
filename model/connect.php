<?php

require_once 'classeConnect.php';

$conn = new connect("localhost", "root", "" , "tbl_crud" );
$conectou = $conn->connect();

var_dump($conectou);


