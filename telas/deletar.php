<?php
if(!empty($_GET['ID']))
{
include "funcoes/db_ops.php";

$id = $_GET['ID'];

$sql = "SELECT * FROM convidados WHERE id=$id";

$resultado = $conecta->query($sql);

if ($resultado->num_rows > 0)
{
    $sqlDelete="DELETE FROM convidados WHERE id=$id";
    $resultadoDelete=$conecta->query($sqlDelete);
    }
} header('Location:../index.php');
?>
