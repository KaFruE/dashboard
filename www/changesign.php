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

  <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.0.min.js" ></script>
  <script type="text/javascript">
  $(document).ready(function(){
     <?php
         header("Content-Type:text/html;charset=utf-8");
         $connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

         $dt = date("Y-m-d");
         $num1 = 0;
         $num2 = 0;
         $num3 = 0;
         $num4 = 0;
         $num5 = 0;


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
          <li class="active ">
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
</div> -->

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> 정지시간 기호 수정</h4>
                <button class="btn btn-dark float-right" name="addt">입력칸 추가</button>
                <script>
                    document.write("<form method='post' action='sign_revise.php'>");
                    document.write("<button class='btn btn-dark float-right' type='submit'>수정</button>");
                </script>
              </div>
              <div class="card-body">
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
                             document.write("<input type='"+"'text' name='"+"a"+ nmb2 +"' id='"+"a"+ nmb +"' class='"+"form-control'>");
                             document.write("</td>");
                             document.write("<th class='table-under-small'>A"+ ++num +"</th>");
                             document.write("<td>");
                             document.write("<input type='"+"'text' name='"+"a"+ ++nmb2 +"' id='"+"a"+ ++nmb +"' class='"+"form-control'>");
                             document.write("</td>");
                             document.write("<td>");
                             document.write("<button class='btn btn-default' value='"+ del+"' id='f"+ del +"' name='delStaff'>");
                             document.write("삭제</button>");
                             document.write("</td>");
                             document.write("</tr>");

                           }

                           document.write("<input type='hidden' name='whois' id='whois' value='a'>");

                           document.write("</form'>");

                         </script>
                       </tbody>
                     </table>
                   </div>
                 </div>
               </div>
             </div>

             <script>
                 var number = num;
                 var del_number = del;
                 var del_num = del;
                 var count =0;
                 var who1 = 'a';
                 //추가 버튼
                 $(document).on("click","button[name=addt]",function(){
                   ++count;
                   ++count;

                     var addbutton =  '<tr name="trStaff">'+
                         '   <th>A'+
                         ++number+
                         '</th>'+
                         '   <td>'+
                         '       <input type="text" class="form-control" name="staff_name">'+
                         '   <th>A'+
                         ++number+
                         '</th>'+
                         '   <td>'+
                         '       <input type="text" class="form-control" name="staff_name">'+
                         '   </td>'+
                         '   <td>'+
                         '       <button class="btn btn-default" value="'+
                         ++del_number+
                         '" id="f' +
                         ++del_num +
                         '" name="delStaff">삭제</button>'+
                         '   </td>'+
                         '</tr>';

                     var trHtml = $( "tr[name=trStaff]:last" ); //last를 사용하여 trStaff라는 명을 가진 마지막 태그 호출

                     trHtml.after(addbutton); //마지막 trStaff명 뒤에 붙인다.
                     window.location.href = './sign_add.php?who='+ who1 + '&numofadd='+ number;

                 });

                 //삭제 버튼
                 $(document).on("click","button[name=delStaff]",function(){
                    var bt_click = $(this).attr('id');
                    var numofdel = $('#'+bt_click).val();

                    --count;
                    --count;

                     var trHtml = $(this).parent().parent();
                     --number;
                     --number;
                     trHtml.remove(); //tr 테그 삭제
                     window.location.href = './sign_delete.php?who='+ who1 +'&numofdel='+ numofdel;

                 });
             </script>

             <div class="col-md-12">
               <div class="card">
                 <div class="card-header">
                   <h4 class="card-title">불량 기계 항목 기호 수정</h4>
                   <button class="btn btn-dark float-right" name="addt1">입력칸 추가</button>
                   <script>
                       document.write("<form method='post' action='sign_revise.php'>");
                       document.write("<button class='btn btn-dark float-right' type='submit'>수정</button>");
                   </script>
                 </div>
                 <div class="card-body">
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
                               document.write("<input type='"+"'text' name ='"+"b"+ ++nmb2 +"' id='"+"b"+ nmb +"' class='"+"form-control'>");
                               document.write("</td>");
                               document.write("<th class='table-under-small'>C"+ ++num1 +"</th>");
                               document.write("<td>");
                               document.write("<input type='"+"'text' name ='"+"b"+ ++nmb2 +"' id='"+"b"+ ++nmb +"' class='"+"form-control'>");
                               document.write("</td>");
                               document.write("<td>");
                               document.write("<button class='btn btn-default' value='"+ del+"' id='g"+ del +"' name='delStaff1'>");
                               document.write("삭제</button>");
                               document.write("</td>");
                               document.write("</tr>");

                             }
                             document.write("<input type='hidden' name = 'whois' id='whois' value='b'>");

                             document.write("</form'>");
                           </script>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <script>
                    var number1 = num1;
                    var del_number = del;
                    var del_num = del;
                    var count =0;
                    var who2 = 'b';
                    //추가 버튼
                    $(document).on("click","button[name=addt1]",function(){
                      ++count;
                      ++count;
                        var addbutton1 =  '<tr name="trStaff1">'+
                            '   <th>C'+
                            ++number1+
                            '</th>'+
                            '   <td>'+
                            '       <input type="text" class="form-control" name="staff_name">'+
                            '   <th>C'+
                            ++number1+
                            '</th>'+
                            '   <td>'+
                            '       <input type="text" class="form-control" name="staff_name">'+
                            '   </td>'+
                            '   <td>'+
                            '       <button class="btn btn-default" value="'+
                            ++del_number+
                            '" id="g' +
                            ++del_num +
                            '" name="delStaff1">삭제</button>'+
                            '   </td>'+
                            '</tr>';

                        var trHtml1 = $( "tr[name=trStaff1]:last" ); //last를 사용하여 trStaff라는 명을 가진 마지막 태그 호출

                        trHtml1.after(addbutton1); //마지막 trStaff명 뒤에 붙인다.
                        window.location.href = './sign_add.php?who='+ who2 + '&numofadd='+ number1;

                    });

                    //삭제 버튼
                    $(document).on("click","button[name=delStaff1]",function(){
                        var bt_click = $(this).attr('id');
                        var numofdel = $('#'+bt_click).val();

                        --count;
                        --count;

                        var trHtml1 = $(this).parent().parent();
                        --number1;
                        --number1;
                        trHtml1.remove(); //tr 테그 삭제
                        window.location.href = './sign_delete.php?who='+ who2 +'&numofdel='+ numofdel;

                    });
                </script>


                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">불량 재료 항목 기호 수정</h4>
                      <button class="btn btn-dark float-right" name="addt2">입력칸 추가</button>
                      <script>
                          document.write("<form method='post' action='sign_revise.php'>");
                          document.write("<button class='btn btn-dark float-right' type='submit'>수정</button>");
                      </script>
                    </div>
                    <div class="card-body">
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
                                var num2 = number1;
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
                                  document.write("<input type='"+"'text' name ='"+"c"+ nmb2 +"' id='"+"c"+ nmb +"' class='"+"form-control'>");
                                  document.write("</td>");
                                  document.write("<th class='table-under-small'>C"+ ++num2 +"</th>");
                                  document.write("<td>");
                                  document.write("<input type='"+"'text' name='"+"c"+ ++nmb2 +"' id='"+"c"+ ++nmb +"' class='"+"form-control'>");
                                  document.write("</td>");
                                  document.write("<td>");
                                  document.write("<button class='btn btn-default' value='"+ del+"' id='h"+ del +"' name='delStaff2'>");
                                  document.write("삭제</button>");
                                  document.write("</td>");
                                  document.write("</tr>");

                                }

                                document.write("<input type='hidden' name = 'whois' id='whois' value='c'>");

                                document.write("</form'>");
                              </script>
                             </tbody>
                           </table>
                         </div>
                       </div>
                     </div>
                   </div>

                   <script>
                       var number2 = num2;
                       var nm2 = num_c2;
                       var del_number = del;
                       var del_num = del;
                       var count =0;
                       var who3 = 'c';
                       //추가 버튼
                       $(document).on("click","button[name=addt2]",function(){
                           ++nm2;
                           ++nm2;
                           var addbutton2 =  '<tr name="trStaff2">'+
                               '   <th>C'+
                               ++number2+
                               '</th>'+
                               '   <td>'+
                               '       <input type="text" class="form-control" name="staff_name">'+
                               '   <th>C'+
                               ++number2+
                               '</th>'+
                               '   <td>'+
                               '       <input type="text" class="form-control" name="staff_name">'+
                               '   </td>'+
                               '   <td>'+
                               '       <button class="btn btn-default" value="'+
                               ++del_number+
                               '" id="h' +
                               ++del_num +
                               '" name="delStaff2">삭제</button>'+
                               '   </td>'+
                               '</tr>';

                           var trHtml2 = $( "tr[name=trStaff2]:last" ); //last를 사용하여 trStaff라는 명을 가진 마지막 태그 호출

                           trHtml2.after(addbutton2); //마지막 trStaff명 뒤에 붙인다.
                           window.location.href = './sign_add.php?who='+ who3+ '&numofadd='+ nm2;

                       });

                       //삭제 버튼
                       $(document).on("click","button[name=delStaff2]",function(){
                           var bt_click = $(this).attr('id');
                           var numofdel = $('#'+bt_click).val();

                           --count;
                           --count;

                           var trHtml2 = $(this).parent().parent();
                           --nm2;
                           --nm2;
                           --number2;
                           --number2;
                           trHtml2.remove(); //tr 테그 삭제
                           window.location.href = './sign_delete.php?who='+ who3 +'&numofdel='+ numofdel;


                       });
                   </script>

                   <div class="col-md-12">
                     <div class="card">
                       <div class="card-header">
                         <h4 class="card-title">불량 공정 항목 기호 수정</h4>
                         <button class="btn btn-dark float-right" name="addt3">입력칸 추가</button>
                         <script>
                             document.write("<form method='post' action='sign_revise.php'>");
                             document.write("<button class='btn btn-dark float-right' type='submit'>수정</button>");
                         </script>
                       </div>
                       <div class="card-body">
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
                                   var num3 = number2;
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
                                     document.write("<input type='"+"'text' name='"+"d"+ nmb2 +"' id='"+"d"+ nmb +"' class='"+"form-control'>");
                                     document.write("</td>");
                                     document.write("<th class='table-under-small'>C"+ ++num3 +"</th>");
                                     document.write("<td>");
                                     document.write("<input type='"+"'text' name ='"+"d"+ ++nmb2 +"' id='"+"d"+ ++nmb +"' class='"+"form-control'>");
                                     document.write("</td>");
                                     document.write("<td>");
                                     document.write("<button class='btn btn-default' value='"+ del+"' id='x"+ del +"' name='delStaff3'>");
                                     document.write("삭제</button>");
                                     document.write("</td>");
                                     document.write("</tr>");

                                   }

                                   document.write("<input type='hidden' name='whois' id='whois' value='d'>");

                                   document.write("</form'>");
                                 </script>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>

                      <script>
                          var number3 = num3;
                          var nm3 = num_c3;
                          var del_number = del;
                          var del_num = del;
                          var count =0;
                          var who4 = 'd';
                          //추가 버튼
                          $(document).on("click","button[name=addt3]",function(){
                              ++nm3;
                              ++nm3;
                              var addbutton3 =  '<tr name="trStaff3">'+
                                  '   <th>C'+
                                  ++number3+
                                  '</th>'+
                                  '   <td>'+
                                  '       <input type="text" class="form-control" name="staff_name">'+
                                  '   <th>C'+
                                  ++number3+
                                  '</th>'+
                                  '   <td>'+
                                  '       <input type="text" class="form-control" name="staff_name">'+
                                  '   </td>'+
                                  '   <td>'+
                                  '       <button class="btn btn-default" value="'+
                                  ++del_number+
                                  '" id="x' +
                                  ++del_num +
                                  '" name="delStaff3">삭제</button>'+
                                  '   </td>'+
                                  '</tr>';

                              var trHtml3 = $( "tr[name=trStaff3]:last" ); //last를 사용하여 trStaff라는 명을 가진 마지막 태그 호출

                              trHtml3.after(addbutton3); //마지막 trStaff명 뒤에 붙인다.
                              window.location.href = './sign_add.php?who='+ who4 + '&numofadd='+ nm3;

                          });

                          //삭제 버튼
                          $(document).on("click","button[name=delStaff3]",function(){
                              var bt_click = $(this).attr('id');
                              var numofdel = $('#'+bt_click).val();

                              --count;
                              --count;

                              var trHtml3 = $(this).parent().parent();
                              --nm3;
                              --nm3;
                              --number3;
                              --number3;
                              trHtml3.remove(); //tr 테그 삭제
                              window.location.href = './sign_delete.php?who='+ who4 +'&numofdel='+ numofdel;

                          });
                      </script>


                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">불량 검사 항목 기호 수정</h4>
                      <button class="btn btn-dark float-right" name="addt4">입력칸 추가</button>
                      <script>
                          document.write("<form method='post' action='sign_revise.php'>");
                          document.write("<button class='btn btn-dark float-right' type='submit'>수정</button>");
                      </script>
                    </div>
                      <div class="card-body">
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
                                  var num4 = number3;
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
                                    document.write("<input type='"+"'text' name ='"+"e"+ nmb2 +"' id='"+"e"+ nmb +"' class='"+"form-control'>");
                                    document.write("</td>");
                                    document.write("<th class='table-under-small'>C"+ ++num4 +"</th>");
                                    document.write("<td>");
                                    document.write("<input type='"+"'text' name='"+"e"+ ++nmb2 +"' id='"+"e"+ ++nmb +"' class='"+"form-control'>");
                                    document.write("</td>");
                                    document.write("<td>");
                                    document.write("<button class='btn btn-default' value='"+ del+"' id='y"+ del +"' name='delStaff4'>");
                                    document.write("삭제</button>");
                                    document.write("</td>");
                                    document.write("</tr>");

                                  }

                                  document.write("<input type='hidden' name='whois' id='whois' value='e'>");

                                  document.write("</form'>");

                                </script>
                               </tbody>
                             </table>
                           </div>
                         </div>
                       </div>
                     </div>

                     <script>
                         var number4 = num4;
                         var nm4 = num_c4;
                         var del_number = del;
                         var del_num = del;
                         var count =0;
                         var who5 = 'e';
                         //추가 버튼
                         $(document).on("click","button[name=addt4]",function(){
                             ++nm4;
                             ++nm4;
                             var addbutton4 =  '<tr name="trStaff4">'+
                                 '   <th>C'+
                                 ++number4+
                                 '</th>'+
                                 '   <td>'+
                                 '       <input type="text" class="form-control" name="staff_name">'+
                                 '   <th>C'+
                                 ++number4+
                                 '</th>'+
                                 '   <td>'+
                                 '       <input type="text" class="form-control" name="staff_name">'+
                                 '   </td>'+
                                 '   <td>'+
                                 '       <button class="btn btn-default" value="'+
                                 ++del_number+
                                 '" id="y' +
                                 ++del_num +
                                 '" name="delStaff4">삭제</button>'+
                                 '   </td>'+
                                 '</tr>';

                             var trHtml4 = $( "tr[name=trStaff4]:last" ); //last를 사용하여 trStaff라는 명을 가진 마지막 태그 호출

                             trHtml4.after(addbutton4); //마지막 trStaff명 뒤에 붙인다.
                             window.location.href = './sign_add.php?who='+ who5 + '&numofadd='+ nm4;

                         });

                         //삭제 버튼
                         $(document).on("click","button[name=delStaff4]",function(){
                             var bt_click = $(this).attr('id');
                             var numofdel = $('#'+bt_click).val();

                             --count;
                             --count;

                             var trHtml4 = $(this).parent().parent();
                             --nm4;
                             --nm4;
                             --number4;
                             --number4;
                             trHtml4.remove(); //tr 테그 삭제
                             window.location.href = './sign_delete.php?who='+ who5 +'&numofdel='+ numofdel;

                         });
                     </script>

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
