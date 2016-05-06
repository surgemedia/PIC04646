<section id="testimonials" class="<?php echo $vars['class']; ?>">
	<div class="testimonials owl-carousel">
    <?php 
    	$args = array(
					'post_type'      	=> 'testimonials',
					'meta_key'				=> 'active',
					'meta_value'      => true

					
				);

				// The Query
				$testimonials = new WP_Query( $args );

				// The Loop
				if ( $testimonials->have_posts() ) {
					
					while ( $testimonials->have_posts() ) {
						$testimonials->the_post();
							get_component([
							'template' => 'molecule/img-text',
							'vars' => [
										'container',
										'item active text-center ',
										aq_resize(get_field("testimonial_image"),300,300),
										get_the_title(),
										get_the_content()
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
</section>