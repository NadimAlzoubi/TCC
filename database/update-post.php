<!DOCTYPE html>
<html lang="en" id="html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assest/css/style.css">
    <link rel="stylesheet" href="../assest/css/adminstyle.css">
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <link rel="icon" type="image/png" href="../img/tcc.png">

    <title>TCC-admin</title>
</head>
<body>
    <!-- =====================header=================== -->
    <header class="header" id="header">

        <nav class="nav">

        <div class="nav_img">المعهد التقاني للحاسوب</div>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item" id="li1">
                        <a href="../index.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="nav_name">الرئيسية</span>
                        </a>
                    </li>
                    <li class="nav_item" id="li3">
                        <a href="../profile.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="person-outline"></ion-icon></span>
                            <span class="nav_name">الملف الشخصي</span>                          
                        </a>
                    </li>
                    <li class="nav_item" id="li2">
                        <span class="nav_link" id="navS">
                            <span class="nav_icon"><ion-icon name="library-outline"></ion-icon></span>
                            <span class="nav_name">قسم البرمجيات</span>
                        </span>
                        <div class="sub_seas_hiddenS">
                            <details>
                                <summary>السنة الأولى</summary>
                                <a href="soft-y1-s1.php">الفصل الأول</a>
                                <a href="soft-y1-s2.php">الفصل الثاني</a>
                            </details>
                            <hr>
                            <details>
                                <summary>السنة الثانية</summary>
                                <a href="soft-y2-s1.php">الفصل الأول</a>
                                <a href="soft-y2-s2.php">الفصل الثاني</a>
                            </details>
                        </div>
                    </li>

                    <li class="nav_item" id="li4">
                        <span class="nav_link" id="navH">
                            <span class="nav_icon"><ion-icon name="people-outline"></ion-icon></span>
                            <span class="nav_name">قسم الحواسيب</span>
                        </span>
                        <div class="sub_seas_hiddenH">
                            <details>
                                <summary>السنة الأولى</summary>
                                <a href="hard-y1-s1.php">الفصل الأول</a>
                                <a href="hard-y1-s2.php">الفصل الثاني</a>
                            </details>
                            <hr>
                            <details>
                                <summary>السنة الثانية</summary>
                                <a href="hard-y2-s1.php">الفصل الأول</a>
                                <a href="hard-y2-s2.php">الفصل الثاني</a>
                            </details>
                        </div>
                    </li>
                    <!-- <li class="nav_item" id="li5">
                        <a href="#" class="nav_link">
                            <span class="nav_icon"><ion-icon name="school-outline"></ion-icon></span>
                            <span class="nav_name">الخريجين</span>                                                
                        </a>
                    </li> -->
                    <!-- <li class="nav_item" id="li6">
                        <a href="../callus.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="call-outline"></ion-icon></span>
                            <span class="nav_name">اتصل بنا</span>
                        </a>
                    </li> -->
                    <li class="nav_item" id="li7">
                        <a href="../TCC-login.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="file-tray-stacked-outline"></ion-icon></span>
                            <span class="nav_name">إدارة المعهد - الامتحانات</span> 
                        </a>
                    </li>
                </ul>
            </div>
            <a href="../index.php" class="nav_logo">TCC-Daraa</a>
        </nav>
    </header>




    <!-- ===================== admin side bar ====================== -->





    <div class="navContainer">

        <!-- القائمة الجانبية -->
        <div class="navigation">

            <div class="tcc">
                <div class="switch">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="title">
                    لوحة تحكم المشرف
                </div>
            </div>
            <!-- ------------------------------------------------------ -->
            <!-- ------------------------------------------------------ -->
            <ul>
                <!-- <li id="li1">
                    <a href="#">
                        <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                        <span class="title">سجل المدرسين</span>
                    </a>
                </li> -->
                <li id="li22">
                    <a href="TCC-exam-admin.php">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <span class="title">الطلاب</span>
                    </a>
                </li>
                <li id="li3">
                    <a href="subjects&teacher-register.php">
                        <span class="icon"><ion-icon name="library-outline"></ion-icon></span>
                        <span class="title">المقررات والمدرسين</span>
                    </a>
                </li>
                <!-- <li id="li4">
                    <a href="#">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">حضور الطلاب</span>
                    </a>
                </li> -->
                <li id="li5">
                    <a href="exam-result.php">
                        <span class="icon"><ion-icon name="file-tray-stacked-outline"></ion-icon></span>
                        <span class="title">نتائج الامتحانات</span>
                    </a>
                </li>
                <li id="li67">
                    <a href="../admin/post.php">
                        <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                        <span class="title">المنشورات</span>
                    </a>
                </li>
            </ul>
        </div>
    <!-- ================================ -->
    <!-- ================================ -->
    <!-- ================================ -->
    <?php
                error_reporting(0);
                include('connect.php');    
                if(isset($_POST['nam6'])){
                            
                    $delid6 = $_POST['del6'];
                    $delete6 = "DELETE FROM posts WHERE ID = '$delid6'";
                    $del_run6 = mysqli_query($connect, $delete6);
                
                    if($del_run6){
                        echo '<script>alert("تم الحذف بنجاح");</script>';
                        echo '<script>document.location = "http://localhost/TCC-Project/admin/post.php"</script>';
                        
                    } else {
                        echo '<script>alert("حدث خطأ: لم يتم الحذف ");</script>';
                    }
                }                
            
                if(isset($_POST['up_nam'])){             
                    $delid6 = $_POST['del6'];
                    $sql_s = "SELECT * FROM posts WHERE ID = '$delid6'";
                    $result = mysqli_query($connect, $sql_s);
                    $row = mysqli_fetch_assoc($result);
                }
