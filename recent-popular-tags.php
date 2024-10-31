<?php
/**
 * Plugin Name: Recent Popular Tags
 * Plugin URI: http://webworksofkc.com/recent-popular-tags-wordpress-plugin-by-travis-pflanz
 * Description: Display the most popular recently used blog post tags on your website. Recent Popular Tags can be displayed by default below blog posts, via shortcode, via template tag or in a widget. <a href="admin.php?page=rpt-options.php">View settings and display options</a>
 * Version: 0.3.2
 * Author: Travis Pflanz
 * Author URI: http://Travis.Pflanz.ME
 * License: GPL2
 */
 
/******* Global Variables **********/ 

$rpt_options = get_option('rpt_settings');

/******* Includes **********/ 

include('includes/scripts.php');
include('includes/display-functions.php');
include('includes/admin-page.php');
?>
