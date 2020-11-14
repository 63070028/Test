<?php 
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'chanapon63070028.mysql.database.azure.com', 'chanapon@chanapon63070028', 'Kong1312', 'itflab', 3306);

    if (isset($_REQUEST['update_id'])) {
        try {
            $id = $_REQUEST['update_id'];
            $select_stmt = $db->prepare("SELECT * FROM guestbook WHERE ID = :ID");
            $select_stmt->bindParam(':ID', $ID);
            $select_stmt->execute();
            $Result = $select_stmt->fetch(PDO::FETCH_ASSOC);
            extract($Result);
        } catch(PDOException $e) {
            $e->getMessage();
        }
    }

    if (isset($_REQUEST['btn_update'])) {
        $name_up = $_REQUEST['txt_firstname'];
        $comment_up = $_REQUEST['txt_lastname'];
        $link_up = $_REQUEST['txt_lastname'];

        if (empty($name_up)) {
            $errorMsg = "Please Enter Fisrtname";
        } else if (empty($comment_up)) {
            $errorMsg = "Please Enter Lastname";
        } else if (empty($link_up)) {
            $errorMsg = "Please Enter Lastname";
        } else {
            try {
                if (!isset($errorMsg)) {
                    $update_stmt = $db->prepare("UPDATE  SET name = fname:fname_up, comment = :comment_up, link = :link_up WHERE ID = :ID");
                    $update_stmt->bindParam(':name_up', $name_up);
                    $update_stmt->bindParam(':comment_up', $comment_up);
                    $update_stmt->bindParam(':link_up', $link_up);
                    $update_stmt->bindParam(':ID', $ID);

                    if ($update_stmt->execute()) {
                        $updateMsg = "Record update successfully...";
                        header("refresh:2;index.php");
                    }
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
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
        <input type="text" class="form-control" name = "name" id="idName" value="<?php echo $fname; ?>"> <br>
        Comment:<br>
        <textarea rows="10" cols="20" class="form-control" name = "comment" id="idComment" value="<?php echo $comment; ?>"></textarea><br>  
        Link:<br>
        <input type="text" name = "link" class="form-control" id="idLink" value="<?php echo $link; ?>"> <br><br>
        <input type="submit" name="btn_insert" class="btn btn-success" id="commentBtn" value="Insert" >
        <a href="index.php" class="btn btn-danger">Cancel</a>
    </form>
</div>

</body>
</html>
