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

            if(!$dt) {
              $dt = date('Y-m-d');
            }

            $query = "select * from management2_hivp_expand where m_product='1'";
            // where date='$date'";

            $result = $connect->query($query);

            $row=mysqli_fetch_array($result);
        ?>

        document.getElementById('m_heattem').value= "<?= $row['m_heattem']?>";
        document.getElementById('m_heattime').value= "<?= $row['m_heattime']?>";
        document.getElementById('m_heattem1').value= "<?= $row['m_heattem1']?>";
        document.getElementById('m_heattime1').value= "<?= $row['m_heattime1']?>";
        document.getElementById('m_icetem').value= "<?= $row['m_icetem']?>";
        document.getElementById('m_bagi').value= "<?= $row['m_bagi']?>";
        document.getElementById('m_basu').value= "<?= $row['m_basu']?>";
        document.getElementById('m_indiameter').value= "<?= $row['m_indiameter']?>";
        document.getElementById('m_inputlength').value= "<?= $row['m_inputlength']?>";
        document.getElementById('m_jsblength').value= "<?= $row['m_jsblength']?>";
        document.getElementById('m_jglength').value= "<?= $row['m_jglength']?>";
        document.getElementById('m_volt').value= "<?= $row['m_volt']?>";
        document.getElementById('m_volt1').value= "<?= $row['m_volt1']?>";



    });
  </script>

  <script type="text/javascript">
  $(document).ready(function() {
    <?php
        header("Content-Type:text/html;charset=utf-8");

        $connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");
        //$date=$_POST['date'];
        if(!$dt) {
          $dt = date('y-m-d');
        }

        $query1 = "select * from expandhogi02_hivp_expand where date='$dt' AND INput_time BETWEEN'06:00:01' AND '12:00:00'";
        $query2 = "select * from expandhogi02_hivp_expand where date='$dt' AND INput_time BETWEEN'12:00:01' AND '18:00:00'";
        $query3 = "select * from expandhogi02_hivp_expand where date='$dt' AND INput_time BETWEEN'18:00:01' AND '23:59:59'";
        $query4 = "select * from expandhogi02_hivp_expand where date='$dt' AND INput_time BETWEEN'00:00:00' AND '06:00:00'";

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
    document.getElementById('heattem_4').value= "<?= $row4['heattem']?>";
    document.getElementById('heattime_4').value= "<?= $row4['heattime']?>";
    document.getElementById('heattem1_4').value= "<?= $row4['heattem1']?>";
    document.getElementById('heattime1_4').value= "<?= $row4['heattime1']?>";
    document.getElementById('icetem_4').value= "<?= $row4['icetem']?>";
    document.getElementById('bagi_4').value= "<?= $row4['bagi']?>";
    document.getElementById('basu_4').value= "<?= $row4['basu']?>";
    document.getElementById('look_4').value= "<?= $row4['look']?>";
    document.getElementById('color_4').value= "<?= $row4['color']?>";
    document.getElementById('indiameter_4').value= "<?= $row4['indiameter']?>";
    document.getElementById('inputlength_4').value= "<?= $row4['inputlength']?>";
    document.getElementById('jglength_4').value= "<?= $row4['jglength']?>";
    document.getElementById('jsblength_4').value= "<?= $row4['jsblength']?>";
    document.getElementById('volt_4').value= "<?= $row4['volt']?>";
    document.getElementById('volt1_4').value= "<?= $row4['volt1']?>";
    document.getElementById('wrong_4').value= "<?= $row4['wrong']?>";



    document.getElementById('product').value = "<?= $row1['product']?>";
    document.getElementById('writer_1').value = "<?= $row1['writer']?>";
    document.getElementById('input_time_1').value= "<?= $row1['input_time']?>";
    document.getElementById('heattem_1').value= "<?= $row1['heattem']?>";
    document.getElementById('heattime_1').value= "<?= $row1['heattime']?>";
    document.getElementById('heattem1_1').value= "<?= $row1['heattem1']?>";
    document.getElementById('heattime1_1').value= "<?= $row1['heattime1']?>";
    document.getElementById('icetem_1').value= "<?= $row1['icetem']?>";
    document.getElementById('bagi_1').value= "<?= $row1['bagi']?>";
    document.getElementById('basu_1').value= "<?= $row1['basu']?>";
    document.getElementById('look_1').value= "<?= $row1['look']?>";
    document.getElementById('color_1').value= "<?= $row1['color']?>";
    document.getElementById('indiameter_1').value= "<?= $row1['indiameter']?>";
    document.getElementById('inputlength_1').value= "<?= $row1['inputlength']?>";
    document.getElementById('jglength_1').value= "<?= $row1['jglength']?>";
    document.getElementById('jsblength_1').value= "<?= $row1['jsblength']?>";
    document.getElementById('volt_1').value= "<?= $row1['volt']?>";
    document.getElementById('volt1_1').value= "<?= $row1['volt1']?>";
    document.getElementById('wrong_1').value= "<?= $row1['wrong']?>";


    document.getElementById('input_time_2').value= "<?= $row2['input_time']?>";
    document.getElementById('heattem_2').value= "<?= $row2['heattem']?>";
    document.getElementById('heattime_2').value= "<?= $row2['heattime']?>";
    document.getElementById('heattem1_2').value= "<?= $row2['heattem1']?>";
    document.getElementById('heattime1_2').value= "<?= $row2['heattime1']?>";
    document.getElementById('icetem_2').value= "<?= $row2['icetem']?>";
    document.getElementById('bagi_2').value= "<?= $row2['bagi']?>";
    document.getElementById('basu_2').value= "<?= $row2['basu']?>";
    document.getElementById('look_2').value= "<?= $row2['look']?>";
    document.getElementById('color_2').value= "<?= $row2['color']?>";
    document.getElementById('indiameter_2').value= "<?= $row2['indiameter']?>";
    document.getElementById('inputlength_2').value= "<?= $row2['inputlength']?>";
    document.getElementById('jglength_2').value= "<?= $row2['jglength']?>";
    document.getElementById('jsblength_2').value= "<?= $row2['jsblength']?>";
    document.getElementById('volt_2').value= "<?= $row2['volt']?>";
    document.getElementById('volt1_2').value= "<?= $row2['volt1']?>";
    document.getElementById('wrong_2').value= "<?= $row2['wrong']?>";


    document.getElementById('input_time_3').value= "<?= $row3['input_time']?>";
    document.getElementById('writer_3').value = "<?= $row3['writer']?>";
    document.getElementById('heattem_3').value= "<?= $row3['heattem']?>";
    document.getElementById('heattime_3').value= "<?= $row3['heattime']?>";
    document.getElementById('heattem1_3').value= "<?= $row3['heattem1']?>";
    document.getElementById('heattime1_3').value= "<?= $row3['heattime1']?>";
    document.getElementById('icetem_3').value= "<?= $row3['icetem']?>";
    document.getElementById('bagi_3').value= "<?= $row3['bagi']?>";
    document.getElementById('basu_3').value= "<?= $row3['basu']?>";
    document.getElementById('look_3').value= "<?= $row3['look']?>";
    document.getElementById('color_3').value= "<?= $row3['color']?>";
    document.getElementById('indiameter_3').value= "<?= $row3['indiameter']?>";
    document.getElementById('inputlength_3').value= "<?= $row3['inputlength']?>";
    document.getElementById('jglength_3').value= "<?= $row3['jglength']?>";
    document.getElementById('jsblength_3').value= "<?= $row3['jsblength']?>";
    document.getElementById('volt_3').value= "<?= $row3['volt']?>";
    document.getElementById('volt1_3').value= "<?= $row3['volt1']?>";
    document.getElementById('wrong_3').value= "<?= $row3['wrong']?>";
  });

  function input_Text()
  {
    //var c1_c="1234";
    //document.c1_1.value=c1_c;
    var value = $('#date1').val();
    //document.write(value);
    window.location.href = './expand_process2_HIVP_expand.php?date=' + value;

  }
  </script>

  <script type="text/javascript">

    function revisedb(){
      document.getElementById('product').disabled = false;
      document.getElementById('writer_1').disabled = false;
      document.getElementById('input_time_1').disabled = false;
      document.getElementById('heattem_1').disabled = false;
      document.getElementById('heattime_1').disabled = false;
      document.getElementById('heattem1_1').disabled = false;
      document.getElementById('heattime1_1').disabled = false;
      document.getElementById('icetem_1').disabled = false;
      document.getElementById('bagi_1').disabled = false;
      document.getElementById('basu_1').disabled = false;
      document.getElementById('look_1').disabled = false;
      document.getElementById('color_1').disabled = false;
      document.getElementById('indiameter_1').disabled = false;
      document.getElementById('inputlength_1').disabled = false;
      document.getElementById('jglength_1').disabled = false;
      document.getElementById('jsblength_1').disabled = false;
      document.getElementById('volt_1').disabled = false;
      document.getElementById('volt1_1').disabled = false;
      document.getElementById('wrong_1').disabled = false;


      document.getElementById('input_time_2').disabled = false;
      document.getElementById('heattem_2').disabled = false;
      document.getElementById('heattime_2').disabled = false;
      document.getElementById('heattem1_2').disabled = false;
      document.getElementById('heattime1_2').disabled = false;
      document.getElementById('icetem_2').disabled = false;
      document.getElementById('bagi_2').disabled = false;
      document.getElementById('basu_2').disabled = false;
      document.getElementById('look_2').disabled = false;
      document.getElementById('color_2').disabled = false;
      document.getElementById('indiameter_2').disabled = false;
      document.getElementById('inputlength_2').disabled = false;
      document.getElementById('jglength_2').disabled = false;
      document.getElementById('jsblength_2').disabled = false;
      document.getElementById('volt_2').disabled = false;
      document.getElementById('volt1_2').disabled = false;
      document.getElementById('wrong_2').disabled = false;

      document.getElementById('input_time_3').disabled = false;
      document.getElementById('writer_3').disabled = false;
      document.getElementById('heattem_3').disabled = false;
      document.getElementById('heattime_3').disabled = false;
      document.getElementById('heattem1_3').disabled = false;
      document.getElementById('heattime1_3').disabled = false;
      document.getElementById('icetem_3').disabled = false;
      document.getElementById('bagi_3').disabled = false;
      document.getElementById('basu_3').disabled = false;
      document.getElementById('look_3').disabled = false;
      document.getElementById('color_3').disabled = false;
      document.getElementById('indiameter_3').disabled = false;
      document.getElementById('inputlength_3').disabled = false;
      document.getElementById('jglength_3').disabled = false;
      document.getElementById('jsblength_3').disabled = false;
      document.getElementById('volt_3').disabled = false;
      document.getElementById('volt1_3').disabled = false;
      document.getElementById('wrong_3').disabled = false;

      document.getElementById('input_time_4').disabled = false;
      document.getElementById('heattem_4').disabled = false;
      document.getElementById('heattime_4').disabled = false;
      document.getElementById('heattem1_4').disabled = false;
      document.getElementById('heattime1_4').disabled = false;
      document.getElementById('icetem_4').disabled = false;
      document.getElementById('bagi_4').disabled = false;
      document.getElementById('basu_4').disabled = false;
      document.getElementById('look_4').disabled = false;
      document.getElementById('color_4').disabled = false;
      document.getElementById('indiameter_4').disabled = false;
      document.getElementById('inputlength_4').disabled = false;
      document.getElementById('jglength_4').disabled = false;
      document.getElementById('jsblength_4').disabled = false;
      document.getElementById('volt_4').disabled = false;
      document.getElementById('volt1_4').disabled = false;
      document.getElementById('wrong_4').disabled = false;
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
            <a href="expand_process2.php">제 확관2 호기</a>
          </li>
          <li class="breadcrumb-item active">확관성형공정관리일지</li>
        </ol>

        <ol class="bread">
          <a class="btn btn-outline-secondary" href="expand_process2_HIVG.php">HIVG</a>
          <a class="btn btn-outline-secondary" href="expand_process2_HIVP.php">HIVP</a>


        </ol>

        <ol class="bread">
          <a class="btn btn-outline-secondary" href="expand_process2_HIVP_work.php">작업일지</a>
          <a class="btn btn-outline-secondary" href="expand_process2_HIVP_expand.php">확관성형공정관리일지</a>

        </ol>



        <ol class="bread">

          <a class="btn btn-dark float-right" onclick="revisedb()" href="#">수정</a>
          <button class="btn btn-dark float-right" id='db_search' onclick="input_Text()" name='dbsearch'>검색</button>
        </ol>
        <br /><br />

        <!-- Page Content -->
        <form method='post' action='revise_expand_process2_HIVP_expand.php'>
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
                <td>08:00 ~ 12:00</td>
                <td>13:00 ~ 18:00</td>
                <td>19:00 ~ 24:00</td>
                <td>01:00 ~ 06:00</td>
              </tr>
              <tr>
                <script>

                    // $('#c1_1').val(c1_1);
                </script>
                <td><input type="time" name='input_time_1' id='input_time_1' class="form-control" disabled='disabled' placeholder="입력 시간"/></td>
                <td><input type="time" name='input_time_2' id='input_time_2' class="form-control" disabled='disabled' placeholder="입력 시간" /></td>
                <td><input type="time" name='input_time_3' id='input_time_3'class="form-control" disabled='disabled' placeholder="입력 시간" /></td>
                <td><input type="time" name='input_time_4' id='input_time_4' class="form-control" disabled='disabled' placeholder="입력 시간" /></td>
              </tr>
            </thead>
              <tr>
                <th rowspan="7">확관 성형</th>
                <th rowspan="2">1차가열</th>
                <th>가열온도</th>
                <th><input type="text" name="m_heattem" id="m_heattem" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="heattem_1" id="heattem_1" class="form-control"disabled='disabled' placeholder="가열온도" /></td>
                <td><input type="number" name="heattem_2" id="heattem_2" class="form-control"disabled='disabled' placeholder="가열온도" /></td>
                <td><input type="number" name="heattem_3" id="heattem_3" class="form-control"disabled='disabled' placeholder="가열온도" /></td>
                <td><input type="number" name="heattem_4" id="heattem_4" class="form-control"disabled='disabled' placeholder="가열온도" /></td>
              </tr>
              <tr>
                <th>가열시간</th>
                <th><input type="text" name="m_heattime" id="m_heattime" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="heattime_1" id="heattime_1" class="form-control"disabled='disabled' placeholder="가열시간" /></td>
                <td><input type="number" name="heattime_2" id="heattime_2" class="form-control"disabled='disabled' placeholder="가열시간" /></td>
                <td><input type="number" name="heattime_3" id="heattime_3" class="form-control"disabled='disabled' placeholder="가열시간" /></td>
                <td><input type="number" name="heattime_4" id="heattime_4" class="form-control"disabled='disabled' placeholder="가열시간" /></td>
              </tr>
              <tr>
                <th rowspan="2">2차가열</th>
                <th>가열온도</th>
                <th><input type="text" name="m_heattem1" id="m_heattem1" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="heattem1_1" id="heattem1_1" class="form-control"disabled='disabled' placeholder="가열온도" /></td>
                <td><input type="number" name="heattem1_2" id="heattem1_2" class="form-control"disabled='disabled' placeholder="가열온도" /></td>
                <td><input type="number" name="heattem1_3" id="heattem1_3" class="form-control"disabled='disabled' placeholder="가열온도" /></td>
                <td><input type="number" name="heattem1_4" id="heattem1_4" class="form-control"disabled='disabled' placeholder="가열온도" /></td>
              </tr>
              <tr>
                <th>가열시간</th>
                <th><input type="text" name="m_heattime1" id="m_heattime1" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="heattime1_1" id="heattime1_1" class="form-control" disabled='disabled'placeholder="가열시간" /></td>
                <td><input type="number" name="heattime1_2" id="heattime1_2" class="form-control" disabled='disabled'placeholder="가열시간" /></td>
                <td><input type="number" name="heattime1_3" id="heattime1_3" class="form-control" disabled='disabled'placeholder="가열시간" /></td>
                <td><input type="number" name="heattime1_4" id="heattime1_4" class="form-control" disabled='disabled'placeholder="가열시간" /></td>
              </tr>
              <tr>
                  <th rowspan="3">냉각시간</th>
                  <th>급수</th>
                  <th><input type="text" name="m_icetem" id="m_icetem" disabled='disabled' class="form-control"/></th>
                  <td><input type="number" name="icetem_1" id="icetem_1" class="form-control"disabled='disabled' placeholder="가열온도" /></td>
                  <td><input type="number" name="icetem_2" id="icetem_2" class="form-control"disabled='disabled' placeholder="가열온도" /></td>
                  <td><input type="number" name="icetem_3" id="icetem_3" class="form-control"disabled='disabled' placeholder="가열온도" /></td>
                  <td><input type="number" name="icetem_4" id="icetem_4" class="form-control"disabled='disabled' placeholder="가열온도" /></td>
              </tr>
              <tr>

                  <th>배기</th>
                  <th><input type="text" name="m_bagi" id="m_bagi" disabled='disabled' class="form-control"/></th>
                  <td><input type="number" name="bagi_1" id="bagi_1" class="form-control"disabled='disabled' placeholder="가열온도" /></td>
                  <td><input type="number" name="bagi_2" id="bagi_2" class="form-control"disabled='disabled' placeholder="가열온도" /></td>
                  <td><input type="number" name="bagi_3" id="bagi_3" class="form-control"disabled='disabled' placeholder="가열온도" /></td>
                  <td><input type="number" name="bagi_4" id="bagi_4" class="form-control"disabled='disabled' placeholder="가열온도" /></td>
              </tr>
              <tr>

                  <th>배수</th>
                  <th><input type="text" name="m_basu" id="m_basu" disabled='disabled' class="form-control"/></th>
                  <td><input type="number" name="basu_1" id="basu_1" class="form-control" disabled='disabled'placeholder="가열온도" /></td>
                  <td><input type="number" name="basu_2" id="basu_2" class="form-control" disabled='disabled'placeholder="가열온도" /></td>
                  <td><input type="number" name="basu_3" id="basu_3" class="form-control" disabled='disabled'placeholder="가열온도" /></td>
                  <td><input type="number" name="basu_4" id="basu_4" class="form-control" disabled='disabled'placeholder="가열온도" /></td>
              </tr>
              <tr>
                <th rowspan="6">중간검사</th>
                <th colspan="3">겉모양/모양</th>
                <td><input type="text" name="look_1" id="look_1" class="form-control"disabled='disabled' placeholder="양호" /></td>
                <td><input type="text" name="look_2" id="look_2" class="form-control"disabled='disabled' placeholder="양호" /></td>
                <td><input type="text" name="look_3" id="look_3" class="form-control"disabled='disabled' placeholder="양호" /></td>
                <td><input type="text" name="look_4" id="look_4" class="form-control"disabled='disabled' placeholder="양호" /></td>
              </tr>
              <tr>
                <th colspan="3">관의 색</th>
                <td><input type="text" name="color_1" id="color_1" class="form-control" disabled='disabled'placeholder="색" /></td>
                <td><input type="text" name="color_2" id="color_2" class="form-control" disabled='disabled'placeholder="색" /></td>
                <td><input type="text" name="color_3" id="color_3" class="form-control" disabled='disabled'placeholder="색" /></td>
                <td><input type="text" name="color_4" id="color_4" class="form-control" disabled='disabled'placeholder="색" /></td>
              </tr>
              <tr>
                <th colspan="2">접속부안지름</th>
                <th><input type="text" name="m_indiameter" id="m_indiameter" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="indiameter_1" id="indiameter_1" class="form-control"disabled='disabled' placeholder="길이" /></td>
                <td><input type="number" name="indiameter_2" id="indiameter_2" class="form-control"disabled='disabled' placeholder="길이" /></td>
                <td><input type="number" name="indiameter_3" id="indiameter_3" class="form-control"disabled='disabled' placeholder="길이" /></td>
                <td><input type="number" name="indiameter_4" id="indiameter_4" class="form-control"disabled='disabled' placeholder="길이" /></td>
              </tr>
              <tr>
                <th colspan="2">접합길이</th>
                <th><input type="text" name="m_inputlength" id="m_inputlength" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="inputlength_1" id="inputlength_1" class="form-control"disabled='disabled' placeholder="길이" /></td>
                <td><input type="number" name="inputlength_2" id="inputlength_2" class="form-control"disabled='disabled' placeholder="길이" /></td>
                <td><input type="number" name="inputlength_3" id="inputlength_3" class="form-control"disabled='disabled' placeholder="길이" /></td>
                <td><input type="number" name="inputlength_4" id="inputlength_4" class="form-control"disabled='disabled' placeholder="길이" /></td>
              </tr>
              <tr>
                <th colspan="2">접속부길이</th>
                <th><input type="text" name="m_jsblength" id="m_jsblength" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="jsblength_1" id="jsblength_1" class="form-control"disabled='disabled' placeholder="길이" /></td>
                <td><input type="number" name="jsblength_2" id="jsblength_2" class="form-control"disabled='disabled' placeholder="길이" /></td>
                <td><input type="number" name="jsblength_3" id="jsblength_3" class="form-control"disabled='disabled' placeholder="길이" /></td>
                <td><input type="number" name="jsblength_4" id="jsblength_4" class="form-control"disabled='disabled' placeholder="길이" /></td>
              </tr>
              <tr>
                <th colspan="2">직관부 길이(확관부제외)</th>
                <th><input type="text" name="m_jglength" id="m_jglength" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="jglength_1" id="jglength_1" class="form-control"disabled='disabled' placeholder="길이" /></td>
                <td><input type="number" name="jglength_2" id="jglength_2" class="form-control"disabled='disabled' placeholder="길이" /></td>
                <td><input type="number" name="jglength_3" id="jglength_3" class="form-control"disabled='disabled' placeholder="길이" /></td>
                <td><input type="number" name="jglength_4" id="jglength_4" class="form-control"disabled='disabled' placeholder="길이" /></td>
              </tr>
              <tr>
                <th rowspan="2">기타</th>
                <th>1차가열</th>
                <th >내부히타전압</th>
                <th><input type="text" name="m_volt" id="m_volt" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="volt_1" id="volt_1" class="form-control"disabled='disabled' placeholder="길이" /></td>
                <td><input type="number" name="volt_2" id="volt_2" class="form-control"disabled='disabled' placeholder="길이" /></td>
                <td><input type="number" name="volt_3" id="volt_3" class="form-control"disabled='disabled' placeholder="길이" /></td>
                <td><input type="number" name="volt_4" id="volt_4" class="form-control"disabled='disabled' placeholder="길이" /></td>


              </tr>
              <tr>

                <th>2차가열</th>
                <th >내부히타전압</th>
                <th><input type="text" name="m_volt1" id="m_volt1" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="volt1_1" id="volt1_1" class="form-control" disabled='disabled'placeholder="길이" /></td>
                <td><input type="number" name="volt1_2" id="volt1_2" class="form-control" disabled='disabled'placeholder="길이" /></td>
                <td><input type="number" name="volt1_3" id="volt1_3" class="form-control" disabled='disabled'placeholder="길이" /></td>
                <td><input type="number" name="volt1_4" id="volt1_4" class="form-control" disabled='disabled'placeholder="길이" /></td>


              </tr>
              <tr>
                <th colspan="4">문제점 및 비고</th>
                <td colspan="1"><input type="text" name="wrong_1" id="wrong_1" class="form-control"disabled='disabled' placeholder="입력" /></td>
                <td colspan="1"><input type="text" name="wrong_2" id="wrong_2" class="form-control"disabled='disabled' placeholder="입력" /></td>
                <td colspan="1"><input type="text" name="wrong_3" id="wrong_3" class="form-control"disabled='disabled' placeholder="입력" /></td>
                <td colspan="1"><input type="text" name="wrong_4" id="wrong_4" class="form-control"disabled='disabled' placeholder="입력" /></td>
              </tr>
            </thead>
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
