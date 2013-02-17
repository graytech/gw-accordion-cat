<?php if ( !defined('ABSPATH') ) {exit;}
/**
 * @package GWAccordionCat
 */
/*
Plugin Name: GW Accordion Cat
Description: A plugin to create an accordion of categories with a shortcode
Version: 1.2
Author: Gray Kales (Grayworld Media)
Author URI: http://grayworld.com
*/

require_once(dirname(__FILE__).'/functions.php');

define('GWACCAT_URL', plugins_url('/gw-accordion-cat'));


/**
 * GW Accordion Cat Plugin Class
 */
class gw_accordion_cat
{
        
    /**
     * Constructor
     */
    public function __construct() {
        if (!is_admin()) {    
            $theme_style_path = get_stylesheet_directory() . '/gwaccat.css';
            $theme_style_uri = dirname(get_stylesheet_uri()) . '/gwaccat.css';
            wp_enqueue_script('gwaccordioncat', GWACCAT_URL . '/script.js', array('jquery'), '1.0', false);   
            if (file_exists($theme_style_path)) {
                wp_enqueue_style('gwaccordioncat', $theme_style_uri, false, '1.0');   
            } else {
                wp_enqueue_style('gwaccordioncat', GWACCAT_URL . '/gwaccat.css', false, '1.0');   
            }
            add_shortcode( 'accordioncat', array($this, 'shortcode_gwaccordioncat') ); 
        }
    }
    
    /**
     * Shortcode Processor ( accordioncat )
     * 
     * @param array $atts - attributes supplied by shorttag call
     * @return string - html to insert where shorttag is placed
     */
    public function shortcode_gwaccordioncat( $atts ) {
        extract( shortcode_atts( array(
            'cat'           => 'uncategorized',
            'startingcat'   => 'none',
            'orderby'       => 'slug',
            'order'         => 'asc',
            'hideposttitle' => 'no',
            'hidepostimage' => 'no',           
            'debug'         => 'false'
        ), $atts ) );
        
        // get target cat
        $parent_cat = get_category_by_slug( $cat );
        // load subcats
        $catlist = get_categories( array(
            'child_of'      => $parent_cat->cat_ID,
            'orderby'       => $orderby,
            'order'         => $order,
            'hierarchical'  => 0
        ));

        // attache post list
        for ($key=0; $key < count($catlist); $key++) {
            if ($catlist[$key]) {
                $catlist[$key]->posts = get_posts(array(
                    'cat' => $catlist[$key]->cat_ID
                ));
            } 
        }
        
        // build html response
        ob_start();
        if ($debug == 'true') print_pre($catlist);
        include(dirname(__FILE__).'/template.php');
        
        return ob_get_clean();     
    }
    
}

new gw_accordion_cat();

