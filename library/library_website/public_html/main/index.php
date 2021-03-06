<?php session_start();
if(isset($_SESSION['id'])){

}else{
    echo "<script>window.location.assign('../../../../login/index.php?id=error')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  <script src="../js/angular.js"></script>  
  <script src="../js/app.js"></script>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
        body {
          position: relative;
        }      
        *{
          font-size:25px;
        }
        #section1 {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
        #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
        #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
        #section41 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
        #section42 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}
        .header{
          font-size: 35px;
          text-decoration: underline;

        }
        .cards{
          align-items:center;
          color:black;
          background-color: white;
          border-radius:15px;
          padding:15px;
          margin:15px;
          transition:linear all 0.5s;
        }
        .cards:hover{
          transition: linear all 0.2s;
          z-index: 5px;
          box-shadow:4px 4px 2px grey;
          cursor:pointer;
          padding:15px;

          }
        
      </style>
    <title>E-Library</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-slider.css" rel="stylesheet">

  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="50" ng-app="bookHomeApp">
    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
      <button class="w3-bar-item w3-button w3-large"
      onclick="w3_close()" style="padding-bottom:20px;">Close &times;</button>
      <a href="#section1" class="w3-bar-item w3-button" style="font-size:20px;" onclick="w3_close()">Computer Science</a>
      <a href="#section2" class="w3-bar-item w3-button" style="font-size:20px;" onclick="w3_close()">Information Technology</a>
      <a href="#section3" class="w3-bar-item w3-button" style="font-size:20px;" onclick="w3_close()">Mechanical</a>
      <a href="#section41" class="w3-bar-item w3-button" style="font-size:20px;" onclick="w3_close()">Electronics</a>
      <a href="#section42" class="w3-bar-item w3-button" style="font-size:20px;" onclick="w3_close()">Electrical</a>
    </div>
    <div id="main">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar-inverse navbar-fixed-top">
      <div class="w3-teal">
      <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()" style="background-color:Transparent;">&#9776;Categories</button>
          <div class="w3-container">
          </div>
    </div>
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="position;fixed;">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto"> 
            <li class="nav-item">
              <a onclick=""></a>
              <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" style="background-color:transparent;border:none;"  type="button" data-toggle="dropdown"><span style="color:white;" class="glyphicon glyphicon-user"></span><span style="font-size:30px;">        <?php echo $_SESSION['name'];?></span>
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Edit profile</a></li>
                  <li><a href="#">View Books</a></li>
                  <li><a href="../../../../pages/logout.php">Logout</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/lib1.jpg')">
            <div class="carousel-caption d-none d-md-block">


            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/lib2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/lib3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <div class="col-md-12"></div>
    <!-- Page Content -->

    <div id="section1" class="col-md-12 container-fluid" ng-controller="csCtrl">
      <center><strong><span class="header">Computer Science<span></strong></center> 
          
              <div class="col-md-3 cards" style="padding-bottom:230px" ng-repeat="x in csebooks">
              <a ng-click="getBook(x.name)">
              <input type="hidden" ng-model="x.id"/>
              {{x.name}}<br>{{x.sem}}<br>{{x.stream}}
              </center></a>
              <button onclick="alert('x.id')">Save to profile</button>
              </div>
      
      </div>
      <div id="section2" class="col-md-12 container-fluid" ng-controller="itCtrl">
        <center><span class="header">Information Technology</span></center>
        
            <div class="cards col-md-3" style="padding-top:230px" ng-repeat="x in itbooks" ><a ng-click="getBook(x.name)">{{x.name}}<br>{{x.sem}}<br>{{x.stream}}</a></div>
        
      </div>
      <div id="section3" class="col-md-12 container-fluid" ng-controller="mechCtrl">
        <center><span class="header">Mechanical</span></center>
        <div class="cards col-md-3" style="padding-top:230px" ng-repeat="x in mechbooks" ><a ng-click="getBook(x.name)">
        <input type="hidden" ng-model="x.id"/>
        {{x.name}}<br>{{x.sem}}<br>{{x.stream}}
        </a></div>
      </div>
      <div id="section41" class="col-md-12 container-fluid" ng-controller="etcCtrl">
        <center><span class="header">Electronics</span></center>
        <div class="cards col-md-3" style="padding-top:230px" ng-repeat="x in etcbooks" ><a ng-click="getBook(x.name)">{{x.name}}<br>{{x.sem}}<br>{{x.stream}}</a></div>
      </div>
      <div id="section42" class="col-md-12 container-fluid" ng-controller="elec">
        <center><span class="header">Electrical</span></center>
        <div class="cards col-md-3" style="padding-top:230px" ng-repeat="x in elecbooks"><a ng-click="getBook(x.name)">{{x.name}}<br>{{x.sem}}<br>{{x.stream}}</a></div>
      </div>
      
    <!-- Footer -->
    <footer class="col-md-12 py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; E-Library Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--Controllers-->
    <script src="../js/controller.js"></script>
  </body>
</html>
<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
