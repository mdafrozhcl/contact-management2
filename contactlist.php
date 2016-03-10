<?php

session_start();
if (!(isset($_SESSION['loggedIn']))) 
{
	echo "<center>Please <a href='index.html'>login</a><br>";
	echo "<img src='img/prohibted_img.png'/></center>";
}else{
?>
<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Strict//EN” 
http://www.w3.org/TR/xhtml/DTD/xhtml-strict.dtd>
<html>
<head>
<title>Contact List</title>
<style type="text/css">
table {
	width: 100%;
}

table, th, td {
	border: 1px solid black;
	border-collapse: collapse;
}

th, td {
	padding: 5px;
	text-align: left;
}

table#t01 tr:nth-child(even) {
	background-color: #eee;
}

table#t01 tr:nth-child(odd) {
	background-color: #fff;
}

table#t01 th {
	background-color: #444444;
	color: white;
}
</style>
<style>
ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: #333;
}

li {
	float: left;
	border-right: 1px solid #bbb;
}

li:last-child {
	border-right: none;
}

li a {
	display: block;
	color: white;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
}

li a : hover : not (.active)
{
background-color: #111;
}
.active {
	background-color: #4CAF50;
}

fieldset { border:1px solid green }

legend {
  padding: 0.2em 0.5em;
  border:1px solid green;
  color:green;
  font-size:90%;
  text-align:left;
  }
  
  .fieldset-auto-width {
		margin: auto;
		margin-top: 10px;
         width: 75%;
    }
</style>
</head>
<body>
	<ul>
		<li><a href="mainMenu.php">Home</a></li>
		<li><a class="active" href="#displaycontacts">View Contanct</a></li>
		<li><a href="addcontact.php">Add Contact</a></li>
		<ul style="float: right; list-style-type: none;">
			<li><a href="about.php">About</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</ul>
	<div>
			<fieldset class="fieldset-auto-width">
		<legend>Contact Management</legend>
		<table id="t01" align="center">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Zip</th>
				<th>Phone</th>
			</tr>
			
		<?php
		$db_host = 'localhost';
		$db_user = 'root';
		$db_pass = '';
		$db_database = 'mycontacts';
		
		$db = new PDO ( 'mysql:host=' . $db_host . ';dbname=' . $db_database, $db_user, $db_pass );
		$db->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		
		$sql = "select * from contacts";
		
		foreach ( $db->query ( $sql ) as $row ) {
			
			echo "<tr><td>" . $row ['contact_ID'] . "</td>";
			echo "<td>" . $row ['contact_name'] . "</td>";
			echo "<td>" . $row ['contact_address'] . "</td>";
			echo "<td>" . $row ['contact_city'] . "</td>";
			echo "<td>" . $row ['contact_state'] . "</td>";
			echo "<td>" . $row ['contact_zip_code'] . "</td>";
			echo "<td>" . $row ['contact_phones'] . "</td></tr>";
		}
		?>
			
		</table>
		
	</fieldset>
	</div>
</body>
</html>
<?php 
}
?>
