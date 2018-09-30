<?php
include "../../config/config.php";
session_start();
?>
<body>
<h1>Employee Detail</h1>
<div class="panel panel-danger">
	<table class="table panel-heading">
	<?php
		$id = $_GET['id'];
        $index_user = pg_query($conn, "SELECT * FROM ms_employee WHERE id='$id';");
        $data = pg_fetch_array($index_user);
	?>
        <tr>
        	<th scope="row">Name</th>
        	<td class="warning" style="color: black;"> <?php echo $data['empl_name']; ?></td>
        </tr>
        <tr>
        	<th scope="row">Username</th>
        	<td class="warning" style="color: black;"><?php echo $data['username'];?></td>
        </tr>
        <tr>
        	<th scope="row">Position</th>
        	<td class="warning" style="color: black;"><?php echo $data['empl_position']; ?></td>
        </tr>
        <tr>
        	<th scope="row">Position Grade</th>
        	<td class="warning" style="color: black;"> <?php echo $data['empl_grade']; ?> </td>

        </tr>
        <tr>
        	<th scope="row">Address</th>
        	<td class="warning" style="color: black;"><?php echo $data['empl_address'].", ".$data['empl_city']; ?></td>
        </tr>

        <tr>
            <th scope="row">Place and Birthday</th>
            <td class="warning" style="color: black;"><?php echo $data['empl_bcity'] . ", " . $data['empl_bdate']; ?></td>
        </tr>

        <tr>
            <th scope="row">Gender</th>
            <td class="warning" style="color: black;"><?php echo $data['empl_sex']; ?></td>
        </tr>
        <tr>
            <th scope="row">Id type and Id Number</th>
            <td class="warning" style="color: black;"><?php echo $data['empl_id_type'].": ".$data['empl_id_no']; ?></td>
        </tr>
        <tr>
            <th scope="row">Employee Join Date</th>
            <td class="warning" style="color: black;"><?php echo $data['empl_join']; ?></td>
        </tr>

    </table>
</div>
<div style="padding-top: 15px; padding-right: 15px; float: right;">
    <table>
        <tr>
        <form action="../../controller/employee/delete.php" method="POST" >
            <input type="hidden" name="id" value="<?php echo"$data[id]";?>">
            <input class="btn btn-primary" type="submit" onclick="return confirm('sure to delete !')" name="submit" value="Delete" >
        </form>
        </tr>
        <tr>
         <form action="edit.php" method="POST" >
            <input type="hidden" name="id" value="<?php echo"$data[id]";?>">
            <input style="margin-left: 5px; margin-right: 5px;" class="btn btn-primary" type="submit" name="submit" value="Edit">
        </form>
        </tr>
		<!-- <tr>
			<form action="edit_password.php" method="POST" >
            <input type="hidden" name="id" value="<?php echo"$data[id]";?>">
            <input style="margin-left: 5px; margin-right: 5px;" class="btn btn-primary" type="submit" name="submit" value="Edit Password">
        </form> -->
		</tr>
        <tr>
            <form action="index.php">
            <input class="btn btn-primary" type="submit"  value="Back">
        </form>
        </tr>
    </table>
</div>
</body>