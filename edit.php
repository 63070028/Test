<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'chanapon63070028.mysql.database.azure.com', 'chanapon@chanapon63070028', 'Kong1312', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$id = $_GET['update_id'];

echo $id;
if (isset($_REQUEST['btn_update'])) {
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
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Comment Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form action = "insert.php" method = "post" id="CommentForm" class="form-horizontal mt-5" >
        Name:<br>
        <input type="text" class="form-control" name = "name" id="idName" value="<?php echo $name; ?>"> <br>
        Comment:<br>
        <textarea rows="10" cols="20" class="form-control" name = "comment" id="idComment" value="<?php echo $comment; ?>"> </textarea><br>  
        Link:<br>
        <input type="text" name = "link" class="form-control" id="idLink" value="<?php echo $comment; ?>"> <br><br>
        <input type="submit" name="btn_update" class="btn btn-success" id="commentBtn" value="Update" >
        <a href="show.php" class="btn btn-danger">Cancel</a>
    </form>
</div>

</body>
</html>