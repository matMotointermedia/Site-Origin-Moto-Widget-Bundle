<?php
/*
Widget Name: colorbox
Description: colorbox.
Author: Ingenious Solutions
Author URI: http://ingenious-web.com/
*/
class Colorbox extends SiteOrigin_Widget
{

    function __construct()
    {

        parent::__construct(
            'colorbox',
            __('Farbige Text Box', 'spacer-text-domain'),
            array(
                'description' => __('Fügt eine farbige Box ein.', 'addon-so-widgets-bundle'),
                'panels_icon' => 'dashicons dashicons-image-filter',
                'panels_groups' => array('addonso')
            ),
            array(),
            array(
                'widget_title' => array(
                    'type' => 'text',
                    'label' => __('Farbige Box', 'addon-so-widgets-bundle'),
                    'default' => ''
                ),
				'border' => array(
                    'type' => 'checkbox',
                    'label' => __('Rahmen', 'addon-so-widgets-bundle'),
                    'default' => 'true'
                ),
                'color' => array(
                    'type' => 'color',
                    'label' => __( 'Hintergrundfarbe', 'addon-so-widgets-bundle' ),
                    'default' => '#6c9271'
                ),
                'content' => array(
                    'type' => 'tinymce',
                    'label' => __( 'Inhalt', 'addon-so-widgets-bundle' ),
                    'default' => ''
                ),



            ),
            plugin_dir_path(__FILE__)
        );
    }

    function get_template_name($instance)
    {
        return 'colorbox-template';
    }

    function get_style_name($instance)
    {
        return 'colorbox-style';
    }

}

siteorigin_widget_register('colorbox', __FILE__, 'Colorbox');