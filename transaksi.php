<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<?php 
session_start();
include "config/config.php";
?>
<body>
	<a href="transaksi.php">
			<legend>Transaksi Header</legend>
			</a>
	<div class="container">
		<form method="POST" action="<?php print $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<div style="float: left;width: 49%; margin-right: 1%">
					<label>Nama Customer</label>
					<input type="text" name="cust" id="cust" class="form-control">
					<label>From</label>
					<select name="from" id="from" class="form-control" style="height:5%">
			          <option selected="selected" value="EUR">Euro - EUR</option>
			          <option value="USD">United States Dollars - USD</option>
			          <option value="GBP">United Kingdom Pounds - GBP</option>
			          <option value="CAD">Canada Dollars - CAD</option>
			          <option value="AUD">Australia Dollars - AUD</option>
			          <option value="JPY">Japan Yen - JPY</option>
			          <option value="INR">India Rupees - INR</option>
			          <option value="NZD">New Zealand Dollars - NZD</option>
			          <option value="CHF">Switzerland Francs - CHF</option>
			          <option value="ZAR">South Africa Rand - ZAR</option>
			          <option value="DZD">Algeria Dinars - DZD</option>
			          <option value="ARS">Argentina Pesos - ARS</option>
			          <option value="AUD">Australia Dollars - AUD</option>
			          <option value="BHD">Bahrain Dinars - BHD</option>
			          <option value="BRL">Brazil Reais - BRL</option>
			          <option value="BGN">Bulgaria Leva - BGN</option>
			          <option value="CAD">Canada Dollars - CAD</option>
			          <option value="CLP">Chile Pesos - CLP</option>
			          <option value="CNY">China Yuan Renminbi - CNY</option>
			          <option value="CNY">RMB (China Yuan Renminbi) - CNY</option>
			          <option value="COP">Colombia Pesos - COP</option>
			          <option value="CRC">Costa Rica Colones - CRC</option>
			          <option value="HRK">Croatia Kuna - HRK</option>
			          <option value="CZK">Czech Republic Koruny - CZK</option>
			          <option value="DKK">Denmark Kroner - DKK</option>
			          <option value="DOP">Dominican Republic Pesos - DOP</option>
			          <option value="EGP">Egypt Pounds - EGP</option>
			          <option value="EEK">Estonia Krooni - EEK</option>
			          <option value="EUR">Euro - EUR</option>
			          <option value="FJD">Fiji Dollars - FJD</option>
			          <option value="HKD">Hong Kong Dollars - HKD</option>
			          <option value="HUF">Hungary Forint - HUF</option>
			          <option value="ISK">Iceland Kronur - ISK</option>
			          <option value="INR">India Rupees - INR</option>
			          <option value="IDR">Indonesia Rupiahs - IDR</option>
			          <option value="ILS">Israel New Shekels - ILS</option>
			          <option value="JMD">Jamaica Dollars - JMD</option>
			          <option value="JPY">Japan Yen - JPY</option>
			          <option value="JOD">Jordan Dinars - JOD</option>
			          <option value="KES">Kenya Shillings - KES</option>
			          <option value="KRW">Korea (South) Won - KRW</option>
			          <option value="KWD">Kuwait Dinars - KWD</option>
			          <option value="LBP">Lebanon Pounds - LBP</option>
			          <option value="MYR">Malaysia Ringgits - MYR</option>
			          <option value="MUR">Mauritius Rupees - MUR</option>
			          <option value="MXN">Mexico Pesos - MXN</option>
			          <option value="MAD">Morocco Dirhams - MAD</option>
			          <option value="NZD">New Zealand Dollars - NZD</option>
			          <option value="NOK">Norway Kroner - NOK</option>
			          <option value="OMR">Oman Rials - OMR</option>
			          <option value="PKR">Pakistan Rupees - PKR</option>
			          <option value="PEN">Peru Nuevos Soles - PEN</option>
			          <option value="PHP">Philippines Pesos - PHP</option>
			          <option value="PLN">Poland Zlotych - PLN</option>
			          <option value="QAR">Qatar Riyals - QAR</option>
			          <option value="RON">Romania New Lei - RON</option>
			          <option value="RUB">Russia Rubles - RUB</option>
			          <option value="SAR">Saudi Arabia Riyals - SAR</option>
			          <option value="SGD">Singapore Dollars - SGD</option>
			          <option value="SKK">Slovakia Koruny - SKK</option>
			          <option value="ZAR">South Africa Rand - ZAR</option>
			          <option value="KRW">South Korea Won - KRW</option>
			          <option value="LKR">Sri Lanka Rupees - LKR</option>
			          <option value="SEK">Sweden Kronor - SEK</option>
			          <option value="CHF">Switzerland Francs - CHF</option>
			          <option value="TWD">Taiwan New Dollars - TWD</option>
			          <option value="THB">Thailand Baht - THB</option>
			          <option value="TTD">Trinidad and Tobago Dollars - TTD</option>
			          <option value="TND">Tunisia Dinars - TND</option>
			          <option value="TRY">Turkey Lira - TRY</option>
			          <option value="AED">United Arab Emirates Dirhams - AED</option>
			          <option value="GBP">United Kingdom Pounds - GBP</option>
			          <option value="USD">United States Dollars - USD</option>
			          <option value="VEB">Venezuela Bolivares - VEB</option>
			          <option value="VND">Vietnam Dong - VND</option>
			          <option value="ZMK">Zambia Kwacha - ZMK</option>
		      		</select>
		      		<label for="amount">Amount</label>
					<input class="form-control" type="text" name="amount" id="amount">
				</div>
	      		<div style="float: right;width: 49%; margin-left: 1%">
	      			<label>Tipe Transaksi</label>
	      			<select name="tipe" id="tipe" class="form-control" style="height:5%;">
	      				<option value="Jual">Jual</option>
	      				<option value="Beli">Beli</option>
	      				
	      			</select>
		      		<label for="to">To</label>
			        <select name="to" id="to" class="form-control" style="height:5%;">
			          <option value="USD">United States Dollars - USD</option>
			          <option value="GBP">United Kingdom Pounds - GBP</option>
			          <option value="CAD">Canada Dollars - CAD</option>
			          <option value="AUD">Australia Dollars - AUD</option>
			          <option value="JPY">Japan Yen - JPY</option>
			          <option value="INR">India Rupees - INR</option>
			          <option value="NZD">New Zealand Dollars - NZD</option>
			          <option value="CHF">Switzerland Francs - CHF</option>
			          <option value="ZAR">South Africa Rand - ZAR</option>
			          <option value="DZD">Algeria Dinars - DZD</option>
			          <option value="ARS">Argentina Pesos - ARS</option>
			          <option value="AUD">Australia Dollars - AUD</option>
			          <option value="BHD">Bahrain Dinars - BHD</option>
			          <option value="BRL">Brazil Reais - BRL</option>
			          <option value="BGN">Bulgaria Leva - BGN</option>
			          <option value="CAD">Canada Dollars - CAD</option>
			          <option value="CLP">Chile Pesos - CLP</option>
			          <option value="CNY">China Yuan Renminbi - CNY</option>
			          <option value="CNY">RMB (China Yuan Renminbi) - CNY</option>
			          <option value="COP">Colombia Pesos - COP</option>
			          <option value="CRC">Costa Rica Colones - CRC</option>
			          <option value="HRK">Croatian Kuna - HRK</option>
			          <option value="CZK">Czech Republic Koruny - CZK</option>
			          <option value="DKK">Denmark Kroner - DKK</option>
			          <option value="DOP">Dominican Republic Pesos - DOP</option>
			          <option value="EGP">Egypt Pounds - EGP</option>
			          <option value="EEK">Estonia Krooni - EEK</option>
			          <option value="EUR">Euro - EUR</option>
			          <option value="FJD">Fiji Dollars - FJD</option>
			          <option value="HKD">Hong Kong Dollars - HKD</option>
			          <option value="HUF">Hungary Forint - HUF</option>
			          <option value="ISK">Iceland Kronur - ISK</option>
			          <option value="INR">India Rupees - INR</option>
			          <option value="IDR">Indonesia Rupiahs - IDR</option>
			          <option value="ILS">Israel New Shekels - ILS</option>
			          <option value="JMD">Jamaica Dollars - JMD</option>
			          <option value="JPY">Japan Yen - JPY</option>
			          <option value="JOD">Jordan Dinars - JOD</option>
			          <option value="KES">Kenya Shillings - KES</option>
			          <option value="KRW">Korea (South) Won - KRW</option>
			          <option value="KWD">Kuwait Dinars - KWD</option>
			          <option value="LBP">Lebanon Pounds - LBP</option>
			          <option value="MYR">Malaysia Ringgits - MYR</option>
			          <option value="MUR">Mauritius Rupees - MUR</option>
			          <option value="MXN">Mexico Pesos - MXN</option>
			          <option value="MAD">Morocco Dirhams - MAD</option>
			          <option value="NZD">New Zealand Dollars - NZD</option>
			          <option value="NOK">Norway Kroner - NOK</option>
			          <option value="OMR">Oman Rials - OMR</option>
			          <option value="PKR">Pakistan Rupees - PKR</option>
			          <option value="PEN">Peru Nuevos Soles - PEN</option>
			          <option value="PHP">Philippines Pesos - PHP</option>
			          <option value="PLN">Poland Zlotych - PLN</option>
			          <option value="QAR">Qatar Riyals - QAR</option>
			          <option value="RON">Romania New Lei - RON</option>
			          <option value="RUB">Russia Rubles - RUB</option>
			          <option value="SAR">Saudi Arabia Riyals - SAR</option>
			          <option value="SGD">Singapore Dollars - SGD</option>
			          <option value="SKK">Slovakia Koruny - SKK</option>
			          <option value="ZAR">South Africa Rand - ZAR</option>
			          <option value="KRW">South Korea Won - KRW</option>
			          <option value="LKR">Sri Lanka Rupees - LKR</option>
			          <option value="SEK">Sweden Kronor - SEK</option>
			          <option value="CHF">Switzerland Francs - CHF</option>
			          <option value="TWD">Taiwan New Dollars - TWD</option>
			          <option value="THB">Thailand Baht - THB</option>
			          <option value="TTD">Trinidad and Tobago Dollars - TTD</option>
			          <option value="TND">Tunisia Dinars - TND</option>
			          <option value="TRY">Turkey Lira - TRY</option>
			          <option value="AED">United Arab Emirates Dirhams - AED</option>
			          <option value="GBP">United Kingdom Pounds - GBP</option>
			          <option value="USD">United States Dollars - USD</option>
			          <option value="VEB">Venezuela Bolivares - VEB</option>
			          <option value="VND">Vietnam Dong - VND</option>
			          <option value="ZMK">Zambia Kwacha - ZMK</option>
			        </select>
			        <label>Kurs</label>
			        <input type="text" name="kurs" id="kurs" class="form-control">
		    	</div>
		    	<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Convert" style="margin-top: 2%" />
			</div>
		</form>
	</div>
