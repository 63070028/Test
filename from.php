<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Form</title>

    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
  <div class="container">
    <form method="post" class="form-horizontal mt-5" action = "insert.php" method = "post" id="CommentForm" >
      <div class="form-group text-center">
        Name:<br class="col-sm-9">
        <input type="text" name = "name" id="idName" class="form-control" placeholder="Enter Name"> <br>
        Comment:<br class="col-sm-9">
        <textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment"></textarea><br>  
        Link:<br class="col-sm-9">
        <input type="text" name = "link" id="idLink" placeholder="Enter Link"> <br><br>
        <input type="submit" id="commentBtn">
      </div>
    </form>
  </div>
    <script src="js/slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>