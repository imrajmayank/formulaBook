<html>
	<head>
		<title>Home</title>
		<link rel= "stylesheet" href="main.css"/>
		<link rel= "stylesheet" href="log.css"/>
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
				<section id= "log-mainSection">
					<article id= "log-article">
						<a href="index.php"><img class= "logo" src="logo.png"/></a>
					</article>
				</section>			
				<aside id= "mainAside">
					<form action= "log-in-validator.php" method= "post">
						<div id="login-pane">
							<h3>
								Username: <input type= "text" name= "Username" value= "Enter Username"/>
								Password: <input type= "password" name= "Password" value= "Enter password"/>
										  <input type= "submit" value="Log In"/>
							</h3>
						</div>
					</form>
				</aside>
			</div>
			
			<footer id= "mainFooter">
				 Copyright Reserved.
			</footer>
		</div>
	</body>
</html>