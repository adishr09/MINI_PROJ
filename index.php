<html style="overflow-x:hidden; background-image:url('author/images/bg.jpg');" >
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
			<div style="float: center; position: relative; display: inline-block; margin: 2%;"><img src="/MINI_PROJ/img/logo.png" alt="LOGO" width="460px" style="margin-top:1% 2% 2% 2%;"></div>
		</div>
		<div class="nav_bar">
			<?php include("Nav_Bar/nav_bar.php");?>
		</div>
		<div class="content_lol">
			<h2>ARISTIDE</h2>
			<p>ARISTIDE is a conference management system that is flexible, easy to use, and has many features to make it suitable for various conference models.</p><br>
			<h3>What ARISTIDE Helps You Do</h3>
			<p>ARISTIDE was designed to help conference organisers to cope with the complexity of the refereeing process. The current version supports</p>
			<ul>
			<li>	Management and monitoring of the program committee</li>
			<li>	Sophisticated and flexible management of the access of PC members and referees to papers and conflicts of interests</li>
			<li>	Automatic paper submission</li>
			<li>	Paper assignment based on the preferences of PC members</li>
			<li>	List of the latest events</li>
			<li>	Submission of reviews</li>
			<li>	Sending email to PC members, referees and authors</li>
			<li>	Monitoring email</li>
			<li>	Online discussion of papers</li>
			<li>	The author response (aka rebuttal) phase, when the author can respond to the reviews</li>
			<li>	Preparation of conference proceedings</li>
			<li>	Generation and publishing of conference program</li>
			<li>	Generation of conference broshures with program</li>
			<li>	Conference program and proceedings on flash drives</li>
			</ul>
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
