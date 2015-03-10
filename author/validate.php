<?php

if($_POST)
{
  $name=$_POST['name'];
  
 }

 if (eregi('^[A-Za-z0-9 ]{3,20}$',$name))
{
$valid_name=$name;
}
else
{ 
$error_name='Enter valid Name.'; 
}


 ?>