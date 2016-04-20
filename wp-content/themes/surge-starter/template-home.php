<?php
/**
 * Template Name: Home Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<div id="image-backing" style="background-image:url(http://pic04646.local/wp-content/uploads/2016/04/TID01-Image-1.jpg);">
		
	</div>
<!-- <img id="image-backing"  src="" alt="Jumbotron"> -->
<div class="container">
<section id="panel-menu" class="row">
	<?php 
	get_component([
		'template' => 'molecule/transparent-box',
		'remove_tags' => ['p'],
		'vars' => [
					'col-md-6',
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
		'vars' => [
					'col-md-6',
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
<section id="shop-menu" class="white-bg">
<?php 
	get_component([
		'template' => 'molecule/page-section-title',
		'vars' => [
					'page-section-title container text-center',
					'Shop Online',
					'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
					]
				]);
 ?>
<div class="container">
<div class="list-inline">
	<?php 
	get_component([
		'template' => 'molecule/link-img-text',
		'remove_tags' => ['p'],
		'vars' => [
					'col-md-3',
					'shop-item',
					'http://pic04646.local/wp-content/uploads/2016/04/TID01-CANAPES.jpg',
					'lorem salad',
					NULL, //removed
					'#'
					]
				]);
 	?>
	
</div>
</div>
</section>
<section id="how-to-order" class="trans-overlay" style="background-image:url(http://pic04646.local/wp-content/uploads/2016/04/TID02-Image-2.jpg)">
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

<section id="testionimals" class="white-bg">
	<div class="testimonials owl-carousel">
    
    <?php 
	get_component([
		'template' => 'molecule/img-text',
		'vars' => [
					'container',
					'item active text-center ',
					aq_resize('http://pic04646.local/wp-content/uploads/2016/04/THE-COFFEE-CLUB-logo.jpg',130,130,true,true,true)
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
					aq_resize('http://pic04646.local/wp-content/uploads/2016/04/QLD-POLICE-logo.png',130,130,false,true,true)
					,
					'Sara / QLD Police',
					'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ab atque, a, est autem deleniti quas nihil itaque excepturi voluptatem maxime, necessitatibus, veniam qui reiciendis illo porro aspernatur quae error?'
					]
				]);
 	?>

  </div>
</section>

<section id="clients" class="white-bg">
<div class="container">
<?php 
	get_component([
		'template' => 'molecule/page-section-title',
		'remove_tags' => ['p'],
		'vars' => [
					'page-section-title container text-center',
					'Our Clients',
					NULL
					]
				]);
 ?>
	<div class="clients owl-carousel">
   <?php 
	get_component([
		'template' => 'molecule/img-text',
		'remove_tags' => ['p','span'],
		'vars' => [
					'',
					'item activetext-center',
					aq_resize('http://pic04646.local/wp-content/uploads/2016/04/QLD-POLICE-logo.png',130,130,false,true,true),
					NULL,
					NULL
					]
				]);
	get_component([
		'template' => 'molecule/img-text',
		'remove_tags' => ['p','span'],
		'vars' => [
					'',
					'item text-center',
					aq_resize('http://pic04646.local/wp-content/uploads/2016/04/THE-COFFEE-CLUB-logo.jpg',130,130,false,true,true),
					NULL,
					NULL
					]
				]);
		get_component([
		'template' => 'molecule/img-text',
		'remove_tags' => ['p','span'],
		'vars' => [
					'',
					'item text-center',
					aq_resize('http://pic04646.local/wp-content/uploads/2016/04/THE-COFFEE-CLUB-logo.jpg',130,130,false,true,true),
					NULL,
					NULL
					]
				]);
 	get_component([
		'template' => 'molecule/img-text',
		'remove_tags' => ['p','span'],
		'vars' => [
					'',
					'item text-center',
					aq_resize('http://pic04646.local/wp-content/uploads/2016/04/THE-COFFEE-CLUB-logo.jpg',130,130,false,true,true),
					NULL,
					NULL
					]
				]);	get_component([
		'template' => 'molecule/img-text',
		'remove_tags' => ['p','span'],
		'vars' => [
					'',
					'item text-center',
					aq_resize('http://pic04646.local/wp-content/uploads/2016/04/THE-COFFEE-CLUB-logo.jpg',130,130,false,true,true),
					NULL,
					NULL
					]
				]);
   ?>
  </div>
  
  </div>
  <div class="fake-nav">
  <div class="owl-nav">
            <div class="client-owl-prev">prev</div>
            <div class="client-owl-next">next</div>
        </div>
   </div>
</section>
<?php endwhile; ?>
