<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/angular.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body ng-app="myapp" ng-controller="myCtrl">
    <div class="col-md-12">
    <div class="row col-md-4">
<center><strong><h1>Admin Pannel</h1></strong></center>
<table style="float:left;" style="margin-right:70px;"class="table table-condensed table-hover">
<tr><td><a href="index.php" class="btn btn-info" style="padding:20px;width:100%;">Home<span class="icon home"> </span></td></a></tr>
<tr><td><a  class="btn btn-info" onclick="open_add_book()" style="padding:20px;width:100%;">Add Book<span class="icon book"> </span></a></td></tr>
<tr><td><a class="btn btn-info" href="displayBooks.php" style="padding:20px;width:100%;">Display Books<span class="icon stat"> </span></a></td></tr>
<tr><td><a class="btn btn-info" href="displayBooks.php" style="padding:20px;width:100%;">Display USERS<span class="icon stat"> </span></a></td></tr>
</table>
</div>
<div class="col-md-7">
    <table class="table table-hover table-bordered table-condensed table-responsive">
        <tr>
            <td><strong>First Name</strong></td>
            <td><strong>Last Name</strong></td>
            <td><strong>Age</strong></td>   
            <td><strong>Email</strong></td>
            <td><strong>Password</strong></td>
            <td><strong>Mobile</strong></td>
            <td><strong>Details</strong></td>
        </tr>
        <tr ng-repeat="detail in details">
            <td>{{detail.fname}}</td>
            <td>{{detail.lname}}</td>
            <td>{{detail.age}}</td>
            <td>{{detail.email}}</td>
            <td>{{detail.password}}</td>
            <td>{{detail.mobile}}</td>
            <td>{{detail.details}}</td>
        </tr>
    </table>
    </div>
    </div>
</body>
<script>
var app = angular.module('myapp',[]);
app.controller('myCtrl',function($scope,$http){
    $http.post("fetch.php?id=1")
    .then(function(response){$scope.details = response.data.records;});
});
</script>
</html>