<html>
<head>
	<title>Aristdie - CMS </title>
	<link rel="stylesheet" href="css/body.css" type="text/css">
</head>
<body>
	<div class="top_bar">
	<button onclick="overlay()" type="button"> Hello</button>
	<p>LogIn  /  SignUp</p>
	</div>
	<div class="logo_bar">
	<p> LOGO </p>
	</div>
	<div class="nav_bar">
	<p> Nav Bar </p>
	</div>
	<div class="content_lol">
		<div id="overlay"><p>Hello</p></div>
	</div>
	<script>
	function overlay(){
	document.getElementByID("overlay").style.display="inline";
	}
	</script>
</body>
</html>
