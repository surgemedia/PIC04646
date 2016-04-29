<div class="container">
<section id="panel-menu" class="row">
	<?php 
	get_component([
		'template' => 'molecule/transparent-box',
		'remove_tags' => ['p'],
		'vars' => [
					'col-md-5',
					'trans-box text-center',
					'icon-sushi',
					'Office <br>Catering',
					NULL,
					get_component([
						'template' => 'atom/button-list',
						'return_string' => true
						])
					]
				]);
 ?>
 <?php 
	get_component([
		'template' => 'molecule/transparent-box',
		'remove_tags' => ['p'],
		'vars' => [
					'col-md-5',
					'trans-box text-center',
					'icon-dish',
					'Office <br>Catering',
					NULL,
					get_component([
						'template' => 'atom/button-list',
						'return_string' => true
						])
					]
				]);
 ?>

</section>
</div>