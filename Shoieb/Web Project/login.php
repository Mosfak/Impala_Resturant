<!DOCTYPE html>
<html>
<head>
	<title> Web Project </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
	<header>
		<h2><a href="index.html"> SUNNAH </a></h2>
		<nav>
			<ul>
				<li><a href="about.html"> About </a></li>
				<li><a href="news.html"> News </a></li>
				<li><a href="contact.html"> Contact </a></li>
				<li><a class="btn" href="login.html">Register/Log In</a></li>
			</ul>
		</nav>
	</header>

	<div class="login">
        <form action="php/loginaction.php" method="post">
		<div class="placeholder"></div>
		<h1>Log in</h1>
		<div class="placeholder"></div>
		<p>Email Address</p>
			<input type="text" name="email"/>
			<div class="placeholder"></div>
			<div class="level-4">
				<span>Password</span>
			</div>
			<input type="Password" name="pass"/>
			<div class="placeholder"></div>
			<input type="submit" name="login" value="Login"/>
			<div class="placeholder"></div>
			
		</form>
        <input type="submit" onclick="location.url('register.html')" value="Register"/>
	</div>


</div>
</body>
</html>