<?php

	header("Content-Type:text/html;charset=utf-8");

		$connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");


		$date = $_POST['date1'];

		$writer1 = $_POST['writer1'];
		$writer2 = $_POST['writer2'];
		$writer3 = $_POST['writer3'];
		$writer4 = $_POST['writer4'];
		$writer5 = $_POST['writer5'];
		$writer6 = $_POST['writer6'];
		$writer7 = $_POST['writer7'];



	  $standard_11 = $_POST['standard_11'];
		$standard_12 = $_POST['standard_12'];
		$standard_13 = $_POST['standard_13'];
		$amount_11 = $_POST['amount_11'];
		$amount_12 = $_POST['amount_12'];
		$amount_13 = $_POST['amount_13'];
	  $perweight_11 = $_POST['perweight_11'];
		$perweight_12 = $_POST['perweight_12'];
		$perweight_13 = $_POST['perweight_13'];
		$stopsign_11 = $_POST['stopsign_11'];
		$stopsign_12 = $_POST['stopsign_12'];
		$stopsign_13 = $_POST['stopsign_13'];
		$badweight_11 = $_POST['badweight_11'];
		$badweight_12 = $_POST['badweight_12'];
		$badweight_13 = $_POST['badweight_13'];
		$badsign_11 = $_POST['badsign_11'];
		$badsign_12 = $_POST['badsign_12'];
		$badsign_13 = $_POST['badsign_13'];

		$standard_21 = $_POST['standard_21'];
		$standard_22 = $_POST['standard_22'];
		$amount_21 = $_POST['amount_21'];
		$amount_22 = $_POST['amount_22'];
	  $perweight_21 = $_POST['perweight_21'];
		$perweight_22 = $_POST['perweight_22'];
		$stopsign_21 = $_POST['stopsign_21'];
		$stopsign_22 = $_POST['stopsign_22'];
		$badweight_21 = $_POST['badweight_21'];
		$badweight_22 = $_POST['badweight_22'];
		$badsign_21 = $_POST['badsign_21'];
		$badsign_22 = $_POST['badsign_22'];

		$standard_31 = $_POST['standard_31'];
		$standard_32 = $_POST['standard_32'];
		$amount_31 = $_POST['amount_31'];
		$amount_32 = $_POST['amount_32'];
	  $perweight_31 = $_POST['perweight_31'];
		$perweight_32 = $_POST['perweight_32'];
		$stopsign_31 = $_POST['stopsign_31'];
		$stopsign_32 = $_POST['stopsign_32'];
		$badweight_31 = $_POST['badweight_31'];
		$badweight_32 = $_POST['badweight_32'];
		$badsign_31 = $_POST['badsign_31'];
		$badsign_32 = $_POST['badsign_32'];

		$standard_41 = $_POST['standard_41'];
		$standard_42 = $_POST['standard_42'];
		$amount_41 = $_POST['amount_41'];
		$amount_42 = $_POST['amount_42'];
	  $perweight_41 = $_POST['perweight_41'];
		$perweight_42 = $_POST['perweight_42'];
		$stopsign_41 = $_POST['stopsign_41'];
		$stopsign_42 = $_POST['stopsign_42'];
		$badweight_41 = $_POST['badweight_41'];
		$badweight_42 = $_POST['badweight_42'];
		$badsign_41 = $_POST['badsign_41'];
		$badsign_42 = $_POST['badsign_42'];

		$standard_51 = $_POST['standard_51'];
		$standard_52 = $_POST['standard_52'];
		$standard_53 = $_POST['standard_53'];
		$amount_51 = $_POST['amount_51'];
		$amount_52 = $_POST['amount_52'];
		$amount_53 = $_POST['amount_53'];
	  $perweight_51 = $_POST['perweight_51'];
		$perweight_52 = $_POST['perweight_52'];
		$perweight_53 = $_POST['perweight_53'];
		$stopsign_51 = $_POST['stopsign_51'];
		$stopsign_52 = $_POST['stopsign_52'];
		$stopsign_53 = $_POST['stopsign_53'];
		$badweight_51 = $_POST['badweight_51'];
		$badweight_52 = $_POST['badweight_52'];
		$badweight_53 = $_POST['badweight_53'];
		$badsign_51 = $_POST['badsign_51'];
		$badsign_52 = $_POST['badsign_52'];
		$badsign_53 = $_POST['badsign_53'];



		$standard_61 = $_POST['standard_61'];
 	 $standard_62 = $_POST['standard_62'];
 	 $amount_61 = $_POST['amount_61'];
 	 $amount_62 = $_POST['amount_62'];
 	 $perweight_61 = $_POST['perweight_61'];
 	 $perweight_62 = $_POST['perweight_62'];
 	 $stopsign_61 = $_POST['stopsign_61'];
 	 $stopsign_62 = $_POST['stopsign_62'];
 	 $badweight_61 = $_POST['badweight_61'];
 	 $badweight_62 = $_POST['badweight_62'];
 	 $badsign_61 = $_POST['badsign_61'];
 	 $badsign_62 = $_POST['badsign_62'];


	 $standard_71 = $_POST['standard_71'];
	 $standard_72 = $_POST['standard_72'];
	 $amount_71 = $_POST['amount_71'];
	 $amount_72 = $_POST['amount_72'];
	 $perweight_71 = $_POST['perweight_71'];
	 $perweight_72 = $_POST['perweight_72'];
	 $stopsign_71 = $_POST['stopsign_71'];
	 $stopsign_72 = $_POST['stopsign_72'];
	 $badweight_71 = $_POST['badweight_71'];
	 $badweight_72 = $_POST['badweight_72'];
	 $badsign_71 = $_POST['badsign_71'];
	 $badsign_72 = $_POST['badsign_72'];


	  $sql1 = "update hogi01_count set
		date = '$date',writer='$writer1',standard_1='$standard_11',standard_2='$standard_12',standard_3='$standard_13',amount_1='$amount_11',amount_2='$amount_12',amount_3='$amount_13',perweight_1='$perweight_11',perweight_2='$perweight_12',perweight_3='$perweight_13',br_1='$stopsign_11',br_2='$stopsign_12',br_3='$stopsign_13',failure_1='$badweight_11',failure_2='$badweight_12',failure_3='$badweight_13',failurereason_1='$badsign_11',failurereason_2='$badsign_12',failurereason_3='$badsign_13'
		where date='$date' AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";

		$sql2 = "update hogi02_count set
		date = '$date',writer='$writer2',standard_1='$standard_21',standard_2='$standard_22',amount_1='$amount_21',amount_2='$amount_22',perweight_1='$perweight_21',perweight_2='$perweight_22',br_1='$stopsign_21',br_2='$stopsign_22',failure_1='$badweight_21',failure_2='$badweight_22',failurereason_1='$badsign_21',failurereason_2='$badsign_22'
		where date='$date' AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";

		$sql3 = "update hogi03_count set
		date = '$date',writer='$writer3',standard_1='$standard_31',standard_2='$standard_32',amount_1='$amount_31',amount_2='$amount_32',perweight_1='$perweight_31',perweight_2='$perweight_32',br_1='$stopsign_31',br_2='$stopsign_32',failure_1='$badweight_31',failure_2='$badweight_32',failurereason_1='$badsign_31',failurereason_2='$badsign_32'
		where date='$date'AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";

		$sql4 = "update hogi04_count set
		date = '$date',writer='$writer4',standard_1='$standard_41',standard_2='$standard_42',amount_1='$amount_41',amount_2='$amount_42',perweight_1='$perweight_41',perweight_2='$perweight_42',br_1='$stopsign_41',br_2='$stopsign_42',failure_1='$badweight_41',failure_2='$badweight_42',failurereason_1='$badsign_41',failurereason_2='$badsign_42'
		where date='$date'";
		$sql5 = "update hogi05_count set
		date = '$date',writer='$writer5',standard_1='$standard_51',standard_2='$standard_52',standard_3='$standard_53',amount_1='$amount_51',amount_2='$amount_52',amount_3='$amount_53',perweight_1='$perweight_51',perweight_2='$perweight_52',perweight_3='$perweight_53',br_1='$stopsign_51',br_2='$stopsign_52',br_3='$stopsign_53',failure_1='$badweight_51',failure_2='$badweight_52',failure_3='$badweight_53',failurereason_1='$badsign_51',failurereason_2='$badsign_52',failurereason_3='$badsign_53'
		where date='$date'AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";

		$sql6 = "update hogi06_count set
		date = '$date',writer='$writer6',standard_1='$standard_61',standard_2='$standard_62',amount_1='$amount_61',amount_2='$amount_62',perweight_1='$perweight_61',perweight_2='$perweight_62',br_1='$stopsign_61',br_2='$stopsign_62',failure_1='$badweight_61',failure_2='$badweight_62',failurereason_1='$badsign_61',failurereason_2='$badsign_62'
		where date='$date'AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";

		$sql7 = "update hogi07_count set
		date = '$date',writer='$writer7',standard_1='$standard_71',standard_2='$standard_72',amount_1='$amount_71',amount_2='$amount_72',perweight_1='$perweight_71',perweight_2='$perweight_72',br_1='$stopsign_71',br_2='$stopsign_72',failure_1='$badweight_71',failure_2='$badweight_72',failurereason_1='$badsign_71',failurereason_2='$badsign_72'
		where date='$date'AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";

		$result1 = $connect->query($sql1);
	  $result2 = $connect->query($sql2);
	  $result3 = $connect->query($sql3);
	  $result4 = $connect->query($sql4);
		$result5 = $connect->query($sql5);
	  $result6 = $connect->query($sql6);
	  $result7 = $connect->query($sql7);



		if($result1 || $result2 || $result3 || $result4|| $result5|| $result6|| $result7) { // query가 정상실행 되었다면
			$msg = "수정 되었습니다.";
		} else {
			$msg = "수정하지 못했습니다.";
		}
?>

<script>
	alert("<?php echo $msg?>");
	history.back();
</script>
