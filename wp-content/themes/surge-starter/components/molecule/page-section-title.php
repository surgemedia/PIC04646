<?php 
	$vars['class'] = $vars[0];
	$vars['title'] = $vars[1];
	$vars['content'] = $vars[2];

 ?>

<div class="<?php echo $vars['class']; ?>">
	<h1><?php echo $vars['title']; ?></h1>
	<p><?php echo $vars['content']; ?></p>
</div>