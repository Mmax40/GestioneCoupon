<?php
session_start();

  if(isset($_POST['Affiliato'])){
      $_SESSION['Affiliato'] = $_POST['Affiliato'];
   }

  if(isset($_POST['CorsoCoupon'])){
      $_SESSION['CorsoCoupon'] = $_POST['CorsoCoupon'];
   }

  if(isset($_POST['PrezzoCoupon'])){
      $_SESSION['PrezzoCoupon'] = $_POST['PrezzoCoupon'];
   }


// Connessione al database
	$mysqli = new mysqli('89.40.174.68', 'gcodfsrx', 'xAyj9t518G', 'gcodfsrx_mo3');
	if ($mysqli->connect_error) {
		die('Errore di connessione (' . $mysqli->connect_errno . ') '
    	. $mysqli->connect_error);
	}

$ultimoCoupon=mysqli_query($mysqli, "SELECT
MAX(couponid) as id
FROM mdl_block_coupon_courses
");



while($rig = mysqli_fetch_row($ultimoCoupon)) { 
   //echo "<input type='hidden' name='CouponId' value ='$rig[0]'> </input>";
$couponId = $rig[0];
   } 
 


	if (isset($_POST['length'])) {
		include 'class.coupon.php';
		$no_of_coupons = $_POST['no_of_coupons'];
		$length = $_POST['length'];
		$prefix = $_POST['prefix'];
		$suffix = $_POST['suffix'];
		$numbers = $_POST['numbers'];
		$letters = $_POST['letters'];
		$symbols = $_POST['symbols'];
		$random_register = $_POST['random_register'] == 'false' ? false : true;
		$mask = $_POST['mask'] == '' ? false : $_POST['mask'];
		$coupons = coupon::generate_coupons($no_of_coupons, $length, $prefix, $suffix, $numbers, $letters, $symbols, $random_register, $mask);
		foreach ($coupons as $key => $value) {
			echo $value."\n ";


// insert 1

$couponId = $couponId + 1;

$CorsoCoupon = $_SESSION['CorsoCoupon'];
$queryCoupon = "INSERT INTO mdl_block_coupon_courses (couponid, courseid) VALUES ('$couponId', '$CorsoCoupon' )"; //$CorsoCoupon
	if (!$mysqli->query($queryCoupon )) {
		die($mysqli->error);
	}
	
// insert 2
$Affiliato = $_SESSION['Affiliato'];
 	$queryAffiliato = "INSERT INTO mdl_block_coupon (ownerid, for_user_email, for_user_name, for_user_gender, enrolperiod, senddate, issend, redirect_url, email_body, submission_code, logoid, typ, claimed, roleid, batchid, timecreated, timemodified, timeexpired, timeclaimed) VALUES ( '$Affiliato', '', '', '', '', '', '', '', '', '$value', '-1', 'course', '', '', '', '', '', '', '')";
	// Esecuzione della query e controllo degli eventuali errori
	if (!$mysqli->query($queryAffiliato )) {
		die($mysqli->error);
	}
		
// insert 3
$Prezzo = $_SESSION['PrezzoCoupon'];
 	$queryPrezzo = "INSERT INTO CostoCoupon (PrezzoCoupon, CodiceCoupon ) VALUES ('$Prezzo', '$value')";
	// Esecuzione della query e controllo degli eventuali errori
	if (!$mysqli->query($queryPrezzo)) {
		die($mysqli->error);
	}


		}

		die();
	}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Genera Coupon </title>
  </head>
  <body>

	<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Genera Coupon su Affiliato: <?php echo $_POST['Affiliato']?> e Corso: <?php echo $_POST['CorsoCoupon'] ?> </h2>
				<!-- <h2><a href="../index.php">Gestione Coupon </a></h2> -->
				<form action="Step2.php" method="post" id="coupon_form">
					<table class="table table-striped">
						<tr>
							<th>Parameter</th>
							<th>Type</th>
							<th>Default</th>
							<th>Custom value</th>
						</tr>
						<tr>
							<th>Number of coupons</th>
							<td>number</td>
							<td>1</td>
							<td><input class="form-control" type="number" name="no_of_coupons" value="1" min="1"/></td>
						</tr>
						<tr>
							<th>Length</th>
							<td>number</td>
							<td>12</td>
							<td><input class="form-control" type="number" name="length" value="12" min="1" /></td>
						</tr>
						<!-- <tr>
							<th>Prefix</th>
							<td>string</td>
							<td></td>
							<td><input class="form-control" type="text" name="prefix" value="prefix-" /></td>
						</tr>
						<tr>
							<th>Suffix</th>
							<td>string</td>
							<td></td>
							<td><input class="form-control" type="text" name="suffix" value="-suffix" /></td>
						</tr>
						<tr>
							<th>Numbers</th>
							<td>boolean</td>
							<td>true</td>
							<td>
								<select class="form-control" name="numbers">
								  	<option value="false">False</option>
								  	<option selected value="true">True</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Letters</th>
							<td>boolean</td>
							<td>true</td>
							<td>
								<select class="form-control" name="letters">
								  	<option value="false">False</option>
								  	<option selected value="true">True</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Symbols</th>
							<td>boolean</td>
							<td>false</td>
							<td>
								<select class="form-control" name="symbols">
								  	<option selected value="false">False</option>
								  	<option value="true">True</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Random register</th>
							<td>boolean</td>
							<td>false</td>
							<td>
								<select class="form-control" name="random_register">
								  	<option selected value="false">False</option>
								  	<option value="true">True</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Mask</th>
							<td>string or boolean</td>
							<td>false</td>
							<td><input class="form-control" type="text" name="mask" value="XXX-XXX" /></td>
						</tr> -->
					</table>
					<div class="col-md-offset-8 col-md-4">
						<button type="submit" class="btn btn-success pull-right">Generate</button>
						<br/><br/>
					</div>
					<hr />
						<textarea class="form-control" placeholder="Result here" id="result" rows="3" readonly=""></textarea>
					<hr />
					<div class="col-md-offset-8 col-md-4">
						<button type="button" onclick="exporttocsv()" class="btn btn-success pull-right">Export Codes to Excel</button>
					</div>
					<br/><br/><br/><br/><br/>
				</form>
			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


   <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript">
	$(document).ready(function(){
		$('#coupon_form').submit(function() {
			var no_of_coupons = $('input[name="no_of_coupons"]').val();
			var length = $('input[name="length"]').val();
			var prefix = $('input[name="prefix"]').val();
			var suffix = $('input[name="suffix"]').val();
			var numbers = $('select[name="numbers"]').val();
			var letters = $('select[name="letters"]').val();
			var symbols = $('select[name="symbols"]').val();
			var random_register = $('select[name="random_register"]').val();
			var mask = $('input[name="mask"]').val();

			$('#result').load('Step2.php', {
				no_of_coupons: no_of_coupons,
				length: length,
				prefix: prefix,
				suffix: suffix,
				numbers: numbers,
				letters: letters,
				symbols: symbols,
				random_register: random_register,
				mask: mask
			});
			return false;
		});
	});

	function exporttocsv() {
		if ($('#result').val()) {
			var a = document.createElement('a');
			with (a) {
				href='data:text/csv;base64,' + btoa($('#result').val());
				download='csvfile.csv';
			}
			document.body.appendChild(a);
			a.click();
			document.body.removeChild(a);
	        }
        };
	</script>
 


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
