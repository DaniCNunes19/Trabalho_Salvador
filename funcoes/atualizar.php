<?php
include "db_ops.php";

if(isset($_POST['atualizar'])) {
    $id = $_POST['ID']
    $nome_convidado = $_POST['nome_completo'];
    $cpf = $_POST['cpf'];

    $sqlatualizar = "UPDATE convidados SET nome='$nome_convidado', cpf='$cpf' WHERE id='$id'";

    $resultado = $conecta->query($sqlatualizar);

   }
        header(heard"Location: ../index.php");

?>