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
          $dt = date('Y-m-d');
        }

        $query = "select * from hogi01_mix where date='$dt' AND checktime_1 BETWEEN'06:00:01' AND '18:00:00'";

        // where date='$date'";

        $result = $connect->query($query);


        $row=mysqli_fetch_array($result);



        if(!$row['onemix_1'])
        {
          $row['onemix_1'] =0;
        }

        if(!$row['mixcount_1'])
        {
          $row['mixcount_1'] =0;
        }

        if(!$row['onemix_2'])
        {
          $row['onemix_2'] =0;
        }

        if(!$row['mixcount_2'])
        {
          $row['mixcount_2'] =0;
        }



    ?>
    document.getElementById('product').value = "<?= $row['product']?>";
    document.getElementById('checktime_1').value = "<?= $row['checktime_1']?>";
    document.getElementById('writer').value = "<?= $row['writer']?>";
    document.getElementById('pl100e_a_1').value= "<?= $row['pl100e_a_1']?>";
    document.getElementById('pl100e_a_2').value= "<?= $row['pl100e_a_2']?>";
    document.getElementById('pl100e_c_1').value= "<?= $row['pl100e_c_1']?>";
    document.getElementById('pl100e_c_2').value= "<?= $row['pl100e_c_2']?>";
    document.getElementById('pr_1').value= "<?= $row['pr_1']?>";
    document.getElementById('pr_2').value= "<?= $row['pr_2']?>";
    document.getElementById('sk_8000m_1').value= "<?= $row['sk_8000m_1']?>";
    document.getElementById('sk_8000m_2').value= "<?= $row['sk_8000m_2']?>";
    document.getElementById('sk_8000m_3').value= "<?= $row['sk_8000m_3']?>";
    document.getElementById('sk_8000m_4').value= "<?= $row['sk_8000m_4']?>";
    document.getElementById('cm_1').value= "<?= $row['cm_1']?>";
    document.getElementById('cm_2').value= "<?= $row['cm_2']?>";
    document.getElementById('cm_3').value= "<?= $row['cm_3']?>";
    document.getElementById('cm_4').value= "<?= $row['cm_4']?>";
    document.getElementById('sk_8000l_1').value= "<?= $row['sk_8000l_1']?>";
    document.getElementById('sk_8000l_2').value= "<?= $row['sk_8000l_2']?>";
    document.getElementById('sk_8000l_3').value= "<?= $row['sk_8000l_3']?>";
    document.getElementById('sk_8000l_4').value= "<?= $row['sk_8000l_4']?>";
    document.getElementById('sk_8000s_1').value= "<?= $row['sk_8000s_1']?>";
    document.getElementById('sk_8000s_2').value= "<?= $row['sk_8000s_2']?>";
    document.getElementById('sk_8000s_3').value= "<?= $row['sk_8000s_3']?>";
    document.getElementById('sk_8000s_4').value= "<?= $row['sk_8000s_4']?>";
    document.getElementById('sk_3000nv_1').value= "<?= $row['sk_3000nv_1']?>";
    document.getElementById('sk_3000nv_2').value= "<?= $row['sk_3000nv_2']?>";
    document.getElementById('sk_3000nv_3').value= "<?= $row['sk_3000nv_3']?>";
    document.getElementById('sk_3000nv_4').value= "<?= $row['sk_3000nv_4']?>";
    document.getElementById('sk_3100n_1').value= "<?= $row['sk_3100n_1']?>";
    document.getElementById('sk_3100n_2').value= "<?= $row['sk_3100n_2']?>";
    document.getElementById('sk_3100n_3').value= "<?= $row['sk_3100n_3']?>";
    document.getElementById('sk_3100n_4').value= "<?= $row['sk_3100n_4']?>";
    document.getElementById('we_8000_1').value= "<?= $row['we_8000_1']?>";
    document.getElementById('we_8000_2').value= "<?= $row['we_8000_2']?>";
    document.getElementById('we_8000_3').value= "<?= $row['we_8000_3']?>";
    document.getElementById('we_8000_4').value= "<?= $row['we_8000_4']?>";
    document.getElementById('mbs_1').value= "<?= $row['mbs_1']?>";
    document.getElementById('mbs_2').value= "<?= $row['mbs_2']?>";
    document.getElementById('mbs_3').value= "<?= $row['mbs_3']?>";
    document.getElementById('mbs_4').value= "<?= $row['mbs_4']?>";
    document.getElementById('pa910_1').value= "<?= $row['pa910_1']?>";
    document.getElementById('pa910_2').value= "<?= $row['pa910_2']?>";
    document.getElementById('pa910_3').value= "<?= $row['pa910_3']?>";
    document.getElementById('pa910_4').value= "<?= $row['pa910_4']?>";
    document.getElementById('d2t_1').value= "<?= $row['d2t_1']?>";
    document.getElementById('d2t_2').value= "<?= $row['d2t_2']?>";
    document.getElementById('d2t_3').value= "<?= $row['d2t_3']?>";
    document.getElementById('d2t_4').value= "<?= $row['d2t_4']?>";
    document.getElementById('jd_1').value= "<?= $row['jd_1']?>";
    document.getElementById('jd_2').value= "<?= $row['jd_2']?>";
    document.getElementById('jd_3').value= "<?= $row['jd_3']?>";
    document.getElementById('jd_4').value= "<?= $row['jd_4']?>";
    document.getElementById('sn1_1').value= "<?= $row['sn1_1']?>";
    document.getElementById('sn1_2').value= "<?= $row['sn1_2']?>";
    document.getElementById('sn1_3').value= "<?= $row['sn1_3']?>";
    document.getElementById('sn1_4').value= "<?= $row['sn1_4']?>";
    document.getElementById('sn2_1').value= "<?= $row['sn2_1']?>";
    document.getElementById('sn2_2').value= "<?= $row['sn2_2']?>";
    document.getElementById('sn2_3').value= "<?= $row['sn2_3']?>";
    document.getElementById('sn2_4').value= "<?= $row['sn2_4']?>";
    document.getElementById('yc34_1').value= "<?= $row['yc34_1']?>";
    document.getElementById('yc34_2').value= "<?= $row['yc34_2']?>";
    document.getElementById('yc34_3').value= "<?= $row['yc34_3']?>";
    document.getElementById('yc34_4').value= "<?= $row['yc34_4']?>";
    document.getElementById('nt3_1').value= "<?= $row['nt3_1']?>";
    document.getElementById('nt3_2').value= "<?= $row['nt3_2']?>";
    document.getElementById('nt3_3').value= "<?= $row['nt3_3']?>";
    document.getElementById('nt3_4').value= "<?= $row['nt3_4']?>";
    document.getElementById('pl100n_1').value= "<?= $row['pl100n_1']?>";
    document.getElementById('pl100n_2').value= "<?= $row['pl100n_2']?>";
    document.getElementById('pl100n_3').value= "<?= $row['pl100n_3']?>";
    document.getElementById('pl100n_4').value= "<?= $row['pl100n_4']?>";
    document.getElementById('mi_1').value= "<?= $row['mi_1']?>";
    document.getElementById('mi_2').value= "<?= $row['mi_2']?>";
    document.getElementById('mi_3').value= "<?= $row['mi_3']?>";
    document.getElementById('mi_4').value= "<?= $row['mi_4']?>";
    document.getElementById('ls130_1').value= "<?= $row['ls130_1']?>";
    document.getElementById('ls130_2').value= "<?= $row['ls130_2']?>";
    document.getElementById('ls130_3').value= "<?= $row['ls130_3']?>";
    document.getElementById('ls130_4').value= "<?= $row['ls130_4']?>";
    document.getElementById('onemix_1').value= "<?= $row['onemix_1']?>";
    document.getElementById('onemix_2').value= "<?= $row['onemix_2']?>";
    document.getElementById('mixcount_1').value= "<?= $row['mixcount_1']?>";
    document.getElementById('mixcount_2').value= "<?= $row['mixcount_2']?>";
    document.getElementById('mixamount_1').value= <?= $row['onemix_1']?>*<?=$row['mixcount_1']?>;
    document.getElementById('mixamount_2').value= <?= $row['onemix_2']?>*<?=$row['mixcount_2']?>;
    document.getElementById('mixtime_1').value= "<?= $row['mixtime_1']?>";
    document.getElementById('mixtime_2').value= "<?= $row['mixtime_2']?>";
    document.getElementById('mixdegree_1').value= "<?= $row['mixdegree_1']?>";
    document.getElementById('mixdegree_2').value= "<?= $row['mixdegree_2']?>";




  });

  function input_Text()
  {
    //var c1_c="1234";
    //document.c1_1.value=c1_c;
    var value = $('#date1').val();
    //document.write(value);
    window.location.href = './process1_mix_1.php?date=' + value;

  }
  </script>

  <script type="text/javascript">

    function revisedb(){

      document.getElementById('product').disabled = false;
      document.getElementById('checktime_1').disabled = false;
      document.getElementById('writer').disabled = false;
      document.getElementById('pl100e_a_1').disabled = false;
      document.getElementById('pl100e_a_2').disabled = false;
      document.getElementById('pl100e_c_1').disabled = false;
      document.getElementById('pl100e_c_2').disabled = false;
      document.getElementById('pr_1').disabled = false;
      document.getElementById('pr_2').disabled = false;
      document.getElementById('sk_8000m_1').disabled = false;
      document.getElementById('sk_8000m_2').disabled = false;
      document.getElementById('sk_8000m_3').disabled = false;
      document.getElementById('sk_8000m_4').disabled = false;
      document.getElementById('cm_1').disabled = false;
      document.getElementById('cm_2').disabled = false;
      document.getElementById('cm_3').disabled = false;
      document.getElementById('cm_4').disabled = false;
      document.getElementById('sk_8000l_1').disabled = false;
      document.getElementById('sk_8000l_2').disabled = false;
      document.getElementById('sk_8000l_3').disabled = false;
      document.getElementById('sk_8000l_4').disabled = false;
      document.getElementById('sk_8000s_1').disabled = false;
      document.getElementById('sk_8000s_2').disabled = false;
      document.getElementById('sk_8000s_3').disabled = false;
      document.getElementById('sk_8000s_4').disabled = false;
      document.getElementById('sk_3000nv_1').disabled = false;
      document.getElementById('sk_3000nv_2').disabled = false;
      document.getElementById('sk_3000nv_3').disabled = false;
      document.getElementById('sk_3000nv_4').disabled = false;
      document.getElementById('sk_3100n_1').disabled = false;
      document.getElementById('sk_3100n_2').disabled = false;
      document.getElementById('sk_3100n_3').disabled = false;
      document.getElementById('sk_3100n_4').disabled = false;
      document.getElementById('we_8000_1').disabled = false;
      document.getElementById('we_8000_2').disabled = false;
      document.getElementById('we_8000_3').disabled = false;
      document.getElementById('we_8000_4').disabled = false;
      document.getElementById('mbs_1').disabled = false;
      document.getElementById('mbs_2').disabled = false;
      document.getElementById('mbs_3').disabled = false;
      document.getElementById('mbs_4').disabled = false;
      document.getElementById('pa910_1').disabled = false;
      document.getElementById('pa910_2').disabled = false;
      document.getElementById('pa910_3').disabled = false;
      document.getElementById('pa910_4').disabled = false;
      document.getElementById('d2t_1').disabled = false;
      document.getElementById('d2t_2').disabled = false;
      document.getElementById('d2t_3').disabled = false;
      document.getElementById('d2t_4').disabled = false;
      document.getElementById('jd_1').disabled = false;
      document.getElementById('jd_2').disabled = false;
      document.getElementById('jd_3').disabled = false;
      document.getElementById('jd_4').disabled = false;
      document.getElementById('sn1_1').disabled = false;
      document.getElementById('sn1_2').disabled = false;
      document.getElementById('sn1_3').disabled = false;
      document.getElementById('sn1_4').disabled = false;
      document.getElementById('sn2_1').disabled = false;
      document.getElementById('sn2_2').disabled = false;
      document.getElementById('sn2_3').disabled = false;
      document.getElementById('sn2_4').disabled = false;
      document.getElementById('yc34_1').disabled = false;
      document.getElementById('yc34_2').disabled = false;
      document.getElementById('yc34_3').disabled = false;
      document.getElementById('yc34_4').disabled = false;
      document.getElementById('nt3_1').disabled = false;
      document.getElementById('nt3_2').disabled = false;
      document.getElementById('nt3_3').disabled = false;
      document.getElementById('nt3_4').disabled = false;
      document.getElementById('pl100n_1').disabled = false;
      document.getElementById('pl100n_2').disabled = false;
      document.getElementById('pl100n_3').disabled = false;
      document.getElementById('pl100n_4').disabled = false;
      document.getElementById('mi_1').disabled = false;
      document.getElementById('mi_2').disabled = false;
      document.getElementById('mi_3').disabled = false;
      document.getElementById('mi_4').disabled = false;
      document.getElementById('ls130_1').disabled = false;
      document.getElementById('ls130_2').disabled = false;
      document.getElementById('ls130_3').disabled = false;
      document.getElementById('ls130_4').disabled = false;
      document.getElementById('onemix_1').disabled = false;
      document.getElementById('onemix_2').disabled = false;
      document.getElementById('mixcount_1').disabled = false;
      document.getElementById('mixcount_2').disabled = false;
      document.getElementById('mixtime_1').disabled = false;
      document.getElementById('mixtime_2').disabled = false;
      document.getElementById('mixdegree_1').disabled = false;
      document.getElementById('mixdegree_2').disabled = false;

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
            <a href="process1_mix">배합</a>
          </li>

        </ol>

        <ol class="bread">
          <a class="btn btn-outline-secondary" href="process1_mix.php">배합</a>
          <a class="btn btn-outline-secondary" href="process1_press.php">압출</a>
          <a class="btn btn-outline-secondary" href="process1_cut.php">검사</a>
          <a class="btn btn-outline-secondary" href="process1_count.php">수량</a>
          <a class="btn btn-outline-secondary" href="process1_other.php">기타</a>
        </ol>

        <ol class="bread">
          <a class="btn btn-outline-danger" href="process1_mix_1.php">주간</a>
          <a class="btn btn-outline-primary" href="process1_mix_2.php">야간</a>


        </ol>


        <ol class="bread">

          <a class="btn btn-dark float-right" onclick="revisedb()" href="#">수정</a>
          <button class="btn btn-dark float-right" id='db_search' onclick="input_Text()" name='dbsearch'>검색</button>
        </ol>
        <br /><br />

        <!-- Page Content -->
        <form method='post' action='revise_process1_mix.php'>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>품명</th>
                  <td><input type="text" name="product" id="product" class="form-control"disabled='disabled' placeholder="품 명" /></td>
                  <th>검사일자</th>
                  <td><input type="date" name="date1" id='date1' class="form-control" placeholder="검사일자" value="<?=$dt?>"/></td>
                  <th>체크시간</th>
                  <td><input type="time" name="checktime_1" id="checktime_1" class="form-control" disabled='disabled' placeholder="체크시간" /></td>
                  <th>작성자</th>
                  <td><input type="text" name="writer" id="writer" class="form-control"disabled='disabled' placeholder="작성자" /></td>
                </tr>
              </thead>
            </table>
          </div>

          <!-- Page Content -->
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr class='table-under-import'>
                   <th rowspan="3" colspan="2">구분 / 생산 호기</th>
                   <th colspan="4">주간 (1회사용량)</th>
                </tr>
                <tr class='table-under-import'>
                  <th colspan="4">1호기</th>
                </tr>
                <tr class='table-under-import'>
                  <th colspan="2">중간층</th>
                  <th colspan="2">스킨층</th>
                </tr>
              </thead>
              <tbody>
                 <tr class='table-under'>
                   <th colspan="2" class='table-under-import'>PVC LS-100E(A싸이로)</th>
                   <td colspan="2"><input type="number" name="pl100e_a_1" id="pl100e_a_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td colspan="2"><input type="number" name="pl100e_a_2" id="pl100e_a_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th colspan="2" class='table-under-import'>PVC LS-100E(C싸이로)</th>
                   <td colspan="2"><input type="number" name="pl100e_c_1" id="pl100e_c_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td colspan="2"><input type="number" name="pl100e_c_2" id="pl100e_c_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th colspan="2" class='table-under-import'>PVC RESIN</th>
                   <td colspan="2"><input type="number" name="pr_1" id="pr_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td colspan="2"><input type="number" name="pr_2" id="pr_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th colspan="2"></th>
                   <th>kg</th>
                   <th>phr</th>
                   <th>kg</th>
                   <th>phr</th>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import' rowspan="6">복합 안정제</th>
                   <th class='table-under-import'>SK-8000M</th>
                   <td><input type="number" name="sk_8000m_1" id="sk_8000m_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sk_8000m_2" id="sk_8000m_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sk_8000m_3" id="sk_8000m_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sk_8000m_4" id="sk_8000m_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import'>CPVC-M</th>
                   <td><input type="number" name="cm_1" id="cm_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="cm_2" id="cm_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="cm_3" id="cm_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="cm_4" id="cm_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import'>SK-8000L</th>
                   <td><input type="number" name="sk_8000l_1" id="sk_8000l_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sk_8000l_2" id="sk_8000l_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sk_8000l_3" id="sk_8000l_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sk_8000l_4" id="sk_8000l_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import'>SK-8000S</th>
                   <td><input type="number" name="sk_8000s_1" id="sk_8000s_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sk_8000s_2" id="sk_8000s_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sk_8000s_3" id="sk_8000s_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sk_8000s_4" id="sk_8000s_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import'>SK-3000NV</th>
                   <td><input type="number" name="sk_3000nv_1" id="sk_3000nv_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sk_3000nv_2" id="sk_3000nv_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sk_3000nv_3" id="sk_3000nv_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sk_3000nv_4" id="sk_3000nv_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import'>SK-3100N</th>
                   <td><input type="number" name="sk_3100n_1" id="sk_3100n_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sk_3100n_2" id="sk_3100n_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sk_3100n_3" id="sk_3100n_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sk_3100n_4" id="sk_3100n_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import' rowspan="2">충격 보강제</th>
                   <th class='table-under-import'>WEIPREN8000</th>
                   <td><input type="number" name="we_8000_1" id="we_8000_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="we_8000_2" id="we_8000_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="we_8000_3" id="we_8000_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="we_8000_4" id="we_8000_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import'>MBS</th>
                   <td><input type="number" name="mbs_1" id="mbs_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="mbs_2" id="mbs_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="mbs_3" id="mbs_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="mbs_4" id="mbs_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import'>가공 조제</th>
                   <th class='table-under-import'>PA 910</th>
                   <td><input type="number" name="pa910_1" id="pa910_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="pa910_2" id="pa910_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="pa910_3" id="pa910_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="pa910_4" id="pa910_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import'>충진제</th>
                   <th class='table-under-import'>D-2T</th>
                   <td><input type="number" name="d2t_1" id="d2t_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="d2t_2" id="d2t_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="d2t_3" id="d2t_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="d2t_4" id="d2t_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import'>지당</th>
                   <th class='table-under-import'></th>
                   <td><input type="number" name="jd_1" id="jd_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="jd_2" id="jd_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="jd_3" id="jd_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="jd_4" id="jd_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import' rowspan="4">안료</th>
                   <th class='table-under-import'>SN1(진청)</th>
                   <td><input type="number" name="sn1_1" id="sn1_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sn1_2" id="sn1_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sn1_3" id="sn1_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sn1_4" id="sn1_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import'>SN2(진청)</th>
                   <td><input type="number" name="sn2_1" id="sn2_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sn2_2" id="sn2_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sn2_3" id="sn2_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="sn2_4" id="sn2_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import'>YC-34(파랑)</th>
                   <td><input type="number" name="yc34_1" id="yc34_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="yc34_2" id="yc34_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="yc34_3" id="yc34_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="yc34_4" id="yc34_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import'>NT-3(갈색)</th>
                   <td><input type="number" name="nt3_1" id="nt3_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="nt3_2" id="nt3_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="nt3_3" id="nt3_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="nt3_4" id="nt3_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import' colspan="2">가동원료</th>
                   <td colspan="2"></td>
                   <td colspan="2"></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import' colspan="2">PVC LS100N</th>
                   <td><input type="number" name="pl100n_1" id="pl100n_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="pl100n_2" id="pl100n_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="pl100n_3" id="pl100n_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="pl100n_4" id="pl100n_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import' colspan="2">미분쇄</th>
                   <td><input type="number" name="mi_1" id="mi_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="mi_2" id="mi_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="mi_3" id="mi_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="mi_4" id="mi_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import' colspan="2">레진 LS-130</th>
                   <td><input type="number" name="ls130_1" id="ls130_1" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="ls130_2" id="ls130_2" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="ls130_3" id="ls130_3" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td><input type="number" name="ls130_4" id="ls130_4" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import' colspan="2">1회 배합량</th>
                   <td colspan="2"><input name="onemix_1" id="onemix_1" type="number" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td colspan="2"><input name="onemix_2" id="onemix_2" type="number" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import' colspan="2">총배합회수</th>
                   <td colspan="2"><input name="mixcount_1" id="mixcount_1" type="number" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td colspan="2"><input name="mixcount_2" id="mixcount_2" type="number" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import' colspan="2">총배합량(kg)</th>
                   <td colspan="2"><input name="mixamount_1" id="mixamount_1" type="number" class="form-control"disabled='disabled' placeholder="배합량" /></td>
                   <td colspan="2"><input name="mixamount_2" id="mixamount_2" type="number" class="form-control"disabled='disabled' placeholder="배합량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import' colspan="2">배합시간(분)</th>
                   <td colspan="2"><input name="mixtime_1" id="mixtime_1" type="number" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td colspan="2"><input name="mixtime_2" id="mixtime_2" type="number" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                 </tr>
                 <tr class='table-under'>
                   <th class='table-under-import' colspan="2">배합온도(℃)</th>
                   <td colspan="2"><input name="mixdegree_1" id="mixdegree_1" type="number" class="form-control"disabled='disabled' placeholder="사용량" /></td>
                   <td colspan="2"><input name="mixdegree_2" id="mixdegree_2" type="number" class="form-control"disabled='disabled' placeholder="사용량" /></td>
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
