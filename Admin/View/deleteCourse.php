<?php
  include_once('../model/courseModel.php');
  $id = $_GET['id'];
  $deletemyinfo = deleteUserbyid($id);
  header('location: ../view/viewCourse.php');
?>
