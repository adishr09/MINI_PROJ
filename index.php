<html>
<head>
	<title>Aristdie - CMS </title>
	<link rel="stylesheet" href="css/body.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/style7.css" />
	<script src="js/modernizr.custom.js"></script>
</head>
<?php
	session_start();
	if(isset($_POST['user']) && isset($_POST['pass']))
	{
		mysql_connect('mysql1.freehosting.com', 'bvpieeec_lol', 'hdb32wb98') or die("<br/>error");
		mysql_select_db('bvpieeec_delhibvce') or die("<br>DB_error");
		$u=$_POST['user'];
		$p=$_POST['pass'];
	
		$q="SELECT * FROM `vsq_15` WHERE pass='".$p."'";
		
		$q_run=mysql_query($q) or die("<br/>error_run");
		$q_row=mysql_fetch_assoc($q_run);
		echo '<br>'.$q_row['uname']; 
		$uname=$q_row['uname'];
		$end=$q_row['done_2'];
		if($uname==$u && $end==0){$_SESSION['uname']=$u; 
		header( 'Location: quiz/index.php' ) ;
		}
		else if ($end != 0 ){header( 'Location: exit.php' ) ;}
		}
?>
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
				<input type="text" name="log_email">
				<p>Password:</p>
				<input type="password" name="log_pass">
				<input type="submit" value="Login" class="but_ton">
			</form>
			</div>
			<div class="border">
			</div>
			<div class="right">
			<form action="signup.php" method="POST" style="margin:0;">	
				<h1>SignUp</h1>
				<table>
				<tr><td>First Name:</td><td><input type="text" name="fname"></td></tr>
				<tr><td>Middle Name:</td><td><input type="text" name="mname"></td></tr>
				<tr><td>Last Name:</td><td><input type="text" name="lname"></td></tr>
				<tr><td>Email Address:</td><td><input type="text" name="sign_email"></td></tr>
				<tr><td>Password:</td><td><input type="password" name="sign_pass"></td></tr>
				<tr><td>Contact No.:</td><td><input type="text" name="contact_no"></td></tr>
				<tr><td>Address:</td><td><input type="text" name="address"></td></tr>
				<tr><td>Country:</td><td><input type="text" name="country"></td></tr>
                <tr><td> User Type:</td><td><select name="cars">
					<option value="author">Author</option>
					<option value="reviewer">Reviewer</option>
				</select>
				</table></td></tr>
				<input type="submit" value="SignUp" class="but_ton">
			</form>
			</div>
		</div>
		<script src="js/classie.js"></script>
		<script src="js/demo7.js"></script>
</body>
</html>
