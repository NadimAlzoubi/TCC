<?php
            error_reporting(0);
            include('connect.php');     
            $name_ = $_POST['name'];
            $pass_ = $_POST['pass'];    
            $send_ = $_POST['submit'];
            if(isset($_POST['submit'])){
            $sql = "INSERT INTO exam_admin(USER_NAME, PASS) VALUES('$name_' , '$pass_')";
            if(empty($name_)){
                echo '<div id="tm">' . 'حقل اسم المستخدم فارغ' . '</div>';
            } else if(empty($pass_)){
                echo '<div id="tm">' . 'حقل كلمة المرور فارغ' . '</div>';
            } else {
                mysqli_query($connect, $sql);
                echo "<script>alert('تمت الإضافة بنجاح!');</script>";
                echo "<script>document.location='http://localhost/TCC-Project/admin/manger.php'</script>";
            }
        }
?>