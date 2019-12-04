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

            $query = "select * from management_1_cut_hivg where m_product='1'";
            // where date='$date'";

            $result = $connect->query($query);

            $row=mysqli_fetch_array($result);
        ?>

        document.getElementById('m_diameter').value= "<?= $row['m_diameter']?>";
        document.getElementById('m_thick_min').value= "<?= $row['m_thick_min']?>";
        document.getElementById('m_thick_max').value= "<?= $row['m_thick_max']?>";
        document.getElementById('m_length').value= "<?= $row['m_length']?>";
        document.getElementById('m_weight').value= "<?= $row['m_weight']?>";


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

        $query1 = "select * from hogi01_cut_hivg where date='$dt' AND INput_time BETWEEN'06:00:01' AND '12:00:00'";
        $query2 = "select * from hogi01_cut_hivg where date='$dt' AND INput_time BETWEEN'12:00:01' AND '18:00:00'";
        $query3 = "select * from hogi01_cut_hivg where date='$dt' AND INput_time BETWEEN'18:00:01' AND '23:59:59'";
        $query4 = "select * from hogi01_cut_hivg where date='$dt' AND INput_time BETWEEN'00:00:00' AND '06:00:00'";

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
    document.getElementById('thick_min_4').value= "<?= $row4['thick_min']?>";
    document.getElementById('thick_max_4').value= "<?= $row4['thick_max']?>";
    document.getElementById('length_4').value= "<?= $row4['length']?>";
    document.getElementById('ps_4').value= "<?= $row4['ps']?>";
    document.getElementById('weight_4').value= "<?= $row4['weight']?>";




    document.getElementById('product').value = "<?= $row1['product']?>";
    document.getElementById('writer_1').value = "<?= $row1['writer']?>";
    document.getElementById('input_time_1').value= "<?= $row1['input_time']?>";
    document.getElementById('appearance_1').value= "<?= $row1['appearance']?>";
    document.getElementById('color_1').value= "<?= $row1['color']?>";
    document.getElementById('diameter_1').value= "<?= $row1['diameter']?>";
    document.getElementById('thick_min_1').value= "<?= $row1['thick_min']?>";
    document.getElementById('thick_max_1').value= "<?= $row1['thick_max']?>";
    document.getElementById('length_1').value= "<?= $row1['length']?>";
    document.getElementById('ps_1').value= "<?= $row1['ps']?>";
    document.getElementById('weight_1').value= "<?= $row1['weight']?>";


    document.getElementById('input_time_2').value= "<?= $row2['input_time']?>";
    document.getElementById('appearance_2').value= "<?= $row2['appearance']?>";
    document.getElementById('color_2').value= "<?= $row2['color']?>";
    document.getElementById('diameter_2').value= "<?= $row2['diameter']?>";
    document.getElementById('thick_min_2').value= "<?= $row2['thick_min']?>";
    document.getElementById('thick_max_2').value= "<?= $row2['thick_max']?>";
    document.getElementById('length_2').value= "<?= $row2['length']?>";
    document.getElementById('ps_2').value= "<?= $row2['ps']?>";
    document.getElementById('weight_2').value= "<?= $row2['weight']?>";


    document.getElementById('input_time_3').value= "<?= $row3['input_time']?>";
    document.getElementById('writer_3').value = "<?= $row3['writer']?>";
    document.getElementById('appearance_3').value= "<?= $row3['appearance']?>";
    document.getElementById('color_3').value= "<?= $row3['color']?>";
    document.getElementById('diameter_3').value= "<?= $row3['diameter']?>";
    document.getElementById('thick_min_3').value= "<?= $row3['thick_min']?>";
    document.getElementById('thick_max_3').value= "<?= $row3['thick_max']?>";
    document.getElementById('length_3').value= "<?= $row3['length']?>";
    document.getElementById('ps_3').value= "<?= $row3['ps']?>";
    document.getElementById('weight_3').value= "<?= $row3['weight']?>";
  });

  function input_Text()
  {
    //var c1_c="1234";
    //document.c1_1.value=c1_c;
    var value = $('#date1').val();
    //document.write(value);
    window.location.href = './process1_cut_hivg.php?date=' + value;

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
      document.getElementById('thick_min_1').disabled = false;
      document.getElementById('thick_max_1').disabled = false;
      document.getElementById('length_1').disabled = false;
      document.getElementById('ps_1').disabled = false;
      document.getElementById('weight_1').disabled = false;



      document.getElementById('input_time_2').disabled = false;
      document.getElementById('appearance_2').disabled = false;
      document.getElementById('color_2').disabled = false;
      document.getElementById('diameter_2').disabled = false;
      document.getElementById('thick_min_2').disabled = false;
      document.getElementById('thick_max_2').disabled = false;
      document.getElementById('length_2').disabled = false;
      document.getElementById('ps_2').disabled = false;
      document.getElementById('weight_2').disabled = false;

      document.getElementById('input_time_3').disabled = false;
      document.getElementById('writer_3').disabled = false;
      document.getElementById('appearance_3').disabled = false;
      document.getElementById('color_3').disabled = false;
      document.getElementById('diameter_3').disabled = false;
      document.getElementById('thick_min_3').disabled = false;
      document.getElementById('thick_max_3').disabled = false;
      document.getElementById('length_3').disabled = false;
      document.getElementById('ps_3').disabled = false;
      document.getElementById('weight_3').disabled = false;

      document.getElementById('input_time_4').disabled = false;
      document.getElementById('appearance_4').disabled = false;
      document.getElementById('color_4').disabled = false;
      document.getElementById('diameter_4').disabled = false;
      document.getElementById('thick_min_4').disabled = false;
      document.getElementById('thick_max_4').disabled = false;
      document.getElementById('length_4').disabled = false;
      document.getElementById('ps_4').disabled = false;
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
            <a href="process1.php">제 1 호기</a>
          </li>
          <li class="breadcrumb-item active">
            <a href="process1_cut">검사</a>
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
          <a class="btn btn-outline-secondary" href="process1_cut_hivg.php">HIVG</a>
          <a class="btn btn-outline-secondary" href="process1_cut_hivp.php">HIVP</a>
        </ol>


        <ol class="bread">

          <a class="btn btn-dark float-right" onclick="revisedb()" href="#">수정</a>
          <button class="btn btn-dark float-right" id='db_search' onclick="input_Text()" name='dbsearch'>검색</button>
        </ol>
        <br /><br />

        <!-- Page Content -->
        <form method='post' action='revise_process1_cut_hivg.php'>
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
                    <td colspan="1">08:00 ~ 12:00</td>
                    <td colspan="1">13:00 ~ 18:00</td>
                    <td colspan="1">19:00 ~ 24:00</td>
                    <td colspan="1">01:00 ~ 06:00</td>
                  </tr>
                  <tr>
                    <script>

                        // $('#c1_1').val(c1_1);
                    </script>
                    <td colspan="1"><input type="time" name='input_time_1' id='input_time_1' class="form-control" disabled='disabled' placeholder="입력 시간"/></td>
                    <td colspan="1"><input type="time" name='input_time_2' id='input_time_2' class="form-control" disabled='disabled' placeholder="입력 시간" /></td>
                    <td colspan="1"><input type="time" name='input_time_3' id='input_time_3'class="form-control" disabled='disabled' placeholder="입력 시간" /></td>
                    <td colspan="1"><input type="time" name='input_time_4' id='input_time_4' class="form-control" disabled='disabled' placeholder="입력 시간" /></td>
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
                    <td><input type="text" name="appearance_1" id="appearance_1" disabled='disabled' class="form-control" placeholder="양호" /></td>
                    <td ><input type="text" name="appearance_2" id="appearance_2" disabled='disabled' class="form-control" placeholder="양호" /></td>
                    <td ><input type="text" name="appearance_3" id="appearance_3" disabled='disabled' class="form-control" placeholder="양호" /></td>
                    <td><input type="text" name="appearance_4" id="appearance_4" disabled='disabled' class="form-control" placeholder="양호" /></td>
                  </tr>
                  <tr>
                    <th colspan="3">관의 색</th>
                    <td><input type="text" name="color_1" id="color_1"  disabled='disabled'class="form-control" placeholder="색" /></td>
                    <td><input type="text" name="color_2" id="color_2"  disabled='disabled'class="form-control" placeholder="색" /></td>
                    <td><input type="text" name="color_3" id="color_3"  disabled='disabled'class="form-control" placeholder="색" /></td>
                    <td><input type="text" name="color_4" id="color_4"  disabled='disabled'class="form-control" placeholder="색" /></td>
                  </tr>
                  <tr>
                    <th colspan="2">평균바깥지름 </th>
                    <th> <input type="text" name="m_diameter" id="m_diameter" disabled='disabled' class="form-control"/></th>
                    <td><input type="number" name="diameter_1" id="diameter_1" disabled='disabled'class="form-control" placeholder="바깥지름" /></td>
                    <td ><input type="number" name="diameter_2" id="diameter_2" disabled='disabled'class="form-control" placeholder="바깥지름" /></td>
                    <td><input type="number" name="diameter_3" id="diameter_3" disabled='disabled'class="form-control" placeholder="바깥지름" /></td>
                    <td><input type="number" name="diameter_4" id="diameter_4" disabled='disabled'class="form-control" placeholder="바깥지름" /></td>

                  </tr>
                  <tr>
                    <th rowspan="2">두께(mm)</th>
                    <th>최소</th>
                    <th> <input type="text" name="m_thick_min" id="m_thick_min" disabled='disabled' class="form-control"/> 이상</th>
                    <td ><input type="number" name="thick_min_1" id="thick_min_1" disabled='disabled' class="form-control" placeholder="최소" /></td>
                    <td ><input type="number" name="thick_min_2" id="thick_min_2" disabled='disabled' class="form-control" placeholder="최소" /></td>
                    <td ><input type="number" name="thick_min_3" id="thick_min_3" disabled='disabled' class="form-control" placeholder="최소" /></td>
                    <td ><input type="number" name="thick_min_4" id="thick_min_4" disabled='disabled' class="form-control" placeholder="최소" /></td>
                  </tr>
                  <tr>

                    <th>최대</th>
                    <th> <input type="text" name="m_thick_max" id="m_thick_max" disabled='disabled' class="form-control"/></th>
                    <td ><input type="number" name="thick_max_1" id="thick_max_1" disabled='disabled' class="form-control" placeholder="최대" /></td>
                    <td ><input type="number" name="thick_max_2" id="thick_max_2" disabled='disabled' class="form-control" placeholder="최대" /></td>
                    <td ><input type="number" name="thick_max_3" id="thick_max_3" disabled='disabled' class="form-control" placeholder="최대" /></td>
                    <td ><input type="number" name="thick_max_4" id="thick_max_4" disabled='disabled' class="form-control" placeholder="최대" /></td>
                  </tr>
                  <tr>
                    <th colspan="2">직관부길이(mm)</th>
                    <th> <input type="text" name="m_length" id="m_length" disabled='disabled' class="form-control"/>mm</th>
                    <td><input type="number" name="length_1" id="length_1" disabled='disabled' class="form-control" placeholder="최대" /></td>
                    <td><input type="number" name="length_2" id="length_2" disabled='disabled' class="form-control" placeholder="최대" /></td>
                    <td><input type="number" name="length_3" id="length_3" disabled='disabled' class="form-control" placeholder="최대" /></td>
                    <td><input type="number" name="length_4" id="length_4" disabled='disabled' class="form-control" placeholder="최대" /></td>
                  </tr>
                  <tr>
                    <th colspan="2">표시사항</th>
                    <th>규정된 표시사항</th>
                    <td><input type="text" name="ps_1" id="ps_1" disabled='disabled' class="form-control" placeholder="표시사항" /></td>
                    <td><input type="text" name="ps_2" id="ps_2" disabled='disabled' class="form-control" placeholder="표시사항" /></td>
                    <td><input type="text" name="ps_3" id="ps_3" disabled='disabled' class="form-control" placeholder="표시사항" /></td>
                    <td><input type="text" name="ps_4" id="ps_4" disabled='disabled' class="form-control" placeholder="표시사항" /></td>
                  </tr>
                  <tr>
                    <th colspan="2">중량(kg)</th>
                    <th> <input type="text" name="m_weight" id="m_weight" disabled='disabled' class="form-control"/></th>
                    <td><input type="number" name="weight_1" id="weight_1"disabled='disabled' class="form-control" placeholder="kg" /></td>
                    <td><input type="number" name="weight_2" id="weight_2"disabled='disabled' class="form-control" placeholder="kg" /></td>
                    <td><input type="number" name="weight_3" id="weight_3"disabled='disabled' class="form-control" placeholder="kg" /></td>
                    <td><input type="number" name="weight_4" id="weight_4"disabled='disabled' class="form-control" placeholder="kg" /></td>
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
