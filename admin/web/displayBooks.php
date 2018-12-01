<!DOCTYPE html>
<html >

<script src="js/jquery.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/angular.js"></script>
<body  ng-app="myApp" ng-controller="customersCtrl">
<div class="row col-md-12">

<div class="row col-md-4">
<center><strong><h1>Admin Pannel</h1></strong></center>
<table style="float:left;" style="margin-right:70px;"class="table table-condensed table-hover">
<tr><td><a href="index.php" class="btn btn-info" style="padding:20px;width:100%;">Home<span class="icon home"> </span></td></a></tr>
<tr><td><a  class="btn btn-info" onclick="open_add_book()" style="padding:20px;width:100%;">Add Book<span class="icon book"> </span></a></td></tr>
<tr><td><a class="btn btn-info" href="displayBooks.php" style="padding:20px;width:100%;">Display Books<span class="icon stat"> </span></a></td></tr>
<tr><td><a class="btn btn-info" href="displayUsers.php" style="padding:20px;width:100%;">Display USERS<span class="icon stat"> </span></a></td></tr>
</table>
</div>
<div class="col-md-8">
<table class="table table-hover table-bordered table-responsive">
  <tr>
    <td><strong>Id</strong></td>
    <td><strong>Path</strong></td>
    <td><strong>Name</strong></td>
    <td><strong>Stream</strong></td>
    <td><strong>Semester</strong></td>
  </tr>
  <tr ng-repeat="x in names">
    <td ><span>{{ x.id }}</span>
      <span><input type="text" ng-blur="closeEdit()" ng-model="x.id" style="display:none;"></span>
    </td>

      <td><span>{{ x.path }}</span>
        <span><input type="text" ng-blur="closeEdit()" ng-model="x.path" style="display:none;" ></span>
      </td>

        <td><span id="NEdit">{{ x.name }}</span>
          <span><input type="text" ng-blur="closeEdit()" ng-model="x.name" style="display:none;" id="Edit"></span>
        </td>

          <td><span id="NEdit">{{ x.stream }}</span>
            <span><input type="text" ng-blur="closeEdit()" ng-model="x.stream" style="display:none;" id="Edit"></span>
          </td>

            <td><span id="NEdit">{{ x.sem }}</span>
              <span><input type="text" ng-blur="closeEdit()" ng-model="x.sem" style="display:none;" id="Edit"></span>
            </td>
  </tr>
</table>
</div>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
   $http.get("fetch.php?id=0")
   .then(function (response) {$scope.names = response.data.records;});
   $scope.viewEdit = function(){
     document.getElementById('NEdit').style.display = "none";
     document.getElementById('Edit').style.display ="block";
      };
   $scope.closeEdit = function(){
     document.getElementById('NEdit5').style.display = "block";
     document.getElementById('Edit5').style.display ="none";
   }
});
</script>

</body>
</html>
