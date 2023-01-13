	<main>
		<section>
			<a class="btn btn-success mt-5" href="home.php">Voltar</a>
		</section>

		<h2 class="mt-3">Cadastrar Viagem</h2>

		<form method="POST" class="mb-3">
			<div class="form-group mt-3">
				<label>Título</label>
				<input type="text" class="form-control" name="titulo" required>
			</div>
			<div class="form-group mt-3">
				<label>Descrição</label>
				<textarea class="form-control" name="descricao" rows="5"  required></textarea>
			</div>
			<div class="form-group mt-3">
				<label>Data de Início</label>
				<input type="date" class="form-control" name="data_inicio"  required>
			</div>
			<div class="form-group mt-3">
				<label>Data de Finalização</label>
				<input type="date" class="form-control" name="data_final"  required>
			</div>
			<div class="form-group mt-3">
				<label>Valor</label>
				<input type="number" class="form-control" name="valor" required> 
			</div>
			<div class="form-group mt-3">
				<label>Número de vagas</label>
				<input type="number" class="form-control" name="vagas" required> 
			</div>
			<div class="form-group mt-3">
				<label>Status</label>
				<div>
					<div class="form-check form-check-inline">
						<label class="form-control">
							<input type="radio" name="ativo" value="1" checked> Ativo
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-control">
							<input type="radio" name="inativo" value="0"> Inativo
						</label>
					</div>
				</div>
			</div>
			<div class="form-group mt-3">
				<label>Imagem</label>
				<input type="file" class="form-control" name="imagem" required>
			</div>
			<div class="form-group mt-3">
				<button type="submit" class="btn btn-success">Enviar</button>
			</div>
		</form>
	</main>