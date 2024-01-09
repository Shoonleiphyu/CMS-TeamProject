<?php
function custom_theme_setup() {
    register_nav_menu( 'sidebar-menu', __( 'Sidebar Menu', 'my-theme' ) );
}
add_action( 'after_setup_theme', 'my_theme_setup' );
?>
