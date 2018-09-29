 <?php

include "../../config/config.php";

$id = $_POST['id'];
if (isset($_POST['submit'])) 
{
	$username 			= $_POST['username'];
	$name				= $_POST['nama'];
	$position			= $_POST['position'];
	$grade				= $_POST['grade'];
	$empl_sex			= $_POST['empl_sex'];
	$id_type			= $_POST['empl_id_type'];
	$id_numb			= $_POST['empl_id'];
	$empl_bcity			= $_POST['empl_bcity'];
	$empl_bday			= $_POST['empl_bday'];
	$adress				= $_POST['address'];
	$adress_city		= $_POST['address_city'];

	$add = pg_query($conn, "UPDATE ms_employee SET
		username = '$username',
		empl_name = '$name',
		empl_position = '$position',
		empl_grade = '$grade',
		empl_sex = '$empl_sex',
		empl_id_type = '$id_type',
		empl_id_no = '$id_numb',
		empl_bcity = '$empl_bcity',
		empl_bdate = '$empl_bday',
		empl_address = '$adress',
		empl_city = '$adress_city'
		WHERE id = '$id';");
	if($add){
		$id = $_POST['id'];
		$id = urlencode($id);
		Header("Location: ../../view/employee/view.php?id={$id}");
	}
}


?>