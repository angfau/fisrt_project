 <?php

include "../../config/config.php";

if (isset($_POST['submit'])) 
{
	$username 			= $_POST['username'];
	$pass 				= password_hash($_POST['password'], PASSWORD_DEFAULT);
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
	$employee_join 		= date('Y-m-d H:i:s');

	$add = pg_query($conn, "INSERT INTO ms_employee
		(username,
		password,
		empl_name,
		empl_position,
		empl_grade,
		empl_sex,
		empl_id_type,
		empl_id_no,
		empl_bcity,
		empl_bdate,
		empl_address,
		empl_city,
		empl_join)
		VALUES(
		'$username',
		'$pass',
		'$name',
		'$position',
		'$grade',
		'$empl_sex',
		'$id_type',
		'$id_numb',
		'$empl_bcity',
		'$empl_bday',
		'$adress',
		'$adress_city',
		'$employee_join'
		);");
	if($add){
		Header('Location: ../../view/employee/index.php');
	}
}


?>