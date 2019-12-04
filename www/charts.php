<?php
  $dt1 = $_GET['date1'];
  $dt2 = $_GET['date2'];
  $dt3 = $_GET['date3'];
  $dt4 = $_GET['date4'];
  $dt5 = $_GET['date5'];

  $line1_1 = $_GET['line_select1_1'];
  $line1_11 = $_GET['line_select1_11'];
  $line1_2 = $_GET['line_select1_2'];
  $line1_3 = $_GET['line_select1_3'];
  $line1_4 = $_GET['line_select1_4'];
  $line1_5 = $_GET['line_select1_5'];
  $line1_6 = $_GET['line_select1_6'];
  $line1_7 = $_GET['line_select1_7'];

  $line2_1 = $_GET['line_select2_1'];
  $line2_11 = $_GET['line_select2_11'];
  $line2_2 = $_GET['line_select2_2'];
  $line2_3 = $_GET['line_select2_3'];
  $line2_4 = $_GET['line_select2_4'];
  $line2_5 = $_GET['line_select2_5'];
  $line2_6 = $_GET['line_select2_6'];
  $line2_7 = $_GET['line_select2_7'];
?>

<!DOCTYPE html>
<html lang="ko">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php include 'session_admin.php';?>

  <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.0.min.js" ></script>
  <style>
    #manage_select, #manage_select1{
      width: 300px; /* 원하는 너비설정 */
      padding: .8em .5em; /* 여백으로 높이 설정 */
      font-family: inherit; /* 폰트 상속 */
      background: url(https://farm1.staticflickr.com/379/19928272501_4ef877c265_t.jpg)
       no-repeat 95% 50%; /* 네이티브 화살표 대체 */
       border: 1px solid #999;
       border-radius: 0px; /* iOS 둥근모서리 제거 */
       -webkit-appearance: none; /* 네이티브 외형 감추기 */
       -moz-appearance: none; appearance: none;
     }
  </style>
  <script type="text/javascript">
  $(document).ready(function(){
     <?php
         header("Content-Type:text/html;charset=utf-8");
         $connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

         $query11 = "update hogi01_press_hivg set num='1' where input_time BETWEEN '06:00:01' AND '12:00:00';";
         $query12 = "update hogi01_press_hivg set num='2' where input_time BETWEEN '12:00:01' AND '18:00:00';";
         $query13 = "update hogi01_press_hivg set num='3' where input_time BETWEEN '18:00:01' AND '24:00:00';";
         $query14 = "update hogi01_press_hivg set num='4' where input_time BETWEEN '00:00:00' AND '06:00:00';";
         $query15 = "update hogi01_press_hivp set num='1' where input_time BETWEEN '06:00:01' AND '12:00:00';";
         $query16 = "update hogi01_press_hivp set num='2' where input_time BETWEEN '12:00:01' AND '18:00:00';";
         $query17 = "update hogi01_press_hivp set num='3' where input_time BETWEEN '18:00:01' AND '24:00:00';";
         $query18 = "update hogi01_press_hivp set num='4' where input_time BETWEEN '00:00:00' AND '06:00:00';";
         $query21 = "update hogi02_press set num='1' where input_time BETWEEN '06:00:01' AND '12:00:00';";
         $query22 = "update hogi02_press set num='2' where input_time BETWEEN '12:00:01' AND '18:00:00';";
         $query23 = "update hogi02_press set num='3' where input_time BETWEEN '18:00:01' AND '24:00:00';";
         $query24 = "update hogi02_press set num='4' where input_time BETWEEN '00:00:00' AND '06:00:00';";
         $query31 = "update hogi03_press set num='1' where input_time BETWEEN '06:00:01' AND '12:00:00';";
         $query32 = "update hogi03_press set num='2' where input_time BETWEEN '12:00:01' AND '18:00:00';";
         $query33 = "update hogi03_press set num='3' where input_time BETWEEN '18:00:01' AND '24:00:00';";
         $query34 = "update hogi03_press set num='4' where input_time BETWEEN '00:00:00' AND '06:00:00';";
         $query41 = "update hogi04_press set num='1' where input_time BETWEEN '06:00:01' AND '12:00:00';";
         $query42 = "update hogi04_press set num='2' where input_time BETWEEN '12:00:01' AND '18:00:00';";
         $query43 = "update hogi04_press set num='3' where input_time BETWEEN '18:00:01' AND '24:00:00';";
         $query44 = "update hogi04_press set num='4' where input_time BETWEEN '00:00:00' AND '06:00:00';";
         $query51 = "update hogi05_press set num='1' where input_time BETWEEN '06:00:01' AND '12:00:00';";
         $query52 = "update hogi05_press set num='2' where input_time BETWEEN '12:00:01' AND '18:00:00';";
         $query53 = "update hogi05_press set num='3' where input_time BETWEEN '18:00:01' AND '24:00:00';";
         $query54 = "update hogi05_press set num='4' where input_time BETWEEN '00:00:00' AND '06:00:00';";
         $query61 = "update hogi06_press set num='1' where input_time BETWEEN '06:00:01' AND '12:00:00';";
         $query62 = "update hogi06_press set num='2' where input_time BETWEEN '12:00:01' AND '18:00:00';";
         $query63 = "update hogi06_press set num='3' where input_time BETWEEN '18:00:01' AND '24:00:00';";
         $query64 = "update hogi06_press set num='4' where input_time BETWEEN '00:00:00' AND '06:00:00';";
         $query71 = "update hogi07_press set num='1' where input_time BETWEEN '06:00:01' AND '12:00:00';";
         $query72 = "update hogi07_press set num='2' where input_time BETWEEN '12:00:01' AND '18:00:00';";
         $query73 = "update hogi07_press set num='3' where input_time BETWEEN '18:00:01' AND '24:00:00';";
         $query74 = "update hogi07_press set num='4' where input_time BETWEEN '00:00:00' AND '06:00:00';";

         // where date='$date'";
         $result11 = $connect->query($query11);
         $result12 = $connect->query($query12);
         $result13 = $connect->query($query13);
         $result14 = $connect->query($query14);
         $result15 = $connect->query($query15);
         $result16 = $connect->query($query16);
         $result17 = $connect->query($query17);
         $result18 = $connect->query($query18);
         $result21 = $connect->query($query21);
         $result22 = $connect->query($query22);
         $result23 = $connect->query($query23);
         $result24 = $connect->query($query24);
         $result31 = $connect->query($query31);
         $result32 = $connect->query($query32);
         $result33 = $connect->query($query33);
         $result34 = $connect->query($query34);
         $result41 = $connect->query($query41);
         $result42 = $connect->query($query42);
         $result43 = $connect->query($query43);
         $result44 = $connect->query($query44);
         $result51 = $connect->query($query51);
         $result52 = $connect->query($query52);
         $result53 = $connect->query($query53);
         $result54 = $connect->query($query54);
         $result61 = $connect->query($query61);
         $result62 = $connect->query($query62);
         $result63 = $connect->query($query63);
         $result64 = $connect->query($query64);
         $result71 = $connect->query($query71);
         $result72 = $connect->query($query72);
         $result73 = $connect->query($query73);
         $result74 = $connect->query($query74);

         if(!$dt) {
           $dt = date("Y-m-d");
         }
         if(!$dt1) {
           $dt1 = date("Y-m-d");
         }
         if(!$dt2) {
           $dt2 = date("Y-m-d");
         }
         if(!$dt3) {
           $dt3 = date("Y-m-d");
         }
         if(!$dt4) {
           $dt4 = date("Y-m-d");
         }
         if(!$dt5) {
           $dt5 = date("Y-m-d");
         }
         if(!$line1_1){
           $line1_1 = 190;
         }
         if(!$line1_11){
           $line1_11 = 190;
         }
         if(!$line1_2){
           $line1_2 = 190;
         }
         if(!$line1_3){
           $line1_3 = 190;
         }
         if(!$line1_4){
           $line1_4 = 190;
         }
         if(!$line1_5){
           $line1_5 = 190;
         }
         if(!$line1_6){
           $line1_6 = 190;
         }
         if(!$line1_7){
           $line1_7 = 190;
         }
         if(!$line2_1){
           $line2_1 = 190;
         }
         if(!$line2_11){
           $line2_11 = 190;
         }
         if(!$line2_2){
           $line2_2 = 190;
         }
         if(!$line2_3){
           $line2_3 = 190;
         }
         if(!$line2_4){
           $line2_4 = 190;
         }
         if(!$line2_5){
           $line2_5 = 190;
         }
         if(!$line2_6){
           $line2_6 = 190;
         }
         if(!$line2_7){
           $line2_7 = 190;
         }

         $query_al1 = "SELECT * FROM hogi01_press_hivg WHERE DATE BETWEEN '$dt1' AND '$dt2' ORDER BY date ASC, num ASC";
         $query_al11 = "SELECT * FROM hogi01_press_hivp WHERE DATE BETWEEN '$dt1' AND '$dt2' ORDER BY date ASC, num ASC";
         $query_al2 = "SELECT * FROM hogi02_press WHERE DATE BETWEEN '$dt1' AND '$dt2' ORDER BY date ASC, num ASC";
         $query_al3 = "SELECT * FROM hogi03_press WHERE DATE BETWEEN '$dt1' AND '$dt2' ORDER BY date ASC, num ASC";
         $query_al4 = "SELECT * FROM hogi04_press WHERE DATE BETWEEN '$dt1' AND '$dt2' ORDER BY date ASC, num ASC";
         $query_al5 = "SELECT * FROM hogi05_press WHERE DATE BETWEEN '$dt1' AND '$dt2' ORDER BY date ASC, num ASC";
         $query_al6 = "SELECT * FROM hogi06_press WHERE DATE BETWEEN '$dt1' AND '$dt2' ORDER BY date ASC, num ASC";
         $query_al7 = "SELECT * FROM hogi07_press WHERE DATE BETWEEN '$dt1' AND '$dt2' ORDER BY date ASC, num ASC";

         $query_all1 = "SELECT * FROM hogi01_press_hivg WHERE DATE BETWEEN '$dt3' AND '$dt4' ORDER BY date ASC, num ASC";
         $query_all11 = "SELECT * FROM hogi01_press_hivp WHERE DATE BETWEEN '$dt3' AND '$dt4' ORDER BY date ASC, num ASC";
         $query_all2 = "SELECT * FROM hogi02_press WHERE DATE BETWEEN '$dt3' AND '$dt4' ORDER BY date ASC, num ASC";
         $query_all3 = "SELECT * FROM hogi03_press WHERE DATE BETWEEN '$dt3' AND '$dt4' ORDER BY date ASC, num ASC";
         $query_all4 = "SELECT * FROM hogi04_press WHERE DATE BETWEEN '$dt3' AND '$dt4' ORDER BY date ASC, num ASC";
         $query_all5 = "SELECT * FROM hogi05_press WHERE DATE BETWEEN '$dt3' AND '$dt4' ORDER BY date ASC, num ASC";
         $query_all6 = "SELECT * FROM hogi06_press WHERE DATE BETWEEN '$dt3' AND '$dt4' ORDER BY date ASC, num ASC";
         $query_all7 = "SELECT * FROM hogi07_press WHERE DATE BETWEEN '$dt3' AND '$dt4' ORDER BY date ASC, num ASC";

         // where date='$date'";

         $result_al1 = $connect->query($query_al1);
         $rows_1_1 = array();
         while($row_1_1=mysqli_fetch_array($result_al1)) {
           $rows_1_1[] = $row_1_1;
         };
         $result_al11 = $connect->query($query_al11);
         $rows_1_11 = array();
         while($row_1_11=mysqli_fetch_array($result_al11)) {
           $rows_1_11[] = $row_1_11;
         };
         $result_al2 = $connect->query($query_al2);
         $rows_1_2 = array();
         while($row_1_2=mysqli_fetch_array($result_al2)) {
           $rows_1_2[] = $row_1_2;
         };
         $result_al3 = $connect->query($query_al3);
         $rows_1_3 = array();
         while($row_1_3=mysqli_fetch_array($result_al3)) {
           $rows_1_3[] = $row_1_3;
         };
         $result_al4 = $connect->query($query_al4);
         $rows_1_4 = array();
         while($row_1_4=mysqli_fetch_array($result_al4)) {
           $rows_1_4[] = $row_1_4;
         };
         $result_al5 = $connect->query($query_al5);
         $rows_1_5 = array();
         while($row_1_5=mysqli_fetch_array($result_al5)) {
           $rows_1_5[] = $row_1_5;
         };
         $result_al6 = $connect->query($query_al6);
         $rows_1_6 = array();
         while($row_1_6=mysqli_fetch_array($result_al6)) {
           $rows_1_6[] = $row_1_6;
         };
         $result_al7 = $connect->query($query_al7);
         $rows_1_7 = array();
         while($row_1_7=mysqli_fetch_array($result_al7)) {
           $rows_1_7[] = $row_1_7;
         };


         $result_all1 = $connect->query($query_all1);
         $rows2_1 = array();
         while($row2_1=mysqli_fetch_array($result_all1)) {
           $rows2_1[] = $row2_1;
         };
         $result_all11 = $connect->query($query_all11);
         $rows2_11 = array();
         while($row2_11=mysqli_fetch_array($result_all11)) {
           $rows2_11[] = $row2_11;
         };
         $result_all2 = $connect->query($query_all2);
         $rows2_2 = array();
         while($row2_2=mysqli_fetch_array($result_all2)) {
           $rows2_2[] = $row2_2;
         };
         $result_all3 = $connect->query($query_all3);
         $rows2_3 = array();
         while($row2_3=mysqli_fetch_array($result_all3)) {
           $rows2_3[] = $row2_3;
         };
         $result_all4 = $connect->query($query_all4);
         $rows2_4 = array();
         while($row2_4=mysqli_fetch_array($result_all4)) {
           $rows2_4[] = $row2_4;
         };
         $result_all5 = $connect->query($query_all5);
         $rows2_5 = array();
         while($row2_5=mysqli_fetch_array($result_all5)) {
           $rows2_5[] = $row2_5;
         };
         $result_all6 = $connect->query($query_all6);
         $rows2_6 = array();
         while($row2_6=mysqli_fetch_array($result_all6)) {
           $rows2_6[] = $row2_6;
         };
         $result_all7 = $connect->query($query_all7);
         $rows2_7 = array();
         while($row2_7=mysqli_fetch_array($result_all7)) {
           $rows2_7[] = $row2_7;
         };

         $query1_1 = "SELECT * from hogi01_count where DATE='$dt5' and standard_1='HIVP 250 x 6250'AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
         $query1_2 = "SELECT * from hogi01_count where DATE='$dt5' and standard_1='HIVP 250 x 6250'AND CHECKTIME_1  NOT BETWEEN '06:00:01' AND '18:00:00'";

         $query2_1 = "SELECT * from hogi02_count where DATE='$dt5' and standard_1='PVC DC 300 x 6250' AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
         $query2_2 = "SELECT * from hogi02_count where DATE='$dt5' and standard_1='PVC DC 300 x 6250'AND CHECKTIME_1  NOT BETWEEN '06:00:01' AND '18:00:00'";
         $query3_1 = "SELECT * from hogi03_count where DATE='$dt5' and standard_1='PVC DC 250 x 6250' AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
         $query3_2 = "SELECT * from hogi03_count where DATE='$dt5' and standard_1='PVC DC 250 x 6250'AND CHECKTIME_1  NOT BETWEEN '06:00:01' AND '18:00:00'";
         $query4_1 = "SELECT * from hogi04_count where DATE='$dt5' and standard_1='PVC DC 450 x 6350' AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
         $query4_2 = "SELECT * from hogi04_count where DATE='$dt5' and standard_1='PVC DC 450 x 6350'AND CHECKTIME_1  NOT BETWEEN '06:00:01' AND '18:00:00'";
         $query5_1 = "SELECT * from hogi05_count where DATE='$dt5' and standard_1='PVC DC 300 x 6070' AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
         $query5_2 = "SELECT * from hogi05_count where DATE='$dt5' and standard_1='PVC DC 300 x 6070'AND CHECKTIME_1  NOT BETWEEN '06:00:01' AND '18:00:00'";

         $query6_1 = "SELECT * from hogi06_count where DATE='$dt5' and standard_1='PVC DC 400 x 6250' AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
         $query6_2 = "SELECT * from hogi06_count where DATE='$dt5' and standard_1='PVC DC 400 x 6250'AND CHECKTIME_1  NOT BETWEEN '06:00:01' AND '18:00:00'";
         $query7_1 = "SELECT * from hogi07_count where DATE='$dt5' and standard_1='PVC DC 200 x 6250' AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
         $query7_2 = "SELECT * from hogi07_count where DATE='$dt5' and standard_1='PVC DC 200 x 6250'AND CHECKTIME_1  NOT BETWEEN '06:00:01' AND '18:00:00'";

         $query1_1_m = "SELECT * from hogi01_mix where DATE='$dt5'AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
         $query1_2_m = "SELECT * from hogi01_mix where DATE='$dt5'AND CHECKTIME_1  NOT BETWEEN '06:00:01' AND '18:00:00'";
         $query2_1_m = "SELECT * from hogi02_mix where DATE='$dt5'AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
         $query2_2_m = "SELECT * from hogi02_mix where DATE='$dt5'AND CHECKTIME_1  NOT BETWEEN '06:00:01' AND '18:00:00'";
         $query3_1_m = "SELECT * from hogi03_mix where DATE='$dt5'AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
         $query3_2_m = "SELECT * from hogi03_mix where DATE='$dt5'AND CHECKTIME_1  NOT BETWEEN '06:00:01' AND '18:00:00'";
         $query4_1_m = "SELECT * from hogi04_mix where DATE='$dt5'AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
         $query4_2_m = "SELECT * from hogi04_mix where DATE='$dt5'AND CHECKTIME_1  NOT BETWEEN '06:00:01' AND '18:00:00'";
         $query5_1_m = "SELECT * from hogi05_mix where DATE='$dt5'AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
         $query5_2_m = "SELECT * from hogi05_mix where DATE='$dt5'AND CHECKTIME_1  NOT BETWEEN '06:00:01' AND '18:00:00'";
         $query6_1_m = "SELECT * from hogi06_mix where DATE='$dt5'AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
         $query6_2_m = "SELECT * from hogi06_mix where DATE='$dt5'AND CHECKTIME_1  NOT BETWEEN '06:00:01' AND '18:00:00'";
         $query7_1_m = "SELECT * from hogi07_mix where DATE='$dt5'AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
         $query7_2_m = "SELECT * from hogi07_mix where DATE='$dt5'AND CHECKTIME_1  NOT BETWEEN '06:00:01' AND '18:00:00'";


         $result1_1 = $connect->query($query1_1);
         $result1_2 = $connect->query($query1_2);

         $result2_1 = $connect->query($query2_1);
         $result2_2 = $connect->query($query2_2);
         $result3_1 = $connect->query($query3_1);
         $result3_2 = $connect->query($query3_2);
         $result4_1 = $connect->query($query4_1);
         $result4_2 = $connect->query($query4_2);
         $result5_1 = $connect->query($query5_1);
         $result5_2 = $connect->query($query5_2);

         $result6_1 = $connect->query($query6_1);
         $result6_2 = $connect->query($query6_2);
         $result7_1 = $connect->query($query7_1);
         $result7_2 = $connect->query($query7_2);

         $result1_1_m = $connect->query($query1_1_m);
         $result1_2_m = $connect->query($query1_2_m);

         $result2_1_m = $connect->query($query2_1_m);
         $result2_2_m = $connect->query($query2_2_m);
         $result3_1_m = $connect->query($query3_1_m);
         $result3_2_m = $connect->query($query3_2_m);
         $result4_1_m = $connect->query($query4_1_m);
         $result4_2_m = $connect->query($query4_2_m);
         $result5_1_m = $connect->query($query5_1_m);
         $result5_2_m = $connect->query($query5_2_m);

         $result6_1_m = $connect->query($query6_1_m);
         $result6_2_m = $connect->query($query6_2_m);
         $result7_1_m = $connect->query($query7_1_m);
         $result7_2_m = $connect->query($query7_2_m);

         $row1_1=mysqli_fetch_array($result1_1);
         $row1_2=mysqli_fetch_array($result1_2);

         $row2_1=mysqli_fetch_array($result2_1);
         $row2_2=mysqli_fetch_array($result2_2);
         $row3_1=mysqli_fetch_array($result3_1);
         $row3_2=mysqli_fetch_array($result3_2);
         $row4_1=mysqli_fetch_array($result4_1);
         $row4_2=mysqli_fetch_array($result4_2);
         $row5_1=mysqli_fetch_array($result5_1);
         $row5_2=mysqli_fetch_array($result5_2);

         $row6_1=mysqli_fetch_array($result6_1);
         $row6_2=mysqli_fetch_array($result6_2);
         $row7_1=mysqli_fetch_array($result7_1);
         $row7_2=mysqli_fetch_array($result7_2);


         $row1_1_m=mysqli_fetch_array($result1_1_m);
         $row1_2_m=mysqli_fetch_array($result1_2_m);

         $row2_1_m=mysqli_fetch_array($result2_1_m);
         $row2_2_m=mysqli_fetch_array($result2_2_m);
         $row3_1_m=mysqli_fetch_array($result3_1_m);
         $row3_2_m=mysqli_fetch_array($result3_2_m);
         $row4_1_m=mysqli_fetch_array($result4_1_m);
         $row4_2_m=mysqli_fetch_array($result4_2_m);
         $row5_1_m=mysqli_fetch_array($result5_1_m);
         $row5_2_m=mysqli_fetch_array($result5_2_m);

         $row6_1_m=mysqli_fetch_array($result6_1_m);
         $row6_2_m=mysqli_fetch_array($result6_2_m);
         $row7_1_m=mysqli_fetch_array($result7_1_m);
         $row7_2_m=mysqli_fetch_array($result7_2_m);



         if(!$row1_1['amount_1'])
         {
           $row1_1['amount_1'] =0;
         }
         if(!$row1_1['amount_2'])
         {
           $row1_1['amount_2'] =0;
         }
         if(!$row1_1['amount_3'])
         {
           $row1_1['amount_3'] =0;
         }
         if(!$row2_1['amount_1'])
         {
           $row2_1['amount_1'] =0;
         }
         if(!$row2_1['amount_2'])
         {
           $row2_1['amount_2'] =0;
         }
         if(!$row3_1['amount_1'])
         {
           $row3_1['amount_1'] =0;
         }
         if(!$row3_1['amount_2'])
         {
           $row3_1['amount_2'] =0;
         }
         if(!$row4_1['amount_1'])
         {
           $row4_1['amount_1'] =0;
         }
         if(!$row4_1['amount_2'])
         {
           $row4_1['amount_2'] =0;
         }
         if(!$row5_1['amount_1'])
         {
           $row5_1['amount_1'] =0;
         }
         if(!$row5_1['amount_2'])
         {
           $row5_1['amount_2'] =0;
         }
         if(!$row5_1['amount_3'])
         {
           $row5_1['amount_3'] =0;
         }
         if(!$row6_1['amount_1'])
         {
           $row6_1['amount_1'] =0;
         }
         if(!$row6_1['amount_2'])
         {
           $row6_1['amount_2'] =0;
         }
         if(!$row7_1['amount_1'])
         {
           $row7_1['amount_1'] =0;
         }
         if(!$row7_1['amount_2'])
         {
           $row7_1['amount_2'] =0;
         }

         ////////////////////////////////////////
         if(!$row1_2['amount_1'])
         {
           $row1_2['amount_1'] =0;
         }
         if(!$row1_2['amount_2'])
         {
           $row1_2['amount_2'] =0;
         }
         if(!$row1_2['amount_3'])
         {
           $row1_2['amount_3'] =0;
         }
         if(!$row2_2['amount_1'])
         {
           $row2_2['amount_1'] =0;
         }
         if(!$row2_2['amount_2'])
         {
           $row2_2['amount_2'] =0;
         }
         if(!$row3_2['amount_1'])
         {
           $row3_2['amount_1'] =0;
         }
         if(!$row3_2['amount_2'])
         {
           $row3_2['amount_2'] =0;
         }
         if(!$row4_2['amount_1'])
         {
           $row4_2['amount_1'] =0;
         }
         if(!$row4_2['amount_2'])
         {
           $row4_2['amount_2'] =0;
         }
         if(!$row5_2['amount_1'])
         {
           $row5_2['amount_1'] =0;
         }
         if(!$row5_2['amount_2'])
         {
           $row5_2['amount_2'] =0;
         }
         if(!$row5_2['amount_3'])
         {
           $row5_2['amount_3'] =0;
         }
         if(!$row6_2['amount_1'])
         {
           $row6_2['amount_1'] =0;
         }
         if(!$row6_2['amount_2'])
         {
           $row6_2['amount_2'] =0;
         }
         if(!$row7_2['amount_1'])
         {
           $row7_2['amount_1'] =0;
         }
         if(!$row7_2['amount_2'])
         {
           $row7_2['amount_2'] =0;
         }

         ///////////////////////////////////////////////////////////////////////////////////////////////////////////

         if(!$row1_1_m['onemix_1'])
         {
           $row1_1_m['onemix_1'] =0;
         }
         if(!$row1_1_m['onemix_2'])
         {
           $row1_1_m['onemix_2'] =0;
         }


         if(!$row2_1_m['onemix_1'])
         {
           $row2_1_m['onemix_1'] =0;
         }

         if(!$row3_1_m['onemix_1'])
         {
           $row3_1_m['onemix_1'] =0;
         }

         if(!$row4_1_m['onemix_1'])
         {
           $row4_1_m['onemix_1'] =0;
         }

         if(!$row5_1_m['onemix_1'])
         {
           $row5_1_m['onemix_1'] =0;
         }

         if(!$row6_1_m['onemix_1'])
         {
           $row6_1_m['onemix_1'] =0;
         }

         if(!$row7_1_m['onemix_1'])
         {
           $row7_1_m['onemix_1'] =0;
         }


         ////////////////////////////////////////
         if(!$row1_2_m['onemix_1'])
         {
           $row1_2_m['onemix_1'] =0;
         }
         if(!$row1_2_m['onemix_2'])
         {
           $row1_2_m['onemix_2'] =0;
         }


         if(!$row2_2_m['onemix_1'])
         {
           $row2_2_m['onemix_1'] =0;
         }

         if(!$row3_2_m['onemix_1'])
         {
           $row3_2_m['onemix_1'] =0;
         }

         if(!$row4_2_m['onemix_1'])
         {
           $row4_2_m['onemix_1'] =0;
         }

         if(!$row5_2_m['onemix_1'])
         {
           $row5_2_m['onemix_1'] =0;
         }


         if(!$row6_2_m['onemix_1'])
         {
           $row6_2_m['onemix_1'] =0;
         }

         if(!$row7_2_m['onemix_1'])
         {
           $row7_2_m['onemix_1'] =0;
         }

         //#########################
         if(!$row1_1_m['mixcount_1'])
         {
           $row1_1_m['mixcount_1'] =0;
         }
         if(!$row1_1_m['mixcount_2'])
         {
           $row1_1_m['mixcount_2'] =0;
         }

         if(!$row2_1_m['mixcount_1'])
         {
           $row2_1_m['mixcount_1'] =0;
         }

         if(!$row3_1_m['mixcount_1'])
         {
           $row3_1_m['mixcount_1'] =0;
         }

         if(!$row4_1_m['mixcount_1'])
         {
           $row4_1_m['mixcount_1'] =0;
         }

         if(!$row5_1_m['mixcount_1'])
         {
           $row5_1_m['mixcount_1'] =0;
         }

         if(!$row6_1_m['mixcount_1'])
         {
           $row6_1_m['mixcount_1'] =0;
         }

         if(!$row7_1_m['mixcount_1'])
         {
           $row7_1_m['mixcount_1'] =0;
         }


         ////////////////////////////////////////
         if(!$row1_2_m['mixcount_1'])
         {
           $row1_2_m['mixcount_1'] =0;
         }
         if(!$row1_2_m['mixcount_2'])
         {
           $row1_2_m['mixcount_2'] =0;
         }


         if(!$row2_2_m['mixcount_1'])
         {
           $row2_2_m['mixcount_1'] =0;
         }

         if(!$row3_2_m['mixcount_1'])
         {
           $row3_2_m['mixcount_1'] =0;
         }

         if(!$row4_2_m['mixcount_1'])
         {
           $row4_2_m['mixcount_1'] =0;
         }

         if(!$row5_2_m['mixcount_1'])
         {
           $row5_2_m['mixcount_1'] =0;
         }


         if(!$row6_2_m['mixcount_1'])
         {
           $row6_2_m['mixcount_1'] =0;
         }

         if(!$row7_2_m['mixcount_1'])
         {
           $row7_2_m['mixcount_1'] =0;
         }

         //////////////////////////

         if(!$row1_1['failure_1'])
         {
           $row1_1['failure_1'] = 0;
         }
         if(!$row1_1['failure_2'])
         {
           $row1_1['failure_2'] = 0;
         }
         if(!$row1_1['failure_3'])
         {
           $row1_1['failure_3'] = 0;
         }
         if(!$row2_1['failure_1'])
         {
           $row2_1['failure_1'] = 0;
         }
         if(!$row2_1['failure_2'])
         {
           $row2_1['failure_2'] = 0;
         }
         if(!$row3_1['failure_1'])
         {
           $row3_1['failure_1'] = 0;
         }
         if(!$row3_1['failure_2'])
         {
           $row3_1['failure_2'] = 0;
         }

         if(!$row4_1['failure_1'])
         {
           $row4_1['failure_1'] = 0;
         }
         if(!$row4_1['failure_2'])
         {
           $row4_1['failure_2'] = 0;
         }

         if(!$row5_1['failure_1'])
         {
           $row5_1['failure_1'] = 0;
         }
         if(!$row5_1['failure_2'])
         {
           $row5_1['failure_2'] = 0;
         }
         if(!$row5_1['failure_3'])
         {
           $row5_1['failure_3'] = 0;
         }

         if(!$row6_1['failure_1'])
         {
           $row6_1['failure_1'] = 0;
         }
         if(!$row6_1['failure_2'])
         {
           $row6_1['failure_2'] = 0;
         }

         if(!$row7_1['failure_1'])
         {
           $row7_1['failure_1'] = 0;
         }
         if(!$row7_1['failure_2'])
         {
           $row7_1['failure_2'] = 0;
         }
         ////////////////////////////////////////////////////////////////

         if(!$row1_2['failure_1'])
         {
           $row1_2['failure_1'] = 0;
         }
         if(!$row1_2['failure_2'])
         {
           $row1_2['failure_2'] = 0;
         }
         if(!$row1_2['failure_3'])
         {
           $row1_2['failure_3'] = 0;
         }
         if(!$row2_2['failure_1'])
         {
           $row2_2['failure_1'] = 0;
         }
         if(!$row2_2['failure_2'])
         {
           $row2_2['failure_2'] = 0;
         }
         if(!$row3_2['failure_1'])
         {
           $row3_2['failure_1'] = 0;
         }
         if(!$row3_2['failure_2'])
         {
           $row3_2['failure_2'] = 0;
         }

         if(!$row4_2['failure_1'])
         {
           $row4_2['failure_1'] = 0;
         }
         if(!$row4_2['failure_2'])
         {
           $row4_2['failure_2'] = 0;
         }

         if(!$row5_2['failure_1'])
         {
           $row5_2['failure_1'] = 0;
         }
         if(!$row5_2['failure_2'])
         {
           $row5_2['failure_2'] = 0;
         }
         if(!$row5_2['failure_3'])
         {
           $row5_2['failure_3'] = 0;
         }

         if(!$row6_2['failure_1'])
         {
           $row6_2['failure_1'] = 0;
         }
         if(!$row6_2['failure_2'])
         {
           $row6_2['failure_2'] = 0;
         }

         if(!$row7_2['failure_1'])
         {
           $row7_2['failure_1'] = 0;
         }
         if(!$row7_2['failure_2'])
         {
           $row7_2['failure_2'] = 0;
         }

         $se_1n = $row1_1_m['onemix_1'];
         $se_1b =  $row1_2_m['onemix_1'];
         $hee_1n = $row1_1_m['mixcount_1'];
         $hee_1b =  $row1_2_m['mixcount_1'];
         $se_12n = $row1_1_m['onemix_2'];
         $se_12b =  $row1_2_m['onemix_2'];
         $hee_12n = $row1_1_m['mixcount_2'];
         $hee_12b =  $row1_2_m['mixcount_2'];
         $se_2n = $row2_1_m['onemix_1'];
         $se_2b =  $row2_2_m['onemix_1'];
         $hee_2n = $row2_1_m['mixcount_1'];
         $hee_2b =  $row2_2_m['mixcount_1'];
         $se_3n = $row3_1_m['onemix_1'];
         $se_3b =  $row3_2_m['onemix_1'];
         $hee_3n = $row3_1_m['mixcount_1'];
         $hee_3b =  $row3_2_m['mixcount_1'];
         $se_4n = $row4_1_m['onemix_1'];
         $se_4b =  $row4_2_m['onemix_1'];
         $hee_4n = $row4_1_m['mixcount_1'];
         $hee_4b =  $row4_2_m['mixcount_1'];
         $se_5n = $row5_1_m['onemix_1'];
         $se_5b =  $row5_2_m['onemix_1'];
         $hee_5n = $row5_1_m['mixcount_1'];
         $hee_5b =  $row5_2_m['mixcount_1'];
         $se_6n = $row6_1_m['onemix_1'];
         $se_6b =  $row6_2_m['onemix_1'];
         $hee_6n = $row6_1_m['mixcount_1'];
         $hee_6b =  $row6_2_m['mixcount_1'];
         $se_7n = $row7_1_m['onemix_1'];
         $se_7b =  $row7_2_m['onemix_1'];
         $hee_7n = $row7_1_m['mixcount_1'];
         $hee_7b =  $row7_2_m['mixcount_1'];


         $ya_1 = $row1_1['failure_1'] + $row1_2['failure_1'];
         $ya_2 = $row2_1['failure_1'] + $row2_2['failure_1'];
         $ya_3 = $row3_1['failure_1'] + $row3_2['failure_1'];
         $ya_4 = $row4_1['failure_1'] + $row4_2['failure_1'];
         $ya_5 = $row5_1['failure_1'] + $row5_2['failure_1'];
         $ya_6 = $row6_1['failure_1'] + $row6_2['failure_1'];
         $ya_7 = $row7_1['failure_1'] + $row7_2['failure_1'];

         $ya_1_2 = $row1_1['failure_2'] + $row1_2['failure_2'];
         $ya_2_2 = $row2_1['failure_2'] + $row2_2['failure_2'];
         $ya_3_2 = $row3_1['failure_2'] + $row3_2['failure_2'];
         $ya_4_2 = $row4_1['failure_2'] + $row4_2['failure_2'];
         $ya_5_2 = $row5_1['failure_2'] + $row5_2['failure_2'];
         $ya_6_2 = $row6_1['failure_2'] + $row6_2['failure_2'];
         $ya_7_2 = $row7_1['failure_2'] + $row7_2['failure_2'];

         $ya_1_3 = $row1_1['failure_3'] + $row1_2['failure_3'];
         $ya_5_3 = $row5_1['failure_3'] + $row5_2['failure_3'];


         $ho1 = $ya_1 + $ya_1_2 + $ya_1_3;
         $ho2 = $ya_2 + $ya_2_2 ;
         $ho3 = $ya_3 + $ya_3_2 ;
         $ho4 = $ya_4 + $ya_4_2 ;
         $ho5 = $ya_5 + $ya_5_2 + $ya_5_3;
         $ho6 = $ya_6 + $ya_6_2 ;
         $ho7 = $ya_7 + $ya_7_2 ;

         $lee_1 = ($se_1n * $hee_1n)+($se_1b * $hee_1b)+($se_12n * $hee_12n)+($se_12b * $hee_12b);
         $lee_2 = ($se_2n * $hee_2n)+($se_2b * $hee_2b);
         $lee_3 = ($se_3n * $hee_3n)+($se_3b * $hee_3b);
         $lee_4 = ($se_4n * $hee_4n)+($se_4b * $hee_4b);
         $lee_5 = ($se_5n * $hee_5n)+($se_5b * $hee_5b);
         $lee_6 = ($se_6n * $hee_6n)+($se_6b * $hee_6b);
         $lee_7 = ($se_7n * $hee_7n)+($se_7b * $hee_7b);

         $king1 = (100 * $ho1) / $lee_1;
         $king2 = (100 * $ho2) / $lee_2;
         $king3 = (100 * $ho3) / $lee_3;
         $king4 = (100 * $ho4) / $lee_4;
         $king5 = (100 * $ho5) / $lee_5;
         $king6 = (100 * $ho6) / $lee_6;
         $king7 = (100 * $ho7) / $lee_7;


     ?>
     // Set new default font family and font color to mimic Bootstrap's default styling
     Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
     Chart.defaults.global.defaultFontColor = '#292b2c';

     // Area Chart Example
     var ctx1_1 = document.getElementById("myAreaChart1");

     var myArray11 = new Array();
     var myArray1 = new Array();
     var myArray2 = new Array();
     var myArray_1 = new Array();
     var myArray_2 = new Array();
     var myArray_3 = new Array();
     var myArray_4 = new Array();
     var myArray_5 = new Array();
     var myArray_6 = new Array();
     var myArray_7 = new Array();
     var myArray_8 = new Array();
     var myArray_9 = new Array();
     var myArray_10 = new Array();
     var myArray_11 = new Array();
     var myArray_12 = new Array();

     var i = 0;
     var a1="";
     var b1="";
     var up= <?=$line1_1?>+20;
     var down = <?=$line1_1?>-20;
     <?php
     foreach($rows_1_1 as $value1_1) {
       ?>
       myArray_1[i] = "<?=$value1_1['c1']?>";
       myArray_2[i] = "<?=$value1_1['c2']?>";
       myArray_3[i] = "<?=$value1_1['c3']?>";
       myArray_4[i] = "<?=$value1_1['c4']?>";
       myArray_5[i] = "<?=$value1_1['c5']?>";
       myArray_6[i] = "<?=$value1_1['c6']?>";
       myArray_7[i] = "<?=$value1_1['c1_1']?>";
       myArray_8[i] = "<?=$value1_1['c2_1']?>";
       myArray_9[i] = "<?=$value1_1['c3_1']?>";
       myArray_10[i] = "<?=$value1_1['c4_1']?>";
       myArray_11[i] = "<?=$value1_1['c5_1']?>";
       myArray_12[i] = "<?=$value1_1['H']?>";
       myArray1[i] = up;
       myArray2[i] = down;

       b1 = "<?=$value1_1['input_time']?>";
       a1 = "<?=$value1_1['date']?>";
       myArray11[i] = a1.concat(" ",b1);
       i++;
      <?php
     }
       ?>
     var myLineChart1_1 = new Chart(ctx1_1, {
       type: 'line',width: 300 ,height: 100,
       data: {
         labels: myArray11,
         datasets: [{
           label: "외,내층 c1",
           lineTension: 0.3,
           backgroundColor: "rgba(234,0,6,0.2)",
           borderColor: "rgba(234,0,6,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(234,0,6,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(234,0,6,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_1,
         },
         {
           label: "외,내층 c2",
           lineTension: 0.3,
           backgroundColor: "rgba(218,91,16,0.2)",
           borderColor: "rgba(218,91,16,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(218,91,16,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(218,91,16,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_2,
         },
         {
           label: "외,내층 c3",
           lineTension: 0.3,
           backgroundColor: "rgba(216,206,27,0.2)",
           borderColor: "rgba(216,206,27,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(216,206,27,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(216,206,27,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_3,
         },
         {
           label: "외,내층 c4",
           lineTension: 0.3,
           backgroundColor: "rgba(66,233,10,0.2)",
           borderColor: "rgba(66,233,10,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(66,233,10,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(66,233,10,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_4,
         },
         {
           label: "외,내층 c5",
           lineTension: 0.3,
           backgroundColor: "rgba(5,92,237,0.2)",
           borderColor: "rgba(5,92,237,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,92,237,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,92,237,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_5,
         },
         {
           label: "외,내층 c6",
           lineTension: 0.3,
           backgroundColor: "rgba(16,21,226,0.2)",
           borderColor: "rgba(16,21,226,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(16,21,226,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(16,21,226,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_6,
         },
         {
           label: "중간층 c1",
           lineTension: 0.3,
           backgroundColor: "rgba(82,10,233,0.2)",
           borderColor: "rgba(82,10,233,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(82,10,233,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(82,10,233,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_7,
         },
         {
           label: "중간층 c2",
           lineTension: 0.3,
           backgroundColor: "rgba(5,237,190,0.2)",
           borderColor: "rgba(5,237,190,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,237,190,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,237,190,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_8,
         },
         {
           label: "중간층 c3",
           lineTension: 0.3,
           backgroundColor: "rgba(221,21,156,0.2)",
           borderColor: "rgba(221,21,156,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(221,21,156,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(221,21,156,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_9,
         },
         {
           label: "중간층 c4",
           lineTension: 0.3,
           backgroundColor: "rgba(80,27,20,0.2)",
           borderColor: "rgba(80,27,20,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(80,27,20,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(80,27,20,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_10,
         },
         {
           label: "중간층 c5",
           lineTension: 0.3,
           backgroundColor: "rgba(40,60,44,0.2)",
           borderColor: "rgba(40,60,44,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(40,60,44,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(40,60,44,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_11,
         },
         {
           label: "중간층 H",
           lineTension: 0.3,
           backgroundColor: "rgba(158,159,167,0.2)",
           borderColor: "rgba(158,159,167,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(158,159,167,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(158,159,167,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_12,
         },
         {
           label: "up_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray1,
         },
         {
           label: "down_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray2,
         }
       ],
       },
       options: {
         scales: {
           xAxes: [{
             time: {
               unit: 'date'
             },
             gridLines: {
               display: false
             },
             ticks: {
               maxTicksLimit: 7
             }
           }],
           yAxes: [{
             ticks: {
               maxTicksLimit: 5
             },
             gridLines: {
               color: "rgba(0, 0, 0, .125)",
             }
           }],
         },
         legend: {
           display: true
         }
       }
     });

     var ctx1_11 = document.getElementById("myAreaChart11");

     var myArray11 = new Array();
     var myArray1 = new Array();
     var myArray2 = new Array();
     var myArray_1 = new Array();
     var myArray_2 = new Array();
     var myArray_3 = new Array();
     var myArray_4 = new Array();
     var myArray_5 = new Array();
     var myArray_6 = new Array();
     var myArray_7 = new Array();
     var myArray_8 = new Array();
     var myArray_9 = new Array();
     var myArray_10 = new Array();
     var myArray_11 = new Array();
     var myArray_12 = new Array();

     var i = 0;
     var a1="";
     var b1="";
     var up= <?=$line1_11?>+20;
     var down = <?=$line1_11?>-20;
     <?php
     foreach($rows_1_11 as $value1_11) {
       ?>
       myArray_1[i] = "<?=$value1_11['c1']?>";
       myArray_2[i] = "<?=$value1_11['c2']?>";
       myArray_3[i] = "<?=$value1_11['c3']?>";
       myArray_4[i] = "<?=$value1_11['c4']?>";
       myArray_5[i] = "<?=$value1_11['c5']?>";
       myArray_6[i] = "<?=$value1_11['H']?>";
       myArray_7[i] = "<?=$value1_11['c1_1']?>";
       myArray_8[i] = "<?=$value1_11['c2_1']?>";
       myArray_9[i] = "<?=$value1_11['c3_1']?>";
       myArray_10[i] = "<?=$value1_11['c4_1']?>";
       myArray_11[i] = "<?=$value1_11['c5_1']?>";
       myArray_12[i] = "<?=$value1_11['H_1']?>";

       myArray1[i] = up;
       myArray2[i] = down;

       b1 = "<?=$value1_11['input_time']?>";
       a1 = "<?=$value1_11['date']?>";
       myArray11[i] = a1.concat(" ",b1);
       i++;
      <?php
     }
       ?>
     var myLineChart1_11 = new Chart(ctx1_11, {
       type: 'line',width: 300 ,height: 100,
       data: {
         labels: myArray11,
         datasets: [{
           label: "외,내층 c1",
           lineTension: 0.3,
           backgroundColor: "rgba(234,0,6,0.2)",
           borderColor: "rgba(234,0,6,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(234,0,6,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(234,0,6,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_1,
         },
         {
           label: "외,내층 c2",
           lineTension: 0.3,
           backgroundColor: "rgba(218,91,16,0.2)",
           borderColor: "rgba(218,91,16,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(218,91,16,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(218,91,16,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_2,
         },
         {
           label: "외,내층 c3",
           lineTension: 0.3,
           backgroundColor: "rgba(216,206,27,0.2)",
           borderColor: "rgba(216,206,27,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(216,206,27,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(216,206,27,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_3,
         },
         {
           label: "외,내층 c4",
           lineTension: 0.3,
           backgroundColor: "rgba(66,233,10,0.2)",
           borderColor: "rgba(66,233,10,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(66,233,10,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(66,233,10,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_4,
         },
         {
           label: "외,내층 c5",
           lineTension: 0.3,
           backgroundColor: "rgba(5,92,237,0.2)",
           borderColor: "rgba(5,92,237,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,92,237,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,92,237,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_5,
         },
         {
           label: "외,내층 H",
           lineTension: 0.3,
           backgroundColor: "rgba(16,21,226,0.2)",
           borderColor: "rgba(16,21,226,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(16,21,226,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(16,21,226,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_6,
         },
         {
           label: "중간층 c1",
           lineTension: 0.3,
           backgroundColor: "rgba(82,10,233,0.2)",
           borderColor: "rgba(82,10,233,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(82,10,233,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(82,10,233,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_7,
         },
         {
           label: "중간층 c2",
           lineTension: 0.3,
           backgroundColor: "rgba(5,237,190,0.2)",
           borderColor: "rgba(5,237,190,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,237,190,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,237,190,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_8,
         },
         {
           label: "중간층 c3",
           lineTension: 0.3,
           backgroundColor: "rgba(221,21,156,0.2)",
           borderColor: "rgba(221,21,156,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(221,21,156,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(221,21,156,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_9,
         },
         {
           label: "중간층 c4",
           lineTension: 0.3,
           backgroundColor: "rgba(80,27,20,0.2)",
           borderColor: "rgba(80,27,20,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(80,27,20,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(80,27,20,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_10,
         },
         {
           label: "중간층 c5",
           lineTension: 0.3,
           backgroundColor: "rgba(40,60,44,0.2)",
           borderColor: "rgba(40,60,44,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(40,60,44,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(40,60,44,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_11,
         },
         {
           label: "중간층 H",
           lineTension: 0.3,
           backgroundColor: "rgba(158,159,167,0.2)",
           borderColor: "rgba(158,159,167,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(158,159,167,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(158,159,167,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_12,
         },
         {
           label: "up_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray1,
         },
         {
           label: "down_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray2,
         }
       ],
       },
       options: {
         scales: {
           xAxes: [{
             time: {
               unit: 'date'
             },
             gridLines: {
               display: false
             },
             ticks: {
               maxTicksLimit: 7
             }
           }],
           yAxes: [{
             ticks: {
               maxTicksLimit: 5
             },
             gridLines: {
               color: "rgba(0, 0, 0, .125)",
             }
           }],
         },
         legend: {
           display: true
         }
       }
     });

     var ctx1_2 = document.getElementById("myAreaChart2");

     var myArray11 = new Array();
     var myArray1 = new Array();
     var myArray2 = new Array();
     var myArray_1 = new Array();
     var myArray_2 = new Array();
     var myArray_3 = new Array();
     var myArray_4 = new Array();
     var myArray_5 = new Array();
     var myArray_6 = new Array();
     var myArray_7 = new Array();
     var myArray_8 = new Array();
     var myArray_9 = new Array();

     var i = 0;
     var a1="";
     var b1="";
     var up= <?=$line1_2?>+20;
     var down = <?=$line1_2?>-20;
     <?php
     foreach($rows_1_2 as $value1_2) {
       ?>
       myArray_1[i] = "<?=$value1_2['c1']?>";
       myArray_2[i] = "<?=$value1_2['c2']?>";
       myArray_3[i] = "<?=$value1_2['c3']?>";
       myArray_4[i] = "<?=$value1_2['c4']?>";
       myArray_5[i] = "<?=$value1_2['c5']?>";
       myArray_6[i] = "<?=$value1_2['c6']?>";
       myArray_7[i] = "<?=$value1_2['c7']?>";
       myArray_8[i] = "<?=$value1_2['c8']?>";
       myArray_9[i] = "<?=$value1_2['H']?>";

       myArray1[i] = up;
       myArray2[i] = down;

       b1 = "<?=$value1_2['input_time']?>";
       a1 = "<?=$value1_2['date']?>";
       myArray11[i] = a1.concat(" ",b1);
       i++;
      <?php
     }
       ?>
     var myLineChart1_2 = new Chart(ctx1_2, {
       type: 'line',width: 300 ,height: 100,
       data: {
         labels: myArray11,
         datasets: [{
           label: "c1",
           lineTension: 0.3,
           backgroundColor: "rgba(234,0,6,0.2)",
           borderColor: "rgba(234,0,6,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(234,0,6,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(234,0,6,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_1,
         },
         {
           label: "c2",
           lineTension: 0.3,
           backgroundColor: "rgba(218,91,16,0.2)",
           borderColor: "rgba(218,91,16,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(218,91,16,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(218,91,16,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_2,
         },
         {
           label: "c3",
           lineTension: 0.3,
           backgroundColor: "rgba(216,206,27,0.2)",
           borderColor: "rgba(216,206,27,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(216,206,27,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(216,206,27,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_3,
         },
         {
           label: "c4",
           lineTension: 0.3,
           backgroundColor: "rgba(66,233,10,0.2)",
           borderColor: "rgba(66,233,10,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(66,233,10,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(66,233,10,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_4,
         },
         {
           label: "c5",
           lineTension: 0.3,
           backgroundColor: "rgba(5,92,237,0.2)",
           borderColor: "rgba(5,92,237,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,92,237,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,92,237,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_5,
         },
         {
           label: "c6",
           lineTension: 0.3,
           backgroundColor: "rgba(16,21,226,0.2)",
           borderColor: "rgba(16,21,226,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(16,21,226,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(16,21,226,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_6,
         },
         {
           label: "c7",
           lineTension: 0.3,
           backgroundColor: "rgba(82,10,233,0.2)",
           borderColor: "rgba(82,10,233,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(82,10,233,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(82,10,233,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_7,
         },
         {
           label: "c8",
           lineTension: 0.3,
           backgroundColor: "rgba(5,237,190,0.2)",
           borderColor: "rgba(5,237,190,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,237,190,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,237,190,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_8,
         },
         {
           label: "H",
           lineTension: 0.3,
           backgroundColor: "rgba(221,21,156,0.2)",
           borderColor: "rgba(221,21,156,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(221,21,156,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(221,21,156,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_9,
         },
         {
           label: "up_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray1,
         },
         {
           label: "down_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray2,
         }
       ],
       },
       options: {
         scales: {
           xAxes: [{
             time: {
               unit: 'date'
             },
             gridLines: {
               display: false
             },
             ticks: {
               maxTicksLimit: 7
             }
           }],
           yAxes: [{
             ticks: {
               maxTicksLimit: 5
             },
             gridLines: {
               color: "rgba(0, 0, 0, .125)",
             }
           }],
         },
         legend: {
           display: true
         }
       }
     });

     var ctx1_3 = document.getElementById("myAreaChart3");

     var myArray11 = new Array();
     var myArray_1 = new Array();
     var myArray_2 = new Array();
     var myArray_3 = new Array();
     var myArray_4 = new Array();
     var myArray_5 = new Array();
     var myArray_6 = new Array();
     var myArray_7 = new Array();
     var myArray_8 = new Array();
     var myArray_9 = new Array();

     var i = 0;
     var a1="";
     var b1="";
     var up= <?=$line1_3?>+20;
     var down = <?=$line1_3?>-20;
     <?php
     foreach($rows_1_3 as $value1_3) {
       ?>
       myArray_1[i] = "<?=$value1_3['c1']?>";
       myArray_2[i] = "<?=$value1_3['c2']?>";
       myArray_3[i] = "<?=$value1_3['c3']?>";
       myArray_4[i] = "<?=$value1_3['c4']?>";
       myArray_5[i] = "<?=$value1_3['c5']?>";
       myArray_6[i] = "<?=$value1_3['c6']?>";
       myArray_7[i] = "<?=$value1_3['c7']?>";
       myArray_8[i] = "<?=$value1_3['c8']?>";
       myArray_9[i] = "<?=$value1_3['H']?>";

       myArray1[i] = up;
       myArray2[i] = down;

       b1 = "<?=$value1_3['input_time']?>";
       a1 = "<?=$value1_3['date']?>";
       myArray11[i] = a1.concat(" ",b1);
       i++;
      <?php
     }
       ?>
     var myLineChart1_3 = new Chart(ctx1_3, {
       type: 'line',width: 300 ,height: 100,
       data: {
         labels: myArray11,
         datasets: [{
           label: "c1",
           lineTension: 0.3,
           backgroundColor: "rgba(234,0,6,0.2)",
           borderColor: "rgba(234,0,6,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(234,0,6,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(234,0,6,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_1,
         },
         {
           label: "c2",
           lineTension: 0.3,
           backgroundColor: "rgba(218,91,16,0.2)",
           borderColor: "rgba(218,91,16,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(218,91,16,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(218,91,16,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_2,
         },
         {
           label: "c3",
           lineTension: 0.3,
           backgroundColor: "rgba(216,206,27,0.2)",
           borderColor: "rgba(216,206,27,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(216,206,27,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(216,206,27,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_3,
         },
         {
           label: "c4",
           lineTension: 0.3,
           backgroundColor: "rgba(66,233,10,0.2)",
           borderColor: "rgba(66,233,10,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(66,233,10,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(66,233,10,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_4,
         },
         {
           label: "c5",
           lineTension: 0.3,
           backgroundColor: "rgba(5,92,237,0.2)",
           borderColor: "rgba(5,92,237,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,92,237,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,92,237,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_5,
         },
         {
           label: "c6",
           lineTension: 0.3,
           backgroundColor: "rgba(16,21,226,0.2)",
           borderColor: "rgba(16,21,226,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(16,21,226,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(16,21,226,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_6,
         },
         {
           label: "c7",
           lineTension: 0.3,
           backgroundColor: "rgba(82,10,233,0.2)",
           borderColor: "rgba(82,10,233,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(82,10,233,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(82,10,233,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_7,
         },
         {
           label: "c8",
           lineTension: 0.3,
           backgroundColor: "rgba(5,237,190,0.2)",
           borderColor: "rgba(5,237,190,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,237,190,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,237,190,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_8,
         },
         {
           label: "H",
           lineTension: 0.3,
           backgroundColor: "rgba(221,21,156,0.2)",
           borderColor: "rgba(221,21,156,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(221,21,156,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(221,21,156,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_9,
         },
         {
           label: "up_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray1,
         },
         {
           label: "down_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray2,
         }
       ],
       },
       options: {
         scales: {
           xAxes: [{
             time: {
               unit: 'date'
             },
             gridLines: {
               display: false
             },
             ticks: {
               maxTicksLimit: 7
             }
           }],
           yAxes: [{
             ticks: {
               maxTicksLimit: 5
             },
             gridLines: {
               color: "rgba(0, 0, 0, .125)",
             }
           }],
         },
         legend: {
           display: true
         }
       }
     });

     var ctx1_4 = document.getElementById("myAreaChart4");

     var myArray11 = new Array();
     var myArray_1 = new Array();
     var myArray_2 = new Array();
     var myArray_3 = new Array();
     var myArray_4 = new Array();
     var myArray_5 = new Array();
     var myArray_6 = new Array();
     var myArray_7 = new Array();

     var i = 0;
     var a1="";
     var b1="";
     var up= <?=$line1_4?>+20;
     var down = <?=$line1_4?>-20;
     <?php
     foreach($rows_1_4 as $value1_4) {
       ?>
       myArray_1[i] = "<?=$value1_4['c1']?>";
       myArray_2[i] = "<?=$value1_4['c2']?>";
       myArray_3[i] = "<?=$value1_4['c3']?>";
       myArray_4[i] = "<?=$value1_4['c4']?>";
       myArray_5[i] = "<?=$value1_4['c5']?>";
       myArray_6[i] = up;
       myArray_7[i] = down;

       b1 = "<?=$value1_4['input_time']?>";
       a1 = "<?=$value1_4['date']?>";
       myArray11[i] = a1.concat(" ",b1);
       i++;
      <?php
     }
       ?>
     var myLineChart1_4 = new Chart(ctx1_4, {
       type: 'line',width: 300 ,height: 100,
       data: {
         labels: myArray11,
         datasets: [{
           label: "c1",
           lineTension: 0.3,
           backgroundColor: "rgba(234,0,6,0.2)",
           borderColor: "rgba(234,0,6,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(234,0,6,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(234,0,6,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_1,
         },
         {
           label: "c2",
           lineTension: 0.3,
           backgroundColor: "rgba(218,91,16,0.2)",
           borderColor: "rgba(218,91,16,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(218,91,16,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(218,91,16,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_2,
         },
         {
           label: "c3",
           lineTension: 0.3,
           backgroundColor: "rgba(216,206,27,0.2)",
           borderColor: "rgba(216,206,27,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(216,206,27,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(216,206,27,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_3,
         },
         {
           label: "c4",
           lineTension: 0.3,
           backgroundColor: "rgba(66,233,10,0.2)",
           borderColor: "rgba(66,233,10,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(66,233,10,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(66,233,10,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_4,
         },
         {
           label: "c5",
           lineTension: 0.3,
           backgroundColor: "rgba(5,92,237,0.2)",
           borderColor: "rgba(5,92,237,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,92,237,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,92,237,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_5,
         },
         {
           label: "up_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray_6,
         },
         {
           label: "down_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray_7,
         }
       ],
       },
       options: {
         scales: {
           xAxes: [{
             time: {
               unit: 'date'
             },
             gridLines: {
               display: false
             },
             ticks: {
               maxTicksLimit: 7
             }
           }],
           yAxes: [{
             ticks: {
               maxTicksLimit: 5
             },
             gridLines: {
               color: "rgba(0, 0, 0, .125)",
             }
           }],
         },
         legend: {
           display: true
         }
       }
     });

     var ctx1_5 = document.getElementById("myAreaChart5");

     var myArray11 = new Array();
     var myArray_1 = new Array();
     var myArray_2 = new Array();
     var myArray_3 = new Array();
     var myArray_4 = new Array();
     var myArray_5 = new Array();
     var myArray_6 = new Array();
     var myArray_7 = new Array();

     var i = 0;
     var a1="";
     var b1="";
     var up= <?=$line1_5?>+20;
     var down = <?=$line1_5?>-20;
     <?php
     foreach($rows_1_5 as $value1_5) {
       ?>
       myArray_1[i] = "<?=$value1_5['c1']?>";
       myArray_2[i] = "<?=$value1_5['c2']?>";
       myArray_3[i] = "<?=$value1_5['c3']?>";
       myArray_4[i] = "<?=$value1_5['c4']?>";
       myArray_5[i] = "<?=$value1_5['c5']?>";
       myArray_6[i] = up;
       myArray_7[i] = down;

       b1 = "<?=$value1_5['input_time']?>";
       a1 = "<?=$value1_5['date']?>";
       myArray11[i] = a1.concat(" ",b1);
       i++;
      <?php
     }
       ?>
     var myLineChart1_5 = new Chart(ctx1_5, {
       type: 'line',width: 300 ,height: 100,
       data: {
         labels: myArray11,
         datasets: [{
           label: "c1",
           lineTension: 0.3,
           backgroundColor: "rgba(234,0,6,0.2)",
           borderColor: "rgba(234,0,6,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(234,0,6,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(234,0,6,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_1,
         },
         {
           label: "c2",
           lineTension: 0.3,
           backgroundColor: "rgba(218,91,16,0.2)",
           borderColor: "rgba(218,91,16,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(218,91,16,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(218,91,16,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_2,
         },
         {
           label: "c3",
           lineTension: 0.3,
           backgroundColor: "rgba(216,206,27,0.2)",
           borderColor: "rgba(216,206,27,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(216,206,27,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(216,206,27,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_3,
         },
         {
           label: "c4",
           lineTension: 0.3,
           backgroundColor: "rgba(66,233,10,0.2)",
           borderColor: "rgba(66,233,10,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(66,233,10,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(66,233,10,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_4,
         },
         {
           label: "c5",
           lineTension: 0.3,
           backgroundColor: "rgba(5,92,237,0.2)",
           borderColor: "rgba(5,92,237,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,92,237,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,92,237,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_5,
         },
         {
           label: "up_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray_6,
         },
         {
           label: "down_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray_7,
         }
       ],
       },
       options: {
         scales: {
           xAxes: [{
             time: {
               unit: 'date'
             },
             gridLines: {
               display: false
             },
             ticks: {
               maxTicksLimit: 7
             }
           }],
           yAxes: [{
             ticks: {
               maxTicksLimit: 5
             },
             gridLines: {
               color: "rgba(0, 0, 0, .125)",
             }
           }],
         },
         legend: {
           display: true
         }
       }
     });

     var ctx1_6 = document.getElementById("myAreaChart6");

     var myArray11 = new Array();
     var myArray_1 = new Array();
     var myArray_2 = new Array();
     var myArray_3 = new Array();
     var myArray_4 = new Array();
     var myArray_6 = new Array();
     var myArray_7 = new Array();

     var i = 0;
     var a1="";
     var b1="";
     var up= <?=$line1_6?>+20;
     var down = <?=$line1_6?>-20;
     <?php
     foreach($rows_1_6 as $value1_6) {
       ?>
       myArray_1[i] = "<?=$value1_6['c1']?>";
       myArray_2[i] = "<?=$value1_6['c2']?>";
       myArray_3[i] = "<?=$value1_6['c3']?>";
       myArray_4[i] = "<?=$value1_6['c4']?>";
       myArray_6[i] = up;
       myArray_7[i] = down;

       b1 = "<?=$value1_6['input_time']?>";
       a1 = "<?=$value1_6['date']?>";
       myArray11[i] = a1.concat(" ",b1);
       i++;
      <?php
     }
       ?>
     var myLineChart1_6 = new Chart(ctx1_6, {
       type: 'line',width: 300 ,height: 100,
       data: {
         labels: myArray11,
         datasets: [{
           label: "c1",
           lineTension: 0.3,
           backgroundColor: "rgba(234,0,6,0.2)",
           borderColor: "rgba(234,0,6,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(234,0,6,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(234,0,6,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_1,
         },
         {
           label: "c2",
           lineTension: 0.3,
           backgroundColor: "rgba(218,91,16,0.2)",
           borderColor: "rgba(218,91,16,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(218,91,16,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(218,91,16,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_2,
         },
         {
           label: "c3",
           lineTension: 0.3,
           backgroundColor: "rgba(216,206,27,0.2)",
           borderColor: "rgba(216,206,27,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(216,206,27,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(216,206,27,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_3,
         },
         {
           label: "c4",
           lineTension: 0.3,
           backgroundColor: "rgba(66,233,10,0.2)",
           borderColor: "rgba(66,233,10,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(66,233,10,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(66,233,10,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_4,
         },
         {
           label: "up_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray_6,
         },
         {
           label: "down_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray_7,
         }
       ],
       },
       options: {
         scales: {
           xAxes: [{
             time: {
               unit: 'date'
             },
             gridLines: {
               display: false
             },
             ticks: {
               maxTicksLimit: 7
             }
           }],
           yAxes: [{
             ticks: {
               maxTicksLimit: 5
             },
             gridLines: {
               color: "rgba(0, 0, 0, .125)",
             }
           }],
         },
         legend: {
           display: true
         }
       }
     });

     var ctx1_7 = document.getElementById("myAreaChart7");

     var myArray11 = new Array();
     var myArray1 = new Array();
     var myArray2 = new Array();
     var myArray_1 = new Array();
     var myArray_2 = new Array();
     var myArray_3 = new Array();
     var myArray_4 = new Array();
     var myArray_5 = new Array();
     var myArray_6 = new Array();


     var i = 0;
     var a1="";
     var b1="";
     var up= <?=$line1_7?>+20;
     var down = <?=$line1_7?>-20;
     <?php
     foreach($rows_1_7 as $value1_7) {
       ?>
       myArray_1[i] = "<?=$value1_7['c1']?>";
       myArray_2[i] = "<?=$value1_7['c2']?>";
       myArray_3[i] = "<?=$value1_7['c3']?>";
       myArray_4[i] = "<?=$value1_7['c4']?>";
       myArray_5[i] = "<?=$value1_7['c5']?>";
       myArray_6[i] = "<?=$value1_7['c6']?>";
       myArray1[i] = up;
       myArray2[i] = down;

       b1 = "<?=$value1_7['input_time']?>";
       a1 = "<?=$value1_7['date']?>";
       myArray11[i] = a1.concat(" ",b1);
       i++;
      <?php
     }
       ?>
     var myLineChart1_7 = new Chart(ctx1_7, {
       type: 'line',width: 300 ,height: 100,
       data: {
         labels: myArray11,
         datasets: [{
           label: "c1",
           lineTension: 0.3,
           backgroundColor: "rgba(234,0,6,0.2)",
           borderColor: "rgba(234,0,6,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(234,0,6,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(234,0,6,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_1,
         },
         {
           label: "c2",
           lineTension: 0.3,
           backgroundColor: "rgba(218,91,16,0.2)",
           borderColor: "rgba(218,91,16,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(218,91,16,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(218,91,16,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_2,
         },
         {
           label: "c3",
           lineTension: 0.3,
           backgroundColor: "rgba(216,206,27,0.2)",
           borderColor: "rgba(216,206,27,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(216,206,27,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(216,206,27,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_3,
         },
         {
           label: "c4",
           lineTension: 0.3,
           backgroundColor: "rgba(66,233,10,0.2)",
           borderColor: "rgba(66,233,10,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(66,233,10,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(66,233,10,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_4,
         },
         {
           label: "c5",
           lineTension: 0.3,
           backgroundColor: "rgba(5,92,237,0.2)",
           borderColor: "rgba(5,92,237,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,92,237,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,92,237,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_5,
         },
         {
           label: "c6",
           lineTension: 0.3,
           backgroundColor: "rgba(16,21,226,0.2)",
           borderColor: "rgba(16,21,226,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(16,21,226,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(16,21,226,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_6,
         },
         {
           label: "up_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray1,
         },
         {
           label: "down_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray2,
         }
       ],
       },
       options: {
         scales: {
           xAxes: [{
             time: {
               unit: 'date'
             },
             gridLines: {
               display: false
             },
             ticks: {
               maxTicksLimit: 7
             }
           }],
           yAxes: [{
             ticks: {
               maxTicksLimit: 5
             },
             gridLines: {
               color: "rgba(0, 0, 0, .125)",
             }
           }],
         },
         legend: {
           display: true
         }
       }
     });

     var ctx2_1 = document.getElementById("myAreaChart1_1");

     var myArray11 = new Array();
     var myArray1 = new Array();
     var myArray2 = new Array();
     var myArray_1 = new Array();
     var myArray_2 = new Array();
     var myArray_3 = new Array();
     var myArray_4 = new Array();
     var myArray_5 = new Array();
     var myArray_6 = new Array();
     var myArray_7 = new Array();


     var i = 0;
     var a1="";
     var b1="";
     var up= <?=$line2_1?>+20;
     var down = <?=$line2_1?>-20;
     <?php
     foreach($rows2_1 as $value2_1) {
       ?>
       myArray_1[i] = "<?=$value2_1['H_1']?>";
       myArray_2[i] = "<?=$value2_1['corex']?>";
       myArray_3[i] = "<?=$value2_1['d1']?>";
       myArray_4[i] = "<?=$value2_1['d2']?>";
       myArray_5[i] = "<?=$value2_1['d3']?>";
       myArray_6[i] = "<?=$value2_1['d4']?>";
       myArray_7[i] = "<?=$value2_1['d5']?>";

       myArray1[i] = up;
       myArray2[i] = down;

       b1 = "<?=$value2_1['input_time']?>";
       a1 = "<?=$value2_1['date']?>";
       myArray11[i] = a1.concat(" ",b1);
       i++;
      <?php
     }
       ?>
     var myLineChart2_1 = new Chart(ctx2_1, {
       type: 'line',width: 300 ,height: 100,
       data: {
         labels: myArray11,
         datasets: [{
           label: "H",
           lineTension: 0.3,
           backgroundColor: "rgba(234,0,6,0.2)",
           borderColor: "rgba(234,0,6,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(234,0,6,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(234,0,6,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_1,
         },
         {
           label: "코렉스",
           lineTension: 0.3,
           backgroundColor: "rgba(218,91,16,0.2)",
           borderColor: "rgba(218,91,16,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(218,91,16,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(218,91,16,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_2,
         },
         {
           label: "D1",
           lineTension: 0.3,
           backgroundColor: "rgba(216,206,27,0.2)",
           borderColor: "rgba(216,206,27,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(216,206,27,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(216,206,27,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_3,
         },
         {
           label: "D2",
           lineTension: 0.3,
           backgroundColor: "rgba(66,233,10,0.2)",
           borderColor: "rgba(66,233,10,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(66,233,10,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(66,233,10,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_4,
         },
         {
           label: "D3",
           lineTension: 0.3,
           backgroundColor: "rgba(5,92,237,0.2)",
           borderColor: "rgba(5,92,237,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,92,237,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,92,237,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_5,
         },
         {
           label: "D4",
           lineTension: 0.3,
           backgroundColor: "rgba(16,21,226,0.2)",
           borderColor: "rgba(16,21,226,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(16,21,226,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(16,21,226,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_6,
         },
         {
           label: "D5",
           lineTension: 0.3,
           backgroundColor: "rgba(82,10,233,0.2)",
           borderColor: "rgba(82,10,233,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(82,10,233,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(82,10,233,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_7,
         },
         {
           label: "up_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray1,
         },
         {
           label: "down_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray2,
         }
       ],
       },
       options: {
         scales: {
           xAxes: [{
             time: {
               unit: 'date'
             },
             gridLines: {
               display: false
             },
             ticks: {
               maxTicksLimit: 7
             }
           }],
           yAxes: [{
             ticks: {
               maxTicksLimit: 5
             },
             gridLines: {
               color: "rgba(0, 0, 0, .125)",
             }
           }],
         },
         legend: {
           display: true
         }
       }
     });

     var ctx2_11 = document.getElementById("myAreaChart1_11");

     var myArray11 = new Array();
     var myArray1 = new Array();
     var myArray2 = new Array();
     var myArray_1 = new Array();
     var myArray_2 = new Array();
     var myArray_3 = new Array();
     var myArray_4 = new Array();
     var myArray_5 = new Array();
     var myArray_6 = new Array();
     var myArray_7 = new Array();
     var myArray_8 = new Array();


     var i = 0;
     var a1="";
     var b1="";
     var up= <?=$line2_11?>+20;
     var down = <?=$line2_11?>-20;
     <?php
     foreach($rows2_11 as $value2_11) {
       ?>
       myArray_1[i] = "<?=$value2_11['H_2']?>";
       myArray_2[i] = "<?=$value2_11['corex']?>";
       myArray_3[i] = "<?=$value2_11['d1']?>";
       myArray_4[i] = "<?=$value2_11['d2']?>";
       myArray_5[i] = "<?=$value2_11['d3']?>";
       myArray_6[i] = "<?=$value2_11['d4']?>";
       myArray_7[i] = "<?=$value2_11['d5']?>";
       myArray_8[i] = "<?=$value2_11['d6']?>";

       myArray1[i] = up;
       myArray2[i] = down;

       b1 = "<?=$value2_11['input_time']?>";
       a1 = "<?=$value2_11['date']?>";
       myArray11[i] = a1.concat(" ",b1);
       i++;
      <?php
     }
       ?>
     var myLineChart2_11 = new Chart(ctx2_11, {
       type: 'line',width: 300 ,height: 100,
       data: {
         labels: myArray11,
         datasets: [{
           label: "H",
           lineTension: 0.3,
           backgroundColor: "rgba(234,0,6,0.2)",
           borderColor: "rgba(234,0,6,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(234,0,6,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(234,0,6,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_1,
         },
         {
           label: "코렉스",
           lineTension: 0.3,
           backgroundColor: "rgba(218,91,16,0.2)",
           borderColor: "rgba(218,91,16,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(218,91,16,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(218,91,16,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_2,
         },
         {
           label: "D1",
           lineTension: 0.3,
           backgroundColor: "rgba(216,206,27,0.2)",
           borderColor: "rgba(216,206,27,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(216,206,27,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(216,206,27,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_3,
         },
         {
           label: "D2",
           lineTension: 0.3,
           backgroundColor: "rgba(66,233,10,0.2)",
           borderColor: "rgba(66,233,10,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(66,233,10,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(66,233,10,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_4,
         },
         {
           label: "D3",
           lineTension: 0.3,
           backgroundColor: "rgba(5,92,237,0.2)",
           borderColor: "rgba(5,92,237,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,92,237,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,92,237,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_5,
         },
         {
           label: "D4",
           lineTension: 0.3,
           backgroundColor: "rgba(16,21,226,0.2)",
           borderColor: "rgba(16,21,226,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(16,21,226,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(16,21,226,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_6,
         },
         {
           label: "D5",
           lineTension: 0.3,
           backgroundColor: "rgba(82,10,233,0.2)",
           borderColor: "rgba(82,10,233,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(82,10,233,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(82,10,233,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_7,
         },
         {
           label: "D6",
           lineTension: 0.3,
           backgroundColor: "rgba(5,237,190,0.2)",
           borderColor: "rgba(5,237,190,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,237,190,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,237,190,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_8,
         },
         {
           label: "up_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray1,
         },
         {
           label: "down_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray2,
         }
       ],
       },
       options: {
         scales: {
           xAxes: [{
             time: {
               unit: 'date'
             },
             gridLines: {
               display: false
             },
             ticks: {
               maxTicksLimit: 7
             }
           }],
           yAxes: [{
             ticks: {
               maxTicksLimit: 5
             },
             gridLines: {
               color: "rgba(0, 0, 0, .125)",
             }
           }],
         },
         legend: {
           display: true
         }
       }
     });

     var ctx2_2 = document.getElementById("myAreaChart1_2");

     var myArray11 = new Array();
     var myArray1 = new Array();
     var myArray2 = new Array();
     var myArray_1 = new Array();
     var myArray_2 = new Array();
     var myArray_3 = new Array();
     var myArray_4 = new Array();
     var myArray_5 = new Array();
     var myArray_6 = new Array();
     var myArray_7 = new Array();
     var myArray_8 = new Array();

     var i = 0;
     var a1="";
     var b1="";
     var up= <?=$line2_2?>+20;
     var down = <?=$line2_2?>-20;
     <?php
     foreach($rows2_2 as $value2_2) {
       ?>
       myArray_1[i] = "<?=$value2_2['d1']?>";
       myArray_2[i] = "<?=$value2_2['d2']?>";
       myArray_3[i] = "<?=$value2_2['d3']?>";
       myArray_4[i] = "<?=$value2_2['d4']?>";
       myArray_5[i] = "<?=$value2_2['d5']?>";
       myArray_6[i] = "<?=$value2_2['d6']?>";
       myArray_7[i] = "<?=$value2_2['d7']?>";
       myArray_8[i] = "<?=$value2_2['d8']?>";

       myArray1[i] = up;
       myArray2[i] = down;

       b1 = "<?=$value2_2['input_time']?>";
       a1 = "<?=$value2_2['date']?>";
       myArray11[i] = a1.concat(" ",b1);
       i++;
      <?php
     }
       ?>
     var myLineChart2_2 = new Chart(ctx2_2, {
       type: 'line',width: 300 ,height: 100,
       data: {
         labels: myArray11,
         datasets: [{
           label: "D1",
           lineTension: 0.3,
           backgroundColor: "rgba(234,0,6,0.2)",
           borderColor: "rgba(234,0,6,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(234,0,6,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(234,0,6,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_1,
         },
         {
           label: "D2",
           lineTension: 0.3,
           backgroundColor: "rgba(218,91,16,0.2)",
           borderColor: "rgba(218,91,16,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(218,91,16,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(218,91,16,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_2,
         },
         {
           label: "D3",
           lineTension: 0.3,
           backgroundColor: "rgba(216,206,27,0.2)",
           borderColor: "rgba(216,206,27,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(216,206,27,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(216,206,27,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_3,
         },
         {
           label: "D4",
           lineTension: 0.3,
           backgroundColor: "rgba(66,233,10,0.2)",
           borderColor: "rgba(66,233,10,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(66,233,10,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(66,233,10,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_4,
         },
         {
           label: "D5",
           lineTension: 0.3,
           backgroundColor: "rgba(5,92,237,0.2)",
           borderColor: "rgba(5,92,237,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,92,237,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,92,237,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_5,
         },
         {
           label: "D6",
           lineTension: 0.3,
           backgroundColor: "rgba(16,21,226,0.2)",
           borderColor: "rgba(16,21,226,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(16,21,226,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(16,21,226,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_6,
         },
         {
           label: "D7",
           lineTension: 0.3,
           backgroundColor: "rgba(82,10,233,0.2)",
           borderColor: "rgba(82,10,233,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(82,10,233,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(82,10,233,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_7,
         },
         {
           label: "D8",
           lineTension: 0.3,
           backgroundColor: "rgba(5,237,190,0.2)",
           borderColor: "rgba(5,237,190,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,237,190,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,237,190,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_8,
         },
         {
           label: "up_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray1,
         },
         {
           label: "down_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray2,
         }
       ],
       },
       options: {
         scales: {
           xAxes: [{
             time: {
               unit: 'date'
             },
             gridLines: {
               display: false
             },
             ticks: {
               maxTicksLimit: 7
             }
           }],
           yAxes: [{
             ticks: {
               maxTicksLimit: 5
             },
             gridLines: {
               color: "rgba(0, 0, 0, .125)",
             }
           }],
         },
         legend: {
           display: true
         }
       }
     });

     var ctx2_3 = document.getElementById("myAreaChart1_3");

     var myArray11 = new Array();
     var myArray_1 = new Array();
     var myArray_2 = new Array();
     var myArray_3 = new Array();
     var myArray_4 = new Array();
     var myArray_5 = new Array();

     var i = 0;
     var a1="";
     var b1="";
     var up= <?=$line2_3?>+20;
     var down = <?=$line2_3?>-20;
     <?php
     foreach($rows2_3 as $value2_3) {
       ?>
       myArray_1[i] = "<?=$value2_3['d1']?>";
       myArray_2[i] = "<?=$value2_3['d3']?>";
       myArray_3[i] = "<?=$value2_3['d4']?>";
       myArray_4[i] = "<?=$value2_3['d5']?>";
       myArray_5[i] = "<?=$value2_3['d6']?>";

       myArray1[i] = up;
       myArray2[i] = down;

       b1 = "<?=$value2_3['input_time']?>";
       a1 = "<?=$value2_3['date']?>";
       myArray11[i] = a1.concat(" ",b1);
       i++;
      <?php
     }
       ?>
     var myLineChart2_3 = new Chart(ctx2_3, {
       type: 'line',width: 300 ,height: 100,
       data: {
         labels: myArray11,
         datasets: [{
           label: "D1",
           lineTension: 0.3,
           backgroundColor: "rgba(234,0,6,0.2)",
           borderColor: "rgba(234,0,6,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(234,0,6,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(234,0,6,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_1,
         },
         {
           label: "D3",
           lineTension: 0.3,
           backgroundColor: "rgba(218,91,16,0.2)",
           borderColor: "rgba(218,91,16,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(218,91,16,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(218,91,16,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_2,
         },
         {
           label: "D4",
           lineTension: 0.3,
           backgroundColor: "rgba(216,206,27,0.2)",
           borderColor: "rgba(216,206,27,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(216,206,27,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(216,206,27,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_3,
         },
         {
           label: "D5",
           lineTension: 0.3,
           backgroundColor: "rgba(66,233,10,0.2)",
           borderColor: "rgba(66,233,10,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(66,233,10,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(66,233,10,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_4,
         },
         {
           label: "D6",
           lineTension: 0.3,
           backgroundColor: "rgba(5,92,237,0.2)",
           borderColor: "rgba(5,92,237,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,92,237,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,92,237,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_5,
         },
         {
           label: "up_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray1,
         },
         {
           label: "down_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray2,
         }
       ],
       },
       options: {
         scales: {
           xAxes: [{
             time: {
               unit: 'date'
             },
             gridLines: {
               display: false
             },
             ticks: {
               maxTicksLimit: 7
             }
           }],
           yAxes: [{
             ticks: {
               maxTicksLimit: 5
             },
             gridLines: {
               color: "rgba(0, 0, 0, .125)",
             }
           }],
         },
         legend: {
           display: true
         }
       }
     });

     var ctx2_4 = document.getElementById("myAreaChart1_4");

     var myArray11 = new Array();
     var myArray1 = new Array();
     var myArray2 = new Array();
     var myArray_1 = new Array();
     var myArray_2 = new Array();
     var myArray_3 = new Array();
     var myArray_4 = new Array();
     var myArray_5 = new Array();
     var myArray_6 = new Array();
     var myArray_7 = new Array();
     var myArray_8 = new Array();
     var myArray_9 = new Array();
     var myArray_10 = new Array();
     var myArray_11 = new Array();
     var myArray_12 = new Array();
     var myArray_13 = new Array();


     var i = 0;
     var a1="";
     var b1="";
     var up= <?=$line2_4?>+20;
     var down = <?=$line2_4?>-20;
     <?php
     foreach($rows2_4 as $value2_4) {
       ?>
       myArray_1[i] = "<?=$value2_4['c1']?>";
       myArray_2[i] = "<?=$value2_4['c2']?>";
       myArray_3[i] = "<?=$value2_4['c3']?>";
       myArray_4[i] = "<?=$value2_4['c4']?>";
       myArray_5[i] = "<?=$value2_4['c5']?>";
       myArray_6[i] = "<?=$value2_4['c6']?>";
       myArray_7[i] = "<?=$value2_4['c1_1']?>";
       myArray_8[i] = "<?=$value2_4['c2_1']?>";
       myArray_9[i] = "<?=$value2_4['c3_1']?>";
       myArray_10[i] = "<?=$value2_4['c4_1']?>";
       myArray_11[i] = "<?=$value2_4['c5_1']?>";
       myArray_12[i] = "<?=$value2_4['H']?>";
       myArray_13[i] = "<?=$value2_4['H']?>";

       myArray1[i] = up;
       myArray2[i] = down;

       b1 = "<?=$value2_4['input_time']?>";
       a1 = "<?=$value2_4['date']?>";
       myArray11[i] = a1.concat(" ",b1);
       i++;
      <?php
     }
       ?>
     var myLineChart2_4 = new Chart(ctx2_4, {
       type: 'line',width: 300 ,height: 100,
       data: {
         labels: myArray11,
         datasets: [{
           label: "D1",
           lineTension: 0.3,
           backgroundColor: "rgba(234,0,6,0.2)",
           borderColor: "rgba(234,0,6,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(234,0,6,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(234,0,6,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_1,
         },
         {
           label: "D2",
           lineTension: 0.3,
           backgroundColor: "rgba(218,91,16,0.2)",
           borderColor: "rgba(218,91,16,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(218,91,16,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(218,91,16,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_2,
         },
         {
           label: "D3",
           lineTension: 0.3,
           backgroundColor: "rgba(216,206,27,0.2)",
           borderColor: "rgba(216,206,27,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(216,206,27,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(216,206,27,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_3,
         },
         {
           label: "D4",
           lineTension: 0.3,
           backgroundColor: "rgba(66,233,10,0.2)",
           borderColor: "rgba(66,233,10,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(66,233,10,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(66,233,10,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_4,
         },
         {
           label: "D5",
           lineTension: 0.3,
           backgroundColor: "rgba(5,92,237,0.2)",
           borderColor: "rgba(5,92,237,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,92,237,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,92,237,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_5,
         },
         {
           label: "D6",
           lineTension: 0.3,
           backgroundColor: "rgba(16,21,226,0.2)",
           borderColor: "rgba(16,21,226,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(16,21,226,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(16,21,226,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_6,
         },
         {
           label: "D7",
           lineTension: 0.3,
           backgroundColor: "rgba(82,10,233,0.2)",
           borderColor: "rgba(82,10,233,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(82,10,233,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(82,10,233,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_7,
         },
         {
           label: "D8",
           lineTension: 0.3,
           backgroundColor: "rgba(5,237,190,0.2)",
           borderColor: "rgba(5,237,190,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,237,190,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,237,190,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_8,
         },
         {
           label: "D9",
           lineTension: 0.3,
           backgroundColor: "rgba(221,21,156,0.2)",
           borderColor: "rgba(221,21,156,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(221,21,156,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(221,21,156,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_9,
         },
         {
           label: "D10",
           lineTension: 0.3,
           backgroundColor: "rgba(80,27,20,0.2)",
           borderColor: "rgba(80,27,20,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(80,27,20,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(80,27,20,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_10,
         },
         {
           label: "D11",
           lineTension: 0.3,
           backgroundColor: "rgba(40,60,44,0.2)",
           borderColor: "rgba(40,60,44,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(40,60,44,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(40,60,44,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_11,
         },
         {
           label: "D12",
           lineTension: 0.3,
           backgroundColor: "rgba(158,159,167,0.2)",
           borderColor: "rgba(158,159,167,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(158,159,167,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(158,159,167,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_12,
         },
         {
           label: "D13",
           lineTension: 0.3,
           backgroundColor: "rgba(255,186,117,0.2)",
           borderColor: "rgba(255,186,117,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(255,186,117,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(255,186,117,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_13,
         },
         {
           label: "up_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray1,
         },
         {
           label: "down_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray2,
         }
       ],
       },
       options: {
         scales: {
           xAxes: [{
             time: {
               unit: 'date'
             },
             gridLines: {
               display: false
             },
             ticks: {
               maxTicksLimit: 7
             }
           }],
           yAxes: [{
             ticks: {
               maxTicksLimit: 5
             },
             gridLines: {
               color: "rgba(0, 0, 0, .125)",
             }
           }],
         },
         legend: {
           display: true
         }
       }
     });

     var ctx2_5 = document.getElementById("myAreaChart1_5");

     var myArray11 = new Array();
     var myArray_1 = new Array();
     var myArray_2 = new Array();
     var myArray_3 = new Array();
     var myArray_4 = new Array();
     var myArray_5 = new Array();
     var myArray_6 = new Array();
     var myArray_7 = new Array();
     var myArray_8 = new Array();
     var myArray_9 = new Array();
     var myArray_10 = new Array();

     var i = 0;
     var a1="";
     var b1="";
     var up= <?=$line2_5?>+20;
     var down = <?=$line2_5?>-20;
     <?php
     foreach($rows2_5 as $value2_5) {
       ?>
       myArray_1[i] = "<?=$value2_5['d1']?>";
       myArray_2[i] = "<?=$value2_5['d2']?>";
       myArray_3[i] = "<?=$value2_5['d3']?>";
       myArray_4[i] = "<?=$value2_5['d4']?>";
       myArray_5[i] = "<?=$value2_5['d6']?>";
       myArray_6[i] = "<?=$value2_5['d7']?>";
       myArray_7[i] = "<?=$value2_5['d8']?>";
       myArray_8[i] = "<?=$value2_5['d9']?>";
       myArray_9[i] = "<?=$value2_5['d10']?>";
       myArray_10[i] = "<?=$value2_5['d35']?>";
       myArray1[i] = up;
       myArray2[i] = down;

       b1 = "<?=$value2_5['input_time']?>";
       a1 = "<?=$value2_5['date']?>";
       myArray11[i] = a1.concat(" ",b1);
       i++;
      <?php
     }
       ?>
     var myLineChart2_5 = new Chart(ctx2_5, {
       type: 'line',width: 300 ,height: 100,
       data: {
         labels: myArray11,
         datasets: [{
           label: "D1",
           lineTension: 0.3,
           backgroundColor: "rgba(234,0,6,0.2)",
           borderColor: "rgba(234,0,6,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(234,0,6,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(234,0,6,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_1,
         },
         {
           label: "D2",
           lineTension: 0.3,
           backgroundColor: "rgba(218,91,16,0.2)",
           borderColor: "rgba(218,91,16,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(218,91,16,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(218,91,16,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_2,
         },
         {
           label: "D3",
           lineTension: 0.3,
           backgroundColor: "rgba(216,206,27,0.2)",
           borderColor: "rgba(216,206,27,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(216,206,27,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(216,206,27,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_3,
         },
         {
           label: "D4",
           lineTension: 0.3,
           backgroundColor: "rgba(66,233,10,0.2)",
           borderColor: "rgba(66,233,10,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(66,233,10,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(66,233,10,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_4,
         },
         {
           label: "D6",
           lineTension: 0.3,
           backgroundColor: "rgba(5,92,237,0.2)",
           borderColor: "rgba(5,92,237,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,92,237,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,92,237,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_5,
         },
         {
           label: "D7",
           lineTension: 0.3,
           backgroundColor: "rgba(16,21,226,0.2)",
           borderColor: "rgba(16,21,226,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(16,21,226,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(16,21,226,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_6,
         },
         {
           label: "D8",
           lineTension: 0.3,
           backgroundColor: "rgba(82,10,233,0.2)",
           borderColor: "rgba(82,10,233,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(82,10,233,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(82,10,233,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_7,
         },
         {
           label: "D9",
           lineTension: 0.3,
           backgroundColor: "rgba(5,237,190,0.2)",
           borderColor: "rgba(5,237,190,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,237,190,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,237,190,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_8,
         },
         {
           label: "D10",
           lineTension: 0.3,
           backgroundColor: "rgba(221,21,156,0.2)",
           borderColor: "rgba(221,21,156,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(221,21,156,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(221,21,156,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_9,
         },
         {
           label: "D35",
           lineTension: 0.3,
           backgroundColor: "rgba(80,27,20,0.2)",
           borderColor: "rgba(80,27,20,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(80,27,20,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(80,27,20,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_10,
         },
         {
           label: "up_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray1,
         },
         {
           label: "down_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray2,
         }
       ],
       },
       options: {
         scales: {
           xAxes: [{
             time: {
               unit: 'date'
             },
             gridLines: {
               display: false
             },
             ticks: {
               maxTicksLimit: 7
             }
           }],
           yAxes: [{
             ticks: {
               maxTicksLimit: 5
             },
             gridLines: {
               color: "rgba(0, 0, 0, .125)",
             }
           }],
         },
         legend: {
           display: true
         }
       }
     });

     var ctx2_6 = document.getElementById("myAreaChart1_6");

     var myArray11 = new Array();
     var myArray_1 = new Array();
     var myArray_2 = new Array();
     var myArray_3 = new Array();
     var myArray_4 = new Array();
     var myArray_6 = new Array();
     var myArray_7 = new Array();

     var i = 0;
     var a1="";
     var b1="";
     var up= <?=$line2_6?>+20;
     var down = <?=$line2_6?>-20;
     <?php
     foreach($rows2_6 as $value2_6) {
       ?>
       myArray_1[i] = "<?=$value2_6['d1']?>";
       myArray_2[i] = "<?=$value2_6['d2']?>";
       myArray_3[i] = "<?=$value2_6['d3']?>";
       myArray_4[i] = "<?=$value2_6['d4']?>";
       myArray_6[i] = up;
       myArray_7[i] = down;

       b1 = "<?=$value2_6['input_time']?>";
       a1 = "<?=$value2_6['date']?>";
       myArray11[i] = a1.concat(" ",b1);
       i++;
      <?php
     }
       ?>
     var myLineChart2_6 = new Chart(ctx2_6, {
       type: 'line',width: 300 ,height: 100,
       data: {
         labels: myArray11,
         datasets: [{
           label: "D1",
           lineTension: 0.3,
           backgroundColor: "rgba(234,0,6,0.2)",
           borderColor: "rgba(234,0,6,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(234,0,6,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(234,0,6,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_1,
         },
         {
           label: "D2",
           lineTension: 0.3,
           backgroundColor: "rgba(218,91,16,0.2)",
           borderColor: "rgba(218,91,16,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(218,91,16,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(218,91,16,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_2,
         },
         {
           label: "D3",
           lineTension: 0.3,
           backgroundColor: "rgba(216,206,27,0.2)",
           borderColor: "rgba(216,206,27,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(216,206,27,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(216,206,27,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_3,
         },
         {
           label: "D4",
           lineTension: 0.3,
           backgroundColor: "rgba(66,233,10,0.2)",
           borderColor: "rgba(66,233,10,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(66,233,10,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(66,233,10,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_4,
         },
         {
           label: "up_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray_6,
         },
         {
           label: "down_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray_7,
         }
       ],
       },
       options: {
         scales: {
           xAxes: [{
             time: {
               unit: 'date'
             },
             gridLines: {
               display: false
             },
             ticks: {
               maxTicksLimit: 7
             }
           }],
           yAxes: [{
             ticks: {
               maxTicksLimit: 5
             },
             gridLines: {
               color: "rgba(0, 0, 0, .125)",
             }
           }],
         },
         legend: {
           display: true
         }
       }
     });

     var ctx2_7 = document.getElementById("myAreaChart1_7");

     var myArray11 = new Array();
     var myArray1 = new Array();
     var myArray2 = new Array();
     var myArray_1 = new Array();
     var myArray_2 = new Array();
     var myArray_3 = new Array();
     var myArray_4 = new Array();
     var myArray_5 = new Array();
     var myArray_6 = new Array();


     var i = 0;
     var a1="";
     var b1="";
     var up= <?=$line2_7?>+20;
     var down = <?=$line2_7?>-20;
     <?php
     foreach($rows2_7 as $value2_7) {
       ?>
       myArray_1[i] = "<?=$value2_7['d1']?>";
       myArray_2[i] = "<?=$value2_7['d2']?>";
       myArray_3[i] = "<?=$value2_7['d3']?>";
       myArray_4[i] = "<?=$value2_7['d4']?>";
       myArray_5[i] = "<?=$value2_7['d5']?>";
       myArray_6[i] = "<?=$value2_7['d35']?>";
       myArray1[i] = up;
       myArray2[i] = down;

       b1 = "<?=$value2_7['input_time']?>";
       a1 = "<?=$value2_7['date']?>";
       myArray11[i] = a1.concat(" ",b1);
       i++;
      <?php
     }
       ?>
     var myLineChart2_7 = new Chart(ctx2_7, {
       type: 'line',width: 300 ,height: 100,
       data: {
         labels: myArray11,
         datasets: [{
           label: "D1",
           lineTension: 0.3,
           backgroundColor: "rgba(234,0,6,0.2)",
           borderColor: "rgba(234,0,6,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(234,0,6,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(234,0,6,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_1,
         },
         {
           label: "D2",
           lineTension: 0.3,
           backgroundColor: "rgba(218,91,16,0.2)",
           borderColor: "rgba(218,91,16,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(218,91,16,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(218,91,16,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_2,
         },
         {
           label: "D3",
           lineTension: 0.3,
           backgroundColor: "rgba(216,206,27,0.2)",
           borderColor: "rgba(216,206,27,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(216,206,27,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(216,206,27,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_3,
         },
         {
           label: "D4",
           lineTension: 0.3,
           backgroundColor: "rgba(66,233,10,0.2)",
           borderColor: "rgba(66,233,10,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(66,233,10,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(66,233,10,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_4,
         },
         {
           label: "D5",
           lineTension: 0.3,
           backgroundColor: "rgba(5,92,237,0.2)",
           borderColor: "rgba(5,92,237,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(5,92,237,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(5,92,237,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_5,
         },
         {
           label: "D35",
           lineTension: 0.3,
           backgroundColor: "rgba(16,21,226,0.2)",
           borderColor: "rgba(16,21,226,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(16,21,226,1)",
           pointBorderColor: "rgba(255,255,255,0.8)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(16,21,226,1)",
           pointHitRadius: 50,
           pointBorderWidth: 2,
           data: myArray_6,
         },
         {
           label: "up_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray1,
         },
         {
           label: "down_line",
           lineTension: 0.3,
           borderColor: "rgba(0,0,0,1)",
           pointRadius: 5,
           pointBackgroundColor: "rgba(0,0,0,1)",
           pointHoverRadius: 5,
           pointHoverBackgroundColor: "rgba(0,0,0,1)",
           data: myArray2,
         }
       ],
       },
       options: {
         scales: {
           xAxes: [{
             time: {
               unit: 'date'
             },
             gridLines: {
               display: false
             },
             ticks: {
               maxTicksLimit: 7
             }
           }],
           yAxes: [{
             ticks: {
               maxTicksLimit: 5
             },
             gridLines: {
               color: "rgba(0, 0, 0, .125)",
             }
           }],
         },
         legend: {
           display: true
         }
       }
     });

     // Bar Chart Example
     var ctx = document.getElementById("myBarChart1");

     var myLineChart = new Chart(ctx, {
       type: 'horizontalBar',

       data: {
         labels: ["HIVP 250 x 6250","HIVP 250 x 6070","HIVP 250 x 6750","PVC DC 300 x 6250","PVC DC 250 x 6070","PVC DC 250 x 6250","PVC DC 250 x 6070","PVC DC 450 x 6350","PVC DC 450 x 6070","PVC DC 300 x 6070","PVC DC 300 x 6370","PVC DC 300 x 6750","PVC DC 400 x 6250","PVC DC 400 x 6070","PVC DC 200 x 6250","PVC DC 200 x 6070"],
         datasets: [{
           label: "1호기",
           backgroundColor: "rgba(234,0,6,1)",
           borderColor: "rgba(234,0,6,1)",
           data: [<?=$row1_1['amount_1']?>+<?=$row1_2['amount_1']?>,<?=$row1_1['amount_2']?>+<?=$row1_2['amount_2']?>,<?=$row1_1['amount_3']?>+<?=$row1_2['amount_3']?>,],
         },
         {
           label: "2호기",
           backgroundColor: "rgba(234,172,30,1)",
           borderColor: "rgba(234,172,30,1)",
           data: ['','','',<?=$row2_1['amount_1']?>+<?=$row2_2['amount_1']?>,<?=$row2_1['amount_2']?>+<?=$row2_2['amount_2']?>,],
         },
         {
           label: "3호기",
           backgroundColor: "rgba(239,228,24,1)",
           borderColor: "rgba(239,228,24,1)",
           data: ['','','','','',<?=$row3_1['amount_1']?>+<?=$row3_2['amount_1']?>,<?=$row3_1['amount_2']?>+<?=$row3_2['amount_2']?>,],
         },
         {
           label: "4호기",
           backgroundColor: "rgba(73,221,57,1)",
           borderColor: "rgba(73,221,57,1)",
           data: ['','','','','','','',<?=$row4_1['amount_1']?>+<?=$row4_2['amount_1']?>,<?=$row4_1['amount_2']?>+<?=$row4_2['amount_2']?>,],
         },
         {
           label: "5호기",
           backgroundColor: "rgba(2,117,216,1)",
           borderColor: "rgba(2,117,216,1)",
           data: ['','','','','','','','','',<?=$row5_1['amount_1']?>+<?=$row5_2['amount_1']?>,<?=$row5_1['amount_2']?>+<?=$row5_2['amount_2']?>,<?=$row5_1['amount_3']?>+<?=$row5_2['amount_3']?>,],
         },
         {
           label: "6호기",
           backgroundColor: "rgba(44,33,248,1)",
           borderColor: "rgba(44,33,248,1)",
           data: ['','','','','','','','','','','','',<?=$row6_1['amount_1']?>+<?=$row6_2['amount_1']?>,<?=$row6_1['amount_2']?>+<?=$row6_2['amount_2']?>,],
         },
         {
           label: "7호기",
           backgroundColor: "rgba(139,23,255,1)",
           borderColor: "rgba(139,23,255,1)",
           data: ['','','','','','','','','','','','','','',<?=$row7_1['amount_1']?>+<?=$row7_2['amount_1']?>,<?=$row7_1['amount_2']?>+<?=$row7_2['amount_2']?>,],
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

     var ctx_1 = document.getElementById("myPieChart1");
     var myPieChart1 = new Chart(ctx_1, {
       type: 'pie',
       data: {
         labels: ["1호기", "2호기", "3호기", "4호기","5호기","6호기","7호기"],
         datasets: [{
           data: [<?=$row1_1['amount_1']?>+<?=$row1_1['amount_2']?>+<?=$row1_1['amount_3']?>+<?=$row1_2['amount_1']?>+<?=$row1_2['amount_2']?>+<?=$row1_2['amount_3']?>,
           <?=$row2_1['amount_1']?>+<?=$row2_1['amount_2']?>+<?=$row2_2['amount_1']?>+<?=$row2_2['amount_2']?>,<?=$row3_1['amount_1']?>+<?=$row3_1['amount_2']?>+<?=$row3_2['amount_1']?>+<?=$row3_2['amount_2']?> ,
            <?=$row4_1['amount_1']?>+<?=$row4_1['amount_2']?>+<?=$row4_2['amount_1']?>+<?=$row4_2['amount_2']?>,
             <?=$row5_1['amount_1']?>+<?=$row5_1['amount_2']?>+<?=$row5_1['amount_3']?>+<?=$row5_2['amount_1']?>+<?=$row5_2['amount_2']?>+<?=$row5_2['amount_3']?>,
              <?=$row6_1['amount_1']?>+<?=$row6_1['amount_2']?>+<?=$row6_2['amount_1']?>+<?=$row6_2['amount_2']?>,
            <?=$row7_1['amount_1']?>+<?=$row7_1['amount_2']?>+<?=$row7_2['amount_1']?>+<?=$row7_2['amount_2']?>],
           backgroundColor: ['#dc3545','#FF6600', '#ffc107', '#28a745','#007bff','#0000CC','#3300CC'],
         }],
       },
     });
     /////////////////
     var ctx = document.getElementById("myBarChart2");

     var myLineChart = new Chart(ctx, {
       type: 'horizontalBar',

       data: {
         labels: ["1호기","2호기","3호기","4호기","5호기","6호기","7호기"],
         datasets: [{
           label: "1호기",
           backgroundColor: "rgba(234,0,6,1)",
           borderColor: "rgba(234,0,6,1)",
           data: [<?=$king1?>,],
         },
         {
           label: "2호기",
           backgroundColor: "rgba(234,172,30,1)",
           borderColor: "rgba(234,172,30,1)",
           data: ['',<?=$king2?>,],
         },
         {
           label: "3호기",
           backgroundColor: "rgba(239,228,24,1)",
           borderColor: "rgba(239,228,24,1)",
           data: ['','',<?=$king3?>,],
         },
         {
           label: "4호기",
           backgroundColor: "rgba(73,221,57,1)",
           borderColor: "rgba(73,221,57,1)",
           data: ['','','',<?=$king4?>,],
         },
         {
           label: "5호기",
           backgroundColor: "rgba(2,117,216,1)",
           borderColor: "rgba(2,117,216,1)",
           data: ['','','','',<?=$king5?>,],
         },
         {
           label: "6호기",
           backgroundColor: "rgba(44,33,248,1)",
           borderColor: "rgba(44,33,248,1)",
           data: ['','','','','',<?=$king6?>,],
         },
         {
           label: "7호기",
           backgroundColor: "rgba(139,23,255,1)",
           borderColor: "rgba(139,23,255,1)",
           data: ['','','','','','',<?=$king7?>,],
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


     //////
     var ctx_1 = document.getElementById("myPieChart2");
     var myPieChart1 = new Chart(ctx_1, {
       type: 'pie',
       data: {
         labels: ["1호기", "2호기", "3호기", "4호기","5호기","6호기","7호기"],
         datasets: [{
           data: [<?=$king1?>,<?=$king2?>,<?=$king3?>,<?=$king4?>,<?=$king5?>,<?=$king6?>,<?=$king7?>],
           backgroundColor: ['#dc3545','#FF6600', '#ffc107', '#28a745','#007bff','#0000CC','#3300CC'],
         }],
       },
     });
 });
   function input_Text()
   {
     var value1 = $('#date6').val();
     //document.write(value);
     window.location.href = './charts.php?date5=' + value1;
   }

   function input_Text1()
   {
     var value1 = $('#date2').val();
     var value2 = $('#date3').val();
     var line1_1 = $('#line_select1_1').val();
     //document.write(value);
     window.location.href = './charts.php?date1=' + value1 +'&date2='+value2 +'&line_select1_1='+line1_1;
   }
   function input_Text11()
   {
     var value1 = $('#date2').val();
     var value2 = $('#date3').val();
     var line1_11 = $('#line_select1_11').val();
     //document.write(value);
     window.location.href = './charts.php?date1=' + value1 +'&date2='+value2 +'&line_select1_11='+line1_11;
   }

   function input_Text2()
   {
     var value1 = $('#date2').val();
     var value2 = $('#date3').val();
     var line1_2 = $('#line_select1_2').val();
     //document.write(value);
     window.location.href = './charts.php?date1=' + value1 +'&date2='+value2 +'&line_select1_2='+line1_2;
   }
   function input_Text3()
   {
     var value1 = $('#date2').val();
     var value2 = $('#date3').val();
     var line1_3 = $('#line_select1_3').val();
     //document.write(value);
     window.location.href = './charts.php?date1=' + value1 +'&date2='+value2 +'&line_select1_3='+line1_3;
   }
   function input_Text4()
   {
     var value1 = $('#date2').val();
     var value2 = $('#date3').val();
     var line1_4 = $('#line_select1_4').val();
     //document.write(value);
     window.location.href = './charts.php?date1=' + value1 +'&date2='+value2 +'&line_select1_4='+line1_4;
   }
   function input_Text5()
   {
     var value1 = $('#date2').val();
     var value2 = $('#date3').val();
     var line1_5 = $('#line_select1_5').val();
     //document.write(value);
     window.location.href = './charts.php?date1=' + value1 +'&date2='+value2 +'&line_select1_5='+line1_5;
   }
   function input_Text6()
   {
     var value1 = $('#date2').val();
     var value2 = $('#date3').val();
     var line1_6 = $('#line_select1_6').val();
     //document.write(value);
     window.location.href = './charts.php?date1=' + value1 +'&date2='+value2 +'&line_select1_6='+line1_6;
   }
   function input_Text7()
   {
     var value1 = $('#date2').val();
     var value2 = $('#date3').val();
     var line1_7 = $('#line_select1_7').val();
     //document.write(value);
     window.location.href = './charts.php?date1=' + value1 +'&date2='+value2 +'&line_select1_7='+line1_7;
   }
   function input_Text1_1()
   {
     var value1 = $('#date4').val();
     var value2 = $('#date5').val();
     var line2_1 = $('#line_select2_1').val();
     //document.write(value);
     window.location.href = './charts.php?date3=' + value1 +'&date4='+value2 +'&line_select2_1='+line2_1;
   }
   function input_Text1_11()
   {
     var value1 = $('#date4').val();
     var value2 = $('#date5').val();
     var line2_11 = $('#line_select2_11').val();
     //document.write(value);
     window.location.href = './charts.php?date3=' + value1 +'&date4='+value2 +'&line_select2_11='+line2_11;
   }

   function input_Text1_2()
   {
     var value1 = $('#date4').val();
     var value2 = $('#date5').val();
     var line2_2 = $('#line_select2_2').val();
     //document.write(value);
     window.location.href = './charts.php?date3=' + value1 +'&date4='+value2 +'&line_select2_2='+line2_2;
   }
   function input_Text1_3()
   {
     var value1 = $('#date4').val();
     var value2 = $('#date5').val();
     var line2_3 = $('#line_select2_3').val();
     //document.write(value);
     window.location.href = './charts.php?date3=' + value1 +'&date4='+value2 +'&line_select2_3='+line2_3;
   }
   function input_Text1_4()
   {
     var value1 = $('#date4').val();
     var value2 = $('#date5').val();
     var line2_4 = $('#line_select2_4').val();
     //document.write(value);
     window.location.href = './charts.php?date3=' + value1 +'&date4='+value2 +'&line_select2_4='+line2_4;
   }
   function input_Text1_5()
   {
     var value1 = $('#date4').val();
     var value2 = $('#date5').val();
     var line2_5 = $('#line_select2_5').val();
     //document.write(value);
     window.location.href = './charts.php?date3=' + value1 +'&date4='+value2 +'&line_select2_5='+line2_5;
   }
   function input_Text1_6()
   {
     var value1 = $('#date4').val();
     var value2 = $('#date5').val();
     var line2_6 = $('#line_select2_6').val();
     //document.write(value);
     window.location.href = './charts.php?date3=' + value1 +'&date4='+value2 +'&line_select2_6='+line2_6;
   }
   function input_Text1_7()
   {
     var value1 = $('#date4').val();
     var value2 = $('#date5').val();
     var line2_7 = $('#line_select2_7').val();
     //document.write(value);
     window.location.href = './charts.php?date3=' + value1 +'&date4='+value2 +'&line_select2_7='+line2_7;
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
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Charts</li>
        </ol>

        <!-- TAB -->

        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#c">실린더 온도</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#d">다이스 온도</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#cb">수량 및 불량률</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="c">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-area"></i>
                   기간별 1호기 HIVG 실린더 온도값들의 꺽은선 그래프</div>
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>시작 검사일자</th>
                          <td><input type="date" name="date2" id='date2' class="form-control" placeholder="검사일자" value="<?=$dt1?>"/></td>
                          <th>종료 검사일자</th>
                          <td><input type="date" name="date3" id='date3' class="form-control" placeholder="검사일자" value="<?=$dt2?>"/></td>
                          <th><button class="btn btn-dark" id='db_search1' onclick="input_Text1()" name='dbsearch1'>검색</button></th>
                        </tr>
                        <tr>
                          <th>기준선 선택</th>
                          <td><input type="int" name="line_select1_1" id='line_select1_1' class="form-control" value="<?=$line1_1?>" placeholder="상/하한선"/></td>
                        </tr>
                      </thead>
                    </table>
                  </div>
                  <div class="card-body">
                    <canvas id="myAreaChart1" width="100%" height="30"></canvas>
                  </div>
                  <div class="card-footer small text-muted">Updated <?=$dt?></div>
            </div>
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-area"></i>
                   기간별 1호기 HIVP 실린더 온도값들의 꺽은선 그래프</div>
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>기준선 선택</th>
                          <td><input type="int" name="line_select1_11" id='line_select1_11' class="form-control" value="<?=$line1_11?>" placeholder="상/하한선"/></td>
                          <th><button class="btn btn-dark" id='db_search11' onclick="input_Text11()" name='dbsearch11'>검색</button></th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                  <div class="card-body">
                    <canvas id="myAreaChart11" width="100%" height="30"></canvas>
                  </div>
                  <div class="card-footer small text-muted">Updated <?=$dt?></div>
              </div>
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-area"></i>
                   기간별 2호기 실린더 온도값들의 꺽은선 그래프</div>
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>기준선 선택</th>
                          <td><input type="int" name="line_select1_2" id='line_select1_2' class="form-control" value="<?=$line1_2?>" placeholder="상/하한선"/></td>
                          <th><button class="btn btn-dark" id='db_search2' onclick="input_Text2()" name='dbsearch2'>검색</button></th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                  <div class="card-body">
                    <canvas id="myAreaChart2" width="100%" height="30"></canvas>
                  </div>
                  <div class="card-footer small text-muted">Updated <?=$dt?></div>
              </div>
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-area"></i>
                     기간별 3호기 실린더 온도값들의 꺽은선 그래프</div>
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>기준선 선택</th>
                            <td><input type="int" name="line_select1_3" id='line_select1_3' class="form-control" value="<?=$line1_3?>" placeholder="상/하한선"/></td>
                            <th><button class="btn btn-dark" id='db_search3' onclick="input_Text3()" name='dbsearch3'>검색</button></th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                    <div class="card-body">
                      <canvas id="myAreaChart3" width="100%" height="30"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated <?=$dt?></div>
                </div>
                <div class="card mb-3">
                  <div class="card-header">
                    <i class="fas fa-chart-area"></i>
                       기간별 4호기 실린더 온도값들의 꺽은선 그래프</div>
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>기준선 선택</th>
                              <td><input type="int" name="line_select1_4" id='line_select1_4' class="form-control" value="<?=$line1_4?>" placeholder="상/하한선"/></td>
                              <th><button class="btn btn-dark" id='db_search4' onclick="input_Text4()" name='dbsearch4'>검색</button></th>
                            </tr>
                          </thead>
                        </table>
                      </div>
                      <div class="card-body">
                        <canvas id="myAreaChart4" width="100%" height="30"></canvas>
                      </div>
                      <div class="card-footer small text-muted">Updated <?=$dt?></div>
                  </div>

                  <div class="card mb-3">
                    <div class="card-header">
                      <i class="fas fa-chart-area"></i>
                         기간별 5호기 실린더 온도값들의 꺽은선 그래프</div>
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                <th>기준선 선택</th>
                                <td><input type="int" name="line_select1_5" id='line_select1_5' class="form-control" value="<?=$line1_5?>" placeholder="상/하한선"/></td>
                                <th><button class="btn btn-dark" id='db_search5' onclick="input_Text5()" name='dbsearch5'>검색</button></th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                        <div class="card-body">
                          <canvas id="myAreaChart5" width="100%" height="30"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated <?=$dt?></div>
                    </div>
                    <div class="card mb-3">
                      <div class="card-header">
                        <i class="fas fa-chart-area"></i>
                           기간별 6호기 실린더 온도값들의 꺽은선 그래프</div>
                          <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>기준선 선택</th>
                                  <td><input type="int" name="line_select1_6" id='line_select1_6' class="form-control" value="<?=$line1_6?>" placeholder="상/하한선"/></td>
                                  <th><button class="btn btn-dark" id='db_search6' onclick="input_Text6()" name='dbsearch6'>검색</button></th>
                                </tr>
                              </thead>
                            </table>
                          </div>
                          <div class="card-body">
                            <canvas id="myAreaChart6" width="100%" height="30"></canvas>
                          </div>
                          <div class="card-footer small text-muted">Updated <?=$dt?></div>
                      </div>

                      <div class="card mb-3">
                        <div class="card-header">
                          <i class="fas fa-chart-area"></i>
                             기간별 7호기 실린더 온도값들의 꺽은선 그래프</div>
                            <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                  <tr>
                                    <th>기준선 선택</th>
                                    <td><input type="int" name="line_select1_7" id='line_select1_7' class="form-control" value="<?=$line1_7?>" placeholder="상/하한선"/></td>
                                    <th><button class="btn btn-dark" id='db_search7' onclick="input_Text7()" name='dbsearch7'>검색</button></th>
                                  </tr>
                                </thead>
                              </table>
                            </div>
                            <div class="card-body">
                              <canvas id="myAreaChart7" width="100%" height="30"></canvas>
                            </div>
                            <div class="card-footer small text-muted">Updated <?=$dt?></div>
                        </div>
          </div>


          <div class="tab-pane fade" id="d">
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-area"></i>
                   기간별 1호기 HIVG 다이스 온도값들의 꺽은선 그래프</div>
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>시작 검사일자</th>
                          <td><input type="date" name="date4" id='date4' class="form-control" placeholder="검사일자" value="<?=$dt3?>"/></td>
                          <th>종료 검사일자</th>
                          <td><input type="date" name="date5" id='date5' class="form-control" placeholder="검사일자" value="<?=$dt4?>"/></td>
                          <th><button class="btn btn-dark" id='db_search1_1' onclick="input_Text1_1()" name='dbsearch1_1'>검색</button></th>
                        </tr>
                        <tr>
                          <th>기준선 선택</th>
                          <td><input type="int" name="line_select2_1" id='line_select2_1' class="form-control" value="<?=$line2_1?>" placeholder="상/하한선"/></td>
                        </tr>
                      </thead>
                    </table>
                  </div>
                  <div class="card-body">
                    <canvas id="myAreaChart1_1" width="100%" height="30"></canvas>
                  </div>
                  <div class="card-footer small text-muted">Updated <?=$dt?></div>
            </div>
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-area"></i>
                   기간별 1호기 HIVP 다이스 온도값들의 꺽은선 그래프</div>
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>기준선 선택</th>
                          <td><input type="int" name="line_select2_11" id='line_select2_11' class="form-control"value="<?=$line2_11?>" placeholder="상/하한선"/></td>
                          <th><button class="btn btn-dark" id='db_search1_11' onclick="input_Text1_11()" name='dbsearch1_11'>검색</button></th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                  <div class="card-body">
                    <canvas id="myAreaChart1_11" width="100%" height="30"></canvas>
                  </div>
                  <div class="card-footer small text-muted">Updated <?=$dt?></div>
              </div>
            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-chart-area"></i>
                   기간별 2호기 다이스 온도값들의 꺽은선 그래프</div>
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>기준선 선택</th>
                          <td><input type="int" name="line_select2_2" id='line_select2_2' class="form-control" value="<?=$line2_2?>" placeholder="상/하한선"/></td>
                          <th><button class="btn btn-dark" id='db_search1_2' onclick="input_Text1_2()" name='dbsearch1_2'>검색</button></th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                  <div class="card-body">
                    <canvas id="myAreaChart1_2" width="100%" height="30"></canvas>
                  </div>
                  <div class="card-footer small text-muted">Updated <?=$dt?></div>
              </div>
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-area"></i>
                     기간별 3호기 다이스 온도값들의 꺽은선 그래프</div>
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>기준선 선택</th>
                            <td><input type="int" name="line_select2_3" id='line_select2_3' class="form-control" value="<?=$line2_3?>" placeholder="상/하한선"/></td>
                            <th><button class="btn btn-dark" id='db_search1_3' onclick="input_Text1_3()" name='dbsearch1_3'>검색</button></th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                    <div class="card-body">
                      <canvas id="myAreaChart1_3" width="100%" height="30"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated <?=$dt?></div>
                </div>
                <div class="card mb-3">
                  <div class="card-header">
                    <i class="fas fa-chart-area"></i>
                       기간별 4호기 다이스 온도값들의 꺽은선 그래프</div>
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>기준선 선택</th>
                              <td><input type="int" name="line_select2_4" id='line_select2_4' class="form-control" value="<?=$line2_4?>" placeholder="상/하한선"/></td>
                              <th><button class="btn btn-dark" id='db_search1_4' onclick="input_Text1_4()" name='dbsearch1_4'>검색</button></th>
                            </tr>
                          </thead>
                        </table>
                      </div>
                      <div class="card-body">
                        <canvas id="myAreaChart1_4" width="100%" height="30"></canvas>
                      </div>
                      <div class="card-footer small text-muted">Updated <?=$dt?></div>
                  </div>

                  <div class="card mb-3">
                    <div class="card-header">
                      <i class="fas fa-chart-area"></i>
                         기간별 5호기 다이스 온도값들의 꺽은선 그래프</div>
                        <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                              <tr>
                                <th>기준선 선택</th>
                                <td><input type="int" name="line_select2_5" id='line_select2_5' class="form-control" value="<?=$line2_5?>" placeholder="상/하한선"/></td>
                                <th><button class="btn btn-dark" id='db_search1_5' onclick="input_Text1_5()" name='dbsearch1_5'>검색</button></th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                        <div class="card-body">
                          <canvas id="myAreaChart1_5" width="100%" height="30"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated <?=$dt?></div>
                    </div>
                    <div class="card mb-3">
                      <div class="card-header">
                        <i class="fas fa-chart-area"></i>
                           기간별 6호기 다이스 온도값들의 꺽은선 그래프</div>
                          <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                <tr>
                                  <th>기준선 선택</th>
                                  <td><input type="int" name="line_select2_6" id='line_select2_6' class="form-control" value="<?=$line2_6?>" placeholder="상/하한선"/></td>
                                  <th><button class="btn btn-dark" id='db_search1_6' onclick="input_Text1_6()" name='dbsearch1_6'>검색</button></th>
                                </tr>
                              </thead>
                            </table>
                          </div>
                          <div class="card-body">
                            <canvas id="myAreaChart1_6" width="100%" height="30"></canvas>
                          </div>
                          <div class="card-footer small text-muted">Updated <?=$dt?></div>
                      </div>

                      <div class="card mb-3">
                        <div class="card-header">
                          <i class="fas fa-chart-area"></i>
                             기간별 7호기 다이스 온도값들의 꺽은선 그래프</div>
                            <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                  <tr>
                                    <th>기준선 선택</th>
                                    <td><input type="int" name="line_select2_7" id='line_select2_7' class="form-control" value="<?=$line2_7?>" placeholder="상/하한선"/></td>
                                    <th><button class="btn btn-dark" id='db_search1_7' onclick="input_Text1_7()" name='dbsearch1_7'>검색</button></th>
                                  </tr>
                                </thead>
                              </table>
                            </div>
                            <div class="card-body">
                              <canvas id="myAreaChart1_7" width="100%" height="30"></canvas>
                            </div>
                            <div class="card-footer small text-muted">Updated <?=$dt?></div>
                        </div>
          </div>


          <div class="tab-pane fade" id="cb">
            <div class="row">
              <div class="col-lg-8">
                <div class="card mb-3">
                  <div class="card-header">
                    <i class="fas fa-chart-bar"></i>
                      각 호기별 수량 체크</div>
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>검사일자</th>
                            <td><input type="date" name="date6" id='date6' class="form-control" placeholder="검사일자" value="<?=$dt5?>"/></td>
                            <th><button class="btn btn-dark" id='db_search3' onclick="input_Text()" name='dbsearch3'>검색</button></th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                  <div class="card-body">
                    <canvas id="myBarChart1" width="100%" height="50"></canvas>
                  </div>
                  <div class="card-footer small text-muted">Updated <?=$dt?></div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card mb-3">
                  <div class="card-header">
                    <i class="fas fa-chart-pie"></i>
                      각 호기별 수량 퍼센트</div>
                  <div class="card-body">
                    <canvas id="myPieChart1" width="100%" height="100"></canvas>
                  </div>
                  <div class="card-footer small text-muted">Updated <?=$dt?></div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-8">
                <div class="card mb-3">
                  <div class="card-header">
                    <i class="fas fa-chart-bar"></i>
                      각 호기별 배합불량률 체크</div>
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>

                        </thead>
                      </table>
                    </div>
                  <div class="card-body">
                    <canvas id="myBarChart2" width="100%" height="50"></canvas>
                  </div>
                  <div class="card-footer small text-muted">Updated <?=$dt?></div>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="card mb-3">
                  <div class="card-header">
                    <i class="fas fa-chart-pie"></i>
                      각 호기별 배합불량률 퍼센트</div>
                  <div class="card-body">
                    <canvas id="myPieChart2" width="100%" height="100"></canvas>
                  </div>
                  <div class="card-footer small text-muted">Updated <?=$dt?></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Area Chart Example-->
      </div>
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

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="./jquery-ui-1.12.1/jquery-ui.min.js"></script>
  <script src="./jquery-ui-1.12.1/datepicker-ko.js"></script>
  <script type="text/javascript">$(function(){
  	$("#date1").datepicker();
    $("#date2").datepicker();
    $("#date3").datepicker();
    $("#date4").datepicker();
    $("#date5").datepicker();
    $("#date6").datepicker();
  });
  </script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->

</body>

</html>
