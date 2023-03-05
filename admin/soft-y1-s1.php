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
                    <li class="nav_item" id="li22">
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
    </div>


        <div class="main">
            <div class="exam_title">
                <span>قسم البرمجيات - السنة الأولى - الفصل الأول</span>
            </div>
            <div class="mark_main">
            <!-- <form action="#" id="myform"> -->
            <div class="fieldset1" style="width: 100%;">
                <?php
                include('../database/connect.php');
                //اسس كهربائية
                if(isset($_POST['adda'])) {
                    $stu_id = $_POST['stu_id'];
                    $business_degree = $_POST['business_degree'];
                    $exam_degree = $_POST['exam_degree'];
                    $total = $_POST['total'];
                    $resulta = $_POST['resulta'];
                    $sub_name = $_POST['sub_name'];
                    $num_of_rows = mysqli_query($connect, "SELECT * FROM electrical_foundations WHERE stu_id = '$stu_id'");
                    $count = mysqli_num_rows($num_of_rows);
                    if($count == 0){
                    mysqli_query($connect, "INSERT INTO electrical_foundations(stu_id,sub_name,business_degree,exam_degree,total,resulta) VALUES('$stu_id', '$sub_name', '$business_degree', '$exam_degree', '$total', '$resulta')");
                    echo "<script>alert('تم الحفظ');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    }
                    else if($count > 0){
                    mysqli_query($connect, "UPDATE electrical_foundations SET business_degree = '$business_degree', exam_degree = '$exam_degree', total = '$total', resulta = '$resulta' WHERE stu_id = '$stu_id'");
                    echo "<script>alert('تم الحفظ!');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    } else{
                        echo "<script>alert('حدث خطأ');</script>";   
                    }





                }
                //رياضيات حاسوبية 1
                if (isset($_POST['addtomath'])) {
                    $stu_id = $_POST['stu_id'];
                    $business_degreem = $_POST['business_degreem'];
                    $exam_degreem = $_POST['exam_degreem'];
                    $totalm = $_POST['totalm'];
                    $resultam = $_POST['resultam'];

                    $sub_name = $_POST['sub_namem'];
                    $num_of_rows = mysqli_query($connect, "SELECT * FROM math1 WHERE stu_id = '$stu_id'");
                    $count = mysqli_num_rows($num_of_rows);
                    if($count == 0){
                    echo "<script>alert('تم الحفظ');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    }
                    else if($count > 0){
                        mysqli_query($connect, "UPDATE math1 SET business_degreem = '$business_degreem', exam_degreem = '$exam_degreem', totalm = '$totalm', resultam = '$resultam' WHERE stu_id = '$stu_id'");
                        echo "<script>alert('تم الحفظ!');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    } else{
                        echo "<script>alert('حدث خطأ');</script>";   
                    }

                }
                //مدخل الى الحاسوب
                if (isset($_POST['addcomp'])) {
                    $stu_id = $_POST['stu_id'];                    
                    $business_degreec = $_POST['business_degreec'];
                    $exam_degreec = $_POST['exam_degreec'];
                    $totalc = $_POST['totalc'];
                    $resultac = $_POST['resultac'];
                    
                    $sub_name = $_POST['sub_namec'];
                    $num_of_rows = mysqli_query($connect, "SELECT * FROM computer WHERE stu_id = '$stu_id'");
                    $count = mysqli_num_rows($num_of_rows);
                    if($count == 0){
                    mysqli_query($connect, "INSERT INTO computer(stu_id,sub_namec,business_degreec,exam_degreec,totalc,resultac) VALUES('$stu_id', '$sub_name', '$business_degreec', '$exam_degreec', '$totalc', '$resultac')");
                    echo "<script>alert('تم الحفظ');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    }
                    else if($count > 0){
                        mysqli_query($connect, "UPDATE computer SET business_degreec = '$business_degreec', exam_degreec = '$exam_degreec', totalc = '$totalc', resultac = '$resultac' WHERE stu_id = '$stu_id'");
                        echo "<script>alert('تم الحفظ!');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    } else{
                        echo "<script>alert('حدث خطأ');</script>";   
                    }


                }
                //برمجة 1
                if (isset($_POST['addpro'])) {
                    $stu_id = $_POST['stu_id'];
                    $business_degreep = $_POST['business_degreep'];
                    $exam_degreep = $_POST['exam_degreep'];
                    $totalp = $_POST['totalp'];
                    $resultap = $_POST['resultap'];

                    $sub_name = $_POST['sub_namep'];
                    $num_of_rows = mysqli_query($connect, "SELECT * FROM programming1 WHERE stu_id = '$stu_id'");
                    $count = mysqli_num_rows($num_of_rows);
                    if($count == 0){
                    mysqli_query($connect, "INSERT INTO programming1(stu_id,sub_namep,business_degreep,exam_degreep,totalp,resultap) VALUES('$stu_id', '$sub_name', '$business_degreep', '$exam_degreep', '$totalp', '$resultap')");
                    echo "<script>alert('تم الحفظ');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    }
                    else if($count > 0){
                        mysqli_query($connect, "UPDATE programming1 SET business_degreep = '$business_degreep', exam_degreep = '$exam_degreep', totalp = '$totalp', resultap = '$resultap' WHERE stu_id = '$stu_id'");
                        echo "<script>alert('تم الحفظ!');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    } else{
                        echo "<script>alert('حدث خطأ');</script>";   
                    }


                }
                //نظم تشغيل 1
                if (isset($_POST['addsystem'])) {
                    $stu_id = $_POST['stu_id'];
                    $business_degrees = $_POST['business_degrees'];
                    $exam_degrees = $_POST['exam_degrees'];
                    $totals = $_POST['totals'];
                    $resultas = $_POST['resultas'];

                    $sub_name = $_POST['sub_names'];
                    $num_of_rows = mysqli_query($connect, "SELECT * FROM system1 WHERE stu_id = '$stu_id'");
                    $count = mysqli_num_rows($num_of_rows);
                    if($count == 0){
                    mysqli_query($connect, "INSERT INTO system1(stu_id,sub_names,business_degrees,exam_degrees,totals,resultas) VALUES('$stu_id', '$sub_name', '$business_degrees', '$exam_degrees', '$totals', '$resultas')");
                    echo "<script>alert('تم الحفظ');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    }
                    else if($count > 0){
                        mysqli_query($connect, "UPDATE system1 SET business_degrees = '$business_degrees', exam_degrees = '$exam_degrees', totals = '$totals', resultas = '$resultas' WHERE stu_id = '$stu_id'");
                        echo "<script>alert('تم الحفظ!');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    } else{
                        echo "<script>alert('حدث خطأ');</script>";   
                    }


                }
                //لغة أجنبية 1
                if (isset($_POST['addENG'])) {
                    $stu_id = $_POST['stu_id'];
                    $business_degreee = $_POST['business_degreee'];
                    $exam_degreee = $_POST['exam_degreee'];
                    $totale = $_POST['totale'];
                    $resultae = $_POST['resultae'];

                    $sub_name = $_POST['sub_namee'];
                    $num_of_rows = mysqli_query($connect, "SELECT * FROM english1 WHERE stu_id = '$stu_id'");
                    $count = mysqli_num_rows($num_of_rows);
                    if($count == 0){
                    mysqli_query($connect, "INSERT INTO english1(stu_id,sub_namee,business_degreee,exam_degreee,totale,resultae) VALUES('$stu_id', '$sub_name', '$business_degreee', '$exam_degreee', '$totale', '$resultae')");
                    echo "<script>alert('تم الحفظ');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    }
                    else if($count > 0){
                        mysqli_query($connect, "UPDATE english1 SET business_degreee = '$business_degreee', exam_degreee = '$exam_degreee', totale = '$totale', resultae = '$resultae' WHERE stu_id = '$stu_id'");
                        echo "<script>alert('تم الحفظ!');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    } else{
                        echo "<script>alert('حدث خطأ');</script>";   
                    }

                }
                //لغة عربية
                if (isset($_POST['addar'])) {
                    $stu_id = $_POST['stu_id'];
                    $business_degreear = $_POST['business_degreear'];
                    $exam_degreear = $_POST['exam_degreear'];
                    $totalar = $_POST['totalar'];
                    $resultaar = $_POST['resultaar'];

                    $sub_name = $_POST['sub_namear'];
                    $num_of_rows = mysqli_query($connect, "SELECT * FROM arabic WHERE stu_id = '$stu_id'");
                    $count = mysqli_num_rows($num_of_rows);
                    if($count == 0){
                    mysqli_query($connect, "INSERT INTO arabic(stu_id,sub_namear,business_degreear,exam_degreear,totalar,resultaar) VALUES('$stu_id', '$sub_name', '$business_degreear', '$exam_degreear', '$totalar', '$resultaar')");
                    echo "<script>alert('تم الحفظ');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    }
                    else if($count > 0){
                        mysqli_query($connect, "UPDATE arabic SET business_degreear = '$business_degreear', exam_degreear = '$exam_degreear', totalar = '$totalar', resultaar = '$resultaar' WHERE stu_id = '$stu_id'");
                        echo "<script>alert('تم الحفظ!');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    } else{
                        echo "<script>alert('حدث خطأ');</script>";   
                    }

                }
            ?>


























                <?php
                //اسس كهربائية
                if (isset($_POST['delA'])) {
                    $stu_id = $_POST['stu_id'];

                    $sql_z = mysqli_query($connect, "SELECT * FROM electrical_foundations WHERE stu_id = '$stu_id'");
                    $count = mysqli_num_rows($sql_z);
                    if($count == 0){
                    echo "<script>alert('الطالب غير متقدم للامتحان');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    }
                    else if($count > 0){
                        if(isset($sql_z)){
                            while($row = mysqli_fetch_assoc($sql_z)){
                                if($row['total'] < 60){
                                    mysqli_query($connect, "UPDATE electrical_foundations SET business_degree=0,exam_degree=0,total=0,resulta='تم التصفير' WHERE stu_id=('$stu_id')");
                                    echo "<script>alert('تم التصفير!');</script>";   
                                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";           
                                }else if($row['total'] >= 60){
                                    echo "<script>alert('الطالب ناجح في المادة ولا يحق له تصفيرها');</script>";   
                                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";           
                                }
                            }
                    } else{
                        echo "<script>alert('حدث خطأ');</script>";   
                    }                   
                }
            }
/////////////////////////////////////////////////////////  
                //رياضيات حاسوبية 1
                if (isset($_POST['delmath'])) {
                    $stu_id = $_POST['stu_id'];

                    $sql_z = mysqli_query($connect, "SELECT * FROM math1 WHERE stu_id = '$stu_id'");
                    $count = mysqli_num_rows($sql_z);
                    if($count == 0){
                    echo "<script>alert('الطالب غير متقدم للامتحان');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    }
                    else if($count > 0){
                        if(isset($sql_z)){
                            while($row = mysqli_fetch_assoc($sql_z)){
                                if($row['totalm'] < 60){
                                    mysqli_query($connect, "UPDATE math1 SET business_degreem=0,exam_degreem=0,totalm=0,resultam='تم التصفير' WHERE stu_id=('$stu_id')");
                                    echo "<script>alert('تم التصفير!');</script>";   
                                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";           
                                }else if($row['totalm'] >= 60){
                                    echo "<script>alert('الطالب ناجح في المادة ولا يحق له تصفيرها');</script>";   
                                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";           
                                }
                            }
                    } else{
                        echo "<script>alert('حدث خطأ');</script>";   
                    }                   
                }
            }
/////////////////////////////////////////////////////////  
                //مدخل الى الحاسوب
                if (isset($_POST['delcomp'])) {
                    $stu_id = $_POST['stu_id'];

                    $sql_z = mysqli_query($connect, "SELECT * FROM computer WHERE stu_id = '$stu_id'");
                    $count = mysqli_num_rows($sql_z);
                    if($count == 0){
                    echo "<script>alert('الطالب غير متقدم للامتحان');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    }
                    else if($count > 0){
                        if(isset($sql_z)){
                            while($row = mysqli_fetch_assoc($sql_z)){
                                if($row['totalc'] < 60){
                                    mysqli_query($connect, "UPDATE computer SET business_degreec=0,exam_degreec=0,totalc=0,resultac='تم التصفير' WHERE stu_id=('$stu_id')");
                                    echo "<script>alert('تم التصفير!');</script>";   
                                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";           
                                }else if($row['totalc'] >= 60){
                                    echo "<script>alert('الطالب ناجح في المادة ولا يحق له تصفيرها');</script>";   
                                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";           
                                }
                            }
                    } else{
                        echo "<script>alert('حدث خطأ');</script>";   
                    }                   
                }
            }
/////////////////////////////////////////////////////////   
                //برمجة 1
                if (isset($_POST['delpro'])) {
                    $stu_id = $_POST['stu_id'];

                    $sql_z = mysqli_query($connect, "SELECT * FROM programming1 WHERE stu_id = '$stu_id'");
                    $count = mysqli_num_rows($sql_z);
                    if($count == 0){
                    echo "<script>alert('الطالب غير متقدم للامتحان');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    }
                    else if($count > 0){
                        if(isset($sql_z)){
                            while($row = mysqli_fetch_assoc($sql_z)){
                                if($row['totalp'] < 60){
                                    mysqli_query($connect, "UPDATE programming1 SET business_degreep=0,exam_degreep=0,totalp=0,resultap='تم التصفير' WHERE stu_id=('$stu_id')");
                                    echo "<script>alert('تم التصفير!');</script>";   
                                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";           
                                }else if($row['totalp'] >= 60){
                                    echo "<script>alert('الطالب ناجح في المادة ولا يحق له تصفيرها');</script>";   
                                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";           
                                }
                            }
                    } else{
                        echo "<script>alert('حدث خطأ');</script>";   
                    }                   
                }
            }
/////////////////////////////////////////////////////////  
                //نظم تشغيل 1
                if (isset($_POST['delsystem'])) {
                    $stu_id = $_POST['stu_id'];

                    $sql_z = mysqli_query($connect, "SELECT * FROM system1 WHERE stu_id = '$stu_id'");
                    $count = mysqli_num_rows($sql_z);
                    if($count == 0){
                    echo "<script>alert('الطالب غير متقدم للامتحان');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    }
                    else if($count > 0){
                        if(isset($sql_z)){
                            while($row = mysqli_fetch_assoc($sql_z)){
                                if($row['totals'] < 60){
                                    mysqli_query($connect, "UPDATE system1 SET business_degrees=0,exam_degrees=0,totals=0,resultas='تم التصفير' WHERE stu_id=('$stu_id')");
                                    echo "<script>alert('تم التصفير!');</script>";   
                                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";           
                                }else if($row['totals'] >= 60){
                                    echo "<script>alert('الطالب ناجح في المادة ولا يحق له تصفيرها');</script>";   
                                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";           
                                }
                            }
                    } else{
                        echo "<script>alert('حدث خطأ');</script>";   
                    }                   
                }
            }
/////////////////////////////////////////////////////////  
                //لغة اجنبية 1
                if (isset($_POST['delENG'])) {
                    $stu_id = $_POST['stu_id'];

                    $sql_z = mysqli_query($connect, "SELECT * FROM english1 WHERE stu_id = '$stu_id'");
                    $count = mysqli_num_rows($sql_z);
                    if($count == 0){
                    echo "<script>alert('الطالب غير متقدم للامتحان');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    }
                    else if($count > 0){
                        if(isset($sql_z)){
                            while($row = mysqli_fetch_assoc($sql_z)){
                                if($row['totale'] < 60){
                                    mysqli_query($connect, "UPDATE english1 SET business_degreee=0,exam_degreee=0,totale=0,resultae='تم التصفير' WHERE stu_id=('$stu_id')");
                                    echo "<script>alert('تم التصفير!');</script>";   
                                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";           
                                }else if($row['totale'] >= 60){
                                    echo "<script>alert('الطالب ناجح في المادة ولا يحق له تصفيرها');</script>";   
                                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";           
                                }
                            }
                    } else{
                        echo "<script>alert('حدث خطأ');</script>";   
                    }                   
                }
            }
/////////////////////////////////////////////////////////  
                //لغة عربية
                if (isset($_POST['delarabia'])) {
                    $stu_id = $_POST['stu_id'];

                    $sql_z = mysqli_query($connect, "SELECT * FROM arabic WHERE stu_id = '$stu_id'");
                    $count = mysqli_num_rows($sql_z);
                    if($count == 0){
                    echo "<script>alert('الطالب غير متقدم للامتحان');</script>";   
                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";   
                    }
                    else if($count > 0){
                        if(isset($sql_z)){
                            while($row = mysqli_fetch_assoc($sql_z)){
                                if($row['totalar'] < 60){
                                    mysqli_query($connect, "UPDATE arabic SET business_degreear=0,exam_degreear=0,totalar=0,resultaar='تم التصفير' WHERE stu_id=('$stu_id')");
                                    echo "<script>alert('تم التصفير!');</script>";   
                                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";           
                                }else if($row['totalar'] >= 60){
                                    echo "<script>alert('الطالب ناجح في المادة ولا يحق له تصفيرها');</script>";   
                                    echo "<script>document.location='http://localhost/TCC-Project/admin/soft-y1-s1.php';</script>";           
                                }
                            }
                    } else{
                        echo "<script>alert('حدث خطأ');</script>";   
                    }                   
                }
            }
/////////////////////////////////////////////////////////  
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
                        <input type="number" name="stu_id" id="" oninput="disable()" style="text-align:center; width:100px;" required>
                    </div>
                    <!-- =============================================== -->
                    <div class="indiv">
                        <!-- <label for="" style="font-weight: bolder;">أسس الهندسة كهربائية</label> -->
                        <input type="text" name="sub_name" value="أسس الهندسة الكهربائية" style="padding-left: 0px; width:200px; text-align: right; background: none;">

                        <div>
                        <input type="number" id="inp1" oninput="suma()" name="business_degree" placeholder="درجة الاعمال" style="margin-right: 10px;">
                        <input type="number" oninput="suma()" id="inp2" name="exam_degree" placeholder="درجة الامتحان" style="margin-right: 10px;">
                        <input type="text" oninput="suma()" id="inp3" name="total" placeholder="المجموع" style="margin-right: 10px;">
                        <input type="text" id="result" name="resulta" placeholder="النتيجة" style="margin-right: 10px;">
                        <input type="submit" id="dis_add1" name="adda" value="حفظ" class="btn btn-primary" disabled>
                        <input type="submit" name="delA" value="تصفير المادة" class="btn btn-danger" disabled>
                        </div>
                    </div>


                    <!-- =============================================== -->
                    <div class="indiv">
                        <!-- <label for="" style="font-weight: bolder;">رياضيات حاسوبية 1</label> -->
                        <input type="text" name="sub_namem" value="رياضيات حاسوبية 1" style="padding-left: 0px; width:200px; text-align: right; background: none;">
                        <div>
                        <input type="number" id="inp8" oninput="math();" name="business_degreem" placeholder="درجة الاعمال" style="margin-right: 10px;">
                        <input type="number" oninput="math()" id="inp9" name="exam_degreem" placeholder="درجة الامتحان" style="margin-right: 10px;">
                        <input type="text" oninput="math()" id="inp11" name="totalm" placeholder="المجموع" style="margin-right: 10px;">
                        <input type="text" id="ma" name="resultam" placeholder="النتيجة" style="margin-right: 10px;">
                        <input type="submit" name="addtomath" value="حفظ" class="btn btn-primary" disabled>
                        <input type="submit" name="delmath" value="تصفير المادة" class="btn btn-danger" disabled>
                    </div>
            </div>

                    <!-- =============================================== -->
                    <div class="indiv" style="font-weight: bolder;">
                        <!-- <label for="">مدخل إلى الحاسوب</label> -->
                        <input type="text" name="sub_namec" value="مدخل الى الحاسوب" style="padding-left: 0px; width:200px; text-align: right; background: none;">
                        <div>
                        <input type="number" id="ini" oninput="ee()" name="business_degreec" placeholder="درجة الاعمال" style="margin-right: 10px;">
                        <input type="number" oninput="ee()" id="inii" name="exam_degreec" placeholder="درجة الامتحان" style="margin-right: 10px;">
                        <input type="text" oninput="ee()" id="iniii" name="totalc" placeholder="المجموع" style="margin-right: 10px;">
                        <input type="text" id="inr" name="resultac" placeholder="النتيجة" style="margin-right: 10px;">
                        <input type="submit" name="addcomp" value="حفظ" class="btn btn-primary" disabled>
                        <input type="submit" name="delcomp" value="تصفير المادة" class="btn btn-danger" disabled>
                    </div>
            </div>

                    <!-- =============================================== -->
                    <div class="indiv">
                        <!-- <label for="" style="font-weight: bolder;">برمجة 1</label> -->
                        <input type="text" name="sub_namep" value="برمجة 1" style="padding-left: 0px; width:200px; text-align: right; background: none;">
                        <div>
                        <input type="number" oninput="prog()" id="inpro1" name="business_degreep" placeholder="درجة الاعمال" style="margin-right: 10px;">
                        <input type="number" oninput="prog()" id="inpro2" name="exam_degreep" placeholder="درجة الامتحان" style="margin-right: 10px;">
                        <input type="text" oninput="prog()" id="inpro3" name="totalp" placeholder="المجموع" style="margin-right: 10px;">
                        <input type="text" id="repro" name="resultap" placeholder="النتيجة" style="margin-right: 10px;">
                        <input type="submit" name="addpro" value="حفظ" class="btn btn-primary" disabled>
                        <input type="submit" name="delpro" value="تصفير المادة" class="btn btn-danger" disabled>
                    </div>
                    </div>
                    <!-- =============================================== -->
                    <div class="indiv">
                        <!-- <label for="" style="font-weight: bolder;">نظم تشغيل 1</label> -->
                        <input type="text" name="sub_names" value="نظم تشغيل 1" style="padding-left: 0px; width:200px; text-align: right; background: none;">
                        <div>
                        <input type="number" oninput="system()" id="sest1" name="business_degrees" placeholder="درجة الاعمال" style="margin-right: 10px;">
                        <input type="number" oninput="system()" id="sest2" name="exam_degrees" placeholder="درجة الامتحان" style="margin-right: 10px;">
                        <input type="text" oninput="system()" id="sest3" name="totals" placeholder="المجموع" style="margin-right: 10px;">
                        <input type="text" id="sest4" name="resultas" placeholder="النتيجة" style="margin-right: 10px;">
                        <input type="submit" name="addsystem" value="حفظ" class="btn btn-primary" disabled>
                        <input type="submit" name="delsystem" value="تصفير المادة" class="btn btn-danger" disabled>
                    </div>
            </div>
                    <!-- =============================================== -->
                    <div class="indiv" style="font-weight: bolder;">
                        <!-- <label for="">لغة أجنبية 1</label> -->
                        <input type="text" name="sub_namee" value="لغة أجنبية 1" style="padding-left: 0px; width:200px; text-align: right; background: none;">
                        <div>
                        <input type="number" id="inp5" oninput="sume()" name="business_degreee" placeholder="درجة الاعمال" style="margin-right: 10px;">
                        <input type="number" id="inp6" oninput="sume()" name="exam_degreee" placeholder="درجة الامتحان" style="margin-right: 10px;">
                        <input type="text" oninput="sume()" id="in3" name="totale" placeholder="المجموع" style="margin-right: 10px;">
                        <input type="text" id="en" name="resultae" placeholder="النتيجة" style="margin-right: 10px;">
                        <input type="submit" name="addENG" value="حفظ" class="btn btn-primary" disabled>
                        <input type="submit" name="delENG" value="تصفير المادة" class="btn btn-danger" disabled>
                    </div>
                    </div>
                    <!-- =============================================== -->
                    <div class="indiv">
                        <!-- <label for="" style="font-weight: bolder;">لغة عربية</label> -->
                        <input type="text" name="sub_namear" value="لغة عربية" style="padding-left: 0px; width:200px; text-align: right; background: none;">
                        <div>
                        <input type="number" id="ar1" oninput="sumar()" name="business_degreear" placeholder="درجة الاعمال" style="margin-right: 10px;">
                        <input type="text" id="ar0" oninput="sumar()" name="exam_degreear" placeholder="درجة الامتحان" style="margin-right: 10px; text-align:center;">
                        <input type="text" id="ar3" oninput="sumar()" name="totalar" placeholder="المجموع" style="margin-right: 10px;">
                        <input type="text" id="ar2" name="resultaar" placeholder="النتيجة" style="margin-right: 10px;">
                        <input type="submit" name="addar" value="حفظ" class="btn btn-primary" disabled>
                        <input type="submit" name="delarabia" value="تصفير المادة" class="btn btn-danger" disabled>
                    </div>
                    </div>
                    <!-- =============================================== -->
                </form>
                <a href="soft-viow-data-zero.php" style="
    margin-right: 15px;
    background-color: var(--blue);
    width: fit-content;
    height: fit-content;
    padding: 10px;
    border-radius: 5px;
    color: whitesmoke;
    text-decoration: none;
">عرض قائمة الطلاب اللذين تم تصفير درجاتهم</a>
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
        var dis_add = document.querySelectorAll(".btn-primary");
        var dis_del = document.querySelectorAll(".btn-danger");

        for(var i = 0; i < dis_add.length; i++){
            dis_add[i].setAttribute('style', 'background-color: gray;');
            dis_del[i].setAttribute('style', 'background-color: gray;');
        }
        
        function disable() {
            for(var i = 0; i < dis_del.length; i++){
                dis_del[i].removeAttribute('disabled');
                dis_del[i].removeAttribute('style');
            }
        }




// //////////////////////////////////////////////////////////////


        function system() {
            s3.value = Number(s1.value) + Number(s2.value);
            if (s3.value >= 60) {
                s4.value = "ناجح";
            } else {
                s4.value = "راسب";
            }
            dis_add[4].removeAttribute('disabled');
            dis_add[4].removeAttribute('style');
        }
        var p1 = document.getElementById("inpro1");
        var p2 = document.getElementById("inpro2");
        var p3 = document.getElementById("inpro3");
        var p4 = document.getElementById("repro");

        function prog() {
            p3.value = Number(p1.value) + Number(p2.value);
            if (p3.value >= 60) {
                p4.value = "ناجح";
            } else {
                p4.value = "راسب";
            }
            dis_add[3].removeAttribute('disabled');
            dis_add[3].removeAttribute('style');
        }
        var i1 = document.getElementById("ini");
        var i2 = document.getElementById("inii");
        var i3 = document.getElementById("iniii");
        var i4 = document.getElementById("inr");

        function ee() {
            i3.value = Number(i1.value) + Number(i2.value);
            if (i3.value >= 60) {
                i4.value = "ناجح";
            } else {
                i4.value = "راسب";
            }
            dis_add[2].removeAttribute('disabled');
            dis_add[2].removeAttribute('style');
        }
        var x1 = document.getElementById("inp1");
        var x2 = document.getElementById("inp2");
        var x3 = document.getElementById("inp3");
        var x4 = document.getElementById("result");
        var x7 = document.getElementById("ar");

        function suma() {
            x3.value = Number(x1.value) + Number(x2.value);
            if (x3.value >= 60) {
                x4.value = "ناجح";
            } else {
                x4.value = "راسب";
            }
            dis_add[0].removeAttribute('disabled');
            dis_add[0].removeAttribute('style');
        }
        var x8 = document.getElementById("inp8");
        var x9 = document.getElementById("inp9");
        var x11 = document.getElementById("inp11");
        var x12 = document.getElementById("ma");

        function math() {
            x11.value = Number(x8.value) + Number(x9.value);
            if (x11.value >= 50) {
                x12.value = "ناجح";
            } else {
                x12.value = "راسب";
            }
            dis_add[1].removeAttribute('disabled');
            dis_add[1].removeAttribute('style');
        }
        var e5 = document.getElementById("inp5");
        var e6 = document.getElementById("inp6");
        var e7 = document.getElementById("in3");
        var e8 = document.getElementById("en");

        function sume() {
            e7.value = Number(e5.value) + Number(e6.value);
            if (e7.value >= 50) {
                e8.value = "ناجح";
            } else {
                e8.value = "راسب";
            }
            dis_add[5].removeAttribute('disabled');
            dis_add[5].removeAttribute('style');
        }
    </script>
    <script>
        var a0 = document.getElementById("ar0");
        var a1 = document.getElementById("ar1");
        var a2 = document.getElementById("ar2");
        var a3 = document.getElementById("ar3");

        function sumar() {
            ar3.value = Number(a0.value) + Number(a1.value);
            if (a3.value >= 50) {
                a2.value = "ناجح";

            } else {
                a2.value = "راسب";
            }
            dis_add[6].removeAttribute('disabled');
            dis_add[6].removeAttribute('style');
        }
    </script>




<!-- ================================================ -->


<script>
        let li22 = document.getElementById("li22"); //الرئيسية
        let body = document.querySelector("body");
        body.onload = function () {
        li22.classList.add('activated');
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>