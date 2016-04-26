<section id="how-to-order" class="trans-overlay" style="background-image:url(wp-content/uploads/2016/04/TID02-Image-2.jpg)">
	<div class="container">
	<?php 
		get_component([
		'template' => 'molecule/transparent-box',
		'remove_tags' =>  ['i'],
		'vars' => [
					'col-md-6 col-md-offset-3',
					'trans-box text-center',
					NULL,
					'How to Order',
					'	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores dicta, id alias amet, reprehenderit ullam quibusdam perferendis eveniet est earum praesentium excepturi distinctio.',
					get_component([
						'template' => 'atom/single-button',
						'return_string' => true,
						'vars' => [ '',
									'btn',
									'Read More',
									'#'
									]
						])
					
					]
				]);
 	?>
	</div>

	<!-- </div> -->
</section>