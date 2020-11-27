<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("techie",$link);
$sql="SELECT * FROM event";
$aResult=mysql_query($sql);
 
?>
<html>
<head>

	
<link href="https://fonts.googleapis.com/css?family=Lato:400,900&display=swap" rel="stylesheet">
<style type="text/css">
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin-top:19px;
  opacity: 100;
}

td, th {
  border: 3px solid white;
  text-align: left;
  padding: 20px;
}

th {
  background-color: black;
  color: white;
}

.jumbo{
font-family: 'Lato', sans-serif;
}
.jumbotron{
background-image: url("https://images.unsplash.com/photo-1518709911915-712d5fd04677?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80");
color:white;
padding-top: 1%;
padding-bottom: 2%;
background-size:cover;
/*background-position: center;*/
}

body{
    background-image:url("https://images.unsplash.com/photo-1581388646048-3c04adad37b3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80");
    background-size:cover;
}
</style>

</head>
<body>
<div class="bodies">
<div class="jumbo">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 style="font-size:20px" class="display-4"><center>EVENT DETAILS FOR THE ACADEMIC YEAR 2020-2021</center></h1>
    <p class="lead"><center>Upcoming Events!<center/></p>
  </div>
</div>
</div>
	<form name="frmForm" id="frmForm" >

	<table align="center" >

	<tr>
	<th>S.No</th>
	<th>Event name</th>
	<th>Cheif guest</th>
	<th>Date</th>
  <th>time</th>

	</tr>
							
<?php

while($rows = mysql_fetch_array($aResult,MYSQL_ASSOC))
{
$sno = $rows['sno'];
$eventname = $rows['eventname'];
$cheifguest = $rows['cheifguest'];
$date = $rows['date'];
$time = $rows['time'];
?>
<tr>
 
<td><b><?php echo $sno;?></b></td>
<td><b><?php echo $eventname;?></b></td>
<td><b><?php echo $cheifguest;?></b></td>
<td><b><?php echo $date;?></b></td>
<td><b><?php echo $time;?></b></td>


 
</td>
</tr>
 
<?php } ?>
</table>                   
</form>
</body>
</html>