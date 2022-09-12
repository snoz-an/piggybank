<?php
if (isset($_POST["name"])) {
    $name = $_POST["name"];
} else {
    $name = "";
}

if (isset($_POST["phone"])) {
    $phone = $_POST["phone"];
} else {
    $phone = "";
}
if (isset($_POST["mail"])) {
    $mail = $_POST["mail"];
} else {
    $mail = "";
}

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$name = urldecode($name);
$phone = urldecode($phone);
$name = trim($name);
$phone = trim($phone);

$to = 'dev-2-tech@yandex.ru';
$subject = 'Платформа онлайн-подбора финансовой стратегии';


$title = "Платформа онлайн-подбора финансовой стратегии";

$message =
    "
<html>
<head>
  <title>".$title."</title>
</head>
 <body>
    <div>phone: <b>" .
    $phone .
    "</b></div>
    <div>имя:" .
    $name .
    "</div>
    <div>Почта:" . $mail . "</div>
 </body>    
</html>
";

$headers = [
    "MIME-Version: 1.0",
    "Content-type: text/html; charset=utf-8",
    "From: Копилка <info@piggybank.pro>",
];



mail($to, $subject, $message, implode("\r\n", $headers));


?>
<?php 


?>
