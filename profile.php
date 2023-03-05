<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCC-profile</title>
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


<!-- بروفايل -->
<form action="studentGrades.php" method="POST" id="form">
    <div class="profileContainer">
        <div class="pages">  
          <div class="page">
            <img class="brand-logo" src="img/ggg.png" alt="">
            <h2>الملف الشخصي</h2>
            <div class="input">
              <div class="title"><h4>أدخل رقمك الامتحاني:</h4></div>
              <input class="text" name="stu_id" type="number" placeholder="" id="in1" required/>
                <!-- <input class="input-group-text form-control  btn-info" id="btnGroupAddon" style="display: inline;position: relative; left:5px;width:200px;border-right:none;" required> -->
            </div>
            <div class="input" id="sub">
              <input type="submit" name="search" value="دخول"/>
            </div>
          </div>
        </div>
    </div>
</form>

<!-- <form action="studentGrades.php" method="POST">
           <button type=" submit"  class="input-group-text btn-primary" id="btnGroupAddon" style="display: inline;width: 125px"> إستعراض </button>
<input type="number" name="stu_id" id="" class="input-group-text form-control  btn-info" id="btnGroupAddon" style="display: inline;position: relative; left:5px;width:200px;border-right:none;" required>
                </form> -->


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
        let li3 = document.getElementById("li3"); //الرئيسية
        let body = document.querySelector("body");
        body.onload = function () {
        li3.classList.add('activated');
        }


    </script>

</body>
</html>