<?php
/*
Plugin Name: Background Gradient Color
Plugin URI: https://store.devilhunter.net/wordpress-plugin/background-gradient-color/
Description: Only Plugin activation is enough! No need to use any short-code or to edit settings.
Version: 1.0
Author: Tawhidur Rahman Dear
Author URI: https://www.tawhidurrahmandear.com/
Text Domain: tawhidurrahmandearsixtyfour
License: GPLv2 or later 
 
 */
 
 
 // Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}
// 

function tawhidurrahmandearsixtyfour()
	{
?> 
<style>
body {
  background: linear-gradient(143deg, #9999ff 10%, #80b3ff 20%, #ff99c2 30%, #adebad 40%, #ffd699 50%, #ffd699 60%, #dab3ff 70%);
}
</style>
	<?php
	}
add_action('wp_head', 'tawhidurrahmandearsixtyfour');
