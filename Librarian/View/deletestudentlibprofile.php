<?php
require_once('../Model/usersmodel.php');
$id = $_GET['id'];
$deletestudentlibinfo = deletestudentlibprofile($id);

?>
<a href="dashboard.php">Back to Dashboard</a>