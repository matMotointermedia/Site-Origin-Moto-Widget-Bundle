<?php
/*
Widget Name: shopbox
Description: shopbox.
Author: www.motointermedia.com
Author URI: https://www.motointermedia.com/
*/
class Shopbox extends SiteOrigin_Widget
{

    function __construct()
    {

        parent::__construct(
            'shopbox',
            __('Kachel für einen Shop', 'spacer-text-domain'),
            array(
                'description' => __('Fügt eine Kachel für einen Shop ein.', 'addon-so-widgets-bundle'),
                'panels_icon' => 'dashicons dashicons-image-filter',
                'panels_groups' => array('addonso')
            ),
            array(),
            array(
                'widget_title' => array(
                    'type' => 'text',
                    'label' => __('Shoptitel', 'addon-so-widgets-bundle'),
                    'default' => ''
                ),
                'shop_image' => array(
        			'type' => 'media',
        			'label' => __( 'Wähle ein Shop Bild', 'addon-so-widgets-bundle' ),
        			'choose' => __( 'Bild wählen', 'addon-so-widgets-bundle' ),
        			'update' => __( 'Bild auswählen', 'addon-so-widgets-bundle' ),
        			'library' => 'image',
        			'fallback' => true
    			),
                'content' => array(
                    'type' => 'text',
                    'label' => __( 'Kategorie', 'addon-so-widgets-bundle' ),
                    'default' => ''
                ),
                'logo' => array(
        			'type' => 'media',
        			'label' => __( 'Wähle ein Logo aus', 'addon-so-widgets-bundle' ),
        			'choose' => __( 'Logo wählen', 'addon-so-widgets-bundle' ),
        			'update' => __( 'Logo auswählen', 'addon-so-widgets-bundle' ),
        			'library' => 'image',
        			'fallback' => true
    			),



            ),
            plugin_dir_path(__FILE__)
        );
    }

    function get_template_name($instance)
    {
        return 'shopbox-template';
    }

    function get_style_name($instance)
    {
        return 'shopbox-style';
    }

}

siteorigin_widget_register('shopbox', __FILE__, 'Shopbox');