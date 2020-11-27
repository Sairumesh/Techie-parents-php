<?php

// Create connection
$conn=new mysqli('localhost','root','');

//check connection
if($conn->connect_error){
	die("Connection_failed: ". $conn->conect_error);
}
/* echo "DB Connected successfully"; */

//this will select the database new
mysqli_select_db($conn,"techie");

/*  echo "\n DB is selected as Test successfully"; */

//crete insert query 

$sql="INSERT INTO `login` (name1,pw) VALUES ('$_POST[name1]','$_POST[pw]')";

if ($conn->query($sql) == TRUE) {
    $_SESSION['message'] = "You have successfully logged in!";


} else{
	echo "Error: " . $sql . "<br>" . $conn->error;
} 


mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
<title>
Techie Parents
</title>
<style>
    .center {
  display: flex;
  justify-content: center;
  font-size:30px;
  margin-top: 10px;
}



h1 {
    font-size: 40px;
    font-size: 2.5rem;

}

.buttons {
  text-align: center;
  position: relative;
  top: 100px;
}
.button {
  font-family: 'Hammersmith One', sans-serif;
  font-size: 20px;
  color: white;
  text-align: center;
  border-radius: 8px;
  font-size: 21px;
  background: black;
  padding: 10px 20px 10px 20px;
  border: none;
}
.button:hover {
  background:white;
  color:black;
}

body {
  background-image: url('https://images.unsplash.com/photo-1472289065668-ce650ac443d2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  margin:200px 0; 
}

.msg {

    color: black; 
    text-align: center;
    font-family: 'Hammersmith One', sans-serif;
    font-size: 20px;
}
</style>


<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script type="text/javascript">
var app = angular.module('myApp', []);
// Creating Factory
app.factory('myFactory', function () {
var displayFact;
var addMSG = function (msg) {
displayFact = 'Welcome parents and teachers for connecting your ' + msg;
}
return {
setMSG: function (msg) {
addMSG(msg);
},
getMSG: function () {
return displayFact;
}
};
});
 
// Creating Service
app.service('myService', function () {
var displayServ;
var addMSG = function (msg) {
displayServ = 'Get your more details about your children ' + msg;
}
this.setMSG = function (msg) {
addMSG(msg);
}
this.getMSG = function () {
return displayServ;
}
});
 
app.controller("myCtrl", function ($scope, myService, myFactory) {
//Inject factory and service both to controller.
myFactory.setMSG("goals!");
myService.setMSG("academic!");
$scope.count = 0;
//Prepare a collection
$scope.myCollections = [
myFactory.getMSG(),
myService.getMSG()
];
});

app.directive("w3TestDirective", function() {
    return {
        template : "<h1><center>Welcome to Techie Parents Portal!</center></h1>"
    };
});



</script>
</head>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>


     

<div ng-app="myApp" ng-controller="myCtrl">
<w3-test-directive></w3-test-directive>
<div ng-repeat="coll in myCollections" class="center">
{{coll}}
</div>

<div class="buttons">

    <button onclick="location.href='index.php'" type="button" ng-click="count = count + 1" class="button" role="button">Get started!</button>
    <h3>{{ "You have logged in " +count+ " times Previously!" }}<h3>
  </div>
  

</div>


</body>
</html>