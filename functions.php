<?php if ( !defined('ABSPATH') ) {exit;}


/**
 * Data structure exposer
 * 
 * Displays the data structure for any supplied value
 * 
 * @param   mixed $var
 * @access  public
 * @return  string
 */
if ( ! function_exists('print_pre')) {
    function print_pre($var, $return=false) {
        $retval = '<pre>'.print_r($var, true).'</pre>';
        if ($return) {
            return $retval;
        } else {
            echo $retval;
        }
    }
}