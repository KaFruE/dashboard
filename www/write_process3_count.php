<?php

header("Content-Type:text/html;charset=utf-8");

$connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

	$date = $_POST['date'];
	$writer = $_POST['writer'];
  $standard_1 = $_POST['standard_1'];
  $checktime_1 = $_POST['checktime_1'];
  $amount_1 = $_POST['amount_1'];
  $pertime_1 = $_POST['pertime_1'];
  $perweight_1 = $_POST['perweight_1'];
	$failure_1 = $_POST['failure_1'];
	$failurereason_1 = $_POST['failurereason_1'];

	$standard_2 = $_POST['standard_2'];
  $checktime_2 = $_POST['checktime_2'];
  $amount_2 = $_POST['amount_2'];
  $pertime_2 = $_POST['pertime_2'];
  $perweight_2 = $_POST['perweight_2'];
	$failure_2 = $_POST['failure_2'];
	$failurereason_2 = $_POST['failurereason_2'];

	$standard_3 = $_POST['standard_3'];
  $checktime_3 = $_POST['checktime_3'];
  $amount_3 = $_POST['amount_3'];
  $pertime_3 = $_POST['pertime_3'];
  $perweight_3 = $_POST['perweight_3'];
	$failure_3 = $_POST['failure_3'];
	$failurereason_3 = $_POST['failurereason_3'];

	$standard_4 = $_POST['standard_4'];
  $checktime_4 = $_POST['checktime_4'];
  $amount_4 = $_POST['amount_4'];
  $pertime_4 = $_POST['pertime_4'];
  $perweight_4 = $_POST['perweight_4'];
	$failure_4 = $_POST['failure_4'];
	$failurereason_4 = $_POST['failurereason_4'];


	$pm_1 = $_POST['pm_1'];
	$br_1 = $_POST['br_1'];
	$pm_2 = $_POST['pm_2'];
	$br_2 = $_POST['br_2'];
	$pm_3 = $_POST['pm_3'];
	$br_3 = $_POST['br_3'];
	$pm_4 = $_POST['pm_4'];
	$br_4 = $_POST['br_4'];






	//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
  $sql = "insert into hogi03_count values
	('$date','$writer','$standard_1','$checktime_1','$amount_1','$pertime_1','$perweight_1','$failure_1','$failurereason_1','$standard_2','$checktime_2','$amount_2','$pertime_2','$perweight_2','$failure_2','$failurereason_2','$standard_3','$checktime_3','$amount_3','$pertime_3','$perweight_3','$failure_3','$failurereason_3',
	 '$standard_4','$checktime_4','$amount_4','$pertime_4','$perweight_4','$failure_4','$failurereason_4','$pm_1','$br_1','$pm_2','$br_2','$pm_3','$br_3','$pm_4','$br_4')";

	$result = $connect->query($sql);

	if($result) { // query가 정상실행 되었다면
		$msg = "저장 되었습니다.";
	} else {
		$msg = "저장하지 못했습니다.";
	}
?>

<script>
	alert("<?php echo $msg?>");
	history.back();
</script>
