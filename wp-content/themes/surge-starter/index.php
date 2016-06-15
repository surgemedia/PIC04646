
<?php 
			/*=============================================
			            	Panel Menu       		     
			 @components
				+ molecule/transparent-box
				+ atom/button-list
			=============================================*/
			
			get_component([ 
					'template' => 'atom/image-backing',
					'vars' => [getFeaturedUrl(get_option( 'page_for_posts' ))] ]);

 ?>

<div class="white-bg">
	<?php 
	get_component([ 
					'template' => 'organism/in-the-kitchen',
					'vars'     => [
								"title" => "In the Kitchen"
								]
					]);

	 ?>
	 <section id="more-blog" class="container text-center">
	 		<h3>From Our Blog</h3>
	 		<div class="col-md-8 col-md-offset-2">
	 			<ul class="list-inline">
	 				<?php echo wp_list_categories(array(
		 								"title_li" => "",
		 					)); ?>
	 				<li>
 						<a href="" class="orange">More</a>
 					</li>
	 			</ul>
	 		</div>
	 </section>
	 </div>
	<?php 
			get_component([
				'template' => 'organism/contact-us',
				'vars' => [	
							'background' => 'http://192.168.0.2/pic04646/wp-content/uploads/2016/04/TID02-Image-2.jpg'

							]
						]);
	?>

