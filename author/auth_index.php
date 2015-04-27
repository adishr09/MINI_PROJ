
<?php 

echo'   
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
    <body>
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
		        <label for="tab-4" class="tab-label-4">Contact</label>
            
			    <div class="clear-shadow"></div>
				
		        <div class="content">
			        <div class="content-1">
						<h2>Profile of the Admin</h2>
                        
				    </div>
			        <div class="content-2">
						<h2>Submit Manuscript</h2>
                        
						<form id=\'register\' action=\'validate.php\'  method=\'post\' accept-charset=\'UTF-8\'  enctype="multipart/form-data">
							<legend><b>Register</b></legend>
							<fieldset>
      
							
							  
							  <label>
							   File Name* &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								  
                               	</td><td><input type=\'file\' name="fi" id=\'fi\' maxlength="50" /> 
							  </label><br><br>
							  
							  <label>
								Subject Category*:
								 <select name = \'cat\'>
								 <option value="Sub1">s1</option>
								 <option value="sub2">s2</option>
								 <option value="sub3">s3</option>
								 <option value="sub4">s4</option>
								  </select>
							  </label><br><br>
							  
							  <label>
								Paper Tags*: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								 <input type=\'text\' name=\'paper\' id=\'paper\' maxlength="50" /> 
							  </label><br><br>

							  
							  							  
							  <label>
								Abstract*:
								 <textarea rows="4" cols="50" name= \'abst\'>
								  </textarea>		 
							  </label><br><br>

							  <input type=\'hidden\' name=\'submitted\' id=\'submitted\' value=\'1\' class="form_input"/>
							  
							  
							  <input type=\'submit\' name=\'Submit\' class=\'button\' value=\'Submit\' />
							  </form>
					
                           
							  					
					
					
					
					</div>
			        <div class="content-3">
						<h2>Portfolio</h2>
                        <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother\'s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.</p>
						<h3>Examples</h3>
						<p>Now that we know who you are, I know who I am. I\'m not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain\'s going to be? He\'s the exact opposite of the hero. And most times they\'re friends, like you and me! I should\'ve known way back when... You know why, David? Because of the kids. They called me Mr Glass. </p>
				    </div>
				    <div class="content-4">
						<h2>Contact</h2>
                        <p>You see? It\'s curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it\'s possible, how it\'s done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an \'unknown entry event\'? Why don\'t they know? If they don\'t know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic.</p>
						<h3>Get in touch</h3>
						<p>Well, the way they make shows is, they make one show. That show\'s called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they\'re going to make more shows. Some pilots get picked and become television programs. Some don\'t, become nothing. She starred in one of the ones that became nothing. </p>
				    </div>
		        </div>
			</section>
        </div>
    </body>';?>