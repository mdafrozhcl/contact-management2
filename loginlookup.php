<?php
$userid = $pwd = '';
if (isset ( $_POST ['userid'], $_POST ['pwd'] )) {
	$userid = $_POST ['userid'];
	$pwd = $_POST ['pwd'];
} else {
	die ( "all fields please, <a href='index.html'>login</a>" );
}
$query = "select * from users where userid ='" . $userid . "' and password = '" . $pwd . "'";
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_database = 'mycontacts';

$db = new PDO ( 'mysql:host=' . $db_host . ';dbname=' . $db_database, $db_user, $db_pass );
$db->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$sql = " select * from users where userid = '" . $userid . "' and password = '" . $pwd . "'";
$stmt = $db->query ( $sql );
$stmt->fetch ( PDO::FETCH_ASSOC );
if ($stmt->rowCount() == 1) {
	session_start();
	$_SESSION['loggedIn'] = true;
	header('Location:mainMenu.php');
}
else {
	echo "<center>invalid <a href='index.html'>login</a><br>";
	echo "<img src='img/prohibted_img.png'/></center>";
}
?>
