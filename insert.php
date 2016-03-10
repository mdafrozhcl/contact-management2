<?php
$name = $address = $city = $state = $zip = $phone = '';
if (empty( $_POST ['name']) || empty($_POST ['address']) || empty($_POST ['city']) || empty($_POST ['state']) || empty($_POST ['zip']) || empty($_POST ['phone']  )) {
	echo "<center>Invalid -  please provide all fields... go <a href=addcontact.php>back</a><br>";
	echo "<img src='img/prohibted_img.png'/></center>";
	die ( '' );
} else {
	$name = $_POST ['name'];
	$address = $_POST ['address'];
	$city = $_POST ['city'];
	$state = $_POST ['state'];
	$zip = $_POST ['zip'];
	$phone = $_POST ['phone'];
}
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$db_database = 'mycontacts';
$db = new PDO ( 'mysql:host=' . $dbhost . ';dbname=' . $db_database, $dbuser, $dbpass );
$db->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
if (! $db) {
	die ( 'Could not connect: ' . mysql_error () );
}

$sql = "insert into contacts (contact_name,contact_address, contact_city, contact_state, contact_zip_code, contact_phones, contact_websitev) VALUES (:a,:b,:c,:d,:e,:f,:g)";
$q = $db->prepare ( $sql );
$q->execute(array (
		':a' => $name,
		':b' => $address,
		':c' => $city,
		':d' => $state,
		':e' => $zip,
		':f' => $phone,
		':g' => 'http://localhost/it665/mainMenu.php'
));
if (!$q) {
	echo "<center><img src='img/prohibted_img.png'/></center>";
	die ( 'Could not insert record: ' . mysql_error () );
}
echo "<center>inserted successfully!!<br/>add more <a href='addcontact.php'>contacts</a><br>";
echo "<img src='img/tick.png'/></center>";
?>