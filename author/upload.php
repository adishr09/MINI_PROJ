<?php
session_start();
$file = $_FILES['name'];
$subject_category = $_POST['category'];
$paper_type = $_POST['paper'];
$abstract = $_POST['abstract'];
$a_id = $_SESSION['aut_id'];
$r = "INSERT INTO `delhibvce`.`art_paper` ( `paper_title`, `paper_abstract`, `aut_id`, `sub_cat`, `tags`) VALUES ( '".$file."', '".$abstract."', '".$a_id."', '".$subject_category."', '".$paper_type."');";
mysql_connect('localhost', 'root','') or die("<br/>error");
mysql_select_db('delhibvce') or die("<br>DB_error");
echo $q;
$q_run=mysql_query($q) or die("<br/>error_run");
$q_row=mysql_fetch_assoc($q_run);
$_SESSION['done']=1;

header('Location: bayes1.php');
?>