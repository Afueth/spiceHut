<?php
session_start();
if(!isset($_SESSION['cus_id']))
{
    header('location:../Guest/index.php');
    exit();
}
else
{
    $login_id=$_SESSION['cus_id'];
}
?>