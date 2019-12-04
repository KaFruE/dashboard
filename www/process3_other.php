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
        //$date=$_POST['date'];
        if(!$dt) {
          $dt = date('y-m-d');
        }

        $query = "select * from hogi03_other where date='$dt'";

        // where date='$date'";

        $result = $connect->query($query);


        $row=mysqli_fetch_array($result);

    ?>
    document.getElementById('product').value = "<?= $row['product']?>";
    document.getElementById('writer').value = "<?= $row['writer']?>";
    document.getElementById('workinghours_1').value= "<?= $row['workinghours_1']?>";
    document.getElementById('workinghours_2').value= "<?= $row['workinghours_2']?>";
    document.getElementById('awhilestop_1').value= "<?= $row['awhilestop_1']?>";
    document.getElementById('awhilestop_2').value= "<?= $row['awhilestop_2']?>";
    document.getElementById('checktime_1').value= "<?= $row['checktime_1']?>";
    document.getElementById('checktime_2').value= "<?= $row['checktime_2']?>";
    document.getElementById('checktime_3').value= "<?= $row['checktime_3']?>";
    document.getElementById('checktime_4').value= "<?= $row['checktime_4']?>";
    document.getElementById('checktime_5').value= "<?= $row['checktime_5']?>";
    document.getElementById('checktime_6').value= "<?= $row['checktime_6']?>";
    document.getElementById('checktime_7').value= "<?= $row['checktime_7']?>";
    document.getElementById('checktime_8').value= "<?= $row['checktime_8']?>";
    document.getElementById('checktime_9').value= "<?= $row['checktime_9']?>";
    document.getElementById('checktime_10').value= "<?= $row['checktime_10']?>";


  });

  function input_Text()
  {
    //var c1_c="1234";
    //document.c1_1.value=c1_c;
    var value = $('#date1').val();
    //document.write(value);
    window.location.href = './process3_other.php?date=' + value;

  }
  </script>

  <script type="text/javascript">

    function revisedb(){
      document.getElementById('product').disabled = false;
      document.getElementById('writer').disabled = false;
      document.getElementById('workinghours_1').disabled = false;
      document.getElementById('workinghours_2').disabled = false;
      document.getElementById('awhilestop_1').disabled = false;
      document.getElementById('awhilestop_2').disabled = false;
      document.getElementById('checktime_1').disabled = false;
      document.getElementById('checktime_2').disabled = false;
      document.getElementById('checktime_3').disabled = false;
      document.getElementById('checktime_4').disabled = false;
      document.getElementById('checktime_5').disabled = false;
      document.getElementById('checktime_6').disabled = false;
      document.getElementById('checktime_7').disabled = false;
      document.getElementById('checktime_8').disabled = false;
      document.getElementById('checktime_9').disabled = false;
      document.getElementById('checktime_10').disabled = false;

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
            <a href="process3.php">제 3 호기</a>
          </li>
          <li class="breadcrumb-item active">
            <a href="process3_other">기타</a>
          </li>

        </ol>

        <ol class="bread">
          <a class="btn btn-outline-secondary" href="process3_mix.php">배합</a>
          <a class="btn btn-outline-secondary" href="process3_press.php">압출</a>
          <a class="btn btn-outline-secondary" href="process3_cut.php">검사</a>
          <a class="btn btn-outline-secondary" href="process3_count.php">수량</a>
          <a class="btn btn-outline-secondary" href="process3_other.php">기타</a>
        </ol>


        <ol class="bread">

          <a class="btn btn-dark float-right" onclick="revisedb()" href="#">수정</a>
          <button class="btn btn-dark float-right" id='db_search' onclick="input_Text()" name='dbsearch'>검색</button>
        </ol>
        <br /><br />

        <!-- Page Content -->
        <form method='post' action='revise_process3_other.php'>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>품명</th>
                    <td><input type="text" name='product' id='product' class="form-control"disabled='disabled' placeholder="품명"/></td>
                    <th>검사일자</th>
                    <td><input type="date" name="date1" id='date1' class="form-control" placeholder="검사일자" value="<?=$dt?>"/></td>
                    <th>작성자</th>
                    <td><input type="text" name='writer' id='writer' class="form-control" disabled='disabled' placeholder="작성자" /></td>
                  </tr>
                </thead>
              </table>
            </div>

            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>작업시간(시작)</th>
                    <td><input type="time" name="workinghours_1" id="workinghours_1" class="form-control"disabled='disabled' placeholder="시 간" /></td>
                    <th>작업시간(종료)</th>
                    <td><input type="time" name="workinghours_2" id="workinghours_2" class="form-control"disabled='disabled' placeholder="시 간" /></td>
                    <th>잠깐정지시간</th>
                    <td><input type="number" name="awhilestop_1" id="awhilestop_1" class="form-control"disabled='disabled' placeholder="분" /></td>
                    <th>잠깐정지시간</th>
                    <td><input type="number" name="awhilestop_2" id="awhilestop_2" class="form-control"disabled='disabled' placeholder="분" /></td>
                  </tr>
                </thead>
            </div>


                  <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tbody>
                    <tr>
                      <th colspan="2">작업교대시 인수/인계사항</th>
                    </tr>
                    <tr>
                      <th>예열</th>
                      <td><input type="time" name="checktime_1" id="checktime_1" class="form-control"disabled='disabled' placeholder="체크시간" /></td>
                    </tr>
                    <tr>
                      <th>조정</th>
                      <td><input type="time" name="checktime_2" id="checktime_2" class="form-control"disabled='disabled' placeholder="체크시간" /></td>
                    </tr>
                    <tr>
                      <th>가동</th>
                      <td><input type="time" name="checktime_3" id="checktime_3" class="form-control"disabled='disabled' placeholder="체크시간" /></td>
                    </tr>
                    <tr>
                      <th>조정시간</th>
                      <td><input type="time" name="checktime_4" id="checktime_4" class="form-control"disabled='disabled' placeholder="체크시간" /></td>
                    </tr>
                    <tr>
                      <th>제동시간</th>
                      <td><input type="time" name="checktime_5" id="checktime_5" class="form-control"disabled='disabled' placeholder="체크시간" /></td>
                    </tr>
                  </tbody>
                  </table>
                  </div>

                  <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tbody>
                    <tr>
                      <th colspan="2">작업교대시 인수/인계사항</th>
                    </tr>
                    <tr>
                      <th>예열</th>
                      <td><input type="time" name="checktime_6" id="checktime_6" class="form-control"disabled='disabled' placeholder="체크시간" /></td>
                    </tr>
                    <tr>
                      <th>조정</th>
                      <td><input type="time" name="checktime_7" id="checktime_7" class="form-control"disabled='disabled' placeholder="체크시간" /></td>
                    </tr>
                    <tr>
                      <th>가동</th>
                      <td><input type="time" name="checktime_8" id="checktime_8" class="form-control"disabled='disabled' placeholder="체크시간" /></td>
                    </tr>
                    <tr>
                      <th>조정시간</th>
                      <td><input type="time" name="checktime_9" id="checktime_9" class="form-control"disabled='disabled' placeholder="체크시간" /></td>
                    </tr>
                    <tr>
                      <th>제동시간</th>
                      <td><input type="time" name="checktime_10" id="checktime_10" class="form-control"disabled='disabled' placeholder="체크시간" /></td>
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
