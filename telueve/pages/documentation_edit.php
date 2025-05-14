<?php
include_once(__DIR__ . '/../config/db.php');
include('../includes/header.php');

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM documentation WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $event = $_POST['event'];
    $tanggal = $_POST['tanggal'];

    mysqli_query($conn, "UPDATE documentation SET event='$event', tanggal='$tanggal' WHERE id=$id");
    header("Location: documentation_list.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Dokumentasi</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <h2>Edit Dokumentasi</h2>
    <form method="post">
        <label>Event:</label>
        <input type="text" name="event" value="<?= htmlspecialchars($data['event']) ?>" required><br><br>

        <label>Tanggal:</label>
        <input type="date" name="tanggal" value="<?= $data['tanggal'] ?>" required><br><br>

        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>