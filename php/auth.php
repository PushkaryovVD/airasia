<?php
    $login = $_POST['ulogin'];
    $pass=$_POST['upass'];

    $mysql=new mysqli('airasia','root','','airasia');

    
    $result = $mysql->query("SELECT * FROM `user` WHERE `login` = '$login' AND `pass` = '$pass'");
    $user = $result->fetch_assoc();
    
    if ($user==0) {
        echo "Нет пользователя";
        exit();
    }

    
    $mysql->close();
    header('Location: /');
?>
