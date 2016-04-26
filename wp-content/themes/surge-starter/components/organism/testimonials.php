<section id="testimonials" class="<?php echo $vars['class']; ?>">
	<div class="testimonials owl-carousel">
    
    <?php 
	get_component([
		'template' => 'molecule/img-text',
		'vars' => [
					'container',
					'item active text-center ',
					aq_resize('http://192.168.0.2/pic04646/wp-content/uploads/2016/04/THE-COFFEE-CLUB-logo.jpg',130,130,true,true,true)
					,
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
					aq_resize('http://192.168.0.2/pic04646/wp-content/uploads/2016/04/QLD-POLICE-logo.png',130,130,false,true,true)
					,
					'Sara / QLD Police',
					'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ab atque, a, est autem deleniti quas nihil itaque excepturi voluptatem maxime, necessitatibus, veniam qui reiciendis illo porro aspernatur quae error?'
					]
				]);
 	?>

  </div>
</section>