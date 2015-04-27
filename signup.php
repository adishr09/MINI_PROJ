<?php
	
session_start();
require_once 'libs/PHPMailer/PHPMailerAutoload.php'; 
echo 'Index this is';  
$core = new PHPMailer();
$core -> isSMTP();
$core -> SMTPAuth = true;
$core ->SMTPDebug = 1;

$core -> Host = 'smtp.gmail.com';
$core -> Username = 'priyansh.singh.delhi@gmail.com';
$core -> Password = '9971486416';
$core -> SMTPSecure = 'ssl';
$core -> Port = 465;
$core ->From = 'noreply-aristide@gmail.com';
$core ->FromName = 'Aristide CMS';
$errors = ' noerror';
 if(empty($_POST) === false){
  $required_fields= array ('fname','lname','sign_email','sign_pass','contact_no','address','country');
   foreach($_POST as $key=>$value){
    
	if(empty($value) && in_array($key,$required_fields) === true )
     {$errors[]= 'fields are not filled';
      break 1;
     } 
	 
	 if(strlen($_POST['sign_pass']) <5)
	 {$errors[]= 'Minimum length of password should be 6 charachters';
     } 
	  
	 if(preg_match("/\\s/",$_POST['fname']) == true )
	 {$errors[]= 'No space in the name should be present';	  
	 }
	 
	 if (filter_var($_POST['sign_email'], FILTER_VALIDATE_EMAIL) === false){
	 $errors[]= ' Provide valid email address';
	 }
	 
	 if(strlen($_POST['contact_no']) <10)
	 {$errors[]= 'Provide a valid contact No.';
     } 
	 
   } 
   }
 print_r($errors);

 if(isset($_POST['sign _email']) || isset($_POST['sign_pass']))
{
$sign_email=$_POST['sign_email'];
 $sign_pass=md5($_POST['sign_pass']);
 $fname=$_POST['fname'];
 $mname=$_POST['mname'];
 $lname=$_POST['lname'];
 $contact_no=$_POST['contact_no'];
 $address=$_POST['address'];
 $country=$_POST['country'];
  $cars = $_POST['cars'];

 switch($cars)
    {
      case "author":
      $q="INSERT INTO `delhibvce`.`art_author` (`aut_id`, `first_name`, `middle_name`, `last_name`, `email_id`, `pass`, `contact_no`, `address`, `country`)    VALUES (NULL, '".$fname."', '".$mname."', '".$lname."', '".$sign_email."', '".$sign_pass."', '".$contact_no."', '".$address."', '".$country."');";
		break;
       case "reviewer": 
       $q ="INSERT INTO `delhibvce`.`art_reviewer` (`first_name`, `middle_name`, `last_name`, `email_id`, `pass`, `address`, `country`, `specialization`, `no_papers`, `contact_no`, `rev_id`) VALUES ('".$fname."', '".$mname."', '".$lname."', '".$sign_email."', '".$sign_pass."', '".$address."', '".$country."', NULL,NULL, '".$contact_no."', NULL);" ;
		break;
	}      
     
mysql_connect('localhost', 'root', '') or die("<br/>error");

mysql_connect('localhost', 'root','') or die("<br/>error");
mysql_select_db('delhibvce') or die("<br>DB_error");
$q_run=mysql_query($q) or die("<br/>error_run");
$q_row=mysql_fetch_assoc($q_run);
echo '<br>'.$q_row['uname']; 
$uname=$q_row['uname'];
$end = $q_row['done'];
if($uname==$u && $end == 0 ){$_SESSION['uname']=$u;

}
else if ($end != 0 ){header( 'Location: end.php' ) ;}
}
 $core ->addAddress($q_row['email_id'],$fname);
    $core ->Subject = 'Your id is created at Artistde CMS';
    $core ->Body = 'Hi, This is to inform that your id has been created at Aristide CMS. Following are your credentials
    <br> Email :'+$sign_email+'<br> Password:'+$sign_pass+
 '
     <h1>This is an auto generated mail please dont reply</h1>'; 
     
if($core->send()) {
    echo 'EMail sent';
  header( 'Location: home.php' ) ;
}
else {
    echo $core ->ErrorInfo;
}
 
 
?>
