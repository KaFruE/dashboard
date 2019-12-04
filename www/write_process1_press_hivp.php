<?php

header("Content-Type:text/html;charset=utf-8");

$connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");
  $num=0;
	$product = $_POST['product'];
	$date = $_POST['date'];
	$writer = $_POST['writer'];
	$input_time = $_POST['input_time'];
	$H = $_POST['H'];
  $c1 = $_POST['c1'];
  $c2 = $_POST['c2'];
  $c3 = $_POST['c3'];
  $c4 = $_POST['c4'];
  $c5 = $_POST['c5'];
	$c1_1 = $_POST['c1_1'];
	$c2_1 = $_POST['c2_1'];
	$c3_1 = $_POST['c3_1'];
	$c4_1 = $_POST['c4_1'];
	$c5_1 = $_POST['c5_1'];
  $H_1 = $_POST['H_1'];
	$H_2 = $_POST['H_2'];
	$corex = $_POST['corex'];
	$d1 = $_POST['d1'];
  $d2 = $_POST['d2'];
  $d3 = $_POST['d3'];
  $d4 = $_POST['d4'];
  $d5 = $_POST['d5'];
	$d6 = $_POST['d6'];
  $inheater = $_POST['inheater'];
  $hdmoter = $_POST['hdmoter'];
  $screw = $_POST['screw'];
  $jingon = $_POST['jingon'];
  $inmoter = $_POST['inmoter'];
  $inscrew = $_POST['inscrew'];
  $jingon_1 = $_POST['jingon_1'];
  $icetem = $_POST['icetem'];
  $inche = $_POST['inche'];
  $length = $_POST['length'];


	//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
  $sql = "insert into hogi01_press_hivp values
	('$num','$product','$date','$writer','$input_time','$H','$c1','$c2','$c3','$c4','$c5','$c1_1','$c2_1','$c3_1','$c4_1','$c5_1','$H_1','$H_2','$corex','$d1','$d2','$d3','$d4','$d5','$d6','$inheater','$hdmoter','$screw',
  '$jingon','$inmoter','$inscrew','$jingon_1','$icetem','$inche','$length')";

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
