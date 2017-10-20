<?php
$widget_title = wp_kses_post($instance['widget_title']);
$author = wp_kses_post($instance['author']);

?>



<?php if ($widget_title) { ?>
    <h3 class="widget-title zitat">
        <span>»<?php echo $widget_title ?>«</span><br>
        <?php echo $author ?>
    </h3>
<?php } ?>
</div>