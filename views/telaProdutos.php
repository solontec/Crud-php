<?php
require_once "../model/conn.php";
require_once "../controller/login.php";


if(!isset($_SESSION['usuario'])){
    echo "<script> alert('você não pode acessar essa pagina sem logar')</script>";
    echo "<script> window.location.href = 'telaLogin.php'</script>"; 

    // utilizando script dentro de echo para redirecionar e respeitar header com echo

    // sempre usar aspas simples para definir caminhos 
}
?>  




