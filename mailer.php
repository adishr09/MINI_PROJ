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
/*
$uploaddir = 'project/libs/files';
echo $uploaddir;
$uploadfile = $uploaddir . basename($_FILES['fi']['name']);
echo $uploadfile;
$_FILES['fi']['tmp_name'] = $_FILES['fi']['name'];

echo $_FILES['fi']['tmp_name'];
echo move_uploaded_file($_FILES['fi']['tmp_name'], $uploadfile);
echo '<pre>';

if ( move_uploaded_file($_FILES['fi']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES['fi']['error']);

print "</pre>";
8
$target_dir = "libs/";
$target_file = $target_dir.' '. basename($_FILES["fi"]["name"]);
echo $target_file;
$uploadOk = 1;
$imageFileType = pathinfo($_FILES["fi"]["name"]);
print_r( $imageFileType);
// Check if image file is a actual image or fake image

    if (move_uploaded_file($_FILES["fi"]["name"], $target_file)) {
        echo "The file ". basename( $_FILES["fi"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

*/

$core ->addAttachment($_FILES['fi']['name']);
$core ->isHTML(true);
$core ->Subject = 'New Submission ';
$core ->Body = $abst; 
$core ->AltBody= $abst;

if($core->send()) {
    echo 'EMail sent';
  header( 'Location: home.php' ) ;
}
else {
    echo $core ->ErrorInfo;
}