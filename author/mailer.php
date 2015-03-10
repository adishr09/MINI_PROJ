<?php
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

$core ->From = 'priyansh.singh.delhi@gmail.com';
$core ->FromName = 'PS';
$core ->addReplyTo = ('priyansh.singh.delhi@gmail.com');
$core ->addAddress('priyansh.singh.delhi@gmail.com', 'ps');
$core ->addAddress('adi.shr09@gmail.com', 'ps');
$core ->addAddress('aristidecm@gmail.com', 'ps');

$core ->addCC('priyansh.singh.delhi@gmail.com', 'ps');
$core ->addBCC('priyansh.singh.delhi@gmail.com', 'ps');

$core ->addAttachment('libs/From_Data_Mining_to.pdf','From_Data_Mining_to.pdf');
$core ->isHTML(true);
$core ->Subject = 'TEST !@#';
$core ->Body = '/TEST 123 123 123'; 
$core ->AltBody= '/TEST 123 123 123';

if($core->send()) {
    echo 'EMail sent';
    
}
else {
    echo $core ->ErrorInfo;
}