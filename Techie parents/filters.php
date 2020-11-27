<html>
   <head>
      <title>Academic year 2020</title>
      <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js">
      </script>
   </head>
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
table {
    margin-left:auto; 
    margin-right:auto;
    font-weight: bold;
    font-size: 20px;
    letter-spacing: 0.5px;
    line-height: 1.6;
  }

  .buttons {
  text-align: center;
  position: relative;
  top: 15px;
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
   
   <body>
       
      <h2>ACDEMIC YEAR 2020</h2>
      
      <div ng-app = "mainApp" ng-controller = "studentController" >
         <table border = "0">
            <tr>
               <td>Enter first name:</td>
               <td><input type = "text" ng-model = "student.firstName"></td>
            </tr>
            <tr>
               <td>Enter last name: </td>
               <td><input type = "text" ng-model = "student.lastName"></td>
            </tr>
            <tr>
               <td>Enter fees: </td>
               <td><input type = "text" ng-model = "student.fees"></td>
            </tr>
            <tr>
               <td>Enter subject: </td>
               <td><input type = "text" ng-model = "subjectName"></td>
            </tr>
         </table>
         <br/>
         
         <table border = "0">
            <tr>
               <td>Name in Upper Case: </td><td>{{student.fullName() | uppercase}}</td>
            </tr>
            <tr>
               <td>Name in Lower Case: </td><td>{{student.fullName() | lowercase}}</td>
            </tr>
            <tr>
               <td>The Fees for this Academic year 2020: </td><td>{{student.fees | currency}}
               </td>
            </tr>
            <tr>
               <td>Subject:</td>
               <td>
                  <ul>
                     <li ng-repeat = "subject in student.subjects | filter: subjectName |orderBy:'marks'">
                        {{ subject.name + ' marks:' + subject.marks }}
                     </li>
                  </ul>
               </td>
            </tr>
         </table>
      </div>

      
    
      
      <script>
         var mainApp = angular.module("mainApp", []);
         
         mainApp.controller('studentController', function($scope) {
            $scope.student = {
               firstName: "",
               lastName: "",
               fees:10000,
               
               subjects:[
                 
                  {name:'Tamil',marks:200},
                  {name:'English',marks:200},
                  {name:'Maths',marks:200},
                  {name:'Botony',marks:100},
                  {name:'zoology',marks:100},
                  {name:'Physics',marks:100},
                  {name:'Chemistry',marks:100}
               ],
               fullName: function() {
                  var studentObject;
                  studentObject = $scope.student;
                  return studentObject.firstName + " " + studentObject.lastName;
               }
            };
         });
      </script>
     <div class="buttons">

      <button onclick="location.href='index.php'" type="button"  class="button" role="button">Back</button>
      
    </div> 
   </body>
</html>