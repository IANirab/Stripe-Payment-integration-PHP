<?php
require_once('vendor/autoload.php');
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('modules/customers.php');
require_once('modules/transaction.php');


\Stripe\Stripe::setApiKey(''); //your api key here

//Sanitize Post

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$token = $_POST['stripeToken'];

//Creat Customer In Stripe
$customer = \Stripe\Customer::create(array(
	"email" => $email,
	"source" => $token,
));

//Charge Customer
$charge = \Stripe\Charge::create(array(
	"amount" => 5000,
	"currency" => "usd",
	"description" => "Intro To React Course",
	"customer" => $customer->id
));


/////////////////////////////////////////////////

//Customer Data
$customerData = [
	'id' => $charge->customer,
	'first_name' => $first_name,
	'last_name' => $last_name,
	'email' => $email,
];

//Instantiate Customer
$customer = new Customer();

//Add Customer To DB
$customer->addCustomer($customerData);

/////////////////////////////////////////////////

//Transaction Data
$transactionData = [
	'id' => $charge->id,
	'userid' => $charge->customer,
	'product' => $charge->description,
	'amount' => $charge->amount,
	'currency' => $charge->currency,
	'status' => $charge->status,
];

//Transaction Customer
$transaction = new Transaction();

//Add Transaction To DB
$transaction->addTransaction($transactionData);

/////////////////////////////////////////////////

// Redirect to success
header('location:success.php?tid=' . $charge->id . '&product=' . $charge->description);
