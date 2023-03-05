<!DOCTYPE html>
<html lang="en" id="html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assest/css/style.css">
    <link rel="stylesheet" href="assest/css/style2.css">
    <link rel="icon" type="image/png" href="img/tcc.png">
    <title>TCC-Home</title>
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
<!-- ====================================== -->
<?php
        error_reporting(0);
        include('database/connect.php');         
        $sql_s = 'SELECT * FROM posts ORDER BY POST_TIME DESC';
        $result = mysqli_query($connect, $sql_s);
    ?>
<!-- ====================================== -->

    <div class="container-po">
			<div class="main-content">
            <?php
                if(isset($result)){
                    while($row = mysqli_fetch_assoc($result)){
            ?>
            <div class="post-container">
					<div class="post-row">
                    <div class="user-profile">
							<div>
								<p><?php echo $row['POST_TITLE'] ?></p>
								<span><?php echo $row['POST_TIME'] ?></span>
							</div>
						</div>
					</div>
					<p class="post-text"><?php echo $row['POST_CON'] ?></p>
                    <?php
                        if($row['IMG'] != NULL){
                            echo '<div style="width: 100%;height: auto;justify-content: center;align-items: center;display: flex; margin-top: 20px">';
                            echo '<img style="width: -webkit-fill-available; border: 1px solid #00000050;" name="image" src="data:image;base64,' . $row['IMG'] . '">';
                            echo '</div>';
                        }
                    ?>
				</div>
                <hr style="background-color: #ddd; height:2px; margin-bottom:2px">
                <hr style="background-color: #ddd; height:2px; margin-bottom:2px">
                <?php
                            }
                        }
                    ?>

                <!-- ======================================= -->
                <!-- ======================================= -->
                <!-- ======================================= -->
				<div class="post-container">
					<p class="post-text" style="opacity: 0.4;display: flex;align-items:center;justify-content:center">
                    <ion-icon name="receipt-outline" class="no-ico md hydrated" role="img" aria-label="receipt outline" style="font-size: 5em;"></ion-icon>
                    <p style="opacity: 0.4;display: flex;align-items:center;justify-content:center">لا شيء هنا</p>
					</p>	
				</div>
                <!-- ======================================= -->
                <!-- ======================================= -->
                <!-- ======================================= -->                
</div>







			<div class="right-sidebar">
				<div class="sidebar-title">
					<h4>&#10096; المعهد التقاني للحاسوب بدرعا &#10097;</h4>
				</div>
				<div class="sidebar-title">
                <div>المعهد التقاني للحاسوب بدرعا أو كما يعرف باسمه (TCC) هو عبارة عن معهد تقاني <a style="text-decoration: none;" href="https://www.hussam.blog/2021/01/tcc.html">قراءة المزيد...</a></div>
                </div>
				<div class="online-list">
					<div class="online">
                    <ion-icon name="location-outline" style="font-size: 2em;"></ion-icon>
					</div>
                    <p>درعا - حي السبيل بجانب ثانوية الشهيد منصور</p>
				</div>
				<div class="online-list">
					<div class="online">
                    <ion-icon name="call-outline" style="font-size: 2em;"></ion-icon>
					</div>
                    <p><bdi>+963 987 654 321</bdi></p>
				</div>
				<div class="online-list">
					<div class="online">
                    <ion-icon name="image-outline" style="font-size: 2em;"></ion-icon>
					</div>
                    <a id="a7" href="TCC-Gallery.php" style="text-decoration: none;color:var(--black); padding:3px; border-radius:3px; transition: all 0.3s;">معرض الصور</a>
                    <style>
                        #a7:hover{
                            box-shadow: 0 0 5px 1px #00000050;
                            transform: translateY(-3px);
                        }
                    </style>
				</div>
                <div class="sidebar-title">
					<h5>تابعنا على:</h5>
				</div>
				<div class="online-list">
					<div class="online">
                    <ion-icon name="logo-facebook" style="font-size: 2em;"></ion-icon>					
                </div>
					<a href="#" style="text-decoration: none;">Facebook</a>
				</div>
				<div class="online-list">
					<div class="online">
                    <ion-icon name="logo-instagram" style="font-size: 2em;"></ion-icon>
                    </div>
					<a href="#" style="text-decoration: none;">instagram</a>
				</div>
				<div class="online-list">
					<div class="online">
                    <ion-icon name="paper-plane-outline" style="font-size: 2em;"></ion-icon>
                    </div>
					<a href="#" style="text-decoration: none;">Telegram</a>
				</div>
				<div class="online-list">
					<div class="online">
                    <ion-icon name="logo-whatsapp" style="font-size: 2em;"></ion-icon>
                    </div>
					<a href="#" style="text-decoration: none;">WhatsApp</a>
				</div>
                
                <div class="footer">
			<p>حقوق النشر محفوظة 2022 &copy;</p>
		</div>

			</div>
		</div>


        <!-- <div style="width: 100%; background-color: var(--blue); color: var(--dark-white); padding: 12px; text-align: center;">
	<p style="padding: 0 5px; border-right: 3px solid var(--green); width: fit-content; margin: 0 auto; border-left: 3px solid var(--green);">
        حقوق النشر محفوظة 2022 ©
    </p>
</div> -->



    <!-- ===================== home ====================== -->



<!-- <div class="no-div" style="width: 100%;font-size: 3em;opacity: 0.3;height: 70vh;display: flex;flex-direction: column;align-items: center;justify-content: center;">
    <ion-icon name="receipt-outline" class="no-ico md hydrated" role="img" aria-label="receipt outline" style="font-size: 5em;"></ion-icon>
    <p>لا شيء هنا</p>
      </div> -->



    <!-- =============== script ================= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- <script src="/assest/js/main.js"></script> -->
    <script>
        let li1 = document.getElementById("li1"); //الرئيسية
        let body = document.querySelector("body");
        body.onload = function () {
        li1.classList.add('activated');
        }
    </script>
    <!-- =============== script ================= -->

    </body>
</html>