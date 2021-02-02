<?php
    setcookie('user',$user['login'],time() + 6400, "/");
    header('Location: /Main_Str.php');