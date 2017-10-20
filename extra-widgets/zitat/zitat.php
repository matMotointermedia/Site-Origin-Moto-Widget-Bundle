<?php

/*
Widget Name: Zitat
Description: Zitat.
Author: Ingenious Solutions
Author URI: http://ingenious-web.com/
*/

class Zitat extends SiteOrigin_Widget
{
    function __construct()
    {

        parent::__construct(
            'zitat',
            __('Zitat', 'spacer-text-domain'),
            array(
                'description' => __('Fügt ein Zitat ein.', 'addon-so-widgets-bundle'),
                'panels_icon' => 'dashicons dashicons-format-quote',
                'panels_groups' => array('addonso')
            ),
            array(),
            array(
                'widget_title' => array(
                    'type' => 'text',
                    'label' => __('Zitat', 'addon-so-widgets-bundle'),
                    'default' => ''
                ),

                'author' => array(
                    'type' => 'text',
                    'label' => __( 'Author', 'addon-so-widgets-bundle' ),
                    'default' => ''
                ),



            ),
            plugin_dir_path(__FILE__)
        );
    }

    function get_template_name($instance)
    {
        return 'zitat-template';
    }

    function get_style_name($instance)
    {
        return 'zitat-style';
    }

}

siteorigin_widget_register('zitat', __FILE__, 'Zitat');