?>                        

    <!-- ================================ -->
    <div class="main" style="display: flex;flex-direction: column;align-items: center;">     
    <div class="staff-inp"  style="width: 80%;height: auto;">
    <form method="POST" id="form12" enctype="multipart/form-data">
        <h2>تعديل المنشور</h2>
        <input type="text" name="post-title" value="<?php echo $row['POST_TITLE']; ?>">
        <input type="hidden" name="del6" value="<?php echo $row['ID']; ?>">
        <input type="hidden" name="post-time" value="<?php echo date("h:i:sa " . " " . " d/m/Y"); ?>">
        <textarea name="the-post" id="in77"  style="width: 80%;margin: 0 auto;display: flex;height: 60%;padding: 10px;font-size: 1.2em;"><?php echo $row['POST_CON']; ?></textarea>
        
        <label style="margin: 15px auto;">اختر صورة جديدة، (ولحذفها قم بالتحديث مباشرةً)</label>
        <input type="file" name="image">


        <input type="submit" name="submit" value="تحديث" class="ida">
    </form>
    <script>
        CKEDITOR.replace( 'the-post' );
    </script>
    <?php
                $up_title = $_POST['post-title'];
                $up_post = $_POST['the-post'];        
                $up_time = $_POST['post-time'];        
    $up_sub = $_POST['submit'];
    $delid6 = $_POST['del6'];

    if(isset($up_sub)) {
        if($_FILES['image']['name'] == ""){
            $null = NULL;
            $sql = "UPDATE posts SET POST_TITLE = '$up_title', POST_CON = '$up_post', POST_TIME = '$up_time', IMG = '$null' WHERE ID = '$delid6'";
                mysqli_query($connect, $sql);
                echo "<script>alert('تم التحديث بنجاح!')</script>";
                echo "<script>document.location='http://localhost/TCC-Project/admin/post.php'</script>";
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
                if($img_size < 900288){
                    $sql_u = "UPDATE posts SET POST_TITLE = '$up_title', POST_CON = '$up_post', POST_TIME = '$up_time', IMG = '$img_' WHERE ID = '$delid6'";
                        mysqli_query($connect, $sql_u);
                        echo "<script>alert('تم التحديث بنجاح!')</script>";
                        echo "<script>document.location='http://localhost/TCC-Project/admin/post.php'</script>";
                          
            } else {
                echo "<script>alert('حجم الصورة يتجاوز 512KB، يرجى اختيار واحدة أخرى!')</script>";
                echo "<script>document.location='http://localhost/TCC-Project/admin/post.php'</script>";                    
            }
        } else {
            echo "<script>alert('حدث خطأ ما!')</script>";
            echo "<script>document.location='http://localhost/TCC-Project/admin/post.php'</script>";                
        }
    } else {
        echo "<script>alert('صيغة الملف غير مدعومة، يرجى اختيار صورة بإحدى هذه اللواحق(jpg, jpeg, png)')</script>";
        echo "<script>document.location='http://localhost/TCC-Project/admin/post.php'</script>";                
    }  
}   
}       
    ?>
    </div>
</div>


    <!-- ================================ -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- <script src="main.js"></script> -->
    <script>
        let li7 = document.getElementById("li7"); //الرئيسية
        let li67 = document.getElementById("li67"); //الرئيسية
        let body = document.querySelector("body");
        body.onload = function () {
        li7.classList.add('activated');
        li67.classList.add('hovered');
        }
    </script>
    <!-- -------------------------------- -->
<script>
    let main = document.querySelector('.main');
    let navigation = document.querySelector('.navigation');
    let slid = document.querySelector('.switch');
    let open = true;
    slid.onclick = function(){
    navigation.classList.toggle('slid1');
    main.classList.toggle('slid2');
    slid.classList.toggle('switch2');
        if(open == true){
            this.innerHTML = "<ion-icon name='close-outline'></ion-icon>";
            open = false;
        }
        else {
            this.innerHTML = "<ion-icon name='menu-outline'></ion-icon>";
            open = true;
        }
    }
    ////////////////////////////////////////////////////////////
    let list = document.querySelectorAll('.navigation li');
    function activLink(){
        list.forEach((item) =>
        item.classList.remove('hovered')
        );
        this.classList.add('hovered');
    }
    list.forEach((item =>
    item.addEventListener('click', activLink)));
/////////////////////////////////////////////////////////////////////////////////////
var navS = document.querySelector('#navS');
var navH = document.querySelector('#navH');
var sub_drobS = document.querySelector('.sub_seas_hiddenS');
var sub_drobH = document.querySelector('.sub_seas_hiddenH');
var open_listS = false;
navS.onclick = function () {
    if (open_listS == false){
        sub_drobS.classList.add('sub_seas');
        sub_drobS.classList.remove('sub_seas_hiddenS');
        open_listS = true;
    }
    else{
        sub_drobS.classList.remove('sub_seas');
        sub_drobS.classList.add('sub_seas_hiddenS');
        open_listS = false;
    }
}
var open_listH = false;
navH.onclick = function () {
    if (open_listH == false){
        sub_drobH.classList.add('sub_seas');
        sub_drobH.classList.remove('sub_seas_hiddenH');
        open_listH = true;
    }
    else{
        sub_drobH.classList.remove('sub_seas');
        sub_drobH.classList.add('sub_seas_hiddenH');
        open_listH = false;
    }
}
/////////////////////////////////////////////////////////////////////////////////////
</script>
</body>
</html>