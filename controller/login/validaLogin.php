<?php 
session_start();

include'../database/conectadb.php';

//sql injection
$user=preg_replace('/[^[:alpha:]_]/', '',$_POST['user']);
$pass=preg_replace('/[^[:alnum:]_]/', '',$_POST['pass']);

$sql="SELECT * FROM usuario WHERE login='$user' AND senha='$pass'";
$query=mysqli_query($mysqli, $sql);
$resultado=$mysqli->query($sql) or die($mysqli->error);

if(mysqli_num_rows($resultado)<=0){
    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../../index.html';</script>";
    die();
}else{
    $resultado=mysqli_fetch_assoc($query);
    setcookie("login",$user);
    $_SESSION['logado']='1';
    $_SESSION['id']=$resultado['id_usuario'];
    $_SESSION['acesso']=$resultado['acesso'];
    $_SESSION['nome']=$resultado['nome'];
    $_SESSION['email']=$resultado['email'];
    $_SESSION['telefone']=$resultado['telefone'];
    $_SESSION['ministerio']=$resultado['ministerio'];
    $_SESSION['login']=$resultado['login'];
    $_SESSION['senha']=$resultado['senha'];
    header("Location: ../../view/index.php");
}
?>