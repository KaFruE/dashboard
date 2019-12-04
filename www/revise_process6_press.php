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
  $nop_1_1 = $_POST['nop_1_1'];
  $d1_1 = $_POST['d1_1'];
	$d2_1 = $_POST['d2_1'];
  $d3_1 = $_POST['d3_1'];
  $d4_1 = $_POST['d4_1'];
	$nop_2_1 = $_POST['nop_2_1'];
  $screwrpm_1 = $_POST['screwrpm_1'];
  $screwap_1 = $_POST['screwap_1'];
  $hdmoterrpm_1 = $_POST['hdmoterrpm_1'];
	$hdmoterap_1 = $_POST['hdmoterap_1'];
	$suzitem_1 = $_POST['suzitem_1'];
	$suzipre_1 = $_POST['suzipre_1'];
  $jingon_1 = $_POST['jingon_1'];
  $jingonsu_1 = $_POST['jingonsu_1'];
	$icetem_1 = $_POST['icetem_1'];
	$inche_1 = $_POST['inche_1'];
  $length_1 = $_POST['length_1'];


  $input_time_2 = $_POST['input_time_2'];
	$c1_2 = $_POST['c1_2'];
  $c2_2 = $_POST['c2_2'];
  $c3_2 = $_POST['c3_2'];
  $c4_2 = $_POST['c4_2'];
  $nop_1_2 = $_POST['nop_1_2'];
  $d1_2 = $_POST['d1_2'];
	$d2_2 = $_POST['d2_2'];
  $d3_2 = $_POST['d3_2'];
  $d4_2 = $_POST['d4_2'];
	$nop_2_2 = $_POST['nop_2_2'];
  $screwrpm_2 = $_POST['screwrpm_2'];
  $screwap_2 = $_POST['screwap_2'];
  $hdmoterrpm_2 = $_POST['hdmoterrpm_2'];
	$hdmoterap_2 = $_POST['hdmoterap_2'];
	$suzitem_2 = $_POST['suzitem_2'];
	$suzipre_2 = $_POST['suzipre_2'];
  $jingon_2 = $_POST['jingon_2'];
  $jingonsu_2 = $_POST['jingonsu_2'];
	$icetem_2 = $_POST['icetem_2'];
	$inche_2 = $_POST['inche_2'];
  $length_2 = $_POST['length_2'];


  $input_time_3 = $_POST['input_time_3'];
	$writer_3 = $_POST['writer_3'];
	$c1_3 = $_POST['c1_3'];
  $c2_3 = $_POST['c2_3'];
  $c3_3 = $_POST['c3_3'];
  $c4_3 = $_POST['c4_3'];
  $nop_1_3 = $_POST['nop_1_3'];
  $d1_3 = $_POST['d1_3'];
	$d2_3 = $_POST['d2_3'];
  $d3_3 = $_POST['d3_3'];
  $d4_3 = $_POST['d4_3'];
	$nop_2_3 = $_POST['nop_2_3'];
  $screwrpm_3 = $_POST['screwrpm_3'];
  $screwap_3 = $_POST['screwap_3'];
  $hdmoterrpm_3 = $_POST['hdmoterrpm_3'];
	$hdmoterap_3 = $_POST['hdmoterap_3'];
	$suzitem_3 = $_POST['suzitem_3'];
	$suzipre_3 = $_POST['suzipre_3'];
  $jingon_3 = $_POST['jingon_3'];
  $jingonsu_3 = $_POST['jingonsu_3'];
	$icetem_3 = $_POST['icetem_3'];
	$inche_3 = $_POST['inche_3'];
  $length_3 = $_POST['length_3'];

  $input_time_4 = $_POST['input_time_4'];
	$c1_4 = $_POST['c1_4'];
  $c2_4 = $_POST['c2_4'];
  $c3_4 = $_POST['c3_4'];
  $c4_4 = $_POST['c4_4'];
  $nop_1_4 = $_POST['nop_1_4'];
  $d1_4 = $_POST['d1_4'];
	$d2_4 = $_POST['d2_4'];
  $d3_4 = $_POST['d3_4'];
  $d4_4 = $_POST['d4_4'];
	$nop_2_4 = $_POST['nop_2_4'];
  $screwrpm_4 = $_POST['screwrpm_4'];
  $screwap_4 = $_POST['screwap_4'];
  $hdmoterrpm_4 = $_POST['hdmoterrpm_4'];
	$hdmoterap_4 = $_POST['hdmoterap_4'];
	$suzitem_4 = $_POST['suzitem_4'];
	$suzipre_4 = $_POST['suzipre_4'];
  $jingon_4 = $_POST['jingon_4'];
  $jingonsu_4 = $_POST['jingonsu_4'];
	$icetem_4 = $_POST['icetem_4'];
	$inche_4 = $_POST['inche_4'];
  $length_4 = $_POST['length_4'];

	//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
  $sql1 = "update hogi06_press set
	product = '$product',date = '$date',
  writer ='$writer_1',input_time='$input_time_1',c1='$c1_1',c2='$c2_1',c3='$c3_1',c4='$c4_1',nop_1='$nop_1_1',d1='$d1_1',d2='$d2_1',d3='$d3_1',d4='$d4_1',nop_2='$nop_2_1',screwrpm='$screwrpm_1',screwap='$screwap_1',hdmoterrpm='$hdmoterrpm_1',hdmoterap='$hdmoterap_1',suzitem='$suzitem_1',suzipre='$suzipre_1',jingon='$jingon_1',jingonsu='$jingonsu_1',icetem='$icetem_1',
	inche='$inche_1',length='$length_1' where date='$date' AND INput_time='$input_time_1'";

  $sql2 = "update hogi06_press set
  product = '$product',date = '$date',
  writer ='$writer_1',input_time='$input_time_2',c1='$c1_2',c2='$c2_2',c3='$c3_2',c4='$c4_2',nop_1='$nop_1_2',d1='$d1_2',d2='$d2_1',d3='$d3_2',d4='$d4_2',nop_2='$nop_2_2',screwrpm='$screwrpm_2',screwap='$screwap_2',hdmoterrpm='$hdmoterrpm_2',hdmoterap='$hdmoterap_2',suzitem='$suzitem_2',suzipre='$suzipre_2',jingon='$jingon_2',jingonsu='$jingonsu_2',icetem='$icetem_2',
	inche='$inche_2',length='$length_2' where date='$date' AND INput_time='$input_time_2'";

  $sql3 = "update hogi06_press set
  product = '$product',date = '$date',
  writer ='$writer_3',input_time='$input_time_3',c1='$c1_3',c2='$c2_3',c3='$c3_3',c4='$c4_3',nop_1='$nop_1_3',d1='$d1_3',d2='$d2_1',d3='$d3_3',d4='$d4_3',nop_2='$nop_2_3',screwrpm='$screwrpm_3',screwap='$screwap_3',hdmoterrpm='$hdmoterrpm_3',hdmoterap='$hdmoterap_3',suzitem='$suzitem_3',suzipre='$suzipre_3',jingon='$jingon_3',jingonsu='$jingonsu_3',icetem='$icetem_3',
	inche='$inche_3',length='$length_3' where date='$date' AND INput_time='$input_time_3'";

  $sql4 = "update hogi06_press set
  product = '$product',date = '$date',
  writer ='$writer_3',input_time='$input_time_4',c1='$c1_4',c2='$c2_4',c3='$c3_4',c4='$c4_4',nop_1='$nop_1_4',d1='$d1_4',d2='$d2_1',d3='$d3_4',d4='$d4_4',nop_2='$nop_2_4',screwrpm='$screwrpm_4',screwap='$screwap_4',hdmoterrpm='$hdmoterrpm_4',hdmoterap='$hdmoterap_4',suzitem='$suzitem_4',suzipre='$suzipre_4',jingon='$jingon_4',jingonsu='$jingonsu_4',icetem='$icetem_4',
	inche='$inche_4',length='$length_4' where date='$date' AND INput_time='$input_time_4'";

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
