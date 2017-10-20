<?php
$widget_title = wp_kses_post($instance['widget_title']);
$border = wp_kses_post($instance['border']);
$bgcolor = wp_kses_post($instance['color']);
$content = wp_kses_post($instance['content']);
?>



<?php if ($widget_title) { ?>
<div class="box" style="background-color:<?php echo $bgcolor; ?>">
	<div class="box_content <?php if ($border == false) : ?> no_boarder <?php endif; ?>">
    	<h3 class="widget-title">
      	  <span><?php echo $widget_title ?></span>
   	 </h3>
   	 <?php echo $content ?>
   	 </div>
</div>    
<?php } ?>
</div>