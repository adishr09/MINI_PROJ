<?php session_start();
	if(!$_SESSION['email'])
		header("Location: error.php");
 ?>
<html>
<head>
	<title>Aristdie - CMS </title>
	<link rel="stylesheet" href="css/body.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="top_bar" style="height:31px">
	<section style="padding: 2 8 2 2; color:white;">
	
	<?php
	echo '<form action=\'logout.php\'><input type="submit" value="Logout"></form>';
	echo "Logged In: ". $_SESSION['email'];
	?>
	</section>
	<section>
	</div>
	<div class="logo-home">
			<div style="float: center;
  position: relative;
  display: inline-block;
  margin: 2%;"><img src="/MINI_PROJ/img/logo.png" alt="LOGO" width="460px">
			</div>
	</div>
	<div class="nav_bar">
		<?php include("Nav_Bar/nav_bar.php");?>
	</div>
	<div class="content_lol">
		<?php 
		$lol=$_SESSION['cars'];
		
		switch($lol)
    {
      case "author":
      require("/author/auth_index.php");
 break;
 
      case "reviewer": 
      require("/reviewer/index.php");
	break;}
	  ?> 
	</div></div>
</body>
</html>