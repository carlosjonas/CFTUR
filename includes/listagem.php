<?php 

	$resultados = "";
	foreach ($listaViagens as $viagem) {
		$resultados .= '
			<div class="card mt-3" style="width: 18rem;">
			  <img src="' .$viagem->imagem.'" class="card-img-top" alt="' .$viagem->imagem.'">
			  <div class="card-body">
			    <h5 class="card-title">' .$viagem->titulo.'</h5>
			    <p class="card-text">' .$viagem->descricao. '</p>
			  </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item">De: ' .date('d/m/Y',strtotime($viagem->data_inicio)). ' Até: '.date('d/m/Y',strtotime($viagem->data_final)). '</li>
			    <li class="list-group-item">Vagas: ' .$viagem->vagas.'</li>
			    <li class="list-group-item">Valor: ' .$viagem->valor. '</li>
			    <li class="list-group-item">Status: ' .($viagem->ativo == '1' ? 'Ativo' : 'Inativo'). '</li>
			  </ul>
			  <div class="card-body">
			    <a href="editar.php?id= ' .$viagem->id. '" class="card-link"><button type="button" class"btn btn-primary">Editar</button></a>
			    <a href="editar.php?id= ' .$viagem->id. '" class="card-link"><button type="button" class"btn btn-danger">Excluir</button></a>
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