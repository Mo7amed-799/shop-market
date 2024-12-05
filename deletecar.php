<?php
include ('carcon.php');
$ID=$_GET['id'];
mysqli_query($con,"DELETE FROM proda WHERE id=$ID");

echo "<script>
            alert('تم حذف المنتج');
            window.location.href = 'car.php';
          </script>";
    exit();
?>