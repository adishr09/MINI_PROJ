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

if(isset($_POST['log_email']) && isset($_POST['log_pass']) && strcmp('',$_POST['log_email']))
{
$log_email=$_POST['log_email'];
$log_pass=$_POST['log_pass'];
$cars = $_POST['cars'];
$tem = md5($log_pass);
switch($cars)
    {
      case "Author":
      echo "1";
      $q="SELECT * FROM `art_author` WHERE email_id='".$log_email."'";
 break;
 
      case "Reviewer": 
      echo "2";
         $q="SELECT * FROM `art_reviewer` WHERE email_id='".$log_email."'"; break;
}      
     
mysql_connect('localhost', 'root', '') or die("<br/>error");
mysql_select_db('project') or die("<br>DB_error");
$q_run=mysql_query($q) or die("<br/>error_run");
$q_row=mysql_fetch_assoc($q_run);
print_r( $q_row);
if(strcmp('',$q_row))
header( 'Location: error.php' ) ;
        
$fname=$q_row['first_name'];
$lname=$q_row['last_name'];

if(strcmp($tem,$q_row['pass']) ){
    $_SESSION['fname']=$fname.' '.$lname;
    $_SESSION['email']=$q_row['email_id'];
    $_SESSION['contactno']=$q_row['contact_no'];
    $_SESSION['aut_id']=$q_row['aut_id'];
    
    echo $_SESSION['fname'];
    
    $core ->addAddress($q_row['email_id'], 'ps');
    $core ->Subject = 'You just logged in ';
    $core ->Body = 'Hi, This is to inform that someone just logged into your email account. <br>
    <h1>This is an auto generated mail please dont reply</h1>'; 
   switch($cars)
    {
      case "Author":
      echo "1";
       header( 'Location: /author/index.php' ) ;
 break;
 
      case "Reviewer": 
      echo "2";
         header( 'Location: /reviewer/index.php'  ) ; break;
        }      
        
if($core->send()) {
    echo 'EMail sent';
  header( 'Location: home.php' ) ;
}
else {
    echo $core ->ErrorInfo;
}
  
}
else {header( 'Location: error.php' ) ;}
}
else 
{header( 'Location: error.php' ) ;}
?>
