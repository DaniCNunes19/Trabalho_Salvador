<?php
include "db_ops.php";
if(isset($_POST)){
    $nome_noiva=$_POST['nome_completo'];
    $usuario_noiva=$_POST['usuario'];
    $senha_noiva=md5($_POST['senha']);
    $sql = "select * from admin where usuario = '$usuario_noiva'";
    $resposta =$conecta->query($sql);
    if ($resposta->num_rows > 0) {
        //erro de volta pra tela
        $conecta->close();
        header("Location: ../cadastro_noiva.php?erro=usuario");
        exit();
    } else {
        $sql_insert = "INSERT INTO admin (nome_completo, usuario, senha)
                        VALUES ('$nome_noiva', '$usuario_noiva','$senha_noiva')";
        if($conecta->query($sql_insert) === TRUE) {
            $conecta->close();
            header("Location: ../login.php?sucesso");// echo "Novo registro criado com sucesso";
            exit();
        } else {
            $conecta->close();
            header("Location: ../cadastro_noiva.php?erro");
            exit();
        }
    }
}
