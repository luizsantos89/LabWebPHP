<?php

    class Usuario {
        var $nome;
        var $login;
        var $senha;
        var $dataLogin;

        function Usuario($nomeEntrada,$loginEntrada,$senhaEntrada) {
            $this->nome=$nomeEntrada;
            $this->login=$loginEntrada;
            $this->senha=$senhaEntrada;
            $this->dataLogin=date();
        }
        
        function ValidarSenha($senhaEntrada) {
            if (($senha.length > 6) && ($senha != null))
                return true;
            else false;
        }
        
        function ValidarLogin($loginEntrada){
            if($loginEntrada.substr($string, $start));
        }
        
        function efetuarLogin($loginEntrada, $senhaEntrada) {
            if(($this->login == $loginEntrada)&&($this->senha == $senhaEntrada)) {
                $this->dataLogin = date();
                Header("Location:index.php");
            }            
        }
        
    }