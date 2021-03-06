<?php
/**
 * Create a front-end submission form for CMB which creates new posts/post-type entries.
 *
 * @package  Custom Metaboxes and Fields for WordPress
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

class Page {

    // Set prefix
    public $prefix = ''; // Change this to your prefix


    /**
     * Construct the class.
     */
    public function __construct() {
        add_filter( 'cmb_meta_boxes', array( $this, 'cmb_page_metaboxes' ) );
        add_action( 'init', array( $this, 'initialize_page_cmb_meta_boxes' ), 9 );
       // add_action( 'cmb_save_post_fields', array( $this, 'save_vehicles_featured_image' ), 10, 4 );
    }


    /**
     * Define the metabox and field configurations.
     */
    public function cmb_page_metaboxes( array $meta_boxes ) {

        /**
         * Metabox for the "news" front-end submission form
         */
        $meta_boxes['page_metabox'] = array(
            'id'         => 'news',
            'title'      => __( 'Attributi sezione', 'cmb' ),
            'pages'      => array( 'page' ), // Post type
            'context'    => 'normal',
            'priority'   => 'high',
            'show_names' => true, // Show field names on the left
            'fields'     => array(
            
            array(
			    'name' => 'Page Slogan',
			    'desc' => 'Page slogan',
			    'default' => '',
			    'id' => $prefix . 'page_slogan',
			    'type' => 'text'
			),
			
			array(
		    'name' => 'Additional column',
		    'desc' => '2 column text',
		    'id' => $prefix . 'page_subcontent',
		    'type' => 'wysiwyg',
		    'options' => array(),
			),
			
            
			array(
			    'name' => 'Background img File',
			    'desc' => 'Upload an image or enter an URL.',
			    'id' => $prefix . 'background_image',
			    'type' => 'file',
			    'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
				),

			array(
			    'name' => 'Background color',
			    'id'   => $prefix . 'background_color',
			    'type' => 'colorpicker',
			    'default'  => '#ffffff',
			    'repeatable' => false,
			),



            )
        );

        return $meta_boxes;
    }



    /**
     * Initialize CMB.
     */
    public function initialize_page_cmb_meta_boxes() {

        if ( ! class_exists( 'cmb_Meta_Box' ) ) {
            require_once 'Custom-Metaboxes-and-Fields-for-WordPress-master/init.php';
        }

    }


} // end class

$form = new page();
?>