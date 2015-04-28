
				<?php 
			    session_start();
				$log_email=$_SESSION['email'];
				echo $log_email."AAAAAAAA";
				/*
				$name= "SELECT first_name, middle_name, last_name FROM `art_author` WHERE email_id=".$log_email;
				$email= $log_email;
				$address= "SELECT address FROM `art_author` WHERE email_id=".$log_email;
				$contact= "SELECT contact_no FROM `art_author` WHERE email_id=".$log_email;
			
				mysql_connect('localhost', 'root', '') or die("<br/>error");
				mysql_select_db('delhibvce') or die("<br>DB_error");
				$name=mysql_query($name) or die("<br/>error_run");
				$addre=mysql_query($address) or die("<br/>error_run");
				$conta=mysql_query($contact) or die("<br/>error_run");
				echo $addre;
				echo conta;*/
				?>

<?php echo'   
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="author/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="author/css/style.css" />
		<script type="text/javascript" src="author/js/modernizr.custom.04022.js"></script>
		<link href=\'http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic\' rel=\'stylesheet\' type=\'text/css\'>
		<!--[if lt IE 9]>
			<style>
				.content{
					height: auto;
					margin: 0;
				}
				.content div {
					position: relative;
				}
			</style>
		<![endif]-->
    <body style="background-color:rgba(240, 240, 240, 1);">
        <div class="container">
		 	<header>
			</header>
			<section class="tabs">
	            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
		        <label for="tab-1" class="tab-label-1">Profile</label>
		
	            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
		        <label for="tab-2" class="tab-label-2">Submit Manuscript</label>
		
	            <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
		        <label for="tab-3" class="tab-label-3">Work</label>
			
	            <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
		        <label for="tab-4" class="tab-label-4">Papers</label>
            
			    <div class="clear-shadow"></div>
				
		        <div class="content">
			        <div class="content-1">
						<h2>Profile of the Admin</h2>
                        <Table>
						<tr><td><label>NAME:</label></td><td><?php echo $name ?></td></tr>
						<tr><td><label>E-MAIL:</label></td><td><?php echo $email ?></td></tr>
						<tr><td><label>ADDRESS:</label></td><td><?php echo $address ?></td></tr>
						<tr><td><label>CONTACT:</label></td><td><?php echo $contact ?></td></tr>
						</TABLE>
						<button><h4>Update Profile</h4></button>
				    </div>
			        <div class="content-2">
						<h2>Submit Manuscript</h2>
                        
						<form id=\'register\' action=\'author/upload.php\'  method=\'post\' accept-charset=\'UTF-8\'>
							<fieldset>
							<table>
							<tr><td>  
							  <label>
							   File Name
								</td><td><input type=\'file\' name=\'username\' id=\'username\' maxlength="50" /> 
							  </label></td></tr>
							  <tr><td> 
							  <label>
								Subject Category
								 </td><td><select name=\'category\'>
								 <option value="Sub1">s1</option>
								 <option value="sub2">s2</option>
								 <option value="sub3">s3</option>
								 <option value="sub4">s4</option>
								  </select>
							  </label></td></tr>
							  <tr><td> 
							  <label>
								Paper Type
								 </td><td><input type=\'text\' name=\'paper\' id=\'paper\' maxlength="50" /> 
							  </label></td></tr>

							  
							  <tr><td> 
							  <label>
								Abstract
								 </td><td><textarea name=\'abstract\' rows="4" cols="50">
								  </textarea>		 
							  </label></td></tr>

							  <input type=\'hidden\' name=\'submitted\' id=\'submitted\' value=\'1\' class="form_input"/>
							  
							  <tr><td>
							  <input type=\'submit\' name=\'Submit\' class=\'button\' value=\'Submit\' />
							  </td></tr></table>
							  </form>
					
					</div>
			        <div class="content-3">
						<h2>UPDATES</h2>
						
					</div>

				    <div class="content-4">
						<h2>VIEW SUBMISSIONS</h2>
                        
				    </div>
		        </div>
			</section>
        </div>
    </body>
	';
?>