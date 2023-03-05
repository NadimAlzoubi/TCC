<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assest/css/style.css">
    <title>TCC-Administration</title>
    <link rel="icon" type="image/png" href="img/tcc.png">

</head>
<body>
    <!-- =====================header=================== -->
    <header class="header" id="header">

        <nav class="nav">

        <div class="nav_img">المعهد التقاني للحاسوب</div>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item" id="li1">
                        <a href="index.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="nav_name">الرئيسية</span>
                        </a>
                    </li>
                    <li class="nav_item" id="li2">
                        <a href="library.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="library-outline"></ion-icon></span>
                            <span class="nav_name">المكتبة</span>
                        </a>
                    </li>
                    <li class="nav_item" id="li3">
                        <a href="profile.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="person-outline"></ion-icon></span>
                            <span class="nav_name">الملف الشخصي</span>                          
                        </a>
                    </li>
                    <li class="nav_item" id="li4">
                        <a href="staff.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="people-outline"></ion-icon></span>
                            <span class="nav_name">كادر المعهد</span>
                        </a>
                    </li>
                    <!-- <li class="nav_item" id="li5">
                        <a href="#" class="nav_link">
                            <span class="nav_icon"><ion-icon name="school-outline"></ion-icon></span>
                            <span class="nav_name">الخريجين</span>                                                
                        </a>
                    </li> -->
                    <li class="nav_item" id="li6">
                        <a href="callus.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="call-outline"></ion-icon></span>
                            <span class="nav_name">اتصل بنا</span>
                        </a>
                    </li>
                    <li class="nav_item" id="li7">
                        <a href="TCC-login.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="file-tray-stacked-outline"></ion-icon></span>
                            <span class="nav_name">إدارة المعهد</span> 
                        </a>
                    </li>
                </ul>
            </div>
            <a href="index.php" class="nav_logo">TCC-Daraa</a>
        </nav>
    </header>
        <!-- ===================== home ====================== -->
<main>
    <section class="container exam_login" id="main">        
        <form method="POST" id="form">
            <div class="profileContainer">
                <div class="pages">  
                  <div class="page">
                    <img class="brand-logo" src="img/ggg.png" alt="">
                    <h2>تسجيل الدخول إلى النظام</h2>
                    <div class="input">
                    <select class="text" id="text1" name="sel12" required>
                          <option value="">الرجاء قم باختيار وظيفتك في النظام</option>
                          <option value="EXAM">الامتحانات</option>
                          <!-- <option value="STUDENTS">شؤون الطلاب</option> -->
                          <option value="MANGER">مدير المعهد</option>
                    </select>
                          <input class="text" type="text" placeholder="اسم المستخدم" id="in1" name="username12" required autocomplete="off"/>
                        <input class="text" type="password" placeholder="كلمة المرور" id="in5" name="pass12" required autocomplete="off"/>
                      </div>
                      <div class="input" id="check">
                      <input type="checkbox">
                      <label id="lable">إظهار كلمة المرور</label>
                        </div>
                        <div class="input" id="sub">
                      <input type="submit" name="send12" value="تسجيل الدخول"/>
                    </div>
                  </div>
                </div>
            </div>
        </form>
    </section>    
</main>
<script>
            ///////////////////////////
        ////إظهار كلمة المرور////
        //////////////////////////
        let check = document.getElementById("check");
        let pass1 = document.getElementById("in5");
        let lable = document.getElementById("lable");

        let clicked = false;

        function check1 () {
            if (clicked == false)
            {
                pass1.setAttribute('type', 'text');
                clicked = true;    
            }
            else if (clicked == true)
            {
                pass1.setAttribute('type', 'password');
                clicked = false;
            }
        }
        check.addEventListener('click' , check1);
</script>
            <?php
                error_reporting(0);
                include('database/connect.php');  
                /////////////////////////////////////////////
                $username12 = $_POST['username12'];
                $pass12 = $_POST['pass12'];
                $sel12 = $_POST['sel12'];
                $send12 = $_POST['send12'];
                /////////////////////////////////////////////
                if(isset($send12)){
                    if($sel12 == "EXAM"){
                        $sql_s = "SELECT * FROM exam_admin WHERE USER_NAME = '$username12' AND PASS = '$pass12' ";
                        $result = mysqli_query($connect, $sql_s);
                        $count = mysqli_num_rows($result);
                        if($count > 0){
                        echo "<script>document.location='http://localhost/TCC-Project/admin/TCC-exam-admin.php';</script>";   
                        }
                        else{
                        echo "<script>alert('البيانات غير صحيحة!');</script>";   
                        echo "<script>document.location='http://localhost/TCC-Project/TCC-login.php';</script>";   
                        }
                    } else if($sel12 == "STUDENTS"){
                        $sql_s2 = "SELECT * FROM stu_aff_admin WHERE USER_NAME = '$username12' AND PASS = '$pass12' ";
                        $result2 = mysqli_query($connect, $sql_s2);
                        $count2 = mysqli_num_rows($result2);
                        if($count2 > 0){
                        echo "<script>document.location='http://localhost/TCC-Project/admin/TCC-students-admin.php';</script>";   
                        }
                        else{
                        echo "<script>alert('البيانات غير صحيحة!');</script>";   
                        echo "<script>document.location='http://localhost/TCC-Project/TCC-login.php';</script>";   
                        }            
                    } else if ($sel12 == "MANGER"){
                        $sql_s3 = "SELECT * FROM manger_admin WHERE USER_NAME = '$username12' AND PASS = '$pass12' ";
                        $result3 = mysqli_query($connect, $sql_s3);
                        $count3 = mysqli_num_rows($result3);
                        if($count3 > 0){
                        echo "<script>document.location='http://localhost/TCC-Project/admin/manger.php';</script>";   
                        }
                        else{
                        echo "<script>alert('البيانات غير صحيحة!');</script>";   
                        echo "<script>document.location='http://localhost/TCC-Project/TCC-login.php';</script>";   
                        }            
                    }
                }
            ?>


<!-- <div style="width: 100%; background-color: var(--blue); color: var(--dark-white); padding: 12px; text-align: center;position: absolute; bottom: 0;">
	<p style="padding: 0 5px; border-right: 3px solid var(--green); width: fit-content; margin: 0 auto; border-left: 3px solid var(--green);">
        حقوق النشر محفوظة 2022 ©
    </p>
</div> -->

    <!-- ================================ -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- <script src="main.js"></script> -->
    <script>
        let li7 = document.getElementById("li7"); //الرئيسية
        let body = document.querySelector("body");
        body.onload = function () {
        li7.classList.add('activated');
        }
</script>
</body>
</html>