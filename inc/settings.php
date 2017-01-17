<?php
add_action( 'admin_menu', 'logo_switcher_add_admin_menu' );
add_action( 'admin_init', 'logo_switcher_settings_init' );


function logo_switcher_add_admin_menu(  ) { 
	add_options_page( 'Logo Switcher', 'Logo Switcher', 'manage_options', 'logo_switcher', 'logo_switcher_options_page' );
}

function logo_switcher_settings_init(  ) { 

	register_setting( 'pluginPage', 'logo_switcher_settings' );

	add_settings_section(
		'logo_switcher_pluginPage_section', 
		__( 'Settings', 'logo-switcher' ), 
		'logo_switcher_settings_section_callback', 
		'pluginPage'
	);

	add_settings_field( 
		'logo_switcher_state', 
		__( 'Show logo on the login screen?', 'logo-switcher' ), 
		'logo_switcher_state_render', 
		'pluginPage', 
		'logo_switcher_pluginPage_section' 
	);
}


function logo_switcher_state_render(  ) { 

	$options = get_option( 'logo_switcher_settings' );
	if(!isset($options['logo_switcher_state']) && empty($options['logo_switcher_state']) ){
    $options['logo_switcher_state'] = 1; 
  }?>
	<select name='logo_switcher_settings[logo_switcher_state]'>
		<option value='1' <?php selected( $options['logo_switcher_state'], 1 ); ?>><?php echo __( 'Yes', 'logo-switcher' );?></option>
		<option value='2' <?php selected( $options['logo_switcher_state'], 2 ); ?>><?php echo __( 'No', 'logo-switcher' );?></option>
	</select>

<?php }

function logo_switcher_settings_section_callback() { 
	echo __( 'With this settings page, you have full control over your logo on the login screen. The default option is that your logo is shown, and by turning it off, the default WordPress logo will appear.', 'logo-switcher' );
}


function logo_switcher_options_page() { ?>

	<div class="wrap">
 		<h1><?php _e( 'Logo Switcher', 'logo-switcher' );?></h1>
 	  <form action='options.php' method='post'>
 		  <?php
 		  settings_fields( 'pluginPage' );
 		  do_settings_sections( 'pluginPage' );
 		  submit_button();
 		  ?>
 	  </form>
  </div>
<?php }?>