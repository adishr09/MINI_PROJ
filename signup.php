<?php
	
session_start();

if(isset($_POST['sign_email']) && isset($_POST['sign_pass']))
{
$sign_email=$_POST['sign_email'];
$sign_pass=$_POST['sign_pass'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$contact_no=$_POST['contact_no'];
$address=$_POST['address'];
$country=$_POST['country'];

echo $sign_email;
echo $sign_pass."<br><br>";
if($_POST['cars']=='author')
{

$q="INSERT INTO `art_author` (`aut_id`, `first_name`, `middle_name`, `last_name`, `email_id`, `pass`, `contact_no`, `address`, `country`) VALUES (NULL, '".$fname."', '".$mname."', '".$lname."', '".$sign_email."', '".$sign_pass."', '".$contact_no."', '".$address."', '".$country."');
";
}
else 
{
 $q ="  INSERT INTO `delhibvce`.`art_reviewer` (`first_name`, `middle_name`, `last_name`, `email_id`, `pass`, `address`, `country`, `specialization`, `no_papers`, `contact_no`, `rev_id`) VALUES ('".$fname."', '".$mname."', '".$lname."', '".$sign_email."', '".$sign_pass."', '".$address."', '".$country."', NULL, NULL, '".$contact_no."', NULL);" ;
}
mysql_connect('sandbox.ieee.org', 'delhibvce', 'hdb32wb98') or die("<br/>error");
mysql_select_db('delhibvce') or die("<br>DB_error");
/*$q_run=mysql_query($q) or die("<br/>error_run");
$q_row=mysql_fetch_assoc($q_run);
echo '<br>'.$q_row['uname']; 
$uname=$q_row['uname'];
$end = $q_row['done'];
if($uname==$u && $end == 0 ){$_SESSION['uname']=$u; */
header( 'Location: home.php' ) ;
/*}
else if ($end != 0 ){header( 'Location: end.php' ) ;}
}*/
}
?>
