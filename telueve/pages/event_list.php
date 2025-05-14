<?php
include "../config/db.php";
include "../includes/header.php";

$result = $conn->query("SELECT * FROM events ORDER BY date DESC");
?>

<h2>Daftar Event</h2>
<a href="event_add.php">+ Tambah Event</a>
<table border="1" cellpadding="10">
    <tr>
        <th>Judul</th><th>Lokasi</th><th>Tanggal</th><th>Jam</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= htmlspecialchars($row['title']) ?></td>
        <td><?= htmlspecialchars($row['location']) ?></td>
        <td><?= $row['date'] ?></td>
        <td><?= $row['time'] ?></td>
    </tr>
    <td>
    <a href="event_edit.php?id=<?= $row['id'] ?>">Edit</a> | 
    <a href="event_delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus event ini?')">Hapus</a>
</td>
    <?php endwhile; ?>
</table>

<?php include "../includes/footer.php"; ?>
