<?php
/* Page categories
 * Will add categories attribute to pages
 * (C) 2016 Florian Heinle <launchpad@planet-tiax.de>
 * License: GPLv2
 */

add_action('admin_init', 'register_categories_taxonomy');

function register_categories_taxonomy() {
    register_taxonomy_for_object_type('category', 'page');
    add_post_type_support('page', 'category');
}
?>
