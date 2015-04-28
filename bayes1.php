<?php
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


$sample_n = 510;
$sample_pr = 510;
$sample_np = 510;

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
?>