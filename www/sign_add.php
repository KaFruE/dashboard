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

		$who = $_GET['who'];
    $numofadd = $_GET['numofadd'];



    if($who == 'a')
    {
      $num_d1 = (int)$numofadd - 1;
      $num_d2 = $numofadd;
      $stringofadd1 = "t".$num_d1;
      $stringofadd2 = "t".$num_d2;
      $query_d1 = "ALTER TABLE sign_a ADD COLUMN t".$num_d1." VARCHAR(50)";
      $query_d2 = "ALTER TABLE sign_a ADD COLUMN t".$num_d2." VARCHAR(50)";
      $query_add_d1 = "INSERT into showdb1 values ('$stringofadd1','$num_d1')";
      $query_add_d2 = "INSERT into showdb1 values ('$stringofadd2','$num_d2')";

      $result_d1 = $connect->query($query_d1);
      $result_d2 = $connect->query($query_d2);
      $result_add_d1 = $connect->query($query_add_d1);
      $result_add_d2 = $connect->query($query_add_d2);

    }elseif ($who == 'b')
		{

			$num_d1 = (int)$numofadd - 1;
			$num_d2 = $numofadd;
			$stringofadd1 = "b".$num_d1;
			$stringofadd2 = "b".$num_d2;
			$query_d1 = "ALTER TABLE sign_b ADD COLUMN b".$num_d1." VARCHAR(50)";
			$query_d2 = "ALTER TABLE sign_b ADD COLUMN b".$num_d2." VARCHAR(50)";
			$query_add_d1 = "INSERT into showdb2 values ('$stringofadd1','$num_d1')";
			$query_add_d2 = "INSERT into showdb2 values ('$stringofadd2','$num_d2')";

			$result_d1 = $connect->query($query_d1);
			$result_d2 = $connect->query($query_d2);
			$result_add_d1 = $connect->query($query_add_d1);
			$result_add_d2 = $connect->query($query_add_d2);

		}elseif ($who == 'c')
		{

			$num_d1 = (int)$numofadd - 1;
			$num_d2 = $numofadd;
			$stringofadd1 = "c".$num_d1;
			$stringofadd2 = "c".$num_d2;
			$query_d1 = "ALTER TABLE sign_c ADD COLUMN c".$num_d1." VARCHAR(50)";
			$query_d2 = "ALTER TABLE sign_c ADD COLUMN c".$num_d2." VARCHAR(50)";
			$query_add_d1 = "INSERT into showdb3 values ('$stringofadd1','$num_d1')";
			$query_add_d2 = "INSERT into showdb3 values ('$stringofadd2','$num_d2')";

			$result_d1 = $connect->query($query_d1);
			$result_d2 = $connect->query($query_d2);
			$result_add_d1 = $connect->query($query_add_d1);
			$result_add_d2 = $connect->query($query_add_d2);

    }elseif ($who == 'd')
		{

			$num_d1 = (int)$numofadd - 1;
			$num_d2 = $numofadd;
			$stringofadd1 = "d".$num_d1;
			$stringofadd2 = "d".$num_d2;
			$query_d1 = "ALTER TABLE sign_d ADD COLUMN d".$num_d1." VARCHAR(50)";
			$query_d2 = "ALTER TABLE sign_d ADD COLUMN d".$num_d2." VARCHAR(50)";
			$query_add_d1 = "INSERT into showdb4 values ('$stringofadd1','$num_d1')";
			$query_add_d2 = "INSERT into showdb4 values ('$stringofadd2','$num_d2')";

			$result_d1 = $connect->query($query_d1);
			$result_d2 = $connect->query($query_d2);
			$result_add_d1 = $connect->query($query_add_d1);
			$result_add_d2 = $connect->query($query_add_d2);

    }elseif ($who == 'e')
		{

			$num_d1 = (int)$numofadd - 1;
			$num_d2 = $numofadd;
			$stringofadd1 = "e".$num_d1;
			$stringofadd2 = "e".$num_d2;
			$query_d1 = "ALTER TABLE sign_e ADD COLUMN e".$num_d1." VARCHAR(50)";
			$query_d2 = "ALTER TABLE sign_e ADD COLUMN e".$num_d2." VARCHAR(50)";
			$query_add_d1 = "INSERT into showdb5 values ('$stringofadd1','$num_d1')";
			$query_add_d2 = "INSERT into showdb5 values ('$stringofadd2','$num_d2')";

			$result_d1 = $connect->query($query_d1);
			$result_d2 = $connect->query($query_d2);
			$result_add_d1 = $connect->query($query_add_d1);
			$result_add_d2 = $connect->query($query_add_d2);

    }



?>
<script>
  window.location.href = './changesign.php';
</script>
