<?php
/**
 * Template Name: TID03 - Our Clients Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php 
			/*=============================================
			            	Panel Menu       		     
			 @components
				+ molecule/transparent-box
				+ atom/button-list
			=============================================*/
			get_component([ 
					'template' => 'atom/image-backing',
					'vars' => [getFeaturedUrl(get_the_id())] ]);

 ?>
	
	<?php 
			/*=============================================
			=            	Testimonials      		   
			= @components
				+ molecule/img-text
			=============================================*/
			get_component([ 'template' => 'organism/testimonials',
							'vars' => [	
							'class' => 'white-trans-bg'

							]
						]);
	 ?>
	<?php 
			/*=============================================
			=            	Our Clients      		   
			= @components
				+ molecule/img-text
			=============================================*/
			get_component([ 'template' => 'organism/our-clients-multirows' ]);
	 ?>

<?php endwhile; ?>
