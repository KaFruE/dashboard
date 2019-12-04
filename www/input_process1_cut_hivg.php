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

            $query = "select * from management_1_cut_hivg";
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
      function actdb()
      {
        document.getElementById('m_diameter').disabled = false;
        document.getElementById('m_thick_min').disabled = false;
        document.getElementById('m_thick_max').disabled = false;
        document.getElementById('m_length').disabled = false;
        document.getElementById('m_weight').disabled = false;


      }

      function revisedb()
      {
            var m1 = $('#m_diameter').val();
            var m2 = $('#m_thick_min').val();
            var m3 = $('#m_thick_max').val();
            var m4 = $('#m_length').val();
            var m5 = $('#m_weight').val();



            window.location.href = './input_process1_cut_hivg.php?m1='+m1+'&m2='+m2+'&m3='+m3+'&m4='+m4+'&m5='+m5;

            <?php
              header("Content-Type:text/html;charset=utf-8");

              $connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

              $m1 = $_GET['m1'];
              $m2 = $_GET['m2'];
              $m3 = $_GET['m3'];
              $m4 = $_GET['m4'];
              $m5 = $_GET['m5'];



              $sql = "update management_1_cut_hivg set
              m_diameter='$m1',m_thick_min='$m2',m_thick_max='$m3',m_length='$m4',m_weight='$m5' where m_product='1'";
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
          <li class="breadcrumb-item active">
            <a href="input_process1_cut">검사</a>
          </li>
          <li class="breadcrumb-item active">HIVG</li>
        </ol>

        <ol class="bread">
          <a class="btn btn-outline-secondary" href="input_process1_mix.php">배합</a>
          <a class="btn btn-outline-secondary" href="input_process1_press.php">압출</a>
          <a class="btn btn-outline-secondary" href="input_process1_cut.php">검사</a>
          <a class="btn btn-outline-secondary" href="input_process1_count.php">수량</a>
          <a class="btn btn-outline-secondary" href="input_process1_other.php">기타</a>
        </ol>

        <ol class="bread">
          <a class="btn btn-outline-secondary" href="input_process1_cut_hivg.php">HIVG</a>
          <a class="btn btn-outline-secondary" href="input_process1_cut_hivp.php">HIVP</a>
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
          <a id="clock1" class="btn btn-dark float-right clocks" href="input_process1_cut_hivg.php">01:00~06:00</a>
          <a id="clock2" class="btn btn-dark float-right clocks" href="input_process1_cut_hivg.php">19:00~24:00</a>
          <a id="clock3" class="btn btn-dark float-right clocks" href="input_process1_cut_hivg.php">13:00~18:00</a>
          <a id="clock4" class="btn btn-dark float-right clocks" href="input_process1_cut_hivg.php">08:00~12:00</a>
        </ol>
        <br/><br/>

        <form method='post' action='write_process1_cut_hivg.php'>
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
                  <th rowspan="14">중간</th>
                  <th colspan="3">검사항목</th>
                  <th colspan="2">측정치</th>
                </tr>
                <tr>
                  <th colspan="3">겉모양</th>
                  <td colspan="2"><input type="text" name="appearance" id="appearance" class="form-control" placeholder="양호" /></td>
                </tr>
                <tr>
                  <th colspan="3">관의 색</th>
                  <td colspan="2"><input type="text" name="color" id="color" class="form-control" placeholder="색" /></td>
                </tr>
                <tr>
                  <th colspan="2">평균바깥지름 </th>
                  <th> <input type="text" name="m_diameter" id="m_diameter" disabled='disabled' class="form-control"/></th>
                  <td colspan="2"><input type="number" name="diameter" id="diameter" class="form-control"step='0.01' placeholder="바깥지름" /></td>
                </tr>
                <tr>
                  <th rowspan="2">두께(mm)</th>
                  <th>최소</th>
                  <th> <input type="text" name="m_thick_min" id="m_thick_min" disabled='disabled' class="form-control"/> 이상</th>
                  <td ><input type="number" name="thick_min" id="thick_min" class="form-control"step='0.01' placeholder="최소" /></td>
                </tr>
                <tr>

                  <th>최대</th>
                  <th> <input type="text" name="m_thick_max" id="m_thick_max" disabled='disabled' class="form-control"/></th>
                  <td ><input type="number" name="thick_max" id="thick_max" class="form-control"step='0.01' placeholder="최대" /></td>
                </tr>
                <tr>
                  <th colspan="2">직관부길이(mm)</th>
                  <th> <input type="text" name="m_length" id="m_length" disabled='disabled' class="form-control"/>mm</th>
                  <td><input type="number" name="length" id="length" class="form-control"step='0.01' placeholder="최대" /></td>
                </tr>
                <tr>
                  <th colspan="2">표시사항</th>
                  <th>규정된 표시사항</th>
                  <td><input type="text" name="ps" id="ps" class="form-control"step='0.01' placeholder="표시사항" /></td>
                </tr>
                <tr>
                  <th colspan="2">중량(kg)</th>
                  <th> <input type="text" name="m_weight" id="m_weight" disabled='disabled' class="form-control"/></th>
                  <td><input type="number" name="weight" id="weight" class="form-control"step='0.01' placeholder="kg" /></td>
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
