<?php

/******* Options Page ********/

function rpt_options_page(){

	global $rpt_options;

	ob_start(); ?>

	<div class="wrap">

		<h2><?php _e('Recent Popular Tags Options', 'rpt_domain'); ?></h2>

		<form method="post" action="options.php">

			<h4><?php _e('Tags Heading', 'rpt_domain'); ?></h4>

			<p>
				<input id="rpt_settings[heading_tags]" name="rpt_settings[heading_tags]" type="text" value="<?php echo $rpt_options['heading_tags']; ?>">
				<label class="description" for="rpt_settings[heading_tags]"><?php _e('Enter the heading you would like to display above the tags', 'rpt_domain'); ?></label>				
			</p>

			<h4><?php _e('Number of Tags', 'rpt_domain'); ?></h4>

			<p>
				<input id="rpt_settings[number_tags]" name="rpt_settings[number_tags]" type="number" value="<?php echo $rpt_options['number_tags']; ?>">
				<label class="description" for="rpt_settings[number_tags]"><?php _e('Enter the number of recent popular tags to display', 'rpt_domain'); ?></label>				
			</p>

			<h4><?php _e('Number of Days', 'rpt_domain'); ?></h4>

			<p>
				<input id="rpt_settings[number_days]" name="rpt_settings[number_days]" type="number" value="<?php echo $rpt_options['number_days']; ?>">
				<label class="description" for="rpt_settings[number_days]"><?php _e('Enter the number of days as "recent"', 'rpt_domain'); ?></label>				
			</p>
		
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Submit', 'rpt_domain'); ?>">
			</p>

		</form>
		
		<h2><?php _e('How to Use Recent Popular Tags', 'rpt_domain'); ?></h2>
		
		<h3><?php _e('Default Usage', 'rpt_domain'); ?></h3>
		
		<?php echo __('<p>Recent Popular Tags, with heading, will automatically be displayed below each blog post.</p>','rpt_domain'); ?>
		
		<h3><?php _e('Shortcode', 'rpt_domain'); ?></h3>
		
		<?php echo __('<p>Use shortcode <strong>[recent-popular-tags]</strong> to display Recent Popular Tags anywhere in blog posts, pages, custom post types or in a text widget.</p>','rpt_domain'); ?>
		
		<h3><?php _e('Template Tag', 'rpt_domain'); ?></h3>
		
		<?php echo __("<p>Use <strong>&lt;?php if ( function_exists(&#x27;rpt_display_content&#x27;) ) {
			echo do_shortcode(&#x27;&#91;recent-popular-tags&#93;&#x27;);
			} ?&gt;</strong> to display Recent Popular Tags in your template files.</p>",'rpt_domain'); 
		?>

		<h3><?php _e('Widget', 'rpt_domain'); ?></h3>
		
		<?php echo __('<p>Use <strong>[recent-popular-tags]</strong> in a "Text" widget to display Recent Popular Tags in a sidebar</p>','rpt_domain'); ?>	

	</div>

	<?php
	echo ob_get_clean();

}

function rpt_add_options_link(){
	add_options_page('Recent Popular Tags Options', 'Recent Popular Tags', 'manage_options', 'rpt-options.php', 'rpt_options_page');
}

add_action('admin_menu', 'rpt_add_options_link');

function rpt_register_settings (){
	register_setting('rpt_settings_group', 'rpt_settings');
}

add_action('admin_init', 'rpt_register_settings');

//Link to Recent Popular Tags settings page from the plugins page
$plugin_file = 'recent-popular-tags/recent-popular-tags.php';
add_filter( "plugin_action_links_{$plugin_file}", 'rpt_settings_link', 10, 2 );
 
//modify the link by unshifting the array
function rpt_settings_link( $links, $file ) {
	$settings_link = '<a href="' . admin_url( 'admin.php?page=rpt-options.php' ) . '">' . __( 'Settings', 'rpt_domain' ) . '</a>';
	array_unshift( $links, $settings_link );
 
	return $links;
}
?>