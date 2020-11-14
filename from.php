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
        <input type="text" class="form-control" name = "name" id="idName" placeholder="Enter Name"> <br>
        Comment:<br>
        <textarea rows="100" cols="100" name = "comment" id="idComment" placeholder="Enter Comment"></textarea><br>  
        Link:<br>
        <input type="text" name = "link" class="form-control" id="idLink" placeholder="Enter Link"> <br><br>
        <input type="submit" name="btn_insert" class="btn btn-success" id="commentBtn" value="Insert" >
        <a href="index.php" class="btn btn-danger">Cancel</a>
    </form>
</div>

</body>
</html>
