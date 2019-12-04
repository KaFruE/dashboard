<?php

	header("Content-Type:text/html;charset=utf-8");

		$connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

    $qcount_a = "SELECT * FROM information_schema.columns WHERE TABLE_NAME='sign_a';";
    $qcount_b = "SELECT * FROM information_schema.columns WHERE TABLE_NAME='sign_b';";
    $qcount_c = "SELECT * FROM information_schema.columns WHERE TABLE_NAME='sign_c';";
    $qcount_d = "SELECT * FROM information_schema.columns WHERE TABLE_NAME='sign_d';";
    $qcount_e = "SELECT * FROM information_schema.columns WHERE TABLE_NAME='sign_e';";

    $result_a1 = $connect->query($qcount_a);
    $result_b1 = $connect->query($qcount_b);
    $result_c1 = $connect->query($qcount_c);
    $result_d1 = $connect->query($qcount_d);
    $result_e1 = $connect->query($qcount_e);

    $row_a1=mysqli_num_rows($result_a1);
    $row_b1=mysqli_num_rows($result_b1);
    $row_c1=mysqli_num_rows($result_c1);
    $row_d1=mysqli_num_rows($result_d1);
    $row_e1=mysqli_num_rows($result_e1);

		$who = $_POST['whois'];

		$t_add = "";
		$b_add = "";
		$c_add = "";
		$d_add = "";
		$e_add = "";



			for($i=1; $i<=$row_a1; $i++)
	    {
				$k1 = $i;
	      ${'t'.$i} = $_POST['a'.$i];
				if($i==$row_a1)
				{
					${'t_al'.$k1} = "t".$i." = '".${'t'.$i}."' ";
				}else {
					${'t_al'.$k1} = "t".$i." = '".${'t'.$i}."', ";
				}
				$t_add = $t_add."".${'t_al'.$k1};
	    }

			$sql1 = "update sign_a set ".$t_add;

			$result1 = $connect->query($sql1);


			for($i1=1; $i1<=$row_b1; $i1++)
			{
				$k2 = $i1;
				${'b'.$i1} = $_POST['b'.$i1];
				if($i1==$row_b1)
				{
					${'b_al'.$k2} = "b".$i1." = '".${'b'.$i1}."' ";
				}else {
					${'b_al'.$k2} = "b".$i1." = '".${'b'.$i1}."', ";
				}
				$b_add = $b_add."".${'b_al'.$k2};
			}

			$sql2 = "update sign_b set ".$b_add;

			$result2 = $connect->query($sql2);



			for($i2=1; $i2<=$row_c1; $i2++)
			{
				$k3 = $i2;
				${'c'.$i2} = $_POST['c'.$i2];
				if($i2==$row_c1)
				{
					${'c_al'.$k3} = "c".$i2." = '".${'c'.$i2}."' ";
				}else {
					${'c_al'.$k3} = "c".$i2." = '".${'c'.$i2}."', ";
				}
				$c_add = $c_add."".${'c_al'.$k3};
			}

			$sql3 = "update sign_c set ".$c_add;

			$result3 = $connect->query($sql3);



			for($i3=1; $i3<=$row_d1; $i3++)
			{
				$k4 = $i3;
				${'d'.$i3} = $_POST['d'.$i3];
				if($i3==$row_d1)
				{
					${'d_al'.$k4} = "d".$i3." = '".${'d'.$i3}."' ";
				}else {
					${'d_al'.$k4} = "d".$i3." = '".${'d'.$i3}."', ";
				}
				$d_add = $d_add."".${'d_al'.$k4};
			}

			$sql4 = "update sign_d set ".$d_add;

			$result4 = $connect->query($sql4);



			for($i4=1; $i4<=$row_e1; $i4++)
			{
				$k5 = $i4;
				${'e'.$i4} = $_POST['e'.$i4];
				if($i4==$row_e1)
				{
					${'e_al'.$k5} = "e".$i4." = '".${'e'.$i4}."' ";
				}else {
					${'e_al'.$k5} = "e".$i4." = '".${'e'.$i4}."', ";
				}
				$e_add = $e_add."".${'e_al'.$k5};
			}
			$sql5 = "update sign_e set ".$e_add;
			$result5 = $connect->query($sql5);





		if($result1 || $result2 || $result3 || $result4|| $result5) { // query가 정상실행 되었다면
			$msg = "수정 되었습니다.";
		} else {
			$msg = "수정하지 못했습니다.";
		}
	?>

	<script>
		alert("<?php echo $msg?>");
		history.back();
	</script>
