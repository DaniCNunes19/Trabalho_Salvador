<?php
    $nome_servidor = "localhost";
    $nome_usuario = "root";
    $senha = "";
    $database = "db_ops";
    // Criar conexão
    $conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $database);
    if ($conecta->connect_error) {
    die("Falha na conexão: " . $conecta->connect_error . "<br>");
    }
?>