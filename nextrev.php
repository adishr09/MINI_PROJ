<?php
		$spe=$_POST['spe'];
		$np=$_POST['np'];
		$pr=$_POST['pr'];
		$e=$_POST['e'];
		mysql_connect('localhost', 'root', '') or die("<br/>error");
		mysql_select_db('delhibvce') or die("<br>DB_error");
		$q_run = mysql_query($q); //or die("<br>error with sign-up please try different credentials" )
		q = "UPDATE `delhibvce`.`art_reviewer` SET `specialization` = '" . $spe . "', `no_papers` = '" . $np . "', `past_reviews` = '" . $pr . "', `qualification` = '" . $e . "' WHERE `art_reviewer`.`rev_id` = 4;";

?>
<html>
<form action="nextrev.php" method="POST" style="margin:0;">	
				<h1>SignUp</h1>
				<table>
				<tr><td>Specialization:</td><td><input type="text" name="spe"></td></tr>
				<tr><td>Number of papers published:</td><td><input type="text" name="np"></td></tr>
				<tr><td>Number of papers reviewed till now:</td><td><input type="text" name="pr"></td></tr>
				<tr><td>Years of experience in the field(in years):</td><td><input type="text" name="e"></td></tr>
				
				</table></td></tr>
				<input type="submit" value="Continue" class="but_ton">
			</form>
			
</html>