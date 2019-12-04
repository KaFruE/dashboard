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
		$c1_1_1 = $_POST['c1_1_1'];
		$c2_1_1 = $_POST['c2_1_1'];
		$c3_1_1 = $_POST['c3_1_1'];
		$c4_1_1 = $_POST['c4_1_1'];
		$c5_1_1 = $_POST['c5_1_1'];
		$H_1 = $_POST['H_1'];
		$H_1_1 = $_POST['H_1_1'];
		$corex_1 = $_POST['corex_1'];
	  $d1_1 = $_POST['d1_1'];
	  $d2_1 = $_POST['d2_1'];
	  $d3_1 = $_POST['d3_1'];
	  $d4_1 = $_POST['d4_1'];
	  $d5_1 = $_POST['d5_1'];
	  $inheater_1 = $_POST['inheater_1'];
	  $hdmoter_1 = $_POST['hdmoter_1'];
	  $screw_1 = $_POST['screw_1'];
	  $jingon_1 = $_POST['jingon_1'];
	  $middlemoter_1 = $_POST['middlemoter_1'];
	  $middlescrew_1 = $_POST['middlescrew_1'];
	  $jingon_1_1 = $_POST['jingon_1_1'];
	  $icetem_1 = $_POST['icetem_1'];
	  $inche_1 = $_POST['inche_1'];
		$tube_1 = $_POST['tube_1'];
	  $length_1 = $_POST['length_1'];


	  $input_time_2 = $_POST['input_time_2'];
		$c1_2 = $_POST['c1_2'];
	  $c2_2 = $_POST['c2_2'];
	  $c3_2 = $_POST['c3_2'];
	  $c4_2 = $_POST['c4_2'];
	  $c5_2 = $_POST['c5_2'];
		$c6_2 = $_POST['c6_2'];
		$c1_1_2 = $_POST['c1_1_2'];
		$c2_1_2 = $_POST['c2_1_2'];
		$c3_1_2 = $_POST['c3_1_2'];
		$c4_1_2 = $_POST['c4_1_2'];
		$c5_1_2 = $_POST['c5_1_2'];
		$H_2 = $_POST['H_2'];
		$H_1_2 = $_POST['H_1_2'];
		$corex_2 = $_POST['corex_2'];
	  $d1_2 = $_POST['d1_2'];
	  $d2_2 = $_POST['d2_2'];
	  $d3_2 = $_POST['d3_2'];
	  $d4_2 = $_POST['d4_2'];
	  $d5_2 = $_POST['d5_2'];
	  $inheater_2 = $_POST['inheater_2'];
	  $hdmoter_2 = $_POST['hdmoter_2'];
	  $screw_2 = $_POST['screw_2'];
	  $jingon_2 = $_POST['jingon_2'];
	  $middlemoter_2 = $_POST['middlemoter_2'];
	  $middlescrew_2 = $_POST['middlescrew_2'];
	  $jingon_1_2 = $_POST['jingon_1_2'];
	  $icetem_2 = $_POST['icetem_2'];
	  $inche_2 = $_POST['inche_2'];
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
		$c1_1_3 = $_POST['c1_1_3'];
		$c2_1_3 = $_POST['c2_1_3'];
		$c3_1_3 = $_POST['c3_1_3'];
		$c4_1_3 = $_POST['c4_1_3'];
		$c5_1_3 = $_POST['c5_1_3'];
		$H_3 = $_POST['H_3'];
		$H_1_3 = $_POST['H_1_3'];
		$corex_3 = $_POST['corex_3'];
	  $d1_3 = $_POST['d1_3'];
	  $d2_3 = $_POST['d2_3'];
	  $d3_3 = $_POST['d3_3'];
	  $d4_3 = $_POST['d4_3'];
	  $d5_3 = $_POST['d5_3'];
	  $inheater_3 = $_POST['inheater_3'];
	  $hdmoter_3 = $_POST['hdmoter_3'];
	  $screw_3 = $_POST['screw_3'];
	  $jingon_3 = $_POST['jingon_3'];
	  $middlemoter_3 = $_POST['middlemoter_3'];
	  $middlescrew_3 = $_POST['middlescrew_3'];
	  $jingon_1_3 = $_POST['jingon_1_3'];
	  $icetem_3 = $_POST['icetem_3'];
	  $inche_3 = $_POST['inche_3'];
		$tube_3 = $_POST['tube_3'];
	  $length_3 = $_POST['length_3'];

	  $input_time_4 = $_POST['input_time_4'];
		$c1_4 = $_POST['c1_4'];
	  $c2_4 = $_POST['c2_4'];
	  $c3_4 = $_POST['c3_4'];
	  $c4_4 = $_POST['c4_4'];
	  $c5_4 = $_POST['c5_4'];
		$c6_4 = $_POST['c6_4'];
		$c1_1_4 = $_POST['c1_1_4'];
		$c2_1_4 = $_POST['c2_1_4'];
		$c3_1_4 = $_POST['c3_1_4'];
		$c4_1_4 = $_POST['c4_1_4'];
		$c5_1_4 = $_POST['c5_1_4'];
		$H_4 = $_POST['H_4'];
		$H_1_4 = $_POST['H_1_4'];
		$corex_4 = $_POST['corex_4'];
	  $d1_4 = $_POST['d4_4'];
	  $d2_4 = $_POST['d2_4'];
	  $d3_4 = $_POST['d3_4'];
	  $d4_4 = $_POST['d4_4'];
	  $d5_4 = $_POST['d5_4'];
	  $inheater_4 = $_POST['inheater_4'];
	  $hdmoter_4 = $_POST['hdmoter_4'];
	  $screw_4 = $_POST['screw_4'];
	  $jingon_4 = $_POST['jingon_4'];
	  $middlemoter_4 = $_POST['middlemoter_4'];
	  $middlescrew_4 = $_POST['middlescrew_4'];
	  $jingon_1_4 = $_POST['jingon_1_4'];
	  $icetem_4 = $_POST['icetem_4'];
	  $inche_4 = $_POST['inche_4'];
		$tube_4 = $_POST['tube_4'];
	  $length_4 = $_POST['length_4'];

		//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
	  $sql1 = "update hogi01_press_hivg set
		product = '$product',date = '$date',writer='$writer_1',input_time='$input_time_1',c1='$c1_1',c2='$c2_1',c3='$c3_1',c4='$c4_1',c5='$c5_1',c6='$c6_1',c1_1='$c1_1_1',c2_1='$c2_1_1',c3_1='$c3_1_1',c4_1='$c4_1_1',c5_1='$c5_1_1',H='$H_1',H_1='$H_1_1',corex='$corex_1',d1='$d1_1',d2='$d2_1',d3='$d3_1',d4='$d4_1',d5='$d5_1',inheater='$inheater_1',
		hdmoter='$hdmoter_1',screw='$screw_1',jingon='$jingon_1',middlemoter='$middlemoter_1',middlescrew='$middlescrew_1',jingon_1='$jingon_1_1',icetem='$icetem_1',inche='$inche_1',
		tube='$tube_1',length='$length_1' where date='$date' AND INput_time='$input_time_1'";

	  $sql2 = "update hogi01_press_hivg set
	  product = '$product',date = '$date',writer='$writer_1',input_time='$input_time_2',c1='$c1_2',c2='$c2_2',c3='$c3_2',c4='$c4_2',c5='$c5_2',c6='$c6_2',c1_1='$c1_1_2',c2_1='$c2_1_2',c3_1='$c3_1_2',c4_1='$c4_1_2',c5_1='$c5_1_2',H='$H_2',H_1='$H_1_2',corex='$corex_2',d1='$d1_2',d2='$d2_2',d3='$d3_2',d4='$d4_2',d5='$d5_2',inheater='$inheater_2',
		hdmoter='$hdmoter_2',screw='$screw_2',jingon='$jingon_2',middlemoter='$middlemoter_2',middlescrew='$middlescrew_2',jingon_1='$jingon_1_2',icetem='$icetem_2',inche='$inche_2',
		tube='$tube_2',length='$length_2' where date='$date' AND INput_time='$input_time_2'";

	  $sql3 = "update hogi01_press_hivg set
	  product = '$product',date = '$date',writer='$writer_3',input_time='$input_time_3',c1='$c1_3',c2='$c2_3',c3='$c3_3',c4='$c4_3',c5='$c5_3',c6='$c6_3',c1_1='$c1_1_3',c2_1='$c2_1_3',c3_1='$c3_1_3',c4_1='$c4_1_3',c5_1='$c5_1_3',H='$H_3',H_1='$H_1_3',corex='$corex_3',d1='$d1_3',d2='$d2_3',d3='$d3_3',d4='$d4_3',d5='$d5_3',inheater='$inheater_3',
		hdmoter='$hdmoter_3',screw='$screw_3',jingon='$jingon_3',middlemoter='$middlemoter_3',middlescrew='$middlescrew_3',jingon_1='$jingon_1_3',icetem='$icetem_3',inche='$inche_3',
		tube='$tube_3',length='$length_3' where date='$date' AND INput_time='$input_time_3'";

	  $sql4 = "update hogi01_press_hivg set
	  product = '$product',date = '$date',writer='$writer_3',input_time='$input_time_4',c1='$c1_4',c2='$c2_4',c3='$c3_4',c4='$c4_4',c5='$c5_4',c6='$c6_4',c1_1='$c1_1_4',c2_1='$c2_1_4',c3_1='$c3_1_4',c4_1='$c4_1_4',c5_1='$c5_1_4',H='$H_4',H_1='$H_1_4',corex='$corex_4',d1='$d1_4',d2='$d2_4',d3='$d3_4',d4='$d4_4',d5='$d5_4',inheater='$inheater_4',
		hdmoter='$hdmoter_4',screw='$screw_4',jingon='$jingon_4',middlemoter='$middlemoter_4',middlescrew='$middlescrew_4',jingon_1='$jingon_1_4',icetem='$icetem_4',inche='$inche_4',
		tube='$tube_4',length='$length_4' where date='$date' AND INput_time='$input_time_4'";

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
