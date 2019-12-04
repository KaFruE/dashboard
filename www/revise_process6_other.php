<?php

	header("Content-Type:text/html;charset=utf-8");

		$connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

		$product = $_POST['product'];
		$date = $_POST['date1'];
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


	  $sql = "update hogi06_other set
		product = '$product',date = '$date',writer='$writer',workinghours_1='$workinghours_1',workinghours_2='$workinghours_2',awhilestop_1='$awhilestop_1',awhilestop_2='$awhilestop_2',
		checktime_1='$checktime_1',checktime_2='$checktime_2',checktime_3='$checktime_3',checktime_4='$checktime_4',checktime_5='$checktime_5',
		checktime_6='$checktime_6',checktime_7='$checktime_7',checktime_8='$checktime_8',checktime_9='$checktime_9',checktime_10='$checktime_10' where date='$date'";

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
