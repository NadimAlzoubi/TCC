<!DOCTYPE html>
<html lang="en" id="html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assest/css/style.css">
    <link rel="stylesheet" href="assest/css/style2.css">
    <link rel="icon" type="image/png" href="img/tcc.png">

    <title>TCC-Gallery</title>
</head>
<body>
    <!-- =====================header=================== -->
    <header class="header" id="header">

        <nav class="nav">

            <div class="nav_img">المعهد التقاني للحاسوب</div>

            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item" id="li2">
                        <a href="index.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="nav_name">الرئيسية</span>
                        </a>
                    </li>
                    <li class="nav_item" id="li1">
                        <a href="TCC-Gallery.php" class="nav_link">
                            <span class="nav_icon"><ion-icon name="library-outline"></ion-icon></span>
                            <span class="nav_name">معرض الصور</span>
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
        $sql_s = 'SELECT * FROM pictures ORDER BY ID DESC';
        $result = mysqli_query($connect, $sql_s);
    ?>
<!-- ====================================== -->

    <div class="container-po">
			<div class="main-content main-content77">
            <?php
                        if(isset($result)){
                            while($row = mysqli_fetch_assoc($result)){
                                ?>
            <div class="post-container">
					<div class="post-row" style="margin-bottom: 15px;">
                    <div class="user-profile">
							<div>
								<p><?php echo $row['PIC_TITLE'] ?></p>
                            </div>
						</div>
					</div>
                    <hr style="background-color: #ddd; height:2px; margin-bottom:2px">
                    <hr style="background-color: #ddd; height:2px; margin-bottom:2px">
                    <?php
                        if($row['PIC'] != NULL){
                            echo '<div style="width: 100%;height: auto;justify-content: center;align-items: center;display: flex; margin-top: 20px">';
                            echo '<img style="width: -webkit-fill-available;" src="data:image;base64,' . $row['PIC'] . '">';
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
		</div>


        <!-- <div style="width: 100%; background-color: var(--blue); color: var(--dark-white); padding: 12px; text-align: center;position: absolute; bottom: 0;">
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