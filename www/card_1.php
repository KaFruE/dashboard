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

         $query1_1 = "SELECT * FROM hogi01_press_hivg ORDER BY date DESC";
         $query1_11 = "SELECT * FROM hogi01_press_hivp ORDER BY date DESC";
         $query1_2 = "SELECT * FROM hogi02_press ORDER BY date DESC";
         $query1_3 = "SELECT * FROM hogi03_press ORDER BY date DESC";
         $query1_4 = "SELECT * FROM hogi04_press ORDER BY date DESC";
         $query1_5 = "SELECT * FROM hogi05_press ORDER BY date DESC";
         $query1_6 = "SELECT * FROM hogi06_press ORDER BY date DESC";
         $query1_7 = "SELECT * FROM hogi07_press ORDER BY date DESC";

         $query2_1 = "SELECT * FROM hogi01_cut_hivg ORDER BY date DESC";
         $query2_11 = "SELECT * FROM hogi01_cut_hivp ORDER BY date DESC";
         $query2_2 = "SELECT * FROM hogi02_cut ORDER BY date DESC";
         $query2_3 = "SELECT * FROM hogi03_cut ORDER BY date DESC";
         $query2_4 = "SELECT * FROM hogi04_cut ORDER BY date DESC";
         $query2_5 = "SELECT * FROM hogi05_cut ORDER BY date DESC";
         $query2_6 = "SELECT * FROM hogi06_cut ORDER BY date DESC";
         $query2_7 = "SELECT * FROM hogi07_cut ORDER BY date DESC";

         $query3_1 = "SELECT * FROM hogi01_count ORDER BY date DESC";
         $query3_2 = "SELECT * FROM hogi02_count ORDER BY date DESC";
         $query3_3 = "SELECT * FROM hogi03_count ORDER BY date DESC";
         $query3_4 = "SELECT * FROM hogi04_count ORDER BY date DESC";
         $query3_5 = "SELECT * FROM hogi05_count ORDER BY date DESC";
         $query3_6 = "SELECT * FROM hogi06_count ORDER BY date DESC";
         $query3_7 = "SELECT * FROM hogi07_count ORDER BY date DESC";

         $query4_1 = "SELECT * FROM hogi01_other ORDER BY date DESC";
         $query4_2 = "SELECT * FROM hogi02_other ORDER BY date DESC";
         $query4_3 = "SELECT * FROM hogi03_other ORDER BY date DESC";
         $query4_4 = "SELECT * FROM hogi04_other ORDER BY date DESC";
         $query4_5 = "SELECT * FROM hogi05_other ORDER BY date DESC";
         $query4_6 = "SELECT * FROM hogi06_other ORDER BY date DESC";
         $query4_7 = "SELECT * FROM hogi07_other ORDER BY date DESC";

         $query5_1 = "SELECT * FROM hogi01_mix ORDER BY date DESC";
         $query5_2 = "SELECT * FROM hogi02_mix ORDER BY date DESC";
         $query5_3 = "SELECT * FROM hogi03_mix ORDER BY date DESC";
         $query5_4 = "SELECT * FROM hogi04_mix ORDER BY date DESC";
         $query5_5 = "SELECT * FROM hogi05_mix ORDER BY date DESC";
         $query5_6 = "SELECT * FROM hogi06_mix ORDER BY date DESC";
         $query5_7 = "SELECT * FROM hogi07_mix ORDER BY date DESC";

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


         $rows_1_1 = array();
         while($row_1_1=mysqli_fetch_array($result1_1)) {
           $rows_1_1[] = $row_1_1;
         };
         $rows_1_11 = array();
         while($row_1_11=mysqli_fetch_array($result1_11)) {
           $rows_1_11[] = $row_1_11;
         };
         $rows_2_1 = array();
         while($row_2_1=mysqli_fetch_array($result2_1)) {
           $rows_2_1[] = $row_2_1;
         };
         $rows_2_11 = array();
         while($row_2_11=mysqli_fetch_array($result2_11)) {
           $rows_2_11[] = $row_2_11;
         };


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


  });

  </script>

  <script>
      var myArray1_1 = new Array();
      var myArray1_2 = new Array();
      var myArray1_3 = new Array();
      var myArray1_4 = new Array();
      var myArray1_5 = new Array();
      var myArray1_6 = new Array();
      var myArray1_7 = new Array();
      var myArray1_8 = new Array();
      var myArray1_9 = new Array();
      var myArray1_10 = new Array();
      var myArray1_11 = new Array();
      var myArray1_12 = new Array();
      var myArray1_13 = new Array();
      var myArray1_14 = new Array();
      var myArray1_15 = new Array();
      var myArray1_16 = new Array();
      var myArray1_17 = new Array();
      var myArray1_18 = new Array();
      var myArray1_19 = new Array();
      var myArray1_20 = new Array();
      var myArray1_21 = new Array();
      var myArray1_22 = new Array();
      var myArray1_23 = new Array();
      var myArray1_24 = new Array();
      var myArray1_25 = new Array();
      var myArray1_26 = new Array();
      var myArray1_27 = new Array();
      var myArray1_28 = new Array();
      var myArray1_29 = new Array();
      var myArray1_30 = new Array();
      var myArray1_31 = new Array();
      var myArray1_32 = new Array();
      var myArray1_33 = new Array();
      var myArray1_34 = new Array();
      var myArray1_35 = new Array();

      var i = 0;

      <?php
      foreach($rows_1_1 as $value1_1) {
        ?>
        myArray1_1[i] = "<?=$value1_1['num']?>";
        myArray1_2[i] = "<?=$value1_1['product']?>";
        myArray1_3[i] = "<?=$value1_1['date']?>";
        myArray1_4[i] = "<?=$value1_1['writer']?>";
        myArray1_5[i] = "<?=$value1_1['input_time']?>";
        myArray1_6[i] = "<?=$value1_1['c1']?>";
        myArray1_7[i] = "<?=$value1_1['c2']?>";
        myArray1_8[i] = "<?=$value1_1['c3']?>";
        myArray1_9[i] = "<?=$value1_1['c4']?>";
        myArray1_10[i] = "<?=$value1_1['c5']?>";
        myArray1_11[i] = "<?=$value1_1['c6']?>";
        myArray1_12[i] = "<?=$value1_1['c1_1']?>";
        myArray1_13[i] = "<?=$value1_1['c2_1']?>";
        myArray1_14[i] = "<?=$value1_1['c3_1']?>";
        myArray1_15[i] = "<?=$value1_1['c4_1']?>";
        myArray1_16[i] = "<?=$value1_1['c5_1']?>";
        myArray1_17[i] = "<?=$value1_1['H']?>";
        myArray1_18[i] = "<?=$value1_1['H_1']?>";
        myArray1_19[i] = "<?=$value1_1['corex']?>";
        myArray1_20[i] = "<?=$value1_1['d1']?>";
        myArray1_21[i] = "<?=$value1_1['d2']?>";
        myArray1_22[i] = "<?=$value1_1['d3']?>";
        myArray1_23[i] = "<?=$value1_1['d4']?>";
        myArray1_24[i] = "<?=$value1_1['d5']?>";
        myArray1_25[i] = "<?=$value1_1['inheater']?>";
        myArray1_26[i] = "<?=$value1_1['hdmoter']?>";
        myArray1_27[i] = "<?=$value1_1['screw']?>";
        myArray1_28[i] = "<?=$value1_1['jingon']?>";
        myArray1_29[i] = "<?=$value1_1['middlemoter']?>";
        myArray1_20[i] = "<?=$value1_1['middlescrew']?>";
        myArray1_31[i] = "<?=$value1_1['jingon_1']?>";
        myArray1_32[i] = "<?=$value1_1['icetem']?>";
        myArray1_33[i] = "<?=$value1_1['inche']?>";
        myArray1_34[i] = "<?=$value1_1['tube']?>";
        myArray1_35[i] = "<?=$value1_1['length']?>";

        i++;
       <?php
      }
        ?>
   </script>

   <script>
        var myArray2_1 = new Array();
        var myArray2_2 = new Array();
        var myArray2_3 = new Array();
        var myArray2_4 = new Array();
        var myArray2_5 = new Array();
        var myArray2_6 = new Array();
        var myArray2_7 = new Array();
        var myArray2_8 = new Array();
        var myArray2_9 = new Array();
        var myArray2_10 = new Array();
        var myArray2_11 = new Array();
        var myArray2_12 = new Array();
        var myArray2_13 = new Array();
        var myArray2_14 = new Array();
        var myArray2_15 = new Array();
        var myArray2_16 = new Array();
        var myArray2_17 = new Array();
        var myArray2_18 = new Array();
        var myArray2_19 = new Array();
        var myArray2_20 = new Array();
        var myArray2_21 = new Array();
        var myArray2_22 = new Array();
        var myArray2_23 = new Array();
        var myArray2_24 = new Array();
        var myArray2_25 = new Array();
        var myArray2_26 = new Array();
        var myArray2_27 = new Array();
        var myArray2_28 = new Array();
        var myArray2_29 = new Array();
        var myArray2_30 = new Array();
        var myArray2_31 = new Array();
        var myArray2_32 = new Array();
        var myArray2_33 = new Array();
        var myArray2_34 = new Array();
        var myArray2_35 = new Array();

        var i2 = 0;

        <?php
        foreach($rows_1_11 as $value1_11) {
          ?>
          myArray2_1[i2] = "<?=$value1_11['num']?>";
          myArray2_2[i2] = "<?=$value1_11['product']?>";
          myArray2_3[i2] = "<?=$value1_11['date']?>";
          myArray2_4[i2] = "<?=$value1_11['writer']?>";
          myArray2_5[i2] = "<?=$value1_11['input_time']?>";
          myArray2_6[i2] = "<?=$value1_11['H']?>";
          myArray2_7[i2] = "<?=$value1_11['c1']?>";
          myArray2_8[i2] = "<?=$value1_11['c2']?>";
          myArray2_9[i2] = "<?=$value1_11['c3']?>";
          myArray2_10[i2] = "<?=$value1_11['c4']?>";
          myArray2_11[i2] = "<?=$value1_11['c5']?>";
          myArray2_12[i2] = "<?=$value1_11['c1_1']?>";
          myArray2_13[i2] = "<?=$value1_11['c2_1']?>";
          myArray2_14[i2] = "<?=$value1_11['c3_1']?>";
          myArray2_15[i2] = "<?=$value1_11['c4_1']?>";
          myArray2_16[i2] = "<?=$value1_11['c5_1']?>";
          myArray2_17[i2] = "<?=$value1_11['H_1']?>";
          myArray2_18[i2] = "<?=$value1_11['H_2']?>";
          myArray2_19[i2] = "<?=$value1_11['corex']?>";
          myArray2_20[i2] = "<?=$value1_11['d1']?>";
          myArray2_21[i2] = "<?=$value1_11['d2']?>";
          myArray2_22[i2] = "<?=$value1_11['d3']?>";
          myArray2_23[i2] = "<?=$value1_11['d4']?>";
          myArray2_24[i2] = "<?=$value1_11['d5']?>";
          myArray2_25[i2] = "<?=$value1_11['d6']?>";
          myArray2_26[i2] = "<?=$value1_11['inheater']?>";
          myArray2_27[i2] = "<?=$value1_11['hdmoter']?>";
          myArray2_28[i2] = "<?=$value1_11['screw']?>";
          myArray2_29[i2] = "<?=$value1_11['jingon']?>";
          myArray2_20[i2] = "<?=$value1_11['inmoter']?>";
          myArray2_31[i2] = "<?=$value1_11['inscrew']?>";
          myArray2_32[i2] = "<?=$value1_11['jingon_1']?>";
          myArray2_33[i2] = "<?=$value1_11['inche']?>";
          myArray2_34[i2] = "<?=$value1_11['tube']?>";
          myArray2_35[i2] = "<?=$value1_11['length']?>";

          i2++;
         <?php
        }
          ?>
  </script>
  <script>
      var myArray3_1 = new Array();
      var myArray3_2 = new Array();
      var myArray3_3 = new Array();
      var myArray3_4 = new Array();
      var myArray3_5 = new Array();
      var myArray3_6 = new Array();
      var myArray3_7 = new Array();
      var myArray3_8 = new Array();
      var myArray3_9 = new Array();
      var myArray3_10 = new Array();
      var myArray3_11 = new Array();
      var myArray3_12 = new Array();
      var myArray3_13 = new Array();
      var myArray3_14 = new Array();

      var i3 = 0;

      <?php
      foreach($rows_2_1 as $value2_1) {
        ?>
        myArray3_1[i3] = "<?=$value2_1['product']?>";
        myArray3_2[i3] = "<?=$value2_1['date']?>";
        myArray3_3[i3] = "<?=$value2_1['writer']?>";
        myArray3_4[i3] = "<?=$value2_1['input_time']?>";
        myArray3_5[i3] = "<?=$value2_1['appearance']?>";
        myArray3_6[i3] = "<?=$value2_1['color']?>";
        myArray3_7[i3] = "<?=$value2_1['diameter']?>";
        myArray3_8[i3] = "<?=$value2_1['thick_min']?>";
        myArray3_9[i3] = "<?=$value2_1['thick_max']?>";
        myArray3_10[i3] = "<?=$value2_1['length']?>";
        myArray3_11[i3] = "<?=$value2_1['ps']?>";
        myArray3_12[i3] = "<?=$value2_1['weight']?>";

        i3++;
       <?php
      }
        ?>
  </script>
  <script>
      var myArray4_1 = new Array();
      var myArray4_2 = new Array();
      var myArray4_3 = new Array();
      var myArray4_4 = new Array();
      var myArray4_5 = new Array();
      var myArray4_6 = new Array();
      var myArray4_7 = new Array();
      var myArray4_8 = new Array();
      var myArray4_9 = new Array();
      var myArray4_10 = new Array();
      var myArray4_11 = new Array();
      var myArray4_12 = new Array();
      var myArray4_13 = new Array();
      var myArray4_14 = new Array();

      var i4 = 0;

      <?php
      foreach($rows_2_11 as $value2_11) {
        ?>
        myArray4_1[i4] = "<?=$value2_11['product']?>";
        myArray4_2[i4] = "<?=$value2_11['date']?>";
        myArray4_3[i4] = "<?=$value2_11['writer']?>";
        myArray4_4[i4] = "<?=$value2_11['input_time']?>";
        myArray4_5[i4] = "<?=$value2_11['appearance']?>";
        myArray4_6[i4] = "<?=$value2_11['color']?>";
        myArray4_7[i4] = "<?=$value2_11['diameter_min']?>";
        myArray4_8[i4] = "<?=$value2_11['diameter_max']?>";
        myArray4_9[i4] = "<?=$value2_11['diameter_avg']?>";
        myArray4_10[i4] = "<?=$value2_11['thick_min']?>";
        myArray4_11[i4] = "<?=$value2_11['thick_max']?>";
        myArray4_12[i4] = "<?=$value2_11['length']?>";
        myArray4_13[i4] = "<?=$value2_11['ps']?>";
        myArray4_14[i4] = "<?=$value2_11['weight']?>";

        i4++;
       <?php
      }
        ?>
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
          <li class="breadcrumb-item">
            <a href="main.php">Overview</a>
          </li>
          <li class="breadcrumb-item active">1호기 데이터베이스</li>
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
            <div class="card border-danger mb-3 h-100">
              <div class="card-header">당일 1호기 HIVG 압출의 데이터 수</div>
                <div class="card-body text-danger">
                  <div class="card-body-icon">
                  </div>
                  <h5 class="card-title">1호기  HIVG 압출의 데이터 수</h5>
                  <div class="mr-5"><?=$row11_1?> 개</div>
                </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card border-warning mb-3 h-100">
              <div class="card-header">당일 1호기 HIVP 압출 데이터 수</div>
                <div class="card-body text-warning">
                  <div class="card-body-icon">
                  </div>
                  <h5 class="card-title">1호기 HIVP 압출의 데이터 수</h5>
                  <div class="mr-5"><?=$row11_11?> 개</div>
                </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card border-success mb-3 h-100">
              <div class="card-header">당일 1호기 HIVG 절단 데이터 수</div>
                <div class="card-body text-success">
                  <div class="card-body-icon">
                  </div>
                  <h5 class="card-title">1호기 HIVG 절단의 데이터 수</h5>
                  <div class="mr-5"><?= $row12_1?> 개</div>
                </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card border-info mb-3 success h-100">
              <div class="card-header">당일 1호기 HIVP 절단 데이터 수</div>
                <div class="card-body text-info">
                  <div class="card-body-icon">
                  </div>
                  <h5 class="card-title">1호기 HIVP 절단의 데이터 수</h5>
                  <div class="mr-5"><?= $row12_11?> 개</div>
                </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card border-primary mb-3 h-100">
              <div class="card-header">당일 1호기 수량 데이터 수</div>
                <div class="card-body text-primary">
                  <div class="card-body-icon">
                  </div>
                  <h5 class="card-title">1호기 수량의 데이터 수</h5>
                  <div class="mr-5"><?= $row13_1?> 개</div>
                </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card border-dark mb-3 h-100">
              <div class="card-header">당일 1호기 배합 데이터 수</div>
                <div class="card-body text-dark">
                  <div class="card-body-icon">
                  </div>
                  <h5 class="card-title">1호기 배합의 데이터 수</h5>
                  <div class="mr-5"><?= $row15_1?> 개</div>
                </div>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card border-secondary mb-3 h-100">
              <div class="card-header">당일 1호기 기타 데이터 수</div>
                <div class="card-body text-secondary">
                  <div class="card-body-icon">
                  </div>
                  <h5 class="card-title">1호기 기타의 데이터 수</h5>
                  <div class="mr-5"><?= $row14_1?> 개</div>
                </div>
            </div>
          </div>

        <!-- Bar Chart Example-->

        <!-- DataTables Example -->
      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
             1호기 HIVG 압출 데이터 베이스</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered text-table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Order</th>
                    <th>Num</th>
                    <th>Product</th>
                    <th>Date</th>
                    <th>Writer</th>
                    <th>Input_time</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                    <th>C6</th>
                    <th>C1_1</th>
                    <th>C2_1</th>
                    <th>C3_1</th>
                    <th>C4_1</th>
                    <th>C5_1</th>
                    <th>H</th>
                    <th>H_1</th>
                    <th>Corex</th>
                    <th>D1</th>
                    <th>D2</th>
                    <th>D3</th>
                    <th>D4</th>
                    <th>D5</th>
                    <th>Inheater</th>
                    <th>Hdmoter</th>
                    <th>Screw</th>
                    <th>Jingon</th>
                    <th>Middlemoter</th>
                    <th>MiddleScrew</th>
                    <th>Jingon_1</th>
                    <th>Icetem</th>
                    <th>Inche</th>
                    <th>Tube</th>
                    <th>Length</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Order</th>
                    <th>Num</th>
                    <th>Product</th>
                    <th>Date</th>
                    <th>Writer</th>
                    <th>Input_time</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                    <th>C6</th>
                    <th>C1_1</th>
                    <th>C2_1</th>
                    <th>C3_1</th>
                    <th>C4_1</th>
                    <th>C5_1</th>
                    <th>H</th>
                    <th>H_1</th>
                    <th>Corex</th>
                    <th>D1</th>
                    <th>D2</th>
                    <th>D3</th>
                    <th>D4</th>
                    <th>D5</th>
                    <th>Inheater</th>
                    <th>Hdmoter</th>
                    <th>Screw</th>
                    <th>Jingon</th>
                    <th>Middlemoter</th>
                    <th>MiddleScrew</th>
                    <th>Jingon_1</th>
                    <th>Icetem</th>
                    <th>Inche</th>
                    <th>Tube</th>
                    <th>Length</th>
                  </tr>
                </tfoot>
                <tbody>
                  <script type="text/javascript">
                    var j=0;

                    for(j=0; j<i; j++)
                    {
                      document.write("<tr>");
                      document.write("<td>"+j+"</td>");
                      document.write("<td>"+myArray1_1[j]+"</td>");
                      document.write("<td>"+myArray1_2[j]+"</td>");
                      document.write("<td>"+myArray1_3[j]+"</td>");
                      document.write("<td>"+myArray1_4[j]+"</td>");
                      document.write("<td>"+myArray1_5[j]+"</td>");
                      document.write("<td>"+myArray1_6[j]+"</td>");
                      document.write("<td>"+myArray1_7[j]+"</td>");
                      document.write("<td>"+myArray1_8[j]+"</td>");
                      document.write("<td>"+myArray1_9[j]+"</td>");
                      document.write("<td>"+myArray1_10[j]+"</td>");
                      document.write("<td>"+myArray1_11[j]+"</td>");
                      document.write("<td>"+myArray1_12[j]+"</td>");
                      document.write("<td>"+myArray1_13[j]+"</td>");
                      document.write("<td>"+myArray1_14[j]+"</td>");
                      document.write("<td>"+myArray1_15[j]+"</td>");
                      document.write("<td>"+myArray1_16[j]+"</td>");
                      document.write("<td>"+myArray1_17[j]+"</td>");
                      document.write("<td>"+myArray1_18[j]+"</td>");
                      document.write("<td>"+myArray1_19[j]+"</td>");
                      document.write("<td>"+myArray1_20[j]+"</td>");
                      document.write("<td>"+myArray1_21[j]+"</td>");
                      document.write("<td>"+myArray1_22[j]+"</td>");
                      document.write("<td>"+myArray1_23[j]+"</td>");
                      document.write("<td>"+myArray1_24[j]+"</td>");
                      document.write("<td>"+myArray1_25[j]+"</td>");
                      document.write("<td>"+myArray1_26[j]+"</td>");
                      document.write("<td>"+myArray1_27[j]+"</td>");
                      document.write("<td>"+myArray1_28[j]+"</td>");
                      document.write("<td>"+myArray1_29[j]+"</td>");
                      document.write("<td>"+myArray1_30[j]+"</td>");
                      document.write("<td>"+myArray1_31[j]+"</td>");
                      document.write("<td>"+myArray1_32[j]+"</td>");
                      document.write("<td>"+myArray1_33[j]+"</td>");
                      document.write("<td>"+myArray1_34[j]+"</td>");
                      document.write("<td>"+myArray1_35[j]+"</td>");
                      document.write("</tr>");
                    }
                  </script>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated <?=$dt?></div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
             1호기 HIVP 압출 데이터 베이스</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered text-table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Order</th>
                    <th>Num</th>
                    <th>Product</th>
                    <th>Date</th>
                    <th>Writer</th>
                    <th>Input_time</th>
                    <th>H</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                    <th>C1_1</th>
                    <th>C2_1</th>
                    <th>C3_1</th>
                    <th>C4_1</th>
                    <th>C5_1</th>
                    <th>H_1</th>
                    <th>H_2</th>
                    <th>Corex</th>
                    <th>D1</th>
                    <th>D2</th>
                    <th>D3</th>
                    <th>D4</th>
                    <th>D5</th>
                    <th>D6</th>
                    <th>Inheater</th>
                    <th>Hdmoter</th>
                    <th>Screw</th>
                    <th>Jingon</th>
                    <th>Inmoter</th>
                    <th>InScrew</th>
                    <th>Jingon_1</th>
                    <th>Inche</th>
                    <th>Tube</th>
                    <th>Length</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Order</th>
                    <th>Num</th>
                    <th>Product</th>
                    <th>Date</th>
                    <th>Writer</th>
                    <th>Input_time</th>
                    <th>H</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                    <th>C1_1</th>
                    <th>C2_1</th>
                    <th>C3_1</th>
                    <th>C4_1</th>
                    <th>C5_1</th>
                    <th>H_1</th>
                    <th>H_2</th>
                    <th>Corex</th>
                    <th>D1</th>
                    <th>D2</th>
                    <th>D3</th>
                    <th>D4</th>
                    <th>D5</th>
                    <th>D6</th>
                    <th>Inheater</th>
                    <th>Hdmoter</th>
                    <th>Screw</th>
                    <th>Jingon</th>
                    <th>Inmoter</th>
                    <th>InScrew</th>
                    <th>Jingon_1</th>
                    <th>Inche</th>
                    <th>Tube</th>
                    <th>Length</th>
                  </tr>
                </tfoot>
                <tbody>
                  <script type="text/javascript">
                    var j2=0;

                    for(j2=0; j2<i2; j2++)
                    {
                      document.write("<tr>");
                      document.write("<td>"+j2+"</td>");
                      document.write("<td>"+myArray2_1[j2]+"</td>");
                      document.write("<td>"+myArray2_2[j2]+"</td>");
                      document.write("<td>"+myArray2_3[j2]+"</td>");
                      document.write("<td>"+myArray2_4[j2]+"</td>");
                      document.write("<td>"+myArray2_5[j2]+"</td>");
                      document.write("<td>"+myArray2_6[j2]+"</td>");
                      document.write("<td>"+myArray2_7[j2]+"</td>");
                      document.write("<td>"+myArray2_8[j2]+"</td>");
                      document.write("<td>"+myArray2_9[j2]+"</td>");
                      document.write("<td>"+myArray2_10[j2]+"</td>");
                      document.write("<td>"+myArray2_11[j2]+"</td>");
                      document.write("<td>"+myArray2_12[j2]+"</td>");
                      document.write("<td>"+myArray2_13[j2]+"</td>");
                      document.write("<td>"+myArray2_14[j2]+"</td>");
                      document.write("<td>"+myArray2_15[j2]+"</td>");
                      document.write("<td>"+myArray2_16[j2]+"</td>");
                      document.write("<td>"+myArray2_17[j2]+"</td>");
                      document.write("<td>"+myArray2_18[j2]+"</td>");
                      document.write("<td>"+myArray2_19[j2]+"</td>");
                      document.write("<td>"+myArray2_20[j2]+"</td>");
                      document.write("<td>"+myArray2_21[j2]+"</td>");
                      document.write("<td>"+myArray2_22[j2]+"</td>");
                      document.write("<td>"+myArray2_23[j2]+"</td>");
                      document.write("<td>"+myArray2_24[j2]+"</td>");
                      document.write("<td>"+myArray2_25[j2]+"</td>");
                      document.write("<td>"+myArray2_26[j2]+"</td>");
                      document.write("<td>"+myArray2_27[j2]+"</td>");
                      document.write("<td>"+myArray2_28[j2]+"</td>");
                      document.write("<td>"+myArray2_29[j2]+"</td>");
                      document.write("<td>"+myArray2_30[j2]+"</td>");
                      document.write("<td>"+myArray2_31[j2]+"</td>");
                      document.write("<td>"+myArray2_32[j2]+"</td>");
                      document.write("<td>"+myArray2_33[j2]+"</td>");
                      document.write("<td>"+myArray2_34[j2]+"</td>");
                      document.write("<td>"+myArray2_35[j2]+"</td>");
                      document.write("</tr>");

                    }

                  </script>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated <?=$dt?></div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
             1호기 HIVG 절단 데이터 베이스</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered text-table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Order</th>
                    <th>Product</th>
                    <th>Date</th>
                    <th>Writer</th>
                    <th>Input_time</th>
                    <th>Appearance</th>
                    <th>Color</th>
                    <th>Diameter</th>
                    <th>Thick_Min</th>
                    <th>Thick_Max</th>
                    <th>Length</th>
                    <th>Ps</th>
                    <th>Weight</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Order</th>
                    <th>Product</th>
                    <th>Date</th>
                    <th>Writer</th>
                    <th>Input_time</th>
                    <th>Appearance</th>
                    <th>Color</th>
                    <th>Diameter</th>
                    <th>Thick_Min</th>
                    <th>Thick_Max</th>
                    <th>Length</th>
                    <th>Ps</th>
                    <th>Weight</th>
                  </tr>
                </tfoot>
                <tbody>
                  <script type="text/javascript">
                    var j3=0;

                    for(j3=0; j3<i3; j3++)
                    {
                      document.write("<tr>");
                      document.write("<td>"+j3+"</td>");
                      document.write("<td>"+myArray3_1[j3]+"</td>");
                      document.write("<td>"+myArray3_2[j3]+"</td>");
                      document.write("<td>"+myArray3_3[j3]+"</td>");
                      document.write("<td>"+myArray3_4[j3]+"</td>");
                      document.write("<td>"+myArray3_5[j3]+"</td>");
                      document.write("<td>"+myArray3_6[j3]+"</td>");
                      document.write("<td>"+myArray3_7[j3]+"</td>");
                      document.write("<td>"+myArray3_8[j3]+"</td>");
                      document.write("<td>"+myArray3_9[j3]+"</td>");
                      document.write("<td>"+myArray3_10[j3]+"</td>");
                      document.write("<td>"+myArray3_11[j3]+"</td>");
                      document.write("<td>"+myArray3_12[j3]+"</td>");
                      document.write("</tr>");

                    }

                  </script>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated <?=$dt?></div>
        </div>
    </div>

    <div class="container-fluid">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
           1호기 HIVP 절단 데이터 베이스</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered text-table" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Order</th>
                  <th>Product</th>
                  <th>Date</th>
                  <th>Writer</th>
                  <th>Input_time</th>
                  <th>Appearance</th>
                  <th>Color</th>
                  <th>Diameter_Min</th>
                  <th>Diameter_Max</th>
                  <th>Diameter_Avg</th>
                  <th>Thick_Min</th>
                  <th>Thick_Max</th>
                  <th>Length</th>
                  <th>Ps</th>
                  <th>Weight</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Order</th>
                  <th>Product</th>
                  <th>Date</th>
                  <th>Writer</th>
                  <th>Input_time</th>
                  <th>Appearance</th>
                  <th>Color</th>
                  <th>Diameter_Min</th>
                  <th>Diameter_Max</th>
                  <th>Diameter_Avg</th>
                  <th>Thick_Min</th>
                  <th>Thick_Max</th>
                  <th>Length</th>
                  <th>Ps</th>
                  <th>Weight</th>
                </tr>
              </tfoot>
              <tbody>
                <script type="text/javascript">
                  var j4=0;

                  for(j4=0; j4<i4; j4++)
                  {
                    document.write("<tr>");
                    document.write("<td>"+j4+"</td>");
                    document.write("<td>"+myArray4_1[j4]+"</td>");
                    document.write("<td>"+myArray4_2[j4]+"</td>");
                    document.write("<td>"+myArray4_3[j4]+"</td>");
                    document.write("<td>"+myArray4_4[j4]+"</td>");
                    document.write("<td>"+myArray4_5[j4]+"</td>");
                    document.write("<td>"+myArray4_6[j4]+"</td>");
                    document.write("<td>"+myArray4_7[j4]+"</td>");
                    document.write("<td>"+myArray4_8[j4]+"</td>");
                    document.write("<td>"+myArray4_9[j4]+"</td>");
                    document.write("<td>"+myArray4_10[j4]+"</td>");
                    document.write("<td>"+myArray4_11[j4]+"</td>");
                    document.write("<td>"+myArray4_12[j4]+"</td>");
                    document.write("<td>"+myArray4_13[j4]+"</td>");
                    document.write("<td>"+myArray4_14[j4]+"</td>");
                    document.write("</tr>");

                  }

                </script>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated <?=$dt?></div>
      </div>
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
