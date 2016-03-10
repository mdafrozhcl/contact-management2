<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Strict//EN” 
http://www.w3.org/TR/xhtml/DTD/xhtml-strict.dtd>
<html>
<head>
<title>About</title>
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

li
 
a
 
:hover
 
:not
 
(
.active
 
)
{
background-color
 
:
 
#111
;


}
.active {
	background-color: #4CAF50;
}
</style>
</head>
<body>
	<ul>
		<?php
		session_start ();
		if (! (isset ( $_SESSION ['loggedIn'] ))) {
			?>
		<ul style="float: right; list-style-type: none;">
			<li><a class="active" href="#about">About</a></li>
			<li><a href="index.html">Login</a></li>
		<?php }else{ ?>
		<li><a href="mainMenu.php">Home</a></li>
			<li><a href="contactlist.php">View Contanct</a></li>
			<li><a href="addcontact.php">Add Contact</a></li>
			<ul style="float: right; list-style-type: none;">
				<li><a class="active" href="#about">About</a></li>
				<li><a href="logout.php">Logout</a></li>
		<?php } ?>
		</ul>
		</ul>
		<div align="center" style="margin: 50px;">
			<h3 align="center">About Me</h3>
			<div  style="margin-left: 150px; margin-right: 50px; width: 50%; text-align: justify;">
			Hi there,<br><br>
				&nbsp;&nbsp;&nbsp;I am <span>Chandra Kanth Mullella</span>, friends call me Chandoo. I
				am from Hyderabad, India. I have completed my Masters in Business
				Administration in India. After completing my masters I have joined
				Cognizant Technology Solutions and worked for 3 years as a Quality
				Analyst in Insurance domain. My work was totally based on Test
				management tools such as HP quality center. I was also involved in
				Data model module which is a major challenge to analyze the front
				end UI field length validations. After showing consistent
				improvement in work place I was promoted as internal quality auditor
				along with taking care of all reports related to quality. My
				intention for selecting this course is to develop myself in
				Telecommunication due to the increase of IT sector in current trend.
				As a management student I’m totally new to systems analytics and
				will do my best to learn the subject under your guidance. I found
				the subject interesting and want to learn more about it to boost my
				career in IT sector. <br><br><span>Best Regards,</span><br><b>Chandrakanth Mullella</b>
			</div>
		</div>

</body>
</html>