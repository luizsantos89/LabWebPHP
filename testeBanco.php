<?php
$servidor_msql = 'localhost';
$nome_banco = 'livraria';
$usuario = 'root';
$senha = ''; //Senha vazia

$conn = new PDO("mysql:host=$servidor_msql;dbname=$nome_banco","$usuario","$senha");

$conn->query("INSERT INTO livros VALUES('3-19089-795-4','PHP CES/JF',1,2016,'Livro usado na disciplina',36)");

echo "<h3>Operação realizada com sucesso!</h3>";
        
    