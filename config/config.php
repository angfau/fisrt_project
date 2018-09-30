<?php
$conn_string = "host=localhost port=5432 dbname=money_changer user=postgres password=12345";
	$conn = pg_connect($conn_string);

// $conn = new mysqli("localhost", "root", "","money_changer");
date_default_timezone_set('Asia/Jakarta');


?>

<link rel="stylesheet" type="text/css" href="/money_changer/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/money_changer/css/bootstrap.min.css">

<script src="/money_changer/js/bootstrap.min.js"></script>
<script src="/money_changer/js/jquery-3.3.1.min.js"></script>
<script src="/money_changer/js/jquery-ui-1.12.1.js"></script>
<script src="/money_changer/js/jquery.min.js"></script>
<script src="/money_changer/js/jqx-all.js"></script>
<script src="/money_changer/js/bootstrap.js"></script>

<script type="text/javascript">
	function confirm_click() {
		return confirm('Are You Sure Want to Delete');
	}
</script>