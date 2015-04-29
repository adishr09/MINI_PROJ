
<?php

session_start();

if(isset($_SESSION['fname']) && isset($_FILES['fi']['name']) )
{
    echo "WOOord";
$file = $_FILES['fi']['name'];
$cat = $_POST['cat'];
$paper_tag = $_POST['paper'];
$abst = $_POST['abst'];
$name =  $_SESSION['fname'];
$email = $_SESSION['email'];
$contact = $_SESSION['contactno'];
$auth_id =   $_SESSION['aut_id'];
$q = "INSERT INTO `delhibvce`.`art_paper` (`paper_id`, `paper_title`, `paper_abstract`, `aut_id`, `rev_id`, `response_words`, `response_list`, `sub_cat`, `paper_type`, `tags`) VALUES ('1', 'hh', '2h', '2', '2', 'ghj', 'hgj', 'ghj', 'gh', 'ml');";
$d =" INSERT INTO `delhibvce`.`art_mailer` (`mail_id`, `aut_id`, `full_name`, `email_id`, `filename`, `contact_no`, `sub_cat`, `paper_type`, `abstract`) VALUES (NULL, '".$auth_id."', '".$name."', '".$email."', '".$file."', '".$contact."', '".$cat."', '".$paper_tag."', '".$abst."');";
    echo $q;
mysql_connect('localhost', 'root', '') or die("<br/>error");	
mysql_select_db('delhibvce') or die("<br>DB_error");
$q_run=mysql_query($q) or die("<br/>error_run");

$q="SELECT * FROM `art_mailer` where aut_id = ".$auth_id.";"; 
mysql_connect('localhost', 'root', '') or die("<br/>error");
mysql_select_db('delhibvce') or die("<br>DB_error");
$q_run=mysql_query($q) or die("<br/>error_run");
$q_row=mysql_fetch_assoc($q_run);


require_once("bayes1.php");
}
else 
echo "Unable to connect to the server ";

 ?>