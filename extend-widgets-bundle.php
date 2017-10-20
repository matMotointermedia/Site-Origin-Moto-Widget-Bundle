<?php
/*
Plugin Name: Moto Widgets for SiteOrigin
Plugin URI: http://motointermedia.com
 * Description: Some useful widgets for SiteOrigin PageBuilder.
 * Version: 0.1 beta
 * Author: Matthias Härlin
 * Author URI: http://www.motointermedia.com
 * License: MIT
 * stand: 10/2017
*/
function add_my_awesome_widgets_collection($folders){
    $folders[] = plugin_dir_path(__FILE__).'extra-widgets/';
    return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'add_my_awesome_widgets_collection');
?>
