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
        nav{
            background-color: black;
            height: 30px;
        }
        a{
            color: white;
            text-decoration: none;
            padding: 10px;
            font-size: x-large;
            font-weight: 900;
        }
        h3{
            color: white;
            text-align: center;
            justify-content: center;
            position: absolute;
            top: 2%;
            right: 45%;
        }
    </style>
    <nav>
   
    <a href="car.php">عربتي</a> 
        
    </nav>
    <nav>
  <h3>جميع المنتجات</h3>
    </nav>
</head>
<body>
    <center> <h2>  </h2>      </center>
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
 <form action='incar.php'>
 <a href='incar.php? id=$row[id]' class='btn btn-primary' action='incar.php' >اضافة المنتج للعربة</a>
</form
 
  </div>
</div>
</main>
</center>";
}

?>





</body>
</html>