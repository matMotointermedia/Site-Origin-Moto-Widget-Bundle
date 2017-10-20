<?php
$widget_title = wp_kses_post($instance['widget_title']);
$shopImg = wp_kses_post($instance['shop_image']);
$content = wp_kses_post($instance['content']);
$logo = wp_kses_post($instance['logo']);
$attachment_size = 'full';
?>




<div class="shop" style="background-color:<?php echo $bgcolor; ?>">
	<div class="box_content">
   	 <?php if ( ! empty( $shopImg )) : ?>
   	 
   		<?php echo wp_get_attachment_image( $shopImg, $attachment_size, false);?>
   	 
   	 <?php endif; ?>
   	 
   	 <div class="kat">
   	 	<?php echo $content ?>
   	 </div>
   	 
   	  <?php if ( ! empty( $logo )) : ?>
   	 
   	 	<div class="logo">
   	 		<?php echo wp_get_attachment_image( $logo, $attachment_size, false);?>
   	 	</div>
   	 <?php endif; ?>
   	 
   	 </div>
</div>    
