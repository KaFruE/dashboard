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
  $nop_1 = $_POST['nop_1'];
  $d1 = $_POST['d1'];
  $d2 = $_POST['d2'];
  $d3 = $_POST['d3'];
  $d4 = $_POST['d4'];
  $nop_2 = $_POST['nop_2'];
  $screwrpm = $_POST['screwrpm'];
  $screwap = $_POST['screwap'];
  $hdmoterrpm = $_POST['hdmoterrpm'];
  $hdmoterap = $_POST['hdmoterap'];
  $suzitem = $_POST['suzitem'];
  $suzipre = $_POST['suzipre'];
  $jingon = $_POST['jingon'];
  $jingonsu = $_POST['jingonsu'];
  $icetem = $_POST['icetem'];
  $inche = $_POST['inche'];
  $length = $_POST['length'];


	//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
  $sql = "insert into hogi06_press values
	('$num','$product','$date','$writer','$input_time','$c1','$c2','$c3','$c4','$nop_1','$d1','$d2','$d3','$d4','$nop_2','$screwrpm','$screwap','$hdmoterrpm','$hdmoterap','$suzitem','$suzipre','$jingon','$jingonsu','$icetem','$inche','$length')";

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
