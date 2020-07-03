<?php

include 'db_connect.php';

$msg = $_POST['text'];
$room = $_POST['room'];
$ip = $_POST['ip'];

$sql =  "INSERT INTO `messages` (`msg`, `room`, `ip`, `stime`) VALUES ('$msg', '$room', '$ip', CURRENT_TIMESTAMP);";

mysqli_query($connection, $sql);

mysqli_close($connection);