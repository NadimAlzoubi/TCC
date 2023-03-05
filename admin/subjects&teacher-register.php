<!DOCTYPE html>
<html lang="en" id="html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assest/css/style.css">
    <link rel="stylesheet" href="../assest/css/adminstyle.css">
    <link rel="icon" type="image/png" href="../img/tcc.png">

    <title>TCC-Sub-Tea</title>
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
                <li id="li2">
                    <a href="TCC-exam-admin.php">
                        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <span class="title">الطلاب</span>
                    </a>
                </li>
                <li id="li33">
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
                <li id="li6">
                    <a href="post.php">
                        <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                        <span class="title">المنشورات</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <?php
            error_reporting(0);
            include('../database/connect.php');     
        ?>

<div class="main sta-f">     
    <div class="staff-inp">
    <form action="../database/add-tech.php" method="POST" enctype="multipart/form-data">
        <h2>إضافة مدرس</h2>
        <label>أدخل اسم المدرس</label>
        <input type="text" name="name" required>
         
        <label>أدخل وصف المدرس</label>
        <input type="text" name="des" required>

        <label>أدخل صورة المدرس ، يفضل مقاس (1:1) (اختياري)</label>
        <input type="file" name="image">

        <input type="submit" name="submit" value="إضافة" class="ida">
     </form>
    </div>
    <div class="staff-inp">
    <form method="POST">
        <h2>إضافة مقرر</h2>
        <div class="input19" style="display: flex;flex-direction: column;width: 80%;margin: 0 auto;">
        <select class="text in149" id="text1" name="spe" required="">
            <option value="">الرجاء قم باختيار الاختصاص</option>
            <option value="softWare">هندسة البرمجيات</option>
            <option value="hardWare">هندسة الحواسيب</option>
        </select>
        <!-- ======================================= -->
        <select class="text in149" id="text1" name="year" required="">
            <option value="">الرجاء قم باختيار السنة</option>
            <option value="1">السنة الأولى</option>
            <option value="2">السنة الثانية</option>
        </select>
        <!-- ======================================= -->
        <select class="text in149" id="text1" name="seas" required="">
            <option value="">الرجاء قم باختيار الفصل</option>
            <option value="1">الفصل الأول</option>
            <option value="2">الفصل الثاني</option>
        </select>
        </div>        <!-- ======================================= -->
        <input type="text" name="sub" placeholder="أدخل اسم المقرر" required>
        <input type="text" name="subLink" placeholder="أدخل رابط تحميل المقرر">
        <!-- ======================================= -->
        <input type="submit" name="subsend" value="إضافة" class="ida">
     </form>
     <?php
            include('../database/connect.php');     
            $subSpe = $_POST['spe'];
            $subYear = $_POST['year'];
            $subSeas = $_POST['seas'];
            $subname = $_POST['sub'];
            $subLink = $_POST['subLink'];
            $subsend = $_POST['subsend'];
            if(isset($_POST['subsend'])){
                if(empty($subLink)){
                    if(empty($subname)){
                        echo '<div id="tm">' . 'حقل الاسم فارغ' . '</div>';
                    } else {
                        $def_link = 'Error404.php';
                        $sql1 = "INSERT INTO subjects(NAME, SPE, YEAR_, SEAS_, LINK) VALUES('$subname', '$subSpe', '$subYear', '$subSeas', '$def_link')";
                        mysqli_query($connect, $sql1);
                        echo "<script>alert('تمت الإضافة بنجاح!')</script>";
                        echo "<script>document.location='http://localhost/TCC-Project/admin/subjects&teacher-register.php'</script>";
                    }
                } else {
                    if(empty($subname)){
                        echo '<div id="tm">' . 'حقل الاسم فارغ' . '</div>';
                    } else {
                    $sql1 = "INSERT INTO subjects(NAME, SPE, YEAR_, SEAS_, LINK) VALUES('$subname', '$subSpe', '$subYear', '$subSeas', '$subLink')";
                        mysqli_query($connect, $sql1);
                        echo "<script>alert('تمت الإضافة بنجاح!')</script>";
                        echo "<script>document.location='http://localhost/TCC-Project/admin/subjects&teacher-register.php'</script>";
                }
            }
        }
                
        
        $sql_s = 'SELECT * FROM staff';
        $result = mysqli_query($connect, $sql_s);
        $result_su1 = mysqli_query($connect, 'SELECT * FROM subjects WHERE SPE = "softWare" AND YEAR_ = 1 AND SEAS_ = 1');
        $result_su2 = mysqli_query($connect, 'SELECT * FROM subjects WHERE SPE = "softWare" AND YEAR_ = 1 AND SEAS_ = 2');
        $result_su3 = mysqli_query($connect, 'SELECT * FROM subjects WHERE SPE = "softWare" AND YEAR_ = 2 AND SEAS_ = 1');
        $result_su4 = mysqli_query($connect, 'SELECT * FROM subjects WHERE SPE = "softWare" AND YEAR_ = 2 AND SEAS_ = 2');
        $result_su5 = mysqli_query($connect, 'SELECT * FROM subjects WHERE SPE = "hardWare" AND YEAR_ = 1 AND SEAS_ = 1');
        $result_su6 = mysqli_query($connect, 'SELECT * FROM subjects WHERE SPE = "hardWare" AND YEAR_ = 1 AND SEAS_ = 2');
        $result_su7 = mysqli_query($connect, 'SELECT * FROM subjects WHERE SPE = "hardWare" AND YEAR_ = 2 AND SEAS_ = 1');
        $result_su8 = mysqli_query($connect, 'SELECT * FROM subjects WHERE SPE = "hardWare" AND YEAR_ = 2 AND SEAS_ = 2');
        ?>
    </div>
