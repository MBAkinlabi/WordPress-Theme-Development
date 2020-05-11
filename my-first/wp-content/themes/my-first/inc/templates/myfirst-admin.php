<h1>MyFirst Theme Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields( 'myfirst-settings-group' ); ?>
    <?php do_settings_sections( 'my_first' ); ?>
    <?php submit_button(); ?>
</form>