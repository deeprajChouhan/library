<!DOCTYPE html>
<html >
<style>
table, th , td  {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
}
table tr:nth-child(odd) {
  background-color: #f1f1f1;
}
table tr:nth-child(even) {
  background-color: #ffffff;
}
</style>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="angular-1.6.10/angular.js"></script>
<script src="angular-1.6.10/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="customersCtrl">
<table><form method="post">
  <tr ng-repeat="x in names"><form method="post">
    <td><input type="text" ng-blur="update(x.name,x.sem,x.stream)"  name="name" ng-model="x.name"/></td>
    <td><input type="text" ng-blur="update(x.name,x.sem,x.stream)" name="sem" ng-model="x.sem"/></td>
    <td><input type="text" ng-blur="update(x.name,x.sem,x.stream)" name="stream" ng-model="x.stream"/></td>
  </tr>
    <input type="submit" name="submit" value="Submit"/>
  </form></table>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
   $http.post("server.php")
   .then(function (response) {$scope.names = response.data.records;});
   $scope.update = function(name,sem,stream){
     $scope.name = name;$scope.sem = sem;$scope.stream = stream;
     var dataObj = {
       'bname': $scope.name,
       'bsem': $scope.sem,
       'bstream ': $scope.stream
     };
     var res = $http.post("update.php",JSON.stringify(dataObj));
     res.then(function(data){
       $scope.data = data;
     });
   };
});
</script>

</body>
</html>
