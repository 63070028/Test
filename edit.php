<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'chanapon63070028.mysql.database.azure.com', 'chanapon@chanapon63070028', 'Kong1312', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$id = $_GET['update_id'];
echo $id;
$sql = "SELECT * FROM guestbook WHERE id = $id";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

$res = mysqli_query($conn, $sql);
?>

<?php
while($Result = mysqli_fetch_array($res))
{
?>
  
<input type="text" class="form-control" name = "name" id="idName" value="<?php echo $Result['Name'];?>"> <br>