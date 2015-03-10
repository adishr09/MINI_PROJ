<?php
	
session_start();

if(isset($_POST['log_email']) && isset($_POST['log_pass']))
{
$log_email=$_POST['log_email'];
$log_pass=$_POST['log_pass'];
$cars = $_POST['cars'];
$tem = md5($log_pass);
switch($cars)
    {
      case "author":
      echo "1";
      $q="SELECT * FROM `art_author` WHERE email_id='".$log_email."'";
 break;
 
      case "reviewer": 
      echo "2";
         $q="SELECT * FROM `art_reviewer` WHERE email_id='".$log_email."'"; break;
}      
     
mysql_connect('localhost', 'root', '') or die("<br/>error");
mysql_select_db('project') or die("<br>DB_error");
$q_run=mysql_query($q) or die("<br/>error_run");
$q_row=mysql_fetch_assoc($q_run);

$fname=$q_row['first_name'];
$lname=$q_row['last_name'];
echo '<br>'.$fname; 

if(strcmp($tem,$q_row['pass']) ){
    $_SESSION['$fname']=$fname;
    header( 'Location: home.php' ) ;
}
else {header( 'Location: error.php' ) ;}
}
?>
