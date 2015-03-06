<html>
<head>
	<title>Aristdie - CMS </title>
	<link rel="stylesheet" href="css/body.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/style7.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<body>
	<div class="container">
		<div class="top_bar">
			<section>
				<button id="trigger-overlay" type="button">Login / Sign-Up</button>
			</section>
		</div>
		<div class="logo_bar">
			<p> LOGO </p>
		</div>
		<div class="nav_bar">
			<p> Nav Bar </p>
		</div>
		<div class="content_lol">
			<!-- Top Navigation -->
		</div>
	</div>
	<script>
	function overlay(){
	document.getElementByID("overlay").style.display="inline";
	}
	</script>
	<!-- open/close -->
		<div class="overlay overlay-contentpush">
			<button type="button" class="overlay-close">Close</button>
			<div class="left">
			<form action="home.php" method="POST" style="margin:0;">	
				<h1>Login</h1>
				<p>User Type:</p>
				<select name="cars">
					<option value="author">Author</option>
					<option value="reviewer">Reviewer</option>
				</select>
				<p>Email Address:</p>
				<input type="text">
				<p>Password:</p>
				<input type="password">
				<input type="submit" value="Login" class="but_ton">
			</form>
			</div>
			<div class="border">
			</div>
			<div class="right">
			<form action="home.php" method="POST" style="margin:0;">	
				<h1>SignUp</h1>
				<table>
				<tr><td>First Name:</td><td><input type="text"></td></tr>
				<tr><td>Middle Name:</td><td><input type="text"></td></tr>
				<tr><td>Last Name:</td><td><input type="text"></td></tr>
				<tr><td>Email Address:</td><td><input type="text"></td></tr>
				<tr><td>Password:</td><td><input type="password"></td></tr>
				<tr><td>Contact No.:</td><td><input type="text"></td></tr>
				<tr><td>Address:</td><td><input type="text"></td></tr>
				<tr><td>Country:</td><td><input type="text"></td></tr>
				</table>
				<input type="submit" value="SignUp" class="but_ton">
			</form>
			</div>
		</div>
		<script src="js/classie.js"></script>
		<script src="js/demo7.js"></script>
</body>
</html>
