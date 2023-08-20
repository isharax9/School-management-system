

<?php
if (isset($_GET['filename'])) {
    $filename = $_GET['filename'];
    $filePath = 'uploads/' . $filename;

    if (file_exists($filePath)) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        readfile($filePath);
        exit();
    } else {
        echo 'File not found.';
    }
} else {
    echo 'Invalid request.';
}
?>
