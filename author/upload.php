<?php
session_start();
$subject_category = $_POST['category'];
$paper_type = $_POST['paper'];
$abstract = $_POST['abstract'];
//$a_id = $_SESSION['aut_id'];
//echo $a_id;
$r = "INSERT INTO `delhibvce`.`art_paper` ( `paper_abstract`, `sub_cat`, `tags`) VALUES ( '".$abstract."', '".$subject_category."', '".$paper_type."');";
mysql_connect('localhost', 'root','') or die("<br/>error");
mysql_select_db('delhibvce') or die("<br>DB_error");
$q_run=mysql_query($r) or die("<br/>error_run");
//$q_row=mysql_fetch_assoc($q_run);

/*$r = "SELECT 'paper_id' FROM `delhibvce`.`art_paper` where aut_id ="$a_id" ;";
mysql_connect('localhost', 'root','') or die("<br/>error");
mysql_select_db('delhibvce') or die("<br>DB_error");
$q_run=mysql_query($r) or die("<br/>error_run");
$q_row=mysql_fetch_assoc($q_run);

$papid = $q_row['paper_id'];
*/



$_SESSION['papid']= 123;
$_SESSION['eman']= "hjghjh";

 $papid = $_SESSION['papid'];
 
 $eman = "test";
$tags = $paper_type;

$newtab = "CREATE TABLE ".$eman.$papid." 
(	
aut_id int,
email_id varchar(50),
no_papers int(10),
past_reviews bigint(255),
qualification int(255),	
like_p float
);";

mysql_connect('localhost', 'root', '') or die("<br/>error");
mysql_select_db('delhibvce') or die("<br>DB_error");
$nt_run=mysql_query($newtab) or die("<br/>error_run");


$q="SELECT * FROM `art_reviewer`"; 
mysql_connect('localhost', 'root', '') or die("<br/>error");
mysql_select_db('delhibvce') or die("<br>DB_error");
$q_run=mysql_query($q) or die("<br/>error_run");
$q_row=mysql_fetch_assoc($q_run);


$p_class_y = 8/11;
$p_class_n = 3/11;


$cpt_e_px_05 = 1/11;
$cpt_e_px_510 = 3/11;
$cpt_e_px_1015 = 3/11;
$cpt_e_px_1520 = 1/11;
$cpt_e_px_20 = 3/11;

$cpt_e_px_y_05 = 1/10;
$cpt_e_px_y_510 = 3/10;
$cpt_e_px_y_1015 = 3/10;
$cpt_e_px_y_1520 = 2/10;
$cpt_e_px_y_20 = 4/10;

$cpt_e_px_n_05 = 2/5;
$cpt_e_px_n_510 = 2/5;
$cpt_e_px_n_1015 = 2/5;
$cpt_e_px_n_1520 = 1/5;
$cpt_e_px_n_20 = 1/5;



$cpt_np_px_05 = 2/11;
$cpt_np_px_510 = 5/11;
$cpt_np_px_1015 = 1/11;
$cpt_np_px_1520 = 1/11;
$cpt_np_px_20 = 2/11;

$cpt_np_px_y_05 = 2/10;
$cpt_np_px_y_510 = 4/10;
$cpt_np_px_y_1015 = 2/10;
$cpt_np_px_y_1520 = 2/10;
$cpt_np_px_y_20 = 3/10;

$cpt_np_px_n_05 = 2/5;
$cpt_np_px_n_510 = 3/5;
$cpt_np_px_n_1015 = 1/5;
$cpt_np_px_n_1520 = 1/5;
$cpt_np_px_n_20 = 1/5;



$cpt_pr_px_05 = 3/11;
$cpt_pr_px_510 = 2/11;
$cpt_pr_px_1015 = 2/11;
$cpt_pr_px_1520 = 1/11;
$cpt_pr_px_20 = 3/11;

