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

            $query = "select * from management_7_cut where m_product='1'";
            // where date='$date'";

            $result = $connect->query($query);

            $row=mysqli_fetch_array($result);
        ?>

        document.getElementById('m_diameter').value= "<?= $row['m_diameter']?>";
        document.getElementById('m_outwall').value= "<?= $row['m_outwall']?>";
        document.getElementById('m_inwall').value= "<?= $row['m_inwall']?>";
        document.getElementById('m_goal').value= "<?= $row['m_goal']?>";
        document.getElementById('m_pitch').value= "<?= $row['m_pitch']?>";
        document.getElementById('m_maxpitch').value= "<?= $row['m_maxpitch']?>";
        document.getElementById('m_length').value= "<?= $row['m_length']?>";


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

        $query1 = "select * from hogi07_cut where date='$dt' AND INput_time BETWEEN'06:00:01' AND '12:00:00'";
        $query2 = "select * from hogi07_cut where date='$dt' AND INput_time BETWEEN'12:00:01' AND '18:00:00'";
        $query3 = "select * from hogi07_cut where date='$dt' AND INput_time BETWEEN'18:00:01' AND '23:59:59'";
        $query4 = "select * from hogi07_cut where date='$dt' AND INput_time BETWEEN'00:00:00' AND '06:00:00'";

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
    document.getElementById('appearance_4').value= "<?= $row4['appearance']?>";
    document.getElementById('color_4').value= "<?= $row4['color']?>";
    document.getElementById('diameter_4').value= "<?= $row4['diameter']?>";
    document.getElementById('out_max_4').value= "<?= $row4['out_max']?>";
    document.getElementById('out_min_4').value= "<?= $row4['out_min']?>";
    document.getElementById('in_max_4').value= "<?= $row4['in_max']?>";
    document.getElementById('in_min_4').value= "<?= $row4['in_min']?>";
    document.getElementById('gol_max_4').value= "<?= $row4['gol_max']?>";
    document.getElementById('gol_min_4').value= "<?= $row4['gol_min']?>";
    document.getElementById('display_4').value= "<?= $row4['display']?>";
    document.getElementById('length_4').value= "<?= $row4['length']?>";
    document.getElementById('weight_4').value= "<?= $row4['weight']?>";



    document.getElementById('product').value = "<?= $row1['product']?>";
    document.getElementById('writer_1').value = "<?= $row1['writer']?>";
    document.getElementById('input_time_1').value= "<?= $row1['input_time']?>";
    document.getElementById('appearance_1').value= "<?= $row1['appearance']?>";
    document.getElementById('color_1').value= "<?= $row1['color']?>";
    document.getElementById('diameter_1').value= "<?= $row1['diameter']?>";
    document.getElementById('out_max_1').value= "<?= $row1['out_max']?>";
    document.getElementById('out_min_1').value= "<?= $row1['out_min']?>";
    document.getElementById('in_max_1').value= "<?= $row1['in_max']?>";
    document.getElementById('in_min_1').value= "<?= $row1['in_min']?>";
    document.getElementById('gol_max_1').value= "<?= $row1['gol_max']?>";
    document.getElementById('gol_min_1').value= "<?= $row1['gol_min']?>";
    document.getElementById('display_1').value= "<?= $row1['display']?>";
    document.getElementById('length_1').value= "<?= $row1['length']?>";
    document.getElementById('weight_1').value= "<?= $row1['weight']?>";


    document.getElementById('input_time_2').value= "<?= $row2['input_time']?>";
    document.getElementById('appearance_2').value= "<?= $row2['appearance']?>";
    document.getElementById('color_2').value= "<?= $row2['color']?>";
    document.getElementById('diameter_2').value= "<?= $row2['diameter']?>";
    document.getElementById('out_max_2').value= "<?= $row2['out_max']?>";
    document.getElementById('out_min_2').value= "<?= $row2['out_min']?>";
    document.getElementById('in_max_2').value= "<?= $row2['in_max']?>";
    document.getElementById('in_min_2').value= "<?= $row2['in_min']?>";
    document.getElementById('gol_max_2').value= "<?= $row2['gol_max']?>";
    document.getElementById('gol_min_2').value= "<?= $row2['gol_min']?>";
    document.getElementById('display_2').value= "<?= $row2['display']?>";
    document.getElementById('length_2').value= "<?= $row2['length']?>";
    document.getElementById('weight_2').value= "<?= $row2['weight']?>";


    document.getElementById('input_time_3').value= "<?= $row3['input_time']?>";
    document.getElementById('writer_3').value = "<?= $row3['writer']?>";
    document.getElementById('appearance_3').value= "<?= $row3['appearance']?>";
    document.getElementById('color_3').value= "<?= $row3['color']?>";
    document.getElementById('diameter_3').value= "<?= $row3['diameter']?>";
    document.getElementById('out_max_3').value= "<?= $row3['out_max']?>";
    document.getElementById('out_min_3').value= "<?= $row3['out_min']?>";
    document.getElementById('in_max_3').value= "<?= $row3['in_max']?>";
    document.getElementById('in_min_3').value= "<?= $row3['in_min']?>";
    document.getElementById('gol_max_3').value= "<?= $row3['gol_max']?>";
    document.getElementById('gol_min_3').value= "<?= $row3['gol_min']?>";
    document.getElementById('display_3').value= "<?= $row3['display']?>";
    document.getElementById('length_3').value= "<?= $row3['length']?>";
    document.getElementById('weight_3').value= "<?= $row3['weight']?>";
  });

  function input_Text()
  {
    //var c1_c="1234";
    //document.c1_1.value=c1_c;
    var value = $('#date1').val();
    //document.write(value);
    window.location.href = './process7_cut.php?date=' + value;

  }
  </script>

  <script type="text/javascript">

    function revisedb(){
      document.getElementById('product').disabled = false;
      document.getElementById('writer_1').disabled = false;
      document.getElementById('input_time_1').disabled = false;
      document.getElementById('appearance_1').disabled = false;
      document.getElementById('color_1').disabled = false;
      document.getElementById('diameter_1').disabled = false;
      document.getElementById('out_max_1').disabled = false;
      document.getElementById('out_min_1').disabled = false;
      document.getElementById('in_max_1').disabled = false;
      document.getElementById('in_min_1').disabled = false;
      document.getElementById('gol_max_1').disabled = false;
      document.getElementById('gol_min_1').disabled = false;
      document.getElementById('display_1').disabled = false;
      document.getElementById('length_1').disabled = false;
      document.getElementById('weight_1').disabled = false;


      document.getElementById('input_time_2').disabled = false;
      document.getElementById('appearance_2').disabled = false;
      document.getElementById('color_2').disabled = false;
      document.getElementById('diameter_2').disabled = false;
      document.getElementById('out_max_2').disabled = false;
      document.getElementById('out_min_2').disabled = false;
      document.getElementById('in_max_2').disabled = false;
      document.getElementById('in_min_2').disabled = false;
      document.getElementById('gol_max_2').disabled = false;
      document.getElementById('gol_min_2').disabled = false;
      document.getElementById('display_2').disabled = false;
      document.getElementById('length_2').disabled = false;
      document.getElementById('weight_2').disabled = false;

      document.getElementById('input_time_3').disabled = false;
      document.getElementById('writer_3').disabled = false;
      document.getElementById('appearance_3').disabled = false;
      document.getElementById('color_3').disabled = false;
      document.getElementById('diameter_3').disabled = false;
      document.getElementById('out_max_3').disabled = false;
      document.getElementById('out_min_3').disabled = false;
      document.getElementById('in_max_3').disabled = false;
      document.getElementById('in_min_3').disabled = false;
      document.getElementById('gol_max_3').disabled = false;
      document.getElementById('gol_min_3').disabled = false;
      document.getElementById('display_3').disabled = false;
      document.getElementById('length_3').disabled = false;
      document.getElementById('weight_3').disabled = false;

      document.getElementById('input_time_4').disabled = false;
      document.getElementById('appearance_4').disabled = false;
      document.getElementById('color_4').disabled = false;
      document.getElementById('diameter_4').disabled = false;
      document.getElementById('out_max_4').disabled = false;
      document.getElementById('out_min_4').disabled = false;
      document.getElementById('in_max_4').disabled = false;
      document.getElementById('in_min_4').disabled = false;
      document.getElementById('gol_max_4').disabled = false;
      document.getElementById('gol_min_4').disabled = false;
      document.getElementById('display_4').disabled = false;
      document.getElementById('length_4').disabled = false;
      document.getElementById('weight_4').disabled = false;
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
            <a href="process7.php">제 7 호기</a>
          </li>
          <li class="breadcrumb-item active">검사</li>
        </ol>

        <ol class="bread">
          <a class="btn btn-outline-secondary" href="process7_mix.php">배합</a>
          <a class="btn btn-outline-secondary" href="process7_press.php">압출</a>
          <a class="btn btn-outline-secondary" href="process7_cut.php">검사</a>
          <a class="btn btn-outline-secondary" href="process7_count.php">수량</a>
          <a class="btn btn-outline-secondary" href="process7_other.php">기타</a>
        </ol>



        <ol class="bread">

          <a class="btn btn-dark float-right" onclick="revisedb()" href="#">수정</a>
          <button class="btn btn-dark float-right" id='db_search' onclick="input_Text()" name='dbsearch'>검색</button>
        </ol>
        <br /><br />

        <!-- Page Content -->
        <form method='post' action='revise_process7_cut.php'>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>품명</th>
                    <td><input type="text" name='product' id='product' class="form-control"disabled='disabled' placeholder="품명"/></td>
                    <th>검사일자</th>
                    <td><input type="date" name="date1" id='date1' class="form-control" placeholder="검사일자" value="<?=$dt?>"/></td>
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
                    <th rowspan="14">중간</th>
                    <th colspan="3">검사항목</th>
                    <th colspan="2">측정치</th>
                  </tr>
                  <tr>
                    <th colspan="3">겉모양</th>
                    <td colspan="2"><input type="text" name="appearance_1" id="appearance_1" disabled='disabled'class="form-control" placeholder="양호" /></td>
                    <td colspan="2"><input type="text" name="appearance_2" id="appearance_2" disabled='disabled'class="form-control" placeholder="양호" /></td>
                    <td colspan="2"><input type="text" name="appearance_3" id="appearance_3" disabled='disabled'class="form-control" placeholder="양호" /></td>
                    <td colspan="2"><input type="text" name="appearance_4" id="appearance_4" disabled='disabled'class="form-control" placeholder="양호" /></td>
                  </tr>
                  <tr>
                    <th colspan="3">관의 색</th>
                    <td colspan="2"><input type="text" name="color_1" id="color_1" disabled='disabled' class="form-control" placeholder="색" /></td>
                    <td colspan="2"><input type="text" name="color_2" id="color_2" disabled='disabled' class="form-control" placeholder="색" /></td>
                    <td colspan="2"><input type="text" name="color_3" id="color_3" disabled='disabled' class="form-control" placeholder="색" /></td>
                    <td colspan="2"><input type="text" name="color_4" id="color_4" disabled='disabled' class="form-control" placeholder="색" /></td>
                  </tr>
                  <tr>
                    <th colspan="2">평균바깥지름 </th>
                    <th> <input type="text" name="m_diameter" id="m_diameter" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="diameter_1" id="diameter_1" disabled='disabled' class="form-control" placeholder="바깥지름" /></td>
                    <td colspan="2"><input type="number" name="diameter_2" id="diameter_2" disabled='disabled' class="form-control" placeholder="바깥지름" /></td>
                    <td colspan="2"><input type="number" name="diameter_3" id="diameter_3" disabled='disabled' class="form-control" placeholder="바깥지름" /></td>
                    <td colspan="2"><input type="number" name="diameter_4" id="diameter_4" disabled='disabled' class="form-control" placeholder="바깥지름" /></td>
                  </tr>
                  <tr>
                    <th rowspan="6">최소두께(mm)</th>
                    <th >바깥벽</th>
                    <th>최대</th>
                    <td colspan="2"><input type="number" name="out_max_1" id="out_max_1" class="form-control"disabled='disabled' placeholder="최대" /></td>
                    <td colspan="2"><input type="number" name="out_max_2" id="out_max_2" class="form-control"disabled='disabled' placeholder="최대" /></td>
                    <td colspan="2"><input type="number" name="out_max_3" id="out_max_3" class="form-control"disabled='disabled' placeholder="최대" /></td>
                    <td colspan="2"><input type="number" name="out_max_4" id="out_max_4" class="form-control"disabled='disabled' placeholder="최대" /></td>
                  </tr>
                  <tr>
                    <th><input type="text" name="m_outwall" id="m_outwall" disabled='disabled' class="form-control"/></th>
                    <th>최소</th>
                    <td colspan="2"><input type="number" name="out_min_1" id="out_min_1" class="form-control"disabled='disabled' placeholder="최소" /></td>
                    <td colspan="2"><input type="number" name="out_min_2" id="out_min_2" class="form-control"disabled='disabled' placeholder="최소" /></td>
                    <td colspan="2"><input type="number" name="out_min_3" id="out_min_3" class="form-control"disabled='disabled' placeholder="최소" /></td>
                    <td colspan="2"><input type="number" name="out_min_4" id="out_min_4" class="form-control"disabled='disabled' placeholder="최소" /></td>
                  </tr>
                  <tr>
                    <th>안벽</th>
                    <th>최대</th>
                    <td colspan="2"><input type="number" name="in_max_1" id="in_max_1" class="form-control"disabled='disabled' placeholder="최대" /></td>
                    <td colspan="2"><input type="number" name="in_max_2" id="in_max_2" class="form-control"disabled='disabled' placeholder="최대" /></td>
                    <td colspan="2"><input type="number" name="in_max_3" id="in_max_3" class="form-control"disabled='disabled' placeholder="최대" /></td>
                    <td colspan="2"><input type="number" name="in_max_4" id="in_max_4" class="form-control"disabled='disabled' placeholder="최대" /></td>
                  </tr>
                  <tr>
                    <th><input type="text" name="m_inwall" id="m_inwall" disabled='disabled' class="form-control"/></th>
                    <th>최소</th>
                    <td colspan="2"><input type="number" name="in_min_1" id="in_min_1" class="form-control"disabled='disabled' placeholder="최소" /></td>
                    <td colspan="2"><input type="number" name="in_min_2" id="in_min_2" class="form-control"disabled='disabled' placeholder="최소" /></td>
                    <td colspan="2"><input type="number" name="in_min_3" id="in_min_3" class="form-control"disabled='disabled' placeholder="최소" /></td>
                    <td colspan="2"><input type="number" name="in_min_4" id="in_min_4" class="form-control"disabled='disabled' placeholder="최소" /></td>
                  </tr>
                  <tr>
                    <th >골</th>
                    <th>최대</th>
                    <td colspan="2"><input type="number" name="gol_max_1" id="gol_max_1" class="form-control"disabled='disabled' placeholder="최대" /></td>
                    <td colspan="2"><input type="number" name="gol_max_2" id="gol_max_2" class="form-control"disabled='disabled' placeholder="최대" /></td>
                    <td colspan="2"><input type="number" name="gol_max_3" id="gol_max_3" class="form-control"disabled='disabled' placeholder="최대" /></td>
                    <td colspan="2"><input type="number" name="gol_max_4" id="gol_max_4" class="form-control"disabled='disabled' placeholder="최대" /></td>
                  </tr>
                  <tr>
                    <th><input type="text" name="m_goal" id="m_goal" disabled='disabled' class="form-control"/></th>
                    <th>최소</th>
                    <td colspan="2"><input type="number" name="gol_min_1" id="gol_min_1" class="form-control"disabled='disabled' placeholder="최소" /></td>
                    <td colspan="2"><input type="number" name="gol_min_2" id="gol_min_2" class="form-control"disabled='disabled' placeholder="최소" /></td>
                    <td colspan="2"><input type="number" name="gol_min_3" id="gol_min_3" class="form-control"disabled='disabled' placeholder="최소" /></td>
                    <td colspan="2"><input type="number" name="gol_min_4" id="gol_min_4" class="form-control"disabled='disabled' placeholder="최소" /></td>
                  </tr>
                  <tr>
                    <th>피치</th>
                    <th><input type="text" name="m_pitch" id="m_pitch" disabled='disabled' class="form-control"/></th>
                    <th>최대</th>
                    <th colspan="8"><input type="text" name="m_maxpitch" id="m_maxpitch" disabled='disabled' class="form-control"/> 몰드 변경 전 동일</th>

                  </tr>
                  <tr>
                    <th colspan="2">표시사항</th>
                    <th>규정된 표시사항</th>
                    <td colspan="2"><input type="text" name="display_1" id="display_1" disabled='disabled'class="form-control" placeholder="양호" /></td>
                    <td colspan="2"><input type="text" name="display_2" id="display_2" disabled='disabled'class="form-control" placeholder="양호" /></td>
                    <td colspan="2"><input type="text" name="display_3" id="display_3" disabled='disabled'class="form-control" placeholder="양호" /></td>
                    <td colspan="2"><input type="text" name="display_4" id="display_4" disabled='disabled'class="form-control" placeholder="양호" /></td>
                  </tr>
                  <tr>
                    <th colspan="2">길이</th>
                    <th><input type="text" name="m_length" id="m_length" disabled='disabled' class="form-control"/></th>
                    <td colspan="2"><input type="number" name="length_1" id="length_1" class="form-control"disabled='disabled' placeholder="길이" /></td>
                    <td colspan="2"><input type="number" name="length_2" id="length_2" class="form-control"disabled='disabled' placeholder="길이" /></td>
                    <td colspan="2"><input type="number" name="length_3" id="length_3" class="form-control"disabled='disabled' placeholder="길이" /></td>
                    <td colspan="2"><input type="number" name="length_4" id="length_4" class="form-control"disabled='disabled' placeholder="길이" /></td>
                  </tr>
                  <tr>
                    <th colspan="3">중량</th>
                    <td colspan="2"><input type="number" name="weight_1" id="weight_1" class="form-control" disabled='disabled' placeholder="중량" /></td>
                    <td colspan="2"><input type="number" name="weight_2" id="weight_2" class="form-control" disabled='disabled' placeholder="중량" /></td>
                    <td colspan="2"><input type="number" name="weight_3" id="weight_3" class="form-control" disabled='disabled' placeholder="중량" /></td>
                    <td colspan="2"><input type="number" name="weight_4" id="weight_4" class="form-control" disabled='disabled' placeholder="중량" /></td>
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
