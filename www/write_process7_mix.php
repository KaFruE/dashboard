<?php

header("Content-Type:text/html;charset=utf-8");

$connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

	$product = $_POST['product'];
	$date = $_POST['date'];
	$checktime_1 = $_POST['checktime_1'];
	$writer = $_POST['writer'];
	$pl100e_a_1 = $_POST['pl100e_a_1'];


  $pl100e_c_1 = $_POST['pl100e_c_1'];


  $pr_1 = $_POST['pr_1'];


	$sk_8000m_1 = $_POST['sk_8000m_1'];
	$sk_8000m_2 = $_POST['sk_8000m_2'];

	$cm_1 = $_POST['cm_1'];
	$cm_2 = $_POST['cm_2'];


	$sk_8000l_1 = $_POST['sk_8000l_1'];
	$sk_8000l_2 = $_POST['sk_8000l_2'];


	$sk_8000s_1 = $_POST['sk_8000s_1'];
	$sk_8000s_2 = $_POST['sk_8000s_2'];


	$sk_3000nv_1 = $_POST['sk_3000nv_1'];
	$sk_3000nv_2 = $_POST['sk_3000nv_2'];


	$sk_3100n_1 = $_POST['sk_3100n_1'];
	$sk_3100n_2 = $_POST['sk_3100n_2'];


	$we_8000_1 = $_POST['we_8000_1'];
	$we_8000_2 = $_POST['we_8000_2'];


	$mbs_1 = $_POST['mbs_1'];
	$mbs_2 = $_POST['mbs_2'];


	$pa910_1 = $_POST['pa910_1'];
	$pa910_2 = $_POST['pa910_2'];


	$d2t_1 = $_POST['d2t_1'];
	$d2t_2 = $_POST['d2t_2'];


	$jd_1 = $_POST['jd_1'];
	$jd_2 = $_POST['jd_2'];


	$sn1_1 = $_POST['sn1_1'];
	$sn1_2 = $_POST['sn1_2'];


	$sn2_1 = $_POST['sn2_1'];
	$sn2_2 = $_POST['sn2_2'];


	$yc34_1 = $_POST['yc34_1'];
	$yc34_2 = $_POST['yc34_2'];


	$nt3_1 = $_POST['nt3_1'];
	$nt3_2 = $_POST['nt3_2'];


	$pl100n_1 = $_POST['pl100n_1'];
	$pl100n_2 = $_POST['pl100n_2'];


	$mi_1 = $_POST['mi_1'];
	$mi_2 = $_POST['mi_2'];


	$ls130_1 = $_POST['ls130_1'];
	$ls130_2 = $_POST['ls130_2'];


	$onemix_1 = $_POST['onemix_1'];


	$mixcount_1 = $_POST['mixcount_1'];


	$mixtime_1 = $_POST['mixtime_1'];

	$mixdegree_1 = $_POST['mixdegree_1'];









	//$sql = 'insert into hogi01_press(product,date,writer,input_time,c1,c2,c3,c4,c5,d1,d2,d3,d4,d6,d7,d8,d9,d10,d35,dopit,cartridge,jumul,maintoke,screwrpm,hoodtoke,hoodrpm,vacuum,air_a,air_i,cold_degree,up,down,degree_in,degree_out,rpm,tube,length) values("'.$product.'", "' . $date . '", "' . $writer . '", "' . $input_time . '", 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0, "' . $tube. '", 0)';
  $sql = "insert into hogi07_mix values
	('$product','$date','$checktime_1','$writer','$pl100e_a_1','$pl100e_c_1','$pr_1','$sk_8000m_1','$sk_8000m_2','$cm_1','$cm_2','$sk_8000l_1','$sk_8000l_2',
	 '$sk_8000s_1','$sk_8000s_2','$sk_3000nv_1','$sk_3000nv_2','$sk_3100n_1','$sk_3100n_2','$we_8000_1','$we_8000_2','$mbs_1','$mbs_2',
	 '$pa910_1','$pa910_2','$d2t_1','$d2t_2','$jd_1','$jd_2','$sn1_1','$sn1_2','$sn2_1','$sn2_2','$yc34_1','$yc34_2','$nt3_1','$nt3_2',
	 '$pl100n_1','$pl100n_2','$mi_1','$mi_2','$ls130_1','$ls130_2','$onemix_1','$mixcount_1','$mixtime_1','$mixdegree_1')";

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
