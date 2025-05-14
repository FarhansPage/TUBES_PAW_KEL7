<?php
include "../config/db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $desc  = $_POST['description'];
    $loc   = $_POST['location'];
    $date  = $_POST['date'];
    $time  = $_POST['time'];

    $stmt = $conn->prepare("INSERT INTO events (title, description, location, date, time) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $title, $desc, $loc, $date, $time);
    $stmt->execute();

    header("Location: event_list.php");
    exit;
}
include "../includes/header.php";
?>

<h2>Tambah Event</h2>
<form method="POST">
    Judul: <input type="text" name="title" required><br>
    Deskripsi: <textarea name="description" required></textarea><br>
    Lokasi: <input type="text" name="location" required><br>
    Tanggal: <input type="date" name="date" required><br>
    Jam: <input type="time" name="time" required><br>
    <button type="submit">Simpan</button>
</form>

<?php include "../includes/footer.php"; ?>