<?php
     $login = filter_var (trim($_POST['login']),FILTER_SANITIZE_STRING);
    $email = filter_var (trim($_POST['email']),
      FILTER_SANITIZE_STRING);
    $password = filter_var (trim($_POST['password']),
     FILTER_SANITIZE_STRING);
     $comment = filter_var (trim($_POST['comment']),FILTER_SANITIZE_STRING);
     $password = crypt($password,"frfregfvdvgfrgrfewrgerfsdxvy5465yjyhbfxhjnmhvjch");
     $mysql = new mysqli('Main-FirstSaite','mysql','mysql','aboutme');
     if(!empty($_POST["login"])) {
      $resuilt = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
      if(mysqli_num_rows($resuilt) == 0) {
          echo "<div id='status-not-available' class='fromocon' style='color:green'>Логин свободен</div>";
      }else{
          echo "<div id='status-available' class='fromocon' style='color:red'>Логин занят</div>";
      }
    }
    if(!empty($_POST["email"])) {
        $esuilt = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
        if(mysqli_num_rows($esuilt) == 0) {
            echo "<div id='statu-not-available' class='fromocon' style='color:green'>Email свободен</div>";
        }else{
            echo "<div id='statu-available' class='fromocon' style='color:red'>Email занят</div>";
        }  
    }
?>