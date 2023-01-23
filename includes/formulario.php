	<main>
		<section>
			<a class="btn btn-success mt-5" href="home.php">Voltar</a>
		</section>

		<h2 class="mt-3"><?= TITLE; ?></h2>

		<form method="POST" class="mb-3">
			<div class="form-group mt-3">
				<label>Título</label>
				<input type="text" class="form-control" name="titulo" placeholder="Título da viagem" 
					<?php 
						if (@$viagem != 'null') {
							echo 'value="'.@$viagem->titulo.'"';			
						}else{
							echo 'null';
						} 
					?> 
				required>
			</div>
			<div class="form-group mt-3">
				<label>Descrição</label>
				<textarea class="form-control" name="descricao" rows="5" placeholder="Descrição da viagem" required><?php if (@$viagem != 'null') { echo @$viagem->descricao; }else{ echo 'null'; } ?></textarea>
			</div>
			<div class="form-group mt-3">
				<label>Data de Início</label>
				<input type="date" class="form-control" name="data_inicio" min="<?php $hoje = date('d/m/Y'); echo $hoje; ?>" placeholder="__/__/__"
					<?php 
						if (@$viagem != 'null') {
							echo 'value="'.@$viagem->data_inicio.'"';			
						}else{
							echo 'null';
						} 
					?>  
				required>
			</div>
			<div class="form-group mt-3">
				<label>Data de Finalização</label>
				<input type="date" class="form-control" name="data_final" min="<?php $hoje = date('d/m/Y'); echo $hoje; ?>" placeholder="__/__/__"
					<?php 
						if (@$viagem != 'null') {
							echo 'value="'.@$viagem->data_final.'"';			
						}else{
							echo 'null';
						} 
					?>
				required>
			</div>
			<div class="form-group mt-3">
				<label>Valor</label>
				<input type="number" class="form-control" name="valor" placeholder="R$ 0,00" 
					<?php 
						if (@$viagem != 'null') {
							echo 'value="'.@$viagem->valor.'"';			
						}else{
							echo 'null';
						} 
					?>
				required> 
			</div>
			<div class="form-group mt-3">
				<label>Número de vagas</label>
				<input type="text" class="form-control vagas" id="vagas" name="vagas" placeholder="N° de vagas"
					<?php 
						if (@$viagem != 'null') {
							echo 'value="'.@$viagem->vagas.'"';			
						}else{
							echo 'null';
						} 
					?> 
				required> 
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
							<input type="radio" name="ativo" value="0" 
								<?php
									if (@$viagem != 'null') {
										if (@$viagem->ativo == '0') {
											echo "checked";
										}else{
											echo "";
										}
									}
								?>
						> Inativo
						</label>
					</div>
				</div>
			</div>
			<div class="form-group mt-3">
				<label>Imagem</label>
				<input type="file" class="form-control" name="imagem" 
					<?php 
						if (@$viagem != 'null') {
							echo 'value="'.@$viagem->imagem.'"';			
						}else{
							echo 'null';
						} 
					?>
				required>
			</div>
			<div class="form-group mt-3">
				<button type="submit" class="btn btn-success">Enviar</button>
			</div>
		</form>
	</main>