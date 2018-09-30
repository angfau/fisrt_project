<?php
include "../../config/config.php";

?>
<title>Add new Employee</title>

	<?php
		$id = $_POST['id'];
        $index_user = pg_query($conn, "SELECT * FROM ms_employee WHERE id='$id';");
        $data = pg_fetch_array($index_user);
        $username = $data['username'];
        $nama = $data['empl_name'];
        $position = $data['empl_position'];
        $grade = $data['empl_grade'];
        $gender = $data['empl_sex'];
        $id_type = $data['empl_id_type'];
        $id_numb = $data['empl_id_no'];
        $address = $data['empl_address'];
        $city = $data['empl_city'];
        $bcity = $data['empl_bcity'];
        $bday = $data['empl_bdate'];

	?>
<body>	
	<div class="container">
		<form method="POST" action="../../controller/employee/edit.php">
			<h1>New Employee</h1>
			<div class="form-group" style="margin-bottom:10%;">
			<div style="float: left;width: 45%; margin-right: 5%">
				<input type="hidden" name="id" value=<?php echo $_POST['id'];?>>
				<label>Employee Username</label>
				<input class="form-control" type="text" name="username" id="username" value="<?php echo $username; ?>">
				<label>Employee Name</label>
				<input class="form-control" type="text" name="nama" id="nama" value="<?php echo $nama; ?>">
				<label>Position</label>
				<input class="form-control" type="text" name="position" id="position" value="<?php echo $position; ?>">
				<label>Employee Grade</label>
				<select class="form-control" style="height:5%;" name="grade" id="grade">
					<option value="01"<?php if ($grade =="1") echo "selected";?>>1</option>
					<option value="01"<?php if ($grade =="2") echo "selected";?>>2</option>
					<option value="01"<?php if ($grade =="3") echo "selected";?>>3</option>
					<option value="01"<?php if ($grade =="4") echo "selected";?>>4</option>
					<option value="01"<?php if ($grade =="5") echo "selected";?>>5</option>
				</select>
				<label>Gender</label>
				<select class="form-control" style="height: 5%;" name="empl_sex" id="empl_sex">
					<option value="Male" <?php if($gender == "Male") echo "selected"; ?>>Male</option>
					<option value="Female" <?php if($gender == "Female") echo "selected"; ?>>Female</option>
				</select>
			</div>
			<div style="float:left; margin-left: 5% left;width: 45%;">
				<label>ID Type</label>
				<select class="form-control" style="height:5%;" name="empl_id_type" id="empl_id_type">
					<option <?php if ($id_type == "KTP") echo "selected"; ?>>KTP</option>
					<option <?php if ($id_type == "SIM") echo "selected"; ?>>SIM</option>
					<option <?php if ($id_type == "PASSPORT") echo "selected"; ?>>PASSPORT</option>
				</select>
				<label>ID Number</label>
				<input class="form-control" type="text" name="empl_id" id="empl_id" value="<?php echo $id_numb;?>">
				<label>Emlployee City of Birth</label>
				<input class="form-control" type="text" name="empl_bcity" id="empl_bcity" value="<?php echo $bcity; ?>">
				<label>Employee Birth Day</label>
				<input class="form-control" type="date" name="empl_bday" value="<?php echo $bday ?>">
				<label>Address</label>
				<input class="form-control" type="text" name="address" id="address" value="<?php echo $address ?>">
				<label>City</label>
				<input class="form-control" type="text" name="address_city" id="address_city" value="<?php echo $city ?>">
				<br>
				<button style="float:right;" class="btn btn-primary" type="submit" name="submit">Save</button>
			</div>
			</div>
		</form>
	</div>
</body>