<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'chanapon63070028.mysql.database.azure.com', 'chanapon@chanapon63070028', 'Kong1312', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_GET['update_id'];

echo $id;

$name_up = $_POST['name'];
$comment_up = $_POST['comment'];
$link_up = $_POST['link'];

$sql = "UPDATE guestbook SET Name = $name_up, Comment = $comment_up, Link = $link_up WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    
mysqli_close($conn);
?>
