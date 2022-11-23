<?php
include "db_ops.php";

session_start();
    if(isset($_POST)){
        $usuario=$_POST['usuario'];
        $senha=md5($_POST['senha']);

        $sql = "select * from admin where usuario='$usuario' and senha='$senha'";
        $resposta =$conecta->query($sql);
        if($resposta->num_rows > 0) {
        $admin=$resposta->fetch_assoc();

        $_SESSION['usuario'] = $admin['usuario'];
        $_SESSION['senha'] = $admin['senha'];
        $conecta->close();
        header("Location:../index.php");
        exit();
        }
        else{
            header("Location:../login.php?erro=erro_no_login");
            exit();
        }
    }
