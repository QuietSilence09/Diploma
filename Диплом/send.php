<?php
//$name = $_POST['fullName'];
//$email = $_POST['email'];
//$message = $_POST['message'];
if (isset($_POST['fullName'])) {
    $name = $_POST['fullName'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['message'])) {
    $email = $_POST['message'];
}
$myadress = "daneel.noor26@gmail.com";
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$name = urldecode($name);
$email = urldecode($email);
$name = trim($name);
$email = trim($email);
$sub = "Обращение с сайта Portfolio";
$mes = "Здравсвуйте, вам пишет $email";
$send = mail($myadress,$sub,$mes);
/*
if(mail("ndanik26@gmail.com", "Обращение с сайта Portfolio", "Здравсвуйте, вам пишет " .$name . "\n" . $message . "\n" . "Почта отправителя: ".$email)){    
    header("Location:/index.html");
    //echo "сообщение успешно отправлено";
    
}*///else {
    //echo "при отправке сообщения возникли ошибки";}
/*echo $name;
echo '<br>';
echo $email;
echo '<br>';
echo $message;
ini_set('display_errors','On');
error_reporting('E_ALL');*/
?>