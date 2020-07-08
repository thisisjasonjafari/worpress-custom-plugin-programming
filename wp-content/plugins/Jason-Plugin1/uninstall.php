<?php

/**
 * Trigger this file on plugin ubinstall
 * 
 * @pakage  Jason-Custom-Plugin 
 */

if (!defined('WP_UNINSTALL_PLUGIN')) {
  die;
}

// cleare data base and some thing
// delete custom post tpe
// delete all the plugin data from the db


//Clear Database stored data
// $books = get_posts(array('post_type' => 'book', 'numberposts' => -1));

// foreach ($books as $book) {
//   wp_delete_post($book->ID, true);
// }

