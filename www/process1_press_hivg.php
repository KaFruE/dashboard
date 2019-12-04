<?php
  $dt = $_GET['date'];
?>

<!DOCTYPE.html>
<html lang="ko">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <?php include 'session_admin.php';?>

  <style>
    .table-under{ font-size: 1px; }
    .table-under-import{font-size : 15px;}
    .table-under-small{width: 50px;}
    .table-bordered{text-align: center; vertical-align: middle;}
  </style>
  <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.0.min.js" ></script>
  <script type="text/javascript">
      $(document).ready(function() {
        <?php
            header("Content-Type:text/html;charset=utf-8");

            $connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

            $query = "select * from management_1_press_hivg where m_product='1'";
            // where date='$date'";

            $result = $connect->query($query);

            $row=mysqli_fetch_array($result);
        ?>

        document.getElementById('m_c1').value= "<?= $row['m_c1']?>";
        document.getElementById('m_c2').value= "<?= $row['m_c2']?>";
        document.getElementById('m_c3').value= "<?= $row['m_c3']?>";
        document.getElementById('m_c4').value= "<?= $row['m_c4']?>";
        document.getElementById('m_c5').value= "<?= $row['m_c5']?>";
        document.getElementById('m_c6').value= "<?= $row['m_c6']?>";
        document.getElementById('m_c1_1').value= "<?= $row['m_c1_1']?>";
        document.getElementById('m_c2_1').value= "<?= $row['m_c2_1']?>";
        document.getElementById('m_c3_1').value= "<?= $row['m_c3_1']?>";
        document.getElementById('m_c4_1').value= "<?= $row['m_c4_1']?>";
        document.getElementById('m_c5_1').value= "<?= $row['m_c5_1']?>";
        document.getElementById('m_H').value= "<?= $row['m_H']?>";
        document.getElementById('m_H_1').value= "<?= $row['m_H_1']?>";
        document.getElementById('m_corex').value= "<?= $row['m_corex']?>";
        document.getElementById('m_d1').value= "<?= $row['m_d1']?>";
        document.getElementById('m_d2').value= "<?= $row['m_d2']?>";
        document.getElementById('m_d3').value= "<?= $row['m_d3']?>";
        document.getElementById('m_d4').value= "<?= $row['m_d4']?>";
        document.getElementById('m_d5').value= "<?= $row['m_d5']?>";
        document.getElementById('m_inheater').value= "<?= $row['m_inheater']?>";
        document.getElementById('m_hdmoter').value= "<?= $row['m_hdmoter']?>";
        document.getElementById('m_screw').value= "<?= $row['m_screw']?>";
        document.getElementById('m_jingon').value= "<?= $row['m_jingon']?>";
        document.getElementById('m_middlemoter').value= "<?= $row['m_middlemoter']?>";
        document.getElementById('m_middlescrew').value= "<?= $row['m_middlescrew']?>";
        document.getElementById('m_jingon_1').value= "<?= $row['m_jingon_1']?>";
        document.getElementById('m_icetem').value= "<?= $row['m_icetem']?>";
        document.getElementById('m_inche').value= "<?= $row['m_inche']?>";


    });
  </script>

  <script type="text/javascript">
  $(document).ready(function() {
    <?php
        header("Content-Type:text/html;charset=utf-8");

        $connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");
        //$date=$_POST['date'];
        if(!$dt) {
          $dt = date('Y-m-d');
        }

        $query1 = "select * from hogi01_press_hivg where date='$dt' AND INput_time BETWEEN'06:00:01' AND '12:00:00'";
        $query2 = "select * from hogi01_press_hivg where date='$dt' AND INput_time BETWEEN'12:00:01' AND '18:00:00'";
        $query3 = "select * from hogi01_press_hivg where date='$dt' AND INput_time BETWEEN'18:00:01' AND '23:59:59'";
        $query4 = "select * from hogi01_press_hivg where date='$dt' AND INput_time BETWEEN'00:00:00' AND '06:00:00'";

        // where date='$date'";

        $result1 = $connect->query($query1);
        $result2 = $connect->query($query2);
        $result3 = $connect->query($query3);
        $result4 = $connect->query($query4);

        $row1=mysqli_fetch_array($result1);
        $row2=mysqli_fetch_array($result2);
        $row3=mysqli_fetch_array($result3);
        $row4=mysqli_fetch_array($result4);
    ?>

    document.getElementById('input_time_4').value= "<?= $row4['input_time']?>";
    document.getElementById('c1_4').value= "<?= $row4['c1']?>";
    document.getElementById('c2_4').value= "<?= $row4['c2']?>";
    document.getElementById('c3_4').value= "<?= $row4['c3']?>";
    document.getElementById('c4_4').value= "<?= $row4['c4']?>";
    document.getElementById('c5_4').value= "<?= $row4['c5']?>";
    document.getElementById('c6_4').value= "<?= $row4['c6']?>"
    document.getElementById('c1_1_4').value= "<?= $row4['c1_1']?>";
    document.getElementById('c2_1_4').value= "<?= $row4['c2_1']?>";
    document.getElementById('c3_1_4').value= "<?= $row4['c3_1']?>";
    document.getElementById('c4_1_4').value= "<?= $row4['c4_1']?>";
    document.getElementById('c5_1_4').value= "<?= $row4['c5_1']?>";
    document.getElementById('H_4').value= "<?= $row4['H']?>";
    document.getElementById('H_1_4').value= "<?= $row4['H_1']?>";
    document.getElementById('corex_4').value= "<?= $row4['corex']?>";
    document.getElementById('d1_4').value= "<?= $row4['d1']?>";
    document.getElementById('d2_4').value= "<?= $row4['d2']?>";
    document.getElementById('d3_4').value= "<?= $row4['d3']?>";
    document.getElementById('d4_4').value= "<?= $row4['d4']?>";
    document.getElementById('d5_4').value= "<?= $row4['d5']?>";
    document.getElementById('inheater_4').value= "<?= $row4['inheater']?>";
    document.getElementById('hdmoter_4').value= "<?= $row4['hdmoter']?>";
    document.getElementById('screw_4').value= "<?= $row4['screw']?>";
    document.getElementById('jingon_4').value= "<?= $row4['jingon']?>";
    document.getElementById('middlemoter_4').value= "<?= $row4['middlemoter']?>";
    document.getElementById('middlescrew_4').value= "<?= $row4['middlescrew']?>";
    document.getElementById('jingon_1_4').value= "<?= $row4['jingon_1']?>";
    document.getElementById('icetem_4').value= "<?= $row4['icetem']?>";
    document.getElementById('inche_4').value= "<?= $row4['inche']?>";
    document.getElementById('tube_4').value= "<?= $row4['tube']?>";
    document.getElementById('length_4').value= "<?= $row4['length']?>";


    document.getElementById('product').value = "<?= $row1['product']?>";
    document.getElementById('writer_1').value = "<?= $row1['writer']?>";
    document.getElementById('input_time_1').value= "<?= $row1['input_time']?>";
    document.getElementById('c1_1').value= "<?= $row1['c1']?>";
    document.getElementById('c2_1').value= "<?= $row1['c2']?>";
    document.getElementById('c3_1').value= "<?= $row1['c3']?>";
    document.getElementById('c4_1').value= "<?= $row1['c4']?>";
    document.getElementById('c5_1').value= "<?= $row1['c5']?>";
    document.getElementById('c6_1').value= "<?= $row1['c6']?>"
    document.getElementById('c1_1_1').value= "<?= $row1['c1_1']?>";
    document.getElementById('c2_1_1').value= "<?= $row1['c2_1']?>";
    document.getElementById('c3_1_1').value= "<?= $row1['c3_1']?>";
    document.getElementById('c4_1_1').value= "<?= $row1['c4_1']?>";
    document.getElementById('c5_1_1').value= "<?= $row1['c5_1']?>";
    document.getElementById('H_1').value= "<?= $row1['H']?>";
    document.getElementById('H_1_1').value= "<?= $row1['H_1']?>";
    document.getElementById('corex_1').value= "<?= $row1['corex']?>";
    document.getElementById('d1_1').value= "<?= $row1['d1']?>";
    document.getElementById('d2_1').value= "<?= $row1['d2']?>";
    document.getElementById('d3_1').value= "<?= $row1['d3']?>";
    document.getElementById('d4_1').value= "<?= $row1['d4']?>";
    document.getElementById('d5_1').value= "<?= $row1['d5']?>";
    document.getElementById('inheater_1').value= "<?= $row1['inheater']?>";
    document.getElementById('hdmoter_1').value= "<?= $row1['hdmoter']?>";
    document.getElementById('screw_1').value= "<?= $row1['screw']?>";
    document.getElementById('jingon_1').value= "<?= $row1['jingon']?>";
    document.getElementById('middlemoter_1').value= "<?= $row1['middlemoter']?>";
    document.getElementById('middlescrew_1').value= "<?= $row1['middlescrew']?>";
    document.getElementById('jingon_1_1').value= "<?= $row1['jingon_1']?>";
    document.getElementById('icetem_1').value= "<?= $row1['icetem']?>";
    document.getElementById('inche_1').value= "<?= $row1['inche']?>";
    document.getElementById('tube_1').value= "<?= $row1['tube']?>";
    document.getElementById('length_1').value= "<?= $row1['length']?>";


    document.getElementById('input_time_2').value= "<?= $row2['input_time']?>";
    document.getElementById('c1_2').value= "<?= $row2['c1']?>";
    document.getElementById('c2_2').value= "<?= $row2['c2']?>";
    document.getElementById('c3_2').value= "<?= $row2['c3']?>";
    document.getElementById('c4_2').value= "<?= $row2['c4']?>";
    document.getElementById('c5_2').value= "<?= $row2['c5']?>";
    document.getElementById('c6_2').value= "<?= $row2['c6']?>"
    document.getElementById('c1_1_2').value= "<?= $row2['c1_1']?>";
    document.getElementById('c2_1_2').value= "<?= $row2['c2_1']?>";
    document.getElementById('c3_1_2').value= "<?= $row2['c3_1']?>";
    document.getElementById('c4_1_2').value= "<?= $row2['c4_1']?>";
    document.getElementById('c5_1_2').value= "<?= $row2['c5_1']?>";
    document.getElementById('H_2').value= "<?= $row2['H']?>";
    document.getElementById('H_1_2').value= "<?= $row2['H_1']?>";
    document.getElementById('corex_2').value= "<?= $row2['corex']?>";
    document.getElementById('d1_2').value= "<?= $row2['d1']?>";
    document.getElementById('d2_2').value= "<?= $row2['d2']?>";
    document.getElementById('d3_2').value= "<?= $row2['d3']?>";
    document.getElementById('d4_2').value= "<?= $row2['d4']?>";
    document.getElementById('d5_2').value= "<?= $row2['d5']?>";
    document.getElementById('inheater_2').value= "<?= $row2['inheater']?>";
    document.getElementById('hdmoter_2').value= "<?= $row2['hdmoter']?>";
    document.getElementById('screw_2').value= "<?= $row2['screw']?>";
    document.getElementById('jingon_2').value= "<?= $row2['jingon']?>";
    document.getElementById('middlemoter_2').value= "<?= $row2['middlemoter']?>";
    document.getElementById('middlescrew_2').value= "<?= $row2['middlescrew']?>";
    document.getElementById('jingon_1_2').value= "<?= $row2['jingon_1']?>";
    document.getElementById('icetem_2').value= "<?= $row2['icetem']?>";
    document.getElementById('inche_2').value= "<?= $row2['inche']?>";
    document.getElementById('tube_2').value= "<?= $row2['tube']?>";
    document.getElementById('length_2').value= "<?= $row2['length']?>";


    document.getElementById('input_time_3').value= "<?= $row3['input_time']?>";
    document.getElementById('writer_3').value = "<?= $row3['writer']?>";
    document.getElementById('c1_3').value= "<?= $row3['c1']?>";
    document.getElementById('c2_3').value= "<?= $row3['c2']?>";
    document.getElementById('c3_3').value= "<?= $row3['c3']?>";
    document.getElementById('c4_3').value= "<?= $row3['c4']?>";
    document.getElementById('c5_3').value= "<?= $row3['c5']?>";
    document.getElementById('c6_3').value= "<?= $row3['c6']?>"
    document.getElementById('c1_1_3').value= "<?= $row3['c1_1']?>";
    document.getElementById('c2_1_3').value= "<?= $row3['c2_1']?>";
    document.getElementById('c3_1_3').value= "<?= $row3['c3_1']?>";
    document.getElementById('c4_1_3').value= "<?= $row3['c4_1']?>";
    document.getElementById('c5_1_3').value= "<?= $row3['c5_1']?>";
    document.getElementById('H_3').value= "<?= $row3['H']?>";
    document.getElementById('H_1_3').value= "<?= $row3['H_1']?>";
    document.getElementById('corex_3').value= "<?= $row3['corex']?>";
    document.getElementById('d1_3').value= "<?= $row3['d1']?>";
    document.getElementById('d2_3').value= "<?= $row3['d2']?>";
    document.getElementById('d3_3').value= "<?= $row3['d3']?>";
    document.getElementById('d4_3').value= "<?= $row3['d4']?>";
    document.getElementById('d5_3').value= "<?= $row3['d5']?>";
    document.getElementById('inheater_3').value= "<?= $row3['inheater']?>";
    document.getElementById('hdmoter_3').value= "<?= $row3['hdmoter']?>";
    document.getElementById('screw_3').value= "<?= $row3['screw']?>";
    document.getElementById('jingon_3').value= "<?= $row3['jingon']?>";
    document.getElementById('middlemoter_3').value= "<?= $row3['middlemoter']?>";
    document.getElementById('middlescrew_3').value= "<?= $row3['middlescrew']?>";
    document.getElementById('jingon_1_3').value= "<?= $row3['jingon_1']?>";
    document.getElementById('icetem_3').value= "<?= $row3['icetem']?>";
    document.getElementById('inche_3').value= "<?= $row3['inche']?>";
    document.getElementById('tube_3').value= "<?= $row3['tube']?>";
    document.getElementById('length_3').value= "<?= $row3['length']?>";
  });

  function input_Text()
  {
    //var c1_c="1234";
    //document.c1_1.value=c1_c;
    var value = $('#date1').val();
    //document.write(value);
    window.location.href = './process1_press_hivg.php?date=' + value;

  }
  </script>

  <script type="text/javascript">

    function revisedb(){
      document.getElementById('product').disabled = false;
      document.getElementById('writer_1').disabled = false;
      document.getElementById('input_time_1').disabled = false;
      document.getElementById('c1_1').disabled = false;
      document.getElementById('c2_1').disabled = false;
      document.getElementById('c3_1').disabled = false;
      document.getElementById('c4_1').disabled = false;
      document.getElementById('c5_1').disabled = false;
      document.getElementById('c6_1').disabled = false;
      document.getElementById('c1_1_1').disabled = false;
      document.getElementById('c2_1_1').disabled = false;
      document.getElementById('c3_1_1').disabled = false;
      document.getElementById('c4_1_1').disabled = false;
      document.getElementById('c5_1_1').disabled = false;
      document.getElementById('H_1').disabled = false;
      document.getElementById('H_1_1').disabled = false;
      document.getElementById('corex_1').disabled = false;
      document.getElementById('d1_1').disabled = false;
      document.getElementById('d2_1').disabled = false;
      document.getElementById('d3_1').disabled = false;
      document.getElementById('d4_1').disabled = false;
      document.getElementById('d5_1').disabled = false;
      document.getElementById('inheater_1').disabled = false;
      document.getElementById('hdmoter_1').disabled = false;
      document.getElementById('screw_1').disabled = false;
      document.getElementById('jingon_1').disabled = false;
      document.getElementById('middlemoter_1').disabled = false;
      document.getElementById('middlescrew_1').disabled = false;
      document.getElementById('jingon_1_1').disabled = false;
      document.getElementById('icetem_1').disabled = false;
      document.getElementById('inche_1').disabled = false;
      document.getElementById('tube_1').disabled = false;
      document.getElementById('length_1').disabled = false;

      document.getElementById('input_time_2').disabled = false;
      document.getElementById('c1_2').disabled = false;
      document.getElementById('c2_2').disabled = false;
      document.getElementById('c3_2').disabled = false;
      document.getElementById('c4_2').disabled = false;
      document.getElementById('c5_2').disabled = false;
      document.getElementById('c6_2').disabled = false;
      document.getElementById('c1_1_2').disabled = false;
      document.getElementById('c2_1_2').disabled = false;
      document.getElementById('c3_1_2').disabled = false;
      document.getElementById('c4_1_2').disabled = false;
      document.getElementById('c5_1_2').disabled = false;
      document.getElementById('H_2').disabled = false;
      document.getElementById('H_1_2').disabled = false;
      document.getElementById('corex_2').disabled = false;
      document.getElementById('d1_2').disabled = false;
      document.getElementById('d2_2').disabled = false;
      document.getElementById('d3_2').disabled = false;
      document.getElementById('d4_2').disabled = false;
      document.getElementById('d5_2').disabled = false;
      document.getElementById('inheater_2').disabled = false;
      document.getElementById('hdmoter_2').disabled = false;
      document.getElementById('screw_2').disabled = false;
      document.getElementById('jingon_2').disabled = false;
      document.getElementById('middlemoter_2').disabled = false;
      document.getElementById('middlescrew_2').disabled = false;
      document.getElementById('jingon_1_2').disabled = false;
      document.getElementById('icetem_2').disabled = false;
      document.getElementById('inche_2').disabled = false;
      document.getElementById('tube_2').disabled = false;
      document.getElementById('length_2').disabled = false;

      document.getElementById('input_time_3').disabled = false;
      document.getElementById('writer_3').disabled = false;
      document.getElementById('c1_3').disabled = false;
      document.getElementById('c2_3').disabled = false;
      document.getElementById('c3_3').disabled = false;
      document.getElementById('c4_3').disabled = false;
      document.getElementById('c5_3').disabled = false;
      document.getElementById('c6_3').disabled = false;
      document.getElementById('c1_1_3').disabled = false;
      document.getElementById('c2_1_3').disabled = false;
      document.getElementById('c3_1_3').disabled = false;
      document.getElementById('c4_1_3').disabled = false;
      document.getElementById('c5_1_3').disabled = false;
      document.getElementById('H_3').disabled = false;
      document.getElementById('H_1_3').disabled = false;
      document.getElementById('corex_3').disabled = false;
      document.getElementById('d1_3').disabled = false;
      document.getElementById('d2_3').disabled = false;
      document.getElementById('d3_3').disabled = false;
      document.getElementById('d4_3').disabled = false;
      document.getElementById('d5_3').disabled = false;
      document.getElementById('inheater_3').disabled = false;
      document.getElementById('hdmoter_3').disabled = false;
      document.getElementById('screw_3').disabled = false;
      document.getElementById('jingon_3').disabled = false;
      document.getElementById('middlemoter_3').disabled = false;
      document.getElementById('middlescrew_3').disabled = false;
      document.getElementById('jingon_1_3').disabled = false;
      document.getElementById('icetem_3').disabled = false;
      document.getElementById('inche_3').disabled = false;
      document.getElementById('tube_3').disabled = false;
      document.getElementById('length_3').disabled = false;

      document.getElementById('input_time_4').disabled = false;
      document.getElementById('c1_4').disabled = false;
      document.getElementById('c2_4').disabled = false;
      document.getElementById('c3_4').disabled = false;
      document.getElementById('c4_4').disabled = false;
      document.getElementById('c5_4').disabled = false;
      document.getElementById('c6_4').disabled = false;
      document.getElementById('c1_1_4').disabled = false;
      document.getElementById('c2_1_4').disabled = false;
      document.getElementById('c3_1_4').disabled = false;
      document.getElementById('c4_1_4').disabled = false;
      document.getElementById('c5_1_4').disabled = false;
      document.getElementById('H_4').disabled = false;
      document.getElementById('H_1_4').disabled = false;
      document.getElementById('corex_4').disabled = false;
      document.getElementById('d1_4').disabled = false;
      document.getElementById('d2_4').disabled = false;
      document.getElementById('d3_4').disabled = false;
      document.getElementById('d4_4').disabled = false;
      document.getElementById('d5_4').disabled = false;
      document.getElementById('inheater_4').disabled = false;
      document.getElementById('hdmoter_4').disabled = false;
      document.getElementById('screw_4').disabled = false;
      document.getElementById('jingon_4').disabled = false;
      document.getElementById('middlemoter_4').disabled = false;
      document.getElementById('middlescrew_4').disabled = false;
      document.getElementById('jingon_1_4').disabled = false;
      document.getElementById('icetem_4').disabled = false;
      document.getElementById('inche_4').disabled = false;
      document.getElementById('tube_4').disabled = false;
      document.getElementById('length_4').disabled = false;
    }

  </script>

  <title>nuvotec dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link rel="stylesheet" href="./jquery-ui-1.12.1/jquery-ui.min.css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="main.php">NUVOTEC Dashboard</a>


    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="forgot-password.php">비밀번호 찾기</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
     <li class='nav-item dropdown'>
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>실시간 모니터링</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">호기:</h6>
          <a class="dropdown-item" href="process1.php">제 1 호기</a>
          <a class="dropdown-item" href="process2.php">제 2 호기</a>
          <a class="dropdown-item" href="process3.php">제 3 호기</a>
          <a class="dropdown-item" href="process4.php">제 4 호기</a>
          <a class="dropdown-item" href="process5.php">제 5 호기</a>
          <a class="dropdown-item" href="process6.php">제 6 호기</a>
          <a class="dropdown-item" href="process7.php">제 7 호기</a>
          <a class="dropdown-item" href="expand_process1.php">제 확관 1 호기</a>
          <a class="dropdown-item" href="expand_process2.php">제 확관 2 호기</a>
          <a class="dropdown-item" href="expand_process3.php">제 확관 3 호기</a>
        </div>
      </li>
      </li>

      <li class='nav-item dropdown'>
         <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-fw fa-folder"></i>
           <span>데이터 입력</span>
         </a>
         <div class="dropdown-menu" aria-labelledby="pagesDropdown">
           <h6 class="dropdown-header">데이터 입력 호기:</h6>
           <a class="dropdown-item" href="input_process1.php">제 1 호기</a>
           <a class="dropdown-item" href="input_process2.php">제 2 호기</a>
           <a class="dropdown-item" href="input_process3.php">제 3 호기</a>
           <a class="dropdown-item" href="input_process4.php">제 4 호기</a>
           <a class="dropdown-item" href="input_process5.php">제 5 호기</a>
           <a class="dropdown-item" href="input_process6.php">제 6 호기</a>
           <a class="dropdown-item" href="input_process7.php">제 7 호기</a>
           <a class="dropdown-item" href="input_expand_process1.php">제 확관 1 호기</a>
           <a class="dropdown-item" href="input_expand_process2.php">제 확관 2 호기</a>
           <a class="dropdown-item" href="input_expand_process3.php">제 확관 3 호기</a>
         </div>
       </li>

      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>생산실적 분석</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="main.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">
            <a href="process1.php">제 1 호기</a>
          </li>
          <li class="breadcrumb-item active">
            <a href="process1_press">압출</a>
          </li>
          <li class="breadcrumb-item active">HIVG</li>

        </ol>

        <ol class="bread">
          <a class="btn btn-outline-secondary" href="process1_mix.php">배합</a>
          <a class="btn btn-outline-secondary" href="process1_press.php">압출</a>
          <a class="btn btn-outline-secondary" href="process1_cut.php">검사</a>
          <a class="btn btn-outline-secondary" href="process1_count.php">수량</a>
          <a class="btn btn-outline-secondary" href="process1_other.php">기타</a>
        </ol>
        <ol class="bread">
          <a class="btn btn-outline-secondary" href="process1_press_hivg.php">HIVG</a>
          <a class="btn btn-outline-secondary" href="process1_press_hivp.php">HIVP</a>
        </ol>
        <ol class="bread">

          <a class="btn btn-dark float-right" onclick="revisedb()" href="#">수정</a>
          <button class="btn btn-dark float-right" id='db_search' onclick="input_Text()" name='dbsearch'>검색</button>
        </ol>
        <br /><br />

        <!-- Page Content -->
        <form method='post' action='revise_process1_press_hivg.php'>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>품명</th>
                    <td><input type="text" name='product' id='product' class="form-control"disabled='disabled' placeholder="품명"/></td>
                    <th>검사일자</th>
                    <td><input type="date" name="date1" id='date1' class="form-control" placeholder="검사일자" value="<?=$dt?>" /></td>
                    <th>주간근무자</th>
                    <td><input type="text" name='writer_1' id='writer_1' class="form-control" disabled='disabled' placeholder="주간근무자" /></td>
                    <th>야간근무자</th>
                    <td><input type="text" name='writer_3' id='writer_3' class="form-control" disabled='disabled' placeholder="야간근무자" /></td>
                  </tr>
                </thead>
              </table>
            </div>

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th colspan="4" rowspan="2">관리항목 / 점검치 </th>
                    <td colspan="2">08:00 ~ 12:00</td>
                    <td colspan="2">13:00 ~ 18:00</td>
                    <td colspan="2">19:00 ~ 24:00</td>
                    <td colspan="2">01:00 ~ 06:00</td>
                  </tr>
                  <tr>
                    <script>

                        // $('#c1_1').val(c1_1);
                    </script>
                    <td colspan="2"><input type="time" name='input_time_1' id='input_time_1' class="form-control" disabled='disabled' placeholder="입력 시간"/></td>
                    <td colspan="2"><input type="time" name='input_time_2' id='input_time_2' class="form-control" disabled='disabled' placeholder="입력 시간" /></td>
                    <td colspan="2"><input type="time" name='input_time_3' id='input_time_3'class="form-control" disabled='disabled' placeholder="입력 시간" /></td>
                    <td colspan="2"><input type="time" name='input_time_4' id='input_time_4' class="form-control" disabled='disabled' placeholder="입력 시간" /></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th rowspan="26">압출 성형</th>
                    <th rowspan="6">실린더온도(외,내층)</th>
                    <th>C1</th>
                    <th><input type="text" name="m_c1" id="m_c1" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name='c1_1' id='c1_1' class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c1_2' id='c1_2'class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c1_3' id='c1_3'class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c1_4' id='c1_4'class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th>C2</th>
                    <th><input type="text" name="m_c2" id="m_c2" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name='c2_1' id='c2_1' class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c2_2' id='c2_2' class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c2_3' id='c2_3' class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c2_4' id='c2_4' class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th>C3</th>
                    <th><input type="text" name="m_c3" id="m_c3" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name='c3_1' id='c3_1' class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c3_2' id='c3_2' class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c3_3' id='c3_3' class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c3_4' id='c3_4' class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th>C4</th>
                    <th><input type="text" name="m_c4" id="m_c4" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name='c4_1' id='c4_1' class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c4_2' id='c4_2' class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c4_3' id='c4_3' class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c4_4' id='c4_4' class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th>C5</th>
                    <th><input type="text" name="m_c5" id="m_c5" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name='c5_1' id='c5_1' class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c5_2' id='c5_2' class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c5_3' id='c5_3' class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c5_4' id='c5_4' class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th>C6</th>
                    <th><input type="text" name="m_c6" id="m_c6" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name='c6_1' id='c6_1' class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c6_2' id='c6_2' class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c6_3' id='c6_3' class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name='c6_4' id='c6_4' class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th rowspan="6">실린더온도(중간층)</th>
                    <th >C1</th>
                    <th><input type="text" name="m_c1_1" id="m_c1_1" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="c1_1_1" id="c1_1_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="c1_1_2" id="c1_1_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="c1_1_3" id="c1_1_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="c1_1_4" id="c1_1_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th >C2</th>
                    <th><input type="text" name="m_c2_1" id="m_c2_1" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="c2_1_1" id="c2_1_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="c2_1_2" id="c2_1_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="c2_1_3" id="c2_1_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="c2_1_4" id="c2_1_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th >C3</th>
                    <th><input type="text" name="m_c3_1" id="m_c3_1" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="c3_1_1" id="c3_1_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="c3_1_2" id="c3_1_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="c3_1_3" id="c3_1_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="c3_1_4" id="c3_1_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th >C4</th>
                    <th><input type="text" name="m_c4_1" id="m_c4_1" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="c4_1_1" id="c4_1_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="c4_1_2" id="c4_1_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="c4_1_3" id="c4_1_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="c4_1_4" id="c4_1_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th >C5</th>
                    <th><input type="text" name="m_c5_1" id="m_c5_1" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="c5_1_1" id="c5_1_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="c5_1_2" id="c5_1_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="c5_1_3" id="c5_1_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="c5_1_4" id="c5_1_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th >H</th>
                    <th><input type="text" name="m_H" id="m_H" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="H_1" id="H_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="H_2" id="H_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="H_3" id="H_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="H_4" id="H_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                                      </tr>
                  <tr>
                    <th rowspan="7"=>다이스온도</th>
                    <th >H</th>
                    <th><input type="text" name="m_H_1" id="m_H_1" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="H_1_1" id="H_1_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="H_1_2" id="H_1_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="H_1_3" id="H_1_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="H_1_4" id="H_1_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th >코렉스</th>
                    <th><input type="text" name="m_corex" id="m_corex" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="corex_1" id="corex_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="corex_2" id="corex_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="corex_3" id="corex_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="corex_4" id="corex_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th >D1</th>
                    <th><input type="text" name="m_d1" id="m_d1" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="d1_1" id="d1_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="d1_2" id="d1_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="d1_3" id="d1_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="d1_4" id="d1_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th >D2</th>
                    <th><input type="text" name="m_d2" id="m_d2" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="d2_1" id="d2_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="d2_2" id="d2_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="d2_3" id="d2_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="d2_4" id="d2_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th >D3</th>
                    <th><input type="text" name="m_d3" id="m_d3" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="d3_1" id="d3_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="d3_2" id="d3_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="d3_3" id="d3_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="d3_4" id="d3_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th >D4</th>
                    <th><input type="text" name="m_d4" id="m_d4" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="d4_1" id="d4_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="d4_2" id="d4_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="d4_3" id="d4_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="d4_4" id="d4_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th >D5</th>
                    <th><input type="text" name="m_d5" id="m_d5" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="d5_1" id="d5_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="d5_2" id="d5_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="d5_3" id="d5_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="d5_4" id="d5_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th colspan="2"=>내부히터</th>
                    <th><input type="text" name="m_inheater" id="m_inheater" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="inheater_1" id="inheater_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="inheater_2" id="inheater_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="inheater_3" id="inheater_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="inheater_4" id="inheater_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th colspan="2"=>외피 휘드모터 RPM</th>
                    <th><input type="text" name="m_hdmoter" id="m_hdmoter" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="hdmoter_1" id="hdmoter_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="hdmoter_2" id="hdmoter_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="hdmoter_3" id="hdmoter_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="hdmoter_4" id="hdmoter_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th colspan="2"=>외피 스크류 RPM</th>
                    <th><input type="text" name="m_screw" id="m_screw" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="screw_1" id="screw_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="screw_2" id="screw_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="screw_3" id="screw_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="screw_4" id="screw_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th colspan="2"=>진공계</th>
                    <th><input type="text" name="m_jingon" id="m_jingon" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="jingon_1" id="jingon_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="jingon_2" id="jingon_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="jingon_3" id="jingon_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="jingon_4" id="jingon_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th colspan="2"=>중간 휘드모터 RPM</th>
                    <th><input type="text" name="m_middlemoter" id="m_middlemoter" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="middlemoter_1" id="middlemoter_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="middlemoter_2" id="middlemoter_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="middlemoter_3" id="middlemoter_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="middlemoter_4" id="middlemoter_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th colspan="2"=>중간 스크류 RPM</th>
                    <th><input type="text" name="m_middlescrew" id="m_middlescrew" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="middlescrew_1" id="middlescrew_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="middlescrew_2" id="middlescrew_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="middlescrew_3" id="middlescrew_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="middlescrew_4" id="middlescrew_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th colspan="2"=>진공계</th>
                    <th><input type="text" name="m_jingon_1" id="m_jingon_1" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="jingon_1_1" id="jingon_1_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="jingon_1_2" id="jingon_1_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="jingon_1_3" id="jingon_1_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="jingon_1_4" id="jingon_1_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th rowspan="2">냉각 및 인취</th>
                    <th colspan="2">냉각수 온도 (°C)</th>
                    <th><input type="text" name="m_icetem" id="m_icetem" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="icetem_1" id="icetem_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="icetem_2" id="icetem_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="icetem_3" id="icetem_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="icetem_4" id="icetem_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th colspan="2">인취 RPM</th>
                    <th><input type="text" name="m_inche" id="m_inche" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="inche_1" id="inche_1" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="inche_2" id="inche_2" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="inche_3" id="inche_3" class="form-control" disabled='disabled' placeholder="온도" /></td>
                    <td colspan="2"><input type="number" name="inche_4" id="inche_4" class="form-control" disabled='disabled' placeholder="온도" /></td>
                  </tr>
                  <tr>
                    <th>절단</th>
                    <th colspan="3">길이(직관 / 확관)</th>
                    <td><input type="text" name="tube_1" id="tube_1" class="form-control" disabled='disabled' placeholder="직관,확관" /></td>
                    <td><input type="number" name="length_1" id="length_1" class="form-control" disabled='disabled' placeholder="길이" /></td>
                    <td><input type="text" name="tube_2" id="tube_2" class="form-control" disabled='disabled' placeholder="직관,확관" /></td>
                    <td><input type="number" name="length_2" id="length_2" class="form-control" disabled='disabled' placeholder="길이" /></td>
                    <td><input type="text" name="tube_3" id="tube_3" class="form-control" disabled='disabled' placeholder="직관,확관" /></td>
                    <td><input type="number" name="length_3" id="length_3" class="form-control" disabled='disabled' placeholder="길이" /></td>
                    <td><input type="text" name="tube_4" id="tube_4" class="form-control" disabled='disabled' placeholder="직관,확관" /></td>
                    <td><input type="number" name="length_4" id="length_4" class="form-control" disabled='disabled' placeholder="길이" /></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <br />
            <input class="btn btn-dark btn-block" type="submit" value="저장">
            <br /><br />
          </form>

      <!-- /.container-fluid -->

      <!-- Sticky Footer -->


    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="./jquery-ui-1.12.1/jquery-ui.min.js"></script>
  <script src="./jquery-ui-1.12.1/datepicker-ko.js"></script>
  <script type="text/javascript">$(function(){
  	$("#date1").datepicker();

  });
  //]]>
  </script>


  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

</body>

</html>
