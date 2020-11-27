<?php

// Create connection
$conn=new mysqli('localhost','root','');

//check connection
if($conn->connect_error){
	die("Connection_failed: ". $conn->conect_error);
}

mysqli_select_db($conn,"techie");
 

$sql="INSERT INTO `contact` (firstname, lastname, email, contact, textarea) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[contact]', '$_POST[textarea]')";

if ($conn->query($sql) == TRUE) {


} else{
	echo "Error: " . $sql . "<br>" . $conn->error;
} 

mysqli_close($conn);
?>

<html>
  <head>
    <style>
      body {
        background-image: url('https://images.unsplash.com/photo-1472289065668-ce650ac443d2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80');
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
  position: relative; /* usually the parent, in this case the body element, has position relative so that the absolute positioned child is positioned relative to it */
  height: 100vh; /* 100% of the viewport height */
  margin: 0; /* recommended */
}

h1 {
 position: absolute; /* taken out of the normal flow of the document */
 top: 50%; /* moved down by 50% of the screen height */
 transform: translateY(-50%); /* moved back up (Y axis) by half of its height to achieve the perfect center */
 width: 100%; /* needs to be defined to keep the default block behavior */
 text-align: center;
 margin: 0; /* again, for perfect center */
 font-family: "Comic Sans MS", cursive, sans-serif;
 color: white;
} 

.button {
  background-color: #a6860a;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 400px 660px;
  cursor: pointer;
}
</style>
</head>
<body>
<h1>Your response has been recorded</h1>
<a href="index.php" class="button">Back to Home</a>
</body>
</html>