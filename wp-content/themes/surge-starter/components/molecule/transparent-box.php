<?php 
	$vars['col'] = $vars[0];
	$vars['class'] = $vars[1];
	$vars['icon'] = $vars[2];
	$vars['title'] = $vars[3];
	$vars['content'] = $vars[4];
	$vars['buttons'] = $vars[5];
	$vars['title_link'] = $vars[6];

 ?>
	<div class="<?php echo $vars['col']; ?>">
		<div class="<?php echo $vars['class']; ?>">
		<i class="<?php echo $vars['icon']; ?>"></i>
		
			<h1>
			<?php if($vars['title_link']){ ?>
			<a href="<?php echo $vars['title_link'] ?>">
				<?php echo $vars['title']; ?>
			</a>
			<?php } else { ?>
				<?php echo $vars['title']; ?>
				<?php } ?>
			</h1>
		
		<p><?php echo $vars['content']; ?></p>
		<?php echo $vars['buttons']; ?>
		</div>
	</div>
