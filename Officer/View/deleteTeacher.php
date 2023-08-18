<?php
  include_once('../model/teacherModel.php');
  $id = $_GET['id'];
  $deletemyinfo = deleteUserbyid($id);
  header('location: ../view/viewTeacher.php');
?>
