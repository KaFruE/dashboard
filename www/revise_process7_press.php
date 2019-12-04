<?php

header("Content-Type:text/html;charset=utf-8");

$connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

	$product = $_POST['product'];
	$date = $_POST['date1'];

	$writer_1 = $_POST['writer_1'];
	$input_time_1 = $_POST['input_time_1'];
  $c1_1 = $_POST['c1_1'];
  $c2_1 = $_POST['c2_1'];
  $c3_1 = $_POST['c3_1'];
	$c4_1 = $_POST['c4_1'];
	$c5_1 = $_POST['c5_1'];
  $c6_1 = $_POST['c6_1'];

  $d1_1 = $_POST['d1_1'];
	$d2_1 = $_POST['d2_1'];
  $d3_1 = $_POST['d3_1'];
	$d4_1 = $_POST['d4_1'];
  $d5_1 = $_POST['d5_1'];
	$nop_1 = $_POST['nop_1'];
  $d35_1 = $_POST['d35_1'];
  $head_1 = $_POST['head_1'];
  $cart1_1 = $_POST['cart1_1'];
	$cart2_1 = $_POST['cart2_1'];
	$jm_1 = $_POST['jm_1'];
	$maintalk_1 = $_POST['maintalk_1'];
  $screw_1 = $_POST['screw_1'];
  $hdtalk_1 = $_POST['hdtalk_1'];
	$hoper_1 = $_POST['hoper_1'];
	$suzitem_1 = $_POST['suzitem_1'];
	$apjingon_1 = $_POST['apjingon_1'];
	$air_1 = $_POST['air_1'];
	$icepress_1 = $_POST['icepress_1'];
	$icetem_1 = $_POST['icetem_1'];
	$up_1 = $_POST['up_1'];
	$down_1 = $_POST['down_1'];
	$in_1 = $_POST['in_1'];
	$out_1 = $_POST['out_1'];
	$rpm_1 = $_POST['rpm_1'];
	$tube_1 = $_POST['tube_1'];
  $length_1 = $_POST['length_1'];


  $input_time_2 = $_POST['input_time_2'];
	$c1_2 = $_POST['c1_2'];
  $c2_2 = $_POST['c2_2'];
  $c3_2 = $_POST['c3_2'];
	$c4_2 = $_POST['c4_2'];
	$c5_2 = $_POST['c5_2'];
  $c6_2 = $_POST['c6_2'];

  $d1_2 = $_POST['d1_2'];
	$d2_2 = $_POST['d2_2'];
  $d3_2 = $_POST['d3_2'];
	$d4_2 = $_POST['d4_2'];
  $d5_2 = $_POST['d5_2'];
	$nop_2 = $_POST['nop_2'];
  $d35_2 = $_POST['d35_2'];
  $head_2 = $_POST['head_2'];
  $cart1_2 = $_POST['cart1_2'];
	$cart2_2 = $_POST['cart2_2'];
	$jm_2 = $_POST['jm_2'];
	$maintalk_2 = $_POST['maintalk_2'];
  $screw_2 = $_POST['screw_2'];
  $hdtalk_2 = $_POST['hdtalk_2'];
	$hoper_2 = $_POST['hoper_2'];
	$suzitem_2 = $_POST['suzitem_2'];
	$apjingon_2 = $_POST['apjingon_2'];
	$air_2 = $_POST['air_2'];
	$icepress_2 = $_POST['icepress_2'];
	$icetem_2 = $_POST['icetem_2'];
	$up_2 = $_POST['up_2'];
	$down_2 = $_POST['down_2'];
	$in_2 = $_POST['in_2'];
	$out_2 = $_POST['out_2'];
	$rpm_2 = $_POST['rpm_2'];
	$tube_2 = $_POST['tube_2'];
  $length_2 = $_POST['length_2'];


  $input_time_3 = $_POST['input_time_3'];
	$writer_3 = $_POST['writer_3'];
	$c1_3 = $_POST['c1_3'];
	$c2_3 = $_POST['c2_3'];
	$c3_3 = $_POST['c3_3'];
	$c4_3 = $_POST['c4_3'];
	$c5_3 = $_POST['c5_3'];
	$c6_3 = $_POST['c6_3'];

	$d1_3 = $_POST['d1_3'];
	$d2_3 = $_POST['d2_3'];
	$d3_3 = $_POST['d3_3'];
	$d4_3 = $_POST['d4_3'];
	$d5_3 = $_POST['d5_3'];
	$nop_3 = $_POST['nop_3'];
	$d35_3 = $_POST['d35_3'];
	$head_3 = $_POST['head_3'];
	$cart1_3 = $_POST['cart1_3'];
	$cart2_3 = $_POST['cart2_3'];
	$jm_3 = $_POST['jm_3'];
	$maintalk_3 = $_POST['maintalk_3'];
	$screw_3 = $_POST['screw_3'];
	$hdtalk_3 = $_POST['hdtalk_3'];
	$hoper_3 = $_POST['hoper_3'];
	$suzitem_3 = $_POST['suzitem_3'];
	$apjingon_3 = $_POST['apjingon_3'];
	$air_3 = $_POST['air_3'];
	$icepress_3 = $_POST['icepress_3'];
	$icetem_3 = $_POST['icetem_3'];
	$up_3 = $_POST['up_3'];
	$down_3 = $_POST['down_3'];
	$in_3 = $_POST['in_3'];
	$out_3 = $_POST['out_3'];
	$rpm_3 = $_POST['rpm_3'];
	$tube_3 = $_POST['tube_3'];
	$length_3 = $_POST['length_3'];

  $input_time_4 = $_POST['input_time_4'];
	$c1_4 = $_POST['c1_4'];
	$c2_4 = $_POST['c2_4'];
	$c3_4 = $_POST['c3_4'];
	$c4_4 = $_POST['c4_4'];
	$c5_4 = $_POST['c5_4'];
	$c6_4 = $_POST['c6_4'];

	$d1_4 = $_POST['d1_4'];
	$d2_4 = $_POST['d2_4'];
	$d3_4 = $_POST['d3_4'];
	$d4_4 = $_POST['d4_4'];
	$d5_4 = $_POST['d5_4'];
	$nop_4 = $_POST['nop_4'];
	$d35_4 = $_POST['d35_4'];
	$head_4 = $_POST['head_4'];
	$cart1_4 = $_POST['cart1_4'];
	$cart2_4 = $_POST['cart2_4'];
	$jm_4 = $_POST['jm_4'];
	$maintalk_4 = $_POST['maintalk_4'];
	$screw_4 = $_POST['screw_4'];
	$hdtalk_4 = $_POST['hdtalk_4'];
	$hoper_4 = $_POST['hoper_4'];
	$suzitem_4 = $_POST['suzitem_4'];
	$apjingon_4 = $_POST['apjingon_4'];
	$air_4 = $_POST['air_4'];
	$icepress_4 = $_POST['icepress_4'];
	$icetem_4 = $_POST['icetem_4'];
	$up_4 = $_POST['up_4'];
	$down_4 = $_POST['down_4'];
	$in_4 = $_POST['in_4'];
	$out_4 = $_POST['out_4'];
	$rpm_4 = $_POST['rpm_4'];
	$tube_4 = $_POST['tube_4'];
	$length_4 = $_POST['length_4'];

	//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
  $sql1 = "update hogi07_press set
	product = '$product',date = '$date',
  writer ='$writer_1',input_time='$input_time_1',c1='$c1_1',c2='$c2_1',c3='$c3_1',c4='$c4_1',c5='$c5_1',c6='$c6_1',d1='$d1_1',d2='$d2_1',d3='$d3_1',d4='$d4_1',d5='$d5_1',nop='$nop_1',d35='$d35_1',head='$head_1',cart1='$cart1_1',cart2='$cart2_1',jm='$jm_1',maintalk='$maintalk_1',screw='$screw_1',hdtalk='$hdtalk_1',hoper='$hoper_1',suzitem='$suzitem_1',apjingon='$apjingon_1',air='$air_1',icepress='$icepress_1',
	icetem='$icetem_1',up='$up_1',down='$down_1',degree_in='$in_1',degree_out='$out_1',rpm='$rpm_1',tube='$tube_1',length='$length_1' where date='$date' AND INput_time='$input_time_1'";

	$sql2 = "update hogi07_press set
	product = '$product',date = '$date',
  writer ='$writer_1',input_time='$input_time_2',c1='$c1_2',c2='$c2_2',c3='$c3_2',c4='$c4_2',c5='$c5_2',c6='$c6_2',d1='$d1_2',d2='$d2_2',d3='$d3_2',d4='$d4_2',d5='$d5_2',nop='$nop_2',d35='$d35_2',head='$head_2',cart1='$cart1_2',cart2='$cart2_2',jm='$jm_2',maintalk='$maintalk_2',screw='$screw_2',hdtalk='$hdtalk_2',hoper='$hoper_2',suzitem='$suzitem_2',apjingon='$apjingon_2',air='$air_2',icepress='$icepress_2',
	icetem='$icetem_2',up='$up_2',down='$down_2',degree_in='$in_2',degree_out='$out_2',rpm='$rpm_2',tube='$tube_2',length='$length_2' where date='$date' AND INput_time='$input_time_2'";

	$sql3 = "update hogi07_press set
	product = '$product',date = '$date',
  writer ='$writer_3',input_time='$input_time_3',c1='$c1_3',c2='$c2_3',c3='$c3_3',c4='$c4_3',c5='$c5_3',c6='$c6_3',d1='$d1_3',d2='$d2_3',d3='$d3_3',d4='$d4_3',d5='$d5_3',nop='$nop_3',d35='$d35_3',head='$head_3',cart1='$cart1_3',cart2='$cart2_3',jm='$jm_3',maintalk='$maintalk_3',screw='$screw_3',hdtalk='$hdtalk_3',hoper='$hoper_3',suzitem='$suzitem_3',apjingon='$apjingon_3',air='$air_3',icepress='$icepress_3',
	icetem='$icetem_3',up='$up_3',down='$down_3',degree_in='$in_3',degree_out='$out_3',rpm='$rpm_3',tube='$tube_3',length='$length_3' where date='$date' AND INput_time='$input_time_3'";

	$sql4 = "update hogi07_press set
	product = '$product',date = '$date',
  writer ='$writer_3',input_time='$input_time_4',c1='$c1_4',c2='$c2_4',c3='$c3_4',c4='$c4_4',c5='$c5_4',c6='$c6_4',d1='$d1_4',d2='$d2_4',d3='$d3_4',d4='$d4_4',d5='$d5_4',nop='$nop_4',d35='$d35_4',head='$head_4',cart1='$cart1_4',cart2='$cart2_4',jm='$jm_4',maintalk='$maintalk_4',screw='$screw_4',hdtalk='$hdtalk_4',hoper='$hoper_4',suzitem='$suzitem_4',apjingon='$apjingon_4',air='$air_4',icepress='$icepress_4',
	icetem='$icetem_4',up='$up_4',down='$down_4',degree_in='$in_4',degree_out='$out_4',rpm='$rpm_4',tube='$tube_4',length='$length_4' where date='$date' AND INput_time='$input_time_4'";

	$result1 = $connect->query($sql1);
  $result2 = $connect->query($sql2);
  $result3 = $connect->query($sql3);
  $result4 = $connect->query($sql4);


	if($result1 || $result2 || $result3 || $result4) { // query가 정상실행 되었다면
		$msg = "수정 되었습니다.";
	} else {
		$msg = "수정하지 못했습니다.";
	}
?>

<script>
	alert("<?php echo $msg?>");
	history.back();
</script>
