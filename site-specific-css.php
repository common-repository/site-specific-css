<?php
/*
Plugin Name: Site Specific CSS
Plugin URI: http://wordpress.kdari.net/
Description: Add site specific CSS to each blog individually, instead of changing your theme or using a million child themes. 
Version: 1.0.1
Author: lgedeon, mgedeon
Author URI: http://wordpress.kdari.net/
*/
add_action('admin_menu', 'kdari_site_specific_css_menu');

function kdari_site_specific_css_menu() {

  add_theme_page('Site Specific Css', 'Site Specific CSS', 'manage_options', 'kdari-site-specific-css-options', 'kdari_site_specific_css_options');

}

function kdari_site_specific_css_options() {

  if (!current_user_can('manage_options'))  {
    wp_die( __('You do not have sufficient permissions to access this page.') );
  }

    // variables for the field and option names 
    $opt_name = 'kdari_site_specific_css';
    $hidden_field_name = 'kdari_submit_hidden';
    $data_field_name = 'kdari_site_specific_css';

    // Read in existing option value from database
    $opt_val = get_option( $opt_name );

    // See if the user has posted us some information
    // If they did, this hidden field will be set to 'Y'
    if( isset($_POST[ $hidden_field_name ]) && $_POST[ $hidden_field_name ] == 'Y' ) {
        // Read their posted value
        $opt_val = $_POST[ $data_field_name ];

        // Save the posted value in the database
        update_option( $opt_name, $opt_val );

        // Put an settings updated message on the screen

?>
<div class="updated"><p><strong><?php _e('settings saved.', 'menu-test' ); ?></strong></p></div>
<?php

    }

    // Now display the settings editing screen

    echo '<div class="wrap">';

    // header

    echo "<h2>" . __( 'Site Specific Css by Kdari', 'kdari' ) . "</h2>";

    // settings form
    
    ?>

<form name="form1" method="post" action="">
<input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">

<p><?php _e('Site Specific CSS:', 'kdari' ); ?> 
<input type="text" name="<?php echo $data_field_name; ?>" value="<?php echo $opt_val; ?>" size="20">
</p><hr />

<p class="submit">
<input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
</p>

</form>
</div>

<?php

}

add_action( 'wp_head', 'kdari_add_site_specific_css' );

function kdari_add_site_specific_css() {

    $opt_name = 'kdari_site_specific_css';
    $opt_val = get_option( $opt_name );

	echo '<link rel="stylesheet" type="text/css" media="all" href="' . $opt_val . '" />';


}

?>
