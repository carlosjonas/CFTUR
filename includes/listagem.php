<?php 

	$resultados = "";
	foreach ($listaViagens as $viagem) {
		$resultados .= '
			<div class="card mt-3">
			  <img src="' .$viagem->imagem. '" class="card-img-top" alt="' .$viagem->imagem. '">
			  <div class="card-body">
			    <h3 class="card-title text-center">' .$viagem->titulo. '</h3>
			    <p class="card-text">' .$viagem->descricao. '</p>
				<p class="card-text">Vagas: ' .$viagem->vagas. '</p>
				<p class="card-text">Valor: R$ ' .$viagem->valor. '</p>				    
			    <p class="card-text"><small class="text-muted">De: ' .date('d/m/Y',strtotime($viagem->data_inicio)). ' Até: ' .date('d/m/Y',strtotime($viagem->data_final)). '</small></p>
			  </div>
			  <div class="card-body">
			    <p class="card-text">
			    	<a href="editar.php?id=' .$viagem->id. '"><button type="button" class="btn btn-primary">Editar</button></a> <a href="excluir.php?id=' .$viagem->id. '"><button type="button" class="btn btn-danger">Excluir</button></a>		
				</p>
			  </div>
			</div>';
	}
 ?>

	<main>
		<section>
			<a class="btn btn-success mt-5" href="cadastrar.php">Nova Viagem</a>
		</section>

		<section>
			<?= $resultados; ?>

		</section>
	</main>