<section id="testimonials" class="<?php echo $vars['class']; ?>">
	<div class="testimonials owl-carousel">
    
    <?php 
	get_component([
		'template' => 'molecule/img-text',
		'vars' => [
					'container',
					'item active text-center ',
					'https://unsplash.it/130/130/?random',
					'Sara / Coffee Club',
					'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ab atque, a, est autem deleniti quas nihil itaque excepturi voluptatem maxime, necessitatibus, veniam qui reiciendis illo porro aspernatur quae error?'
					]
				]);
 	?>
 	<?php 
	get_component([
		'template' => 'molecule/img-text',
		'vars' => [
					'container',
					'item text-center ',
					'https://unsplash.it/130/130/?random',
					'Sara / Coffee Club',
					'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ab atque, a, est autem deleniti quas nihil itaque excepturi voluptatem maxime, necessitatibus, veniam qui reiciendis illo porro aspernatur quae error?'
					]
				]);
 	?>


  </div>
</section>