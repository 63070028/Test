<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'chanapon63070028.mysql.database.azure.com', 'chanapon@chanapon63070028', 'Kong1312', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook WHERE id = $id');
?>

<?php
  while($Result = mysqli_fetch_array($res))
  {
    echo $Result
  ?>

<?php
  $id = $_GET['update_id'];

  echo $id


?>