<?php
	
session_start();

if(isset($_POST['sign_email']) && isset($_POST['sign_pass']))
{
$sign_email=$_POST['sign_email'];
$sign_pass=(md5)$_POST['sign_pass'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$contact_no=$_POST['contact_no'];
$address=$_POST['address'];
$country=$_POST['country'];
$cars = $_POST['usty'];

 
switch($cars)
    {
      case "author":
      
      $q="INSERT INTO `art_author` (`aut_id`, `first_name`, `middle_name`, `last_name`, `email_id`, `pass`, `contact_no`, `address`, `country`) VALUES (NULL, '".$fname."', '".$mname."', '".$lname."', '".$sign_email."', '".$sign_pass."', '".$contact_no."', '".$address."', '".$country."');
";
 break;
 
      case "reviewer": 
     
      $q ="INSERT INTO `project`.`art_reviewer` (`first_name`, `middle_name`, `last_name`, `email_id`, `pass`, `address`, `country`, `specialization`, `no_papers`, `contact_no`, `rev_id`) VALUES ('".$fname."', '".$mname."', '".$lname."', '".$sign_email."', '".$sign_pass."', '".$address."', '".$country."', NULL, NULL, '".$contact_no."', NULL);" ;
 break;
}      
     

mysql_connect('localhost', 'root', '') or die("<br/>error");
mysql_select_db('project') or die("<br>DB_error");
$q_run=mysql_query($q) or die("<br/>error_run");
/*$q_row=mysql_fetch_assoc($q_run);
echo '<br>'.$q_row['uname']; 
$uname=$q_row['uname'];
$end = $q_row['done'];
if($uname==$u && $end == 0 ){$_SESSION['uname']=$u;*/

/*}
else if ($end != 0 ){header( 'Location: end.php' ) ;}
}*/
header( 'Location: home.php' ) ; 
 }
?>
