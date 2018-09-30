<?php
include "../../config/config.php";

$id = $_POST['id'];

if (isset($_POST['submit'])){
	$result = pg_query($conn, "UPDATE ms_employee SET delete_flag = true WHERE id='$id';");
 
	if ($result) {
		header("Location:../../view/employee/index.php");
	}
}
?>