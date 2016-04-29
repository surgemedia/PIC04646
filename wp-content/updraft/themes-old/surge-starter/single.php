<?php 
			/*=============================================
			            	Panel Menu       		     
			 @components
				+ molecule/transparent-box
				+ atom/button-list
			=============================================*/
			get_component([ 
					'template' => 'atom/image-backing',
					'vars' => ['http://192.168.0.2/pic04646/wp-content/uploads/2016/04/TID01-Image-1.jpg'] ]);

 ?>
 	<article id="blog-content" class="white-bg">
 	<div class="container">
 		<div class="col-md-10 col-md-offset-1">
 		<h1 class="underline dark text-center">In the Kitchen</h1>
 		<a class="btn" href="#">Back to list</a>
 		<header>
 			<span class="cat">Piccalilli Recipe</span>
 			<h2><?php the_title(); ?></h2>
 			<small>Posted on May 9, 2014 by temp_login</small>
 		</header>
 		<div class="content">
 			<img src="http://192.168.0.2/pic04646/wp-content/uploads/2016/04/TID01-Image-1.jpg" width="600px" alt="">
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem modi eligendi distinctio doloremque ipsa pariatur fuga impedit animi nulla quo expedita, enim mollitia sequi error consequuntur sapiente inventore nam magnam.</p>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem modi eligendi distinctio doloremque ipsa pariatur fuga impedit animi nulla quo expedita, enim mollitia sequi error consequuntur sapiente inventore nam magnam.</p>

 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem modi eligendi distinctio doloremque ipsa pariatur fuga impedit animi nulla quo expedita, enim mollitia sequi error consequuntur sapiente inventore nam magnam.</p>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem modi eligendi distinctio doloremque ipsa pariatur fuga impedit animi nulla quo expedita, enim mollitia sequi error consequuntur sapiente inventore nam magnam.</p>
 			<ul>
 				<li><strong>Testing</strong></li>
 				<li>Test</li>
 				<li>Test </li>
 				<li>test 1</li>
 				<li>test</li>
 			</ul>
 		</div>
 		<footer>
 			<a class="btn" href="#">Back to list</a>
 		</footer>
 		</div>
 		</div>
 		<p id="simple-contact" class="text-center">Phone 07339 - Fax 0453453453 - Email food@piccialli.com.au</p>
 	</article>