<?php
    session_start();

    if(isset($_POST["nomeEntrada"]) && isset($_POST["loginEntrada"]) && isset($_POST["senhaEntrada"])) {
        $nomeEntrada = $_POST["nomeEntrada"];
        $loginEntrada = $_POST["loginEntrada"];
        $senhaEntrada = $_POST["senhaEntrada"];
        
        $usuario = new Usuario($nomeEntrada, $loginEntrada, $senhaEntrada);
        
        $_SESSION["usuario"] = $usuario;
        
        echo("Cadastro realizado com sucesso <br /><br />");
        
        echo("<a href='Login.php'>Login</a>");
}