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
	  $d6_1 = $_POST['d6_1'];
	  $d7_1 = $_POST['d7_1'];
	  $d8_1 = $_POST['d8_1'];
	  $d9_1 = $_POST['d9_1'];
	  $d10_1 = $_POST['d10_1'];
		$d35_1 = $_POST['d35_1'];
	  $dopit_1 = $_POST['dopit_1'];
	  $cartridge_1 = $_POST['cartridge_1'];
	  $jumul_1 = $_POST['jumul_1'];
		$maintoke_1 = $_POST['maintoke_1'];
		$screwrpm_1 = $_POST['screwrpm_1'];
		$hoodtoke_1 = $_POST['hoodtoke_1'];
		$hoodrpm_1 = $_POST['hoodrpm_1'];
		$vacuum_1 = $_POST['vacuum_1'];
		$air_a_1 = $_POST['air_a_1'];
		$air_i_1 = $_POST['air_i_1'];
		$cold_degree_1 = $_POST['cold_degree_1'];
		$up_1 = $_POST['up_1'];
		$down_1 = $_POST['down_1'];
		$degree_in_1 = $_POST['degree_in_1'];
		$degree_out_1 = $_POST['degree_out_1'];
		$rpm_1 = $_POST['rpm_1'];
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
	  $d6_2 = $_POST['d6_2'];
	  $d7_2 = $_POST['d7_2'];
	  $d8_2 = $_POST['d8_2'];
	  $d9_2 = $_POST['d9_2'];
	  $d10_2 = $_POST['d10_2'];
		$d35_2 = $_POST['d35_2'];
	  $dopit_2 = $_POST['dopit_2'];
	  $cartridge_2 = $_POST['cartridge_2'];
	  $jumul_2 = $_POST['jumul_2'];
		$maintoke_2 = $_POST['maintoke_2'];
		$screwrpm_2 = $_POST['screwrpm_2'];
		$hoodtoke_2 = $_POST['hoodtoke_2'];
		$hoodrpm_2 = $_POST['hoodrpm_2'];
		$vacuum_2 = $_POST['vacuum_2'];
		$air_a_2 = $_POST['air_a_2'];
		$air_i_2 = $_POST['air_i_2'];
		$cold_degree_2 = $_POST['cold_degree_2'];
		$up_2 = $_POST['up_2'];
		$down_2 = $_POST['down_2'];
		$degree_in_2 = $_POST['degree_in_2'];
		$degree_out_2 = $_POST['degree_out_2'];
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
	  $d1_3 = $_POST['d1_3'];
	  $d2_3 = $_POST['d2_3'];
	  $d3_3 = $_POST['d3_3'];
	  $d4_3 = $_POST['d4_3'];
	  $d6_3 = $_POST['d6_3'];
	  $d7_3 = $_POST['d7_3'];
	  $d8_3 = $_POST['d8_3'];
	  $d9_3 = $_POST['d9_3'];
	  $d10_3 = $_POST['d10_3'];
		$d35_3 = $_POST['d35_3'];
	  $dopit_3 = $_POST['dopit_3'];
	  $cartridge_3 = $_POST['cartridge_3'];
	  $jumul_3 = $_POST['jumul_3'];
		$maintoke_3 = $_POST['maintoke_3'];
		$screwrpm_3 = $_POST['screwrpm_3'];
		$hoodtoke_3 = $_POST['hoodtoke_3'];
		$hoodrpm_3 = $_POST['hoodrpm_3'];
		$vacuum_3 = $_POST['vacuum_3'];
		$air_a_3 = $_POST['air_a_3'];
		$air_i_3 = $_POST['air_i_3'];
		$cold_degree_3 = $_POST['cold_degree_3'];
		$up_3 = $_POST['up_3'];
		$down_3 = $_POST['down_3'];
		$degree_in_3 = $_POST['degree_in_3'];
		$degree_out_3 = $_POST['degree_out_3'];
		$rpm_3 = $_POST['rpm_3'];
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
	  $d6_4 = $_POST['d6_4'];
	  $d7_4 = $_POST['d7_4'];
	  $d8_4 = $_POST['d8_4'];
	  $d9_4 = $_POST['d9_4'];
	  $d10_4 = $_POST['d10_4'];
		$d35_4 = $_POST['d35_4'];
	  $dopit_4 = $_POST['dopit_4'];
	  $cartridge_4 = $_POST['cartridge_4'];
	  $jumul_4 = $_POST['jumul_4'];
		$maintoke_4 = $_POST['maintoke_4'];
		$screwrpm_4 = $_POST['screwrpm_4'];
		$hoodtoke_4 = $_POST['hoodtoke_4'];
		$hoodrpm_4 = $_POST['hoodrpm_4'];
		$vacuum_4 = $_POST['vacuum_4'];
		$air_a_4 = $_POST['air_a_4'];
		$air_i_4 = $_POST['air_i_4'];
		$cold_degree_4 = $_POST['cold_degree_4'];
		$up_4 = $_POST['up_4'];
		$down_4 = $_POST['down_4'];
		$degree_in_4 = $_POST['degree_in_4'];
		$degree_out_4 = $_POST['degree_out_4'];
		$rpm_4 = $_POST['rpm_4'];
		$tube_4 = $_POST['tube_4'];
		$length_4 = $_POST['length_4'];


		//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
	  $sql1 = "update hogi05_press set
		product = '$product',date = '$date',writer='$writer_1',input_time='$input_time_1',c1='$c1_1',c2='$c2_1',c3='$c3_1',c4='$c4_1',c5='$c5_1',d1='$d1_1',d2='$d2_1',
		d3='$d3_1',d4='$d4_1',d6='$d6_1',d7='$d7_1',d8='$d8_1',d9='$d9_1',d10='$d10_1',d35='$d35_1',dopit='$dopit_1',
		cartridge='$cartridge_1',jumul='$jumul_1',maintoke='$maintoke_1',screwrpm='$screwrpm_1',hoodtoke='$hoodtoke_1',hoodrpm='$hoodrpm_1',vacuum='$vacuum_1',air_a='$air_a_1',air_i='$air_i_1',cold_degree='$cold_degree_1',up='$up_1',down='$down_1',degree_in='$degree_in_1',degree_out='$degree_out_1',rpm='$rpm_1',
		tube='$tube_1',length='$length_1' where date='$date' AND INput_time='$input_time_1'";

	  $sql2 = "update hogi05_press set
	  product = '$product',date = '$date',writer='$writer_1',input_time='$input_time_2',c1='$c1_2',c2='$c2_2',c3='$c3_2',c4='$c4_2',c5='$c5_2',d1='$d1_2',d2='$d2_2',
		d3='$d3_2',d4='$d4_2',d6='$d6_2',d7='$d7_2',d8='$d8_2',d9='$d9_2',d10='$d10_2',d35='$d35_2',dopit='$dopit_2',
		cartridge='$cartridge_2',jumul='$jumul_2',maintoke='$maintoke_2',screwrpm='$screwrpm_2',hoodtoke='$hoodtoke_2',hoodrpm='$hoodrpm_2',vacuum='$vacuum_2',air_a='$air_a_2',air_i='$air_i_2',cold_degree='$cold_degree_2',up='$up_2',down='$down_2',degree_in='$degree_in_2',degree_out='$degree_out_2',rpm='$rpm_2',
		tube='$tube_2',length='$length_2' where date='$date' AND INput_time='$input_time_2'";

	  $sql3 = "update hogi05_press set
	  product = '$product',date = '$date',writer='$writer_3',input_time='$input_time_3',c1='$c1_3',c2='$c2_3',c3='$c3_3',c4='$c4_3',c5='$c5_3',d1='$d1_3',d2='$d2_3',
		d3='$d3_3',d4='$d4_3',d6='$d6_3',d7='$d7_3',d8='$d8_3',d9='$d9_3',d10='$d10_3',d35='$d35_3',dopit='$dopit_3',
		cartridge='$cartridge_3',jumul='$jumul_3',maintoke='$maintoke_3',screwrpm='$screwrpm_3',hoodtoke='$hoodtoke_3',hoodrpm='$hoodrpm_3',vacuum='$vacuum_3',air_a='$air_a_3',air_i='$air_i_3',cold_degree='$cold_degree_3',up='$up_3',down='$down_3',degree_in='$degree_in_3',degree_out='$degree_out_3',rpm='$rpm_3',
		tube='$tube_3',length='$length_3' where date='$date' AND INput_time='$input_time_3'";

	  $sql4 = "update hogi05_press set
	  product = '$product',date = '$date',writer='$writer_3',input_time='$input_time_4',c1='$c1_4',c2='$c2_4',c3='$c3_4',c4='$c4_4',c5='$c5_4',d1='$d1_4',d2='$d2_4',
		d3='$d3_4',d4='$d4_4',d6='$d6_4',d7='$d7_4',d8='$d8_4',d9='$d9_4',d10='$d10_4',d35='$d35_4',dopit='$dopit_4',
		cartridge='$cartridge_4',jumul='$jumul_4',maintoke='$maintoke_4',screwrpm='$screwrpm_4',hoodtoke='$hoodtoke_4',hoodrpm='$hoodrpm_4',vacuum='$vacuum_4',air_a='$air_a_4',air_i='$air_i_4',cold_degree='$cold_degree_4',up='$up_4',down='$down_4',degree_in='$degree_in_4',degree_out='$degree_out_4',rpm='$rpm_4',
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
