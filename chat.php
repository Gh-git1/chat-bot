<!DOCTYPE html>

<?php
require_once('connect.php');

if(isset($_POST['register']))
{
$m1 = $_POST['d1'];
$m2 = $_POST['d2'];
$m3 = $_POST['d3'];
$m4 = $_POST['d4'];
$m5 = $_POST['d5'];

		
		$sql = $con->prepare("INSERT INTO angles (m1,m2,m3,m4,m5) 
		VALUES ('".$m1."','".$m2."','".$m3."','".$m4."','".$m5."')");
	

if (!$sql->execute())
{
  echo "<script type='text/javascript'>
  alert('Error');
  </script>";
}
else
{
  echo "<script type='text/javascript'>
  alert('Motors Values are registered successfully');
 
  </script>";
}
}
?>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
body {
  background-image: url('bg.jpg');
}
.flex-container {
  display: flex;
}

.flex-container > div {
 
}
</style>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <form class="register-form" method="post" action="index.php">





<h1>Motors Control Panal</h1>

<br>
<br>
<br>

<div style=" margin-left: 300px;">
<button onclick="outputBtn()" type="button" class="btn btn-success" id="forward">Forward</button>
  <input type="text" id="up" name="d1" style="width: 50px;" readonly="readonly">
</div>




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div style=" margin-left: 300px;">
<button type="button" onclick="outputBtn5()" class="btn btn-danger" id="Stop">Stop</button>
  <input type="text" id="stop" name="d5" style="width: 50px;" readonly="readonly">

</div>




<br>
<br>

<div class="flex-container">
<div style=" margin-left: 50px;">
<button type="button" onclick="outputBtn3()" class="btn btn-primary" id="Right">Right</button>
  <input type="text" id="right" name="d3" style="width: 50px;" readonly="readonly">
</div>




<br>
<br>


<div style=" margin-left: 600px;">
<button type="button" onclick="outputBtn4()" class="btn btn-primary" id="Left">Left</button>
  <input type="text" id="left" name="d4" style="width: 50px;" readonly="readonly">

</div>

<br>
<br>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div style=" margin-left: 280px;">
<button type="button" onclick="outputBtn2()" class="btn btn-warning" id="Backward">Backward</button>
  <input type="text" id="down" name="d2" style="width: 50px;" readonly="readonly">
</div>


<script>
up=0;
down=0;
right=0;
left=0;


var forward = document.getElementById("forward");
var output = document.getElementById("up");
var slider2 = document.getElementById("Backward");
var output2 = document.getElementById("down");
var slider5 = document.getElementById("Stop");
var output5 = document.getElementById("stop");
var slider3 = document.getElementById("Right");
var output3 = document.getElementById("right");
var slider4 = document.getElementById("Left");
var output4 = document.getElementById("left");



outputBtn = function() {
  document.getElementById("up").value = up+1;
  up = up + 1;
  if(down>0){
    down = down-1;
    document.getElementById("down").value = down;
  }
}






outputBtn2 = function() {
  document.getElementById("down").value = down+1;
  down = down + 1;
  if(up>0){
    up = up-1;
    document.getElementById("up").value = up;
  }
}




outputBtn5 = function() {
  document.getElementById("up").value=0;
  document.getElementById("down").value=0;
  document.getElementById("stop").value=0;
  document.getElementById("left").value=0;
  document.getElementById("right").value=0;
  up=0;
  down=0;
  right=0;
  left=0;
}








outputBtn3 = function() {
  document.getElementById("right").value = right + 1;
  right = right + 1
  if(left>0){
    left = left-1;
    document.getElementById("left").value = left
  }
}






outputBtn4 = function() {
  document.getElementById("left").value = left+1;
  left = left + 1;
  if(right>0){
    right = right - 1;
    document.getElementById("right").value = right
  }
}









  document.getElementById("up").value=0;
  document.getElementById("down").value=0;
  document.getElementById("stop").value=0;
  document.getElementById("left").value=0;
  document.getElementById("right").value=0;
</script>





<br>
<br>


 <button name="register" type="submit" style="margin-left: 280px;" >Save</button></p>
 </form>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  window.watsonAssistantChatOptions = {
      integrationID: "4e4b31b8-f850-431b-8b4e-7e3e2179c6d9", // The ID of this integration.
      region: "eu-de", // The region your integration is hosted in.
      serviceInstanceID: "1512e5ed-8441-4498-a42e-d10571e2de27", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script
</body>
</html>