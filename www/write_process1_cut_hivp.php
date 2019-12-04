<?php

header("Content-Type:text/html;charset=utf-8");

$connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

	$product = $_POST['product'];
	$date = $_POST['date'];
	$writer = $_POST['writer'];
	$input_time = $_POST['input_time'];
	$appearance = $_POST['appearance'];
  $color = $_POST['color'];
  $diameter_min = $_POST['diameter_min'];
	$diameter_max = $_POST['diameter_max'];
	$diameter_avg = $_POST['diameter_avg'];
  $thick_min = $_POST['thick_min'];
  $thick_max = $_POST['thick_max'];
	$length = $_POST['length'];
	$ps = $_POST['ps'];
	$weight = $_POST['weight'];


	//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
  $sql = "insert into hogi01_cut_hivp values
	('$product','$date','$writer','$input_time','$appearance','$color','$diameter_min','$diameter_max','$diameter_avg','$thick_min','$thick_max','$length','$ps','$weight')";

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
