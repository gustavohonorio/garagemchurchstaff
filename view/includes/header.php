<?php 
session_start();

include '../controller/login/validaAcesso.php';

verificaAcesso($_SESSION['logado']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema Administrativo da Igreja Garagem Church">
    <meta name="author" content="Gustavo Honório">

    <title>Garagem Staff - Vamos transformar nossa cidade</title>
    
    <!-- Icone do navegador / favicon -->
    <link rel="shortcut icon" href="favicon.ico">
  	<link rel="icon" type="image/gif" href="../images/favicon/favicon/favicon.ico">

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>