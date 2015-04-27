<?php

session_start();
	

/*$file = $_FILES['name'];*/
$subject_category = $_POST['category'];
$paper_type = $_POST['paper'];
$abstract = $_POST['abstract'];
mysql_connect('localhost', 'root','') or die("<br/>error");
mysql_select_db('delhibvce') or die("<br>DB_error");
echo $q;
$q_run=mysql_query($q) or die("<br/>error_run");
$q_row=mysql_fetch_assoc($q_run);

?>