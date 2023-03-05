<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zero Subjects</title>
    <link rel="icon" type="image/png" href="../img/tcc.png">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../assest/css/style.css">
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
    <span class="">قوائم المواد المصفرة -هندسة البرمجيات - السنة الأولى - الفصل الأول</span>
    </div>
    <table class="table">
        <tr>
            <th>الرقم الامتحاني</th>
            <th>اسم الطالب</th=>
            <th>المادة</th>
            <th>درجة الأعمال</th=>
            <th>درجة الامتحان</thtyle=>
            <th>المجموع</thyle=>
            <th>النتيجة</thstyle=>
            <th>تاريخ التصفير</th>
        </tr>
        <?php
        
        error_reporting(0);
        include('../database/connect.php');         

        $username = 'root';
        $password = '';
        $database = new PDO("mysql:host=localhost; dbname=tcc_db;", $username, $password);
        $date_today = date("Y");
        $sqll = $database->prepare("SELECT * FROM electrical_foundations WHERE total <=0");
        $SEARCHC = $database->prepare("SELECT * FROM computer WHERE totalc <=0 ");
        $SEARCHE = $database->prepare("SELECT * FROM english1 WHERE  totale <=0 ");
        $SEARCHM = $database->prepare("SELECT * FROM math1 WHERE  totalm <=0 ");
        $SEARCHP = $database->prepare("SELECT * FROM programming1 WHERE  totalp <=0 ");
        $SEARCHS = $database->prepare("SELECT * FROM system1 WHERE  totals <=0 ");
        $SEARCHA = $database->prepare("SELECT * FROM arabic WHERE  totalar <=0 ");
        $sqll->execute();
        $SEARCHC->execute();
        $SEARCHE->execute();
        $SEARCHM->execute();
        $SEARCHP->execute();
        $SEARCHS->execute();
        $SEARCHA->execute();

        



        foreach ($sqll as $info) {

            echo "<tr>";
            echo "<td>" . $info['stu_id'] . "</td>";
            $row = mysqli_fetch_assoc(mysqli_query($connect, "SELECT stu_name FROM stu_reg WHERE stu_id =" . $info['stu_id']));
            echo '<td>' . $row["stu_name"] . '</td>';
            echo "<td>" . $info['sub_name'] . "</td>";
            echo "<td>" . $info['business_degree'] . "</td>";
            echo "<td>" . $info['exam_degree'] . "</td>";
            echo "<td>" . $info['total'] . "</td>";
            echo "<td>" . $info['resulta'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHC as $DATA) {
            echo "<tr class='table-secondary'>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            $row = mysqli_fetch_assoc(mysqli_query($connect, "SELECT stu_name FROM stu_reg WHERE stu_id =" . $DATA['stu_id']));
            echo '<td>' . $row["stu_name"] . '</td>';
            echo "<td>" . $DATA['sub_namec'] . "</td>";
            echo "<td>" . $DATA['business_degreec'] . "</td>";
            echo "<td>" . $DATA['exam_degreec'] . "</td>";
            echo "<td>" . $DATA['totalc'] . "</td>";
            echo "<td>" . $DATA['resultac'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHE as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            $row = mysqli_fetch_assoc(mysqli_query($connect, "SELECT stu_name FROM stu_reg WHERE stu_id =" . $DATA['stu_id']));
            echo '<td>' . $row["stu_name"] . '</td>';
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
            $row = mysqli_fetch_assoc(mysqli_query($connect, "SELECT stu_name FROM stu_reg WHERE stu_id =" . $DATA['stu_id']));
            echo '<td>' . $row["stu_name"] . '</td>';
            echo "<td>" . $DATA['sub_namem'] . "</td>";
            echo "<td>" . $DATA['business_degreem'] . "</td>";
            echo "<td>" . $DATA['exam_degreem'] . "</td>";
            echo "<td>" . $DATA['totalm'] . "</td>";
            echo "<td>" . $DATA['resultam'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHP as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            $row = mysqli_fetch_assoc(mysqli_query($connect, "SELECT stu_name FROM stu_reg WHERE stu_id =" . $DATA['stu_id']));
            echo '<td>' . $row["stu_name"] . '</td>';
            echo "<td>" . $DATA['sub_namep'] . "</td>";
            echo "<td>" . $DATA['business_degreep'] . "</td>";
            echo "<td>" . $DATA['exam_degreep'] . "</td>";
            echo "<td>" . $DATA['totalp'] . "</td>";
            echo "<td>" . $DATA['resultap'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHS as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            $row = mysqli_fetch_assoc(mysqli_query($connect, "SELECT stu_name FROM stu_reg WHERE stu_id =" . $DATA['stu_id']));
            echo '<td>' . $row["stu_name"] . '</td>';
            echo "<td>" . $DATA['sub_names'] . "</td>";
            echo "<td>" . $DATA['business_degrees'] . "</td>";
            echo "<td>" . $DATA['exam_degrees'] . "</td>";
            echo "<td>" . $DATA['totals'] . "</td>";
            echo "<td>" . $DATA['resultas'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }

        foreach ($SEARCHA as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            $row = mysqli_fetch_assoc(mysqli_query($connect, "SELECT stu_name FROM stu_reg WHERE stu_id =" . $DATA['stu_id']));
            echo '<td>' . $row["stu_name"] . '</td>';
            echo "<td>" . $DATA['sub_namear'] . "</td>";
            echo "<td>" . $DATA['business_degreear'] . "</td>";
            echo "<td>" . $DATA['exam_degreear'] . "</td>";
            echo "<td>" . $DATA['totalar'] . "</td>";
            echo "<td>" . $DATA['resultaar'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        ?>


    </table><br>
    <div class="exam_title">
    <span class="">قوائم المواد المصفرة -هندسة البرمجيات - السنة الأولى - الفصل الثاني</span>
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
        $SEARCHm = $database->prepare("SELECT * FROM programming2 WHERE totalp <= 0");
        $SEARCHC = $database->prepare("SELECT * FROM c2_webdesigin WHERE totalw <= 0 ");
        $SEARCHE = $database->prepare("SELECT * FROM c2_networks WHERE totaln <= 0 ");
        $SEARCHM = $database->prepare("SELECT * FROM c2_systems2 WHERE totals <= 0 ");
        $SEARCHP = $database->prepare("SELECT * FROM c2_maht2 WHERE totalm <= 0 ");
        $SEARCHS = $database->prepare("SELECT * FROM c2_english2 WHERE totale <= 0 ");
        $SEARCHA = $database->prepare("SELECT * FROM c2_english2 WHERE totale <= 0 ");
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
            echo "<td>" . $DATA['sub_namep2'] . "</td>";
            echo "<td>" . $DATA['business_degreep'] . "</td>";
            echo "<td>" . $DATA['exam_degreep'] . "</td>";
            echo "<td>" . $DATA['totalp'] . "</td>";
            echo "<td>" . $DATA['resultp'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHC as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namew'] . "</td>";
            echo "<td>" . $DATA['business_degreew'] . "</td>";
            echo "<td>" . $DATA['exam_degreew'] . "</td>";
            echo "<td>" . $DATA['totalw'] . "</td>";
            echo "<td>" . $DATA['resultw'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHE as $DATA) {
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
    <span class="">قوائم المواد المصفرة -هندسة البرمجيات - السنة الثانية - الفصل الأول</span>
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
        $SEARCHm = $database->prepare("SELECT * FROM y2c1_programming3 WHERE totalp <= 0 ");
        $SEARCHC = $database->prepare("SELECT * FROM y2c1_internet_technolegie WHERE totali <= 0 ");
        $SEARCHE = $database->prepare("SELECT * FROM y2c1_info_system WHERE totali <= 0 ");
        $SEARCHM = $database->prepare("SELECT * FROM y2c1_english3 WHERE totale <= 0 ");
        $SEARCHP = $database->prepare("SELECT * FROM y2c1_digital_counct WHERE totald <= 0 ");
        $SEARCHS = $database->prepare("SELECT * FROM y2c1_algorithms WHERE totala <= 0 ");
        $SEARCHA = $database->prepare("SELECT * FROM y2c1_database1 WHERE totald <= 0 ");
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
            echo "<td>" . $DATA['sub_namep2'] . "</td>";
            echo "<td>" . $DATA['business_degreep'] . "</td>";
            echo "<td>" . $DATA['exam_degreep'] . "</td>";
            echo "<td>" . $DATA['totalp'] . "</td>";
            echo "<td>" . $DATA['resultp'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHC as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_name'] . "</td>";
            echo "<td>" . $DATA['sub_namei'] . "</td>";
            echo "<td>" . $DATA['business_degreei'] . "</td>";
            echo "<td>" . $DATA['exam_degreei'] . "</td>";
            echo "<td>" . $DATA['totali'] . "</td>";
            echo "<td>" . $DATA['resulti'] . "</td>";
            echo "<td>" . date('d - m - Y') . "</td>";
            echo "</tr>";
        }
        foreach ($SEARCHE as $DATA) {
            echo "<tr>";
            echo "<td>" . $DATA['stu_id'] . "</td>";
            echo "<td>" . $DATA['stu_namn'] . "</td>";
            echo "<td>" . $DATA['sub_namein'] . "</td>";
            echo "<td>" . $DATA['business_degreei'] . "</td>";
            echo "<td>" . $DATA['exam_degreei'] . "</td>";
            echo "<td>" . $DATA['totali'] . "</td>";
            echo "<td>" . $DATA['resulti'] . "</td>";
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
        foreach ($SEARCHM as $DATA) {
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

        foreach ($SEARCHS as $DATA) {
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

        foreach ($SEARCHS as $DATA) {
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

        ?>
    </table><br>
    <div class="exam_title">
    <span class="">قوائم المواد المصفرة -هندسة البرمجيات - السنة الثانية - الفصل الثاني</span>
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
            $SEARCHa = $database->prepare("SELECT * FROM y2c2_programming4 WHERE totalp <= 0  ");
            $SEARCHb = $database->prepare("SELECT * FROM y2c2_softwareenginering WHERE totals <= 0  ");
            $SEARCHc = $database->prepare("SELECT * FROM y2c2_multemidiasystam WHERE totalm <= 0  ");
            $SEARCHd= $database->prepare("SELECT * FROM y2c2_english4 WHERE totale <= 0  ");
            $SEARCHe = $database->prepare("SELECT * FROM y2c2_infosecurty WHERE totali <= 0  ");
            $SEARCHf = $database->prepare("SELECT * FROM y2c2_database2 WHERE totald <= 0  ");
            $SEARCHa->execute();
            $SEARCHb->execute();
            $SEARCHc->execute();
            $SEARCHd->execute();
            $SEARCHe->execute();
            $SEARCHf->execute();
            ;
            foreach ($SEARCHa as $DATA) {
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
            foreach ($SEARCHb as $DATA) {
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
            foreach ($SEARCHc as $DATA) {
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
            foreach ($SEARCHd as $DATA) {
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
            foreach ($SEARCHe as $DATA) {
                echo "<tr>";
                echo "<td>" . $DATA['stu_id'] . "</td>";
                echo "<td>" . $DATA['stu_name'] . "</td>";
                echo "<td>" . $DATA['sub_namei'] . "</td>";
                echo "<td>" . $DATA['business_degreei'] . "</td>";
                echo "<td>" . $DATA['exam_degreei'] . "</td>";
                echo "<td>" . $DATA['totali'] . "</td>";
                echo "<td>" . $DATA['resulti'] . "</td>";
                echo "<td>" . date('d - m - Y') . "</td>";
                echo "</tr>";
            }

            foreach ($SEARCHf as $DATA) {
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
            ?>
        </table>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>

</html>