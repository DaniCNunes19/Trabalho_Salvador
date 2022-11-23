<?php
include "db_ops.php";
if(isset($_POST)){
    $nome_convidado=$_POST['nome_completo'];
    $cpf=$_POST['cpf'];
    $sql = "select * from convidados where nome_completo = '$nome_convidado'";
    $resposta =$conecta->query($sql);
    if ($resposta->num_rows > 0) {
        $conecta->close();
        header("Location: ../cadastro_convidados.php");
        exit();
    } else {
        $sql_insert = "INSERT INTO convidados (nome_completo, cpf)
                        VALUES ('$nome_convidado','$cpf')";
        if($conecta->query($sql_insert) === TRUE) {
            $conecta->close();
            header("Location: ../index.php?sucesso");// echo "Novo registro criado com sucesso";
            exit();
        } else {
            $conecta->close();
            header("Location: ../cadastro_noiva.php?erro");
            exit();
        }
    }
}
