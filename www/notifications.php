<?php
header("Content-Type:text/html;charset=utf-8");

  $connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");
  $dt = date('y-m-d');
  $query = "select * from hogi05_press ORDER BY date DESC, num ASC";
  $query1 = "select * from hogi05_cut ORDER BY date DESC, num ASC";
  $result = $connect->query($query);
  $result1 = $connect->query($query1);

  $row=mysqli_fetch_array($result);
  $row1=mysqli_fetch_array($result1);

  $a1 = $row['maintoke'];
  $a2 = $row['air_i'];
  $a3 = $row['c3'];
  $a4 = $row['jumul'];
  $a5 = $row1['weight'];
  $a6 = $row['d2'];
  $state = 0;
  $text = '';

  if($a1<=61.5)
  {
    if($a2<=0.44)
    {
      if($a4<=177.0)
      {
        $state=0;
      }
      else
      {
        $state=1;
      }
    }
    else
    {
      if($a5<=54.45)
      {
        $state=1;
      }
      else
      {
        $state=0;
      }
    }
  }
  else
  {
    if($a3<=174.5)
    {
      $state = 1;
    }
    else
    {
        if($a6<=175.5)
        {
          $state=1;
        }
        else
        {
          $state=0;
        }
    }
  }

  if($state==1)
  {
    $text = '위험';
  }
  elseif ($state==0) {
    $text = '정상';
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    뉴보텍 관리자 페이지
  </title>

  <style>
    .table-bordered{text-align: center; vertical-align: middle;}
  </style>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
        </a>
        <a href="#" class="simple-text logo-normal">
          관리자
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="management.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="changesign.php">
            <a href="changesign.php">
              <i class="nc-icon nc-ruler-pencil"></i>
              <p>Change Sign</p>
            </a>
          </li>
          <li>
            <a href="active ">
              <i class="nc-icon nc-bell-55"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="nc-icon nc-tile-56"></i>
              <p>Table List</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">뉴보텍 관리자 페이지</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <a class="navbar-brand" href="main.php">Back to DashBoard</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">5호기 PVC DC 300</p>
                      <p class="card-title"> 상태 : <?=$text?>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>
</div> -->
</div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
