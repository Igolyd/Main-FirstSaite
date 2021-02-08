<?php
$mysql = new mysqli('Main-FirstSaite','mysql','mysql','aboutme');
$comment = filter_var (trim($_POST['comment']),FILTER_SANITIZE_STRING);
$date = date("y.m.d H:i:s");
$username = $_COOKIE['user'];
// if( mb_strlen($comment) > 145){
//     echo "Pisdes51";
//     exit(); 
// }
// if($comment === mb_strtoupper($comment)){
//     if(mb_strlen($comment) > 65){
//         echo "Pisd";
//         exit(); 
//     }
// }
$commenter = $mysql->query("INSERT INTO `comments`(`commenta`,`date_time`,`Name`) 
VALUES('$comment','$date','$username')");
$mysql->close();

header('Location: /Main_Str.php');
?>