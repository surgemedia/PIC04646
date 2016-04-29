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
					'vars' => ['http://piccalilli.surgehost.com.au/wp-content/uploads/2016/04/TID03-Image-3.jpg'] ]);

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
			get_component([ 'template' => 'organism/our-clients' ]);
	 ?>

<?php endwhile; ?>
