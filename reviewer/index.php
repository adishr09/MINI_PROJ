<?php echo'   
		<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="reviewer/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="reviewer/css/style.css" />
		<script type="text/javascript" src="reviewer/js/modernizr.custom.04022.js"></script>
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
    <body>
        <div class="container">
		 	<header>
			</header>
			<section class="tabs">
	            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
		        <label for="tab-1" class="tab-label-1">Profile</label>
		
	            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
		        <label for="tab-2" class="tab-label-2">Manuscript Response</label>
		
	            <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
		        <label for="tab-3" class="tab-label-3">Work</label>
			
	            <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
		        <label for="tab-4" class="tab-label-4">Paper</label>
            
			    <div class="clear-shadow"></div>
				
		        <div class="content">
			        <div class="content-1">
						<h2>Profile</h2>
                        <Table>
						<tr><td><label>NAME:</label></td><td></td></tr>
						<tr><td><label>E-MAIL:</label></td><td></td></tr>
						<tr><td><label>ADDRESS:</label></td><td></td></tr>
						<tr><td><label>CONTACT:</label></td><td></td></tr>
						</TABLE>
				    </div>
                    
			        <div class="content-2">
						<h2>Response</h2>
                        <form id=\'response\' action=\'response.php\' method=\'post\' accept-charset=\'UTF-8\'>
						<fieldset>
                        <table>                
                        <tr><td>
							<label>
								Subject Category</td><td>
								 <select>
                                 <option value="res1">s1</option>
								 <option value="res2">s2</option>
								 <option value="res3">s3</option>
								 <option value="res4">s4</option>
                                 </select>
                             </label>
                            </tr></td>
                        
                        <tr><td>
                            <label>
                                Paper Id</td><td>
								 <input type=\'paper_id\' name=\'papid\' id=\'papid\' maxlength="50" /> 
                            </label>
                            </tr></td>
                        
                        <tr><td>
							<label>
								Paper Type</td><td>
								 <input type=\'password\' name=\'password\' id=\'password\' maxlength="50" /> 
							</label>
                            </tr></td>
						
                        <tr><td>
                            <label>
								Response(In words)</td><td>
								 <textarea rows="4" cols="50">
								 </textarea>		 
							</label>
                            </tr></td>
                        
                        <tr><td>
							<label>
								Response</td><td>
                                <select>
								 <option value="Sub1">Rejected</option>
								 <option value="sub2">Accepted</option>
								 <option value="sub3">Acepted with Minor Corrections</option>
								</select>
							</label>
                            </tr></td>
                        
                        <tr><td>
							<input type=\'submit\' name=\'Submit\' value=\'Submit\' />
						    </td></tr>
                            </table>
                        </form>
					</div>
			    

                    <div class="content-3">
                    <h2>UPDATES/PENDING</h2>
                    </div>
				    
                    <div class="content-4">
					<h2>PREVIOUS REVIEWS</h2>
				    </div>
		        </div>
			</section>
        </div>
    </body>';?>