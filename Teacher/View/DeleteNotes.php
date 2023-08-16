<?php
  include_once('../Model/DatabaseConnection.php');
  $Id = $_GET['id'];
  $deletemyinfo = deleteTeacherNotesById($Id);
  header('location: ../View/ViewUploadedNotes(Teacher).php');
?>