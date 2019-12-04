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
	  $d1_1 = $_POST['d1_1'];
	  $d2_1 = $_POST['d2_1'];
	  $d3_1 = $_POST['d3_1'];
	  $d4_1 = $_POST['d4_1'];
		$d5_1 = $_POST['d5_1'];
	  $d6_1 = $_POST['d6_1'];
	  $d7_1 = $_POST['d7_1'];
	  $d8_1 = $_POST['d8_1'];
	  $d9_1 = $_POST['d9_1'];
	  $d10_1 = $_POST['d10_1'];
		$d11_1 = $_POST['d11_1'];
		$d12_1 = $_POST['d12_1'];
		$d13_1 = $_POST['d13_1'];
	  $dofit_1 = $_POST['dofit_1'];
	  $cartridge_1 = $_POST['cartridge_1'];
	  $jm_1 = $_POST['jm_1'];
		$jingon_1 = $_POST['jingon_1'];
		$maintolk_1 = $_POST['maintolk_1'];
		$screw_1 = $_POST['screw_1'];
		$hdmoter_1 = $_POST['hdmoter_1'];
		$hdrpm_1 = $_POST['hdrpm_1'];
		$ice_1 = $_POST['ice_1'];
		$icetem_1 = $_POST['icetem_1'];
		$corogate_1 = $_POST['corogate_1'];
		$tube_1 = $_POST['tube_1'];
		$length_1 = $_POST['length_1'];


	  $input_time_2 = $_POST['input_time_2'];
		$c1_2 = $_POST['c1_2'];
	  $c2_2 = $_POST['c2_2'];
	  $c3_2 = $_POST['c3_2'];
	  $c4_2 = $_POST['c4_2'];
	  $c5_2 = $_POST['c5_2'];
	  $d1_2 = $_POST['d1_2'];
	  $d2_2 = $_POST['d2_2'];
	  $d3_2 = $_POST['d3_2'];
	  $d4_2 = $_POST['d4_2'];
		$d5_2 = $_POST['d5_2'];
	  $d6_2 = $_POST['d6_2'];
	  $d7_2 = $_POST['d7_2'];
	  $d8_2 = $_POST['d8_2'];
	  $d9_2 = $_POST['d9_2'];
	  $d10_2 = $_POST['d10_2'];
		$d11_2 = $_POST['d11_2'];
		$d12_2 = $_POST['d12_2'];
		$d13_2 = $_POST['d13_2'];
	  $dofit_2 = $_POST['dofit_2'];
	  $cartridge_2 = $_POST['cartridge_2'];
	  $jm_2 = $_POST['jm_2'];
		$jingon_2 = $_POST['jingon_2'];
		$maintolk_2 = $_POST['maintolk_2'];
		$screw_2 = $_POST['screw_2'];
		$hdmoter_2 = $_POST['hdmoter_2'];
		$hdrpm_2 = $_POST['hdrpm_2'];
		$ice_2 = $_POST['ice_2'];
		$icetem_2 = $_POST['icetem_2'];
		$corogate_2 = $_POST['corogate_2'];
		$tube_2 = $_POST['tube_2'];
		$length_2 = $_POST['length_2'];


	  $input_time_3 = $_POST['input_time_3'];
	  $writer_3 = $_POST['writer_3'];
		$c1_3 = $_POST['c1_3'];
	  $c2_3 = $_POST['c2_3'];
	  $c3_3 = $_POST['c3_3'];
	  $c4_3 = $_POST['c4_3'];
	  $c5_3 = $_POST['c5_3'];
	  $d1_3 = $_POST['d1_3'];
	  $d2_3 = $_POST['d2_3'];
	  $d3_3 = $_POST['d3_3'];
	  $d4_3 = $_POST['d4_3'];
		$d5_3 = $_POST['d5_3'];
	  $d6_3 = $_POST['d6_3'];
	  $d7_3 = $_POST['d7_3'];
	  $d8_3 = $_POST['d8_3'];
	  $d9_3 = $_POST['d9_3'];
	  $d10_3 = $_POST['d10_3'];
		$d11_3 = $_POST['d11_3'];
		$d12_3 = $_POST['d12_3'];
		$d13_3 = $_POST['d13_3'];
	  $dofit_3 = $_POST['dofit_3'];
	  $cartridge_3 = $_POST['cartridge_3'];
	  $jm_3 = $_POST['jm_3'];
		$jingon_3 = $_POST['jingon_3'];
		$maintolk_3 = $_POST['maintolk_3'];
		$screw_3 = $_POST['screw_3'];
		$hdmoter_3 = $_POST['hdmoter_3'];
		$hdrpm_3 = $_POST['hdrpm_3'];
		$ice_3 = $_POST['ice_3'];
		$icetem_3 = $_POST['icetem_3'];
		$corogate_3 = $_POST['corogate_3'];
		$tube_3 = $_POST['tube_3'];
		$length_3 = $_POST['length_3'];


	  $input_time_4 = $_POST['input_time_4'];
		$c1_4 = $_POST['c1_4'];
	  $c2_4 = $_POST['c2_4'];
	  $c3_4 = $_POST['c3_4'];
	  $c4_4 = $_POST['c4_4'];
	  $c5_4 = $_POST['c5_4'];
	  $d1_4 = $_POST['d1_4'];
	  $d2_4 = $_POST['d2_4'];
	  $d3_4 = $_POST['d3_4'];
	  $d4_4 = $_POST['d4_4'];
		$d5_4 = $_POST['d5_4'];
	  $d6_4 = $_POST['d6_4'];
	  $d7_4 = $_POST['d7_4'];
	  $d8_4 = $_POST['d8_4'];
	  $d9_4 = $_POST['d9_4'];
	  $d10_4 = $_POST['d10_4'];
		$d11_4 = $_POST['d11_4'];
		$d12_4 = $_POST['d12_4'];
		$d13_4 = $_POST['d13_4'];
	  $dofit_4 = $_POST['dofit_4'];
	  $cartridge_4 = $_POST['cartridge_4'];
	  $jm_4 = $_POST['jm_4'];
		$jingon_4 = $_POST['jingon_4'];
		$maintolk_4 = $_POST['maintolk_4'];
		$screw_4 = $_POST['screw_4'];
		$hdmoter_4 = $_POST['hdmoter_4'];
		$hdrpm_4 = $_POST['hdrpm_4'];
		$ice_4 = $_POST['ice_4'];
		$icetem_4 = $_POST['icetem_4'];
		$corogate_4 = $_POST['corogate_4'];
		$tube_4 = $_POST['tube_4'];
		$length_4 = $_POST['length_4'];


		//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
	  $sql1 = "update hogi04_press set
		product = '$product',date = '$date',writer='$writer_1',input_time='$input_time_1',c1='$c1_1',c2='$c2_1',c3='$c3_1',c4='$c4_1',c5='$c5_1',d1='$d1_1',d2='$d2_1',d3='$d3_1',d4='$d4_1',d5='$d5_1',d6='$d6_1',d7='$d7_1',d8='$d8_1',d9='$d9_1',d10='$d10_1',d11='$d11_1',d12='$d12_1',d13='$d13_1',dofit='$dofit_1',
		cartridge='$cartridge_1',jm='$jm_1',jingon='$jingon_1',maintolk='$maintolk_1',screw='$screw_1',hdmoter='$hdmoter_1',hdrpm='$hdrpm_1',ice='$ice_1',icetem='$icetem_1',corogate='$corogate_1',
		tube='$tube_1',length='$length_1' where date='$date' AND INput_time='$input_time_1'";

	  $sql2 = "update hogi04_press set
		product = '$product',date = '$date',writer='$writer_1',input_time='$input_time_2',c1='$c1_2',c2='$c2_2',c3='$c3_2',c4='$c4_2',c5='$c5_2',d1='$d1_2',d2='$d2_2',d3='$d3_2',d4='$d4_2',d5='$d5_2',d6='$d6_2',d7='$d7_2',d8='$d8_2',d9='$d9_2',d10='$d10_2',d11='$d11_2',d12='$d12_2',d13='$d13_2',dofit='$dofit_2',
		cartridge='$cartridge_2',jm='$jm_2',jingon='$jingon_2',maintolk='$maintolk_2',screw='$screw_2',hdmoter='$hdmoter_2',hdrpm='$hdrpm_2',ice='$ice_2',icetem='$icetem_2',corogate='$corogate_2',
		tube='$tube_2',length='$length_2' where date='$date' AND INput_time='$input_time_2'";

	  $sql3 = "update hogi04_press set
		product = '$product',date = '$date',writer='$writer_3',input_time='$input_time_3',c1='$c1_3',c2='$c2_3',c3='$c3_3',c4='$c4_3',c5='$c5_3',d1='$d1_3',d2='$d2_3',d3='$d3_3',d4='$d4_3',d5='$d5_3',d6='$d6_3',d7='$d7_3',d8='$d8_3',d9='$d9_3',d10='$d10_3',d11='$d11_3',d12='$d12_3',d13='$d13_3',dofit='$dofit_3',
		cartridge='$cartridge_3',jm='$jm_3',jingon='$jingon_3',maintolk='$maintolk_3',screw='$screw_3',hdmoter='$hdmoter_3',hdrpm='$hdrpm_3',ice='$ice_3',icetem='$icetem_3',corogate='$corogate_3',
		tube='$tube_3',length='$length_3' where date='$date' AND INput_time='$input_time_3'";

	  $sql4 = "update hogi04_press set
		product = '$product',date = '$date',writer='$writer_3',input_time='$input_time_4',c1='$c1_4',c2='$c2_4',c3='$c3_4',c4='$c4_4',c5='$c5_4',d1='$d1_4',d2='$d2_4',d3='$d3_4',d4='$d4_4',d5='$d5_4',d6='$d6_4',d7='$d7_4',d8='$d8_4',d9='$d9_4',d10='$d10_4',d11='$d11_4',d12='$d12_4',d13='$d13_4',dofit='$dofit_4',
		cartridge='$cartridge_4',jm='$jm_4',jingon='$jingon_4',maintolk='$maintolk_4',screw='$screw_4',hdmoter='$hdmoter_4',hdrpm='$hdrpm_4',ice='$ice_4',icetem='$icetem_4',corogate='$corogate_4',
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
