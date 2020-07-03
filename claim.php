<?php
// getting value of post para

$room = $_POST['room'];

//checking for string size

if(strlen($room)>20 or strlen($room)<2)
{
    $message = 'please choose a name between 2 or 20 characters';
    echo '<script language="javascript">';
    echo  'alert("'.$message.'");';
    echo  'window.location= "http://localhost/chat-app";';
    echo  '</script>';
}

//checking whether room name is alphanumeric

else if(!ctype_alnum($room))
{
   $message = 'pls choose an alphanumeric room name';
    echo '<script language="javascript">';
    echo  'alert("'.$message.'");';
    echo  'window.location= "http://localhost/chatroom";';
    echo  '</script>'; 
}

else {
    //connecting to database
    include 'db_connect.php';
}

// check if room already exist

$sql = "SELECT * FROM `rooms` WHERE roomname = '$room' ";
$result = mysqli_query($connection, $sql);

if($result)
{
    if(mysqli_num_rows($result) > 0)
    {
      $message = 'Pls choose a different room .This room already exists';
    echo '<script language="javascript">';
    echo  'alert("'.$message.'");';
    echo  'window.location= "http://localhost/chat-app";';
    echo  '</script>';   
    }

    else {
        $sql = "INSERT INTO `rooms` (`roomname`, `stime`) VALUES ('$room', 'current_timestamp(6).000000');";
        if(mysqli_query($connection,$sql)) {
            $message = 'your room is ready and u can start to chat now!';
            echo '<script language="javascript">';
            echo  'alert("'.$message.'");';
            echo  'window.location= "http://localhost/chat-app/rooms.php?roomname='.$room.'";';
            echo  '</script>'; 
        }
    }
}

else {
    echo "Error:". mysqli_error($connection);
}