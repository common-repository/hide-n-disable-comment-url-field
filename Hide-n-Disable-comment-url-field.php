<?php
/*
Plugin Name: Hide-n-Disable-comment-url-field
Plugin URI: https://sharadchhetri.com/hide-and-disable-url-field-in-comment-form-in-wordpress-plugin/
Description: It disable and hide the URL field from Wordpress inbuilt comment form.Reference taken from http://codex.wordpress.org/Function_Reference/comment_form
Author: Sharad Chhetri
Version: 1.1
Author URI: http://sharadchhetri.com/
*/

/*Main Functions */
function Hide_n_Disable_comment_url_field($fields)
{
	unset($fields['url']);
	return $fields;
}
/* Links */ 
function hndcuf_plugin_meta_links( $links, $file ) {
    if ( strpos( $file, basename(__FILE__) ) ) {
        $links[] = '<a href="https://paypal.me/sharadchhetri" target="_blank" title="First link"> Donate </a>';
    }
    return $links;
}
add_filter('comment_form_default_fields','Hide_n_Disable_comment_url_field'); 
add_filter( 'plugin_row_meta', 'hndcuf_plugin_meta_links', 10, 2 );
?>



