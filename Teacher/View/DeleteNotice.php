<?php
  include_once('../Model/DatabaseConnection.php');
  $Id = $_GET['id'];
  $deletemyinfo = deleteNoticeById($Id);
  header('location: ../View/ViewNotice.php');
?>