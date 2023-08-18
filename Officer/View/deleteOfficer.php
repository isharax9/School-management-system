<?php
  include_once('../model/OfficerModel.php');
  $id = $_GET['id'];
  $deletemyinfo = deleteUserbyid($id);
  header('location: ../view/viewOfficer.php');
?>
