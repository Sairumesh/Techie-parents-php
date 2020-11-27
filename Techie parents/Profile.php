<!DOCTYPE html>
<html>
<head>
 <script src="
  https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js">
 </script>
 <style>
   body {
    margin:50px 0; 
    padding:0;
    text-align:center;
    font-size: 30px;
    background-image: url('https://images.unsplash.com/photo-1472289065668-ce650ac443d2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  letter-spacing: 0.5px;
    line-height: 1.6;
}

#Content {
    width:500px;
    margin:0 auto;
    text-align:left;
    padding:15px;
    border:1px dashed #333;
    background-color:#eee;
}

h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;}

.buttons {
  text-align: center;
  position: relative;
  top: 50px;
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

 </style>
</head>
<body ng-app="testApp">
<h1>PROFILE PAGE</h1>
    <div ng-controller="parentController">
      	Student Name: {{controllerName}}<br/>
        Father's Name: {{message}}<br/>
      	Place of living: {{color}}<br/><br><br>
      	<div ng-controller="childController">
      		Your Name: {{controllerName}}<br/>
        	Spouse Name: {{message}}<br/>
          	Place of Living: {{color}}<br/>
            Phone number: {{type}}<br/> 
    	</div>
    </div>
 
    <script>
        var ngApp = angular.module('testApp', []);
 
        ngApp.controller('parentController', function ($scope) {
          	$scope.controllerName = "Rumesh sree K G"; 
            $scope.message = "Tharun P S"; 
            $scope.color = "Madurai";
        });
 
       ngApp.controller('childController', function ($scope) {
         	$scope.controllerName = "Lisa";
            $scope.color = "Madurai";
         	$scope.type = "6382229532";
        });
    </script>

<div class="buttons">

  <button onclick="location.href='index.php'" type="button"  class="button" role="button">Back</button>
  
</div>

</body>
</html>