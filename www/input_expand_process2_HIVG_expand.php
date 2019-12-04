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

            $query = "select * from management2_hivg_expand";
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
      function actdb()
      {
        document.getElementById('m_heattem').disabled = false;
        document.getElementById('m_heattime').disabled = false;
        document.getElementById('m_heattem1').disabled = false;
        document.getElementById('m_heattime1').disabled = false;
        document.getElementById('m_icetem').disabled = false;
        document.getElementById('m_bagi').disabled = false;
        document.getElementById('m_basu').disabled = false;
        document.getElementById('m_indiameter').disabled = false;
        document.getElementById('m_inputlength').disabled = false;
        document.getElementById('m_jsblength').disabled = false;
        document.getElementById('m_jglength').disabled = false;
        document.getElementById('m_volt').disabled = false;
        document.getElementById('m_volt1').disabled = false;

      }

      function revisedb()
      {
            var m1 = $('#m_heattem').val();
            var m2 = $('#m_heattime').val();
            var m3 = $('#m_heattem1').val();
            var m4 = $('#m_heattime1').val();
            var m5 = $('#m_icetem').val();
            var m6 = $('#m_bagi').val();
            var m7 = $('#m_basu').val();
            var m8 = $('#m_indiameter').val();
            var m9 = $('#m_inputlength').val();
            var m10 = $('#m_jsblength').val();
            var m11 = $('#m_jglength').val();
            var m12 = $('#m_volt').val();
            var m13 = $('#m_volt1').val();


            window.location.href = './input_expand_process2_HIVG_expand.php?m1='+m1+'&m2='+m2+'&m3='+m3+'&m4='+m4+'&m5='+m5+'&m6='+m6+'&m7='+m7+'&m8='+m8+'&m9='+m9+'&m10='+m10+'&m11='+m11+'&m12='+m12+'&m13='+m13;

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


              $sql = "update management2_hivg_expand set
              m_heattem='$m1',m_heattime='$m2',m_heattem1='$m3',m_heattime1='$m4',m_icetem='$m5',m_bagi='$m6',m_basu='$m7',m_indiameter='$m8',m_inputlength='$m9',m_jsblength='$m10',m_jglength='$m11',m_volt='$m12',m_volt1='$m13'
               where m_product='1'";
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
          <li class="breadcrumb-item active">제 확관2 호기</li>
        </ol>
        <ol class="bread">
          <a class="btn btn-outline-secondary" href="input_expand_process2_HIVG.php">HIVG</a>
          <a class="btn btn-outline-secondary" href="input_expand_process2_HIVP.php">HIVP</a>


        </ol>
        <ol class="bread">
          <a class="btn btn-outline-secondary" href="input_expand_process2_HIVG_work.php">작업일지</a>
          <a class="btn btn-outline-secondary" href="input_expand_process2_HIVG_expand.php">확관성형공정관리일지</a>


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
          <a id="clock1" class="btn btn-dark float-right clocks" href="input_expand_process2_HIVG_expand.php">01:00~06:00</a>
          <a id="clock2" class="btn btn-dark float-right clocks" href="input_expand_process2_HIVG_expand.php">19:00~24:00</a>
          <a id="clock3" class="btn btn-dark float-right clocks" href="input_expand_process2_HIVG_expand.php">13:00~18:00</a>
          <a id="clock4" class="btn btn-dark float-right clocks" href="input_expand_process2_HIVG_expand.php">08:00~12:00</a>
        </ol>
        <br/><br/>

        <form method='post' action='write_expand_process2_HIVG_expand.php'>
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
                <th rowspan="2" colspan="3">관리항목/점검치</th>

                <td>
                    <input type="button" class="btn btn-outline-danger float-right" id='revise' onclick="revisedb()" name='revise' value="수정">
                    <input type="button" class="btn btn-outline-dark float-right" id='act' onclick="actdb()" name='act' value="입력 활성화">
                  </td>
                <th>1회</th>
              </tr>
              <tr>
                <th></th>
                <td><input type="time" name="input_time" id="input_time" class="form-control" placeholder="입력 시간" /></td>
              </tr>
              <tr>
                <th rowspan="7">확관 성형</th>
                <th rowspan="2">1차가열</th>
                <th>가열온도</th>
                <th><input type="text" name="m_heattem" id="m_heattem" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="heattem" id="heattem" class="form-control"  step="0.01"placeholder="가열온도" /></td>
              </tr>
              <tr>
                <th>가열시간</th>
                <th><input type="text" name="m_heattime" id="m_heattime" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="heattime" id="heattime" class="form-control" step="0.01" placeholder="가열시간" /></td>
              </tr>
              <tr>
                <th rowspan="2">2차가열</th>
                <th>가열온도</th>
                <th><input type="text" name="m_heattem1" id="m_heattem1" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="heattem1" id="heattem1" class="form-control" step="0.01" placeholder="가열온도" /></td>
              </tr>
              <tr>
                <th>가열시간</th>
                <th><input type="text" name="m_heattime1" id="m_heattime1" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="heattime1" id="heattime1" class="form-control" step="0.01" placeholder="가열시간" /></td>
              </tr>
              <tr>
                  <th rowspan="3">냉각시간</th>
                  <th>급수</th>
                  <th><input type="text" name="m_icetem" id="m_icetem" disabled='disabled' class="form-control"/></th>
                  <td><input type="number" name="icetem" id="icetem" class="form-control" step="0.01" placeholder="가열온도" /></td>
              </tr>
              <tr>

                  <th>배기</th>
                  <th><input type="text" name="m_bagi" id="m_bagi" disabled='disabled' class="form-control"/></th>
                  <td><input type="number" name="bagi" id="bagi" class="form-control" step="0.01" placeholder="가열온도" /></td>
              </tr>
              <tr>

                  <th>배수</th>
                  <th><input type="text" name="m_basu" id="m_basu" disabled='disabled' class="form-control"/></th>
                  <td><input type="number" name="basu" id="basu" class="form-control" step="0.01" placeholder="가열온도" /></td>
              </tr>
              <tr>
                <th rowspan="6">중간검사</th>
                <th colspan="3">겉모양/모양</th>
                <td><input type="text" name="look" id="look" class="form-control" placeholder="양호" /></td>
              </tr>
              <tr>
                <th colspan="3">관의 색</th>
                <td><input type="text" name="color" id="color" class="form-control" placeholder="색" /></td>
              </tr>
              <tr>
                <th colspan="2">접속부안지름</th>
                <th><input type="text" name="m_indiameter" id="m_indiameter" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="indiameter" id="indiameter" class="form-control" step="0.01" placeholder="길이" /></td>
              </tr>
              <tr>
                <th colspan="2">접합길이</th>
                <th><input type="text" name="m_inputlength" id="m_inputlength" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="inputlength" id="inputlength" class="form-control" step="0.01" placeholder="길이" /></td>
              </tr>
              <tr>
                <th colspan="2">접속부길이</th>
                <th><input type="text" name="m_jsblength" id="m_jsblength" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="jsblength" id="jsblength" class="form-control" step="0.01" placeholder="길이" /></td>
              </tr>
              <tr>
                <th colspan="2">직관부 길이(확관부제외)</th>
                <th><input type="text" name="m_jglength" id="m_jglength" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="jglength" id="jglength" class="form-control" step="0.01" placeholder="길이" /></td>
              </tr>
              <tr>
                <th rowspan="2">기타</th>
                <th>1차가열</th>
                <th >내부히타전압</th>
                <th><input type="text" name="m_volt" id="m_volt" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="volt" id="volt" class="form-control"  step="0.01"placeholder="길이" /></td>


              </tr>
              <tr>

                <th>2차가열</th>
                <th >내부히타전압</th>
                <th><input type="text" name="m_volt1" id="m_volt1" disabled='disabled' class="form-control"/></th>
                <td><input type="number" name="volt1" id="volt1" class="form-control" step="0.01" placeholder="길이" /></td>


              </tr>
              <tr>
                <th colspan="4">문제점 및 비고</th>
                <td colspan="1"><input type="text" name="wrong" id="wrong" class="form-control" placeholder="입력" /></td>
              </tr>
            </thead>
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
