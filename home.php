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
	
      <form id='register' action='register.php' method='post' accept-charset='UTF-8'>
      <fieldset>
      <legend>Register</legend>
      <input type='hidden' name='submitted' id='submitted' value='1'/>
      
	  <label>
        Full Name  *
        <input type='text' name='name' id='name' maxlength="50" /> 
      </label>
	   
	  <label>
	   Email Address  *
        <input type='text' name='email' id='email' maxlength="50" /> 
      </label>
      
	  <label>
	   Contact No.*
        <input type='text' name='username' id='username' maxlength="50" /> 
      </label> 
      
	  <label>
	    Subject Category*:
         <select>
         <option value="Sub1">s1</option>
         <option value="sub2">s2</option>
         <option value="sub3">s3</option>
         <option value="sub4">s4</option>
          </select>
      </label>
	  
	  <label>
	    Paper Type*:
         <input type='password' name='password' id='password' maxlength="50" /> 
      </label>

	  
	  <label> 
	   Gender*:      
	    <input type="radio" name="sex" value="male"> M
        <input type="radio" name="sex" value="female"> F
	  </label>
	  
	  <label>
	    Abstract*:
         <textarea rows="4" cols="50">
          </textarea>		 
      </label>

	  
	  <input type='submit' name='Submit' value='Submit' />
      </fieldset>
      </form>	
	</div>
	<script>
	function overlay(){
	document.getElementByID("overlay").style.display="inline";
	}
	</script>
</body>
</html>
