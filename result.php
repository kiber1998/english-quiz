<?php
session_start();/// Sessiya  ochildi
error_reporting(E_ALL);
//$startrime=time();
//$endtime = time() + 1*60;
//if ($endtime-time()>0){
//    echo 'xalibor';
//}else{
//    echo 'vaxt tugadi';
//}
//echo $endtime;

//$startime=time();
//if (isset($startime)){
//    $st_time = $startime;
//}
//$endtime = time() + 1*60;
//if ($endtime-$st_time>0){
//    echo 'xalibor';
//}else{
//    echo 'vaxt tugadi';
//}

$_SESSION['oldtime'] = time();
$endtime=time()+2*60;
if ($endtime-$_SESSION['oldtime']>0){
    echo 'xali bor';
}else{
    echo 'voxtingiz tamom';
}
?>