<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Enviando e-mail com PHP</title>
    </head>
    <body>
        <?php
        
        $destinatario = "luiz.santos89@yahoo.com.br";
        $assunto = "Como enviar e-mails pelo PHP";
        $mensagem = " 
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                culpa qui officia deserunt mollit anim id est laborum.</p>  
                 ";
        
        $cabecalho = "MIME-Version: 1.0\r\n 
                Content-type: text/html; charset=iso-8859-1\r\n ";
        
        mail($destinatario, $assunto, $mensagem, $cabecalho);
        echo "E-mail enviado com sucesso";
        
        
        ?>
    </body>
</html>
