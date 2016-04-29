<?php
/**
 * Template Name: TID02 - Services Page
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
					'vars' => ['http://piccalilli.surgehost.com.au/wp-content/uploads/2016/04/TID01-Image-1.jpg'] ]);

 ?>
	<div id="top-section" class="coal-trans-bg  white-font">
		<?php 
			get_component([
				'template' => 'molecule/title-img-content-buttons',
				'vars' => [
							'container',
							'underline text-center',
							get_the_title(),
							'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
							'http://piccalilli.surgehost.com.au/wp-content/uploads/2016/04/TID02-blueberry-muffin.png',
						get_component([
						'template' => 'atom/button-list',
						'return_string' => true
						]),
						'button-list col-md-6 col-md-offset-3',
						'col-md-6 col-sm-12  col-xs-12',
						'pull-right'

							]
						]);
 		?>
	</div>
	<div class="white-bg">
	<?php 
			/*=============================================
			=            	Page Section       		   
			= @components
				+ molecule/page-section-title
			=============================================*/
			get_component([
				'template' => 'molecule/page-section-title',
				'vars' => [
							'page-section-title container text-center',
							'Special Events',
							'Special Event catering available 7 Days* <br>
							Call us on 3391 7114 or email food@piccalilli.com.au <br>
							<br>
							Minium Number of conditonas apply

							for terms & condictions <a>CLICK HERE</a>'
							]
						]);

			get_component([
				'template' => 'molecule/page-section-title',
				'vars' => [
							'page-section-title container text-center',
							'Devliery',
							'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vel alias ea itaque nihil asperiores quia in incidunt ipsa tempore neque maxime, optio accusantium dicta, eligendi pariatur porro voluptatem ullam.'
							]
						]);
	 ?>
	 </div> 
	<?php 
			get_component([
				'template' => 'organism/contact-us',
				'vars' => [	
							'background' => 'http://piccalilli.surgehost.com.au/wp-content/uploads/2016/04/TID02-Image-2.jpg'

							]
						]);
	?>
<?php endwhile; ?>
