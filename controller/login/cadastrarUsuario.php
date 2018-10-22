<?php 
session_start();

include '../database/conectadb.php';

$user=$_POST['user'];
$pass=$_POST['pass'];
$confirm_pass=$_POST['confirm_pass'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$celular=$_POST['celular'];
$ministerio=$_POST['ministerio'];
$nivel_acesso=$_POST['nivel_acesso'];

$token=$_POST['token'];

$sql="INSERT INTO usuario(login,senha,acesso,nome,email,telefone,ministerio) VALUES('$user','$pass','$nivel_acesso','$nome','$email','$celular','$ministerio')";

if($token!=120415){
    echo"<script language='javascript' type='text/javascript'>alert('GCToken invalido, entre em contato com o administrador do sistema.');window.location.href='../../index.html';</script>";
    die();
}else if($pass!=$confirm_pass){
    echo"<script language='javascript' type='text/javascript'>alert('As senhas nao conferem, tente novamente.');window.location.href='../../index.html';</script>";
    die();
}else if($mysqli->query($sql)==FALSE){
    echo"<script language='javascript' type='text/javascript'>alert('Erro ao cadastrar usuario, tente novamente.');window.location.href='../../index.html';</script>";
    die();
}else{
    echo"<script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso. Entre com seu usuario e senha.');window.location.href='../../index.html';</script>";
}
?>