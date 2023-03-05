<!DOCTYPE html>
<html lang="en" id="html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assest/css/style.css">
    <link rel="stylesheet" href="../assest/css/adminstyle.css">
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
                    <!-- <li class="nav_item" id="li3">
                        <a href="../profile.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="person-outline"></ion-icon></span>
                            <span class="nav_name">الملف الشخصي</span>                          
                        </a>
                    </li> -->
                    <!-- <li class="nav_item" id="li2">
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
                    </li> -->
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
                            <span class="nav_name">إدارة المعهد - المدير</span> 
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
        <!-- <div class="navigation">

            <div class="tcc">
                <div class="switch">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="title">
                    لوحة تحكم المشرف
                </div>
            </div>




            <ul>
                 <li id="li1">
                    <a href="#">
                        <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                        <span class="title">سجل المدرسين</span>
                    </a>
                </li> 
                <li id="li2">
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
                 <li id="li4">
                    <a href="#">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">حضور الطلاب</span>
                    </a>
                </li> 
                <li id="li5">
                    <a href="exam-result.php">
                        <span class="icon"><ion-icon name="file-tray-stacked-outline"></ion-icon></span>
                        <span class="title">نتائج الامتحانات</span>
                    </a>
                </li>
                <li id="li66">
                    <a href="admin-setting.php">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">إدارة حساب المشرف</span>
                    </a>
                </li>
            </ul>
        </div> -->

    <!-- ================================ -->

    <div class="main279 sta-f">     
    <div class="staff-inp">
    <form method="POST" id="form12">
        <h2>إضافة مشرف</h2>
        <select class="text" id="text1" required style="margin: 0 auto;display: flex;padding: 10px;width: 80%;height: 10%;">
                          <option value="">الرجاء قم باختيار وظيفة المشرف الجديد</option>
                          <option value="EXAM">امتحانات</option>
                          <!-- <option value="STUDENTS">شؤون الطلاب</option> -->
                          <option value="MANGER">مدير معهد</option>
        </select>
                    <!-- <label>أدخل اسم المستخدم</label> -->
        <input type="text" name="name" placeholder="أدخل اسم المستخدم" required>
        <!-- <label>أدخل كلمة المرور </label> -->
        <input type="password" name="pass" id="in77" placeholder="أدخل كلمة المرور" required>
        <div id="dch" style="display: flex;align-items: center;margin-right: 10%;">
        <input type="checkbox" id="check" style="width: 15px;">
        <label style="margin-right: 10px;">إظهار كلمة المرور</label>
        </div>
        <input type="submit" name="submit" value="إضافة" class="ida">
    </form>
