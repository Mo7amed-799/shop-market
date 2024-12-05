<?php
include ('config.php');
$ID=$_GET['id'];
mysqli_query($con,"DELETE FROM prod WHERE id=$ID");

echo "<script>
            alert('تم حذف المنتج');
            window.location.href = 'products.php';
          </script>";
    exit();
?>