app.controller("csCtrl",function($scope,$http){
    $http.post("../pages/fetch_data.php?id=CSE").then(function(response) {
      $scope.csebooks = response.data.records;
    });
    $scope.getBook = function(name){
        $scope.name = name;
        window.location.assign("../pages/path.php?id="+$scope.name);

    }
  });
app.controller("itCtrl",function($scope,$http){
    $http.post("../pages/fetch_data.php?id=IT").then(function(response){
        $scope.itbooks = response.data.records;
    });
    $scope.getBook = function(name){
        $scope.name = name;
        window.location.assign("../pages/path.php?id="+$scope.name);

    }
});

app.controller("etcCtrl",function($scope,$http){
    $http.post("../pages/fetch_data.php?id=ETC").then(function(response){
        $scope.etcbooks = response.data.records;
    });
    $scope.getBook = function(name){
        $scope.name = name;
        window.location.assign("../pages/path.php?id="+$scope.name);

    }
});

app.controller("mechCtrl",function($scope,$http){
    $http.post("../pages/fetch_data.php?id=MECH").then(function(response){
        $scope.mechbooks = response.data.records;
    });
    $scope.getBook = function(name){
        $scope.name = name;
        window.location.assign("../pages/path.php?id="+$scope.name);

    }
});

app.controller("elec",function($scope,$http){
    $http.post("../pages/fetch_data.php?id=ELE").then(function(response){
        $scope.elecbooks = response.data.records;
    });
    $scope.getBook = function(name){
        $scope.name = name;
        window.location.assign("../pages/path.php?id="+$scope.name);

    }
});

app.controller("elecCtrl",function($scope,$http){
    $http.post("../pages/fetch_data.php?id=ELEC").then(function(response){
        $scope.elecbooks = response.data.records;
    });
    $scope.getBook = function(name){
        $scope.name = name;
        window.location.assign("../pages/path.php?id="+$scope.name);

    }
});