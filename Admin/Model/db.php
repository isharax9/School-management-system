<?php
$host = "localhost";
$user = "root";
$dbpass = '11010001';
$db = "school_management_system";

function getConnection(){
    global $host,$user,$dbpass,$db;
    $conn = mysqli_connect($host,$user,$dbpass,$db);
    return $conn;
}


?>
