<?php

	header("Content-Type:text/html;charset=utf-8");

		$connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

		$product = $_POST['product'];
		$date = $_POST['date1'];
		$writer_1 = $_POST['writer_1'];
		$input_time_1 = $_POST['input_time_1'];
	  $heattem_1 = $_POST['heattem_1'];
	  $heattime_1 = $_POST['heattime_1'];
	  $heattem1_1 = $_POST['heattem1_1'];
	  $heattime1_1 = $_POST['heattime1_1'];
	  $icetem_1 = $_POST['icetem_1'];
	  $bagi_1 = $_POST['bagi_1'];
	  $basu_1 = $_POST['basu_1'];
	  $look_1 = $_POST['look_1'];
	  $color_1 = $_POST['color_1'];
		$indiameter_1 = $_POST['indiameter_1'];
	  $inputlength_1 = $_POST['inputlength_1'];
		$jglength_1 = $_POST['jglength_1'];
		$jsblength_1 = $_POST['jsblength_1'];
		$volt_1 = $_POST['volt_1'];
	  $volt1_1 = $_POST['volt1_1'];
	  $wrong_1 = $_POST['wrong_1'];


	  $input_time_2 = $_POST['input_time_2'];
		$heattem_2 = $_POST['heattem_2'];
	  $heattime_2 = $_POST['heattime_2'];
	  $heattem1_2 = $_POST['heattem1_2'];
	  $heattime1_2 = $_POST['heattime1_2'];
	  $icetem_2 = $_POST['icetem_2'];
	  $bagi_2 = $_POST['bagi_2'];
	  $basu_2 = $_POST['basu_2'];
	  $look_2 = $_POST['look_2'];
	  $color_2 = $_POST['color_2'];
		$indiameter_2 = $_POST['indiameter_2'];
	  $inputlength_2 = $_POST['inputlength_2'];
		$jglength_2 = $_POST['jglength_2'];
		$jsblength_2 = $_POST['jsblength_2'];
		$volt_2 = $_POST['volt_2'];
	  $volt1_2 = $_POST['volt1_2'];
	  $wrong_2 = $_POST['wrong_2'];

	  $input_time_3 = $_POST['input_time_3'];
	  $writer_3 = $_POST['writer_3'];
		$heattem_3 = $_POST['heattem_3'];
	  $heattime_3 = $_POST['heattime_3'];
	  $heattem1_3 = $_POST['heattem1_3'];
	  $heattime1_3 = $_POST['heattime1_3'];
	  $icetem_3 = $_POST['icetem_3'];
	  $bagi_3 = $_POST['bagi_3'];
	  $basu_3 = $_POST['basu_3'];
	  $look_3 = $_POST['look_3'];
	  $color_3 = $_POST['color_3'];
		$indiameter_3 = $_POST['indiameter_3'];
	  $inputlength_3 = $_POST['inputlength_3'];
		$jglength_3 = $_POST['jglength_3'];
		$jsblength_3 = $_POST['jsblength_3'];
		$volt_3 = $_POST['volt_3'];
	  $volt1_3 = $_POST['volt1_3'];
	  $wrong_3 = $_POST['wrong_3'];

	  $input_time_4 = $_POST['input_time_4'];
		$heattem_4 = $_POST['heattem_4'];
	  $heattime_4 = $_POST['heattime_4'];
	  $heattem1_4 = $_POST['heattem1_4'];
	  $heattime1_4 = $_POST['heattime1_4'];
	  $icetem_4 = $_POST['icetem_4'];
	  $bagi_4 = $_POST['bagi_4'];
	  $basu_4 = $_POST['basu_4'];
	  $look_4 = $_POST['look_4'];
	  $color_4 = $_POST['color_4'];
		$indiameter_4 = $_POST['indiameter_4'];
	  $inputlength_4 = $_POST['inputlength_4'];
		$jglength_4 = $_POST['jglength_4'];
		$jsblength_4 = $_POST['jsblength_4'];
		$volt_4 = $_POST['volt_4'];
	  $volt1_4 = $_POST['volt1_4'];
	  $wrong_4 = $_POST['wrong_4'];

		//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
	  $sql1 = "update expandhogi02_hivp_expand set
		product = '$product',date = '$date',writer='$writer_1',input_time='$input_time_1',heattem='$heattem_1',heattime='$heattime_1',heattem1='$heattem1_1',heattime1='$heattime1_1',icetem='$icetem_1',bagi='$bagi_1',basu='$basu_1',look='$look_1',color='$color_1',indiameter='$indiameter_1',inputlength='$inputlength_1',jglength='$jglength_1',jsblength='$jsblength_1',volt='$volt_1',volt1='$volt1_1',wrong='$wrong_1'
		 where date='$date' AND INput_time='$input_time_1'";

		 $sql2 = "update expandhogi02_hivp_expand set
 		product = '$product',date = '$date',writer='$writer_1',input_time='$input_time_2',heattem='$heattem_2',heattime='$heattime_2',heattem1='$heattem1_2',heattime1='$heattime1_2',icetem='$icetem_2',bagi='$bagi_2',basu='$basu_2',look='$look_2',color='$color_2',indiameter='$indiameter_2',inputlength='$inputlength_2',jglength='$jglength_2',jsblength='$jsblength_2',volt='$volt_2',volt1='$volt1_2',wrong='$wrong_2'
 		 where date='$date' AND INput_time='$input_time_2'";

		 $sql3 = "update expandhogi02_hivp_expand set
 		product = '$product',date = '$date',writer='$writer_3',input_time='$input_time_3',heattem='$heattem_3',heattime='$heattime_3',heattem1='$heattem1_3',heattime1='$heattime1_3',icetem='$icetem_3',bagi='$bagi_3',basu='$basu_3',look='$look_3',color='$color_3',indiameter='$indiameter_3',inputlength='$inputlength_3',jglength='$jglength_3',jsblength='$jsblength_3',volt='$volt_3',volt1='$volt1_3',wrong='$wrong_3'
 		 where date='$date' AND INput_time='$input_time_3'";

		 $sql4 = "update expandhogi02_hivp_expand set
 		product = '$product',date = '$date',writer='$writer_3',input_time='$input_time_4',heattem='$heattem_4',heattime='$heattime_4',heattem1='$heattem1_4',heattime1='$heattime1_4',icetem='$icetem_4',bagi='$bagi_4',basu='$basu_4',look='$look_4',color='$color_4',indiameter='$indiameter_4',inputlength='$inputlength_4',jglength='$jglength_4',jsblength='$jsblength_4',volt='$volt_4',volt1='$volt1_4',wrong='$wrong_4'
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
