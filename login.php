<?php
	
session_start();

if(isset($_POST['user']) && isset($_POST['pass']))
{
$u=$_POST['user'];
$p=$_POST['pass'];
echo $u;
echo $p."<br><br>";

mysql_connect('sandbox.ieee.org', 'delhibvce', 'hdb32wb98') or die("<br/>error");
mysql_select_db('delhibvce') or die("<br>DB_error");
$q="SELECT * FROM `art_author` WHERE pass='".$p."'";

$q_run=mysql_query($q) or die("<br/>error_run");
$q_row=mysql_fetch_assoc($q_run);
echo '<br>'.$q_row['uname']; 
$uname=$q_row['uname'];
$end = $q_row['done'];
if($uname==$u && $end == 0 ){$_SESSION['uname']=$u; 
header( 'Location: index_new.php' ) ;
}
else if ($end != 0 ){header( 'Location: end.php' ) ;}
}
?>
