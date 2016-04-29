<?php 
	$vars['col'] = $vars[0];
	$vars['title_class'] = $vars[1];
	$vars['title'] = $vars[2];
	$vars['content'] = $vars[3];
	$vars['img'] = $vars[4];
    $vars['component'] = $vars[5];
    $vars['component_wrapper'] = $vars[6];
    $var['inner-cols'] = $vars[7];
    $var['inner-cols-pull'] = $vars[8];



 ?>
<div class="<?php echo $vars['col'] ?>">
    <h1 class="<?php echo $vars['title_class']; ?>"><?php echo $vars['title']; ?></h1>

    <div class="<?php echo  $var['inner-cols'].' '.$var['inner-cols-pull']; ?>"> 

     	<img src="<?php echo $vars['img'] ?>" alt="<?php echo $vars['title']; ?>"></img>
    </div>
     <div class="<?php echo  $var['inner-cols']; ?>"> 
    <!--  -->
         <p><?php echo $vars['content']; ?></p>
    </div>
    <div class="<?php echo $vars['component_wrapper'] ?>">
    	<?php echo $vars['component']; ?>
    </div>
</div>