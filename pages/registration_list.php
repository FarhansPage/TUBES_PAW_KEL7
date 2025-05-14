<?php
include "../config/db.php";
include "../includes/header.php";

$sql = "SELECT r.*, e.title AS event_title 
        FROM registrations r
        JOIN events e ON r.event_id = e.id
        ORDER BY r.registered_at DESC";

$result = $conn->query($sql);
?>

<h2>Daftar Pendaftaran Peserta</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>Nama</th><th>Email</th><th>Telepon</th>
        <th>Acara</th><th>Tanggal Daftar</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= htmlspecialchars($row['phone']) ?></td>
        <td><?= htmlspecialchars($row['event_title']) ?></td>
        <td><?= $row['registered_at'] ?></td>
    </tr>
    <?php endwhile; ?>
</table>

<?php include "../includes/footer.php"; ?>