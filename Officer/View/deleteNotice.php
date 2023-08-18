<?php
  include_once('../model/noticeModel.php');
  $id = $_GET['id'];
  $deletemyinfo = deleteUserbyid($id);
  header('location: ../view/viewNotice.php');
?>
