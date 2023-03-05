<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hard-viow-data</title>
    <link rel="stylesheet" href="../assest/css/style.css">
    <link rel="icon" type="image/png" href="../img/tcc.png">

    <style>
        tr {
            text-align: center;
            line-height: 50px;
            font-weight: bold;
            
        }
        body{
            padding: 10px 0;
        }
        .table td {
            width: auto;
            height: 45px;
        }
        .table{
            margin: 0px auto 40px auto;
            width: 80%;
        }
        .exam_title{
            margin: 0 auto;
            width: 80%;
        }
    </style>
</head>


<body dir="rtl">
<div class="exam_title">
    <span class="">قوائم المواد المصفرة -هندسة الحواسيب - السنة الأولى - الفصل الأول</span>
    </div>

    <table class="table">
        <tr>
            <th>الرقم الامتحاني</th>
            <th>اسم الطالب</th>
            <th>المادة</th>
            <th>درجة الأعمال</th>
            <th>درجة الامتحان</th>
            <th>المجموع</th>
            <th>النتيجة</th>
            <th>تاريخ التصفير</th>
        </tr>
        <?php
        $username = 'root';
        $password = '';
        $database = new PDO("mysql:host=localhost; dbname=tcc_db;", $username, $password);
        $date_today = date("Y");
        $SEARCHm = $database->prepare("SELECT * FROM hy1s1_system1 WHERE total <= 0 ");
        $SEARCHC = $database->prepare("SELECT * FROM hy1s1_arabic WHERE total <= 0 ");
        $SEARCHE = $database->prepare("SELECT * FROM hy1s1_englesh1 WHERE totale <= 0 ");
        $SEARCHM = $database->prepare("SELECT * FROM hy1s1_electrical_foundations WHERE totalf <= 0 ");
        $SEARCHP = $database->prepare("SELECT * FROM hy1s1_math1 WHERE totalm <= 0 ");
        $SEARCHS = $database->prepare("SELECT * FROM hy1s1_entertocomputer WHERE totalc <= 0 ");
        $SEARCHA = $database->prepare("SELECT * FROM hy1s1_logiccircuits WHERE totall <= 0 ");
        $SEARCHm->execute();
        $SEARCHC->execute();
        $SEARCHE->execute();
        $SEARCHM->execute();
        $SEARCHP->execute();
        $SEARCHS->execute();
        $SEARCHA->execute();
        foreach ($SEARCHm as $DATA) {
            "</td>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_name'] . "</td>";
            echo "<td>" . $DATA['business_degree'] . "</td>";
            echo "<td>" . $DATA['exam_degree'] . "</td>";
            echo "<td>" . $DATA['total'] . "</td>";
            echo "<td>" . $DATA['result'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHC as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_name'] . "</td>";
            echo "<td>" . $DATA['business_degree'] . "</td>";
            echo "<td>" . $DATA['exam_degree'] . "</td>";
            echo "<td>" . $DATA['total'] . "</td>";
            echo "<td>" . $DATA['result'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHE as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namee'] . "</td>";
            echo "<td>" . $DATA['business_degreee'] . "</td>";
            echo "<td>" . $DATA['exam_degreee'] . "</td>";
            echo "<td>" . $DATA['totale'] . "</td>";
            echo "<td>" . $DATA['resultae'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHM as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namef'] . "</td>";
            echo "<td>" . $DATA['business_degreef'] . "</td>";
            echo "<td>" . $DATA['exam_degreef'] . "</td>";
            echo "<td>" . $DATA['totalf'] . "</td>";
            echo "<td>" . $DATA['resultf'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHP as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namem'] . "</td>";
            echo "<td>" . $DATA['business_degreem'] . "</td>";
            echo "<td>" . $DATA['exam_degreem'] . "</td>";
            echo "<td>" . $DATA['totalm'] . "</td>";
            echo "<td>" . $DATA['resultm'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHS as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namec'] . "</td>";
            echo "<td>" . $DATA['business_degreec'] . "</td>";
            echo "<td>" . $DATA['exam_degreec'] . "</td>";
            echo "<td>" . $DATA['totalc'] . "</td>";
            echo "<td>" . $DATA['resultc'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHS as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namel'] . "</td>";
            echo "<td>" . $DATA['business_degreel'] . "</td>";
            echo "<td>" . $DATA['exam_degreel'] . "</td>";
            echo "<td>" . $DATA['totall'] . "</td>";
            echo "<td>" . $DATA['resultl'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }



        ?>


    </table><br>
    <div class="exam_title">
    <span class="">قوائم المواد المصفرة -هندسة الحواسيب - السنة الأولى - الفصل الثاني</span>
    </div>
    <table class="table table-primary">
        <tr>
            <th>الرقم الامتحاني</th>
            <th>اسم الطالب</th>
            <th>المادة</th>
            <th>درجة الأعمال</th>
            <th>درجة الامتحان</th>
            <th>المجموع</th>
            <th>النتيجة</th>
            <th>تاريخ التصفير</th>
        </tr>
        <?php
        // $username = 'root';
        // $password = '';
        // $database = new PDO("mysql:host=localhost; dbname=tcc_mahmoud;", $username, $password);
        $date_today = date("Y");
        $SEARCH = $database->prepare("SELECT * FROM hy1s2_programming1 WHERE total <= 0 ");
        $SEARCH = $database->prepare("SELECT * FROM hy1s2_integrated_circuits WHERE totalf <= 0 ");
        $SEARCH = $database->prepare("SELECT * FROM hy1s2_peripheralunits WHERE totall <= 0 ");
        $SEARCH = $database->prepare("SELECT * FROM hy1s2_computerarchitecture WHERE totals <= 0 ");
        $SEARCH = $database->prepare("SELECT * FROM hy1s2_english2 WHERE totale <= 0 ");
        $SEARCH = $database->prepare("SELECT * FROM hy1s2_computermaintenance WHERE totalc <= 0 ");
        $SEARCH->execute();
        $SEARCH->execute();
        $SEARCH->execute();
        $SEARCH->execute();
        $SEARCH->execute();
        $SEARCH->execute();
        foreach ($SEARCHm as $DATA) {
            "</td>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_name'] . "</td>";
            echo "<td>" . $DATA['business_degree'] . "</td>";
            echo "<td>" . $DATA['exam_degree'] . "</td>";
            echo "<td>" . $DATA['total'] . "</td>";
            echo "<td>" . $DATA['result'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHC as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namef'] . "</td>";
            echo "<td>" . $DATA['business_degreef'] . "</td>";
            echo "<td>" . $DATA['exam_degreef'] . "</td>";
            echo "<td>" . $DATA['totalf'] . "</td>";
            echo "<td>" . $DATA['resultf'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHE as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_namn'] . "</td>";
            echo "<td>" . $DATA['sub_namel'] . "</td>";
            echo "<td>" . $DATA['business_degreel'] . "</td>";
            echo "<td>" . $DATA['exam_degreel'] . "</td>";
            echo "<td>" . $DATA['totall'] . "</td>";
            echo "<td>" . $DATA['resultl'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHM as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_names'] . "</td>";
            echo "<td>" . $DATA['business_degrees'] . "</td>";
            echo "<td>" . $DATA['exam_degrees'] . "</td>";
            echo "<td>" . $DATA['totals'] . "</td>";
            echo "<td>" . $DATA['results'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHP as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namee'] . "</td>";
            echo "<td>" . $DATA['business_degreee'] . "</td>";
            echo "<td>" . $DATA['exam_degreee'] . "</td>";
            echo "<td>" . $DATA['totale'] . "</td>";
            echo "<td>" . $DATA['resulte'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHS as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namec'] . "</td>";
            echo "<td>" . $DATA['business_degreec'] . "</td>";
            echo "<td>" . $DATA['exam_degreec'] . "</td>";
            echo "<td>" . $DATA['totalc'] . "</td>";
            echo "<td>" . $DATA['resultc'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }

        ?>
    </table>
    <div class="exam_title">
    <span class="">قوائم المواد المصفرة -هندسة الحواسيب - السنة الثانية - الفصل الأول</span>
    </div>
    <table class="table table-primary">
        <tr>
            <th>الرقم الامتحاني</th>
            <th>اسم الطالب</th>
            <th>المادة</th>
            <th>درجة الأعمال</th>
            <th>درجة الامتحان</th>
            <th>المجموع</th>
            <th>النتيجة</th>
            <th>تاريخ التصفير</th>
        </tr>
        <?php
        // $username = 'root';
        // $password = '';
        // $database = new PDO("mysql:host=localhost; dbname=tcc_mahmoud;", $username, $password);
        $date_today = date("Y");
        $SEARCH1 = $database->prepare("SELECT * FROM hy2s1_programming2 WHERE totalp <=0 ");
        $SEARCH2 = $database->prepare("SELECT * FROM hy2s1_computermaintenance2 WHERE totalc <=0 ");
        $SEARCH3 = $database->prepare("SELECT * FROM hy2s1_automaticcontrol WHERE totalf <=0 ");
        $SEARCH4 = $database->prepare("SELECT * FROM hy2s1_english3 WHERE totale <=0 ");
        $SEARCH5 = $database->prepare("SELECT * FROM hy2s1_digital_counct WHERE totald <=0 ");
        $SEARCH6 = $database->prepare("SELECT * FROM hy2s1_circuitdesign WHERE totala <=0 ");
        $SEARCH7 = $database->prepare("SELECT * FROM hy2s1_computerarchitecture WHERE totalm <=0 ");
        $SEARCH1->execute();
        $SEARCH2->execute();
        $SEARCH3->execute();
        $SEARCH4->execute();
        $SEARCH5->execute();
        $SEARCH6->execute();
        $SEARCH7->execute();
        foreach ($SEARCH1 as $DATA) {
            "</td>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namep2'] . "</td>";
            echo "<td>" . $DATA['business_degreep'] . "</td>";
            echo "<td>" . $DATA['exam_degreep'] . "</td>";
            echo "<td>" . $DATA['totalp'] . "</td>";
            echo "<td>" . $DATA['resultp'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCH2 as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namec'] . "</td>";
            echo "<td>" . $DATA['business_degreec'] . "</td>";
            echo "<td>" . $DATA['exam_degreec'] . "</td>";
            echo "<td>" . $DATA['totalc'] . "</td>";
            echo "<td>" . $DATA['resultc'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCH3 as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_namn'] . "</td>";
            echo "<td>" . $DATA['sub_namef'] . "</td>";
            echo "<td>" . $DATA['business_degreef'] . "</td>";
            echo "<td>" . $DATA['exam_degreef'] . "</td>";
            echo "<td>" . $DATA['totalf'] . "</td>";
            echo "<td>" . $DATA['resultf'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCH4 as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namee'] . "</td>";
            echo "<td>" . $DATA['business_degreee'] . "</td>";
            echo "<td>" . $DATA['exam_degreee'] . "</td>";
            echo "<td>" . $DATA['totale'] . "</td>";
            echo "<td>" . $DATA['resulte'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCH5 as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_named'] . "</td>";
            echo "<td>" . $DATA['business_degreed'] . "</td>";
            echo "<td>" . $DATA['exam_degreed'] . "</td>";
            echo "<td>" . $DATA['totald'] . "</td>";
            echo "<td>" . $DATA['resultd'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }

        foreach ($SEARCH6 as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namea'] . "</td>";
            echo "<td>" . $DATA['business_degreea'] . "</td>";
            echo "<td>" . $DATA['exam_degreea'] . "</td>";
            echo "<td>" . $DATA['totala'] . "</td>";
            echo "<td>" . $DATA['resulta'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }

        foreach ($SEARCH7 as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namem'] . "</td>";
            echo "<td>" . $DATA['business_degreem'] . "</td>";
            echo "<td>" . $DATA['exam_degreem'] . "</td>";
            echo "<td>" . $DATA['totalm'] . "</td>";
            echo "<td>" . $DATA['resultm'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }

        ?>
    </table><br>
    <div class="exam_title">
    <span class="">قوائم المواد المصفرة -هندسة الحواسيب - السنة الثانية - الفصل الثاني</span>
    </div>
    <table class="table table-primary">
        <tr>
            <th>الرقم الامتحاني</th>
            <th>اسم الطالب</th>
            <th>المادة</th>
            <th>درجة الأعمال</th>
            <th>درجة الامتحان</th>
            <th>المجموع</th>
            <th>النتيجة</th>
            <th>تاريخ التصفير</th>
        </tr>
        <?php
        // $username = 'root';
        // $password = '';
        // $database = new PDO("mysql:host=localhost; dbname=tcc_mahmoud;", $username, $password);
        $date_today = date("Y");
        $SEARCH1 = $database->prepare("SELECT * FROM hy2s2_programming3 WHERE  totalp <= 0 ");
        $SEARCH2 = $database->prepare("SELECT * FROM hy2s2_system2 WHERE  totalc <= 0 ");
        $SEARCH3 = $database->prepare("SELECT * FROM hy2s2_networks WHERE  totaln <= 0 ");
        $SEARCH4 = $database->prepare("SELECT * FROM hy2s2_englesh4 WHERE  totale <= 0 ");
        $SEARCH5 = $database->prepare("SELECT * FROM hy2s2_automaticcontrolapps WHERE  totalf <= 0 ");
        $SEARCH6 = $database->prepare("SELECT * FROM hy2s2_internet_technolegie WHERE  totald <= 0 ");
        $SEARCH7 = $database->prepare("SELECT * FROM hy2s1_computerarchitecture WHERE  totalm <= 0 ");
        $SEARCH1->execute();
        $SEARCH2->execute();
        $SEARCH3->execute();
        $SEARCH4->execute();
        $SEARCH5->execute();
        $SEARCH6->execute();
        $SEARCH7->execute();
        foreach ($SEARCH1 as $DATA) {
            header("refresh:5;");
            "</td>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namep'] . "</td>";
            echo "<td>" . $DATA['business_degreep'] . "</td>";
            echo "<td>" . $DATA['exam_degreep'] . "</td>";
            echo "<td>" . $DATA['totalp'] . "</td>";
            echo "<td>" . $DATA['resultp'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCH2 as $DATA) {
            header("refresh:5;");
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namec'] . "</td>";
            echo "<td>" . $DATA['business_degreec'] . "</td>";
            echo "<td>" . $DATA['exam_degreec'] . "</td>";
            echo "<td>" . $DATA['totalc'] . "</td>";
            echo "<td>" . $DATA['resultc'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCH3 as $DATA) {
            header("refresh:5;");
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_namn'] . "</td>";
            echo "<td>" . $DATA['sub_namen'] . "</td>";
            echo "<td>" . $DATA['business_degreen'] . "</td>";
            echo "<td>" . $DATA['exam_degreen'] . "</td>";
            echo "<td>" . $DATA['totaln'] . "</td>";
            echo "<td>" . $DATA['resultn'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCH4 as $DATA) {
            header("refresh:5;");
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namee'] . "</td>";
            echo "<td>" . $DATA['business_degreee'] . "</td>";
            echo "<td>" . $DATA['exam_degreee'] . "</td>";
            echo "<td>" . $DATA['totale'] . "</td>";
            echo "<td>" . $DATA['resulte'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCH5 as $DATA) {
            header("refresh:5;");
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namef'] . "</td>";
            echo "<td>" . $DATA['business_degreef'] . "</td>";
            echo "<td>" . $DATA['exam_degreef'] . "</td>";
            echo "<td>" . $DATA['totalf'] . "</td>";
            echo "<td>" . $DATA['resultf'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }

        foreach ($SEARCH6 as $DATA) {
            header("refresh:5;");
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_named'] . "</td>";
            echo "<td>" . $DATA['business_degreed'] . "</td>";
            echo "<td>" . $DATA['exam_degreed'] . "</td>";
            echo "<td>" . $DATA['totald'] . "</td>";
            echo "<td>" . $DATA['resultd'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCH7 as $DATA) {
            header("refresh:5;");
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namem'] . "</td>";
            echo "<td>" . $DATA['business_degreem'] . "</td>";
            echo "<td>" . $DATA['exam_degreem'] . "</td>";
            echo "<td>" . $DATA['totalm'] . "</td>";
            echo "<td>" . $DATA['resultm'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>

</html>