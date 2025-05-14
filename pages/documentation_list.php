<?php
include_once(__DIR__ . '/../config/db.php');
include('../includes/header.php');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dokumentasi</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <h2>Upload Dokumentasi</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">Pilih file dokumentasi:</label><br>
        <input type="file" name="file" id="file" required><br><br>
        <input type="submit" name="upload" value="Upload">
    </form>

    <h2>Data Dokumentasi</h2>

    <table>
        <tr>
            <th>Event</th>
            <th>File</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>

        <tr>
            <td>Workshop AI</td>
            <td><a href="../uploads/file1.pdf" target="_blank">file1.pdf</a></td>
            <td>2025-05-07</td>
            <td class="action-buttons">
                <a href="documentation_edit.php?id=1" class="edit">Edit</a>
                <a href="documentation_delete.php?id=1" class="delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <tr>
            <td>Seminar IoT</td>
            <td><a href="../uploads/file2.pdf" target="_blank">file2.pdf</a></td>
            <td>2025-05-06</td>
            <td class="action-buttons">
                <a href="documentation_edit.php?id=2" class="edit">Edit</a>
                <a href="documentation_delete.php?id=2" class="delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
    </table>

    <footer>
        <p>&copy; 2025 TelUEve</p>
    </footer>
</body>
</html>