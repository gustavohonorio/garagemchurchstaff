<?php 

function verificaAcesso($logado){
	if ($logado!=1) {
		echo"<script language='javascript' type='text/javascript'>alert('Acesso restrito! Voce nao esta logado');window.location.href='../index.html';</script>";
		//header("Location: ../index.php");
	}
}

function verificaAcessoCadastro($acesso){
	if($acesso!=1 && $acesso!=0){
		echo"<script language='javascript' type='text/javascript'>alert('Você não tem permissão para esta área, por favor contate o administrador do sistema. Equipe GC');window.location.href='../index.html';</script>";
	}
}

function desconectar(){
	session_unset();
	header("Location: ../index.php");
}

function usuarioLogado(){
	echo $_SESSION['nome'];
}

?>