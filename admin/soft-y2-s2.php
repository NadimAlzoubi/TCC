<!DOCTYPE html>
<html lang="en" id="html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assest/css/style.css">
    <link rel="stylesheet" href="../assest/css/adminstyle.css">
    <link rel="icon" type="image/png" href="../img/tcc.png">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
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
                    <a href="student-register.php">
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
                <span>قسم البرمجيات - السنة الثانية - الفصل الثاني</span>
            </div>
        <div class="mark_main">
                <!-- <form action="#" id="myform"> -->
                <div class="fieldset1" style="width: 100%;">
                    <?php
                    $username = 'root';
                    $password = '';
                    $database = new PDO("mysql:host=localhost; dbname=tcc_db;", $username, $password);
                    //    var_dump($database);
                    if (isset($_POST['addpro'])) {
                        $stu_id = $_POST['stu_id'];
                        $stu_name = $_POST['stu_name'];
                        $sub_namep = $_POST['sub_namep'];
                        $business_degreep = $_POST['business_degreep'];
                        $exam_degreep = $_POST['exam_degreep'];
                        $totalp = $_POST['totalp'];
                        $resultp = $_POST['resultp'];
                        $addDataM = $database->prepare("INSERT INTO y2c2_programming4(stu_id,stu_name,sub_namep,business_degreep,exam_degreep,totalp,resultp)
                        VALUES(:stu_id,:stu_name,:sub_namep,:business_degreep,:exam_degreep,:totalp,:resultp)");

                        $addDataM->bindParam("stu_id", $stu_id);
                        $addDataM->bindParam("stu_name", $stu_name);
                        $addDataM->bindParam("sub_namep", $sub_namep);
                        $addDataM->bindParam("business_degreep", $business_degreep);
                        $addDataM->bindParam("exam_degreep", $exam_degreep);
                        $addDataM->bindParam("totalp", $totalp);
                        $addDataM->bindParam("resultp", $resultp);
                        if ($addDataM->execute()) {
                            echo "<script>
                            alert('تم ارسال بيانات الطالب :);
                            </script>";
                        } else {
                            echo "لم يتم  ارسال البيانات ";
                        }
                    }
                    if (isset($_POST['add_softeng'])) {
                        $stu_id = $_POST['stu_id'];
                        $stu_name = $_POST['stu_name'];
                        $sub_names = $_POST['sub_names'];
                        $business_degrees = $_POST['business_degrees'];
                        $exam_degrees = $_POST['exam_degrees'];
                        $totals = $_POST['totals'];
                        $results = $_POST['results'];
                        $addDataM = $database->prepare("INSERT INTO y2c2_softwareenginering(stu_id,stu_name,sub_names,business_degrees,exam_degrees,totals,results)
                        VALUES(:stu_id,:stu_name,:sub_names,:business_degrees,:exam_degrees,:totals,:results)");

                        $addDataM->bindParam("stu_id", $stu_id);
                        $addDataM->bindParam("stu_name", $stu_name);
                        $addDataM->bindParam("sub_names", $sub_names);
                        $addDataM->bindParam("business_degrees", $business_degrees);
                        $addDataM->bindParam("exam_degrees", $exam_degrees);
                        $addDataM->bindParam("totals", $totals);
                        $addDataM->bindParam("results", $results);
                        if ($addDataM->execute()) {
                            echo "تم ارسال البيانات ";
                        } else {
                            echo "لم يتم  ارسال البيانات ";
                        }
                    }
                    if (isset($_POST['add_maltimedea'])) {
                        $stu_id = $_POST['stu_id'];
                        $stu_name = $_POST['stu_name'];
                        $sub_namem = $_POST['sub_namem'];
                        $business_degreem = $_POST['business_degreem'];
                        $exam_degreem = $_POST['exam_degreem'];
                        $totalm = $_POST['totalm'];
                        $resultm = $_POST['resultm'];
                        $addDataM = $database->prepare("INSERT INTO y2c2_multemidiasystam(stu_id,stu_name,sub_namem,business_degreem,exam_degreem,totalm,resultm)
                        VALUES(:stu_id,:stu_name,:sub_namem,:business_degreem,:exam_degreem,:totalm,:resultm)");

                        $addDataM->bindParam("stu_id", $stu_id);
                        $addDataM->bindParam("stu_name", $stu_name);
                        $addDataM->bindParam("sub_namem", $sub_namem);
                        $addDataM->bindParam("business_degreem", $business_degreem);
                        $addDataM->bindParam("exam_degreem", $exam_degreem);
                        $addDataM->bindParam("totalm", $totalm);
                        $addDataM->bindParam("resultm", $resultm);
                        if ($addDataM->execute()) {
                            echo "تم ارسال البيانات ";
                        } else {
                            echo "لم يتم  ارسال البيانات ";
                        }
                    }
                    if (isset($_POST['addENG4'])) {
                        $stu_id = $_POST['stu_id'];
                        $stu_name = $_POST['stu_name'];
                        $sub_namee = $_POST['sub_namee'];
                        $business_degreee = $_POST['business_degreee'];
                        $exam_degreee = $_POST['exam_degreee'];
                        $totale = $_POST['totale'];
                        $resulte = $_POST['resulte'];
                        $addDataM = $database->prepare("INSERT INTO y2c2_english4(stu_id,stu_name,sub_namee,business_degreee,exam_degreee,totale,resulte)
                        VALUES(:stu_id,:stu_name,:sub_namee,:business_degreee,:exam_degreee,:totale,:resulte)");

                        $addDataM->bindParam("stu_id", $stu_id);
                        $addDataM->bindParam("stu_name", $stu_name);
                        $addDataM->bindParam("sub_namee", $sub_namee);
                        $addDataM->bindParam("business_degreee", $business_degreee);
                        $addDataM->bindParam("exam_degreee", $exam_degreee);
                        $addDataM->bindParam("totale", $totale);
                        $addDataM->bindParam("resulte", $resulte);
                        if ($addDataM->execute()) {
                            echo "تم ارسال البيانات ";
                        } else {
                            echo "لم يتم  ارسال البيانات ";
                        }
                    }
                    if (isset($_POST['addinfo'])) {
                        $stu_id = $_POST['stu_id'];
                        $stu_name = $_POST['stu_name'];
                        $sub_namei = $_POST['sub_namei'];
                        $business_degreei = $_POST['business_degreei'];
                        $exam_degreei = $_POST['exam_degreei'];
                        $totali = $_POST['totali'];
                        $resulti = $_POST['resulti'];
                        $addDataM = $database->prepare("INSERT INTO y2c2_infosecurty(stu_id,stu_name,sub_namei,business_degreei,exam_degreei,totali,resulti)
                            VALUES(:stu_id,:stu_name,:sub_namei,:business_degreei,:exam_degreei,:totali,:resulti)");

                        $addDataM->bindParam("stu_id", $stu_id);
                        $addDataM->bindParam("stu_name", $stu_name);
                        $addDataM->bindParam("sub_namei", $sub_namei);
                        $addDataM->bindParam("business_degreei", $business_degreei);
                        $addDataM->bindParam("exam_degreei", $exam_degreei);
                        $addDataM->bindParam("totali", $totali);
                        $addDataM->bindParam("resulti", $resulti);
                        if ($addDataM->execute()) {
                            echo "تم ارسال البيانات ";
                        } else {
                            echo "لم يتم  ارسال البيانات ";
                        }
                    }
                    if (isset($_POST['y2c2_infosecurty'])) {
                        $stu_id = $_POST['stu_id'];
                        $stu_name = $_POST['stu_name'];
                        $sub_namea = $_POST['sub_namea'];
                        $business_degreea = $_POST['business_degreea'];
                        $exam_degreea = $_POST['exam_degreea'];
                        $totala = $_POST['totala'];
                        $resulta = $_POST['resulta'];
                        $addDataM = $database->prepare("INSERT INTO y2c2_database2(stu_id,stu_name,sub_namea,business_degreea,exam_degreea,totala,resulta)
                                VALUES(:stu_id,:stu_name,:sub_namea,:business_degreea,:exam_degreea,:totala,:resulta)");

                        $addDataM->bindParam("stu_id", $stu_id);
                        $addDataM->bindParam("stu_name", $stu_name);
                        $addDataM->bindParam("sub_namea", $sub_namea);
                        $addDataM->bindParam("business_degreea", $business_degreea);
                        $addDataM->bindParam("exam_degreea", $exam_degreea);
                        $addDataM->bindParam("totala", $totala);
                        $addDataM->bindParam("resulta", $resulta);
                        if ($addDataM->execute()) {
                            echo "تم ارسال البيانات ";
                            echo '<script>document.loction="http://localhost/tcc-project/admin/exam-admin/soft-y2-s2.php";</script>';
                        } else {
                            echo "لم يتم  ارسال البيانات ";
                        }
                    }
                    if (isset($_POST['addDB2'])) {
                        $stu_id = $_POST['stu_id'];
                        $stu_name = $_POST['stu_name'];
                        $sub_named = $_POST['sub_named'];
                        $business_degreed = $_POST['business_degreed'];
                        $exam_degreed = $_POST['exam_degreed'];
                        $totald = $_POST['totald'];
                        $resultd = $_POST['resultd'];
                        $addDataM = $database->prepare("INSERT INTO y2c2_database2(stu_id,stu_name,sub_named,business_degreed,exam_degreed,totald,resultd)
                                    VALUES(:stu_id,:stu_name,:sub_named,:business_degreed,:exam_degreed,:totald,:resultd)");

                        $addDataM->bindParam("stu_id", $stu_id);
                        $addDataM->bindParam("stu_name", $stu_name);
                        $addDataM->bindParam("sub_named", $sub_named);
                        $addDataM->bindParam("business_degreed", $business_degreed);
                        $addDataM->bindParam("exam_degreed", $exam_degreed);
                        $addDataM->bindParam("totald", $totald);
                        $addDataM->bindParam("resultd", $resultd);
                        if ($addDataM->execute()) {
                            echo "تم ارسال البيانات ";
                        } else {
                            echo "لم يتم  ارسال البيانات ";
                        }
                    }
                    ?>
                    <?php
                    // $username = 'root';
                    // $password = '';
                    // $database = new PDO("mysql:host=localhost; dbname=tcc_mahmoud;", $username, $password);
                    if (isset($_POST['delPRO4'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE y2c2_programming4 SET business_degree=0,exam_degree=0,total=0,resulta='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/exam-admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['del_maltimedea'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE y2c2_multemidiasystam SET business_degree=0,exam_degree=0,total=0,resulta='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/exam-admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['del_softeng'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE y2c2_softwareenginering SET business_degree=0,exam_degree=0,total=0,resulta='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/exam-admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['del_INFO_SYCURTY'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE y2c2_infosecurty SET business_degree=0,exam_degree=0,total=0,resulta='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/exam-admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['del_DB2'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE y2c2_database2 SET business_degree=0,exam_degree=0,total=0,resulta='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/exam-admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['del_ENG3'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE y2c2_english4 SET business_degree=0,exam_degree=0,total=0,resulta='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/exam-admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['del_ENG4'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE y2c1_info_system SET business_degree=0,exam_degree=0,total=0,resulta='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/exam-admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    ?>
                    <form method='POST'>
                        <div class="indiv">
                            <label for="" style="font-weight: bolder;position: relative; left: -92px; ">الرقم الامتحاني للطالب :</label>
                            <input type="number" name="stu_id" id="" style="position: relative; left: 110px;text-align:center; width: 200px;" class="form-control" required>
                            <label for="" style="font-weight: bolder;">اسم الطالب :</label>
                            <input type="text" name="stu_name" id="name" style="position: relative; left: 200px;text-align:center; width: 200px;" class="form-control">
                        </div>
                        <!-- =============================================== -->
                        <div class="indiv">
                            <!-- <label for="" style="font-weight: bolder;">برمجة 2</label> -->
                            <input type="text" name="sub_namep" value="برمــجــة متقدمة2" class="form-control" style="padding-left: 0px; background: none; width: 125px;">
                            <input type="number" id="inp1" name="business_degreep" placeholder="درجة الاعمال" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="number" id="inp2" name="exam_degreep" placeholder="درجة الامتحان" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" oninput="suma()" id="inp3" name="totalp" placeholder="الـمـجـمـوع" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" id="result" name="resultp" placeholder="النـتـيـجـة" class="form-control" style="margin-right: 10px; width:125px;">
                            <input type="submit" id="" name="addpro" value=" حــفــظ " class="btn btn-primary" style="position: relative; right: 20px; width: 125px;">
                            <button type="submit" class="btn btn-danger" name="delPRO4" style="position: relative; right: 20px; width: 125px;">تصفير المادة</button>
                        </div>
                        <!-- ============================================== -->
                        <div class="indiv">
                            <!-- <label for="" style="font-weight: bolder;">تصميم مواقع ويب</label> -->
                            <input type="text" name="sub_namem" value="نظم وسائط متعددة" class="form-control" style="padding-left: 0px; background: none; width: 125px;">
                            <input type="number" id="inp8" name="business_degreem" placeholder="درجة الاعمال" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="number" id="inp9" name="exam_degreem" placeholder="درجة الامتحان" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" oninput="math()" id="inp11" name="totalm" placeholder="الـمـجـمـوع" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" id="ma" name="resultm" placeholder="النـتـيـجـة" class="form-control" style="margin-right: 10px; width:125px;">
                            <input type="submit" id="" name="add_maltimedea" value=" حــفــظ " class="btn btn-primary" style="position: relative; right: 20px; width: 125px;">
                            <input type="submit" id="" name="del_maltimedea" value="تصفير المادة" class="btn btn-dark" style="position: relative; right: 20px; width: 125px;">
                        </div>
                        <!-- =============================================== -->
                        <div class="indiv" style="font-weight: bolder;">
                            <!-- <label for="">  شبكات حاسوبية</label> -->
                            <input type="text" name="sub_names" value=" هندسة برمجيات " class="form-control" style="padding-left: 0px; background: none; width: 125px;">
                            <input type="number" id="ini" name="business_degrees" placeholder="درجة الاعمال" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="number" id="inii" name="exam_degrees" placeholder="درجة الامتحان" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" oninput="ee()" id="iniii" name="totals" placeholder="الـمـجـمـوع" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" id="inr" name="results" placeholder="النـتـيـجـة" class="form-control" style="margin-right: 10px; width:125px;">
                            <input type="submit" id="" name="add_softeng" value=" حــفــظ " class="btn btn-primary" style="position: relative; right: 20px; width: 125px;">
                            <input type="submit" id="" name="del_softeng" value="تصفير المادة" class="btn btn-danger" style="position: relative; right: 20px; width: 125px;">
                        </div>
                        <!-- =============================================== -->
                        <div class="indiv">

                            <input type="text" name="sub_namei" value=" امن معلومات " class="form-control" style="padding-left: 0px; background: none; width: 125px;">
                            <input type="number" id="inf1" name="business_degreei" placeholder="درجة الاعمال" class="form-control" style="margin-right: 10px; width: 125px;" min="0" max="24">
                            <input type="number" id="inf2" name="exam_degreei" placeholder="درجة الامتحان" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" oninput="infos()" id="inf3" name="totali" placeholder="الـمـجـمـوع" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" id="info" name="resulti" placeholder="النـتـيـجـة" class="form-control" style="margin-right: 10px; width:125px;">
                            <input type="submit" id="" name="y2c2_infosecurty" value=" حــفــظ " class="btn btn-primary" style="position: relative; right: 20px; width: 125px;">
                            <input type="submit" id="" name="del_INFO_SYCURTY" value="تصفير المادة" class="btn btn-dark" style="position: relative; right: 20px; width: 125px;">
                        </div>
                        <!-- =============================================== -->
                        <div class="indiv">
                            <!-- <label for="" style="font-weight: bolder;">رياضياj2</label> -->
                            <input type="text" name="sub_named" value=" فواعد معطيات2 " class="form-control" style="padding-left: 0px; background: none; width: 125px;">
                            <input type="number" id="sest1" name="business_degreed" placeholder="درجة الاعمال" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="number" id="sest2" name="exam_degreed" placeholder="درجة الامتحان" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" oninput="system()" id="sest3" name="totald" placeholder="الـمـجـمـوع" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" id="sest4" name="resultd" placeholder="النـتـيـجـة" class="form-control" style="margin-right: 10px; width:125px;">
                            <input type="submit" id="" name="addDB2" value=" حــفــظ " class="btn btn-primary" style="position: relative; right: 20px; width: 125px;">
                            <input type="submit" id="" name="del_DB2" value="تصفير المادة" class="btn btn-danger" style="position: relative; right: 20px; width: 125px;">
                        </div>
                        <!-- =============================================== -->
                        <div class="indiv" style="font-weight: bolder;">
                            <!-- <label for="">لـــغــة أجــنــبــيــــة 3</label> -->
                            <input type="text" name="sub_namee" value="لغة اجنبية 4" class="form-control" style="padding-left: 0px; background: none; width: 125px;">
                            <input type="number" id="inp5" name="business_degreee" placeholder="درجة الاعمال" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="number" id="inp6" name="exam_degreee" placeholder="درجة الامتحان" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" oninput="sume()" id="in3" name="totale" placeholder="الـمـجـمـوع" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" id="en" name="resulte" placeholder="النـتـيـجـة" class="form-control" style="margin-right: 10px; width:125px;">
                            <input type="submit" id="" name="addENG4" value=" حــفــظ " class="btn btn-primary" style="position: relative; right: 20px; width: 125px;">
                            <input type="submit" id="" name="del_ENG4" value="تصفير المادة" class="btn btn-dark" style="position: relative; right: 20px; width: 125px;">
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
                        x12.value = "نـــاجــــح";
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
                var fo1 = document.getElementById("inf1");
                var fo2 = document.getElementById("inf2");
                var fo3 = document.getElementById("inf3");
                var inf = document.getElementById("info");

                function infos() {
                    fo3.value = Number(fo1.value) + Number(fo2.value);
                    if (fo3.value >= 50) {
                        inf.value = "نـاجــح";
                    } else {
                        inf.value = "راسب";
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

