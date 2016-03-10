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
<link rel="stylesheet"
	href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<style>
#button {
	padding: .5em 1em;
	text-decoration: none;
}

#effect {
	width: 240px;
	height: 200px;
	padding: 0.4em;
	position: relative;
}

#effect h3 {
	margin: 0;
	padding: 0.4em;
	text-align: center;
}

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

li a :hover :not ( .active )
{
background-color : #111;
}

.active {
	background-color: #4CAF50;
}

</style>

</head>
<body>
	<ul>
		<li><a href="mainMenu.php">Home</a></li>
		<li><a href="contactlist.php">View Contanct</a></li>
		<li><a class="active" href="#addcontact">Add Contact</a></li>
		<ul style="float: right; list-style-type: none;">
			<li><a href="about.php">About</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</ul>
		<p align="center">
		Use the below form to add contacts...
		</p>
		<div class="toggler" align="center">
			<div id="effect" class="ui-widget-content ui-corner-all" align="center">
				<h3 class="ui-widget-header ui-corner-all" align="center">Add Contact</h3>
				<form action="insert.php" method="post">
					<table align="center">
						<tr>
							<td>Name</td>
							<td><input type="text" name="name" /></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><input type="text" name="address" /></td>
						</tr>
						<tr>
							<td>City</td>
							<td><input type="text" name="city" /></td>
						</tr>
						<tr>
							<td>State</td>
							<td><input type="text" name="state" /></td>
						</tr>
						<tr>
							<td>Zip</td>
							<td><input type="text" name="zip" maxlength='10' /></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td><input type="text" name="phone" /></td>
						</tr>
						<tr>
							<td colspan="2" align="right"><input type='submit' value="Submit" /></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
</body>
</html>
<?php 
}
?>