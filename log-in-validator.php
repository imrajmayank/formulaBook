<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel= "stylesheet" href="main.css"/>
	</head>
	<body>
		<div id= "mainDiv">
			<header id="mainHeader">
					<h1><a href= "index.php">formulaBook</a></h1>
			</header>
				
			<nav id= "mainNav">
				<ul id= "left">
					<li><a href= "index.php">Home</a></li>
					<li><a href= "subjects.php">Subjects</a></li>
					<li><a href= "search.php">Search</a></li>
					<li><a href= "about.php">About</a></li>
				</ul>
				<ul id= "right">
					<li><a href= "login.php">Log In</a></li>
					<li><a href= "signup.php">Sign Up</a></li>
				</ul>
			</nav>
				
			<div id= "newDiv">
				<section id= "mainSection">
					<?php
						echo $_POST["Username"];
					?>
				</section>			
				<aside id= "mainAside">
					<h3>What's New</h3>
					<p>Google didn't google Google, how to make Google ?</p>
				</aside>
			</div>
			
			<footer id= "mainFooter">
				 Copyright Reserved.
			</footer>
		</div>
	</body>
</html>