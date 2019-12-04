<?php

	header("Content-Type:text/html;charset=utf-8");

		$connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

		$date = $_POST['date1'];
	  $checktime_1 = $_POST['checktime_1'];
		$writer = $_POST['writer'];

	  $product_1 = $_POST['product_1'];
	  $warehousing_1 = $_POST['warehousing_1'];
	  $fail_count_1 = $_POST['fail_count_1'];
	  $amount_1 = $_POST['amount_1'];
	  $worktime_1 = $_POST['worktime_1'];
	  $stoptime_1 = $_POST['stoptime_1'];
	  $giho_1 = $_POST['giho_1'];
	  $failweight_1 = $_POST['failweight_1'];
	  $giho2_1 = $_POST['giho2_1'];
	  $product_2 = $_POST['product_2'];
	  $warehousing_2 = $_POST['warehousing_2'];
	  $fail_count_2 = $_POST['fail_count_2'];
	  $amount_2 = $_POST['amount_2'];
	  $worktime_2 = $_POST['worktime_2'];
	  $stoptime_2 = $_POST['stoptime_2'];
	  $giho_2 = $_POST['giho_2'];
	  $failweight_2 = $_POST['failweight_2'];
	  $giho2_2 = $_POST['giho2_2'];

	  $pm_1 = $_POST['pm_1'];
	  $br_1 = $_POST['br_1'];
	  $pm_2 = $_POST['pm_2'];
	  $br_2 = $_POST['br_2'];




		//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
	  $sql = "update expandhogi01_work set
		date = '$date',checktime_1 = '$checktime_1',writer='$writer',product_1 = '$product_1',warehousing_1='$warehousing_1',fail_count_1='$fail_count_1',amount_1='$amount_1',worktime_1='$worktime_1',stoptime_1='$stoptime_1',giho_1='$giho_1',failweight_1='$failweight_1',giho2_1='$giho2_1',product_2='$product_2',warehousing_2='$warehousing_2',fail_count_2='$fail_count_2',amount_2='$amount_2',worktime_2='$worktime_2',stoptime_2='$stoptime_2',
		giho_2='$giho_2',failweight_2='$failweight_2',giho2_2='$giho2_2',pm_1='$pm_1',br_1='$br_1',pm_2='$pm_2',br_2='$br_2' where date='$date'";

		$result = $connect->query($sql);



		if($result) { // query가 정상실행 되었다면
			$msg = "수정 되었습니다.";
		} else {
			$msg = "수정하지 못했습니다.";
		}
?>

<script>
	alert("<?php echo $msg?>");
	history.back();
</script>
