<!DOCTYPE.html>
<html lang="ko">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php include 'session.php';?>

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

            $query = "select * from management";
            // where date='$date'";

            $result = $connect->query($query);

            $row=mysqli_fetch_array($result);
        ?>

        document.getElementById('m_c1').value= "<?= $row['m_c1']?>";
        document.getElementById('m_c2').value= "<?= $row['m_c2']?>";
        document.getElementById('m_c3').value= "<?= $row['m_c3']?>";
        document.getElementById('m_c4').value= "<?= $row['m_c4']?>";
        document.getElementById('m_c5').value= "<?= $row['m_c5']?>";
        document.getElementById('m_d1').value= "<?= $row['m_d1']?>";
        document.getElementById('m_d2').value= "<?= $row['m_d2']?>";
        document.getElementById('m_d3').value= "<?= $row['m_d3']?>";
        document.getElementById('m_d4').value= "<?= $row['m_d4']?>";
        document.getElementById('m_d6').value= "<?= $row['m_d6']?>";
        document.getElementById('m_d7').value= "<?= $row['m_d7']?>";
        document.getElementById('m_d8').value= "<?= $row['m_d8']?>";
        document.getElementById('m_d9').value= "<?= $row['m_d9']?>";
        document.getElementById('m_d10').value= "<?= $row['m_d10']?>";
        document.getElementById('m_dopit').value= "<?= $row['m_dopit']?>";
        document.getElementById('m_d35').value= "<?= $row['m_d35']?>";
        document.getElementById('m_cartridge').value= "<?= $row['m_cartridge']?>";
        document.getElementById('m_jumul').value= "<?= $row['m_jumul']?>";
        document.getElementById('m_maintoke').value= "<?= $row['m_maintoke']?>";
        document.getElementById('m_screwrpm').value= "<?= $row['m_screwrpm']?>";
        document.getElementById('m_hoodtoke').value= "<?= $row['m_hoodtoke']?>";
        document.getElementById('m_hoodrpm').value= "<?= $row['m_hoodrpm']?>";
        document.getElementById('m_vacuum').value= "<?= $row['m_vacuum']?>";
        document.getElementById('m_air_i').value= "<?= $row['m_air_i']?>";
        document.getElementById('m_air_a').value= "<?= $row['m_air_a']?>";
        document.getElementById('m_cold').value= "<?= $row['m_cold']?>";
        document.getElementById('m_up').value= "<?= $row['m_up']?>";
        document.getElementById('m_down').value= "<?= $row['m_down']?>";
        document.getElementById('m_in').value= "<?= $row['m_in']?>";
        document.getElementById('m_out').value= "<?= $row['m_out']?>";
        document.getElementById('m_rpm').value= "<?= $row['m_rpm']?>";


    });
  </script>

  <script type="text/javascript">
      function actdb()
      {
        document.getElementById('m_c1').disabled = false;
        document.getElementById('m_c2').disabled = false;
        document.getElementById('m_c3').disabled = false;
        document.getElementById('m_c4').disabled = false;
        document.getElementById('m_c5').disabled = false;
        document.getElementById('m_d1').disabled = false;
        document.getElementById('m_d2').disabled = false;
        document.getElementById('m_d3').disabled = false;
        document.getElementById('m_d4').disabled = false;
        document.getElementById('m_d6').disabled = false;
        document.getElementById('m_d7').disabled = false;
        document.getElementById('m_d8').disabled = false;
        document.getElementById('m_d9').disabled = false;
        document.getElementById('m_d10').disabled = false;
        document.getElementById('m_dopit').disabled = false;
        document.getElementById('m_d35').disabled = false;
        document.getElementById('m_cartridge').disabled = false;
        document.getElementById('m_jumul').disabled = false;
        document.getElementById('m_maintoke').disabled = false;
        document.getElementById('m_screwrpm').disabled = false;
        document.getElementById('m_hoodtoke').disabled = false;
        document.getElementById('m_hoodrpm').disabled = false;
        document.getElementById('m_vacuum').disabled = false;
        document.getElementById('m_air_i').disabled = false;
        document.getElementById('m_air_a').disabled = false;
        document.getElementById('m_cold').disabled = false;
        document.getElementById('m_up').disabled = false;
        document.getElementById('m_down').disabled = false;
        document.getElementById('m_in').disabled = false;
        document.getElementById('m_out').disabled = false;
        document.getElementById('m_rpm').disabled = false;
      }

      function revisedb()
      {
            var m1 = $('#m_c1').val();
            var m2 = $('#m_c2').val();
            var m3 = $('#m_c3').val();
            var m4 = $('#m_c4').val();
            var m5 = $('#m_c5').val();
            var m6 = $('#m_d1').val();
            var m7 = $('#m_d2').val();
            var m8 = $('#m_d3').val();
            var m9 = $('#m_d4').val();
            var m10 = $('#m_d6').val();
            var m11 = $('#m_d7').val();
            var m12 = $('#m_d8').val();
            var m13 = $('#m_d9').val();
            var m14 = $('#m_d10').val();
            var m15 = $('#m_d35').val();
            var m16 = $('#m_dopit').val();
            var m17 = $('#m_cartridge').val();
            var m18 = $('#m_jumul').val();
            var m19 = $('#m_maintoke').val();
            var m20 = $('#m_screwrpm').val();
            var m21 = $('#m_hoodtoke').val();
            var m22 = $('#m_hoodrpm').val();
            var m23 = $('#m_vacuum').val();
            var m24 = $('#m_air_a').val();
            var m25 = $('#m_air_i').val();
            var m26 = $('#m_cold').val();
            var m27 = $('#m_up').val();
            var m28 = $('#m_down').val();
            var m29 = $('#m_in').val();
            var m30 = $('#m_out').val();
            var m31 = $('#m_rpm').val();

            window.location.href = './input_process1_press_1.php?m1='+m1+'&m2='+m2+'&m3='+m3+'&m4='+m4+'&m5='+m5+'&m6='+m6+'&m7='+m7+'&m8='+m8+'&m9='+m9+'&m10='+m10+'&m11='+m11+'&m12='+m12+'&m13='+m13+'&m14='+m14+'&m15='+m15+
            '&m16='+m16+'&m17='+m17+'&m18='+m18+'&m19='+m19+'&m20='+m20+'&m21='+m21+'&m22='+m22+'&m23='+m23+'&m24='+m24+'&m25='+m25+'&m26='+m26+'&m27='+m27+'&m28='+m28+'&m29='+m29+'&m30='+m30+'&m31='+m31;

            <?php
              header("Content-Type:text/html;charset=utf-8");

              $connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

              $m1 = $_GET['m1'];
              $m2 = $_GET['m2'];
              $m3 = $_GET['m3'];
              $m4 = $_GET['m4'];
              $m5 = $_GET['m5'];
              $m6 = $_GET['m6'];
              $m7 = $_GET['m7'];
              $m8 = $_GET['m8'];
              $m9 = $_GET['m9'];
              $m10 = $_GET['m10'];
              $m11 = $_GET['m11'];
              $m12 = $_GET['m12'];
              $m13 = $_GET['m13'];
              $m14 = $_GET['m14'];
              $m15 = $_GET['m15'];
              $m16 = $_GET['m16'];
              $m17 = $_GET['m17'];
              $m18 = $_GET['m18'];
              $m19 = $_GET['m19'];
              $m20 = $_GET['m20'];
              $m21 = $_GET['m21'];
              $m22 = $_GET['m22'];
              $m23 = $_GET['m23'];
              $m24 = $_GET['m24'];
              $m25 = $_GET['m25'];
              $m26 = $_GET['m26'];
              $m27 = $_GET['m27'];
              $m28 = $_GET['m28'];
              $m29 = $_GET['m29'];
              $m30 = $_GET['m30'];
              $m31 = $_GET['m31'];

              $sql = "update management set
              m_c1='$m1',m_c2='$m2',m_c3='$m3',m_c4='$m4',m_c5='$m5',m_d1='$m6',m_d2='$m7',m_d3='$m8',m_d4='$m9',m_d6='$m10',m_d7='$m11',m_d8='$m12',m_d9='$m13',m_d10='$m14',m_d35='$m15',m_dopit='$m16',m_cartridge='$m17',m_jumul='$m18',m_maintoke='$m19',m_screwrpm='$m20',m_hoodtoke='$m21',m_hoodrpm='$m22',m_vacuum='$m23',m_air_a='$m24',m_air_i='$m25',m_cold='$m26',m_up='$m27',m_down='$m28',m_in='$m29',
              m_out='$m30',	m_rpm='$m31' where m_product='1'";
              if($m1){
                $result = $connect->query($sql);
              }

              if($result) { // query가 정상실행 되었다면
                $msg = "수정 되었습니다.";
              } else {
                $msg = "수정하지 못했습니다.";
              }
            ?>

            alert("<?php echo $msg?>");
            history.back();

      }
  </script>

  <title>nuvotec dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="./jquery-ui-1.12.1/jquery-ui.min.css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

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
            <a href="input_process1.php">제 1 호기</a>
          </li>
          <li class="breadcrumb-item active">압출</li>
        </ol>

        <ol class="bread">
          <a class="btn btn-outline-secondary" href="input_process1_mix.php">배합</a>
          <a class="btn btn-outline-secondary" href="input_process1_press.php">압출</a>
          <a class="btn btn-outline-secondary" href="input_process1_cut.php">검사</a>
          <a class="btn btn-outline-secondary" href="input_process1_count.php">수량</a>
          <a class="btn btn-outline-secondary" href="input_process1_other.php">기타</a>
        </ol>

        <script>
            $(document).ready(function(){
              var date = new Date();
              var hour = date.getHours();

              if(hour >= 0 && hour <= 6) {
                $('.clocks').css("background-color", "grey");
                $('#clock1').css("background-color", "red");

                $('.clocks').click(function(event){
                  return false;
                });
                $('#clock1').unbind('click');
              }
              else if(hour > 6 && hour <= 12) {
                $('.clocks').css("background-color", "grey");
                $('#clock4').css("background-color", "red");

                $('.clocks').click(function(event){
                  return false;
                });
                $('#clock4').unbind('click');
              }
              else if(hour > 12 && hour <= 18) {
                $('.clocks').css("background-color", "grey");
                $('#clock3').css("background-color", "red");

                $('.clocks').click(function(event){
                  return false;
                });
                $('#clock3').unbind('click');
              }
              else if(hour > 18 && hour < 24) {
                $('.clocks').css("background-color", "grey");
                $('#clock2').css("background-color", "red");

                $('.clocks').click(function(event){
                  return false;
                });
                $('#clock2').unbind('click');
              }

            });
        </script>
        <ol class="bread">
          <a id="clock1" class="btn btn-dark float-right clocks" href="input_process1_press_1.php">01:00~06:00</a>
          <a id="clock2" class="btn btn-dark float-right clocks" href="input_process1_press_1.php">19:00~24:00</a>
          <a id="clock3" class="btn btn-dark float-right clocks" href="input_process1_press_1.php">13:00~18:00</a>
          <a id="clock4" class="btn btn-dark float-right clocks" href="input_process1_press_1.php">08:00~12:00</a>
        </ol>
        <br/><br/>

        <form method='post' action='write_process1_press.php'>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>품명</th>
                  <td><input type="text" name="product" id="product" class="form-control" placeholder="품 명" /></td>
                  <th>검사일자</th>
                  <td><input type="date" name="date" id='date1' class="form-control" placeholder="검사일자" /></td>
                  <th>작성자</th>
                  <td><input type="text" name="writer" id="writer" class="form-control" placeholder="작성자" /></td>
                </tr>
              </thead>
            </table>
          </div>

          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th colspan="3">관리항목 / 점검치 </th>
                  <td>
                    <input type="button" class="btn btn-outline-danger float-right" id='revise' onclick="revisedb()" name='revise' value="수정">
                    <input type="button" class="btn btn-outline-dark float-right" id='act' onclick="actdb()" name='act' value="입력 활성화">
                  </td>
                  <td colspan="2"><input type="time" name="input_time" id="input_time" class="form-control" placeholder="입력 시간" /></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th rowspan="25">압출 성형</th>
                  <th rowspan="5">실린더온도</th>
                  <th>C1</th>
                  <th><input type="text" name="m_c1" id="m_c1" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="c1" id="c1" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th>C2</th>
                  <th><input type="text" name="m_c2" id="m_c2" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="c2" id="c2" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th>C3</th>
                  <th><input type="text" name="m_c3" id="m_c3" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="c3" id="c3" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th>C4</th>
                  <th><input type="text" name="m_c4" id="m_c4" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="c4" id="c4" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th>C5</th>
                  <th><input type="text" name="m_c5" id="m_c5" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="c5" id="c5" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th rowspan="10">다이스온도</th>
                  <th >D1</th>
                  <th><input type="text" name="m_d1" id="m_d1" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="d1" id="d1" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th >D2</th>
                  <th><input type="text" name="m_d2" id="m_d2" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="d2" id="d2" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th >D3</th>
                  <th><input type="text" name="m_d3" id="m_d3" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="d3" id="d3" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th >D4</th>
                  <th><input type="text" name="m_d4" id="m_d4" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="d4" id="d4" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th >D6</th>
                  <th><input type="text" name="m_d6" id="m_d6" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="d6" id="d6" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th >D7</th>
                  <th><input type="text" name="m_d7" id="m_d7" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="d7" id="d7" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th >D8</th>
                  <th><input type="text" name="m_d8" id="m_d8" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="d8" id="d8" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th >D9</th>
                  <th><input type="text" name="m_d9" id="m_d9" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="d9" id="d9" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th >D10</th>
                  <th><input type="text" name="m_d10" id="m_d10" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="d10" id="d10" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th >D35</th>
                  <th><input type="text" name="m_d35" id="m_d35" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="d35" id="d35" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th colspan="2"=>도피트</th>
                  <th><input type="text" name="m_dopit" id="m_dopit" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="dopit" id="dopit" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th colspan="2"=>카트리지</th>
                  <th><input type="text" name="m_cartridge" id="m_cartridge" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="cartridge" id="cartridge" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th colspan="2"=>주물</th>
                  <th><input type="text" name="m_jumul" id="m_jumul" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="jumul" id="jumul" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th colspan="2"=>메인모타 토크(%)</th>
                  <th><input type="text" name="m_maintoke" id="m_maintoke" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="maintoke" id="maintoke" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th colspan="2"=>스크류RPM</th>
                  <th><input type="text" name="m_screwrpm" id="m_screwrpm" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="screwrpm" id="screwrpm" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th colspan="2"=>휘드모타 토크(%)</th>
                  <th><input type="text" name="m_hoodtoke" id="m_hoodtoke" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="hoodtoke" id="hoodtoke" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th colspan="2"=>휘드RPM</th>
                  <th><input type="text" name="m_hoodrpm" id="m_hoodrpm" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="hoodrpm" id="hoodrpm" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th colspan="2"=>압출기 진공</th>
                  <th><input type="text" name="m_vacuum" id="m_vacuum" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="vacuum" id="vacuum" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th rowspan="2">"AIR"</th>
                  <th>A</th>
                  <th><input type="text" name="m_air_a" id="m_air_a" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="air_a" id="air_a" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th>I</th>
                  <th><input type="text" name="m_air_i" id="m_air_i" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="air_i" id="air_i" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th rowspan="6">냉각 및 인취</th>
                  <th colspan="2">냉각수 온도 (°C)</th>
                  <th><input type="text" name="m_cold" id="m_cold" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="cold_degree" id="cold_degree" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th rowspan="2">하중</th>
                  <th>상부</th>
                  <th><input type="text" name="m_up" id="m_up" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="up" id="up" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th>하부</th>
                  <th><input type="text" name="m_down" id="m_down" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="down" id="down" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th rowspan="2">냉각수 온도</th>
                  <th>IN</th>
                  <th><input type="text" name="m_in" id="m_in" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="degree_in" id="degree_in" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th>OUT</th>
                  <th><input type="text" name="m_out" id="m_out" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="degree_out" id="degree_out" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th colspan="2">RPM</th>
                  <th><input type="text" name="m_rpm" id="m_rpm" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="rpm" id="rpm" class="form-control" step='0.01' placeholder="온도" /></td>
                </tr>
                <tr>
                  <th>절단</th>
                  <th colspan="3">길이(직관 / 확관)</th>
                  <td><input type="text" name="tube" id="tube" class="form-control" placeholder="직관,확관" /></td>
                  <td><input type="number" name="length" id="length" class="form-control" step='0.01' placeholder="길이" /></td>
                </tr>
              </tbody>
            </table>
          </div>
          <br />
          <input class="btn btn-dark btn-block" type="submit" value="저장">
          <br /><br />
        </form>
        <!-- Page Content -->

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
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="./jquery-ui-1.12.1/jquery-ui.min.js"></script>
  <script src="./jquery-ui-1.12.1/datepicker-ko.js"></script>
  <script type="text/javascript">$(function(){
    $("#date1").datepicker();

  });
  //]]>
  </script>
  <script src="js/sb-admin.min.js"></script>

</body>

</html>
