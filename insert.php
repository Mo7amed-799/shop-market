<?php
include('config.php');


if (isset($_POST['upload'])) {
    
    $NAME = $_POST['pro_name'];
    $price = $_POST['pro_price'];
    
    
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    
   
    $image_up = "images/" . $image_name;

   
    $insert = "INSERT INTO prod (name, price, image) VALUES ('$NAME', '$price', '$image_up')";
    
    
    if (mysqli_query($con, $insert)) {
       
        if (move_uploaded_file($image_location, $image_up)) {
          
            echo "<script>
            alert('تم رفع المنتج بنجاح');
            window.location.href = 'index.php';
          </script>";
    exit();
        } else {
       
            echo "<script>alert('حدث خطأ أثناء رفع الصورة');
             window.location.href = 'index.php';
            </script>";
        }
    } else {

        echo "<script>alert('حدث خطأ أثناء إدخال البيانات في قاعدة البيانات');
         window.location.href = 'index.php';
        </script>";
    }
   
}
?>