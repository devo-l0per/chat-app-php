<?php

$roomname = $_GET['roomname'];

include 'db_connect.php';

// Execute sql to check whether room exists

$sql = "SELECT * FROM `rooms` WHERE roomname = '$roomname'";

$result = mysqli_query($connection,$sql);

if($result) {
    
    if(mysqli_num_rows($result) == 0) {
    $message = 'This room doesnot exist. Try creating another one';
            echo '<script language="javascript">';
            echo  'alert("'.$message.'");';
            echo  'window.location= "http://localhost/chat-app";';
            echo  '</script>'; 
    } 
}
else {
    echo "Error :". mysqli_error($connection);
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}

.anyClass {
    overflow-y:scroll;
    height:350px;
}
</style>
</head>
<body>

<h2>Room Name - <?php echo $roomname ?></h2>

<div class="container">
    <div class="anyClass">
  
  </div>
</div>
<input type="text" class="form-control" name="usermsg" id="usermsg" placeholder="Add Message"><br>
<button type="submit" class=btn btn-default name='submitmsg' id="submitmsg">SEND</button>

<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<script type="text/javascript">

setInterval(() => {
    $.post('htcon.php',{room:'<?php echo $roomname ?>'},(data,status) => {
        document.getElementsByClassName('anyClass')[0].innerHTML=data; 
    })
    
}, 1000);
    // using enter to send the message
var input = document.getElementById("usermsg");

input.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) { 
    event.preventDefault();
    document.getElementById("submitmsg").click();
  }
});
    
    $("#submitmsg").click(function(){
        var clientmsg = $("#usermsg").val();
  $.post("postmsg.php", {text: clientmsg, room: '<?php echo $roomname ?>', ip:'<?php echo $_SERVER['REMOTE_ADDR'] ?>'},
  function(data,status){
      document.getElementsByClassName('anyClass')[0].innerHTML = data;
      $("#usermsg").val('');
    return false;
  });

});
</script>

</body>
</html>
