<?php
$userid = $pwd = '';
if (isset ( $_POST ['newuser'], $_POST ['newpwd'], $_POST ['newpwd2'] )) {
	$userid = $_POST ['newuser'];
} else {
	die ( 'Invalid -  please provide all fields...' );
}
if (($_POST ['newpwd']) != ($_POST ['newpwd2'])) {
	die ( "Passwords do not match - please use the \"Back\" button to re-enter the data.<b> />\n" );
} else {
	$pwd = $_POST ['newpwd'];
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

$sql = "INSERT INTO Users (userid,password) VALUES (:userid,:password)";
$q = $db->prepare ( $sql );
$q->execute ( array (
		':userid' => $userid,
		':password' => $pwd
) );
if (! $q) {
	die ( 'Could not insert record: ' . mysql_error () );
}
session_start ();
$_SESSION ['loggedIn'] = true;
header ( 'Location:mainMenu.php' );
?>