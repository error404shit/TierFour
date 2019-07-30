<h1 class="h1">Tier Theme Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields( 'Tier-settings-group' ); ?>
	<?php do_settings_sections( 'lawrence_Tier' ); ?>
	<?php submit_button(); ?>
</form>