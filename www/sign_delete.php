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
    $numofdel = $_GET['numofdel'];
    $num1 = (int)$numofdel * 2 - 2;
    $num2 = (int)$numofdel * 2 - 1;

    if($who == 'a')
    {
      $num_d1 = (string)$num1;
      $num_d2 = (string)($num2);
      $query1 = "SELECT * FROM showdb1 ORDER BY col_num ASC LIMIT ".$num_d1.", 1";
      $query2 = "SELECT * FROM showdb1 ORDER BY col_num ASC LIMIT ".$num_d2.", 1";
      $result1 = $connect->query($query1);
      $result2 = $connect->query($query2);
      $row1 = mysqli_fetch_array($result1);
      $row2 = mysqli_fetch_array($result2);

      $del_query1 = "DELETE FROM showdb1 WHERE col_name = '".$row1['col_name']."'";
      $del_query2 = "DELETE FROM showdb1 WHERE col_name = '".$row2['col_name']."'";

      $result_del1 = $connect->query($del_query1);
      $result_del2 = $connect->query($del_query2);

      $query_d1 = "ALTER TABLE sign_a DROP COLUMN ".$row1['col_name'];
      $query_d2 = "ALTER TABLE sign_a DROP COLUMN ".$row2['col_name'];
      $result_d1 = $connect->query($query_d1);
      $result_d2 = $connect->query($query_d2);

    }elseif ($who == 'b') {

      $num_d1 = (string)$num1;
      $num_d2 = (string)($num2);
      $query1_1 = "SELECT * FROM showdb2 ORDER BY col_num ASC LIMIT ".$num_d1.", 1";
      $query1_2 = "SELECT * FROM showdb2 ORDER BY col_num ASC LIMIT ".$num_d2.", 1";
      $result1_1 = $connect->query($query1_1);
      $result1_2 = $connect->query($query1_2);
      $row1_1 = mysqli_fetch_array($result1_1);
      $row1_2 = mysqli_fetch_array($result1_2);

      $del_query1_1 = "DELETE FROM showdb2 WHERE col_name = '".$row1_1['col_name']."'";
      $del_query1_2 = "DELETE FROM showdb2 WHERE col_name = '".$row1_2['col_name']."'";

      $result_del1_1 = $connect->query($del_query1_1);
      $result_del1_2 = $connect->query($del_query1_2);

      $query_d1_1 = "ALTER TABLE sign_b DROP COLUMN ".$row1_1['col_name'];
      $query_d1_2 = "ALTER TABLE sign_b DROP COLUMN ".$row1_2['col_name'];
      $result_d1_1 = $connect->query($query_d1_1);
      $result_d1_2 = $connect->query($query_d1_2);

    }elseif ($who == 'c') {

      $num_d1 = (string)$num1;
      $num_d2 = (string)($num2);
      $query2_1 = "SELECT * FROM showdb3 ORDER BY col_num ASC LIMIT ".$num_d1.", 1";
      $query2_2 = "SELECT * FROM showdb3 ORDER BY col_num ASC LIMIT ".$num_d2.", 1";
      $result2_1 = $connect->query($query2_1);
      $result2 = $connect->query($query2_2);
      $row2_1 = mysqli_fetch_array($result2_1);
      $row2_2 = mysqli_fetch_array($result2_2);

      $del_query2_1 = "DELETE FROM showdb3 WHERE col_name = '".$row2_1['col_name']."'";
      $del_query2_2 = "DELETE FROM showdb3 WHERE col_name = '".$row2_2['col_name']."'";

      $result_del2_1 = $connect->query($del_query2_1);
      $result_del2_2 = $connect->query($del_query2_2);

      $query_d2_1 = "ALTER TABLE sign_c DROP COLUMN ".$row2_1['col_name'];
      $query_d2_2 = "ALTER TABLE sign_c DROP COLUMN ".$row2_2['col_name'];
      $result_d2_1 = $connect->query($query_d2_1);
      $result_d2_2 = $connect->query($query_d2_2);

    }elseif ($who == 'd') {

      $num_d1 = (string)$num1;
      $num_d2 = (string)($num2);
      $query3_1 = "SELECT * FROM showdb4 ORDER BY col_num ASC LIMIT ".$num_d1.", 1";
      $query3_2 = "SELECT * FROM showdb4 ORDER BY col_num ASC LIMIT ".$num_d2.", 1";
      $result3_1 = $connect->query($query3_1);
      $result3_2 = $connect->query($query3_2);
      $row3_1 = mysqli_fetch_array($result3_1);
      $row3_2 = mysqli_fetch_array($result3_2);

      $del_query3_1 = "DELETE FROM showdb4 WHERE col_name = '".$row3_1['col_name']."'";
      $del_query3_2 = "DELETE FROM showdb4 WHERE col_name = '".$row3_2['col_name']."'";

      $result_del3_1 = $connect->query($del_query3_1);
      $result_del3_2 = $connect->query($del_query3_2);

      $query_d3_1 = "ALTER TABLE sign_d DROP COLUMN ".$row3_1['col_name'];
      $query_d3_2 = "ALTER TABLE sign_d DROP COLUMN ".$row3_2['col_name'];
      $result_d3_1 = $connect->query($query_d3_1);
      $result_d3_2 = $connect->query($query_d3_2);

    }elseif ($who == 'e') {

      $num_d1 = (string)$num1;
      $num_d2 = (string)($num2);
      $query4_1 = "SELECT * FROM showdb5 ORDER BY col_num ASC LIMIT ".$num_d1.", 1";
      $query4_2 = "SELECT * FROM showdb5 ORDER BY col_num ASC LIMIT ".$num_d2.", 1";
      $result4_1 = $connect->query($query4_1);
      $result4_2 = $connect->query($query4_2);
      $row4_1 = mysqli_fetch_array($result4_1);
      $row4_2 = mysqli_fetch_array($result4_2);

      $del_query4_1 = "DELETE FROM showdb5 WHERE col_name = '".$row4_1['col_name']."'";
      $del_query4_2 = "DELETE FROM showdb5 WHERE col_name = '".$row4_2['col_name']."'";

      $result_del4_1 = $connect->query($del_query4_1);
      $result_del4_2 = $connect->query($del_query4_2);

      $query_d4_1 = "ALTER TABLE sign_e DROP COLUMN ".$row4_1['col_name'];
      $query_d4_2 = "ALTER TABLE sign_e DROP COLUMN ".$row4_2['col_name'];
      $result_d4_1 = $connect->query($query_d4_1);
      $result_d4_2 = $connect->query($query_d4_2);

    }



?>
<script>
  window.location.href = './changesign.php';
</script>
