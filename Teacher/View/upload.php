<?php
require_once('../Model/DatabaseConnection.php');
$User = getUserById($_COOKIE['ID']);

$assignments = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $dueDate = $_POST['due_date'];

    // File upload handling
    $uploadDir = 'uploads/';
    $filename = $_FILES['file']['name'];
    $fileTmpPath = $_FILES['file']['tmp_name'];
    $newFilePath = $uploadDir . $filename;
    move_uploaded_file($fileTmpPath, $newFilePath);

    // Store assignment details
    $assignments[] = [
        'title' => $title,
        'description' => $description,
        'due_date' => $dueDate,
        'filename' => $filename
    ];

    // Redirect to teacher dashboard or do something else
    header('Location: teacher_dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Teacher - Upload Assignment</title>
</head>
<body>
    <h1>Upload Assignment</h1>
    <form method="post" enctype="multipart/form-data">
        <label>Title: <input type="text" name="title"></label><br>
        <label>Description: <textarea name="description"></textarea></label><br>
        <label>Due Date: <input type="date" name="due_date"></label><br>
        <label>File: <input type="file" name="file"></label><br>
        <button type="submit">Upload Assignment</button>
    </form>
</body>
</html>
