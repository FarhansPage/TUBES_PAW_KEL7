<?php
include_once(__DIR__ . '/../config/db.php');
include('../includes/header.php');

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT file_name FROM documentation WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if ($row) {
    $file_path = "../uploads/" . $row['file_name'];
    if (file_exists($file_path)) {
        unlink($file_path);
    }

    mysqli_query($conn, "DELETE FROM documentation WHERE id=$id");
}

header("Location: documentation_list.php");
exit;