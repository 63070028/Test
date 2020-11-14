<!DOCTYPE html>
<html lang="en">
<head>
  <title>ITF 63070028</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'chanapon63070028.mysql.database.azure.com', 'chanapon@chanapon63070028', 'Kong1312', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container">
  <table class="table table-dark table-striped" width="600" border="1">
    <tr>
      <th width="100"> <div align="center">Name</div></th>
      <th width="350"> <div align="center">Comment </div></th>
      <th width="150"> <div align="center">Link </div></th>
      <th width="150"> <div align="center">Action </div></th>
    </tr>
  <?php
  while($Result = mysqli_fetch_array($res))
  {
  ?>
    <tr>
      <td><?php echo $Result['Name'];?></div></td>
      <td><?php echo $Result['Comment'];?></td>
      <td><?php echo $Result['Link'];?></td>
      <td><div class="card-body"> <a href="" class="btn btn-primary">แก้ไข </div></a></td>
    </tr>
  <?php
  }
  ?>
  </table>
    <div class="card">
      <a href="https://datatast.azurewebsites.net/from.php" class="btn btn-primary">เพิ่ม</a>
    </div>
<?php
mysqli_close($conn);
?>
</body>
</html>