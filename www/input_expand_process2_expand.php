<!DOCTYPE html>
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

  <title>nuvotec dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link rel="stylesheet" href="./jquery-ui-1.12.1/jquery-ui.min.css">
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
          <li class="breadcrumb-item active">제 확관2 호기</li>
        </ol>
        <ol class="bread">
          <a class="btn btn-outline-secondary" href="input_expand_process2_work.php">작업일지</a>
          <a class="btn btn-outline-secondary" href="input_expand_process2_expand.php">확관성형공정관리일지</a>


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
          <a id="clock1" class="btn btn-dark float-right clocks" href="input_expand_process2_expand.php">01:00~06:00</a>
          <a id="clock2" class="btn btn-dark float-right clocks" href="input_expand_process2_expand.php">19:00~24:00</a>
          <a id="clock3" class="btn btn-dark float-right clocks" href="input_expand_process2_expand.php">13:00~18:00</a>
          <a id="clock4" class="btn btn-dark float-right clocks" href="input_expand_process2_expand.php">08:00~12:00</a>
        </ol>
        <br>
        <br>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>품명</th>
                <td><input type="text" class="form-control" placeholder="품 명" /></td>
                <th>검사일자</th>
                <td><input type="date" name="date" id='date1' class="form-control" placeholder="검사일자" /></td>
                <th>작성자</th>
                <td><input type="text" class="form-control" placeholder="작성자" /></td>
              </tr>
            </thead>
          </table>
        </div>

        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th rowspan="2" colspan="4">관리항목/점검치</th>
                <th>1회</th>
              </tr>
              <tr>
                <td><input type="text" class="form-control" placeholder="입력시간" /></td>
              </tr>
              <tr>
                <th rowspan="7">확관 성형</th>
                <th>정열유닛</th>
                <th>정렬길이</th>
                <th>1000±300</th>
                <td><input type="number" class="form-control" placeholder="정렬길이" /></td>
              </tr>
              <tr>
                <th rowspan="2">가열유닛</th>
                <th>가열온도</th>
                <th>150±20</th>
                <td><input type="number" class="form-control" placeholder="가열온도" /></td>
              </tr>
              <tr>
                <th>가열시간</th>
                <th>165±30</th>
                <td><input type="number" class="form-control" placeholder="가열시간" /></td>
              </tr>
              <tr>
                <th rowspan="2">성형유닛</th>
                <th>전진길이</th>
                <th>500±20</th>
                <td><input type="number" class="form-control" placeholder="전진길이" /></td>
              </tr>
              <tr>
                  <th>냉각시간</th>
                  <th>140±20</th>
                  <td><input type="number" class="form-control" placeholder="냉각시간" /></td>
              </tr>
              <tr>
                <th colspan="2">에어</th>
                <th>이상없을것</th>
                <td><input type="text" class="form-control" placeholder="이상없을것" /></td>
              </tr>
              <tr>
                <th colspan="2">냉각수온도</th>
                <th>20도이하</th>
                <td><input type="number" class="form-control" placeholder="온도" /></td>
              </tr>
              <tr>
                <th rowspan="5">중간검사</th>
                <th colspan="3">겉모양/모양</th>
                <td><input type="text" class="form-control" placeholder="양호" /></td>
              </tr>
              <tr>
                <th colspan="3">관의 색</th>
                <td><input type="text" class="form-control" placeholder="색" /></td>
              </tr>
              <tr>
                <th colspan="2">평균안지름</th>
                <th>359.5±1.8mm</th>
                <td><input type="number" class="form-control" placeholder="길이" /></td>
              </tr>
              <tr>
                <th colspan="2">삽입길이</th>
                <th>min 210mm</th>
                <td><input type="number" class="form-control" placeholder="길이" /></td>
              </tr>
              <tr>
                <th colspan="2">직관부길이(확관부제외)/th>
                <th>6000 +300mm</th>
                <td><input type="number" class="form-control" placeholder="길이" /></td>
              </tr>
              <tr>
                <th colspan="4">문제점 및 비고</th>
                <td colspan="1"><input type="text" class="form-control" placeholder="입력" /></td>
              </tr>
            </thead>
          </table>
        </div>
        <br />
        <input class="btn btn-dark btn-block" type="submit" value="저장">
        <br /><br />
        <!-- Page Content -->

      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

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
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

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
