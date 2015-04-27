
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
						<tr><td><label>NAME:</label></td><td></td></tr>
						<tr><td><label>E-MAIL:</label></td><td></td></tr>
						<tr><td><label>ADDRESS:</label></td><td></td></tr>
						<tr><td><label>CONTACT:</label></td><td></td></tr>
						</TABLE>
						<button><h4>Update Profile</h4></button>
				    </div>
			        <div class="content-2">
						<h2>Submit Manuscript</h2>
                        
						<form id=\'register\' action=\'author/validate.php\'  method=\'post\' accept-charset=\'UTF-8\'>
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
								 </td><td><select>
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
								 </td><td><textarea rows="4" cols="50">
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
						<h2>VIEW SUBBMISSIONS</h2>
                        <TABLE>
						
						</TABLE>
				    </div>
		        </div>
			</section>
        </div>
    </body>';?>