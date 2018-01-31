<?php
/*
Widget Name: Image Hover
Description: widget for image hover effects.
Author: www.motointermedia.com
Author URI: https://www.motointermedia.com/
*/
class image_hover extends SiteOrigin_Widget
{

    function __construct()
    {

        parent::__construct(
            'image_hover',
            __('Image mit Text Hover', 'spacer-text-domain'),
            array(
                'description' => __('Fügt eine Bild mit Text Hover ein.', 'addon-so-widgets-bundle'),
                'panels_icon' => 'dashicons dashicons-image-filter',
                'panels_groups' => array('addonso')
            ),
            array(),
            array(
                'image' => array(
        			'type' => 'media',
        			'label' => __( 'Wähle ein Bild', 'addon-so-widgets-bundle' ),
        			'choose' => __( 'Bild wählen', 'addon-so-widgets-bundle' ),
        			'update' => __( 'Bild auswählen', 'addon-so-widgets-bundle' ),
        			'library' => 'image',
        			'fallback' => true
    			),
                'title' => array(
                    'type' => 'text',
                    'label' => __('Beschriftung', 'addon-so-widgets-bundle'),
                    'default' => ''
                ),
                'buttontext' => array(
                    'type' => 'text',
                    'label' => __('Buttontext', 'addon-so-widgets-bundle'),
                    'default' => ''
                ),
                'url' => array(
					'type' => 'link',
					'label' => __('Destination URL', 'addon-so-widgets-bundle'),
				),

				'new_window' => array(
					'type' => 'checkbox',
					'default' => false,
					'label' => __('Link in neuem Fenster öffnen?', 'addon-so-widgets-bundle'),
				),
                'color' => array(
						'type' => 'color',
						'label' => __('Typo Farbe', 'addon-so-widgets-bundle'),
				),
				'position' => array(
						'type' => 'select',
						'label' => __('Position der Typo auf dem Bild', 'addon-so-widgets-bundle'),
						'options' => array(
							'top' => __('Top', 'addon-so-widgets-bundle'),
							'center' => __('Center', 'addon-so-widgets-bundle'),
							'bottom' => __('Bottom', 'addon-so-widgets-bundle')
					),
			'full_width' => array(
				'type' => 'checkbox',
				'default' => false,
				'label' => __('Full Width', 'so-widgets-bundle'),
				'description' => __("Resize image to fit its container.", 'so-widgets-bundle'),
			),	
				),

            ),
            plugin_dir_path(__FILE__)
        );
    }

	function get_less_variables( $instance ) {
		return array(
			'color'    => $instance['color'],
			'position'    => $instance['position'],
		);
	}
	

   function get_style_name($instance)
    {
        return 'image-style';
    }

}

siteorigin_widget_register('image_hover', __FILE__, 'image_hover');