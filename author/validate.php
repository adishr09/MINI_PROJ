
<?php

session_start();

if(isset($_SESSION['fname']) && isset($_FILES['fi']['name']) )
{
$file = $_FILES['fi']['name'];
$cat = $_POST['cat'];
$paper_tag = $_POST['paper'];
$abst = $_POST['abst'];
$name =  $_SESSION['fname'];
$email = $_SESSION['email'];
$contact = $_SESSION['contactno'];
$auth_id =   $_SESSION['aut_id'];
$q =" INSERT INTO `project`.`art_mailer` (`mail_id`, `aut_id`, `full_name`, `email_id`, `filename`, `contact_no`, `sub_cat`, `paper_type`, `abstract`) VALUES (NULL, '".$auth_id."', '".$name."', '".$email."', '".$file."', '".$contact."', '".$cat."', '".$paper_tag."', '".$abst."');";
    echo $q;
mysql_connect('localhost', 'root', '') or die("<br/>error");
mysql_select_db('delhibvce') or die("<br>DB_error");
$q_run=mysql_query($q) or die("<br/>error_run");

require_once("mailer.php");
}
else 
echo "Unable to connect to the server ";

 ?>