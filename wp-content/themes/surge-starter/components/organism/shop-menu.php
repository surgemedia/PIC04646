<section id="shop-menu" class="white-bg">
<?php 
	get_component([
		'template' => 'molecule/page-section-title',
		'vars' => [
					'page-section-title container text-center',
					get_field("title"),
					get_field("content")
					
					]
				]);
 ?>
<div class="container">
<div class="list-inline">
	<?php 
			// WP_Query arguments
				// get only first 3 results
				$ids = get_field('items', false, false);

				$args = array(
					'post_type'      	=> 'foodstorm_links',
					'post__in'			=> $ids,
					'orderby'        	=> 'post__in',
				);

				// The Query
				$foodstorm_list = new WP_Query( $args );

				// The Loop
				if ( $foodstorm_list->have_posts() ) {
					
					while ( $foodstorm_list->have_posts() ) {
						$foodstorm_list->the_post();
						
						get_component([
							'template' => 'molecule/link-img-text',
							'remove_tags' => ['p'],
							'vars' => [
										'col-md-3 col-sm-6',
										'shop-item',
										get_field('image'),
										get_the_title(),
										NULL, //removed
										get_field('url')
										]
									]);
					}
				} else {
					// no posts found
				}

				// Restore original Post Data
				wp_reset_postdata();

 	?>
	
</div>
</div>
</section>