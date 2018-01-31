<?php
$image = wp_kses_post($instance['image']);
$title = wp_kses_post($instance['title']);
$buttontext = wp_kses_post($instance['buttontext']);
$color = wp_kses_post($instance['color']);
$url = wp_kses_post($instance['url']);
$buttontext = wp_kses_post($instance['buttontext']);
$attachment_size = 'full';
$position = wp_kses_post($instance['position']);

if ($position == 'top'){ $posClass="align-items-top";}
elseif ($position == 'center'){ $posClass="align-items-center";}
elseif ($position == 'bottom'){ $posClass="align-items-end";}



?>



<figure class="imghvr-fade">
   <?php if ( ! empty( $image )) : ?>
   	 
   		<?php echo wp_get_attachment_image( $image, $attachment_size, false);?>
   	 
   	 <?php endif; ?>
   	 
    <figcaption class="d-flex  <?php echo $posClass; ?> justify-content-center">
    <div>
        <h2>
        	<?php echo $title; ?>
        </h2>
        <div class="actionBtn"><?php echo $buttontext; ?></div>
     </div>   
    </figcaption>
    <a href="<?php echo $url; ?>"></a>
</figure>