

<!DOCTYPE html>
<html lang="en">
<head>
<title>Robot Arm Control Panel</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- import Bootstrap -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style_Base.css">

</head>
<body>

<div class="container-fluid">
<div class="centered"  id="rcorners2">

<h2>Robot Base Control Panel</h2>

<form  method="post" >
<table>
  <tr>
    <td></td>
    <td><input type="submit" value="Forward" name="Movement" class="button4" style="background-color:#4e9af1"></td>
    <td></td>
  </tr>
  <tr>
    <td><input type="submit" value="Left" name="Movement" class="button4" style="background-color:#4e9af1"></td>
    <td><input type="submit" value="Stop" name="Movement" class="button4" style="background-color:#4e9af1"></td>
    <td><input type="submit" value="Right" name="Movement" class="button4" style="background-color:#4e9af1"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" value="Backward" name="Movement" class="button4" style="background-color:#4e9af1"></td>
    <td></td>
  </tr>
</table>
</form>
</div>
</div>


<script>
  window.watsonAssistantChatOptions = {
      integrationID: "87f9f6b0-3431-44c1-aec2-e0642d91b5c4", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "030d3c9e-edef-4bbb-9ceb-dfcb1e6d4d01", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>



</body>
</html>

<?php 

require 'DataBase.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$move=$_POST["Movement"];
	
	$sql = "UPDATE movement SET movement='$move'";	

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

}

$conn->close();




 ?>