$cpt_pr_px_y_05 = 2/10;
$cpt_pr_px_y_510 = 2/10;
$cpt_pr_px_y_1015 = 3/10;
$cpt_pr_px_y_1520 = 2/10;
$cpt_pr_px_y_20 = 4/10;

$cpt_pr_px_n_05 = 3/5;
$cpt_pr_px_n_510 = 2/5;
$cpt_pr_px_n_1015 = 1/5;
$cpt_pr_px_n_1520 = 1/5;
$cpt_pr_px_n_20 = 1/5;

$rty;
$ty;
$yt;
while( $q_row != NULL) 
{ 

	similar_text($tags,$q_row['specialization'],$percent);
	echo $percent;
	if($percent>60)
	{
		if ($q_row['no_papers']>=0 && $q_row['no_papers']<5 )
		{
			$rty = 05;
		}
		elseif ($q_row['no_papers']>=5 && $q_row['no_papers']<10 )
		{
			$rty = 510;
		}
		elseif ($q_row['no_papers']>=10 && $q_row['no_papers']<15 )
		{
			$rty = 1015;
		}
		elseif ($q_row['no_papers']>=15 && $q_row['no_papers']<20 )
		{
			$rty = 1520;
		}
		elseif ($q_row['no_papers']>=20 )
		{
			$rty = 20;
		}
		
		if ($q_row['past_reviews']>=0 && $q_row['past_reviews']<5 )
		{
			$ty = 05;
		}
		elseif ($q_row['past_reviews']>=5 && $q_row['past_reviews']<10 )
		{
			$ty = 510;
		}
		elseif ($q_row['past_reviews']>=10 && $q_row['past_reviews']<15 )
		{
			$ty = 1015;
		}
		elseif ($q_row['past_reviews']>=15 && $q_row['past_reviews']<20 )
		{
			$ty = 1520;
		}
		elseif ($q_row['past_reviews']>=20 )
		{
			$ty = 20;
		}
		
		if ($q_row['qualification']>=0 && $q_row['qualification']<5 )
		{
			$yt = 05;
		}
		elseif ($q_row['qualification']>=5 && $q_row['qualification']<10 )
		{
			$yt = 510;
		}
		elseif ($q_row['qualification']>=10 && $q_row['qualification']<15 )
		{
			$yt = 1015;
		}
		elseif ($q_row['qualification']>=15 && $q_row['qualification']<20 )
		{
			$yt = 1520;
		}
		elseif ($q_row['qualification']>=20 )
		{
			$yt = 20;
		}
		
		$sample_n = $rty;
		$sample_pr = $ty;
		$sample_np = $yt;

		switch ($sample_n) {
			case 05: 
					$t_n_y = $cpt_e_px_y_05;
					$t_n_n = $cpt_e_px_n_05;
					break;
			case 510: 
					$t_n_y = $cpt_e_px_y_510;
					$t_n_n = $cpt_e_px_n_510;
					break;
			case 1015: 
					$t_n_y = $cpt_e_px_y_1015;
					$t_n_n = $cpt_e_px_n_1015;
					break;
			case 1520: 
					$t_n_y = $cpt_e_px_y_1520;
					$t_n_n = $cpt_e_px_n_1520;
					break;
			case 20: 
					$t_n_y = $cpt_e_px_y_20;
					$t_n_n = $cpt_e_px_n_20;
					break;
					
		}

		switch ($sample_pr) {
			case 05: 
					$t_pr_y = $cpt_pr_px_y_05;
					$t_pr_n = $cpt_pr_px_n_05;
					break;
			case 510: 
					$t_pr_y = $cpt_pr_px_y_510;
					$t_pr_n = $cpt_pr_px_n_510;
					break;
			case 1015: 
					$t_pr_y = $cpt_pr_px_y_1015;
					$t_pr_n = $cpt_pr_px_n_1015;
					break;
			case 1520: 
					$t_pr_y = $cpt_pr_px_y_1520;
					$t_pr_n = $cpt_pr_px_n_1520;
					break;
			case 20: 
					$t_pr_y = $cpt_pr_px_y_20;
					$t_pr_n = $cpt_pr_px_n_20;
					break;
					
		}


		switch ($sample_np) {
			case 05: 
					$t_np_y = $cpt_np_px_y_05;
					$t_np_n = $cpt_np_px_n_05;
					break;
			case 510: 
					$t_np_y = $cpt_np_px_y_510;
					$t_np_n = $cpt_np_px_n_510;
					break;
			case 1015: 
					$t_np_y = $cpt_np_px_y_1015;
					$t_np_n = $cpt_np_px_n_1015;
					break;
			case 1520: 
					$t_np_y = $cpt_np_px_y_1520;
					$t_np_n = $cpt_np_px_n_1520;
					break;
			case 20: 
					$t_np_y = $cpt_np_px_y_20;
					$t_np_n = $cpt_np_px_n_20;
					break;
					
		}
		$like_p = $p_class_y * $t_n_y * $t_np_y * $t_pr_y; 
		$like_n = $p_class_n * $t_n_n * $t_np_n * $t_pr_n; 

		$eve = $like_n + $like_p;

		$pos_p = $like_p/$eve;
		$pos_n = $like_n/$eve;

		echo 'Poss' . $pos_p.'  Like: ' . $like_p;

		echo 'neg' . $pos_n. '  Like: ' . $like_n;
	
		$a= $q_row['specialization'];
		$insa = "INSERT INTO `delhibvce`.`".$eman.$papid."` (`aut_id`, `no_papers`, `past_reviews`, `qualification`, `like_p`, `email_id`) VALUES ('" . $q_row['aut_id'] . "', '" . $q_row['no_papers'] . "', '" . $q_row['past_reviews'] . "', '" . $q_row['qualification'] . "', '" .$pos_p. "', '".$q_row['email_id']."');";
		mysql_connect('localhost', 'root', '') or die("<br/>error");
		mysql_select_db('delhibvce') or die("<br>DB_error");
		$ins_w=mysql_query($insa) or die("<br/>error_run");
	}	
	$q_row=mysql_fetch_assoc($q_run);
}
$mailq = "SELECT * FROM `".$eman.$papid."` ORDER BY `like_p` DESC";
mysql_connect('localhost', 'root', '') or die("<br/>error");
mysql_select_db('delhibvce') or die("<br>DB_error");
$mailq_run=mysql_query($mailq) or die("<br/>error_run");
$mailq_row=mysql_fetch_assoc($mailq_run);
echo $mailq_row['email_id']; 
if ($mailq_row['email_id'] = NULL ){die();}
$abst= $abstract;
require_once 'libs/PHPMailer/PHPMailerAutoload.php'; 
$core = new PHPMailer();
$core -> isSMTP();
$core -> SMTPAuth = true;
$core ->SMTPDebug = 1;	 

$core -> Host = 'smtp.gmail.com';
$core -> Username = 'priyansh.singh.delhi@gmail.com';
$core -> Password = '9971486416';
$core -> SMTPSecure = 'ssl';
$core -> Port = 465;


$core ->From = 'aristidecm@gmail.com';
$core ->FromName = 'PS';
$core ->addAddress('adi.shr09@gmail.com', 'ps');
$core ->addAddress('aristidecm@gmail.com', 'ps');

$core ->addCC('priyansh.singh.delhi@gmail.com', 'ps');


$core->AddAttachment('/libs/From_Data_Mining_to.pdf');

$core ->isHTML(true);
$core ->Subject = 'New Submission ';
$core ->Body = $abst; 
$core ->AltBody= $abst;

if($core->send()) {
    echo 'EMail sent';
  header( 'Location: ../home.php' ) ;
}
else {
    echo $core ->ErrorInfo;
}


?>
