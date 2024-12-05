<?php
    include ('config.php');
   
    $ID=$_GET['id'];
    $up=mysqli_query($con,"SELECT * FROM prod WHERE id=$ID");
    $row =mysqli_fetch_array($up);
   
    ?>
    
    <?php
     include ('carcon.php');
    $insert = "INSERT INTO proda (name, price, image) VALUES ('$row[name]', '$row[price]', '$row[image]')";
    if (mysqli_query($con, $insert)) {
            echo "<script>
            alert('تم رفع المنتج بنجاح');
            window.location.href = 'shop.php';
          </script>";
    exit();
         
    } else {

        echo "<script>alert('حدث خطأ أثناء إدخال البيانات في قاعدة البيانات');
         window.location.href = 'index.php';
        </script>";
    }
    ?>
