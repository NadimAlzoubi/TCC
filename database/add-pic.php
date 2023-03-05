<?php
            error_reporting(0);
            include('connect.php');     
            $pic_title = $_POST['pic-title'];
            $send_ = $_POST['submit'];


            if(isset($_POST['submit'])){
                $img_= base64_encode(file_get_contents($_FILES['image']['tmp_name']));    
                $img_tmp = $_FILES['image']['tmp_name'];
                $img_name = $_FILES['image']['name'];    
                $img_size = $_FILES['image']['size'];    
                $img_error = $_FILES['image']['error'];    
                $img_type = $_FILES['image']['type'];    
                $img_ext = explode('.', $img_name);
                $img_ac_ex = strtolower(end($img_ext));
                $allowed_type = array('jpg', 'jpeg', 'png');
                    if(in_array($img_ac_ex, $allowed_type)){
                        if($img_error === 0){
                            if($img_size < 900288){
                                $sql = "INSERT INTO pictures(PIC_TITLE, PIC) VALUES ('$pic_title', '$img_')";
                                mysqli_query($connect, $sql);
                                    echo "<script>alert('تم النشر بنجاح!')</script>";
                                    echo "<script>document.location='http://localhost/TCC-Project/admin/manger.php'</script>";
                                      
                        } else {
                            echo "<script>alert('حجم الصورة يتجاوز 512KB، يرجى اختيار واحدة أخرى!')</script>";
                            echo "<script>document.location='http://localhost/TCC-Project/admin/manger.php'</script>";                    
                        }
                    } else {
                        echo "<script>alert('حدث خطأ ما!')</script>";
                        echo "<script>document.location='http://localhost/TCC-Project/admin/manger.php'</script>";                
                    }
                } else {
                    echo "<script>alert('صيغة الملف غير مدعومة، يرجى اختيار صورة بإحدى هذه اللواحق(jpg, jpeg, png)')</script>";
                    echo "<script>document.location='http://localhost/TCC-Project/admin/manger.php'</script>";                
                }  
            }
        
    ?>