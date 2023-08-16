<?php
  include_once('../model/studentModel.php');
  $id = $_GET['id'];
  $deletemyinfo = deleteUserbyid($id);
  header('location: ../view/viewStudent.php');
?>