</div>
<div class="main sta-ft">
            <table class="tab">
                <tr>
                    <th colspan="4" style="font-size: 1.6em;">المدرسين</th>
                </tr>
                <tr style="background-color: #ddd;">
                    <th>اسم المدرس</th>
                    <th>وصف المدرس</th>
                    <th style="width: 25%;">اجراءات</th>
                </tr>
                    <?php
                        if(isset($result)){
                            while($row = mysqli_fetch_assoc($result)){
                                ?>
                                    <tr>
                                        <td><?php echo $row['NAME'] ?></td>
                                        <td><?php echo $row['DES'] ?></td>
                                        <th>
                                            <form action="../database/update-tech.php" method="POST">
                                            <input type="hidden" name="del1" value="<?php echo $row['ID']; ?>">
                                            <div style="display: flex;align-items: center; justify-content: space-around;">
                                            <input class="del_btn" type="submit" name="nam1" value="حذف">
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

                        <style>
                            #del-btnn{
                                text-align: center;
                                background-color: red;
                                color: whitesmoke;
                            }
                        </style>
            <div style="display: flex; flex-direction:column; width:50%">

            <table class="tab tab1">
            <tr>
            <th colspan="4" style="font-size: 1.3em;">مقررات هندسة البرمجيات - السنة الأولى - الفصل الأول</th>
                </tr>
                <tr style="background-color: #ddd;">
                    <th>اسم المقرر</th>
                    <th style="width: 25%;">اجراءات</th>
                </tr>
                    <?php
                        if(isset($result_su1)){
                            while($row1 = mysqli_fetch_assoc($result_su1)){
                                ?>
                                    <tr>
                                        <td><?php echo $row1['NAME']; ?></td>
                                        <th>
                                            <form action="../database/update-sub.php" method="POST">
                                            <input type="hidden" name="del2" value="<?php echo $row1['ID']; ?>">
                                            <div style="display: flex;align-items: center; justify-content: space-around;">
                                            <input class="del_btn" type="submit" name="nam2" value="حذف">
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
            <table class="tab tab1">
            <tr>
            <th colspan="4" style="font-size: 1.3em;">مقررات هندسة البرمجيات - السنة الأولى - الفصل الثاني</th>
                </tr>
                <tr style="background-color: #ddd;">
                    <th>اسم المقرر</th>
                    <th style="width: 25%;">اجراءات</th>
                </tr>
                    <?php
                        if(isset($result_su2)){
                            while($row1 = mysqli_fetch_assoc($result_su2)){
                                ?>
                                    <tr>
                                        <td><?php echo $row1['NAME'];?></td>
                                        <th>
                                        <form action="../database/update-sub.php" method="POST">
                                            <input type="hidden" name="del2" value="<?php echo $row1['ID']; ?>">
                                            <div style="display: flex;align-items: center; justify-content: space-around;">
                                            <input class="del_btn" type="submit" name="nam2" value="حذف">
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
            <table class="tab tab1">
            <tr>
            <th colspan="4" style="font-size: 1.3em;">مقررات هندسة البرمجيات - السنة الثانية - الفصل الأول</th>
                </tr>
                <tr style="background-color: #ddd;">
                    <th>اسم المقرر</th>
                    <th style="width: 25%;">اجراءات</th>
                </tr>
                    <?php
                        if(isset($result_su3)){
                            while($row1 = mysqli_fetch_assoc($result_su3)){
                                ?>
                                    <tr>
                                        <td><?php echo $row1['NAME']; ?></td>
                                        <th>
                                        <form action="../database/update-sub.php" method="POST">
                                            <input type="hidden" name="del2" value="<?php echo $row1['ID']; ?>">
                                            <div style="display: flex;align-items: center; justify-content: space-around;">
                                            <input class="del_btn" type="submit" name="nam2" value="حذف">
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
            <table class="tab tab1">
            <tr>
            <th colspan="4" style="font-size: 1.3em;">مقررات هندسة البرمجيات - السنة الثانية - الفصل الثاني</th>
                </tr>
                <tr style="background-color: #ddd;">
                    <th>اسم المقرر</th>
                    <th style="width: 25%;">اجراءات</th>
                </tr>
                    <?php
                        if(isset($result_su4)){
                            while($row1 = mysqli_fetch_assoc($result_su4)){
                                ?>
                                    <tr>
                                        <td><?php echo $row1['NAME']; ?></td>
                                        <th>
                                        <form action="../database/update-sub.php" method="POST">
                                            <input type="hidden" name="del2" value="<?php echo $row1['ID']; ?>">
                                            <div style="display: flex;align-items: center; justify-content: space-around;">
                                            <input class="del_btn" type="submit" name="nam2" value="حذف">
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
            <table class="tab tab1">
            <tr>
            <th colspan="4" style="font-size: 1.3em;">مقررات هندسة الحواسيب - السنة الأولى - الفصل الأول</th>
                </tr>
                <tr style="background-color: #ddd;">
                    <th>اسم المقرر</th>
                    <th style="width: 25%;">اجراءات</th>
                </tr>
                    <?php
                        if(isset($result_su5)){
                            while($row1 = mysqli_fetch_assoc($result_su5)){
                                ?>
                                    <tr>
                                        <td><?php echo $row1['NAME']; ?></td>
                                        <th>
                                        <form action="../database/update-sub.php" method="POST">
                                            <input type="hidden" name="del2" value="<?php echo $row1['ID']; ?>">
                                            <div style="display: flex;align-items: center; justify-content: space-around;">
                                            <input class="del_btn" type="submit" name="nam2" value="حذف">
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
            <table class="tab tab1">
            <tr>
            <th colspan="4" style="font-size: 1.3em;">مقررات هندسة الحواسيب - السنة الأولى - الفصل الثاني</th>
                </tr>
                <tr style="background-color: #ddd;">
                    <th>اسم المقرر</th>
                    <th style="width: 25%;">اجراءات</th>
                </tr>
                    <?php
                        if(isset($result_su6)){
                            while($row1 = mysqli_fetch_assoc($result_su6)){
                                ?>
                                    <tr>
                                        <td><?php echo $row1['NAME']; ?></td>
                                        <th>
                                        <form action="../database/update-sub.php" method="POST">
                                            <input type="hidden" name="del2" value="<?php echo $row1['ID']; ?>">
                                            <div style="display: flex;align-items: center; justify-content: space-around;">
                                            <input class="del_btn" type="submit" name="nam2" value="حذف">
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
            <table class="tab tab1">
            <tr>
            <th colspan="4" style="font-size: 1.3em;">مقررات هندسة الحواسيب - السنة الثانية - الفصل الأول</th>
                </tr>
                <tr style="background-color: #ddd;">
                    <th>اسم المقرر</th>
                    <th style="width: 25%;">اجراءات</th>
                </tr>
                    <?php
                        if(isset($result_su7)){
                            while($row1 = mysqli_fetch_assoc($result_su7)){
                                ?>
                                    <tr>
                                        <td><?php echo $row1['NAME']; ?></td>
                                        <th>
                                        <form action="../database/update-sub.php" method="POST">
                                            <input type="hidden" name="del2" value="<?php echo $row1['ID']; ?>">
                                            <div style="display: flex;align-items: center; justify-content: space-around;">
                                            <input class="del_btn" type="submit" name="nam2" value="حذف">
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
            <table class="tab tab1">
            <tr>
            <th colspan="4" style="font-size: 1.3em;">مقررات هندسة الحواسيب - السنة الثانية - الفصل الثاني</th>
                </tr>
                <tr style="background-color: #ddd;">
                    <th>اسم المقرر</th>
                    <th style="width: 25%;">اجراءات</th>
                </tr>
                    <?php
                        if(isset($result_su8)){
                            while($row1 = mysqli_fetch_assoc($result_su8)){
                                ?>
                                    <tr>
                                        <td><?php echo $row1['NAME']; ?></td>
                                        <th>
                                        <form action="../database/update-sub.php" method="POST">
                                            <input type="hidden" name="del2" value="<?php echo $row1['ID']; ?>">
                                            <div style="display: flex;align-items: center; justify-content: space-around;">
                                            <input class="del_btn" type="submit" name="nam2" value="حذف">
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
<!-- ======================================================== -->
                                            


<?php
    mysqli_free_result($result);
    mysqli_close($connect)
?>

    <!-- ================================ -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- <script src="main.js"></script> -->
    <script>
        let li7 = document.getElementById("li7"); //الرئيسية
        let body = document.querySelector("body");
        var li33 = document.getElementById('li33');
        body.onload = function () {
        li7.classList.add('activated');
        li33.classList.add('hovered');
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