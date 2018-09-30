<?php  
include "config/config.php";

$id = $_POST['id'];
if(isset($_POST["submit"])) {
	$query = pg_query($conn,"DELETE FROM transaksi WHERE id ='$id';");
	if ($query) {
		$pesan = "Transaksi Berhasil Dihapus";
		$pesan = urlencode($pesan);
		header("Location: transaksi.php?pesan={$pesan}");
		
	}else{
		die("Gagal Hapus");
	}
}
?>