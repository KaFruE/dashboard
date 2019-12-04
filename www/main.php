<!DOCTYPE.html>
<html lang="ko">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php
    session_start();
    if(!isset($_SESSION['userid']))
    {
  	   header('Location: ./index.php');
     }
  ?>
  <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.0.min.js" ></script>
  <script type="text/javascript">
  $(document).ready(function(){
     <?php
         header("Content-Type:text/html;charset=utf-8");
         $connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

         $dt = date("Y-m-d");

         $query11_1 = "SELECT * FROM hogi01_press_hivg WHERE DATE='$dt'";
         $query11_11 = "SELECT * FROM hogi01_press_hivp WHERE DATE='$dt'";
         $query11_2 = "SELECT * FROM hogi02_press WHERE DATE='$dt'";
         $query11_3 = "SELECT * FROM hogi03_press WHERE DATE='$dt'";
         $query11_4 = "SELECT * FROM hogi04_press WHERE DATE='$dt'";
         $query11_5 = "SELECT * FROM hogi05_press WHERE DATE='$dt'";
         $query11_6 = "SELECT * FROM hogi06_press WHERE DATE='$dt'";
         $query11_7 = "SELECT * FROM hogi07_press WHERE DATE='$dt'";

         $query12_1 = "SELECT * FROM hogi01_cut_hivg WHERE DATE='$dt'";
         $query12_11 = "SELECT * FROM hogi01_cut_hivp WHERE DATE='$dt'";
         $query12_2 = "SELECT * FROM hogi02_cut WHERE DATE='$dt'";
         $query12_3 = "SELECT * FROM hogi03_cut WHERE DATE='$dt'";
         $query12_4 = "SELECT * FROM hogi04_cut WHERE DATE='$dt'";
         $query12_5 = "SELECT * FROM hogi05_cut WHERE DATE='$dt'";
         $query12_6 = "SELECT * FROM hogi06_cut WHERE DATE='$dt'";
         $query12_7 = "SELECT * FROM hogi07_cut WHERE DATE='$dt'";

         $query13_1 = "SELECT * FROM hogi01_count WHERE DATE='$dt'";
         $query13_2 = "SELECT * FROM hogi02_count WHERE DATE='$dt'";
         $query13_3 = "SELECT * FROM hogi03_count WHERE DATE='$dt'";
         $query13_4 = "SELECT * FROM hogi04_count WHERE DATE='$dt'";
         $query13_5 = "SELECT * FROM hogi05_count WHERE DATE='$dt'";
         $query13_6 = "SELECT * FROM hogi06_count WHERE DATE='$dt'";
         $query13_7 = "SELECT * FROM hogi07_count WHERE DATE='$dt'";

         $query14_1 = "SELECT * FROM hogi01_other WHERE DATE='$dt'";
         $query14_2 = "SELECT * FROM hogi02_other WHERE DATE='$dt'";
         $query14_3 = "SELECT * FROM hogi03_other WHERE DATE='$dt'";
         $query14_4 = "SELECT * FROM hogi04_other WHERE DATE='$dt'";
         $query14_5 = "SELECT * FROM hogi05_other WHERE DATE='$dt'";
         $query14_6 = "SELECT * FROM hogi06_other WHERE DATE='$dt'";
         $query14_7 = "SELECT * FROM hogi07_other WHERE DATE='$dt'";

         $query15_1 = "SELECT * FROM hogi01_mix WHERE DATE='$dt'";
         $query15_2 = "SELECT * FROM hogi02_mix WHERE DATE='$dt'";
         $query15_3 = "SELECT * FROM hogi03_mix WHERE DATE='$dt'";
         $query15_4 = "SELECT * FROM hogi04_mix WHERE DATE='$dt'";
         $query15_5 = "SELECT * FROM hogi05_mix WHERE DATE='$dt'";
         $query15_6 = "SELECT * FROM hogi06_mix WHERE DATE='$dt'";
         $query15_7 = "SELECT * FROM hogi07_mix WHERE DATE='$dt'";

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

         $query1_1 = "SELECT * FROM hogi01_press_hivg";
         $query1_11 = "SELECT * FROM hogi01_press_hivp";
         $query1_2 = "SELECT * FROM hogi02_press";
         $query1_3 = "SELECT * FROM hogi03_press";
         $query1_4 = "SELECT * FROM hogi04_press";
         $query1_5 = "SELECT * FROM hogi05_press";
         $query1_6 = "SELECT * FROM hogi06_press";
         $query1_7 = "SELECT * FROM hogi07_press";

         $query2_1 = "SELECT * FROM hogi01_cut_hivg";
         $query2_11 = "SELECT * FROM hogi01_cut_hivp";
         $query2_2 = "SELECT * FROM hogi02_cut";
         $query2_3 = "SELECT * FROM hogi03_cut";
         $query2_4 = "SELECT * FROM hogi04_cut";
         $query2_5 = "SELECT * FROM hogi05_cut";
         $query2_6 = "SELECT * FROM hogi06_cut";
         $query2_7 = "SELECT * FROM hogi07_cut";

         $query3_1 = "SELECT * FROM hogi01_count";
         $query3_2 = "SELECT * FROM hogi02_count";
         $query3_3 = "SELECT * FROM hogi03_count";
         $query3_4 = "SELECT * FROM hogi04_count";
         $query3_5 = "SELECT * FROM hogi05_count";
         $query3_6 = "SELECT * FROM hogi06_count";
         $query3_7 = "SELECT * FROM hogi07_count";

         $query4_1 = "SELECT * FROM hogi01_other";
         $query4_2 = "SELECT * FROM hogi02_other";
         $query4_3 = "SELECT * FROM hogi03_other";
         $query4_4 = "SELECT * FROM hogi04_other";
         $query4_5 = "SELECT * FROM hogi05_other";
         $query4_6 = "SELECT * FROM hogi06_other";
         $query4_7 = "SELECT * FROM hogi07_other";

         $query5_1 = "SELECT * FROM hogi01_mix";
         $query5_2 = "SELECT * FROM hogi02_mix";
         $query5_3 = "SELECT * FROM hogi03_mix";
         $query5_4 = "SELECT * FROM hogi04_mix";
         $query5_5 = "SELECT * FROM hogi05_mix";
         $query5_6 = "SELECT * FROM hogi06_mix";
         $query5_7 = "SELECT * FROM hogi07_mix";

         $result1_1 = $connect->query($query1_1);
         $result1_11 = $connect->query($query1_11);
         $result1_2 = $connect->query($query1_2);
         $result1_3 = $connect->query($query1_3);
         $result1_4 = $connect->query($query1_4);
         $result1_5 = $connect->query($query1_5);
         $result1_6 = $connect->query($query1_6);
         $result1_7 = $connect->query($query1_7);

         $result2_1 = $connect->query($query2_1);
         $result2_11 = $connect->query($query2_11);
         $result2_2 = $connect->query($query2_2);
         $result2_3 = $connect->query($query2_3);
         $result2_4 = $connect->query($query2_4);
         $result2_5 = $connect->query($query2_5);
         $result2_6 = $connect->query($query2_6);
         $result2_7 = $connect->query($query2_7);

         $result3_1 = $connect->query($query3_1);
         $result3_2 = $connect->query($query3_2);
         $result3_3 = $connect->query($query3_3);
         $result3_4 = $connect->query($query3_4);
         $result3_5 = $connect->query($query3_5);
         $result3_6 = $connect->query($query3_6);
         $result3_7 = $connect->query($query3_7);

         $result4_1 = $connect->query($query4_1);
         $result4_2 = $connect->query($query4_2);
         $result4_3 = $connect->query($query4_3);
         $result4_4 = $connect->query($query4_4);
         $result4_5 = $connect->query($query4_5);
         $result4_6 = $connect->query($query4_6);
         $result4_7 = $connect->query($query4_7);

         $result5_1 = $connect->query($query5_1);
         $result5_2 = $connect->query($query5_2);
         $result5_3 = $connect->query($query5_3);
         $result5_4 = $connect->query($query5_4);
         $result5_5 = $connect->query($query5_5);
         $result5_6 = $connect->query($query5_6);
         $result5_7 = $connect->query($query5_7);

         // where date='$date'";

         $row1_1=mysqli_num_rows($result1_1);
         $row1_11=mysqli_num_rows($result1_11);
         $row1_2=mysqli_num_rows($result1_2);
         $row1_3=mysqli_num_rows($result1_3);
         $row1_4=mysqli_num_rows($result1_4);
         $row1_5=mysqli_num_rows($result1_5);
         $row1_6=mysqli_num_rows($result1_6);
         $row1_7=mysqli_num_rows($result1_7);

         $row2_1=mysqli_num_rows($result2_1);
         $row2_11=mysqli_num_rows($result2_11);
         $row2_2=mysqli_num_rows($result2_2);
         $row2_3=mysqli_num_rows($result2_3);
         $row2_4=mysqli_num_rows($result2_4);
         $row2_5=mysqli_num_rows($result2_5);
         $row2_6=mysqli_num_rows($result2_6);
         $row2_7=mysqli_num_rows($result2_7);

         $row3_1=mysqli_num_rows($result3_1);
         $row3_2=mysqli_num_rows($result3_2);
         $row3_3=mysqli_num_rows($result3_3);
         $row3_4=mysqli_num_rows($result3_4);
         $row3_5=mysqli_num_rows($result3_5);
         $row3_6=mysqli_num_rows($result3_6);
         $row3_7=mysqli_num_rows($result3_7);

         $row4_1=mysqli_num_rows($result4_1);
         $row4_2=mysqli_num_rows($result4_2);
         $row4_3=mysqli_num_rows($result4_3);
         $row4_4=mysqli_num_rows($result4_4);
         $row4_5=mysqli_num_rows($result4_5);
         $row4_6=mysqli_num_rows($result4_6);
         $row4_7=mysqli_num_rows($result4_7);

         $row5_1=mysqli_num_rows($result5_1);
         $row5_2=mysqli_num_rows($result5_2);
         $row5_3=mysqli_num_rows($result5_3);
         $row5_4=mysqli_num_rows($result5_4);
         $row5_5=mysqli_num_rows($result5_5);
         $row5_6=mysqli_num_rows($result5_6);
         $row5_7=mysqli_num_rows($result5_7);


     ?>
     // Set new default font family and font color to mimic Bootstrap's default styling
     Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
     Chart.defaults.global.defaultFontColor = '#292b2c';

     // Bar Chart Example
     var ctx = document.getElementById("myBarChart1");

     var myLineChart = new Chart(ctx, {
       type: 'horizontalBar',

       data: {
         labels: ["1호기 HIVG","1호기 HIVP","2호기","3호기","4호기","5호기","6호기","7호기"],
         datasets: [{
           label: "압출",
           backgroundColor: "rgba(255,106,106,1)",
           borderColor: "rgba(255,0,0,1)",
           data: ['<?=$row1_1?>','<?=$row1_11?>','<?=$row1_2?>','<?=$row1_3?>','<?=$row1_4?>','<?=$row1_5?>','<?=$row1_6?>','<?=$row1_7?>',],
         },
         {
           label: "검사",
           backgroundColor: "rgba(255,166,77,1)",
           borderColor: "rgba(255,128,0,1)",
           data: ['<?=$row2_1?>','<?=$row2_11?>','<?=$row2_2?>','<?=$row2_3?>','<?=$row2_4?>','<?=$row2_5?>','<?=$row2_6?>','<?=$row2_7?>',],
         },
         {
           label: "배합",
           backgroundColor: "rgba(255,125,255,1)",
           borderColor: "rgba(255,91,255,1)",
           data: ['<?=$row5_1?>','<?=$row5_1?>','<?=$row5_2?>','<?=$row5_3?>','<?=$row5_4?>','<?=$row5_5?>','<?=$row5_6?>','<?=$row5_7?>',],
         },
         {
           label: "수량",
           backgroundColor: "rgba(111,255,111,1)",
           borderColor: "rgba(73,221,57,1)",
           data: ['<?=$row3_1?>','<?=$row3_1?>','<?=$row3_2?>','<?=$row3_3?>','<?=$row3_4?>','<?=$row3_5?>','<?=$row3_6?>','<?=$row3_7?>',],
         },
         {
           label: "기타",
           backgroundColor: "rgba(90,170,255,1)",
           borderColor: "rgba(2,117,216,1)",
           data: ['<?=$row4_1?>','<?=$row4_1?>','<?=$row4_2?>','<?=$row4_3?>','<?=$row4_4?>','<?=$row4_5?>','<?=$row4_6?>','<?=$row4_7?>',],
         }
       ],

       },
       options: {
         scales: {
           xAxes: [{
             time: {
               unit: 'Process'
             },
             gridLines: {
               display: true
             },
             ticks: {
               min: 0,
               maxTicksLimit: 100
             }
           }],
           yAxes: [{
             ticks: {

               maxTicksLimit: 16
             },
             gridLines: {
               display: true
             }
           }],
         },
         legend: {
           display: true
         }
       }
     });

  });

  </script>
  <title>nuvotec dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

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
          <a class="dropdown-item" href="management.php">관리자 페이지</a>
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
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active" align='right'>Overview</li>
        </ol>

        <!-- Icon Cards-->
        <?php
          $count1 = $row11_1 + $row11_11 + $row12_1 + $row12_11 + $row13_1 + $row14_1 + $row15_1;
          $count2 = $row11_2 + $row12_2 + $row13_2 + $row14_2 + $row15_2;
          $count3 = $row11_3 + $row12_3 + $row13_3 + $row14_3 + $row15_3;
          $count4 = $row11_4 + $row12_4 + $row13_4 + $row14_4 + $row15_4;
          $count5 = $row11_5 + $row12_5 + $row13_5 + $row14_5 + $row15_5;
          $count6 = $row11_6 + $row12_6 + $row13_6 + $row14_6 + $row15_6;
          $count7 = $row11_7 + $row12_7 + $row13_7 + $row14_7 + $row15_7;
        ?>
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-header">당일 1호기 데이터 수</div>
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-cloud fa-lg fa-fw"></i>
                  </div>
                  <h5 class="card-title">1호기 데이터 수 합계</h5>
                  <div class="mr-5"><?=$count1?> 개</div>
                </div>
              <a class="card-footer text-white clearfix small z-1" href="card_1.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-header">당일 2호기 데이터 수</div>
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-industry fa-lg fa-fw"></i>
                  </div>
                  <h5 class="card-title">2호기 데이터 수 합계</h5>
                  <div class="mr-5"><?=$count2?> 개</div>
                </div>
              <a class="card-footer text-white clearfix small z-1" href="card_2.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-header">당일 3호기 데이터 수</div>
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-archive fa-lg fa-fw"></i>
                  </div>
                  <h5 class="card-title">3호기 데이터 수 합계</h5>
                  <div class="mr-5"><?=$count3?> 개</div>
                </div>
              <a class="card-footer text-white clearfix small z-1" href="card_3.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-info o-hidden h-100">
              <div class="card-header">당일 4호기 데이터 수</div>
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa fa-cube fa-lg fa-fw"></i>
                  </div>
                  <h5 class="card-title">4호기 데이터 수 합계</h5>
                  <div class="mr-5"><?=$count4?> 개</div>
                </div>
              <a class="card-footer text-white clearfix small z-1" href="card_4.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-header">당일 5호기 데이터 수</div>
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-inbox fa-lg fa-fw"></i>
                  </div>
                  <h5 class="card-title">5호기 데이터 수 합계</h5>
                  <div class="mr-5"><?=$count5?> 개</div>
                </div>
              <a class="card-footer text-white clearfix small z-1" href="card_5.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-secondary o-hidden h-100">
              <div class="card-header">당일 6호기 데이터 수</div>
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-flask fa-lg fa-fw"></i>
                  </div>
                  <h5 class="card-title">6호기 데이터 수 합계</h5>
                  <div class="mr-5"><?=$count6?> 개</div>
                </div>
              <a class="card-footer text-white clearfix small z-1" href="card_6.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-dark o-hidden h-100">
              <div class="card-header">당일 7호기 데이터 수</div>
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-puzzle-piece fa-lg fa-fw"></i>
                  </div>
                  <h5 class="card-title">7호기 데이터 수 합계</h5>
                  <div class="mr-5"><?=$count7?> 개</div>
                </div>
              <a class="card-footer text-white clearfix small z-1" href="card_7.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
        <!-- Bar Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-bar"></i>
              각 호기 테이블별 DB 데이터 개수</div>
          <div class="card-body">
            <canvas id="myBarChart1" width="100%" height="50"></canvas>
          </div>
          <div class="card-footer small text-muted">Updated <?=$dt?></div>
        </div>
        <!-- DataTables Example -->

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
          <a class="btn btn-primary" href="logout.php">로그아웃</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
</body>

</html>
