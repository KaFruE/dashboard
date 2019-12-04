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
          $dt = date('Y-m-d');
        }

        $query = "select * from expandhogi02_hivg_work where date='$dt' AND checktime_1 BETWEEN'06:00:01' AND '18:00:00' ";

        // where date='$date'";

        $result = $connect->query($query);

        $row=mysqli_fetch_array($result);




    ?>

    document.getElementById('checktime_1').value = "<?= $row['checktime_1']?>";
    document.getElementById('writer').value = "<?= $row['writer']?>";
    document.getElementById('product_1').value = "<?= $row['product_1']?>";
    document.getElementById('warehousing_1').value= "<?= $row['warehousing_1']?>";
    document.getElementById('fail_count_1').value= "<?= $row['fail_count_1']?>";
    document.getElementById('amount_1').value= "<?= $row['amount_1']?>";
    document.getElementById('worktime_1').value= "<?= $row['worktime_1']?>";
    document.getElementById('stoptime_1').value= "<?= $row['stoptime_1']?>";
    document.getElementById('giho_1').value= "<?= $row['giho_1']?>";
    document.getElementById('failweight_1').value= "<?= $row['failweight_1']?>";
    document.getElementById('giho2_1').value= "<?= $row['giho2_1']?>";
    document.getElementById('product_2').value= "<?= $row['product_2']?>";
    document.getElementById('warehousing_2').value= "<?= $row['warehousing_2']?>";
    document.getElementById('fail_count_2').value= "<?= $row['fail_count_2']?>";
    document.getElementById('amount_2').value= "<?= $row['amount_2']?>";
    document.getElementById('worktime_2').value= "<?= $row['worktime_2']?>";
    document.getElementById('stoptime_2').value= "<?= $row['stoptime_2']?>";
    document.getElementById('giho_2').value= "<?= $row['giho_2']?>";
    document.getElementById('failweight_2').value= "<?= $row['failweight_2']?>";
    document.getElementById('giho2_2').value= "<?= $row['giho2_2']?>";
    document.getElementById('pm_1').value= "<?= $row['pm_1']?>";
    document.getElementById('br_1').value= "<?= $row['br_1']?>";
    document.getElementById('pm_2').value= "<?= $row['pm_2']?>";
    document.getElementById('br_2').value= "<?= $row['br_2']?>";


  });

  function input_Text()
  {
    //var c1_c="1234";
    //document.c1_1.value=c1_c;
    var value = $('#date1').val();
    //document.write(value);
    window.location.href = './expand_process2_HIVG_work_1.php?date=' + value;

  }
  </script>

  <script type="text/javascript">

    function revisedb(){

      document.getElementById('checktime_1').disabled = false;
      document.getElementById('writer').disabled = false;
      document.getElementById('product_1').disabled = false;
      document.getElementById('warehousing_1').disabled = false;
      document.getElementById('fail_count_1').disabled = false;
      document.getElementById('amount_1').disabled = false;
      document.getElementById('worktime_1').disabled = false;
      document.getElementById('stoptime_1').disabled = false;
      document.getElementById('giho_1').disabled = false;
      document.getElementById('failweight_1').disabled = false;
      document.getElementById('giho2_1').disabled = false;
      document.getElementById('product_2').disabled = false;
      document.getElementById('warehousing_2').disabled = false;
      document.getElementById('fail_count_2').disabled = false;
      document.getElementById('amount_2').disabled = false;
      document.getElementById('worktime_2').disabled = false;
      document.getElementById('stoptime_2').disabled = false;
      document.getElementById('giho_2').disabled = false;
      document.getElementById('failweight_2').disabled = false;
      document.getElementById('giho2_2').disabled = false;
      document.getElementById('pm_1').disabled = false;
      document.getElementById('br_1').disabled = false;
      document.getElementById('pm_2').disabled = false;
      document.getElementById('br_2').disabled = false;

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
            <a href="expand_process2.php">제 확관 2 호기</a>
          </li>
          <li class="breadcrumb-item active">
            <a href="expand_process2_work">작업일지</a>
          </li>

        </ol>
        <ol class="bread">
          <a class="btn btn-outline-secondary" href="expand_process2_HIVG.php">HIVG</a>
          <a class="btn btn-outline-secondary" href="expand_process2_HIVP.php">HIVP</a>


        </ol>
        <ol class="bread">
          <a class="btn btn-outline-secondary" href="expand_process2_HIVG_work.php">작업일지</a>
          <a class="btn btn-outline-secondary" href="expand_process2_HIVG_expand.php">확관성형공정관리일지</a>

        </ol>

        <ol class="bread">
          <a class="btn btn-outline-danger" href="expand_process2_HIVG_work_1.php">주간</a>
          <a class="btn btn-outline-primary" href="expand_process2_HIVG_work_2.php">야간</a>


        </ol>


        <ol class="bread">

          <a class="btn btn-dark float-right" onclick="revisedb()" href="#">수정</a>
          <button class="btn btn-dark float-right" id='db_search' onclick="input_Text()" name='dbsearch'>검색</button>
        </ol>
        <br /><br />

        <!-- Page Content -->
        <form method='post' action='revise_expand_process2_HIVG_work.php'>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>검사일자</th>
                  <td><input type="date" name="date1" id='date1' class="form-control" placeholder="검사일자" value="<?=$dt?>" /></td>
                  <th>체크시간</th>
                  <td><input type="time" name="checktime_1" id="checktime_1" class="form-control" disabled='disabled' placeholder="체크시간" /></td>
                  <th>주간 근무자</th>
                  <td><input type="text" name="writer" id="writer" class="form-control"disabled='disabled' placeholder="근무자" /></td>
                </tr>
              </thead>
            </table>
          </div>

          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th colspan ="2" rowspan="2">분</th>
                  <th colspan ="3"rowspan="2">품명 및 규격</th>
                  <th colspan="4">2차 생산량</th>
                  <th rowspan="2">작업시간(분)</th>
                  <th colspan="2">작업정지</th>
                  <th colspan="2">불량</th>

                </tr>
                <tr>
                  <th>입고(본)</th>
                  <th >불량(본)</th>
                  <th colspan="2" >생산량(본)</th>
                  <th>시간(분)</th>
                  <th>기호</th>
                  <th>중량(kg)</th>
                  <th>기호</th>


                </tr>
              </thead>

                <tr>
                  <th rowspan="2">공장</th>
                  <th rowspan="2">확관1</th>

                  <td colspan="3"><input type="text" name="product_1" id="product_1" class="form-control"disabled='disabled' placeholder="품명 및 규격" value= "PVC DC 300 Ø x 6370"/></td>

                  <td><input type="number" name="warehousing_1" id="warehousing_1" class="form-control"disabled='disabled' placeholder="본"/></td>
                  <td ><input type="number" name="fail_count_1" id="fail_count_1" class="form-control"disabled='disabled' placeholder="본"/></td>
                  <td colspan="2"><input type="number" name="amount_1" id="amount_1" class="form-control"disabled='disabled' placeholder="본"/></td>
                  <td><input type="number"  name="worktime_1" id="worktime_1"class="form-control"disabled='disabled' placeholder="시간(분)"/></td>
                  <td><input type="number" name="stoptime_1" id="stoptime_1" class="form-control"disabled='disabled' placeholder="시간(분)"/></td>
                  <td><input type="text" name="giho_1" id="giho_1" class="form-control"disabled='disabled' placeholder="기호"/></td>
                  <td><input type="number" name="failweight_1" id="failweight_1" class="form-control"disabled='disabled' step="0.01" placeholder="중량(kg)"/></td>
                  <td><input type="text" name="giho2_1" id="giho2_1" class="form-control"disabled='disabled' placeholder="기호"/></td>

                </tr>
                <tr>


                  <td colspan="3"><input type="text" name="product_2" id="product_2" class="form-control"disabled='disabled' placeholder="품명 및 규격"value= "PVC DC 300 Ø x 6370"/></td>

                  <td><input type="number" name="warehousing_2" id="warehousing_2" class="form-control"disabled='disabled' placeholder="본"/></td>
                  <td ><input type="number" name="fail_count_2" id="fail_count_2" class="form-control"disabled='disabled' placeholder="본"/></td>
                  <td colspan="2" ><input type="number" name="amount_2" id="amount_2" class="form-control"disabled='disabled' placeholder="본"/></td>
                  <td><input type="number"  name="worktime_2" id="worktime_2"class="form-control"disabled='disabled' placeholder="시간(분)"/></td>
                  <td><input type="number" name="stoptime_2" id="stoptime_2" class="form-control"disabled='disabled' placeholder="시간(분)"/></td>
                  <td><input type="text" name="giho_2" id="giho_2" class="form-control"disabled='disabled' placeholder="기호"/></td>
                  <td><input type="number" name="failweight_2" id="failweight_2" class="form-control" disabled='disabled' step="0.01" placeholder="중량(kg)"/></td>
                  <td><input type="text" name="giho2_2" id="giho2_2" class="form-control"disabled='disabled' placeholder="기호"/></td>

                </tr>


                   <th colspan="14">기타 보고 사항</th>

                 </tr>



                 <tr class='table-under'>
                   <th colspan="7" class='table-under-import'>품명/규격</th>

                   <th colspan="7" class='table-under-import'>불량 원인 및 조치</th>

                 </tr>
                 <tr class='table-under'>
                   <td colspan="7"><input type="text" name="pm_1" id="pm_1" class="form-control"disabled='disabled' placeholder="품명" /></td>

                   <td colspan="7"><input type="text" name="br_1" id="br_1" class="form-control"disabled='disabled' placeholder="불량 원인 및 조치" /></td>

                 </tr>

                 <tr class='table-under'>
                   <td colspan="7"><input type="text" name="pm_2" id="pm_2" class="form-control"disabled='disabled' placeholder="품명" /></td>

                   <td colspan="7"><input type="text" name="br_2" id="br_2" class="form-control"disabled='disabled' placeholder="불량 원인 및 조치" /></td>

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
