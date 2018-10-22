<!-- CADASTRAR VISITANTE -->
	<div class="modal fade" id="cadastrarVisitante" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Cadastrar Visitante</h5>
					
				</div>
				<div class="modal-body">
					<form method="POST" action="../controller/visitantes/cadastrarVisitante.php">
						<div class="form-group">
							<input type="text" class="form-control" id=""
								placeholder="Nome Completo"
								required="required" name="nome">
						</div>
						<div class="form-group">
							<input type="number" class="form-control" id=""
								placeholder="Celular"
								name="celular">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id=""
								placeholder="Email"
								name="email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id=""
								placeholder="<?php echo $_SESSION['nome']?>"
								name="inserido_por" disabled>
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