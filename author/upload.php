<?php

session_start();
	

/*$file = $_FILES['name'];*/
$subject_category = $_POST['category'];
$paper_type = $_POST['paper'];
$abstract = $_POST['abstract'];
$q= "INSERT INTO `delhibvce`.`art_paper` (`paper_id`, `paper_title`, `paper_abstract`, `aut_id`, `rev_id`, `response_words`, `response_list`, `sub_cat`, `paper_type`, `tags`) VALUES ('1', 'hello', 'hello', '".$abstract."', 'hello', NULL, NULL, '".$subject_category."', '".$paper_type."', NULL);";
mysql_connect('localhost', 'root','') or die("<br/>error");
mysql_select_db('delhibvce') or die("<br>DB_error");
echo $q;
$q_run=mysql_query($q) or die("<br/>error_run");
$q_row=mysql_fetch_assoc($q_run);

?>