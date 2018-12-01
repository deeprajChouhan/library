<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Admin Dropdown Menu</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<script src="js/jquery.js" type="text/javascript"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	</style>
	</head>
		<body ng-app="admin_app">
		<?php
    $conn = mysqli_connect("localhost", "root", "", "library");
    $sql_books = "select id from books";
	$sql_users = "select id from persons";
	$sql_stream = "select id from stream";
	$res_stream = mysqli_query($conn,$sql_stream);
    $res_books = mysqli_query($conn,$sql_books);
    $res_users = mysqli_query($conn,$sql_users);
    $count_books = 0;$count_users = 0;$count_streams = 0;
    while($row_users = mysqli_fetch_array($res_users)){
        $count_users++;
    }
    while($row_books = mysqli_fetch_array($res_books)){
        $count_books++;
	}
    while($row_stream = mysqli_fetch_array($res_stream)){
        $count_streams++;
    }
?>
	<div class="jumbotron col-md-12"> <div style="float:left;" class="col-md-4"><h1>ADMIN PANNEL</h1></div></div>
	<div class="dashboard col-md-12">
  <div class="row col-md-4"> 
	  <table style="float:left;" style="margin-right:70px;"class="table table-condensed table-hover">
	  <tr><td><a href="index.php" class="btn btn-info" style="padding:20px;width:100%;">Home<span class="icon home"> </span></td></a></tr>
	  <tr><td><a  class="btn btn-info" onclick="open_add_book()" style="padding:20px;width:100%;">Add Book<span class="icon book"> </span></a></td></tr>
	  <tr><td><a class="btn btn-info" href="displayBooks.php" style="padding:20px;width:100%;">Display Books<span class="icon stat"> </span></a></td></tr>
	  <tr><td><a class="btn btn-info" href="displayUsers.php" style="padding:20px;width:100%;">Display USERS<span class="icon stat"> </span></a></td></tr>
  		</table>
  </div>
 <div class="col-md-8">
  <table style="float:right;" ><tr>
	<td>
		<div class="card bg-danger text-white">
    		<div class="card-body"><h3>Total Users <?php echo "<h1><strong>".$count_users."</strong></h1>"?></h3></div>
 		</div>	
	</td>
	<td>		
	<div class="card bg-warning text-white">
		<div class="card-body"><h3>Total Books <?php echo "<h1><strong>".$count_books."</strong></h1>"?></h3></div>
	</div>
	</div>
	<td>		
	<div class="card bg-success text-white">
	<div class="card-body"><h3>Total Streams <?php echo "<h1><strong>".$count_streams."</strong></h1>"?></h3></div>
	</div>
	</td>
  </table>

  </div>
  </div>
</div>
  <div class="col-md-5">

	</div>

			<!-----end-wrapper-dropdown-2---->
			<!-----start-script---->
			<script type="text/javascript">
							function open_add_book(){
								window.location.assign("addBook.php");
							}
							function DropDown(el) {
								this.dd = el;
								this.initEvents();
							}
							DropDown.prototype = {
								initEvents : function() {
									var obj = this;

									obj.dd.on('click', function(event){
										$(this).toggleClass('active');
										event.stopPropagation();
									});
								}
							}
							$(function() {

								var dd = new DropDown( $('#dd') );

								$(document).click(function() {
									// all dropdowns
									$('.wrapper-dropdown-2').removeClass('active');
								});

							});
			</script>
	</body>
</html>