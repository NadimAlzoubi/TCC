
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

<div class="close-div main">مغلق للصيانة</div>

<style>
    .close-div{
        position: absolute;
        z-index: 999999;
        font-size: 6em;
        /* height: calc(100vh - 4.5rem); */
        /* width: calc(100vw - 80px); */
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #00000099;
        font-weight: 900;
    }
</style>

    <!-- =====================header=================== -->
    <header class="header" id="header">

        <nav class="nav">

        <div class="nav_img">المعهد التقاني للحاسوب</div>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list" style="margin: 0; padding: 0">
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
        <div class="exam_title">
                <span>قسم البرمجيات - السنة الأولى - الفصل الثاني</span>
            </div>
        <div class="mark_main">
                <!-- <form action="#" id="myform"> -->
                <div class="fieldset1" style="width: 100%;">
                    <?php
                    include('../database/connect.php');
            
                    if (isset($_POST['addpro'])) {
                        $stu_id = $_POST['stu_id'];
                        $business_degreep = $_POST['business_degreep'];
                        $exam_degreep = $_POST['exam_degreep'];
                        $totalp = $_POST['totalp'];
                        $resultp = $_POST['resultp'];
                        mysqli_query($connect, "UPDATE programming2 SET business_degreep = '$business_degreep', exam_degreep = '$exam_degreep', totalp = '$totalp', resultp = '$resultp' WHERE stu_id = '$stu_id'");
                    }
                    if (isset($_POST['addweb'])) {
                        $stu_id = $_POST['stu_id'];
                        $business_degreew = $_POST['business_degreew'];
                        $exam_degreew = $_POST['exam_degreew'];
                        $totalw = $_POST['totalw'];
                        $resultw = $_POST['resultw'];
                        mysqli_query($connect, "UPDATE c2_webdesigin SET business_degreew = '$business_degreew', exam_degreew = '$exam_degreew', totalw = '$totalw', resultw = '$resultw' WHERE stu_id = '$stu_id'");
                    }
                    if (isset($_POST['addnetwork'])) {
                        $stu_id = $_POST['stu_id'];
                        $business_degreen = $_POST['business_degreen'];
                        $exam_degreen = $_POST['exam_degreen'];
                        $totaln = $_POST['totaln'];
                        $resultn = $_POST['resultn'];
                        mysqli_query($connect, "UPDATE c2_networks SET business_degreen = '$business_degreen', exam_degreen = '$exam_degreen', totaln = '$totaln', resultn = '$resultn' WHERE stu_id = '$stu_id'");
                    }
                    if (isset($_POST['addsystem'])) {
                        $stu_id = $_POST['stu_id'];
                        $business_degrees = $_POST['business_degrees'];
                        $exam_degrees = $_POST['exam_degrees'];
                        $totals = $_POST['totals'];
                        $results = $_POST['results'];
                        mysqli_query($connect, "UPDATE c2_systems2 SET business_degrees = '$business_degrees', exam_degrees = '$exam_degrees', totals = '$totals', results = '$results' WHERE stu_id = '$stu_id'");
                    }
                    if (isset($_POST['addmath2'])) {
                        $stu_id = $_POST['stu_id'];
                        $business_degreem = $_POST['business_degreem'];
                        $exam_degreem = $_POST['exam_degreem'];
                        $totalm = $_POST['totalm'];
                        $resultm = $_POST['resultm'];
                        mysqli_query($connect, "UPDATE c2_maht2 SET business_degreem = '$business_degreem', exam_degreem = '$exam_degreem', totalm = '$totalm', resultm = '$resultm' WHERE stu_id = '$stu_id'");
                    }
                    if (isset($_POST['addENG2'])) {
                        $stu_id = $_POST['stu_id'];
                        $business_degreee = $_POST['business_degreee'];
                        $exam_degreee = $_POST['exam_degreee'];
                        $totale = $_POST['totale'];
                        $resulte = $_POST['resulte'];
                        mysqli_query($connect, "UPDATE c2_english2 SET business_degreee = '$business_degreee', exam_degreee = '$exam_degreee', totale = '$totale', resulte = '$resulte' WHERE stu_id = '$stu_id'");
                    }
                    if (isset($_POST['addc2_culture'])) {
                        $stu_id = $_POST['stu_id'];
                        $business_degreec = $_POST['business_degreec'];
                        $exam_degreec = $_POST['exam_degreec'];
                        $totalc = $_POST['totalc'];
                        $resultc = $_POST['resultc'];
                        mysqli_query($connect, "UPDATE c2_culture SET business_degreec = '$business_degreec', exam_degreec = '$exam_degreec', totalc = '$totalc', resultc = '$resultc' WHERE stu_id = '$stu_id'");
                    }
                    ?>
                    <?php
                    if (isset($_POST['delpro2'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE programming2 SET business_degree=0,exam_degree=0,total=0,resulta='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['delweb'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE c2_webdesigin SET business_degree=0,exam_degree=0,total=0,resulta='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['delnet'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE c2_networks SET business_degree=0,exam_degree=0,total=0,resulta='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['delsystem2'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE c2_systems2 SET business_degree=0,exam_degree=0,total=0,resulta='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['delmath2'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE c2_maht2 SET business_degree=0,exam_degree=0,total=0,resulta='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['delENG2'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE c2_english2 SET business_degree=0,exam_degree=0,total=0,resulta='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['del_culture'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE c2_english2 SET business_degree=0,exam_degree=0,total=0,resulta='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }

                    ?>


<style>
                    .btn-primary{
                        background-color: var(--blue);
                        color: var(--dark-white);
                    }
                    .btn-danger{
                        background-color: #E60023;
                        color: var(--dark-white);
                    }
                </style>

                    <form method='POST'>
                        <div class="indiv" style="display: inline-block;">
                            <label for="" style="font-weight: bolder; margin-left:15px">أدخل الرقم الامتحاني</label>
                            <input type="number" name="stu_id" id="" style="text-align:center; width:100px;" required>
                            <!-- <label for="" style="font-weight: bolder;">اسم الطالب :</label>
                            <input type="text" name="stu_name" id="" style="position: relative; left: 200px;text-align:center; width: 200px;"> -->
                        </div>
                        <!-- =============================================== -->
                        <div class="indiv">
                            <!-- <label for="" style="font-weight: bolder;">برمجة 2</label> -->
                            <input type="text" name="sub_namep2" value="برمجة 2" style="padding-left: 0px; width:200px; text-align: right; background: none;">
                            <div>
                            <input type="number" id="inp1" name="business_degreep" placeholder="درجة الاعمال" style="margin-right: 10px;">
                            <input type="number" id="inp2" name="exam_degreep" placeholder="درجة الامتحان" style="margin-right: 10px;">
                            <input type="text" oninput="suma()" id="inp3" name="totalp" placeholder="المجموع" style="margin-right: 10px;">
                            <input type="text" id="result" name="resultp" placeholder="النتيجة" style="margin-right: 10px;">
                            <input type="submit" id="" name="addpro" value=" حفظ " class="btn btn-primary">
                            <input type="submit" class="btn btn-danger" name="delpro2" value="تصفير المادة">
                            </div>
                        </div>
                        <!-- ============================================== -->
                        <div class="indiv">
                            <!-- <label for="" style="font-weight: bolder;">تصميم مواقع ويب</label> -->
                            <input type="text" name="sub_namew" value="تصميم مواقع ويب" style="padding-left: 0px; width:200px; text-align: right; background: none;">
                            <div>
                            <input type="number" id="inp8" name="business_degreew" placeholder="درجة الاعمال" style="margin-right: 10px;">
                            <input type="number" id="inp9" name="exam_degreew" placeholder="درجة الامتحان" style="margin-right: 10px;">
                            <input type="text" oninput="math()" id="inp11" name="totalw" placeholder="المجموع" style="margin-right: 10px;">
                            <input type="text" id="ma" name="resultw" placeholder="النتيجة" style="margin-right: 10px;">
                            <input type="submit" id="" name="addweb" value=" حفظ " class="btn btn-primary">
                            <input type="submit" id="" name="delweb" value="تصفير المادة" class="btn btn-danger">
                            </div>
                        </div>
                        <!-- =============================================== -->
                        <div class="indiv" style="font-weight: bolder;">
                            <!-- <label for="">  شبكات حاسوبية</label> -->
                            <input type="text" name="sub_namen" value="شبكات حاسوبية" style="padding-left: 0px; width:200px; text-align: right; background: none;">
                            <div>
                            <input type="number" id="ini" name="business_degreen" placeholder="درجة الاعمال" style="margin-right: 10px;">
                            <input type="number" id="inii" name="exam_degreen" placeholder="درجة الامتحان" style="margin-right: 10px;">
                            <input type="text" oninput="ee()" id="iniii" name="totaln" placeholder="المجموع" style="margin-right: 10px;">
                            <input type="text" id="inr" name="resultn" placeholder="النتيجة" style="margin-right: 10px;">
                            <input type="submit" id="" name="addnetwork" value=" حفظ " class="btn btn-primary">
                            <input type="submit" id="" name="delnet" value="تصفير المادة" class="btn btn-danger">
                            </div>
                        </div>
                        <!-- =============================================== -->
                        <div class="indiv">
                            <!-- <label for="" style="font-weight: bolder;">نظم تشغيل 2</label> -->
                            <input type="text" name="sub_names" value="نظم تشغيل 2 " style="padding-left: 0px; width:200px; text-align: right; background: none;">
                            <div>
                            <input type="number" id="inpro1" name="business_degrees" placeholder="درجة الاعمال" style="margin-right: 10px;">
                            <input type="number" id="inpro2" name="exam_degrees" placeholder="درجة الامتحان" style="margin-right: 10px;">
                            <input type="text" oninput="prog()" id="inpro3" name="totals" placeholder="المجموع" style="margin-right: 10px;">
                            <input type="text" id="repro" name="results" placeholder="النتيجة" style="margin-right: 10px;">
                            <input type="submit" id="" name="addsystem" value=" حفظ " class="btn btn-primary">
                            <input type="submit" id="" name="delsystem2" value="تصفير المادة" class="btn btn-danger">
                            </div>
                        </div>
                        <!-- =============================================== -->
                        <div class="indiv">
                            <!-- <label for="" style="font-weight: bolder;">رياضياj2</label> -->
                            <input type="text" name="sub_namem" value="رياضيات حاسوبية 2" style="padding-left: 0px; width:200px; text-align: right; background: none;">
                            <div>
                            <input type="number" id="sest1" name="business_degreem" placeholder="درجة الاعمال" style="margin-right: 10px;">
                            <input type="number" id="sest2" name="exam_degreem" placeholder="درجة الامتحان" style="margin-right: 10px;">
                            <input type="text" oninput="system()" id="sest3" name="totalm" placeholder="المجموع" style="margin-right: 10px;">
                            <input type="text" id="sest4" name="resultm" placeholder="النتيجة" style="margin-right: 10px;">
                            <input type="submit" id="" name="addmath2" value=" حفظ " class="btn btn-primary">
                            <input type="submit" id="" name="delmath2" value="تصفير المادة" class="btn btn-danger">
                            </div>
                        </div>
                        <!-- =============================================== -->
                        <div class="indiv" style="font-weight: bolder;">
                            <!-- <label for="">لــغــة أجــنــبــيــــة 2</label> -->
                            <input type="text" name="sub_namee" value="لغة أجنبية 2" style="padding-left: 0px; width:200px; text-align: right; background: none;">
                            <div>
                            <input type="number" id="inp5" name="business_degreee" placeholder="درجة الاعمال" style="margin-right: 10px;">
                            <input type="number" id="inp6" name="exam_degreee" placeholder="درجة الامتحان" style="margin-right: 10px;">
                            <input type="text" oninput="sume()" id="in3" name="totale" placeholder="المجموع" style="margin-right: 10px;">
                            <input type="text" id="en" name="resulte" placeholder="النتيجة" style="margin-right: 10px;">
                            <input type="submit" id="" name="addENG2" value=" حفظ " class="btn btn-primary">
                            <input type="submit" id="" name="delENG2" value="تصفير المادة" class="btn btn-danger">
                            </div>
                        </div>
                        <!-- =============================================== -->
                        <div class="indiv">
                            <!-- <label for="" style="font-weight: bolder;">ثقافة </label> -->
                            <input type="text" name="sub_namec" value="ثقافة" style="padding-left: 0px; width:200px; text-align: right; background: none;">
                            <div>
                            <input type="number" id="ar1" name="business_degreec" placeholder="درجة الاعمال" style="margin-right: 10px;">
                            <input type="text" id="ar2" name="exam_degreec" placeholder="درجة الامتحان" style="margin-right: 10px;">
                            <input type="text" id="ar3" name="totalc" placeholder="المجموع" style="margin-right: 10px;">
                            <input type="text" id="ar4" oninput="sumar()" name="resultc" placeholder="النتيجة" style="margin-right: 10px;">
                            <input type="submit" id="" name="addc2_culture" value="حفظ" class="btn btn-primary">
                            <input type="submit" id="" name="del_culture" value="تصفير المادة" class="btn btn-danger">
                            </div>
                        </div>
                        <!-- =============================================== -->
                    </form>
                </div>
            </div>
        </div>



    <!-- ================================ -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- <script src="main.js"></script> -->
    <script>


        var s1 = document.getElementById("sest1");
        var s2 = document.getElementById("sest2");
        var s3 = document.getElementById("sest3");
        var s4 = document.getElementById("sest4");

        function system() {
            s3.value = Number(s1.value) + Number(s2.value);
            if (s3.value >= 60) {
                s4.value = "نـــاجــــح";
            } else {
                s4.value = "راســـــب";
            }
        }
        var p1 = document.getElementById("inpro1");
        var p2 = document.getElementById("inpro2");
        var p3 = document.getElementById("inpro3");
        var p4 = document.getElementById("repro");

        function prog() {
            p3.value = Number(p1.value) + Number(p2.value);
            if (p3.value >= 60) {
                p4.value = "نـــاجــــح";
            } else {
                p4.value = "راســـــب";
            }
        }
        var i1 = document.getElementById("ini");
        var i2 = document.getElementById("inii");
        var i3 = document.getElementById("iniii");
        var i4 = document.getElementById("inr");

        function ee() {
            i3.value = Number(i1.value) + Number(i2.value);
            if (i3.value >= 60) {
                i4.value = "نـــاجــــح";
            } else {
                i4.value = "راســـــب";
            }
        }
        var x1 = document.getElementById("inp1");
        var x2 = document.getElementById("inp2");
        var x3 = document.getElementById("inp3");
        var x4 = document.getElementById("result");
        var x7 = document.getElementById("ar");

        function suma() {
            x3.value = Number(x1.value) + Number(x2.value);
            if (x3.value >= 60) {
                x4.value = "نـــاجــــح";
            } else {
                x4.value = "راســـــب";
            }
        }
        var x8 = document.getElementById("inp8");
        var x9 = document.getElementById("inp9");
        var x11 = document.getElementById("inp11");
        var x12 = document.getElementById("ma");

        function math() {
            x11.value = Number(x8.value) + Number(x9.value);
            if (x11.value >= 50) {
                x12.value = "نـــاجـــح";
            } else {
                x12.value = "راســـــب";
            }
        }
        var e5 = document.getElementById("inp5");
        var e6 = document.getElementById("inp6");
        var e7 = document.getElementById("in3");
        var e8 = document.getElementById("en");

        function sume() {
            e7.value = Number(e5.value) + Number(e6.value);
            if (e7.value >= 50) {
                e8.value = "نـــاجــــح";
            } else {
                e8.value = "راســـــب";
            }
        }
    </script>
    <script>
        var a1 = document.getElementById("ar1");
        var a2 = document.getElementById("ar2");
        var a3 = document.getElementById("ar3");
        var a4 = document.getElementById("ar4");

        function sumar() {
            a3.value = Number(a1.value) + Number(a2.value);
            if (a3.value >= 50) {
                a4.value = "ناجح";
            } else {
                a4.value = "راسب";
            }
        }
    </script>

    <script>
        let li7 = document.getElementById("li7"); //الرئيسية
        let body = document.querySelector("body");
        body.onload = function () {
        li7.classList.add('activated');
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
var open_list = false;
navS.onclick = function () {
    if (open_list == false){
        sub_drobS.classList.add('sub_seas');
        sub_drobS.classList.remove('sub_seas_hiddenS');
        open_list = true;
    }
    else{
        sub_drobS.classList.remove('sub_seas');
        sub_drobS.classList.add('sub_seas_hiddenS');
        open_list = false;
    }
}
navH.onclick = function () {
    if (open_list == false){
        sub_drobH.classList.add('sub_seas');
        sub_drobH.classList.remove('sub_seas_hiddenH');
        open_list = true;
    }
    else{
        sub_drobH.classList.remove('sub_seas');
        sub_drobH.classList.add('sub_seas_hiddenH');
        open_list = false;
    }
}
/////////////////////////////////////////////////////////////////////////////////////
</script>
</body>
</html>

