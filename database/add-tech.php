<?php
            error_reporting(0);
            include('../database/connect.php');     
            $name_ = $_POST['name'];
            $des_= $_POST['des'];    
            $send_ = $_POST['submit'];
            if(isset($_POST['submit'])){
                if($_FILES['image']['name'] == ""){
                    $sql = "INSERT INTO staff(NAME, DES) VALUES('$name_' , '$des_')";
                    if(empty($name_)){
                        echo '<div id="tm">' . 'حقل الاسم فارغ' . '</div>';
                    } else if(empty($des_)){
                        echo '<div id="tm">' . 'حقل الوصف فارغ' . '</div>';
                    } else {
                        mysqli_query($connect, $sql);
                        echo "<script>alert('تمت الإضافة بنجاح!')</script>";
                        echo "<script>document.location='http://localhost/TCC-Project/admin/subjects&teacher-register.php'</script>";
                    }        
                } else {
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
                            if($img_size < 524288){
                                $sql = "INSERT INTO staff(NAME, DES, IMG) VALUES('$name_' , '$des_', '$img_')";
                                if(empty($name_)){
                                    echo '<div id="tm">' . 'حقل الاسم فارغ' . '</div>';
                                } else if(empty($des_)){
                                    echo '<div id="tm">' . 'حقل الوصف فارغ' . '</div>';
                                } else {
                                    mysqli_query($connect, $sql);
                                    echo "<script>alert('تمت الإضافة بنجاح!')</script>";
                                    echo "<script>document.location='http://localhost/TCC-Project/admin/subjects&teacher-register.php'</script>";
                                }        
                            } else {
                                echo "<script>alert('حجم الصورة يتجاوز 512KB، يرجى اختيار واحدة أخرى!')</script>";
                                echo "<script>document.location='http://localhost/TCC-Project/admin/subjects&teacher-register.php'</script>";                    
                            }
                        } else {
                            echo "<script>alert('حدث خطأ ما!')</script>";
                            echo "<script>document.location='http://localhost/TCC-Project/admin/subjects&teacher-register.php'</script>";                
                        }
                    } else {
                        echo "<script>alert('صيغة الصورة غير مدعومة، يرجى اختيار صورة بإحدى هذه اللواحق(jpg, jpeg, png)')</script>";
                        echo "<script>document.location='http://localhost/TCC-Project/admin/subjects&teacher-register.php'</script>";                
                    }  
                }            
            }
?>