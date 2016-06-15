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

		$images = get_field('gallery','option');
		$row=3;
		$count=0;
		if( $images ): ?>
		    
		    <?php foreach( $images as $image ): ?>
		           <?php 
		           	

		            get_component([
									'template' => 'molecule/img-text',
									'remove_tags' => ['p','span'],
									'vars' => [
												'',
												'item activetext-center',
												$image['url'],
												NULL,
												NULL
												]
											]);



		            ?>

		        <?php endforeach; ?>
		    
		<?php endif; ?>


   
  </div>
  
  </div>
  <div class="fake-nav">
  <div class="owl-nav">
            <div class="client-owl-prev">prev</div>
            <div class="client-owl-next">next</div>
        </div>
   </div>
</section>