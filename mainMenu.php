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
		<li><a class="active" href="#">Home</a></li>
		<li><a href="contactlist.php">View Contanct</a></li>
		<li><a href="addcontact.php">Add Contact</a></li>
		<ul style="float: right; list-style-type: none;">
			<li><a href="about.php">About</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</ul>
	<div align="center">
	
	<img alt="site under constraction" src="img/contact.jpg" width="100%" height="100%"/>
	</div>
</body>
</html>
<?php 
}
?>