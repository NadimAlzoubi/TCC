<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCC-library</title>
    <link rel="stylesheet" href="assest/css/style.css">
    <link rel="icon" type="image/png" href="img/tcc.png">

</head>
<body>
    <!-- =====================header=================== -->
    <header class="header" id="header">

        <nav class="nav">

        <div class="nav_img">المعهد التقاني للحاسوب</div>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item" id="li1">
                        <a href="index.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="nav_name">الرئيسية</span>
                        
                        </a>
                    </li>
                    <li class="nav_item" id="li2">
                        <a href="library.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="library-outline"></ion-icon></span>
                            <span class="nav_name">المكتبة</span>
                        </a>
                    </li>
                    <li class="nav_item" id="li3">
                        <a href="profile.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="person-outline"></ion-icon></span>
                            <span class="nav_name">الملف الشخصي</span>                          
                        </a>
                    </li>
                    <li class="nav_item" id="li4">
                        <a href="staff.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="people-outline"></ion-icon></span>
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
                            <span class="nav_icon"><ion-icon name="call-outline"></ion-icon></span>
                            <span class="nav_name">اتصل بنا</span>
                        </a>
                    </li>
                    <li class="nav_item" id="li7">
                        <a href="TCC-login.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="file-tray-stacked-outline"></ion-icon></span>
                            <span class="nav_name">إدارة المعهد</span> 
                        </a>
                    </li>
                </ul>
            </div>
            <a href="index.php" class="nav_logo">TCC-Daraa</a>
        </nav>
    </header>
    <?php 
            include('database/connect.php');     
            $result_su1 = mysqli_query($connect, 'SELECT * FROM subjects WHERE SPE = "softWare" AND YEAR_ = 1 AND SEAS_ = 1');
            $result_su2 = mysqli_query($connect, 'SELECT * FROM subjects WHERE SPE = "softWare" AND YEAR_ = 1 AND SEAS_ = 2');
            $result_su3 = mysqli_query($connect, 'SELECT * FROM subjects WHERE SPE = "softWare" AND YEAR_ = 2 AND SEAS_ = 1');
            $result_su4 = mysqli_query($connect, 'SELECT * FROM subjects WHERE SPE = "softWare" AND YEAR_ = 2 AND SEAS_ = 2');
            $result_su5 = mysqli_query($connect, 'SELECT * FROM subjects WHERE SPE = "hardWare" AND YEAR_ = 1 AND SEAS_ = 1');
            $result_su6 = mysqli_query($connect, 'SELECT * FROM subjects WHERE SPE = "hardWare" AND YEAR_ = 1 AND SEAS_ = 2');
            $result_su7 = mysqli_query($connect, 'SELECT * FROM subjects WHERE SPE = "hardWare" AND YEAR_ = 2 AND SEAS_ = 1');
            $result_su8 = mysqli_query($connect, 'SELECT * FROM subjects WHERE SPE = "hardWare" AND YEAR_ = 2 AND SEAS_ = 2');
    
    ?>
