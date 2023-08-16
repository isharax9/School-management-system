<?php
  include_once('../model/librarianModel.php');
  $id = $_GET['id'];
  $deletemyinfo = deleteUserbyid($id);
  header('location: ../view/viewLibrarian.php');
?>
