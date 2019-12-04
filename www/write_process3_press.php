<?php

header("Content-Type:text/html;charset=utf-8");

$connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");
  $num=0;
	$product = $_POST['product'];
	$date = $_POST['date'];
	$writer = $_POST['writer'];
	$input_time = $_POST['input_time'];
  $c1 = $_POST['c1'];
  $c2 = $_POST['c2'];
  $c3 = $_POST['c3'];
  $c4 = $_POST['c4'];
  $c5 = $_POST['c5'];
	$c6 = $_POST['c6'];
	$c7 = $_POST['c7'];
	$c8 = $_POST['c8'];
	$H = $_POST['H'];
  $d1 = $_POST['d1'];
  $d3 = $_POST['d3'];
  $d4 = $_POST['d4'];
	$d5 = $_POST['d5'];
  $d6 = $_POST['d6'];
  $nop = $_POST['nop'];
  $jm = $_POST['jm'];
  $jingon = $_POST['jingon'];
  $hdmoter = $_POST['hdmoter'];
  $mainmoter = $_POST['mainmoter'];
  $mainrpm = $_POST['mainrpm'];
  $screw = $_POST['screw'];
  $icetem = $_POST['icetem'];
  $corogate = $_POST['corogate'];
  $length = $_POST['length'];


	//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
  $sql = "insert into hogi03_press values
	('$num','$product','$date','$writer','$input_time','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$H','$d1','$d3','$d4','$d5','$d6','$nop','$jm','$jingon','$hdmoter','$mainmoter','$mainrpm','$screw','$icetem','$corogate','$length')";

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
