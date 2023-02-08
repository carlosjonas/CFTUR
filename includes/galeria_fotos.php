	<main>
			<section id="banner-rotativo" class="carousel slide" data-bs-ride="true">
			  <div class="carousel-indicators">

			  	<?php for ($i=0; $i < 6; $i++): ?>
			  		<button type="button" data-bs-target="#banner-rotativo" data-bs-slide-to="<?= $i;?>" class="<?php if ($i == 0) { echo "active";	}else{ echo "";} ?>" aria-current="true" aria-label="Slide <?= $i+1;?>"></button>
			  	<?php endfor ?>

			  </div>
			  <div class="carousel-inner">

			  	<?php for ($j=1; $j < 7; $j++): ?>
			  		<figure class="carousel-item <?php if ($j == 1) { echo "active"; }else{ echo "";} ?>">
				      <img src="public/img/jeri/j<?= $j ;?>.jpg" class="d-block w-100" alt="Imagem de Jericoacoara <?= $j ;?>">
				    </figure>
			  	<?php endfor ?>

			  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#banner-rotativo" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#banner-rotativo" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			  </button>
			</section>
	</main>