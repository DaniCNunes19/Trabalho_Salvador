<?php
include "db_ops.php";

if(isset($_GET)) {
    $ID=$_GET['ID'];
    $sql="DELETE FROM convidados WHERE ID='{$ID}'";
    if ($conecta->query($sql)===TRUE){
        $conecta->close();
        header('Location:../index.php');
    }else{
        $conecta->close();
        header('Location:../index.php');
    }
}