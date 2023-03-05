<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCC-staff</title>
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
<main>
    <!-- ===================== staff ====================== -->
    
    <section class="container staff" id="staff">
    <?php 
        include ('database/connect.php');
        $sql_s = 'SELECT * FROM staff';
        $result = mysqli_query($connect, $sql_s);
        if(isset($result)){
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="staffinfo">
                    <div class="staffimg">
                    <?php
                        if($row['IMG'] == NULL){
                            echo '<img src="img/p.png">';
                        } else {
                            echo '<img src="data:image;base64,' . $row['IMG'] . '">';
                        }
                    ?>
                    </div>
                    <div class="stafftxt">
                    <?php echo $row['NAME'] ?>
                    <br>
                    <?php echo $row['DES'] ?>
                    <br>
                    </div>
                </div>

<?php
            }
        }
?>

<div class="staffinfo" style="flex-direction: column; line-height: 40px; padding: 20px; margin: 0 20px;">
					<p class="post-text" style="opacity: 0.4;display: flex;align-items:center;justify-content:center">
                    <ion-icon name="receipt-outline" class="no-ico md hydrated" role="img" aria-label="receipt outline" style="font-size: 5em;"></ion-icon>
                    <p style="opacity: 0.4;display: flex;align-items:center;justify-content:center">لا شيء هنا</p>
					</p>	
				</div>

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
    <!-- <script src="main.js"></script>   -->
    <script>
        let li4 = document.getElementById("li4"); //الرئيسية
        let body = document.querySelector("body");
        body.onload = function () {
        li4.classList.add('activated');
        }
    </script>

</body>
</html>