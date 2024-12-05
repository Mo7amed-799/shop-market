<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .card{
            float: right;
            margin: 10px;
        }
        .card img{
            width: 100%;
            height:200px;
        }
    </style>
</head>
<body>
    <center> <h2>جميع المنتجات </h2>      </center>
<?php
include ('config.php');
$result= mysqli_query($con , "SELECT * FROM prod");
while($row =mysqli_fetch_array($result)){
echo "<center>
<main>
    <div class='card' style='width: 18rem;'>
  <img src='$row[image]' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
    <p class='card-text'>$row[price]</p>
    <a href='delete.php? id=$row[id]' class='btn btn-danger'>حذف المنتج</a>
    <a href='update.php? id=$row[id]' class='btn btn-primary'>تعديل المنتج</a>
  </div>
</div>
</main>
</center>";
}
?>



</body>
</html> 