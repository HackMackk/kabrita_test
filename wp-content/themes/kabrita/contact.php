<?php
require_once '../../../wp-load.php';

$promo = $wpdb->get_row( "SELECT promo FROM wp_promo WHERE check_promo = '0'" );
$promo = json_decode(json_encode($promo), true)['promo'];

if($promo == null){
  $send = json_encode(array("status" => 'FALED', "string" => 'Промокоды закончились'));
  echo $send;
  exit;
}

parse_str($_POST['string'], $posts); 


$user = $wpdb->get_row( "SELECT email FROM wp_clients WHERE email = '{$posts['email']}'" );


if($user == null){
  $wpdb->insert('wp_clients', array("name" => $posts['name'], 
                                    "email" => $posts['email'], 
                                    "date" => $posts['date'],
                                    "telefone" => $posts['telefone'], 
                                    "promo" => $promo ));

 $send = json_encode(array("status" => 'OK', "string" => 'Ваш промокод на скидку 40%: '.$promo));
  echo $send;
}
else{
  $send = json_encode(array("status" => 'FALED', "string" => 'Пользователь с таким email уже существует'));
  echo $send;
  exit;
}

$wpdb->update( 'wp_promo',
  array("check_promo" => '1'),
	array( 'promo' => $promo )
);




?>
