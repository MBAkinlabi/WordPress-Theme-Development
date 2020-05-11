<h1>MyFirst Theme Options</h1>
<?php settings_errors(); ?>
<?php 
    $firstName = esc_attr( get_option( 'first_name' ) );
    $lastName = esc_attr( get_option( 'last_name' ) );
    $fullName = $firstName . ' ' . $lastName;
    $description = esc_attr( get_option( 'user_description' ) );
?>

<div class="myfirst-sidebar-preview">
    <div class="myfirst-sidebar">
        <h1 class="myfirst-username"><?php print $fullName; ?></h1>
        <h2 class="myfirst-description"><?php print $description; ?></h2>
        <div class="icons-wrapper">

        </div>
    </div>
</div>

<form method="post" action="options.php" class="myfirst-general-form">
    <?php settings_fields( 'myfirst-settings-group' ); ?>
    <?php do_settings_sections( 'my_first' ); ?>
    <?php submit_button(); ?>
</form>