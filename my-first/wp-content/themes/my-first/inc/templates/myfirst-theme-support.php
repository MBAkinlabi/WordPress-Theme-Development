<h1>MyFirst Theme Support</h1>
<?php settings_errors(); ?>

<form method="post" action="options.php" class="myfirst-general-form">
    <?php settings_fields( 'myfirst-theme-support' ); ?>
    <?php do_settings_sections( 'myfirst_theme' ); ?>
    <?php submit_button(); ?>
</form>