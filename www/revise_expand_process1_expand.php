<?php

	header("Content-Type:text/html;charset=utf-8");

		$connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

		$product = $_POST['product'];
		$date = $_POST['date1'];

		$writer_1 = $_POST['writer_1'];
		$input_time_1 = $_POST['input_time_1'];
	  $length_1 = $_POST['length_1'];
	  $heattem_1 = $_POST['heattem_1'];
	  $heattime_1 = $_POST['heattime_1'];
	  $golength_1 = $_POST['golength_1'];
	  $icetime_1 = $_POST['icetime_1'];
	  $nop_1 = $_POST['nop_1'];
	  $icetem_1 = $_POST['icetem_1'];
	  $look_1 = $_POST['look_1'];
	  $color_1 = $_POST['color_1'];
	  $indiameter_1 = $_POST['indiameter_1'];
	  $inputlength_1 = $_POST['inputlength_1'];
	  $jglength_1 = $_POST['jglength_1'];
	  $wrong_1 = $_POST['wrong_1'];


	  $input_time_2 = $_POST['input_time_2'];
		$length_2 = $_POST['length_2'];
	  $heattem_2 = $_POST['heattem_2'];
	  $heattime_2 = $_POST['heattime_2'];
	  $golength_2 = $_POST['golength_2'];
	  $icetime_2 = $_POST['icetime_2'];
	  $nop_2 = $_POST['nop_2'];
	  $icetem_2 = $_POST['icetem_2'];
	  $look_2 = $_POST['look_2'];
	  $color_2 = $_POST['color_2'];
	  $indiameter_2 = $_POST['indiameter_2'];
	  $inputlength_2 = $_POST['inputlength_2'];
	  $jglength_2 = $_POST['jglength_2'];
	  $wrong_2 = $_POST['wrong_2'];

	  $input_time_3 = $_POST['input_time_3'];
	  $writer_3 = $_POST['writer_3'];
		$length_3 = $_POST['length_3'];
	  $heattem_3 = $_POST['heattem_3'];
	  $heattime_3 = $_POST['heattime_3'];
	  $golength_3 = $_POST['golength_3'];
	  $icetime_3 = $_POST['icetime_3'];
	  $nop_3 = $_POST['nop_3'];
	  $icetem_3 = $_POST['icetem_3'];
	  $look_3 = $_POST['look_3'];
	  $color_3 = $_POST['color_3'];
	  $indiameter_3 = $_POST['indiameter_3'];
	  $inputlength_3 = $_POST['inputlength_3'];
	  $jglength_3 = $_POST['jglength_3'];
	  $wrong_3 = $_POST['wrong_3'];

	  $input_time_4 = $_POST['input_time_4'];
		$length_4 = $_POST['length_4'];
	  $heattem_4 = $_POST['heattem_4'];
	  $heattime_4 = $_POST['heattime_4'];
	  $golength_4 = $_POST['golength_4'];
	  $icetime_4 = $_POST['icetime_4'];
	  $nop_4 = $_POST['nop_4'];
	  $icetem_4 = $_POST['icetem_4'];
	  $look_4 = $_POST['look_4'];
	  $color_4 = $_POST['color_4'];
	  $indiameter_4 = $_POST['indiameter_4'];
	  $inputlength_4 = $_POST['inputlength_4'];
	  $jglength_4 = $_POST['jglength_4'];
	  $wrong_4 = $_POST['wrong_4'];

		//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
	  $sql1 = "update expandhogi01_expand set
		product = '$product',date = '$date',writer='$writer_1',input_time='$input_time_1',length='$length_1',heattem='$heattem_1',heattime='$heattime_1',golength='$golength_1',icetime='$icetime_1',nop='$nop_1',icetem='$icetem_1',look='$look_1',color='$color_1',indiameter='$indiameter_1',inputlength='$inputlength_1',jglength='$jglength_1',wrong='$wrong_1'
		 where date='$date' AND INput_time='$input_time_1'";

	  $sql2 = "update expandhogi01_expand set
		product = '$product',date = '$date',writer='$writer_1',input_time='$input_time_2',length='$length_2',heattem='$heattem_2',heattime='$heattime_2',golength='$golength_2',icetime='$icetime_2',nop='$nop_2',icetem='$icetem_2',look='$look_2',color='$color_2',indiameter='$indiameter_2',inputlength='$inputlength_2',jglength='$jglength_2',wrong='$wrong_2'
		 where date='$date' AND INput_time='$input_time_2'";

	  $sql3 = "update expandhogi01_expand set
		product = '$product',date = '$date',writer='$writer_3',input_time='$input_time_3',length='$length_3',heattem='$heattem_3',heattime='$heattime_3',golength='$golength_3',icetime='$icetime_3',nop='$nop_3',icetem='$icetem_3',look='$look_3',color='$color_3',indiameter='$indiameter_3',inputlength='$inputlength_3',jglength='$jglength_3',wrong='$wrong_3'
		 where date='$date' AND INput_time='$input_time_3'";

	  $sql4 = "update expandhogi01_expand set
		product = '$product',date = '$date',writer='$writer_3',input_time='$input_time_4',length='$length_4',heattem='$heattem_4',heattime='$heattime_4',golength='$golength_4',icetime='$icetime_4',nop='$nop_4',icetem='$icetem_4',look='$look_4',color='$color_4',indiameter='$indiameter_4',inputlength='$inputlength_4',jglength='$jglength_4',wrong='$wrong_4'
 		where date='$date' AND INput_time='$input_time_4'";
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
