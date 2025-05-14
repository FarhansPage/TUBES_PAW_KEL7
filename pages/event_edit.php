<?php 
include('includes/header.php'); 
include('config/db.php');

$id = $_GET['id'];
$event = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM events WHERE id=$id"));

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $date = $_POST['event_date'];
    $loc = $_POST['location'];

    mysqli_query($conn, "UPDATE events SET 
        title='$title', description='$desc', event_date='$date', location='$loc' 
        WHERE id=$id");

    header("Location: event_list.php");
    exit;
}
?>

<h2>Edit Event</h2>
<form method="POST">
    <input name="title" value="<?= $event['title'] ?>"><br><br>
    <textarea name="description"><?= $event['description'] ?></textarea><br><br>
    <input type="date" name="event_date" value="<?= $event['event_date'] ?>"><br><br>
    <input name="location" value="<?= $event['location'] ?>"><br><br>
    <button type="submit">Update</button>
</form>

<?php include('includes/footer.php'); ?>