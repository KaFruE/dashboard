<?php

header("Content-Type:text/html;charset=utf-8");

$connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

$product = $_POST['product'];
$date = $_POST['date'];
$writer = $_POST['writer'];
$workinghours_1 = $_POST['workinghours_1'];
$workinghours_2 = $_POST['workinghours_2'];
$awhilestop_1 = $_POST['awhilestop_1'];
$awhilestop_2 = $_POST['awhilestop_2'];
$checktime_1 = $_POST['checktime_1'];
$checktime_2 = $_POST['checktime_2'];
$checktime_3 = $_POST['checktime_3'];
$checktime_4 = $_POST['checktime_4'];
$checktime_5 = $_POST['checktime_5'];
$checktime_6 = $_POST['checktime_6'];
$checktime_7 = $_POST['checktime_7'];
$checktime_8 = $_POST['checktime_8'];
$checktime_9 = $_POST['checktime_9'];
$checktime_10 = $_POST['checktime_10'];





	//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
  $sql = "insert into hogi05_other values
	('$product','$date','$writer','$workinghours_1','$workinghours_2','$awhilestop_1 ','$awhilestop_2','$checktime_1','$checktime_2','$checktime_3','$checktime_4',
	 '$checktime_5','$checktime_6','$checktime_7','$checktime_8','$checktime_9','$checktime_10')";

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
