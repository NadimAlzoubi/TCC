<?php
$name = $_POST['mailname'];
$ex_num = $_POST['exnum'];
$stu_email = $_POST['mail1'];
$msg = $_POST['themsg'];
$send_btn = $_POST['mailbtn'];
$mail_header = "From: < " . $name . " > < " . $stu_email . " >\r\n";
$to = "abonadim19999@gmail.com";
if(isset($send_btn)){
    mail($to, $ex_num, $msg, $mail_header);
}
?>