<?php
header("Content-Type: text/html; charset=utf-8");
$mysql = new mysqli('Main-FirstSaite','mysql','mysql','aboutme');
$login = filter_var (trim($_POST['login']),FILTER_SANITIZE_STRING);
$email = filter_var (trim($_POST['email']),
FILTER_SANITIZE_STRING);
$password = filter_var (trim($_POST['password']),
FILTER_SANITIZE_STRING);
$replaypassword = filter_var (trim($_POST['replaypassword']),
FILTER_SANITIZE_STRING);
$wesuilt = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
$qesuilt = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
similar_text($password,$replaypassword, $perc);

if(mb_strlen($login) < 3 || mb_strlen($login) > 70){
    exit(); 
}
    if(mb_strlen($password) < 5 || mb_strlen($password) > 90){
    exit();
}
    if(!preg_match('/@/', $email)){
    exit(); 
}
    if(!$perc == 100){
    exit(); 
}
if($login === mb_strtoupper($login)) {
    if(mb_strlen($login) > 50){
        exit(); 
    }
 }
    if(!mysqli_num_rows($wesuilt) == 0){
    exit(); 
}
    if(!mysqli_num_rows($qesuilt) == 0){
    exit();
}
    if(!preg_match("#^[aA-zZ0-9\-_]+$#", $login) && !preg_match('#^[aA-zZ0-9\-_]+$#', $password) && !preg_match('/[A-Z]/', $password)  && !preg_match('/[0-9]/', $password)){
    exit();
}
$password = crypt($password,"frfregfvdvgfrgrfewrgerfsdxvy5465yjyhbfxhjnmhvjch");
$mysql->query("INSERT INTO `users`(`login`, `password`, `email`) 
VALUES('$login','$password','$email')");
$mysql->close();

header('Location: /Main_Str.php');
?>