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

  <title>nuvotec dashboard</title>

  <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.0.min.js" ></script>
  <script type="text/javascript">
  $(document).ready(function(){
  <?php

      header("Content-Type:text/html;charset=utf-8");
      $connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

      $query_a = "SELECT * FROM sign_a";
      $query_b = "SELECT * FROM sign_b";
      $query_c = "SELECT * FROM sign_c";
      $query_d = "SELECT * FROM sign_d";
      $query_e = "SELECT * FROM sign_e";

      $result_a = $connect->query($query_a);
      $result_b = $connect->query($query_b);
      $result_c = $connect->query($query_c);
      $result_d = $connect->query($query_d);
      $result_e = $connect->query($query_e);

      $row_a=mysqli_fetch_array($result_a);
      $row_b=mysqli_fetch_array($result_b);
      $row_c=mysqli_fetch_array($result_c);
      $row_d=mysqli_fetch_array($result_d);
      $row_e=mysqli_fetch_array($result_e);

      $qcount_a = "SELECT * FROM information_schema.columns WHERE TABLE_NAME='sign_a';";
      $qcount_b = "SELECT * FROM information_schema.columns WHERE TABLE_NAME='sign_b';";
      $qcount_c = "SELECT * FROM information_schema.columns WHERE TABLE_NAME='sign_c';";
      $qcount_d = "SELECT * FROM information_schema.columns WHERE TABLE_NAME='sign_d';";
      $qcount_e = "SELECT * FROM information_schema.columns WHERE TABLE_NAME='sign_e';";

      $result_a1 = $connect->query($qcount_a);
      $result_b1 = $connect->query($qcount_b);
      $result_c1 = $connect->query($qcount_c);
      $result_d1 = $connect->query($qcount_d);
      $result_e1 = $connect->query($qcount_e);

      $row_a1=mysqli_num_rows($result_a1);
      $row_b1=mysqli_num_rows($result_b1);
      $row_c1=mysqli_num_rows($result_c1);
      $row_d1=mysqli_num_rows($result_d1);
      $row_e1=mysqli_num_rows($result_e1);

      $num1 = 0;
      $num2 = 0;

      $dt = date("Y-m-d");

   ?>

   <?php
   $i=1;
   $re = $row_a1;
   for ($i=1; $i<=$re; $i++) {
     $j = $i - 1;
     $queryf1 = "SELECT * FROM showdb1 ORDER BY col_num ASC LIMIT ".$j.", 1";
     $resultf1 = $connect->query($queryf1);
     $rowf1 = mysqli_fetch_array($resultf1);
  ?>
      document.getElementById('a'+<?=$i?>).value="<?=$row_a[$rowf1['col_name']]?>";
  <?php
   }
   ?>

   <?php
   $i1=1;
   $re1 = $row_b1;
   for ($i1=1; $i1<=$re1; $i1++) {
     $j1 = $i1 - 1;
     $queryf2 = "SELECT * FROM showdb2 ORDER BY col_num ASC LIMIT ".$j1.", 1";
     $resultf2 = $connect->query($queryf2);
     $rowf2 = mysqli_fetch_array($resultf2);
   ?>
      document.getElementById('b'+<?=$i1?>).value="<?=$row_b[$rowf2['col_name']]?>";
   <?php
   }
   ?>

   <?php
   $i2=1;
   $re2 = $row_c1;
   for ($i2=1; $i2<=$re2; $i2++) {
     $j2 = $i2 - 1;
     $queryf3 = "SELECT * FROM showdb3 ORDER BY col_num ASC LIMIT ".$j2.", 1";
     $resultf3 = $connect->query($queryf3);
     $rowf3 = mysqli_fetch_array($resultf3);
   ?>
      document.getElementById('c'+<?=$i2?>).value="<?=$row_c[$rowf3['col_name']]?>";
   <?php
   }
   ?>

   <?php
   $i3=1;
   $re3 = $row_d1;
   for ($i3=1; $i3<=$re3; $i3++) {
     $j3 = $i3 - 1;
     $queryf4 = "SELECT * FROM showdb4 ORDER BY col_num ASC LIMIT ".$j3.", 1";
     $resultf4 = $connect->query($queryf4);
     $rowf4 = mysqli_fetch_array($resultf4);
   ?>
      document.getElementById('d'+<?=$i3?>).value="<?=$row_d[$rowf4['col_name']]?>";
   <?php
   }
   ?>

   <?php
   $i4=1;
   $re4 = $row_e1;
   for ($i4=1; $i4<=$re4; $i4++) {
     $j4 = $i4 - 1;
     $queryf5 = "SELECT * FROM showdb5 ORDER BY col_num ASC LIMIT ".$j4.", 1";
     $resultf5 = $connect->query($queryf5);
     $rowf5 = mysqli_fetch_array($resultf5);
   ?>
      document.getElementById('e'+<?=$i4?>).value="<?=$row_e[$rowf5['col_name']]?>";
   <?php
   }
   ?>

   <?php
       if($row_a1%2!=0){
         $row_a1 = $row_a1+1;
       }
       if($row_b1%2!=0){
         $row_b1 = $row_b1+1;
       }
       if($row_c1%2!=0){
         $row_c1 = $row_c1+1;
       }
       if($row_d1%2!=0){
         $row_d1 = $row_d1+1;
       }
       if($row_e1%2!=0){
         $row_e1 = $row_e1+1;
       }
   ?>
  });
  </script>

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
            <a href="input_process6.php">제 6 호기</a>
          </li>
          <li class="breadcrumb-item active">수량</li>
        </ol>

        <ol class="bread">
          <a class="btn btn-outline-secondary" href="input_process6_mix.php">배합</a>
          <a class="btn btn-outline-secondary" href="input_process6_press.php">압출</a>
          <a class="btn btn-outline-secondary" href="input_process6_cut.php">검사</a>
          <a class="btn btn-outline-secondary" href="input_process6_count.php">수량</a>
          <a class="btn btn-outline-secondary" href="input_process6_other.php">기타</a>
        </ol>

        <script>
          $(document).ready(function(){
            var date = new Date();
            var hour = date.getHours();

            if(hour >= 8 && hour < 18) {
              $('.clocks').css("background-color", "grey");
              $('#clock2').css("background-color", "red");

              $('.clocks').click(function(event){
                return false;
              });
              $('#clock2').unbind('click');
            }
            else if(hour >= 18 && hour <= 23) {
              $('.clocks').css("background-color", "grey");
              $('#clock1').css("background-color", "red");

              $('.clocks').click(function(event){
                return false;
              });
              $('#clock1').unbind('click');
            }
            else if(hour < 8  && hour >= 0) {
              $('.clocks').css("background-color", "grey");
              $('#clock1').css("background-color", "red");

              $('.clocks').click(function(event){
                return false;
              });
              $('#clock1').unbind('click');
            }

          });

        </script>

        <ol class="bread">
          <a id="clock1" class="btn btn-dark float-right clocks" href="input_process6_count.php">야간</a>
          <a id="clock2" class="btn btn-dark float-right clocks" href="input_process6_count.php">주간</a>
        </ol>

      </br></br>

      <form method='post' action='write_process6_count.php'>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
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

                <tr>
                  <th colspan ="2">규격/구분</th>
                  <th>체크시간</th>
                  <th>수량(본)</th>
                  <th>본당시간(분)</th>
                  <th>본당중량(kg)</th>
                  <th>불량(kg)</th>
                  <th colspan ="2">불량원인</th>
                </tr>


                <tr>
                  <td colspan="2"><input type="text" name="standard_1" id="standard_1" class="form-control" placeholder="규격"value="PVC DC 400 x 6250" /></td>
                  <td><input type="time" name="checktime_1" id="checktime_1" class="form-control" placeholder="체크시간" /></td>
                  <td><input type="number" name="amount_1" id="amount_1" class="form-control" placeholder="수량" /></td>
                  <td><input type="number" name="pertime_1" id="pertime_1" class="form-control" placeholder="본당시간" /></td>
                  <td><input type="number" name="perweight_1" id="perweight_1" class="form-control" step='0.01' placeholder="본당중량" /></td>
                  <td><input type="number" name="failure_1" id="failure_1" class="form-control"step='0.01' placeholder="불량" /></td>
                  <td colspan="2"><input type="text" name="failurereason_1" id="failurereason_1" class="form-control" placeholder="불량원인" /></td>
                </tr>
                <tr>
                  <td colspan="2"><input type="text" name="standard_2" id="standard_2" class="form-control" placeholder="규격"value="PVC DC 400 x 6070" /></td>
                  <td><input type="time" name="checktime_2" id="checktime_2" class="form-control" placeholder="체크시간" /></td>
                  <td><input type="number" name="amount_2" id="amount_2" class="form-control" placeholder="수량" /></td>
                  <td><input type="number" name="pertime_2" id="pertime_2" class="form-control" placeholder="본당시간" /></td>
                  <td><input type="number" name="perweight_2" id="perweight_2" class="form-control" step='0.01' placeholder="본당중량" /></td>
                  <td><input type="number" name="failure_2" id="failure_2" class="form-control"step='0.01' placeholder="불량" /></td>
                  <td colspan="2"><input type="text" name="failurereason_2" id="failurereason_2" class="form-control" placeholder="불량원인" /></td>
                </tr>
                <tr>
                  <td colspan="2"><input type="text" name="standard_3" id="standard_3" class="form-control" placeholder="규격" /></td>
                  <td><input type="time" name="checktime_3" id="checktime_3" class="form-control" placeholder="체크시간" /></td>
                  <td><input type="number" name="amount_3" id="amount_3" class="form-control" placeholder="수량" /></td>
                  <td><input type="number" name="pertime_3" id="pertime_3" class="form-control" placeholder="본당시간" /></td>
                  <td><input type="number" name="perweight_3" id="perweight_3" class="form-control" step='0.01' placeholder="본당중량" /></td>
                  <td><input type="number" name="failure_3" id="failure_3" class="form-control"step='0.01' placeholder="불량" /></td>
                  <td colspan="2"><input type="text" name="failurereason_3" id="failurereason_3" class="form-control" placeholder="불량원인" /></td>
                </tr>
                <tr>
                  <td colspan="2"><input type="text" name="standard_4" id="standard_4" class="form-control" placeholder="규격" /></td>
                  <td><input type="time" name="checktime_4" id="checktime_4" class="form-control" placeholder="체크시간" /></td>
                  <td><input type="number" name="amount_4" id="amount_4" class="form-control" placeholder="수량" /></td>
                  <td><input type="number" name="pertime_4" id="pertime_4" class="form-control" placeholder="본당시간" /></td>
                  <td><input type="number" name="perweight_4" id="perweight_4" class="form-control" step='0.01' placeholder="본당중량" /></td>
                  <td><input type="number" name="failure_4" id="failure_4" class="form-control"step='0.01' placeholder="불량" /></td>
                  <td colspan="2"><input type="text" name="failurereason_4" id="failurereason_4" class="form-control" placeholder="불량원인" /></td>
                </tr>

            </table>
          </div>


          <br />
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr class='table-under-import'>
                   <th rowspan="2" colspan="10">기타 보고 사항</th>

                 </tr>
              </thead>
              <tbody>
                 <tr class='table-under'>
                   <th colspan="10" class='table-under-import'>불량발생 및 처리내역</th>
                 </tr>
                 <tr class='table-under'>
                   <th colspan="4" class='table-under-import'>품명/규격</th>

                   <th colspan="6" class='table-under-import'>불량 원인 및 조치</th>

                 </tr>
                 <tr class='table-under'>
                   <td colspan="4"><input type="text" name="pm_1" id="pm_1" class="form-control" placeholder="품명/규격" /></td>

                   <td colspan="6"><input type="text" name="br_1" id="br_1" class="form-control" placeholder="불량 원인 및 조치" /></td>

                 </tr>
                 <tr class='table-under'>
                   <td colspan="4"><input type="text" name="pm_2" id="pm_2" class="form-control" placeholder="품명/규격" /></td>

                   <td colspan="6"><input type="text" name="br_2" id="br_2" class="form-control" placeholder="불량 원인 및 조치" /></td>

                 </tr>
                 <tr class='table-under'>
                   <td colspan="4"><input type="text" name="pm_3" id="pm_3" class="form-control" placeholder="품명/규격" /></td>

                   <td colspan="6"><input type="text" name="br_3" id="br_3" class="form-control" placeholder="불량 원인 및 조치" /></td>

                 </tr>
                 <tr class='table-under'>
                   <td colspan="4"><input type="text" name="pm_4" id="pm_4" class="form-control" placeholder="품명/규격" /></td>

                   <td colspan="6"><input type="text" name="br_4" id="br_4" class="form-control" placeholder="불량 원인 및 조치" /></td>

                 </tr>
               </tbody>
             </table>
           </div>
           <br />
           <input class="btn btn-dark btn-block" type="submit" value="저장">
           <br /><br />

         </form>

         <br />

         <ul class="nav nav-tabs">
           <li class="nav-item">
             <a class="nav-link active" data-toggle="tab" href="#aa">정지 시간</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" data-toggle="tab" href="#bb">불량 기계</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" data-toggle="tab" href="#cc">불량 재료</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" data-toggle="tab" href="#dd">불량 공정</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" data-toggle="tab" href="#ee">불량 검사</a>
           </li>
         </ul>

         <div class="tab-content">
           <div class="tab-pane fade show active" id="aa">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <thead>
                   </thead>
                   <tbody>
                     <tr>
                       <th colspan="5">정지시간 기호</th>
                     </tr>
                      <script type="text/javascript">
                        var j=1;
                        var i=<?=$row_a1?>/2;
                        var num = <?=$num1;?>;

                        for(j=1; j<=i; j++)
                        {
                          var nmb = j;
                          var nmb2 = j;
                          var del = j;
                          if(nmb != 1)
                          {
                            nmb = nmb + nmb -1;
                            nmb2 = nmb2 + nmb2 -1;
                          }

                          document.write("<tr name="+"'trStaff'"+">");
                          document.write("<th class='table-under-small'>A"+ ++num +"</th>");
                          document.write("<td>");
                          document.write("<input type='"+"'text'  disabled='disabled' name='"+"a"+ nmb2 +"' id='"+"a"+ nmb +"' class='"+"form-control'>");
                          document.write("</td>");
                          document.write("<th class='table-under-small'>A"+ ++num +"</th>");
                          document.write("<td>");
                          document.write("<input type='"+"'text' disabled='disabled' name='"+"a"+ ++nmb2 +"' id='"+"a"+ ++nmb +"' class='"+"form-control'>");
                          document.write("</td>");
                          document.write("</tr>");

                        }
                      </script>
                    </tbody>
                  </table>
                </div>
           </div>

           <div class="tab-pane fade" id="bb">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <thead>
                   </thead>
                   <tbody>
                     <tr>
                       <th colspan="8">불량 기계 항목 기호</th>
                     </tr>
                     <script type="text/javascript">
                       var j=1;
                       var i=<?=$row_b1?>/2;
                       var num1 = <?=$num1;?>;


                       for(j=1; j<=i; j++)
                       {
                         var nmb = j;
                         var nmb2 = j;
                         var del = j;
                         if(nmb != 1)
                         {
                           nmb = nmb + nmb -1;
                           nmb2 = nmb2 + nmb2 -1;

                         }

                         document.write("<tr name="+"'trStaff1'"+">");
                         document.write("<th class='table-under-small'>C"+ ++num1 +"</th>");
                         document.write("<td>");
                         document.write("<input type='"+"'text' disabled='disabled' name ='"+"b"+ ++nmb2 +"' id='"+"b"+ nmb +"' class='"+"form-control'>");
                         document.write("</td>");
                         document.write("<th class='table-under-small'>C"+ ++num1 +"</th>");
                         document.write("<td>");
                         document.write("<input type='"+"'text' disabled='disabled' name ='"+"b"+ ++nmb2 +"' id='"+"b"+ ++nmb +"' class='"+"form-control'>");
                         document.write("</td>");
                         document.write("</tr>");

                       }
                     </script>
                    </tbody>
                  </table>
                </div>
           </div>

           <div class="tab-pane fade" id="cc">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <thead>
                   </thead>
                   <tbody>
                     <tr>
                       <th colspan="8">불량 재료 항목 기호</th>
                     </tr>
                     <script type="text/javascript">
                       var j=1;
                       var i=<?=$row_c1?>/2;
                       var num2 = num1;
                       var num_c2 = <?=$num2;?>;

                       for(j=1; j<=i; j++)
                       {
                         var nmb = j;
                         var nmb2 = j;

                         var del = j;
                         if(nmb != 1)
                         {
                           nmb = nmb + nmb -1;
                           nmb2 = nmb2 + nmb2 -1;

                         }
                         ++num_c2;
                         ++num_c2;

                         document.write("<tr name="+"'trStaff2'"+">");
                         document.write("<th class='table-under-small'>C"+ ++num2 +"</th>");
                         document.write("<td>");
                         document.write("<input type='"+"'text' disabled='disabled' name ='"+"c"+ nmb2 +"' id='"+"c"+ nmb +"' class='"+"form-control'>");
                         document.write("</td>");
                         document.write("<th class='table-under-small'>C"+ ++num2 +"</th>");
                         document.write("<td>");
                         document.write("<input type='"+"'text' disabled='disabled' name='"+"c"+ ++nmb2 +"' id='"+"c"+ ++nmb +"' class='"+"form-control'>");
                         document.write("</td>");
                         document.write("</tr>");

                       }

                     </script>
                    </tbody>
                  </table>
                </div>
           </div>

           <div class="tab-pane fade" id="dd">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <thead>
                   </thead>
                   <tbody>
                     <tr>
                       <th colspan="8">불량 공정 항목 기호</th>
                     </tr>
                     <script type="text/javascript">
                       var j=1;
                       var i=<?=$row_d1?>/2;
                       var num3 = num2;
                       var num_c3 = 0;


                       for(j=1; j<=i; j++)
                       {
                         var nmb = j;
                         var nmb2 = j;

                         var del = j;
                         if(nmb != 1)
                         {
                           nmb = nmb + nmb -1;
                           nmb2 = nmb2 + nmb2 -1;

                         }
                         ++num_c3;
                         ++num_c3;

                         document.write("<tr name="+"'trStaff3'"+">");
                         document.write("<th class='table-under-small'>C"+ ++num3 +"</th>");
                         document.write("<td>");
                         document.write("<input type='"+"'text' disabled='disabled' name='"+"d"+ nmb2 +"' id='"+"d"+ nmb +"' class='"+"form-control'>");
                         document.write("</td>");
                         document.write("<th class='table-under-small'>C"+ ++num3 +"</th>");
                         document.write("<td>");
                         document.write("<input type='"+"'text' disabled='disabled' name ='"+"d"+ ++nmb2 +"' id='"+"d"+ ++nmb +"' class='"+"form-control'>");
                         document.write("</td>");
                         document.write("</tr>");

                       }

                     </script>
                    </tbody>
                  </table>
                </div>
           </div>

           <div class="tab-pane fade" id="ee">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <thead>
                   </thead>
                   <tbody>
                     <tr>
                       <th colspan="8">불량 검사 항목 기호</th>
                     </tr>
                     <script type="text/javascript">
                       var j=1;
                       var i=<?=$row_e1?>/2;
                       var num4 = num3;
                       var num_c4 = 0;


                       for(j=1; j<=i; j++)
                       {
                         var nmb = j;
                         var nmb2 = j;

                         var del = j;

                         if(nmb != 1)
                         {
                           nmb = nmb + nmb -1;
                           nmb2 = nmb2 + nmb2 -1;

                         }

                         ++num_c4;
                         ++num_c4;

                         document.write("<tr name="+"'trStaff4'"+">");
                         document.write("<th class='table-under-small'>C"+ ++num4 +"</th>");
                         document.write("<td>");
                         document.write("<input type='"+"'text' disabled='disabled' name ='"+"e"+ nmb2 +"' id='"+"e"+ nmb +"' class='"+"form-control'>");
                         document.write("</td>");
                         document.write("<th class='table-under-small'>C"+ ++num4 +"</th>");
                         document.write("<td>");
                         document.write("<input type='"+"'text' disabled='disabled' name='"+"e"+ ++nmb2 +"' id='"+"e"+ ++nmb +"' class='"+"form-control'>");
                         document.write("</td>");
                         document.write("</tr>");

                       }
                     </script>
                    </tbody>
                  </table>
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
