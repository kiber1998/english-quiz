<?php
session_start();/// Sessiya  ochildi
error_reporting(E_ALL);
if (isset($_GET['result']))
{
    $allscore = $_GET['result'];
}
if ($allscore==0){
    echo $user_point;
}
?>