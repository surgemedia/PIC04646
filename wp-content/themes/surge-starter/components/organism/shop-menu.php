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
					'col-md-3 col-sm-6',
					'shop-item',
					'http://piccalilli.surgehost.com.au/wp-content/uploads/2016/04/TID01-CANAPES.jpg',
					'lorem salad',
					NULL, //removed
					'#'
					]
				]);
 	?>
	
</div>
</div>
</section>