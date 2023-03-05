<?php 
include ('../database/connect.php');
?>
<!DOCTYPE html>
<html lang="en" id="html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assest/css/style.css">
    <link rel="stylesheet" href="../assest/css/adminstyle.css">
    <link rel="icon" type="image/png" href="../img/tcc.png">

    <title>TCC-Stu</title>
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
                <li id="li6">
                    <a href="post.php">
                        <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                        <span class="title">المنشورات</span>
                    </a>
                </li>
            </ul>
        </div>




        <div class="main">
            <div class="mark_main">
                <!-- <form action="#" id="myform"> -->
                    <!-- <div class="fieldset1">
                            <div class="indiv">
                                <label for="">أسس الهندسة كهربائية</label>
                                <input type="number" placeholder="الأعمال">
                                <input type="number" placeholder="الامتحان">
                            </div>   
                            <div class="indiv">
                                <label for="">رياضيات حاسوبية 1</label>
                                <input type="number" placeholder="الأعمال">
                                <input type="number" placeholder="الامتحان">
                            </div>   
                            <div class="indiv">
                                <label for="">مدخل إلى الحاسوب</label>
                                <input type="number" placeholder="الأعمال">
                                <input type="number" placeholder="الامتحان">
                            </div>   
                            <div class="indiv">
                                <label for="">برمجة 1</label>
                                <input type="number" placeholder="الأعمال">
                                <input type="number" placeholder="الامتحان">
                            </div>   
                            <div class="indiv">
                                <label for="">نظم تشغيل 1</label>
                                <input type="number" placeholder="الأعمال">
                                <input type="number" placeholder="الامتحان">
                            </div>   
                            <div class="indiv">
                                <label for="">لغة أجنبية 1</label>
                                <input type="number" placeholder="الأعمال">
                                <input type="number" placeholder="الامتحان">
                            </div>   
                            <div class="indiv">
                                <label for="">لغة عربية</label>
                                <input type="number" placeholder="الأعمال">
                                <input type="number" placeholder="الامتحان">
                            </div>
                    </div> -->
                <!-- </form> -->


                <?php
                error_reporting(0);
                include('connect.php');    
                if(isset($_POST['nam6'])){
                    $delid6 = $_POST['del6'];
                    $delete6 = "DELETE FROM stu_reg WHERE stu_id = '$delid6'";
                    $del_run6 = mysqli_query($connect, $delete6);
                    if($del_run6){
                        echo '<script>alert("تم الحذف بنجاح");</script>';
                        echo '<script>document.location = "http://localhost/TCC-Project/admin/TCC-exam-admin.php"</script>';
                    } else {
                        echo '<script>alert("حدث خطأ: لم يتم الحذف ");</script>';
                    }
                }
                                            
                if(isset($_POST['up_nam'])){             
                    $delid6 = $_POST['del6'];
                    $sql_s = "SELECT * FROM stu_reg WHERE stu_id = '$delid6'";
                    $result = mysqli_query($connect, $sql_s);
                    $row = mysqli_fetch_assoc($result);
                }
?>                        





                <div class="stu_info1">
                    <form method="POST">
                <fieldset class="indiv">
                    <legend><span>تحديث بيانات طالب</span></legend>
                    <div class="indiv1">
                        <label for="">أدخل الاسم الجديد</label>
                        <input type="text" name="stu_name11" value="<?php echo $row['stu_name']; ?>" style="width: 200px;">
                    </div>
                    <!-- <div class="indiv1">
                        <label for="">أدخل الرقم الامتحاني الجديد</label>
                        <input type="number" name="stu_id11" value="<?php //echo $row['stu_id']; ?>" style="width: 200px;">
                    </div> -->
                    <div class="indiv1">
                    <label for="">اختر الاختصاص الجديد</label>
                    <select class="indiv_select" name="stu_mag11" style="width: 200px;">
                          <option value="<?php echo $row['stu_mag']; ?>"><?php echo $row['stu_mag']; ?></option>
                          <option value="هندسة البرمجيات">هندسة البرمجيات</option>
                          <option value="هندسة الحواسيب">هندسة الحواسيب</option>
                        </select>
                    </div>
                    <input type="hidden" name="del6" value="<?php echo $row['stu_id']; ?>">

                    <div class="btn_div"><input class="sub_btn1" name="stu_add11" type="submit" value="تحديث" ></div>
                </fieldset>
                </form>
                </div>    
            </div>


            <?php                     
            $stu_name11 = $_POST['stu_name11'];
            $stu_mag11 = $_POST['stu_mag11'];
            $stu_id11 = $_POST['stu_id11'];
            $stu_add11 = $_POST['stu_add11'];
            if(isset($stu_add11)){
                $delid6 = $_POST['del6'];
                $sql_11 = "UPDATE stu_reg SET stu_name = '$stu_name11', stu_mag = '$stu_mag11' WHERE stu_id = '$delid6'";

                $result11 = mysqli_query($connect, $sql_11);
                if($result11){
                    echo '<script>alert("تم التحديث بنجاح");</script>';
                    echo '<script>document.location = "http://localhost/TCC-Project/admin/TCC-exam-admin.php"</script>';
                } else {
                    echo '<script>alert("حدث خطأ: لم يتم التحدبث ");</script>';
                }

            }
    ?>







            
        </div>

    <!-- ================================ -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- <script src="main.js"></script> -->
    <script>
        let li7 = document.getElementById("li7"); //الرئيسية
        let li22 = document.getElementById("li22"); //الرئيسية
        let body = document.querySelector("body");
        body.onload = function () {
        li7.classList.add('activated');
        li22.classList.add('hovered');
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

