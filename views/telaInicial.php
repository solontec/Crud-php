<?php
require_once "../model/conn.php";
require_once "../controller/login.php";

    
if(!isset($_SESSION['usuario'])){
    
    header('Location: telaLogin.php');
    echo " você n tem permissão pra essa tela";
}



echo "oi!";

?>