<?php


$conn =mysqli_connect('localhost','root','','inmar');


if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}
 $myemail=$_COOKIE['email'];
$cemail=$_POST['cemail'];
//echo "$gid";
$sql = "SELECT name,cemail,phoneno FROM contacts WHERE cemail='$cemail' AND uemail='$myemail'";


$result = $conn->query($sql);
    if ($result->num_rows > 0){

    				while($row = $result->fetch_assoc()) {
    						$v1=$row['name'];
    						//echo "$v1";
    						$v2=$row['cemail'];
    						$v3=$row['phoneno'];
    						setcookie("cemail1",$cemail, time() + (86400 * 30), "/");

    				}

  //header("Location:cfromgrp.html");
  //setcookie("grpid",$gid, time() + (86400 * 30), "/");
  //echo "$sql";
/*echo "Contact added successfully";
    header("Location:dashboard1.html");*/
} 
else {
  echo '<script type="text/javascript">';
  echo 'alert("Contact doesnot exist");'; 
  echo 'window.location.href = "dashboard1.html";';
  echo '</script>';
}

$conn->close();
?>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title></title>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <script src="angular.js"></script>
    <script>
    	"use strict"
       var app=angular.module("myapp",[]);
        app.controller("control", function ($scope) {
            //$scope.correct="";
          /*  $scope.show= function (iscorrect) {
                if(iscorrect)
                {
                   $scope.correct="Form Submited Succesfully";
                }
                else
                {
                    $scope.correct="Form Not Submited Succesfully";
                }
            }*/
        });
    </script>
</head>
<body>
   <div ng-app="myapp" ng-controller="control">
       <form name="myform" method="POST" action="editcontact1.php" novalidate>
        <div class="fn1">
          <p>Edit Contact</p>
        </div>
           <div>
               <label>Name:*</label><input type="text" name="name" ng-model="name" ng-required="true" ng-minlength="4" maxlength="20" placeholder="<?php echo "$v1";?>" /><br>
               <p ng-show="myform.name.$error.minlength">Name is too short</p>

           </div>
           <div>
               <label>Email:*</label><input type="email" name="mail" ng-model="mail" ng-required="true" ng-pattern="/^[a-z]+[a-z0-9._]+@inmar\.com/" placeholder="<?php echo "$v2";?>"/><br>
               <p ng-show="myform.mail.$invalid && !myform.mail.$pristine">Enter valid mail</p>
           </div>
           <div>
               <label>Phone Number:*</label><input type="text" name="phoneno" ng-model="phoneno" ng-required="true" ng-minlength="10" maxlength="10" placeholder="<?php echo "$v3";?>"/><br>
               <p ng-show="myform.phoneno.$error.minlength || myform.phoneno.$error.maxlength">Enter 10 digit number</p>
           </div>
           <button class="btn1" ng-disabled="myform.$invalid" type="submit">Edit</button>
       </form>
   </div>
</body>
</html>

