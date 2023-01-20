	<main>

		<h2 class="mt-3">Excluir viagem</h2>

		<form method="POST" class="mb-3">
			<div class="form-group mt-3">
				<p>Você deseja realmente excluir a viagem <strong> <?= $viagem->titulo; ?> </strong> ?</p>
			</div>

			<div class="form-group mt-3">	
				<a class="btn btn-success" href="home.php">Cancelar</a>

				<button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
			</div>
		</form>
	</main>