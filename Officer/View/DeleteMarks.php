<?php
  include_once('../Model/DatabaseConnection.php');
  $Id = $_GET['id'];
  $deletemyinfo = deleteMarksById($Id);
  header('location: ../View/StudentListMarks.php');
?>