<?php 
session_start();

include '../database/conectadb.php';

$nome=$_POST['nome'];
$celular=$_POST['celular'];
$email=$_POST['email'];
$inserido_por=$_SESSION['nome'];

$sql="INSERT INTO visitantes(nome,celular,email,inserido_por) VALUES('$nome','$celular','$email','$inserido_por')";

if($mysqli->query($sql)==FALSE){
    echo"<script language='javascript' type='text/javascript'>alert('Erro ao cadastrar visitante, tente novamente.');window.location.href='../../view/index.php';</script>";
    die();
}else{
    echo"<script language='javascript' type='text/javascript'>alert('Visitante cadastrado com sucesso.');window.location.href='../../view/index.php';</script>";
}
?>