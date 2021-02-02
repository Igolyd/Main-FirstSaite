<?php
     $login = filter_var (trim($_POST['logina']),FILTER_SANITIZE_STRING);
    $password = filter_var (trim($_POST['password']),
    FILTER_SANITIZE_STRING);
    $password = crypt($password,"frfregfvdvgfrgrfewrgerfsdxvy5465yjyhbfxhjnmhvjch");
    $mysql = new mysqli('Main-FirstSaite','mysql','mysql','aboutme');
    $resuilt = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'  OR `email` ='$login'
    AND `password` = '$password'");
    if(mysqli_num_rows($resuilt) == 0){
        echo "Такой пользователь не найден";
        exit();
    }
    $user = $resuilt->fetch_assoc();
    setcookie('user',$user['login'],time() + 6400, "/");
    $mysql->close();

    header('Location: /Main_Str.php');