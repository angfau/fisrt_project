<?php
include "../../config/config.php";

?>
<title>Add new Employee</title>

<body>
	<div class="container">
		<form method="POST" action="../../controller/employee/add.php">
			<h1>New Employee</h1>
			<div class="form-group" style="margin-bottom:10%;">
			<div style="float: left;width: 45%; margin-right: 5%">
				<label>Employee Username</label>
				<input class="form-control" type="text" name="username" id="username" placeholder="Insert Employee Username">
				<label>Password</label>
				<input class="form-control" type="password" name="password" id="password" placeholder="Insert Password">
				<label>Employee Name</label>
				<input class="form-control" type="text" name="nama" id="nama" placeholder="Insert Employee Name">
				<label>Position</label>
				<input class="form-control" placeholder="Insert Employee Position" type="text" name="position" id="position">
				<label>Employee Grade</label>
				<select class="form-control" style="height:5%;" name="grade" id="grade">
					<option selected="selected">Select Your Grade</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
				<label>Gender</label>
				<select class="form-control" style="height: 5%;" name="empl_sex" id="empl_sex">
					<option selected="selected">Select Your Gender</option>
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
			<div style="float:left; margin-left: 5% left;width: 45%;">
				<label>ID Type</label>
				<select class="form-control" style="height:5%;" name="empl_id_type" id="empl_id_type">
					<option>KTP</option>
					<option>SIM</option>
					<option>PASSPORT</option>
				</select>
				<label>ID Number</label>
				<input class="form-control" type="text" name="empl_id" id="empl_id" placeholder="Insert Id">
				<label>Emlployee City of Birth</label>
				<input class="form-control" type="text" name="empl_bcity" id="empl_bcity" placeholder="Insert City of Birth">
				<label>Employee Birth Day</label>
				<input class="form-control" type="date" name="empl_bday" placeholder="Insert City of Birth">
				<label>Address</label>
				<input class="form-control" placeholder="Insert Address" type="text" name="address" id="address">
				<label>City</label>
				<input class="form-control" placeholder="Insert City of Address" type="text" name="address_city" id="address_city">
				<br>
				<button style="float:right;" class="btn btn-primary" type="submit" name="submit">Save</button>
			</div>
			</div>
		</form>
	</div>
</body>