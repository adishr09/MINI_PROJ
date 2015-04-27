<?php session_start();
	$lolwa = $_SESSION['done'];
	switch($lolwa)
	{
		case 0: echo ' Submission Failed';
			break;
		case 1:echo ' Submission Succesful';
			break;
		case 2: break;
	}
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
			echo "Logged In: ". $_POST["log_email"];
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
		$lol=$_POST['cars'];
		
		switch($lol)
    {
      case "author":
      require("/author/index.php");
 break;
 
      case "reviewer": 
      require("/reviewer/index.php");
	break;}
	  ?> 
	</div></div>
</body>
</html>