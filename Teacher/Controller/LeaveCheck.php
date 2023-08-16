<?php
session_start();
require_once('../Model/DatabaseConnection.php');
if(isset($_POST['submit']))
{
$Sl = $_SESSION['sl'];
$request = $_POST['request'];

$userinfo = array('sl' => $Sl,'request' => $request);
$check =  updateLeave($Sl, $userinfo);
if($check)
{
echo "info updated!";
header('location: ../view/LeaveRequest.php');
}
else
{
echo "Can't update the Information!";
}



}
?>