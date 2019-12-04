<?php

header("Content-Type:text/html;charset=utf-8");

$connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

	$product =$_POST['product'];
	$date = $_POST['date'];
	$writer = $_POST['writer'];

  $input_time = $_POST['input_time'];
  $heattem = $_POST['heattem'];
  $heattime = $_POST['heattime'];
  $heattem1 = $_POST['heattem1'];
  $heattime1 = $_POST['heattime1'];
  $icetem = $_POST['icetem'];
  $bagi = $_POST['bagi'];
  $basu = $_POST['basu'];
  $look = $_POST['look'];
  $color = $_POST['color'];
  $indiameter = $_POST['indiameter'];
  $inputlength = $_POST['inputlength'];
	$jsblength = $_POST['jsblength'];
	$jglength = $_POST['jglength'];
	$volt = $_POST['volt'];
  $volt1 = $_POST['volt1'];
  $wrong = $_POST['wrong'];




	//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
  $sql = "insert into expandhogi02_hivg_expand values
	('$product','$date','$writer','$input_time','$heattem','$heattime','$heattem1','$heattime1','$icetem','$bagi','$basu','$look','$color','$indiameter','$inputlength','$jsblength','$jglength','$volt','$volt1','$wrong')";

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
