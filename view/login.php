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
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Garagem Church Staff</h3>
					</div>
					<div class="panel-body">
						<form role="form" method="post"
							action="../controller/login/validaLogin.php">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="Usuario" name="user"
										type="text" autofocus required="required">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Senha" name="pass"
										type="password" value="" required="required">
								</div>

								<button type="submit" class="btn btn-lg btn-warning btn-block">Entrar</button>
								<button class="btn btn-lg btn-secondary btn-block" data-toggle="modal" data-target="#cadastrarUsuario">Cadastrar</button>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- MODAL CADASTRAR USUARIO -->
	<div class="modal fade" id="cadastrarUsuario" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Cadastrar Usuario</h5>
					
				</div>
				<div class="modal-body">
					<form method="POST" action="../controller/login/cadastrarUsuario.php">
						<div class="form-group">
							<input type="text" class="form-control" id=""
								placeholder="Login"
								required="required" name="user">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id=""
								placeholder="Senha"
								required="required" name="pass">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id=""
								placeholder="Confirme sua senha"
								required="required" name="confirm_pass">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id=""
								placeholder="Nome e sobrenome"
								required="required" name="nome">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id=""
								placeholder="Email"
								required="required" name="email">
						</div>
						<div class="form-group">
							<input type="number" class="form-control" id=""
								placeholder="Celular"
								required="required" name="celular">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id=""
								placeholder="Ministerio"
								required="required" name="ministerio">
						</div>
						<div class="form-group">
							<input type="number" class="form-control" id=""
								placeholder="Nivel de acesso"
								required="required" name="nivel_acesso">
						</div>
						<div class="form-group">
							<input type="number" class="form-control" id=""
								placeholder="GCToken"
								required="required" name="token">
						</div>
						<br>
						<div class="form-group">
							<div class="modal-footer">
								<button type="reset" class="btn btn-secondary">Redefinir</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
								<button type="submit" class="btn btn-warning">Cadastrar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<!-- jQuery -->
	<script src="../vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="../vendor/metisMenu/metisMenu.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
