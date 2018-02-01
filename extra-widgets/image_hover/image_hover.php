<?php
/*
Widget Name: Image Hover
Description: A widget for image hover effects.
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
                'style' => array(
        						'type' => 'select',
        						'label' => __('Image Effect', 'addon-so-widgets-bundle'),
        						'options' => array(
                      'imghvr-fade-trans' => __('fade transparent', 'addon-so-widgets-bundle'),
        							'imghvr-fade' => __('fade', 'addon-so-widgets-bundle'),
        							'imghvr-push-up' => __('push up', 'addon-so-widgets-bundle'),
        							'imghvr-push-down' => __('push down', 'addon-so-widgets-bundle'),
                      'imghvr-push-left' => __('push left', 'addon-so-widgets-bundle'),
                      'imghvr-push-right' => __('push right', 'addon-so-widgets-bundle'),
                      'imghvr-slide-up' => __('slide up', 'addon-so-widgets-bundle'),
                      'imghvr-slide-down' => __('slide down', 'addon-so-widgets-bundle'),
                      'imghvr-slide-left' => __('slide left', 'addon-so-widgets-bundle'),
                      'imghvr-slide-right' => __('slide right', 'addon-so-widgets-bundle'),
                      'imghvr-reveal-up' => __('reveal up', 'addon-so-widgets-bundle'),
                      'imghvr-reveal-down' => __('reveal down', 'addon-so-widgets-bundle'),
                      'imghvr-reveal-left' => __('reveal left', 'addon-so-widgets-bundle'),
                      'imghvr-reveal-right' => __('reveal right', 'addon-so-widgets-bundle'),
                      'imghvr-hinge-up' => __('hinge up', 'addon-so-widgets-bundle'),
                      'imghvr-hinge-down'  => __('hinge down', 'addon-so-widgets-bundle'),
                      'imghvr-hinge-left'  => __('hinge left', 'addon-so-widgets-bundle'),
                      'imghvr-hinge-right'  => __('hinge right', 'addon-so-widgets-bundle'),
                      'imghvr-flip-horiz' => __('flip horiz', 'addon-so-widgets-bundle'),
                      'imghvr-flip-vert' => __('flip vert', 'addon-so-widgets-bundle'),
                      'imghvr-flip-diag-1' => __('flip diag-1', 'addon-so-widgets-bundle'),
                      'imghvr-flip-diag-2' => __('flip diag-2', 'addon-so-widgets-bundle'),
                      'imghvr-shutter-out-horiz' => __('shutter-out-horiz', 'addon-so-widgets-bundle'),
                      'imghvr-shutter-out-vert' => __('shutter-out-vert', 'addon-so-widgets-bundle'),
                      'imghvr-shutter-out-diag-1' => __('shutter-out-diag', 'addon-so-widgets-bundle'),
                      'imghvr-shutter-out-diag-2' => __('shutter-out-diag-2', 'addon-so-widgets-bundle'),
                      'imghvr-shutter-in-horiz'  => __('shutter-in-horiz', 'addon-so-widgets-bundle'),
                      'imghvr-shutter-in-vert' => __('shutter-in-vert', 'addon-so-widgets-bundle'),
                      'imghvr-shutter-in-out-horiz' => __('shutter-in-out-horiz', 'addon-so-widgets-bundle'),
                      'imghvr-shutter-in-out-vert' => __('shutter-in-out-vert', 'addon-so-widgets-bundle'),
                      'imghvr-shutter-in-out-diag-1' => __('shutter-in-out-diag-1', 'addon-so-widgets-bundle'),
                      'imghvr-shutter-in-out-diag-2' => __('shutter-in-out-diag-2', 'addon-so-widgets-bundle'),
                      'imghvr-fold-up' => __('shutter-fold-up', 'addon-so-widgets-bundle'),
                      'imghvr-fold-down' => __('shutter-fold-down', 'addon-so-widgets-bundle'),
                      'imghvr-fold-left' => __('shutter-fold-left', 'addon-so-widgets-bundle'),
                      'imghvr-fold-right' => __('shutter-fold-right', 'addon-so-widgets-bundle'),
                      'imghvr-zoom-in' => __('shutter-zoom-in', 'addon-so-widgets-bundle'),
                      'imghvr-zoom-out' => __('shutter-zoom-out', 'addon-so-widgets-bundle'),
                      'imghvr-zoom-out-up' => __('shutter-zoom-out-up', 'addon-so-widgets-bundle'),
                      'imghvr-zoom-out-down' => __('shutter-zoom-out-down', 'addon-so-widgets-bundle'),
                      'imghvr-zoom-out-left' => __('shutter-zoom-out-left', 'addon-so-widgets-bundle'),
                      'imghvr-zoom-out-right' => __('shutter-zoom-out-right', 'addon-so-widgets-bundle'),
                      'imghvr-zoom-out-flip-horiz'  => __('shutter-zoom-out-flip-horiz', 'addon-so-widgets-bundle'),
                      'imghvr-zoom-out-flip-vert'  => __('imghvr-zoom-out-flip-vert', 'addon-so-widgets-bundle'),
                      'imghvr-blur' => __('imghvr-blur', 'addon-so-widgets-bundle'),
                    )
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
        'bgcolor' => array(
          'type' => 'color',
          'label' => __('Hintergrundfarbe', 'addon-so-widgets-bundle'),
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
      'bgcolor'    => $instance['bgcolor'],
			'position'    => $instance['position'],
		);
	}


   function get_style_name($instance)
    {
        return 'image-style';
    }

}

siteorigin_widget_register('image_hover', __FILE__, 'image_hover');
