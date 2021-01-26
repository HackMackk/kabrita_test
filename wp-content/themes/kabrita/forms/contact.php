<?php
require_once '././././wp-load.php';
//  global $wpdb;
 $mylink = $wpdb->get_row( "SELECT * FROM wp_promo WHERE promo = '{$_POST['fname']}'" );

  print_r($_POST['fname']);
?>
