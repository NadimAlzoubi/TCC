<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student-Profile</title>
    <link rel="stylesheet" href="assest/css/style.css">
    <link rel="icon" type="image/png" href="img/tcc.png">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

</head>

<body>
    <!-- =====================header=================== -->
    <header class="header" id="header">

        <nav class="nav">

        <div class="nav_img">المعهد التقاني للحاسوب</div>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list" style="margin: 0; padding: 0;">
                    <li class="nav_item" id="li1">
                        <a href="index.php" class="nav_link">
                            <span class="nav_icon">
                                <ion-icon name="home-outline"></ion-icon>
                            </span>
                            <span class="nav_name">الرئيسية</span>

                        </a>
                    </li>
                    <li class="nav_item" id="li2">
                        <a href="library.php" class="nav_link">
                            <span class="nav_icon">
                                <ion-icon name="library-outline"></ion-icon>
                            </span>
                            <span class="nav_name">المكتبة</span>
                        </a>
                    </li>
                    <li class="nav_item" id="li3">
                        <a href="profile.php" class="nav_link">
                            <span class="nav_icon">
                                <ion-icon name="person-outline"></ion-icon>
                            </span>
                            <span class="nav_name">الملف الشخصي</span>
                        </a>
                    </li>
                    <li class="nav_item" id="li4">
                        <a href="staff.php" class="nav_link">
                            <span class="nav_icon">
                                <ion-icon name="people-outline"></ion-icon>
                            </span>
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
                            <span class="nav_icon">
                                <ion-icon name="call-outline"></ion-icon>
                            </span>
                            <span class="nav_name">اتصل بنا</span>
                        </a>
                    </li>
                    <li class="nav_item" id="li7">
                        <a href="TCC-login.php" class="nav_link">
                            <span class="nav_icon">
                                <ion-icon name="file-tray-stacked-outline"></ion-icon>
                            </span>
                            <span class="nav_name">إدارة المعهد</span>
                        </a>
                    </li>
                </ul>
            </div>
            <a href="#" class="nav_logo">TCC-Daraa</a>
        </nav>
    </header>

    <?php 
    error_reporting(0); 
    include('database/connect.php');
    $sql_s = "SELECT * FROM stu_reg WHERE stu_id = '" . $_POST['stu_id'] . "'";
    $result = mysqli_query($connect, $sql_s);
    ?>

    <main>
        <!-- ===================== studentGrades ====================== -->
        <section class="container studentGrades" id="staff">
            <!-- <h2 class="section_title">الملف الشخصي</h2> -->
            <table class="table" style="width: 80%;margin: 20px auto;">
                <?php
                    if(isset($result)){
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<td colspan="2">بيانات الطالب</td>';
                            echo '</tr>';     
                            echo '<tr style="background-color: #fff">';     
                            echo '<td style="width: 50%;">الرقم الامتحاني</td>';
                            echo '<td style="width: 50%;">' . $row['stu_id'] . '</td>';
                            echo '</tr>';     
                            echo '<tr style="background-color: #fff">';     
                            echo '<td>اسم الطالب</td>';     
                            echo '<td>' . $row['stu_name'] . '</td>';     
                            echo '</tr>';     
                            echo '<tr style="background-color: #fff">';     
                            echo '<td>الاختصاص</td>';     
                            echo '<td>' . $row['stu_mag'] . '</td>';     
                            echo '</tr>';     
                        }
                    }                
                ?>
        </table>
            <details class="det_table" open>
                <summary class="det_title">السنة الإولى - الفصل الأول</summary>
                <!-- <button type="submit" class="btn btn-danger" name="delaA" style="position: relative; right: 20px; width: 125px;">  إستعراض </button> -->
                <!-- <input type="number" name="stu_id" id="" style="position: relative; left:-15px;text-align:center; width:200px; display:inline; border-right:none;height:38px;" class="form-control" required> -->
                <!-- <form action="studentGrades.php" method="POST">
           <button type=" submit" name="search" class="input-group-text btn-primary" id="btnGroupAddon" style="display: inline;width: 125px"> إستعراض </button>
                    <input type="number" name="stu_id" id="" class="input-group-text form-control  btn-info" id="btnGroupAddon" style="display: inline;position: relative; left:5px;width:200px;border-right:none;" required>
                </form> -->
                <table class="table">
                    <tr>
                    
                        <td>المقرر</td>
                        <td>درجة الأعمال</td>
                        <td>درجة الامتحان</td>
                        <td>المجموع</td>
                        <td>النتيجة</td>
                    </tr>
                    <?php
                    error_reporting(0);
                    $username = 'root';
                    $password = '';
                    $database = new PDO("mysql:host=localhost; dbname=tcc_db;", $username, $password);
                    // var_dump($database);
                    if (isset($_POST["search"])) {
                        $stu_id = $_POST['stu_id'];
                        // $stu_name = $_POST['stu_name'];
                        // $sub_name = $_POST['sub_name'];
                        // $business_degree = $_POST['business_degree']; computer,english1,math1,programming1,system1
                        // $exam_degree = $_POST['exam_degree'];
                        // $total = $_POST['total'];
                        // $resulta = $_POST['resulta'];
                        $SEARCHm = $database->prepare("SELECT * FROM electrical_foundations WHERE stu_id=$stu_id ");
                        $SEARCHC = $database->prepare("SELECT * FROM computer WHERE stu_id=$stu_id ");
                        $SEARCHE = $database->prepare("SELECT * FROM english1 WHERE stu_id=$stu_id ");
                        $SEARCHM = $database->prepare("SELECT * FROM math1 WHERE stu_id=$stu_id ");
                        $SEARCHP = $database->prepare("SELECT * FROM programming1 WHERE stu_id=$stu_id ");
                        $SEARCHS = $database->prepare("SELECT * FROM system1 WHERE stu_id=$stu_id ");
                        $SEARCHA = $database->prepare("SELECT * FROM arabic WHERE stu_id=$stu_id ");
                        $SEARCHm->execute();
                        $SEARCHC->execute();
                        $SEARCHE->execute();
                        $SEARCHM->execute();
                        $SEARCHP->execute();
                        $SEARCHS->execute();
                        $SEARCHA->execute();
                        foreach ($SEARCHm as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_name'] . "</td>";
                            echo "<td>" . $DATA['business_degree'] . "</td>";
                            echo "<td>" . $DATA['exam_degree'] . "</td>";
                            echo "<td class='td_t'>" . $DATA['total'] . "</td>";
                            echo "<td class='td_r'>" . $DATA['resulta'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHC as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namec'] . "</td>";
                            echo "<td>" . $DATA['business_degreec'] . "</td>";
                            echo "<td>" . $DATA['exam_degreec'] . "</td>";
                            echo "<td class='td_t'>" . $DATA['totalc'] . "</td>";
                            echo "<td class='td_r'>" . $DATA['resultac'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHE as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namee'] . "</td>";
                            echo "<td>" . $DATA['business_degreee'] . "</td>";
                            echo "<td>" . $DATA['exam_degreee'] . "</td>";
                            echo "<td class='td_t'>" . $DATA['totale'] . "</td>";
                            echo "<td class='td_r'>" . $DATA['resultae'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHM as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namem'] . "</td>";
                            echo "<td>" . $DATA['business_degreem'] . "</td>";
                            echo "<td>" . $DATA['exam_degreem'] . "</td>";
                            echo "<td class='td_t'>" . $DATA['totalm'] . "</td>";
                            echo "<td class='td_r'>" . $DATA['resultam'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHP as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namep'] . "</td>";
                            echo "<td>" . $DATA['business_degreep'] . "</td>";
                            echo "<td>" . $DATA['exam_degreep'] . "</td>";
                            echo "<td class='td_t'>" . $DATA['totalp'] . "</td>";
                            echo "<td class='td_r'>" . $DATA['resultap'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHS as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_names'] . "</td>";
                            echo "<td>" . $DATA['business_degrees'] . "</td>";
                            echo "<td>" . $DATA['exam_degrees'] . "</td>";
                            echo "<td class='td_t'>" . $DATA['totals'] . "</td>";
                            echo "<td class='td_r'>" . $DATA['resultas'] . "</td>";
                            echo "</tr>";
                        }

                        foreach ($SEARCHA as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namear'] . "</td>";
                            echo "<td>" . $DATA['business_degreear'] . "</td>";
                            echo "<td>" . $DATA['exam_degreear'] . "</td>";
                            echo "<td class='td_t'>" . $DATA['totalar'] . "</td>";
                            echo "<td class='td_r'>" . $DATA['resultaar'] . "</td>";
                            echo "</tr>";
                        }

                    }
                    ?>

<script>
    var td_t = document.querySelectorAll(".td_t");
    var td_r = document.querySelectorAll(".td_r");
    for(var i = 0; i < td_r.length; i++){
        if(td_t[i].innerHTML >= 60){
            td_r[i].style.color = "#02e830";
        }else if(td_t[i].innerHTML < 60 && td_t[i].innerHTML >= 0){
            td_r[i].style.color = "#f00000";
        }
    }
</script>

<?php
                    // $username = 'root';
                    // $password = '';
                    // $database = new PDO("mysql:host=localhost; dbname=tcc_mahmoud;", $username, $password);
                    // var_dump($database);
                    if (isset($_POST["search"])) {
                        $stu_id = $_POST['stu_id'];
                        // $stu_name = $_POST['stu_name'];
                        // $sub_name = $_POST['sub_name'];
                        // $business_degree = $_POST['business_degree']; computer,english1,math1,programming1,system1
                        // $exam_degree = $_POST['exam_degree'];
                        // $total = $_POST['total'];
                        // $resulta = $_POST['resulta'];
                        $SEARCHm = $database->prepare("SELECT * FROM hy1s1_system1 WHERE stu_id=$stu_id ");
                        $SEARCHC = $database->prepare("SELECT * FROM hy1s1_arabic WHERE stu_id=$stu_id ");
                        $SEARCHE = $database->prepare("SELECT * FROM hy1s1_englesh1 WHERE stu_id=$stu_id ");
                        $SEARCHM = $database->prepare("SELECT * FROM hy1s1_electrical_foundations WHERE stu_id=$stu_id ");
                        $SEARCHP = $database->prepare("SELECT * FROM hy1s1_math1 WHERE stu_id=$stu_id ");
                        $SEARCHS = $database->prepare("SELECT * FROM hy1s1_entertocomputer WHERE stu_id=$stu_id ");
                        $SEARCHA = $database->prepare("SELECT * FROM hy1s1_logiccircuits WHERE stu_id=$stu_id ");
                        $SEARCHm->execute();
                        $SEARCHC->execute();
                        $SEARCHE->execute();
                        $SEARCHM->execute();
                        $SEARCHP->execute();
                        $SEARCHS->execute();
                        $SEARCHA->execute();
                        foreach ($SEARCHm as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_name'] . "</td>";
                            echo "<td>" . $DATA['business_degree'] . "</td>";
                            echo "<td>" . $DATA['exam_degree'] . "</td>";
                            echo "<td>" . $DATA['total'] . "</td>";
                            echo "<td>" . $DATA['result'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHC as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_name'] . "</td>";
                            echo "<td>" . $DATA['business_degree'] . "</td>";
                            echo "<td>" . $DATA['exam_degree'] . "</td>";
                            echo "<td>" . $DATA['total'] . "</td>";
                            echo "<td>" . $DATA['result'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHE as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namee'] . "</td>";
                            echo "<td>" . $DATA['business_degreee'] . "</td>";
                            echo "<td>" . $DATA['exam_degreee'] . "</td>";
                            echo "<td>" . $DATA['totale'] . "</td>";
                            echo "<td>" . $DATA['resultae'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHM as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namef'] . "</td>";
                            echo "<td>" . $DATA['business_degreef'] . "</td>";
                            echo "<td>" . $DATA['exam_degreef'] . "</td>";
                            echo "<td>" . $DATA['totalf'] . "</td>";
                            echo "<td>" . $DATA['resultf'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHP as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namem'] . "</td>";
                            echo "<td>" . $DATA['business_degreem'] . "</td>";
                            echo "<td>" . $DATA['exam_degreem'] . "</td>";
                            echo "<td>" . $DATA['totalm'] . "</td>";
                            echo "<td>" . $DATA['resultm'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHS as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namec'] . "</td>";
                            echo "<td>" . $DATA['business_degreec'] . "</td>";
                            echo "<td>" . $DATA['exam_degreec'] . "</td>";
                            echo "<td>" . $DATA['totalc'] . "</td>";
                            echo "<td>" . $DATA['resultc'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHS as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namel'] . "</td>";
                            echo "<td>" . $DATA['business_degreel'] . "</td>";
                            echo "<td>" . $DATA['exam_degreel'] . "</td>";
                            echo "<td>" . $DATA['totall'] . "</td>";
                            echo "<td>" . $DATA['resultl'] . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>
                <!-- ==================== -->
            </details>
            <details class="det_table">
                <summary class="det_title">السنة الإولى - الفصل الثاني</summary>
                <!-- <form method="POST">
           <button type=" submit" name="search" class="input-group-text btn-primary" id="btnGroupAddon" style="display: inline;width: 125px"> إستعراض </button>
                    <input type="number" name="stu_id" id="" class="input-group-text form-control  btn-info" id="btnGroupAddon" style="display: inline;position: relative; left:5px;width:200px;border-right:none;" required>
                </form> -->
                <table class="table">
                    <tr>
                        
                        <td>المقرر</td>
                        <td>درجة الأعمال</td>
                        <td>درجة الامتحان</td>
                        <td>المجموع</td>
                        <td>النتيجة</td>
                    </tr>
                    <?php
                    // $username = 'root';
                    // $password = '';
                    // $database = new PDO("mysql:host=localhost; dbname=tcc_mahmoud;", $username, $password);
                    // var_dump($database);
                    if (isset($_POST["search"])) {
                        $stu_id = $_POST['stu_id'];
                        // $stu_name = $_POST['stu_name'];
                        // $sub_name = $_POST['sub_name'];
                        // $business_degree = $_POST['business_degree']; computer,english1,math1,programming1,system1
                        // $exam_degree = $_POST['exam_degree'];
                        // $total = $_POST['total'];
                        // $resulta = $_POST['resulta'];
                        $SEARCHm = $database->prepare("SELECT * FROM programming2 WHERE stu_id=$stu_id ");
                        $SEARCHC = $database->prepare("SELECT * FROM c2_webdesigin WHERE stu_id=$stu_id ");
                        $SEARCHE = $database->prepare("SELECT * FROM c2_networks WHERE stu_id=$stu_id ");
                        $SEARCHM = $database->prepare("SELECT * FROM c2_systems2 WHERE stu_id=$stu_id ");
                        $SEARCHP = $database->prepare("SELECT * FROM c2_maht2 WHERE stu_id=$stu_id ");
                        $SEARCHS = $database->prepare("SELECT * FROM c2_english2 WHERE stu_id=$stu_id ");
                        $SEARCHA = $database->prepare("SELECT * FROM c2_english2 WHERE stu_id=$stu_id ");
                        $SEARCHm->execute();
                        $SEARCHC->execute();
                        $SEARCHE->execute();
                        $SEARCHM->execute();
                        $SEARCHP->execute();
                        $SEARCHS->execute();
                        $SEARCHA->execute();
                        foreach ($SEARCHm as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namep2'] . "</td>";
                            echo "<td>" . $DATA['business_degreep'] . "</td>";
                            echo "<td>" . $DATA['exam_degreep'] . "</td>";
                            echo "<td>" . $DATA['totalp'] . "</td>";
                            echo "<td>" . $DATA['resultp'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHC as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namew'] . "</td>";
                            echo "<td>" . $DATA['business_degreew'] . "</td>";
                            echo "<td>" . $DATA['exam_degreew'] . "</td>";
                            echo "<td>" . $DATA['totalw'] . "</td>";
                            echo "<td>" . $DATA['resultw'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHE as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namen'] . "</td>";
                            echo "<td>" . $DATA['business_degreen'] . "</td>";
                            echo "<td>" . $DATA['exam_degreen'] . "</td>";
                            echo "<td>" . $DATA['totaln'] . "</td>";
                            echo "<td>" . $DATA['resultn'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHM as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_names'] . "</td>";
                            echo "<td>" . $DATA['business_degrees'] . "</td>";
                            echo "<td>" . $DATA['exam_degrees'] . "</td>";
                            echo "<td>" . $DATA['totals'] . "</td>";
                            echo "<td>" . $DATA['results'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHP as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namee'] . "</td>";
                            echo "<td>" . $DATA['business_degreee'] . "</td>";
                            echo "<td>" . $DATA['exam_degreee'] . "</td>";
                            echo "<td>" . $DATA['totale'] . "</td>";
                            echo "<td>" . $DATA['resulte'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHS as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namec'] . "</td>";
                            echo "<td>" . $DATA['business_degreec'] . "</td>";
                            echo "<td>" . $DATA['exam_degreec'] . "</td>";
                            echo "<td>" . $DATA['totalc'] . "</td>";
                            echo "<td>" . $DATA['resultc'] . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                                        <!-- حواسيب سنة اولى فصل ثاني  -->
                    <?php
                    // $username = 'root';
                    // $password = '';
                    // $database = new PDO("mysql:host=localhost; dbname=tcc_mahmoud;", $username, $password);
                    // var_dump($database);
                    if (isset($_POST["search"])) {
                        $stu_id = $_POST['stu_id'];
                        // $stu_name = $_POST['stu_name'];
                        // $sub_name = $_POST['sub_name'];
                        // $business_degree = $_POST['business_degree']; computer,english1,math1,programming1,system1
                        // $exam_degree = $_POST['exam_degree'];
                        // $total = $_POST['total'];
                        // $resulta = $_POST['resulta'];
                        $SEARCHm = $database->prepare("SELECT * FROM hy1s2_programming1 WHERE stu_id=$stu_id ");
                        $SEARCHC = $database->prepare("SELECT * FROM hy1s2_integrated_circuits WHERE stu_id=$stu_id ");
                        $SEARCHE = $database->prepare("SELECT * FROM hy1s2_peripheralunits WHERE stu_id=$stu_id ");

                        $SEARCHP = $database->prepare("SELECT * FROM hy1s2_computerarchitecture WHERE stu_id=$stu_id ");
                        $SEARCHS = $database->prepare("SELECT * FROM hy1s2_english2 WHERE stu_id=$stu_id ");
                        $SEARCHA = $database->prepare("SELECT * FROM hy1s2_computermaintenance WHERE stu_id=$stu_id ");
                        $SEARCHm->execute();
                        $SEARCHC->execute();
                        $SEARCHE->execute();

                        $SEARCHP->execute();
                        $SEARCHS->execute();
                        $SEARCHA->execute();
                        foreach ($SEARCHm as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_name'] . "</td>";
                            echo "<td>" . $DATA['business_degree'] . "</td>";
                            echo "<td>" . $DATA['exam_degree'] . "</td>";
                            echo "<td>" . $DATA['total'] . "</td>";
                            echo "<td>" . $DATA['result'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHC as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namef'] . "</td>";
                            echo "<td>" . $DATA['business_degreef'] . "</td>";
                            echo "<td>" . $DATA['exam_degreef'] . "</td>";
                            echo "<td>" . $DATA['totalf'] . "</td>";
                            echo "<td>" . $DATA['resultf'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHE as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namel'] . "</td>";
                            echo "<td>" . $DATA['business_degreel'] . "</td>";
                            echo "<td>" . $DATA['exam_degreel'] . "</td>";
                            echo "<td>" . $DATA['totall'] . "</td>";
                            echo "<td>" . $DATA['resultl'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHM as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_names'] . "</td>";
                            echo "<td>" . $DATA['business_degrees'] . "</td>";
                            echo "<td>" . $DATA['exam_degrees'] . "</td>";
                            echo "<td>" . $DATA['totals'] . "</td>";
                            echo "<td>" . $DATA['results'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHP as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namee'] . "</td>";
                            echo "<td>" . $DATA['business_degreee'] . "</td>";
                            echo "<td>" . $DATA['exam_degreee'] . "</td>";
                            echo "<td>" . $DATA['totale'] . "</td>";
                            echo "<td>" . $DATA['resulte'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHS as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namec'] . "</td>";
                            echo "<td>" . $DATA['business_degreec'] . "</td>";
                            echo "<td>" . $DATA['exam_degreec'] . "</td>";
                            echo "<td>" . $DATA['totalc'] . "</td>";
                            echo "<td>" . $DATA['resultc'] . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>

            </details>
            <details class="det_table">
                <summary class="det_title">السنة الثانية - الفصل الأول</summary>
                <!-- <form method="POST">
                    <button type=" submit" name="search" class="input-group-text btn-primary" id="btnGroupAddon" style="display: inline;width: 125px"> إستعراض </button>
                    <input type="number" name="stu_id" id="" class="input-group-text form-control  btn-info" id="btnGroupAddon" style="display: inline;position: relative; left:5px;width:200px;border-right:none;" required>
                </form> -->
                <table class="table">
                    <tr>
                    
                        <td>المقرر</td>
                        <td>درجة الأعمال</td>
                        <td>درجة الامتحان</td>
                        <td>المجموع</td>
                        <td>النتيجة</td>
                    </tr>
                    <?php
                    // $username = 'root';
                    // $password = '';
                    // $database = new PDO("mysql:host=localhost; dbname=tcc_mahmoud;", $username, $password);
                    // var_dump($database);
                    if (isset($_POST["search"])) {
                        $stu_id = $_POST['stu_id'];
                        // $stu_name = $_POST['stu_name'];
                        // $sub_name = $_POST['sub_name'];
                        // $business_degree = $_POST['business_degree']; computer,english1,math1,programming1,system1
                        // $exam_degree = $_POST['exam_degree'];
                        // $total = $_POST['total'];
                        // $resulta = $_POST['resulta'];
                        $SEARCHm = $database->prepare("SELECT * FROM y2c1_programming3 WHERE stu_id=$stu_id ");
                        $SEARCHC = $database->prepare("SELECT * FROM y2c1_internet_technolegie WHERE stu_id=$stu_id ");
                        $SEARCHE = $database->prepare("SELECT * FROM y2c1_info_system WHERE stu_id=$stu_id ");
                        $SEARCHM = $database->prepare("SELECT * FROM y2c1_english3 WHERE stu_id=$stu_id ");
                        $SEARCHP = $database->prepare("SELECT * FROM y2c1_digital_counct WHERE stu_id=$stu_id ");
                        $SEARCHS = $database->prepare("SELECT * FROM y2c1_algorithms WHERE stu_id=$stu_id ");
                        $SEARCHA = $database->prepare("SELECT * FROM y2c1_database1 WHERE stu_id=$stu_id ");
                        $SEARCHm->execute();
                        $SEARCHC->execute();
                        $SEARCHE->execute();
                        $SEARCHM->execute();
                        $SEARCHP->execute();
                        $SEARCHS->execute();
                        $SEARCHA->execute();
                        foreach ($SEARCHm as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namep2'] . "</td>";
                            echo "<td>" . $DATA['business_degreep'] . "</td>";
                            echo "<td>" . $DATA['exam_degreep'] . "</td>";
                            echo "<td>" . $DATA['totalp'] . "</td>";
                            echo "<td>" . $DATA['resultp'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHC as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namei'] . "</td>";
                            echo "<td>" . $DATA['business_degreei'] . "</td>";
                            echo "<td>" . $DATA['exam_degreei'] . "</td>";
                            echo "<td>" . $DATA['totali'] . "</td>";
                            echo "<td>" . $DATA['resulti'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHE as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namein'] . "</td>";
                            echo "<td>" . $DATA['business_degreei'] . "</td>";
                            echo "<td>" . $DATA['exam_degreei'] . "</td>";
                            echo "<td>" . $DATA['totali'] . "</td>";
                            echo "<td>" . $DATA['resulti'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHP as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namee'] . "</td>";
                            echo "<td>" . $DATA['business_degreee'] . "</td>";
                            echo "<td>" . $DATA['exam_degreee'] . "</td>";
                            echo "<td>" . $DATA['totale'] . "</td>";
                            echo "<td>" . $DATA['resulte'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHM as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_named'] . "</td>";
                            echo "<td>" . $DATA['business_degreed'] . "</td>";
                            echo "<td>" . $DATA['exam_degreed'] . "</td>";
                            echo "<td>" . $DATA['totald'] . "</td>";
                            echo "<td>" . $DATA['resultd'] . "</td>";
                            echo "</tr>";
                        }

                        foreach ($SEARCHS as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namea'] . "</td>";
                            echo "<td>" . $DATA['business_degreea'] . "</td>";
                            echo "<td>" . $DATA['exam_degreea'] . "</td>";
                            echo "<td>" . $DATA['totala'] . "</td>";
                            echo "<td>" . $DATA['resulta'] . "</td>";
                            echo "</tr>";
                        }

                        foreach ($SEARCHS as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_named'] . "</td>";
                            echo "<td>" . $DATA['business_degreed'] . "</td>";
                            echo "<td>" . $DATA['exam_degreed'] . "</td>";
                            echo "<td>" . $DATA['totald'] . "</td>";
                            echo "<td>" . $DATA['resultd'] . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                    <!-- حواسيب سنة ثانية فصل اول  -->
                    <?php
                    // $username = 'root';
                    // $password = '';
                    // $database = new PDO("mysql:host=localhost; dbname=tcc_mahmoud;", $username, $password);
                    // var_dump($database);
                    if (isset($_POST["search"])) {
                        $stu_id = $_POST['stu_id'];
                        // $stu_name = $_POST['stu_name'];
                        // $sub_name = $_POST['sub_name'];
                        // $business_degree = $_POST['business_degree']; computer,english1,math1,programming1,system1
                        // $exam_degree = $_POST['exam_degree'];
                        // $total = $_POST['total'];
                        // $resulta = $_POST['resulta'];
                        $SEARCHm = $database->prepare("SELECT * FROM hy2s1_programming2 WHERE stu_id=$stu_id ");
                        $SEARCHC = $database->prepare("SELECT * FROM hy2s1_computermaintenance2 WHERE stu_id=$stu_id ");
                        $SEARCHE = $database->prepare("SELECT * FROM hy2s1_automaticcontrol WHERE stu_id=$stu_id ");
                        $SEARCHM = $database->prepare("SELECT * FROM hy2s1_english3 WHERE stu_id=$stu_id ");
                        $SEARCHP = $database->prepare("SELECT * FROM hy2s1_digital_counct WHERE stu_id=$stu_id ");
                        $SEARCHS = $database->prepare("SELECT * FROM hy2s1_circuitdesign WHERE stu_id=$stu_id ");
                        $SEARCHA = $database->prepare("SELECT * FROM hy2s1_computerarchitecture WHERE stu_id=$stu_id ");
                        $SEARCHm->execute();
                        $SEARCHC->execute();
                        $SEARCHE->execute();
                        $SEARCHM->execute();
                        $SEARCHP->execute();
                        $SEARCHS->execute();
                        $SEARCHA->execute();
                        foreach ($SEARCHm as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namep2'] . "</td>";
                            echo "<td>" . $DATA['business_degreep'] . "</td>";
                            echo "<td>" . $DATA['exam_degreep'] . "</td>";
                            echo "<td>" . $DATA['totalp'] . "</td>";
                            echo "<td>" . $DATA['resultp'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHC as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namec'] . "</td>";
                            echo "<td>" . $DATA['business_degreec'] . "</td>";
                            echo "<td>" . $DATA['exam_degreec'] . "</td>";
                            echo "<td>" . $DATA['totalc'] . "</td>";
                            echo "<td>" . $DATA['resultc'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHE as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namef'] . "</td>";
                            echo "<td>" . $DATA['business_degreef'] . "</td>";
                            echo "<td>" . $DATA['exam_degreef'] . "</td>";
                            echo "<td>" . $DATA['totalf'] . "</td>";
                            echo "<td>" . $DATA['resultf'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHP as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namee'] . "</td>";
                            echo "<td>" . $DATA['business_degreee'] . "</td>";
                            echo "<td>" . $DATA['exam_degreee'] . "</td>";
                            echo "<td>" . $DATA['totale'] . "</td>";
                            echo "<td>" . $DATA['resulte'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHM as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_named'] . "</td>";
                            echo "<td>" . $DATA['business_degreed'] . "</td>";
                            echo "<td>" . $DATA['exam_degreed'] . "</td>";
                            echo "<td>" . $DATA['totald'] . "</td>";
                            echo "<td>" . $DATA['resultd'] . "</td>";
                            echo "</tr>";
                        }

                        foreach ($SEARCHS as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namea'] . "</td>";
                            echo "<td>" . $DATA['business_degreea'] . "</td>";
                            echo "<td>" . $DATA['exam_degreea'] . "</td>";
                            echo "<td>" . $DATA['totala'] . "</td>";
                            echo "<td>" . $DATA['resulta'] . "</td>";
                            echo "</tr>";
                        }

                        foreach ($SEARCHS as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namem'] . "</td>";
                            echo "<td>" . $DATA['business_degreem'] . "</td>";
                            echo "<td>" . $DATA['exam_degreem'] . "</td>";
                            echo "<td>" . $DATA['totalm'] . "</td>";
                            echo "<td>" . $DATA['resultm'] . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>

            </details>
            <details class="det_table">
                <summary class="det_title">السنة الثانية - الفصل الثاني</summary>
                <!-- <form method="POST">
                    <button type=" submit" name="search" onclick="ref()" class="input-group-text btn-primary" id="btnGroupAddon" style="display: inline;width: 125px"> إستعراض </button>
                    <input type="number" name="stu_id" id="" class="input-group-text form-control  btn-info" id="btnGroupAddon" style="display: inline;position: relative; left:5px;width:200px;border-right:none;" required>
                </form> -->
                <table class="table">
                    <tr>
                        
                        <td>المقرر</td>
                        <td>درجة الأعمال</td>
                        <td>درجة الامتحان</td>
                        <td>المجموع</td>
                        <td>النتيجة</td>
                    </tr>
                    <?php
                    // $username = 'root';
                    // $password = '';
                    // $database = new PDO("mysql:host=localhost; dbname=tcc_mahmoud;", $username, $password);
                    // var_dump($database);
                    if (isset($_POST["search"])) {
                        $stu_id = $_POST['stu_id'];
                        // $stu_name = $_POST['stu_name'];
                        // $sub_name = $_POST['sub_name'];
                        // $business_degree = $_POST['business_degree']; computer,english1,math1,programming1,system1
                        // $exam_degree = $_POST['exam_degree'];
                        // $total = $_POST['total'];
                        // $resulta = $_POST['resulta'];
                        $SEARCHm = $database->prepare("SELECT * FROM y2c2_programming4 WHERE stu_id=$stu_id ");
                        $SEARCHC = $database->prepare("SELECT * FROM y2c2_softwareenginering WHERE stu_id=$stu_id ");
                        $SEARCHE = $database->prepare("SELECT * FROM y2c2_multemidiasystam WHERE stu_id=$stu_id ");
                        $SEARCHM = $database->prepare("SELECT * FROM y2c2_english4 WHERE stu_id=$stu_id ");
                        $SEARCHP = $database->prepare("SELECT * FROM y2c2_infosecurty WHERE stu_id=$stu_id ");
                        $SEARCHA = $database->prepare("SELECT * FROM y2c2_database2 WHERE stu_id=$stu_id ");
                        $SEARCHm->execute();
                        $SEARCHC->execute();
                        $SEARCHE->execute();
                        $SEARCHM->execute();
                        $SEARCHP->execute();
                        $SEARCHS->execute();
                        $SEARCHA->execute();
                        foreach ($SEARCHm as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namep'] . "</td>";
                            echo "<td>" . $DATA['business_degreep'] . "</td>";
                            echo "<td>" . $DATA['exam_degreep'] . "</td>";
                            echo "<td>" . $DATA['totalp'] . "</td>";
                            echo "<td>" . $DATA['resultp'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHC as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_names'] . "</td>";
                            echo "<td>" . $DATA['business_degrees'] . "</td>";
                            echo "<td>" . $DATA['exam_degrees'] . "</td>";
                            echo "<td>" . $DATA['totals'] . "</td>";
                            echo "<td>" . $DATA['results'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHE as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namem'] . "</td>";
                            echo "<td>" . $DATA['business_degreem'] . "</td>";
                            echo "<td>" . $DATA['exam_degreem'] . "</td>";
                            echo "<td>" . $DATA['totalm'] . "</td>";
                            echo "<td>" . $DATA['resultm'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHP as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namee'] . "</td>";
                            echo "<td>" . $DATA['business_degreee'] . "</td>";
                            echo "<td>" . $DATA['exam_degreee'] . "</td>";
                            echo "<td>" . $DATA['totale'] . "</td>";
                            echo "<td>" . $DATA['resulte'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHM as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namei'] . "</td>";
                            echo "<td>" . $DATA['business_degreei'] . "</td>";
                            echo "<td>" . $DATA['exam_degreei'] . "</td>";
                            echo "<td>" . $DATA['totali'] . "</td>";
                            echo "<td>" . $DATA['resulti'] . "</td>";
                            echo "</tr>";
                        }

                        foreach ($SEARCHS as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_named'] . "</td>";
                            echo "<td>" . $DATA['business_degreed'] . "</td>";
                            echo "<td>" . $DATA['exam_degreed'] . "</td>";
                            echo "<td>" . $DATA['totald'] . "</td>";
                            echo "<td>" . $DATA['resultd'] . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                    <!-- حواسيب سنة ثانية فصل ثاني  -->
                    <?php
                    // $username = 'root';
                    // $password = '';
                    // $database = new PDO("mysql:host=localhost; dbname=tcc_mahmoud;", $username, $password);
                    // var_dump($database);
                    if (isset($_POST["search"])) {
                        $stu_id = $_POST['stu_id'];
                        // $stu_name = $_POST['stu_name'];
                        // $sub_name = $_POST['sub_name'];
                        // $business_degree = $_POST['business_degree']; computer,english1,math1,programming1,system1
                        // $exam_degree = $_POST['exam_degree'];
                        // $total = $_POST['total'];
                        // $resulta = $_POST['resulta'];
                        $SEARCHm = $database->prepare("SELECT * FROM hy2s2_programming3 WHERE stu_id=$stu_id ");
                        $SEARCHC = $database->prepare("SELECT * FROM hy2s2_system2 WHERE stu_id=$stu_id ");
                        $SEARCHE = $database->prepare("SELECT * FROM hy2s2_networks WHERE stu_id=$stu_id ");
                        $SEARCHM = $database->prepare("SELECT * FROM hy2s2_englesh4 WHERE stu_id=$stu_id ");
                        $SEARCHP = $database->prepare("SELECT * FROM hy2s2_automaticcontrolapps WHERE stu_id=$stu_id ");
                        $SEARCHA = $database->prepare("SELECT * FROM hy2s2_internet_technolegie WHERE stu_id=$stu_id ");
                        $SEARCHS = $database->prepare("SELECT * FROM hy2s1_computerarchitecture WHERE stu_id=$stu_id ");
                        $SEARCHm->execute();
                        $SEARCHC->execute();
                        $SEARCHE->execute();
                        $SEARCHM->execute();
                        $SEARCHP->execute();
                        $SEARCHS->execute();
                        $SEARCHA->execute();
                        foreach ($SEARCHm as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namep'] . "</td>";
                            echo "<td>" . $DATA['business_degreep'] . "</td>";
                            echo "<td>" . $DATA['exam_degreep'] . "</td>";
                            echo "<td>" . $DATA['totalp'] . "</td>";
                            echo "<td>" . $DATA['resultp'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHC as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namec'] . "</td>";
                            echo "<td>" . $DATA['business_degreec'] . "</td>";
                            echo "<td>" . $DATA['exam_degreec'] . "</td>";
                            echo "<td>" . $DATA['totalc'] . "</td>";
                            echo "<td>" . $DATA['resultc'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHE as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namen'] . "</td>";
                            echo "<td>" . $DATA['business_degreen'] . "</td>";
                            echo "<td>" . $DATA['exam_degreen'] . "</td>";
                            echo "<td>" . $DATA['totaln'] . "</td>";
                            echo "<td>" . $DATA['resultn'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHP as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namee'] . "</td>";
                            echo "<td>" . $DATA['business_degreee'] . "</td>";
                            echo "<td>" . $DATA['exam_degreee'] . "</td>";
                            echo "<td>" . $DATA['totale'] . "</td>";
                            echo "<td>" . $DATA['resulte'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHM as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namef'] . "</td>";
                            echo "<td>" . $DATA['business_degreef'] . "</td>";
                            echo "<td>" . $DATA['exam_degreef'] . "</td>";
                            echo "<td>" . $DATA['totalf'] . "</td>";
                            echo "<td>" . $DATA['resultf'] . "</td>";
                            echo "</tr>";
                        }

                        foreach ($SEARCHS as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_named'] . "</td>";
                            echo "<td>" . $DATA['business_degreed'] . "</td>";
                            echo "<td>" . $DATA['exam_degreed'] . "</td>";
                            echo "<td>" . $DATA['totald'] . "</td>";
                            echo "<td>" . $DATA['resultd'] . "</td>";
                            echo "</tr>";
                        }
                        foreach ($SEARCHS as $DATA) {
                            echo "<tr>";
                            
                            echo "<td>" . $DATA['sub_namem'] . "</td>";
                            echo "<td>" . $DATA['business_degreem'] . "</td>";
                            echo "<td>" . $DATA['exam_degreem'] . "</td>";
                            echo "<td>" . $DATA['totalm'] . "</td>";
                            echo "<td>" . $DATA['resultm'] . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </table>

            </details>
        </section>
    </main>

    <!-- ================================ -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- <script src="main.js"></script> -->

    </script>
    <script>
        let li3 = document.getElementById("li3"); //الرئيسية
        let body = document.querySelector("body");
        body.onload = function() {
            li3.classList.add('activated');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>