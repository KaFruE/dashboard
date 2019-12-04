<?php

	header("Content-Type:text/html;charset=utf-8");

		$connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

		$product = $_POST['product'];
		$date = $_POST['date1'];

		$writer_1 = $_POST['writer_1'];
		$input_time_1 = $_POST['input_time_1'];
	  $appearance_1 = $_POST['appearance_1'];
	  $color_1 = $_POST['color_1'];
	  $diameter_1 = $_POST['diameter_1'];
	  $thick_min_1 = $_POST['thick_min_1'];
	  $thick_max_1 = $_POST['thick_max_1'];
		$length_1 = $_POST['length_1'];
		$ps_1 = $_POST['ps_1'];
		$weight_1 = $_POST['weight_1'];


	  $input_time_2 = $_POST['input_time_2'];
		$appearance_2 = $_POST['appearance_2'];
	  $color_2 = $_POST['color_2'];
	  $diameter_2 = $_POST['diameter_2'];
	  $thick_min_2 = $_POST['thick_min_2'];
	  $thick_max_2 = $_POST['thick_max_2'];
		$length_2 = $_POST['length_2'];
		$ps_2 = $_POST['ps_2'];
		$weight_2 = $_POST['weight_2'];

	  $input_time_3 = $_POST['input_time_3'];
	  $writer_3 = $_POST['writer_3'];
		$appearance_3 = $_POST['appearance_3'];
	  $color_3 = $_POST['color_3'];
	  $diameter_3 = $_POST['diameter_3'];
	  $thick_min_3 = $_POST['thick_min_3'];
	  $thick_max_3 = $_POST['thick_max_3'];
		$length_3 = $_POST['length_3'];
		$ps_3 = $_POST['ps_3'];
		$weight_3 = $_POST['weight_3'];

	  $input_time_4 = $_POST['input_time_4'];
		$appearance_4 = $_POST['appearance_4'];
	  $color_4 = $_POST['color_4'];
	  $diameter_4 = $_POST['diameter_4'];
	  $thick_min_4 = $_POST['thick_min_4'];
	  $thick_max_4 = $_POST['thick_max_4'];
		$length_4 = $_POST['length_4'];
		$ps_4 = $_POST['ps_4'];
		$weight_4 = $_POST['weight_4'];

		//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
	  $sql1 = "update hogi01_cut_hivg set
		product = '$product',date = '$date',writer='$writer_1',input_time='$input_time_1',appearance='$appearance_1',color='$color_1',diameter='$diameter_1',thick_min='$thick_min_1',thick_max='$thick_max_1',length='$length_1',ps='$ps_1',weight='$weight_1' where date='$date' AND INput_time='$input_time_1'";

	  $sql2 = "update hogi01_cut_hivg set
	  product = '$product',date = '$date',writer='$writer_1',input_time='$input_time_2',appearance='$appearance_2',color='$color_2',diameter='$diameter_2',thick_min='$thick_min_2',thick_max='$thick_max_2',length='$length_2',ps='$ps_2',weight='$weight_2' where date='$date' AND INput_time='$input_time_2'";

	  $sql3 = "update hogi01_cut_hivg set
	  product = '$product',date = '$date',writer='$writer_3',input_time='$input_time_3',appearance='$appearance_3',color='$color_3',diameter='$diameter_3',thick_min='$thick_min_3',thick_max='$thick_max_3',length='$length_3',ps='$ps_3',weight='$weight_3' where date='$date' AND INput_time='$input_time_3'";

	  $sql4 = "update hogi01_cut_hivg set
	  product = '$product',date = '$date',writer='$writer_3',input_time='$input_time_4',appearance='$appearance_4',color='$color_4',diameter='$diameter_4',thick_min='$thick_min_4',thick_max='$thick_max_4',length='$length_4',ps='$ps_4',weight='$weight_4' where date='$date' AND INput_time='$input_time_4'";

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
