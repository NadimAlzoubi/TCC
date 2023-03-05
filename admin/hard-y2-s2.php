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
                                <a href="soft-y2-s1.php">الفصل الثاني</a>
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
                <span>قسم الحواسيب - السنة الثانية - الفصل الثاني</span>
            </div>
        <div class="mark_main">
        <div class="fieldset1" style="width: 100%;">
                    <?php
                    $username = 'root';
                    $password = '';
                    $database = new PDO("mysql:host=localhost; dbname=tcc_db;", $username, $password);
                    // var_dump($database)    
                    if (isset($_POST['hy2s2_programming3'])) {
                        $stu_id = $_POST['stu_id'];
                        $stu_name = $_POST['stu_name'];
                        $sub_namep = $_POST['sub_namep'];
                        $business_degreep = $_POST['business_degreep'];
                        $exam_degreep = $_POST['exam_degreep'];
                        $totalp = $_POST['totalp'];
                        $resultp = $_POST['resultp'];
                        $addDataM = $database->prepare("INSERT INTO hy2s2_programming3(stu_id,stu_name,sub_namep,business_degreep,exam_degreep,totalp,resultp)
                             VALUES(:stu_id,:stu_name,:sub_namep,:business_degreep,:exam_degreep,:totalp,:resultp)");

                        $addDataM->bindParam("stu_id", $stu_id);
                        $addDataM->bindParam("stu_name", $stu_name);
                        $addDataM->bindParam("sub_namep", $sub_namep);
                        $addDataM->bindParam("business_degreep", $business_degreep);
                        $addDataM->bindParam("exam_degreep", $exam_degreep);
                        $addDataM->bindParam("totalp", $totalp);
                        $addDataM->bindParam("resultp", $resultp);
                        $addDataM->execute();
                    }
                    if (isset($_POST['hy2s2_internet_technolegie'])) {
                        $stu_id = $_POST['stu_id'];
                        $stu_name = $_POST['stu_name'];
                        $sub_named = $_POST['sub_named'];
                        $business_degreed = $_POST['business_degreed'];
                        $exam_degreed = $_POST['exam_degreed'];
                        $totald = $_POST['totald'];
                        $resultd = $_POST['resultd'];
                        $addDataM = $database->prepare("INSERT INTO hy2s2_internet_technolegie(stu_id,stu_name,sub_named,business_degreed,exam_degreed,totald,resultd)
                        VALUES(:stu_id,:stu_name,:sub_named,:business_degreed,:exam_degreed,:totald,:resultd)");

                        $addDataM->bindParam("stu_id", $stu_id);
                        $addDataM->bindParam("stu_name", $stu_name);
                        $addDataM->bindParam("sub_named", $sub_named);
                        $addDataM->bindParam("business_degreed", $business_degreed);
                        $addDataM->bindParam("exam_degreed", $exam_degreed);
                        $addDataM->bindParam("totald", $totald);
                        $addDataM->bindParam("resultd", $resultd);
                        $addDataM->execute();
                    }
                    if (isset($_POST['hy2s2_englesh4'])) {
                        $stu_id = $_POST['stu_id'];
                        $stu_name = $_POST['stu_name'];
                        $sub_namee = $_POST['sub_namee'];
                        $business_degreee = $_POST['business_degreee'];
                        $exam_degreee = $_POST['exam_degreee'];
                        $totale = $_POST['totale'];
                        $resulte = $_POST['resulte'];
                        $addDataM = $database->prepare("INSERT INTO hy2s2_englesh4(stu_id,stu_name,sub_namee,business_degreee,exam_degreee,totale,resulte)
                                    VALUES(:stu_id,:stu_name,:sub_namee,:business_degreee,:exam_degreee,:totale,:resulte)");

                        $addDataM->bindParam("stu_id", $stu_id);
                        $addDataM->bindParam("stu_name", $stu_name);
                        $addDataM->bindParam("sub_namee", $sub_namee);
                        $addDataM->bindParam("business_degreee", $business_degreee);
                        $addDataM->bindParam("exam_degreee", $exam_degreee);
                        $addDataM->bindParam("totale", $totale);
                        $addDataM->bindParam("resulte", $resulte);
                        $addDataM->execute();
                    }
                    if (isset($_POST['hy2s2_system2'])) {
                        $stu_id = $_POST['stu_id'];
                        $stu_name = $_POST['stu_name'];
                        $sub_namec = $_POST['sub_namec'];
                        $business_degreec = $_POST['business_degreec'];
                        $exam_degreec = $_POST['exam_degreec'];
                        $totalc = $_POST['totalc'];
                        $resultc = $_POST['resultc'];
                        $addDataM = $database->prepare("INSERT INTO hy2s2_system2(stu_id,stu_name,sub_namec,business_degreec,exam_degreec,totalc,resultc)
                                VALUES(:stu_id,:stu_name,:sub_namec,:business_degreec,:exam_degreec,:totalc,:resultc)");

                        $addDataM->bindParam("stu_id", $stu_id);
                        $addDataM->bindParam("stu_name", $stu_name);
                        $addDataM->bindParam("sub_namec", $sub_namec);
                        $addDataM->bindParam("business_degreec", $business_degreec);
                        $addDataM->bindParam("exam_degreec", $exam_degreec);
                        $addDataM->bindParam("totalc", $totalc);
                        $addDataM->bindParam("resultc", $resultc);
                        $addDataM->execute();
                    }
                    if (isset($_POST['hy2s2_networks'])) {
                        $stu_id = $_POST['stu_id'];
                        $stu_name = $_POST['stu_name'];
                        $sub_namen = $_POST['sub_namen'];
                        $business_degreen = $_POST['business_degreen'];
                        $exam_degreen = $_POST['exam_degreen'];
                        $totaln = $_POST['totaln'];
                        $resultn = $_POST['resultn'];
                        $addDataM = $database->prepare("INSERT INTO hy2s2_networks(stu_id,stu_name,sub_namen,business_degreen,exam_degreen,totaln,resultn)
                        VALUES(:stu_id,:stu_name,:sub_namen,:business_degreen,:exam_degreen,:totaln,:resultn)");

                        $addDataM->bindParam("stu_id", $stu_id);
                        $addDataM->bindParam("stu_name", $stu_name);
                        $addDataM->bindParam("sub_namen", $sub_namen);
                        $addDataM->bindParam("business_degreen", $business_degreen);
                        $addDataM->bindParam("exam_degreen", $exam_degreen);
                        $addDataM->bindParam("totaln", $totaln);
                        $addDataM->bindParam("resultn", $resultn);
                        $addDataM->execute();
                    }
                    if (isset($_POST['hy2s2_automaticcontrolapps'])) {
                        $stu_id = $_POST['stu_id'];
                        $stu_name = $_POST['stu_name'];
                        $sub_namef = $_POST['sub_namef'];
                        $business_degreef = $_POST['business_degreef'];
                        $exam_degreef = $_POST['exam_degreef'];
                        $totalf = $_POST['totalf'];
                        $resultf = $_POST['resultf'];
                        $addDataM = $database->prepare("INSERT INTO hy2s2_automaticcontrolapps(stu_id,stu_name,sub_namef,business_degreef,exam_degreef,totalf,resultf)
                            VALUES(:stu_id,:stu_name,:sub_namef,:business_degreef,:exam_degreef,:totalf,:resultf)");

                        $addDataM->bindParam("stu_id", $stu_id);
                        $addDataM->bindParam("stu_name", $stu_name);
                        $addDataM->bindParam("sub_namef", $sub_namef);
                        $addDataM->bindParam("business_degreef", $business_degreef);
                        $addDataM->bindParam("exam_degreef", $exam_degreef);
                        $addDataM->bindParam("totalf", $totalf);
                        $addDataM->bindParam("resultf", $resultf);
                        $addDataM->execute();
                    }
                    if (isset($_POST['hy2s1_computerarchitecture'])) {
                        $stu_id = $_POST['stu_id'];
                        $stu_name = $_POST['stu_name'];
                        $sub_namem = $_POST['sub_namem'];
                        $business_degreem = $_POST['business_degreem'];
                        $exam_degreem = $_POST['exam_degreem'];
                        $totalm = $_POST['totalm'];
                        $resultm = $_POST['resultm'];
                        $addDataM = $database->prepare("INSERT INTO hy2s1_computerarchitecture(stu_id,stu_name,sub_namem,business_degreem,exam_degreem,totalm,resultm)
                                VALUES(:stu_id,:stu_name,:sub_namem,:business_degreem,:exam_degreem,:totalm,:resultm)");

                        $addDataM->bindParam("stu_id", $stu_id);
                        $addDataM->bindParam("stu_name", $stu_name);
                        $addDataM->bindParam("sub_namem", $sub_namem);
                        $addDataM->bindParam("business_degreem", $business_degreem);
                        $addDataM->bindParam("exam_degreem", $exam_degreem);
                        $addDataM->bindParam("totalm", $totalm);
                        $addDataM->bindParam("resultm", $resultm);
                        $addDataM->execute();
                    }
                    ?>
                    <!-- =================================== -->
                    <?php
                    // $username = 'root';
                    // $password = '';
                    // $database = new PDO("mysql:host=localhost; dbname=tcc_mahmoud;", $username, $password);
                    if (isset($_POST['del_hy2s2_programming3'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE hy2s2_programming3 SET business_degreep=0,exam_degreep=0,totalp=0,resultp='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/exam-admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['del_hy2s2_internet_technolegie'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE hy1s2_english2 SET business_degreed=0,exam_degreed=0,totald=0,resultd='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/exam-admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['del_hy2s2_englesh4'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE hy1s2_integrated_circuits SET business_degreee=0,exam_degreee=0,totale=0,resulte='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/exam-admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['del_hy2s2_system2'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE hy1s2_computerarchitecture SET business_degreec=0,exam_degreec=0,totalc=0,resultc='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/exam-admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['del_hy2s2_networks'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE hy2s2_networks SET business_degreen=0,exam_degreen=0,totaln=0,resultn='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/exam-admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['del_hy2s2_automaticcontrolapps'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE hy2s2_automaticcontrolapps SET business_degreef=0,exam_degreef=0,totalf=0,resultf='تم التصفير' WHERE stu_id=('$stu_id')");
                        $up_viow->execute();
                        if ($up_viow->execute() === true) {
                            echo "<script>alert('تم تصفير المادة ')</script>";
                            echo "<script>document.location='http://localhost/tcc-project/admin/exam-admin/soft-y1-s1.php'</script>";
                        } else {
                            echo 'xxxxx';
                        }
                    }
                    if (isset($_POST['del_hy2s1_computerarchitecture'])) {
                        $stu_id = $_POST['stu_id'];
                        $up_viow = $database->prepare("UPDATE hy2s1_computerarchitecture SET business_degreem=0,exam_degreem=0,totalm=0,resultm='تم التصفير' WHERE stu_id=('$stu_id')");
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
                            <input type="text" name="stu_name" id="" style="position: relative; left: 200px;text-align:center; width: 200px;" class="form-control">
                        </div>
                        <!-- =============================================== -->
                        <div class="indiv">
                            <!-- <label for="" style="font-weight: bolder;">برمجة متقدمة 2</label> -->
                            <input type="text" name="sub_namep" value="برمــجــة متقدمة2" class="form-control" style="padding-left: 0px; background: none; width: 125px;">
                            <input type="number" id="inp1" name="business_degreep" placeholder="درجة الاعمال" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="number" id="inp2" name="exam_degreep" placeholder="درجة الامتحان" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" oninput="suma()" id="inp3" name="totalp" placeholder="الـمـجـمـوع" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" id="result" name="resultp" placeholder="النـتـيـجـة" class="form-control" style="margin-right: 10px; width:125px;">
                            <input type="submit" id="" name="hy2s2_programming3" value=" حــفــظ " class="btn btn-primary" style="position: relative; right: 20px; width: 125px;">
                            <button type="submit" class="btn btn-danger" name="del_hy2s2_programming3" style="position: relative; right: 20px; width: 125px;">تصفير المادة</button>
                        </div>
                        <div class="indiv">
                            <!-- <label for="" style="font-weight: bolder;">تصميم مواقع ويب</label> -->
                            <input type="text" name="sub_named" value="تقانات انترنت" class="form-control" style="padding-left: 0px; background: none; width: 125px;">
                            <input type="number" id="inp8" name="business_degreed" placeholder="درجة الاعمال" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="number" id="inp9" name="exam_degreed" placeholder="درجة الامتحان" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" oninput="math()" id="inp11" name="totald" placeholder="الـمـجـمـوع" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" id="ma" name="resultd" placeholder="النـتـيـجـة" class="form-control" style="margin-right: 10px; width:125px;">
                            <input type="submit" id="" name="hy2s2_internet_technolegie" value=" حــفــظ " class="btn btn-primary" style="position: relative; right: 20px; width: 125px;">
                            <input type="submit" id="" name="del_hy2s2_internet_technolegie" value="تصفير المادة" class="btn btn-dark" style="position: relative; right: 20px; width: 125px;">
                        </div>
                        <!-- =============================================== -->
                        <div class="indiv" style="font-weight: bolder;">
                            <!-- <label for="">لـــغــة أجــنــبــيــــة 4</label> -->
                            <input type="text" name="sub_namee" value="لغة اجنبية 4" class="form-control" style="padding-left: 0px; background: none; width: 125px;">
                            <input type="number" id="inp5" name="business_degreee" placeholder="درجة الاعمال" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="number" id="inp6" name="exam_degreee" placeholder="درجة الامتحان" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" oninput="sume()" id="in3" name="totale" placeholder="الـمـجـمـوع" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" id="en" name="resulte" placeholder="النـتـيـجـة" class="form-control" style="margin-right: 10px; width:125px;">
                            <input type="submit" id="" name="hy2s2_englesh4" value=" حــفــظ " class="btn btn-primary" style="position: relative; right: 20px; width: 125px;">
                            <input type="submit" id="" name="del_hy2s2_englesh4" value="تصفير المادة" class="btn btn-dark" style="position: relative; right: 20px; width: 125px;">
                        </div>
                        <!-- =============================================== -->
                        <div class="indiv">
                            <!-- <label for="" style="font-weight: bolder;">نظم تشغيل 2</label> -->
                            <input type="text" name="sub_namec" value="نظم تشغيل2 " class="form-control" style="padding-left: 0px; background: none; width: 125px;">
                            <input type="number" id="inpro1" name="business_degreec" placeholder="درجة الاعمال" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="number" id="inpro2" name="exam_degreec" placeholder="درجة الامتحان" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" oninput="prog()" id="inpro3" name="totalc" placeholder="الـمـجـمـوع" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" id="repro" name="resultc" placeholder="النـتـيـجـة" class="form-control" style="margin-right: 10px; width:125px;">
                            <input type="submit" id="" name="hy2s2_system2" value=" حــفــظ " class="btn btn-primary" style="position: relative; right: 20px; width: 125px;">
                            <input type="submit" id="" name="del_hy2s2_system2" value="تصفير المادة" class="btn btn-dark" style="position: relative; right: 20px; width: 125px;">
                        </div>
                        <!-- =============================================== -->
                        <div class="indiv" style="font-weight: bolder;">
                            <!-- <label for="">  شبكات حاسوبية</label> -->
                            <input type="text" name="sub_namen" value="شبكات حاسوبية" class="form-control" style="padding-left: 0px; background: none; width: 125px;">
                            <input type="number" id="ini" name="business_degreen" placeholder="درجة الاعمال" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="number" id="inii" name="exam_degreen" placeholder="درجة الامتحان" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" oninput="ee()" id="iniii" name="totaln" placeholder="الـمـجـمـوع" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" id="inr" name="resultn" placeholder="النـتـيـجـة" class="form-control" style="margin-right: 10px; width:125px;">
                            <input type="submit" id="" name="hy2s2_networks" value=" حــفــظ " class="btn btn-primary" style="position: relative; right: 20px; width: 125px;">
                            <input type="submit" id="" name="del_hy2s2_networks" value="تصفير المادة" class="btn btn-danger" style="position: relative; right: 20px; width: 125px;">
                        </div>
                        <div class="indiv" style="font-weight: bolder;">
                            <!-- <label for="">  تطبيقات تحكم آلي  </label> -->
                            <input type="text" name="sub_namef" value=" تطبيقات تحكم آلي  " class="form-control" style="padding-left: 0px; background: none; width: 125px;">
                            <input type="number" id="ini" name="business_degreef" placeholder="درجة الاعمال" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="number" id="inii" name="exam_degreef" placeholder="درجة الامتحان" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" oninput="ee()" id="iniii" name="totalf" placeholder="الـمـجـمـوع" class="form-control" style="margin-right: 10px; width: 125px;">
                            <input type="text" id="inr" name="resultf" placeholder="النـتـيـجـة" class="form-control" style="margin-right: 10px; width:125px;">
                            <input type="submit" id="" name="hy2s2_automaticcontrolapps" value=" حــفــظ " class="btn btn-primary" style="position: relative; right: 20px; width: 125px;">
                            <input type="submit" id="" name="del_hy2s2_automaticcontrolapps" value="تصفير المادة" class="btn btn-danger" style="position: relative; right: 20px; width: 125px;">
                        </div>

                    </form>
        </div>
                </div>
    </div>


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