<script>
    ///////////////////////////
        let form12 = document.getElementById("form12");
        let text1 = document.getElementById("text1");
        form12.onsubmit = function () {
            if(text1.value == "EXAM"){
                form12.setAttribute('action', '../database/ex-admin.php');
            }
            else if (text1.value == "STUDENTS"){
                form12.setAttribute('action', '../database/aff-admin.php');
            }
            else if (text1.value == "MANGER"){
                form12.setAttribute('action', '../database/man-admin.php');
            }
        }
                ///////////////////////////
        ////إظهار كلمة المرور////
        //////////////////////////
        let check = document.getElementById("check");
        let pass1 = document.getElementById("in77");
        let lable = document.getElementById("lab");

        let clicked = false;

       check.onclick = function() {
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
        // check.addEventListener('click' , check1);
    </script>



    <?php
                error_reporting(0);
                include('../database/connect.php');         
        $sql_s = 'SELECT * FROM exam_admin';
        $result = mysqli_query($connect, $sql_s);
        //////////////////////////////////////////////////////////
        // $sql_s2 = 'SELECT * FROM stu_aff_admin';
        // $result2 = mysqli_query($connect, $sql_s2);
        //////////////////////////////////////////////////////////
        $sql_s3 = 'SELECT * FROM manger_admin';
        $result3 = mysqli_query($connect, $sql_s3);
    ?>
    </div>
    <!-- ===================================== -->
    <div class="staff-inp1">
    <table class="tab" style="margin: 0 auto 30px auto; width:100%;">
                <tr>
                    <th colspan="4" style="font-size: 1.6em;">مشرفين الامتحانات</th>
                </tr>
                <tr style="background-color: #ddd;">
                    <th>اسم المستخدم</th>
                    <th>كلمة المرور</th>
                    <th>اجراءات</th>
                </tr>
                    <?php
                        if(isset($result)){
                            while($row = mysqli_fetch_assoc($result)){
                                ?>
                                    <tr>
                                        <td><?php echo $row['USER_NAME'] ?></td>
                                        <td><?php echo $row['PASS'] ?></td>
                                        <th>
                                            <form action="../database/delete.php" method="POST">
                                            <input type="hidden" name="del3" value="<?php echo $row['ID']; ?>">
                                            <input class="del_btn" type="submit" name="nam3" value="حذف">
                                            </form>
                                        </th>
                                    </tr>
                        <?php
                            }
                        }
                    ?>
            </table>
            <!-- <table class="tab" style="margin: 0 auto 30px auto; width:100%;">
                <tr>
                    <th colspan="4" style="font-size: 1.6em;">مشرفين شؤون الطلاب</th>
                </tr>
                <tr style="background-color: #ddd;">
                    <th>اسم المستخدم</th>
                    <th>كلمة المرور</th>
                    <th>اجراءات</th>
                </tr>
                    <?php
                        // if(isset($result2)){
                            // while($row2 = mysqli_fetch_assoc($result2)){
                                ?>
                                    <tr>
                                        <td><?php // echo $row2['USER_NAME'] ?></td>
                                        <td><?php // echo $row2['PASS'] ?></td>
                                        <th>
                                            <form action="../database/delete.php" method="POST">
                                            <input type="hidden" name="del4" value="<?php // echo $row2['ID']; ?>">
                                            <input class="del_btn" type="submit" name="nam4" value="حذف">
                                            </form>
                                        </th>
                                    </tr>
                        <?php
                     //       }
                       // }
                    ?>
            </table> -->
            <table class="tab" style="margin: 0 auto 30px auto; width:100%;">
                <tr>
                    <th colspan="4" style="font-size: 1.6em;">مشرفين إدارة المعهد</th>
                </tr>
                <tr style="background-color: #ddd;">
                    <th>اسم المستخدم</th>
                    <th>كلمة المرور</th>
                    <th>اجراءات</th>
                </tr>
                    <?php
                        if(isset($result3)){
                            while($row3 = mysqli_fetch_assoc($result3)){
                                ?>
                                    <tr>
                                        <td><?php echo $row3['USER_NAME'] ?></td>
                                        <td><?php echo $row3['PASS'] ?></td>
                                        <th>
                                            <form action="../database/delete.php" method="POST">
                                            <input type="hidden" name="del5" value="<?php echo $row3['ID']; ?>">
                                            <input class="del_btn" type="submit" name="nam5" value="حذف">
                                            </form>
                                        </th>
                                    </tr>
                        <?php
                            }
                        }
                    ?>
            </table>
    </div>
</div>



<!-- =================================================================== -->


<div class="main" style="display: flex;flex-direction: column;align-items: center;">     
    <div class="staff-inp"  style="width: 80%;height: auto;">
    <form action="../database/add-pic.php" method="POST" id="form12" enctype="multipart/form-data">
        <h2>نشر صورة في معرض الصور</h2>
        <input type="text" name="pic-title" placeholder="عنوان الصورة" required>

        <label style="margin: 15px auto;">اختر الصورة</label>
        <input type="file" name="image">


        <input type="submit" name="submit" value="نشر" class="ida">
    </form>
    <?php
        error_reporting(0);
        include('../database/connect.php');         
        $sql_pic = 'SELECT * FROM pictures ORDER BY ID DESC';
        $result_pic = mysqli_query($connect, $sql_pic);
    ?>
    </div>
    <!-- ===================================== -->
    <div class="staff-inp1" style="width: 80%;">
    <table class="tab" style="margin: 0 auto 30px auto; width:100%;">
                <tr>
                    <th colspan="5" style="font-size: 1.6em;">الصور المنشورة</th>
                </tr>
                <tr style="background-color: #ddd;">
                    <th>عنوان الصورة</th>
                    <th>الصورة</th>
                    <th>اجراءات</th>
                </tr>
                    <?php
                        if(isset($result_pic)){
                            while($row_pic = mysqli_fetch_assoc($result_pic)){
                                ?>
                                    <tr>
                                        <td align="center" style="width: 40%"><?php echo $row_pic['PIC_TITLE'] ?></td>
                                        <td style="width: 20vw"><?php echo '<img style="width: inherit; display: flex; margin: 0 auto;" src="data:image;base64,' . $row_pic['PIC'] . '">'; ?></td>
                                        <th style="width: 15%">
                                            <form action="../database/update-pic.php" method="POST">
                                            <input type="hidden" name="del6" value="<?php echo $row_pic['ID']; ?>">
                                            <div style="display: flex;align-items: center; justify-content: space-around;">
                                            <input class="del_btn" type="submit" name="nam6" value="حذف" style="margin:0 5px;">
                                            <input class="del_btn alter_btn" type="submit" name="up_nam" value="تعديل" style="margin:0 5px;">
                                            </div>
                                            </form>
                                        </th>
                                    </tr>
                        <?php
                            }
                        }
                    ?>
            </table>
    </div>
</div>













    <!-- ================================ -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- <script src="main.js"></script> -->
    <script>
        let li7 = document.getElementById("li7"); //الرئيسية
        let li66 = document.getElementById("li66"); //الرئيسية
        let body = document.querySelector("body");
        body.onload = function () {
        li7.classList.add('activated');
        li66.classList.add('hovered');
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
    //////////////////////
    // let li6 = document.getElementById("li6"); //ادارة حساب المشرف
    // body.onload = function () {
    //     li6.classList.add('hovered');
    //     }

    ////////////////////
    // let list = document.querySelectorAll('.navigation li');
    // function activLink(){
    //     list.forEach((item) =>
    //     item.classList.remove('hovered')
    //     );
    //     this.classList.add('hovered');
    // }
    // list.forEach((item =>
    // item.addEventListener('click', activLink)));
/////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////         



///////////////////////////
/////////////////////////////////






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