<?php
/*
Plugin Name: Page Categories
Plugin URI: https://github.com/wp-page-categories
Description: Adds categories taxonomy to pages
Version: 1.0
Author: Florian Heinle
Author URI: https://www.florianheinle.de
License: GPL2
*/

add_action('admin_init', 'register_categories_taxonomy');

function register_categories_taxonomy() {
    register_taxonomy_for_object_type('category', 'page');
    add_post_type_support('page', 'category');
}
?>
