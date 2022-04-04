<?php 
    $checkin = $_POST['checkin'];
    $checkout=$_POST['checkout'];
    $type=$_POST['type'];
    $person=$_POST['person'];
    $interval = $checkout->diff($checkin);
    $mysql=new mysqli('airasia','root','','airasia');
    $mysql->query("INSERT INTO `check_apartment` (`checkin`,`checkout`,`type`,`person`) VALUES ('$checkin','$checkout','$type','$person')");

    $mysql->close();header('Location: /')
?>