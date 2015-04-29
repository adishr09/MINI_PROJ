<?php
		session_start();
		$spe=$_POST['spe'];
		$np=$_POST['np'];
		$pr=$_POST['pr'];
		$e=$_POST['e'];
		$id = $_SESSION['mail'];
		echo $id;
		$q = "UPDATE `delhibvce`.`art_reviewer` SET `specialization` = '" . $spe . "', `no_papers` = '" . $np . "', `past_reviews` = '" . $pr . "', `qualification` = '" . $e . "' WHERE `art_reviewer`.`email_id` = '" . $id . "'";
		mysql_connect('localhost', 'root', '') or die("<br/>error1");
		mysql_select_db('delhibvce') or die("<br>DB_error");
		$q_run = mysql_query($q) or die("<br>error" );
		
?>