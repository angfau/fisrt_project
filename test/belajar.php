<?php
$conn_string = "host=localhost port=5432 dbname=money_changer user=postgres password=12345";
$conn = pg_connect($conn_string);
$siswa = array("angga","fauzi", "joko", "fauzi");
?>
<script src="/money_changer/js/jquery-3.3.1.min.js"></script>
<script>
	$(document).ready(function(){
		$("#send").click(function(){
			var nama = $("#nama").val();
			var joko = nama.toLocaleString('id-ID')
			var row = "<tr class='par'><td>"+joko+"</td><td><button class='del'>X</button></td></tr>";
			$("#tbl").append(row);
			$("input").val("");
			$(".del").click(function(){
				$(this).closest(".par").remove();
			});

		});
	});
</script>
<table>
<tr>
	<th>No</th>
	<th>Nama</th>
</tr>
<?php
$i=0;
foreach ($siswa as $siswa) {
	$i++;
?>
<tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $siswa;?></td>
</tr>
<?php
}
?>
</table>
<?php
$index_user = pg_query($conn, "SELECT * FROM ms_employee;");
?>
<table>
	<tr>
		<th>No</th>
		<th>Nama</th>
	</tr>
<?php
$i=0;
while ($data = pg_fetch_assoc($index_user)){
	$i++;
?>
<tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $data['username'];?></td>
</tr>
<?php
}
?>
</table>

<label>Nama</label>
<span id="int"></span>
<input type="text" name="nama" id="nama">
<button id="send">Tambah</button>

<table id="tbl">
	<tr>
		<th>Nama</th>
		<th>Hapus</th>
	</tr>
</table>

<script type="text/javascript">
	var num = 3.14;

	console.log(isFinite(num));
</script>



<!-- <body>
	<div class="container">
		<h1>Edit User</h1>
<form name="update_password" id="myform" method="post" action="../../controller/User/action_edit_password.php">
	<input type="hidden" name="id" value=<?php echo $_POST['id'];?>>
			
				<td>New Password</td>
				<td><input class="form-control " style="width: 50%;" type="password" name="password" id="password"></td>
				<td>Confirm New Password</td>
				<td>
					<input style="width:50%;" class="form-control " type="password" name="new_password" id="new_password">
				</td>
				<td>
					<span style="width: 50%;" id='message'></span>
				</td>
					<br/>
					<br/>
				<td>
				<input class="btn btn-info" style="float:left;" type="submit" name="update" value="Change Password">
			</td>
			
		
	</form>
</div>
</body>
<script>
$('#new_password').on('keyup', function () {
    if ($(this).val() == $('#password').val()) {
        $('#message').html('password matching').css('color', 'green');
    } else $('#message').html('Password Not Matching').css('color', 'red');
});
</script> -->