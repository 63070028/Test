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
    <form action = "insert.php" method = "post" id="CommentForm" >
      Name:<br>
      <input type="text" name = "name" id="idName" placeholder="Enter Name"> <br>
      Comment:<br>
      <textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment"></textarea><br>  
      Link:<br>
      <input type="text" name = "link" id="idLink" placeholder="Enter Link"> <br><br>
      <input type="submit" id="commentBtn">
    </form>
  </div>
</body>
</html>