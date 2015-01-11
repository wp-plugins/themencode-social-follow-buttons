<?php
/*
Plugin Name: ThemeNcode Social Follow Buttons
Description: Add Social Follow Links on your WordPress Site with easy to use shortcode.
Plugin URI: http://themencode.com/themencode-social-follow-buttons/
Author: ThemeNcode
Author URI: http://themencode.com 
Version: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
/* 
If you find any bug or need any kind of help, please feel free to send an email to contact@abdulawal.com . I'll get back to you asap.
*/
define('TSFB_PLUGIN_NAME','ThemeNcode Social Follow Buttons');
define('TSFB_PLUGIN_DIR', 'themencode-social-follow-buttons');
define('TSFB_IMG_DIR', 'themencode-social-follow-buttons/images');
// Add Scripts to header
function tsfb_follow_head_materials(){
	$css_dir = plugins_url()."/".TSFB_PLUGIN_DIR."/css";
	echo "<link href='$css_dir/tsfb-style.css' rel='stylesheet' />";
}
add_action('wp_head', 'tsfb_follow_head_materials');
/* Function to create Display Shortcode  */
	function themencode_social_follow_buttons( $atts ) {
	     extract( shortcode_atts( array(
	     	'icon_style' => '1',
	     	'display_style' => 'default',
	     	'container_class' => 'tsfb-container',
	     	'link_target' => '_parent',
			'show_facebook' => 'true',
			'show_twitter' => 'true',
			'show_youtube' => 'true',
			'show_google_plus' => 'true',
			'show_linkedin' => 'true',
			'show_pinterest' => 'false',
			'show_blogger' => 'false',
			'show_delicious' => 'false',
			'show_digg' => 'false',
			'show_reddit' => 'true',
			'show_tumblr' => 'false',
			'show_stumbleupon' => 'false',
			'show_wordpress' => 'false',
			'link_facebook' => '',
			'link_twitter' => '',
			'link_youtube' => '',
			'link_google_plus' => '',
			'link_linkedin' => '',
			'link_pinterest' => '',
			'link_blogger' => '',
			'link_delicious' => '',
			'link_digg' => '',
			'link_reddit' => '',
			'link_tumblr' => '',
			'link_stumbleupon' => '',
			'link_wordpress' => '',
	     ), $atts ) );
	    $icon_url     =  plugins_url()."/".TSFB_IMG_DIR."/style-$icon_style";
	    $final_output  	=  "<div class='tsfb-container tsfb-".$display_style."'>";
	    $final_output  .=  "<ul>";
	    if($show_facebook == "true"){
	    	$final_output  .=  "<li class='tsfb_facebook'><a href='".$link_facebook."' target='".$link_target."'><img src='".$icon_url."/facebook.png' alt='Find us on Facebook'></a></li>";
	    }
	    if($show_twitter == "true"){
	    	$final_output  .=  "<li class='tsfb_twitter'><a href='".$link_twitter."' target='".$link_target."'><img src='".$icon_url."/twitter.png' alt='Find us on Twitter'></a></li>";
	    }
	    if($show_youtube == "true"){
	    	$final_output  .=  "<li class='tsfb_youtube'><a href='".$link_youtube."' target='".$link_target."'><img src='".$icon_url."/youtube.png' alt='Find us on Youtube'></a></li>";
	    }
	    if($show_google_plus == "true"){
	    	$final_output  .=  "<li class='tsfb_google_plus'><a href='".$link_google_plus."' target='".$link_target."'><img src='".$icon_url."/google_plus.png' alt='Find us on Google Plus'></a></li>";
	    }
	    if($show_linkedin == "true"){
	    	$final_output  .=  "<li class='tsfb_linkedin'><a href='".$link_linkedin."' target='".$link_target."'><img src='".$icon_url."/linkedin.png' alt='Find us on Linkedin'></a></li>";
	    }
	    if($show_pinterest == "true"){
	    	$final_output  .=  "<li class='tsfb_pinterest'><a href='".$link_pinterest."' target='".$link_target."'><img src='".$icon_url."/pinterest.png' alt='Find us on Pinterest'></a></li>";
	    }
	    if($show_blogger == "true"){
	    	$final_output  .=  "<li class='tsfb_blogger'><a href='".$link_blogger."' target='".$link_target."'><img src='".$icon_url."/blogger.png' alt='Find us on Blogger'></a></li>";
	    }
	    if($show_delicious == "true"){
	    	$final_output  .=  "<li class='tsfb_delicious'><a href='".$link_delicious."' target='".$link_target."'><img src='".$icon_url."/delicious.png' alt='Find us on Delicious'></a></li>";
	    }
	    if($show_digg == "true"){
	    	$final_output  .=  "<li class='tsfb_digg'><a href='".$link_digg."' target='".$link_target."'><img src='".$icon_url."/digg.png' alt='Find us on Digg'></a></li>";
	    }
	    if($show_reddit == "true"){
	    	$final_output  .=  "<li class='tsfb_reddit'><a href='".$link_reddit."' target='".$link_target."'><img src='".$icon_url."/reddit.png' alt='Find us on Reddit'></a></li>";
	    }
	    if($show_tumblr == "true"){
	    	$final_output  .=  "<li class='tsfb_tumblr'><a href='".$link_tumblr."' target='".$link_target."'><img src='".$icon_url."/tumblr.png' alt='Find us on Tumblr'></a></li>";
	    }
	    if($show_stumbleupon == "true"){
	    	$final_output  .=  "<li class='tsfb_stumbleupon'><a href='".$link_stumbleupon."' target='".$link_target."'><img src='".$icon_url."/stumbleupon.png' alt='Find us on StumbleUpon'></a></li>";
	    }
	    if($show_wordpress == "true"){
	    	$final_output  .=  "<li class='tsfb_wordpress'><a href='".$link_wordpress."' target='".$link_target."'><img src='".$icon_url."/wordpress.png' alt='Find us on WordPress'></a></li>";
	    }
	    $final_output  .=  "</ul>";
	    $final_output  .= "</div>";
	    return $final_output;
	}
	add_shortcode( 'tsfb', 'themencode_social_follow_buttons' );
// Just end of the plugin
//This plugin was coded by Abdul Awal Uzzal. (www.abdulawal.com)
//Thanks for using this plugin
?>