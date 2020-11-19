<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'chanapon63070028.mysql.database.azure.com', 'chanapon@chanapon63070028', 'Kong1312', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_GET['delete_id'];

$select_stmt = $db->prepare("SELECT * FROM guestbook WHERE id = :id");
$select_stmt->bindParam(':id', $id);
$select_stmt->execute();
$row = $select_stmt->fetch(PDO::FETCH_ASSOC);

// Delete an original record from db
$delete_stmt = $db->prepare('DELETE FROM tbl_person WHERE id = :id');
$delete_stmt->bindParam(':id', $id);
$delete_stmt->execute();
?>
