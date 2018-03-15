<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if (isset($_FILES['arquivo']['name'])) {
                $uploaddir = 'c:\\xampp\\tmp\\';
                $arquivo = $uploaddir.$_FILES['arquivo']['name'];

                if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivo)) {
                    print("O arquivo foi gravado com sucesso");
                } else { 
                    print("Erro. O arquivo não foi enviado.");
                }
            }
        ?>
        
        <form enctype="multipart/form-data" action="TesteUpload.php" method="post">   
            <input type="hidden" name="MAX_FILE_SIZE" value="30000">
            Enviar este arquivo: <input type="file" name="arquivo">
            <input type="submit" value="ENVIAR">
        </form>
    </body>
</html>
