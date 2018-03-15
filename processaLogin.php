<?php
    session_start();
    if(isset($_POST["loginEntrada"]) && isseet($_POST["senhaEntrada"])) {
        $loginEntrada = $_POST["loginEntrada"];
        $senhaEntrada = $_POST["senhaEntrada"];
        
        $usuario = $_SESSION["usuario"];
        
        $usuario.efetuarLogin($loginEntrada,$senhaEntrada);
}