</body>

<?php
if (!empty($_POST['amount'])) {
	$to 	= $_POST['to'];
	$from 	= $_POST['from'];
	$amount = $_POST['amount'];
	$kurs 	= $_POST['kurs'];
	$date	= date('Y-m-d');
	$cust 	= $_POST['cust'];
	$tipe 	= $_POST['tipe'];

	$result = $amount * $kurs;

	$add = pg_query($conn, "INSERT INTO transaksi(amount, dari, ke, kurs, result, tanggal, nama_customer, tipe_transaksi) VALUES ('$amount','$from','$to','$kurs','$result','$date','$cust','$tipe');");
}

?>
<legend>Transaksi Detail</legend>
<div>
		<?php
            if(!empty($_GET['pesan'])){
                $message = $_GET['pesan'];
                // echo "<p class='msg'>$message <button class='btn btn-danger ' id='closeMsg'>X</button></p>";
                echo "<span onload='confirm()'></span>";
            }
        ?>
    </div>
	<form action="report.php" method="POST">
		<input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
		<input type="submit" name="submit" value="Report" class="btn btn-info" style="float: left; margin-left:9%">
	</form>
	<br>
	<br>
	<br>
<div class="panel panel-primary" style="margin-left: 9%; margin-right: 9%; height:50%; overflow:auto;">
	<table cellpadding="0" cellspacing="0" class="table panel-heading">
		<tr>
			<th>No</th>
			<th>No Invoice</th>
			<th>Nama Costumer</th>
			<th>Tipe Transaksi</th>
			<th>Amount</th>
			<th>From</th>
			<th>To</th>
			<th>Kurs</th>
			<th>Result</th>
			<th>Tanggal</th>
			<th></th>
		</tr>
		<?php
		$tanggal = date('Y-m-d');
		$index = pg_query($conn,"SELECT * FROM transaksi WHERE tanggal = '$tanggal' ORDER BY id ASC;");
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
<script type="text/javascript">
    $('#closeMsg').click(function(){
        $('p.msg').remove();        
    });
function confirm() {
		alert("Transaksi Berhasil Dihapus");
	}
</script>