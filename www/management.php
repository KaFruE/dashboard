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

  <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.0.min.js" ></script>
  <script type="text/javascript">
  $(document).ready(function(){
     <?php
         header("Content-Type:text/html;charset=utf-8");
         $connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

         $dt = date("Y-m-d");

         $query11_1 = "SELECT * FROM hogi01_press_hivg";
         $query11_11 = "SELECT * FROM hogi01_press_hivp";
         $query11_2 = "SELECT * FROM hogi02_press";
         $query11_3 = "SELECT * FROM hogi03_press";
         $query11_4 = "SELECT * FROM hogi04_press";
         $query11_5 = "SELECT * FROM hogi05_press";
         $query11_6 = "SELECT * FROM hogi06_press";
         $query11_7 = "SELECT * FROM hogi07_press";

         $query12_1 = "SELECT * FROM hogi01_cut_hivg";
         $query12_11 = "SELECT * FROM hogi01_cut_hivp";
         $query12_2 = "SELECT * FROM hogi02_cut";
         $query12_3 = "SELECT * FROM hogi03_cut";
         $query12_4 = "SELECT * FROM hogi04_cut";
         $query12_5 = "SELECT * FROM hogi05_cut";
         $query12_6 = "SELECT * FROM hogi06_cut";
         $query12_7 = "SELECT * FROM hogi07_cut";

         $query13_1 = "SELECT * FROM hogi01_count";
         $query13_2 = "SELECT * FROM hogi02_count";
         $query13_3 = "SELECT * FROM hogi03_count";
         $query13_4 = "SELECT * FROM hogi04_count";
         $query13_5 = "SELECT * FROM hogi05_count";
         $query13_6 = "SELECT * FROM hogi06_count";
         $query13_7 = "SELECT * FROM hogi07_count";

         $query14_1 = "SELECT * FROM hogi01_other";
         $query14_2 = "SELECT * FROM hogi02_other";
         $query14_3 = "SELECT * FROM hogi03_other";
         $query14_4 = "SELECT * FROM hogi04_other";
         $query14_5 = "SELECT * FROM hogi05_other";
         $query14_6 = "SELECT * FROM hogi06_other";
         $query14_7 = "SELECT * FROM hogi07_other";

         $query15_1 = "SELECT * FROM hogi01_mix";
         $query15_2 = "SELECT * FROM hogi02_mix";
         $query15_3 = "SELECT * FROM hogi03_mix";
         $query15_4 = "SELECT * FROM hogi04_mix";
         $query15_5 = "SELECT * FROM hogi05_mix";
         $query15_6 = "SELECT * FROM hogi06_mix";
         $query15_7 = "SELECT * FROM hogi07_mix";

         $result11_1 = $connect->query($query11_1);
         $result11_11 = $connect->query($query11_11);
         $result11_2 = $connect->query($query11_2);
         $result11_3 = $connect->query($query11_3);
         $result11_4 = $connect->query($query11_4);
         $result11_5 = $connect->query($query11_5);
         $result11_6 = $connect->query($query11_6);
         $result11_7 = $connect->query($query11_7);

         $result12_1 = $connect->query($query12_1);
         $result12_11 = $connect->query($query12_11);
         $result12_2 = $connect->query($query12_2);
         $result12_3 = $connect->query($query12_3);
         $result12_4 = $connect->query($query12_4);
         $result12_5 = $connect->query($query12_5);
         $result12_6 = $connect->query($query12_6);
         $result12_7 = $connect->query($query12_7);

         $result13_1 = $connect->query($query13_1);
         $result13_2 = $connect->query($query13_2);
         $result13_3 = $connect->query($query13_3);
         $result13_4 = $connect->query($query13_4);
         $result13_5 = $connect->query($query13_5);
         $result13_6 = $connect->query($query13_6);
         $result13_7 = $connect->query($query13_7);

         $result14_1 = $connect->query($query14_1);
         $result14_2 = $connect->query($query14_2);
         $result14_3 = $connect->query($query14_3);
         $result14_4 = $connect->query($query14_4);
         $result14_5 = $connect->query($query14_5);
         $result14_6 = $connect->query($query14_6);
         $result14_7 = $connect->query($query14_7);

         $result15_1 = $connect->query($query15_1);
         $result15_2 = $connect->query($query15_2);
         $result15_3 = $connect->query($query15_3);
         $result15_4 = $connect->query($query15_4);
         $result15_5 = $connect->query($query15_5);
         $result15_6 = $connect->query($query15_6);
         $result15_7 = $connect->query($query15_7);

         $row11_1=mysqli_num_rows($result11_1);
         $row11_11=mysqli_num_rows($result11_11);
         $row11_2=mysqli_num_rows($result11_2);
         $row11_3=mysqli_num_rows($result11_3);
         $row11_4=mysqli_num_rows($result11_4);
         $row11_5=mysqli_num_rows($result11_5);
         $row11_6=mysqli_num_rows($result11_6);
         $row11_7=mysqli_num_rows($result11_7);

         $row12_1=mysqli_num_rows($result12_1);
         $row12_11=mysqli_num_rows($result12_11);
         $row12_2=mysqli_num_rows($result12_2);
         $row12_3=mysqli_num_rows($result12_3);
         $row12_4=mysqli_num_rows($result12_4);
         $row12_5=mysqli_num_rows($result12_5);
         $row12_6=mysqli_num_rows($result12_6);
         $row12_7=mysqli_num_rows($result12_7);

         $row13_1=mysqli_num_rows($result13_1);
         $row13_2=mysqli_num_rows($result13_2);
         $row13_3=mysqli_num_rows($result13_3);
         $row13_4=mysqli_num_rows($result13_4);
         $row13_5=mysqli_num_rows($result13_5);
         $row13_6=mysqli_num_rows($result13_6);
         $row13_7=mysqli_num_rows($result13_7);

         $row14_1=mysqli_num_rows($result14_1);
         $row14_2=mysqli_num_rows($result14_2);
         $row14_3=mysqli_num_rows($result14_3);
         $row14_4=mysqli_num_rows($result14_4);
         $row14_5=mysqli_num_rows($result14_5);
         $row14_6=mysqli_num_rows($result14_6);
         $row14_7=mysqli_num_rows($result14_7);

         $row15_1=mysqli_num_rows($result15_1);
         $row15_2=mysqli_num_rows($result15_2);
         $row15_3=mysqli_num_rows($result15_3);
         $row15_4=mysqli_num_rows($result15_4);
         $row15_5=mysqli_num_rows($result15_5);
         $row15_6=mysqli_num_rows($result15_6);
         $row15_7=mysqli_num_rows($result15_7);

         if(!$row11_1){
           $row11_1 = 0;
         }
         if(!$row11_11){
           $row11_11 = 0;
         }
         if(!$row11_2){
           $row11_2 = 0;
         }
         if(!$row11_3){
           $row11_3 = 0;
         }
         if(!$row11_4){
           $row11_4 = 0;
         }
         if(!$row11_5){
           $row11_5 = 0;
         }
         if(!$row11_6){
           $row11_6 = 0;
         }
         if(!$row11_7){
           $row11_7 = 0;
         }

         if(!$row12_1){
           $row12_1 = 0;
         }
         if(!$row12_11){
           $row12_11 = 0;
         }
         if(!$row12_2){
           $row12_2 = 0;
         }
         if(!$row12_3){
           $row12_3 = 0;
         }
         if(!$row12_4){
           $row12_4 = 0;
         }
         if(!$row12_5){
           $row12_5 = 0;
         }
         if(!$row12_6){
           $row12_6 = 0;
         }
         if(!$row12_7){
           $row12_7 = 0;
         }

         if(!$row13_1){
           $row13_1 = 0;
         }
         if(!$row13_2){
           $row13_2 = 0;
         }
         if(!$row13_3){
           $row13_3 = 0;
         }
         if(!$row13_4){
           $row13_4 = 0;
         }
         if(!$row13_5){
           $row13_5 = 0;
         }
         if(!$row13_6){
           $row13_6 = 0;
         }
         if(!$row13_7){
           $row13_7 = 0;
         }

         if(!$row14_1){
           $row14_1 = 0;
         }
         if(!$row14_2){
           $row14_2 = 0;
         }
         if(!$row14_3){
           $row14_3 = 0;
         }
         if(!$row14_4){
           $row14_4 = 0;
         }
         if(!$row14_5){
           $row14_5 = 0;
         }
         if(!$row14_6){
           $row14_6 = 0;
         }
         if(!$row14_7){
           $row14_7 = 0;
         }

         if(!$row15_1){
           $row15_1 = 0;
         }
         if(!$row15_2){
           $row15_2 = 0;
         }
         if(!$row15_3){
           $row15_3 = 0;
         }
         if(!$row15_4){
           $row15_4 = 0;
         }
         if(!$row15_5){
           $row15_5 = 0;
         }
         if(!$row15_6){
           $row15_6 = 0;
         }
         if(!$row15_7){
           $row15_7 = 0;
         }

     ?>
   });
  </script>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
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
          <li class="active ">
            <a href="management.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="changesign.php">
              <i class="nc-icon nc-ruler-pencil"></i>
              <p>Change Sign</p>
            </a>
          </li>
          <li>
            <a href="./notifications.php">
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
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>
  <?php
    $count1 = $row11_1 + $row11_11 + $row12_1 + $row12_11 + $row13_1 + $row14_1 + $row15_1;
    $count2 = $row11_2 + $row12_2 + $row13_2 + $row14_2 + $row15_2;
    $count3 = $row11_3 + $row12_3 + $row13_3 + $row14_3 + $row15_3;
    $count4 = $row11_4 + $row12_4 + $row13_4 + $row14_4 + $row15_4;
    $count5 = $row11_5 + $row12_5 + $row13_5 + $row14_5 + $row15_5;
    $count6 = $row11_6 + $row12_6 + $row13_6 + $row14_6 + $row15_6;
    $count7 = $row11_7 + $row12_7 + $row13_7 + $row14_7 + $row15_7;
    $count = $count1 + $count2 + $count3 + $count4 + $count5 + $count6 + $count7;
  ?>

</div> -->
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
                      <p class="card-category">총 데이터 수</p>
                      <p class="card-title"><?=$count?> 개
                        <p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-chart-bar-32 text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">1호기 데이터 수</p>
                      <p class="card-title"><?=$count1?> 개
                        <p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-chart-bar-32 text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">2호기 데이터 수</p>
                      <p class="card-title"><?=$count2?> 개
                        <p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-chart-bar-32 text-info"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">3호기 데이터 수</p>
                      <p class="card-title"><?=$count3?> 개
                        <p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-chart-bar-32 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">4호기 데이터 수</p>
                      <p class="card-title"><?=$count4?> 개
                        <p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-chart-bar-32 text-secondary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">5호기 데이터 수</p>
                      <p class="card-title"><?=$count5?> 개
                        <p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-chart-bar-32 text-dark"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">6호기 데이터 수</p>
                      <p class="card-title"><?=$count6?> 개
                        <p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-chart-bar-32 text-light"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">7호기 데이터 수</p>
                      <p class="card-title"><?=$count7?> 개
                        <p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row"></div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
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
