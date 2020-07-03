<?php
$room = $_POST['room'];
include "db_connect.php";

$sql = "SELECT msg, stime, ip FROM messages WHERE room = '$room' ";

$res = "";

$result = mysqli_query($connection, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result))
    {
        $res = $res . '<div class="container">';
        $res = $res . $row['ip'];
        $res = $res . " Says <p>".$row['msg'];
        $res = $res .'</p> <span class ="time-right">' . $row['stime'] . '</span></div>';
    }
}


//data is the variable which is being sent from here through echo
echo $res;