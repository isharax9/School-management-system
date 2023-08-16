<?php
require_once('../Model/usersmodel.php');
$serialno = $_GET['serialno'];
$deleteBookinfo = deleteBookInfo($serialno);

?>
<a href="allBooksInfo.php">Back to Dashboard</a>