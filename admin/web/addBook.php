<div class="well " id="add-book" style="display:block;margin-top:10%;">
	<div class="form-group">

		<form action="" method="POST" enctype="multipart/form-data"><center>
			<table class="add-book-table table table-hover">
				<tr>
					<td><input type="text" class="form-control  input-lg" name="bname" placeholder="Name of book" required/></td>
				</tr>
				<tr>
					<td><select name="bstream" class="form-control  input-lg" required>
							<option value="CSE">CSE</option>
							<option value="IT">IT</option>
							<option value="MECH">MECH</option>
							<option value="ELECTRICAL">ELECTRICAL</option>
							<option value="ETC">ETC</option>
					</select>
					</td>
					<td>
						<select name="bsem" class="form-control  input-lg" required>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
						</select>
					</td>
				</tr>
				<tr>
				<tr><td><strong>Insert PDF</strong></td></tr>
				<td><input type="file" name="Filename" class="form-control  input-lg" required/></td></tr>
				<tr>
					<td><input type="submit" class="btn btn-success"/></td>
				</tr>
			</table></center>
		</form> 
</div>
</div>
<?php
    include '../../pages/connection.php';
    if(isset($_FILES['Filename'])){
        $stream = $_POST['bstream'];
        $semester = $_POST['bsem'];
        $bname = $_POST['bname'];
        $info  =array(
          'name' => "$bname",
          'sem' => "$semester",
          'stream' => "$stream"
        );
            $errors= array();
            $file_name = $_FILES['Filename']['name'];
            $file_size =$_FILES['Filename']['size'];
            $file_tmp =$_FILES['Filename']['tmp_name'];
            $file_type=$_FILES['Filename']['type'];
            $target = "books/".$stream."/".$semester."/";
            $target = $target . basename( $_FILES['Filename']['name']);
            move_uploaded_file($_FILES['Filename']['tmp_name'],$target);
        $info_book =  json_encode($info);
        $sql_select = "INSERT INTO books (path,type) VALUES ('$target','$info_book')";
    if($conn->query($sql_select) === TRUE){/*header("Location:index.php");*/}
        else{echo "Not Inserted";}
    }
?>