<main>
    <!-- ===================== library ====================== -->
    <section class="container libr" id="lib">
        <h2 class="section_title">هندسة البرمجيات</h2>
        <details class="det_table">
        <summary class="det_title" id="sum1">السنة الإولى - الفصل الأول</summary>
        <table class="table">
                <tr>
                    <td>اسم المقرر</td>
                    <td>رابط التحميل</td>
                </tr>
                <?php
                    if(isset($result_su1)){
                        while($row1 = mysqli_fetch_assoc($result_su1)){
                            echo "<tr>";
                            echo "<td>" . $row1['NAME'] . "</td>";
                            echo "<td><a href='" . $row1['LINK'] . "'>اضغط هنا</a></td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </table>                 
        </details>
        <details class="det_table">
        <summary class="det_title">السنة الأولى - الفصل الثاني</summary>            
        <table class="table">
                <tr>
                <td>اسم المقرر</td>
                    <td>رابط التحميل</td>
                </tr>
                <?php
                    if(isset($result_su2)){
                        while($row1 = mysqli_fetch_assoc($result_su2)){
                            echo "<tr>";
                            echo "<td>" . $row1['NAME'] . "</td>";
                            echo "<td><a href='" . $row1['LINK'] . "'>اضغط هنا</a></td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </table>                 
        </details>
        <details class="det_table">
        <summary class="det_title">السنة الثانية - الفصل الأول</summary>            
        <table class="table">
                <tr>
                <td>اسم المقرر</td>
                    <td>رابط التحميل</td>
                </tr>
                <?php
                    if(isset($result_su3)){
                        while($row1 = mysqli_fetch_assoc($result_su3)){
                            echo "<tr>";
                            echo "<td>" . $row1['NAME'] . "</td>";
                            echo "<td><a href='" . $row1['LINK'] . "'>اضغط هنا</a></td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </table>                 
        </details>
        <details class="det_table">
        <summary class="det_title">السنة الثانية - الفصل الثاني</summary>            
        <table class="table">
                <tr>
                <td>اسم المقرر</td>
                    <td>رابط التحميل</td>
                </tr>
                <?php
                    if(isset($result_su4)){
                        while($row1 = mysqli_fetch_assoc($result_su4)){
                            echo "<tr>";
                            echo "<td>" . $row1['NAME'] . "</td>";
                            echo "<td><a href='" . $row1['LINK'] . "'>اضغط هنا</a></td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </table>                 
        </details>

<h2 class="section_title">هندسة الحواسيب</h2>
        <details class="det_table">
        <summary class="det_title">السنة الإولى - الفصل الأول</summary>
        <table class="table">
                <tr>
                <td>اسم المقرر</td>
                    <td>رابط التحميل</td>
                </tr>
                <?php
                    if(isset($result_su5)){
                        while($row1 = mysqli_fetch_assoc($result_su5)){
                            echo "<tr>";
                            echo "<td>" . $row1['NAME'] . "</td>";
                            echo "<td><a href='" . $row1['LINK'] . "'>اضغط هنا</a></td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </table>                 
        </details>
        <details class="det_table">
        <summary class="det_title">السنة الأولى - الفصل الثاني</summary>            
        <table class="table">
                <tr>
                <td>اسم المقرر</td>
                    <td>رابط التحميل</td>
                </tr>
                <?php
                    if(isset($result_su6)){
                        while($row1 = mysqli_fetch_assoc($result_su6)){
                            echo "<tr>";
                            echo "<td>" . $row1['NAME'] . "</td>";
                            echo "<td><a href='" . $row1['LINK'] . "'>اضغط هنا</a></td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </table>                 
        </details>
        <details class="det_table">
        <summary class="det_title">السنة الثانية - الفصل الأول</summary>            
        <table class="table">
                <tr>
                <td>اسم المقرر</td>
                    <td>رابط التحميل</td>
                </tr>
                <?php
                    if(isset($result_su7)){
                        while($row1 = mysqli_fetch_assoc($result_su7)){
                            echo "<tr>";
                            echo "<td>" . $row1['NAME'] . "</td>";
                            echo "<td><a href='" . $row1['LINK'] . "'>اضغط هنا</a></td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </table>                 
        </details>
        <details class="det_table">
        <summary class="det_title">السنة الثانية - الفصل الثاني</summary>            
        <table class="table">
                <tr>
                <td>اسم المقرر</td>
                    <td>رابط التحميل</td>
                </tr>
                <?php
                    if(isset($result_su8)){
                        while($row1 = mysqli_fetch_assoc($result_su8)){
                            echo "<tr>";
                            echo "<td>" . $row1['NAME'] . "</td>";
                            echo "<td><a href='" . $row1['LINK'] . "'>اضغط هنا</a></td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </table>                 
        </details>
    </section>    
</main>

<!-- <div style="width: 100%; background-color: var(--blue); color: var(--dark-white); padding: 12px; text-align: center;position: absolute; bottom: 0;">
	<p style="padding: 0 5px; border-right: 3px solid var(--green); width: fit-content; margin: 0 auto; border-left: 3px solid var(--green);">
        حقوق النشر محفوظة 2022 ©
    </p>
</div> -->
    <!-- ================================ -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- <script src="main.js"></script> -->
    <script>
        let li2 = document.getElementById("li2"); //الرئيسية
        let body = document.querySelector("body");
        body.onload = function () {
        li2.classList.add('activated');
        }
// ///////////////////////////////
        let details00 = document.querySelectorAll('.det_table');
        let details99 = document.querySelectorAll('.det_title');
        function det_open(){
        details00.forEach(element =>
            element.open = false
        );
        this.open = true;
        }
        details99.forEach((element1 =>
        element1.addEventListener('click', det_open)));

    </script>

</body>
</html>