<?php
    $login = $_POST['login'];
    $pass=$_POST['pass'];
    $vpass=$_POST['vpass'];
    if (mb_strlen($login)<2) {
        echo 'Длина меньше 2 символов';
        exit();
    }
    else{
        if ($pass!=$vpass) {
            echo "Пароли не совпадают";exit();
        }
    }
    $mysql=new mysqli('airasia','root','','airasia');
    $mysql->query("INSERT INTO `user` (`login`,`pass`) VALUES ('$login','$pass')");

    $mysql->close();
    header('Location: /')
?>