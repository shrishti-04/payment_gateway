<?php
require('config.php');
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];


	$data=\Stripe\Charge::create(array(
		"amount"=>55*100,
		"currency"=>"inr",
		"description"=>"Have a great experience here.",
		"source"=>$token,
	));

	include_once 'dbconfig.php';

	$email=$_POST['email'];
	$card_num=$_POST['card_num'];

	$sql = "INSERT INTO orders (email, card_num) VALUES('$email', '$card_num')";
	$insert = $db->query($sql);
	$last_insert_id = $db->insert_id;

	echo "<pre>";
	print_r($data);
}
?>
