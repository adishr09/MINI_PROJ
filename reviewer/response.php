<?php

session_start();
$subject_category = $_POST['category'];
$paper_id=$_POST['papid'];
$paper_type = $_POST['password'];
$response_words = $_POST['response_words'];
$response_opt = $_POST['response_opt'];
$q= "UPDATE `delhibvce`.`art_paper` SET `response_words`='".$response_words."', `response_list`='".$response_opt."', `sub_cat`='".$subject_category."', `paper_type`='".$paper_type."' WHERE `paper_id` = '".$paper_id."';";
mysql_connect('localhost', 'root','') or die("<br/>error");
mysql_select_db('delhibvce') or die("<br>DB_error");
echo $q;
$q_run=mysql_query($q) or die("<br/>error_run");
echo $q_row;
header("Location: ../home.php");
?>