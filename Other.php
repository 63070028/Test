• HTML & CSS
• Applying Styles with CSS
• CSS Syntax
• Tag <div>
• Bootstrap
• การทดลองที 1. การใช้งาน


grid
• ส่ง lab ขึน

Microsoft Azure Microsoft Azure และส่ง Link ทาง Onlearn

div หรือ division คือ tag ประเภทหนึ
งของภาษา html
• นํามาใช้แบ่งส่วนต่างๆ ของข้อมูลออกจากกัน
• ใช้สําหรับครอบวัตถุที
ต้องการ เพื
อจัดรูปแบบต่างๆ ให้กับวัตถุในตําแหน่งนั-นๆ
• สามารถใส่ค่าไปตรงๆ ใน div โดยระบุ id หรือ class เพื
อใช้อ้างอิงกับการจัด CSS ได้ตามความ
เหมาะสม

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Hello</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/c
ss/bootstrap.min.css" integrity="sha384-
TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="a
nonymous">
</head>
<body>
</body>
</html>

การใช้งาน grid ในการวาง Layout
ใน bootstrap จะใช้ grid ในการวาง layout โดยเริ
มจากใช้ div ชื
อ class container
และใน class container จะมี div ย่อยคือ row และ column
class container จะทําให้มีที
ว่างด้านข้าง และเปลี
ยน Font เป็น Helvetica Neue

<div class="container">
<div class="row">
<div class="col">
<img src="img/banner/banner2.jpg" class="img-fluid">
</div>
</div> <!-- Close Row 1 -->
<div class="row">
<div class="col-6">
<img src="img/work/work1.jpg" class="img-fluid rounded" />
<h1>Rounded</h1>
<p>Lorem ipsum dolor sit amet consectetur </p>
</div>
<div class="col-3">
<img src="img/work/work2.jpg" class="img-fluid img-thumbnail" />
<h1>Thumbnail</h1>
<p>Lorem ipsum dolor sit amet consectetur.</p>
</div>
<div class="col-3">
<img src="img/work/work3.jpg" class="img-fluid rounded-circle" />
<h1>Circle</h1>
<p>Lorem ipsum dolor sit amet consectetur</p>
</div>
</div> <!-- Close Row 2 -->
</div> <!-- Close container -->


<div class="row">
<div class="col-md-9 col-lg-7">Column A</div>
<div class="col-md-3 col-lg-5">Column B</div>
</div>



<div class="container">
<div class="row">
<div class="col">
<img src="img/banner/banner2.jpg" class="img-fluid">
</div>
</div> <!-- Close Row 1 -->
<div class="row">
<div class="col-sm-6">
<img src="img/work/work1.jpg" class="img-fluid rounded" />
<h1>Rounded</h1>
<p>Lorem ipsum dolor sit amet consectetur </p>
</div>
<div class="col-sm-3">
<img src="img/work/work2.jpg" class="img-fluid img-thumbnail" />
<h1>Thumbnail</h1>
<p>Lorem ipsum dolor sit amet consectetur.</p>
</div>
<div class="col-sm-3">
<img src="img/work/work3.jpg" class="img-fluid rounded-circle" />
<h1>Circle</h1>
<p>Lorem ipsum dolor sit amet consectetur</p>
</div>
</div> <!-- Close Row 2 -->
</div> <!-- Close container -->



<div class="container">
<div class="row">
<div class="col">
<div class="card">
<div class="card-header bg-danger text-white" >
<h4>Hot news</h4>
</div>
<div class="card-body">
<p>Lorem ipsum dolor, sit amet consectetur!</p>
</div>
<div class="card-footer">
By Benznest
</div>
</div>
</div>
<div class="col">
<div class="card">
<img class="card-img-top" src="img/staffs/staff4.jpg" >
<div class="card-body">
<h4 class="card-title">Our Staff</h4>
<p class="card-text">Lorem ipsum dolor sit amet consectetur !<p>
<a href="#" class="btn btn-primary">Read more</a>
</div>
</div>
</div>
</div>
</div