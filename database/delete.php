<?php
include('connect.php');     
// if(isset($_POST['nam2'])){
//     $delid2 = $_POST['del2'];
//     $delete2 = "DELETE FROM subjects WHERE ID = '$delid2'";
//     $del_run2 = mysqli_query($connect, $delete2);
//     if($del_run2){
//         echo '<script>alert("تم الحذف بنجاح");</script>';
//         echo '<script>document.location = "http://localhost/TCC-Project/admin/subjects&teacher-register.php"</script>';
//     } else {
//         echo '<script>alert("حدث خطأ: لم يتم الحذف ");</script>';
//     }
// }
// if(isset($_POST['nam1'])){
//     $delid1 = $_POST['del1'];
//     $delete1 = "DELETE FROM staff WHERE ID = '$delid1'";
//     $del_run1 = mysqli_query($connect, $delete1);
//     if($del_run1){
//         echo '<script>alert("تم الحذف بنجاح");</script>';
//         echo '<script>document.location = "http://localhost/TCC-Project/admin/subjects&teacher-register.php"</script>';
//     } else {
//         echo '<script>alert("حدث خطأ: لم يتم الحذف ");</script>';
//     }
// }
if(isset($_POST['nam3'])){
    $delid3 = $_POST['del3'];
    $delete3 = "DELETE FROM exam_admin WHERE ID = '$delid3'";
    $del_run3 = mysqli_query($connect, $delete3);
    if($del_run3){
        echo '<script>alert("تم الحذف بنجاح");</script>';
        echo '<script>document.location = "http://localhost/TCC-Project/admin/manger.php"</script>';
    } else {
        echo '<script>alert("حدث خطأ: لم يتم الحذف ");</script>';
    }
}
if(isset($_POST['nam4'])){
    $delid4 = $_POST['del4'];
    $delete4 = "DELETE FROM stu_aff_admin WHERE ID = '$delid4'";
    $del_run4 = mysqli_query($connect, $delete4);
    if($del_run4){
        echo '<script>alert("تم الحذف بنجاح");</script>';
        echo '<script>document.location = "http://localhost/TCC-Project/admin/manger.php"</script>';
    } else {
        echo '<script>alert("حدث خطأ: لم يتم الحذف ");</script>';
    }
}
if(isset($_POST['nam5'])){
    $delid5 = $_POST['del5'];
    $delete5 = "DELETE FROM manger_admin WHERE ID = '$delid5'";
    $del_run5 = mysqli_query($connect, $delete5);
    if($del_run5){
        echo '<script>alert("تم الحذف بنجاح");</script>';
        echo '<script>document.location = "http://localhost/TCC-Project/admin/manger.php"</script>';
    } else {
        echo '<script>alert("حدث خطأ: لم يتم الحذف ");</script>';
    }
}
?>