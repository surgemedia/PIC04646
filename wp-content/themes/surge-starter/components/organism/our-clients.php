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
					'https://unsplash.it/130/130/?random',
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
					'https://unsplash.it/130/130/?random',

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
					'https://unsplash.it/130/130/?random',

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
					'https://unsplash.it/130/130/?random',
					NULL,
					NULL
					]
				]);	get_component([
		'template' => 'molecule/img-text',
		'remove_tags' => ['p','span'],
		'vars' => [
					'',
					'item text-center',
					'https://unsplash.it/130/130/?random',
					
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