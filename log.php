<?php
include('logcon.php'); 


if (isset($_POST['signup']) || isset($_POST['login'])) {
    $USERNAME = $_POST['username'];
    $PASSWORD = $_POST['password'];
    
    
    if (isset($_POST['signup'])) {
        
        if ($USERNAME != '' && $PASSWORD != '') {
            
            $hashed_password = password_hash($PASSWORD, PASSWORD_DEFAULT);

            
            $stmt = $con->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $USERNAME, $hashed_password);

            if ($stmt->execute()) {
                echo "<script>alert('تم التسجيل بنجاح'); window.location.href = 'shop.php';</script>";
            } else {
                echo "<script>alert('حدث خطأ أثناء إدخال البيانات في قاعدة البيانات'); window.location.href = 'login.php';</script>";
            }
        }
    }

    if (isset($_POST['login'])) {
        
        if ($USERNAME == 'admin' && $PASSWORD == '0000') {
            echo "<script>alert('صفحة المسؤول'); window.location.href = 'index.php';</script>";
        } else {
            
            $stmt = $con->prepare("SELECT password FROM users WHERE username = ?");
            $stmt->bind_param("s", $USERNAME);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                
                
                if (password_verify($PASSWORD, $row['password'])) {
                    echo "<script>alert('تم تسجيل الدخول بنجاح'); window.location.href = 'shop.php';</script>";
                } else {
                    echo "<script>alert('كلمة المرور خاطئة'); window.location.href = 'login.php';</script>";
                }
            } else {
                echo "<script>alert('اسم المستخدم غير موجود'); window.location.href = 'login.php';</script>";
            }
        }
    }
}
?>
