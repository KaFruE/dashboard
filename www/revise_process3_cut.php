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
  $out_max_1 = $_POST['out_max_1'];
  $out_min_1 = $_POST['out_min_1'];
	$in_max_1 = $_POST['in_max_1'];
	$in_min_1 = $_POST['in_min_1'];
	$gol_max_1 = $_POST['gol_max_1'];
	$gol_min_1 = $_POST['gol_min_1'];
  $display_1 = $_POST['display_1'];
  $length_1 = $_POST['length_1'];




  $input_time_2 = $_POST['input_time_2'];
	$appearance_2 = $_POST['appearance_2'];
  $color_2 = $_POST['color_2'];
  $diameter_2 = $_POST['diameter_2'];
  $out_max_2 = $_POST['out_max_2'];
  $out_min_2 = $_POST['out_min_2'];
	$in_max_2 = $_POST['in_max_2'];
	$in_min_2 = $_POST['in_min_2'];
	$gol_max_2 = $_POST['gol_max_2'];
	$gol_min_2 = $_POST['gol_min_2'];
  $display_2 = $_POST['display_2'];
  $length_2 = $_POST['length_2'];



  $input_time_3 = $_POST['input_time_3'];
	$appearance_3 = $_POST['appearance_3'];
	$color_3 = $_POST['color_3'];
	$diameter_3 = $_POST['diameter_3'];
	$out_max_3 = $_POST['out_max_3'];
	$out_min_3 = $_POST['out_min_3'];
	$in_max_3 = $_POST['in_max_3'];
	$in_min_3 = $_POST['in_min_3'];
	$gol_max_3 = $_POST['gol_max_3'];
	$gol_min_3 = $_POST['gol_min_3'];
	$display_3 = $_POST['display_3'];
	$length_3 = $_POST['length_3'];


  $input_time_4 = $_POST['input_time_4'];
	$appearance_4 = $_POST['appearance_4'];
	$color_4 = $_POST['color_4'];
	$diameter_4 = $_POST['diameter_4'];
	$out_max_4 = $_POST['out_max_4'];
	$out_min_4 = $_POST['out_min_4'];
	$in_max_4 = $_POST['in_max_4'];
	$in_min_4 = $_POST['in_min_4'];
	$gol_max_4 = $_POST['gol_max_4'];
	$gol_min_4 = $_POST['gol_min_4'];
	$display_4 = $_POST['display_4'];
	$length_4 = $_POST['length_4'];


	//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
  $sql1 = "update hogi03_cut set
	product = '$product',date = '$date',
  writer ='$writer_1',input_time='$input_time_1',appearance='$appearance_1',color='$color_1',diameter='$diameter_1',out_max='$out_max_1',out_min='$out_min_1',
	in_max='$in_max_1',in_min='$in_min_1',gol_max='$gol_max_1',gol_min='$gol_min_1',display='$display_1',
	length='$length_1' where date='$date' AND INput_time='$input_time_1'";

	$sql2 = "update hogi03_cut set
	product = '$product',date = '$date',
  writer ='$writer_2',input_time='$input_time_2',appearance='$appearance_2',color='$color_2',diameter='$diameter_2',out_max='$out_max_2',out_min='$out_min_2',
	in_max='$in_max_2',in_min='$in_min_2',gol_max='$gol_max_2',gol_min='$gol_min_2',display='$display_2',
	length='$length_2' where date='$date' AND INput_time='$input_time_2'";

	$sql3 = "update hogi03_cut set
	product = '$product',date = '$date',
  writer ='$writer_3',input_time='$input_time_3',appearance='$appearance_3',color='$color_3',diameter='$diameter_3',out_max='$out_max_3',out_min='$out_min_3',
	in_max='$in_max_3',in_min='$in_min_3',gol_max='$gol_max_3',gol_min='$gol_min_3',display='$display_3',
	length='$length_3' where date='$date' AND INput_time='$input_time_3'";

	$sql4 = "update hogi03_cut set
	product = '$product',date = '$date',
	writer ='$writer_4',input_time='$input_time_4',appearance='$appearance_4',color='$color_4',diameter='$diameter_4',out_max='$out_max_4',out_min='$out_min_4',
	in_max='$in_max_4',in_min='$in_min_4',gol_max='$gol_max_4',gol_min='$gol_min_4',display='$display_4',
	length='$length_4' where date='$date' AND INput_time='$input_time_4'";

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
