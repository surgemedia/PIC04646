<section id="how-to-order" class="trans-overlay" style="background-image:url(<?php echo get_field("background_image") ?>)">
	<div class="container">
	<?php 
			// WP_Query arguments
				// get only first 3 results
				$ids = get_field('page', false, false);

				$args = array(
					'post_type'    => "page",
					'post__in'			=> $ids,
				
				);

				// The Query
				$query = new WP_Query( $args );

				// The Loop
				if ( $query->have_posts() ) {
					
					while ( $query->have_posts() ) {
						$query->the_post();
						
						get_component([
						'template' => 'molecule/transparent-box',
						'remove_tags' =>  ['i'],
						'vars' => [
									'col-md-6 col-md-offset-3',
									'trans-box text-center',
									NULL,
									get_the_title(),
									get_the_content(),
									get_component([
										'template' => 'atom/single-button',
										'return_string' => true,
										'vars' => [ '',
													'btn',
													'Read More',
													get_permalink()
													]
										])
									
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

	<!-- </div> -->
</section>