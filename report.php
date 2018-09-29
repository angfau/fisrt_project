<?php
session_start();
include "config/config.php";
if (empty($_SESSION)) {
	header("Location: index.php");
}
?>

<body>
	<?php
	$hari = date('D,d-m-Y');
	$uname = $_SESSION['username'];
	?>
	<p style="float: right; margin-right: 3%;"><?php echo $uname ." ". $hari ?></p>
	<br>
	<legend><h1>Laporan Penukaran</h1></legend>
	<div class="container">
		<form method="POST" action="<?php print $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
			<div style="width:20%; float: left; margin-left: :5%;">
				<label>Masukan Tanggal</label>
				<input class="form-control" type="date" name="date">
				<br>
				<input class="btn btn-primary" type="submit" name="submit" value="Submit">
			</div>
			<!-- <select> -->
				<?php
				// $select_user =pg_query($conn,"SELECT * FROM ms_empolyee WHERE delete_flag is not true ORDER BY username asc;");

				// while($data = pg_fetch_array($select_job_title)){
				// 	echo '<option value ='.$data['id'].'>'.$data['description'].'</option>';
				// }
			?>
			<!-- </select> -->
		</div>
		</form>
	</div>

	<?php
if (!empty($_POST['date'])) {
	$date	= $_POST['date'];


?>
<legend style="margin-top:5%;">Transaksi Tanggal: <?php echo $date;?></legend>
<div class="panel panel-primary" style="margin-left: 9%; margin-right: 9%;">
	<table cellpadding="0" cellspacing="0" class="table panel-heading">
		<tr>
			<th>No Invoice</th>
			<th>Nama Costumer</th>
			<th>Tipe Transaksi</th>
			<th>No</th>
			<th>Amount</th>
			<th>From</th>
			<th>To</th>
			<th>Kurs</th>
			<th>Result</th>
			<th>Tanggal</th>
			<th>Delete</th>
		</tr>
		<?php
		$tanggal = $_POST['date'];
		$index = pg_query($conn,"SELECT * FROM transaksi WHERE tanggal = '$tanggal'ORDER BY id ASC;");
		$i=0;

		while ($data = pg_fetch_assoc($index)){
			$i++;
			if ($data['tipe_transaksi'] == "Beli") {
				$x="B";
			}else{
				$x="J";
			}

		?>
		<tr class="warning" style="color: black;">
			<td><?php echo $i;?></td>
			<td><?php echo $x."-".$data['id']; ?></td>
			<td><?php echo $data['nama_customer'];?></td>
			<td><?php echo $data['tipe_transaksi'];?></td>
			<td><?php echo $data['amount']; ?></td>
			<td><?php echo $data['dari'] ; ?></td>
			<td><?php echo $data['ke'] ; ?></td>
			<td><?php echo $data['kurs'] ; ?></td>
			<td><?php echo $data['result'] ; ?></td>
			<td><?php echo $data['tanggal'] ;?></td>
			<td>
				<form action="delete.php" method="POST">
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="submit" name="submit" value="x" class="btn btn-danger">
				</form>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
</div>
<?php
}
?>