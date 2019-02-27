<?php
//INCLUDE
require get_template_directory(). '/include/style.php';
require get_template_directory(). '/include/menu-setup.php';
require get_template_directory(). '/include/pagination.php';

// Hooks
add_action('wp_enqueue_scripts', 'afs_enqueue');
add_action('init', 'afs_register_menu');


