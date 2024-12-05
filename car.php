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
            height: 50px;
        }
        a{
            color: white;
            text-decoration: none;
            padding: 10px;
            font-size: x-large;
            font-weight: 900;
        }
      
      h3{
        display: flex;
     justify-content: right;
 padding-right: 15px;
      }

      
      #button {
 display: flex;

 margin-left: 10px;
 padding: 5px;
 height: 1.5em;
 width: 100px;
 align-items: center;
 justify-content: center;
 background-color: #eeeeee4b;
 border-radius: 3px;
 letter-spacing: 1px;
 transition: all 0.2s linear;
 cursor: pointer;
 border: none;
 background: #fff;
 color: black;
}

#button > svg {
 margin-right: 5px;
 margin-left: 5px;
 font-size: 20px;
 transition: all 0.4s ease-in;
}

#button:hover > svg {
 font-size: 1.2em;
 transform: translateX(-5px);
}

#button:hover {
 box-shadow: 9px 9px 33px #d1d1d1, -9px -9px 33px #ffffff;
 transform: translateY(-2px);
}
    </style>
   
</head>
<body>
 <nav>
 
<a href="shop.php" id="button">
  <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024"><path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path></svg>
  <span>Back</span>
</a>
 </nav>
 <h3>عربة التسوق</h3> <hr>
<?php
include ('carcon.php');
$result= mysqli_query($con , "SELECT * FROM proda");
if ($result) {
  echo "<main>";
  
 
  while($row =mysqli_fetch_array($result)){
    echo "<center>
    
    <main>
   
   
        <div class='card' style='width: 18rem;'>
      <img src='$row[image]' class='card-img-top' alt='...'>
      <div class='card-body'>
        <h5 class='card-title'>$row[name]</h5>
        <p class='card-text'>$row[price]</p>
   <a href='deletecar.php? id=$row[id]' class='btn btn-danger'>حذف  من العربه</a>
    <a href='val.php? id=$row[id]' class='btn btn-success'>اتمام الشراء </a>
     
      </div>
    </div>
    </main>
    </center>";
    }
  }
?>

</body>
</html>