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
        $query1 = "select * from hogi01_count where date='$dt' AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
        $query2 = "select * from hogi02_count where date='$dt' AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
        $query3 = "select * from hogi03_count where date='$dt' AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
        $query4 = "select * from hogi04_count where date='$dt' AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
        $query5 = "select * from hogi05_count where date='$dt' AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
        $query6 = "select * from hogi06_count where date='$dt' AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
        $query7 = "select * from hogi07_count where date='$dt' AND CHECKTIME_1 BETWEEN'06:00:01' AND '18:00:00'";
        $query1_1= "select * from hogi01_other where date='$dt' ";
        $query2_1= "select * from hogi02_other where date='$dt' ";
        $query3_1= "select * from hogi03_other where date='$dt' ";
        $query4_1= "select * from hogi04_other where date='$dt' ";
        $query5_1= "select * from hogi05_other where date='$dt' ";
        $query6_1= "select * from hogi06_other where date='$dt' ";
        $query7_1= "select * from hogi07_other where date='$dt' ";

        $query1_b = "select * from hogi01_count where date='$dt' AND checktime_1  NOT BETWEEN '06:00:01' AND '18:00:00'";
        $query2_b = "select * from hogi02_count where date='$dt' AND checktime_1  NOT BETWEEN '06:00:01' AND '18:00:00'";
        $query3_b = "select * from hogi03_count where date='$dt' AND checktime_1  NOT BETWEEN '06:00:01' AND '18:00:00'";
        $query4_b = "select * from hogi04_count where date='$dt' AND checktime_1  NOT BETWEEN '06:00:01' AND '18:00:00'";
        $query5_b = "select * from hogi05_count where date='$dt' AND checktime_1  NOT BETWEEN '06:00:01' AND '18:00:00'";
        $query6_b = "select * from hogi06_count where date='$dt' AND checktime_1  NOT BETWEEN '06:00:01' AND '18:00:00'";
        $query7_b = "select * from hogi07_count where date='$dt' AND checktime_1  NOT BETWEEN '06:00:01' AND '18:00:00'";



        $result1 = $connect->query($query1);
        $result2 = $connect->query($query2);
        $result3 = $connect->query($query3);
        $result4 = $connect->query($query4);
        $result5 = $connect->query($query5);
        $result6 = $connect->query($query6);
        $result7 = $connect->query($query7);
        $result1_1 = $connect->query($query1_1);
        $result2_1 = $connect->query($query2_1);
        $result3_1 = $connect->query($query3_1);
        $result4_1 = $connect->query($query4_1);
        $result5_1 = $connect->query($query5_1);
        $result6_1 = $connect->query($query6_1);
        $result7_1 = $connect->query($query7_1);

        $result1_b = $connect->query($query1_b);
        $result2_b = $connect->query($query2_b);
        $result3_b = $connect->query($query3_b);
        $result4_b = $connect->query($query4_b);
        $result5_b = $connect->query($query5_b);
        $result6_b = $connect->query($query6_b);
        $result7_b = $connect->query($query7_b);
        $result1_1_b = $connect->query($query1_1_b);
        $result2_1_b = $connect->query($query2_1_b);
        $result3_1_b = $connect->query($query3_1_b);
        $result4_1_b = $connect->query($query4_1_b);
        $result5_1_b = $connect->query($query5_1_b);
        $result6_1_b = $connect->query($query6_1_b);
        $result7_1_b = $connect->query($query7_1_b);

        $row1=mysqli_fetch_array($result1);
        $row2=mysqli_fetch_array($result2);
        $row3=mysqli_fetch_array($result3);
        $row4=mysqli_fetch_array($result4);
        $row5=mysqli_fetch_array($result5);
        $row6=mysqli_fetch_array($result6);
        $row7=mysqli_fetch_array($result7);
        $row1_1=mysqli_fetch_array($result1_1);
        $row2_1=mysqli_fetch_array($result2_1);
        $row3_1=mysqli_fetch_array($result3_1);
        $row4_1=mysqli_fetch_array($result4_1);
        $row5_1=mysqli_fetch_array($result5_1);
        $row6_1=mysqli_fetch_array($result6_1);
        $row7_1=mysqli_fetch_array($result7_1);

        $row1_b=mysqli_fetch_array($result1_b);
        $row2_b=mysqli_fetch_array($result2_b);
        $row3_b=mysqli_fetch_array($result3_b);
        $row4_b=mysqli_fetch_array($result4_b);
        $row5_b=mysqli_fetch_array($result5_b);
        $row6_b=mysqli_fetch_array($result6_b);
        $row7_b=mysqli_fetch_array($result7_b);
        $row1_1_b=mysqli_fetch_array($result1_1_b);
        $row2_1_b=mysqli_fetch_array($result2_1_b);
        $row3_1_b=mysqli_fetch_array($result3_1_b);
        $row4_1_b=mysqli_fetch_array($result4_1_b);
        $row5_1_b=mysqli_fetch_array($result5_1_b);
        $row6_1_b=mysqli_fetch_array($result6_1_b);
        $row7_1_b=mysqli_fetch_array($result7_1_b);






        if(!$row1['amount_1'])
        {
          $row1['amount_1'] =0;
        }
        if(!$row1['perweight_1'])
        {
          $row1['perweight_1']=0;
        }
        if(!$row1_1['awhilestop_1'])
        {
          $row1_1['awhilestop_1']=0;
        }
        if(!$row1_1['awhilestop_2'])
        {
          $row1_1['awhilestop_2']=0;
        }

        if(!$row1_1['workinghours_1'])
        {
          $row1_1['workinghours_1'] =0;
        }
        if(!$row1_1['workinghours_2'])
        {
          $row1_1['workinghours_2'] =0;
        }


        if(!$row1['amount_2'])
        {
          $row1['amount_2'] =0;
        }
        if(!$row1['perweight_2'])
        {
          $row1['perweight_2']=0;
        }


        if(!$row1['amount_3'])
        {
          $row1['amount_3'] =0;
        }
        if(!$row1['perweight_3'])
        {
          $row1['perweight_3']=0;
        }

        if(!$row2['amount_1'])
        {
          $row2['amount_1'] =0;
        }
        if(!$row2['perweight_1'])
        {
          $row2['perweight_1']=0;
        }
        if(!$row2_1['awhilestop_1'])
        {
          $row2_1['awhilestop_1']=0;
        }
        if(!$row2_1['awhilestop_2'])
        {
          $row2_1['awhilestop_2']=0;
        }
        if(!$row2_1['workinghours_1'])
        {
          $row2_1['workinghours_1'] =0;
        }
        if(!$row2_1['workinghours_2'])
        {
          $row2_1['workinghours_2'] =0;
        }

        if(!$row2['amount_2'])
        {
          $row2['amount_2'] =0;
        }
        if(!$row2['perweight_2'])
        {
          $row2['perweight_2']=0;
        }


        if(!$row3['amount_1'])
        {
          $row3['amount_1'] =0;
        }
        if(!$row3['perweight_1'])
        {
          $row3['perweight_1']=0;
        }
        if(!$row3_1['awhilestop_1'])
        {
          $row3_1['awhilestop_1']=0;
        }
        if(!$row3_1['awhilestop_2'])
        {
          $row3_1['awhilestop_2']=0;
        }
        if(!$row3_1['workinghours_1'])
        {
          $row3_1['workinghours_1'] =0;
        }
        if(!$row3_1['workinghours_2'])
        {
          $row3_1['workinghours_2'] =0;
        }

        if(!$row3['amount_2'])
        {
          $row3['amount_2'] =0;
        }
        if(!$row3['perweight_2'])
        {
          $row3['perweight_2']=0;
        }


        if(!$row4['amount_1'])
        {
          $row4['amount_1'] =0;
        }
        if(!$row4['perweight_1'])
        {
          $row4['perweight_1']=0;
        }
        if(!$row4_1['awhilestop_1'])
        {
          $row4_1['awhilestop_1']=0;
        }
        if(!$row4_1['awhilestop_2'])
        {
          $row4_1['awhilestop_2']=0;
        }
        if(!$row4_1['workinghours_1'])
        {
          $row4_1['workinghours_1'] =0;
        }
        if(!$row4_1['workinghours_2'])
        {
          $row4_1['workinghours_2'] =0;
        }

        if(!$row4['amount_2'])
        {
          $row4['amount_2'] =0;
        }
        if(!$row4['perweight_2'])
        {
          $row4['perweight_2']=0;
        }


        if(!$row5['amount_1'])
        {
          $row5['amount_1'] =0;
        }
        if(!$row5['perweight_1'])
        {
          $row5['perweight_1']=0;
        }
        if(!$row5_1['awhilestop_1'])
        {
          $row5_1['awhilestop_1']=0;
        }
        if(!$row5_1['awhilestop_2'])
        {
          $row5_1['awhilestop_2']=0;
        }
        if(!$row5_1['workinghours_1'])
        {
          $row5_1['workinghours_1'] =0;
        }
        if(!$row5_1['workinghours_2'])
        {
          $row5_1['workinghours_2'] =0;
        }

        if(!$row5['amount_2'])
        {
          $row5['amount_2'] =0;
        }
        if(!$row5['perweight_2'])
        {
          $row5['perweight_2']=0;
        }


        if(!$row5['amount_3'])
        {
          $row5['amount_3'] =0;
        }
        if(!$row5['perweight_3'])
        {
          $row5['perweight_3']=0;
        }

        if(!$row6['amount_1'])
        {
          $row6['amount_1'] =0;
        }
        if(!$row6['perweight_1'])
        {
          $row6['perweight_1']=0;
        }
        if(!$row6_1['awhilestop_1'])
        {
          $row6_1['awhilestop_1']=0;
        }
        if(!$row6_1['awhilestop_2'])
        {
          $row6_1['awhilestop_2']=0;
        }
        if(!$row6_1['workinghours_1'])
        {
          $row6_1['workinghours_1'] =0;
        }
        if(!$row6_1['workinghours_2'])
        {
          $row6_1['workinghours_2'] =0;
        }

        if(!$row6['amount_2'])
        {
          $row6['amount_2'] =0;
        }
        if(!$row6['perweight_2'])
        {
          $row6['perweight_2']=0;
        }

        if(!$row7['amount_1'])
        {
          $row7['amount_1'] =0;
        }
        if(!$row7['perweight_1'])
        {
          $row7['perweight_1']=0;
        }
        if(!$row7_1['awhilestop_1'])
        {
          $row7_1['awhilestop_1']=0;
        }
        if(!$row7_1['awhilestop_2'])
        {
          $row7_1['awhilestop_2']=0;
        }
        if(!$row7_1['workinghours_1'])
        {
          $row7_1['workinghours_1'] =0;
        }
        if(!$row7_1['workinghours_2'])
        {
          $row7_1['workinghours_2'] =0;
        }

        if(!$row7['amount_2'])
        {
          $row7['amount_2'] =0;
        }
        if(!$row7['perweight_2'])
        {
          $row7['perweight_2']=0;
        }
        /////////////////////////////////////
        if(!$row1_b['amount_1'])
        {
          $row1_b['amount_1'] =0;
        }
        if(!$row1_b['perweight_1'])
        {
          $row1_b['perweight_1']=0;
        }
        if(!$row1_1_b['awhilestop_1'])
        {
          $row1_1_b['awhilestop_1']=0;
        }
        if(!$row1_1_b['awhilestop_2'])
        {
          $row1_1_b['awhilestop_2']=0;
        }

        if(!$row1_1_b['workinghours_1'])
        {
          $row1_1_b['workinghours_1'] =0;
        }
        if(!$row1_1_b['workinghours_2'])
        {
          $row1_1_b['workinghours_2'] =0;
        }


        if(!$row1_b['amount_2'])
        {
          $row1_b['amount_2'] =0;
        }
        if(!$row1_b['perweight_2'])
        {
          $row1_b['perweight_2']=0;
        }


        if(!$row1_b['amount_3'])
        {
          $row1_b['amount_3'] =0;
        }
        if(!$row1_b['perweight_3'])
        {
          $row1_b['perweight_3']=0;
        }

        if(!$row2_b['amount_1'])
        {
          $row2_b['amount_1'] =0;
        }
        if(!$row2_b['perweight_1'])
        {
          $row2_b['perweight_1']=0;
        }
        if(!$row2_1_b['awhilestop_1'])
        {
          $row2_1_b['awhilestop_1']=0;
        }
        if(!$row2_1_b['awhilestop_2'])
        {
          $row2_1_b['awhilestop_2']=0;
        }
        if(!$row2_1_b['workinghours_1'])
        {
          $row2_1_b['workinghours_1'] =0;
        }
        if(!$row2_1_b['workinghours_2'])
        {
          $row2_1_b['workinghours_2'] =0;
        }

        if(!$row2_b['amount_2'])
        {
          $row2_b['amount_2'] =0;
        }
        if(!$row2_b['perweight_2'])
        {
          $row2_b['perweight_2']=0;
        }


        if(!$row3_b['amount_1'])
        {
          $row3_b['amount_1'] =0;
        }
        if(!$row3_b['perweight_1'])
        {
          $row3_b['perweight_1']=0;
        }
        if(!$row3_1_b['awhilestop_1'])
        {
          $row3_1_b['awhilestop_1']=0;
        }
        if(!$row3_1_b['awhilestop_2'])
        {
          $row3_1_b['awhilestop_2']=0;
        }
        if(!$row3_1_b['workinghours_1'])
        {
          $row3_1_b['workinghours_1'] =0;
        }
        if(!$row3_1_b['workinghours_2'])
        {
          $row3_1_b['workinghours_2'] =0;
        }

        if(!$row3_b['amount_2'])
        {
          $row3_b['amount_2'] =0;
        }
        if(!$row3_b['perweight_2'])
        {
          $row3_b['perweight_2']=0;
        }


        if(!$row4_b['amount_1'])
        {
          $row4_b['amount_1'] =0;
        }
        if(!$row4_b['perweight_1'])
        {
          $row4_b['perweight_1']=0;
        }
        if(!$row4_1_b['awhilestop_1'])
        {
          $row4_1_b['awhilestop_1']=0;
        }
        if(!$row4_1_b['awhilestop_2'])
        {
          $row4_1_b['awhilestop_2']=0;
        }
        if(!$row4_1_b['workinghours_1'])
        {
          $row4_1_b['workinghours_1'] =0;
        }
        if(!$row4_1_b['workinghours_2'])
        {
          $row4_1_b['workinghours_2'] =0;
        }

        if(!$row4_b['amount_2'])
        {
          $row4_b['amount_2'] =0;
        }
        if(!$row4_b['perweight_2'])
        {
          $row4_b['perweight_2']=0;
        }


        if(!$row5_b['amount_1'])
        {
          $row5_b['amount_1'] =0;
        }
        if(!$row5_b['perweight_1'])
        {
          $row5_b['perweight_1']=0;
        }
        if(!$row5_1_b['awhilestop_1'])
        {
          $row5_1_b['awhilestop_1']=0;
        }
        if(!$row5_1_b['awhilestop_2'])
        {
          $row5_1_b['awhilestop_2']=0;
        }
        if(!$row5_1_b['workinghours_1'])
        {
          $row5_1_b['workinghours_1'] =0;
        }
        if(!$row5_1_b['workinghours_2'])
        {
          $row5_1_b['workinghours_2'] =0;
        }

        if(!$row5_b['amount_2'])
        {
          $row5_b['amount_2'] =0;
        }
        if(!$row5_b['perweight_2'])
        {
          $row5_b['perweight_2']=0;
        }


        if(!$row5_b['amount_3'])
        {
          $row5_b['amount_3'] =0;
        }
        if(!$row5_b['perweight_3'])
        {
          $row5_b['perweight_3']=0;
        }

        if(!$row6_b['amount_1'])
        {
          $row6_b['amount_1'] =0;
        }
        if(!$row6_b['perweight_1'])
        {
          $row6_b['perweight_1']=0;
        }
        if(!$row6_1_b['awhilestop_1'])
        {
          $row6_1_b['awhilestop_1']=0;
        }
        if(!$row6_1_b['awhilestop_2'])
        {
          $row6_1_b['awhilestop_2']=0;
        }
        if(!$row6_1_b['workinghours_1'])
        {
          $row6_1_b['workinghours_1'] =0;
        }
        if(!$row6_1_b['workinghours_2'])
        {
          $row6_1_b['workinghours_2'] =0;
        }

        if(!$row6_b['amount_2'])
        {
          $row6_b['amount_2'] =0;
        }
        if(!$row6_b['perweight_2'])
        {
          $row6_b['perweight_2']=0;
        }

        if(!$row7_b['amount_1'])
        {
          $row7_b['amount_1'] =0;
        }
        if(!$row7_b['perweight_1'])
        {
          $row7_b['perweight_1']=0;
        }
        if(!$row7_1_b['awhilestop_1'])
        {
          $row7_1_b['awhilestop_1']=0;
        }
        if(!$row7_1_b['awhilestop_2'])
        {
          $row7_1_b['awhilestop_2']=0;
        }
        if(!$row7_1_b['workinghours_1'])
        {
          $row7_1_b['workinghours_1'] =0;
        }
        if(!$row7_1_b['workinghours_2'])
        {
          $row7_1_b['workinghours_2'] =0;
        }

        if(!$row7_b['amount_2'])
        {
          $row7_b['amount_2'] =0;
        }
        if(!$row7_b['perweight_2'])
        {
          $row7_b['perweight_2']=0;
        }
        //////////////////////////

        if(!$row1['standard_1'])
        {
          $row1['standard_1']="";
        }
        if(!$row1_b['standard_1'])
        {
          $row1_b['standard_1']="";
        }

        if(!$row1['standard_2'])
        {
          $row1['standard_2']="";
        }
        if(!$row1_b['standard_2'])
        {
          $row1_b['standard_2']="";
        }

        if(!$row1['standard_3'])
        {
          $row1['standard_3']="";
        }
        if(!$row1_b['standard_3'])
        {
          $row1_b['standard_3']="";
        }

        if(!$row1['br_1'])
        {
          $row1['br_1']="";
        }
        if(!$row1_b['br_1'])
        {
          $row1_b['br_1']="";
        }
        if(!$row1['br_2'])
        {
          $row1['br_2']="";
        }
        if(!$row1_b['br_2'])
        {
          $row1_b['br_2']="";
        }
        if(!$row1['br_3'])
        {
          $row1['br_3']="";
        }
        if(!$row1_b['br_3'])
        {
          $row1_b['br_3']="";
        }

        if(!$row1['failure_1'])
        {
          $row1['failure_1']=0;
        }
        if(!$row1_b['failure_1'])
        {
          $row1_b['failure_1']=0;
        }
        if(!$row1['failure_2'])
        {
          $row1['failure_2']=0;
        }
        if(!$row1_b['failure_2'])
        {
          $row1_b['failure_2']=0;
        }
        if(!$row1['failure_3'])
        {
          $row1['failure_3']=0;
        }
        if(!$row1_b['failure_3'])
        {
          $row1_b['failure_3']=0;
        }

        if(!$row1['failurereason_1'])
        {
          $row1['failurereason_1']="";
        }
        if(!$row1_b['failurereason_1'])
        {
          $row1_b['failurereason_1']="";
        }
        if(!$row1['failurereason_2'])
        {
          $row1['failurereason_2']="";
        }
        if(!$row1_b['failurereason_2'])
        {
          $row1_b['failurereason_2']="";
        }
        if(!$row1['failurereason_3'])
          {
            $row1['failurereason_3']="";
          }
          if(!$row1_b['failurereason_3'])
          {
            $row1_b['failurereason_3']="";
          }

        //////////////////////////

        if(!$row2['standard_1'])
        {
          $row2['standard_1']="";
        }
        if(!$row2_b['standard_1'])
        {
          $row2_b['standard_1']="";
        }
        if(!$row2['standard_2'])
        {
          $row2['standard_2']="";
        }
        if(!$row2_b['standard_2'])
        {
          $row2_b['standard_2']="";
        }

        if(!$row2['br_1'])
        {
          $row2['br_1']="";
        }
        if(!$row2_b['br_1'])
        {
          $row2_b['br_1']="";
        }
        if(!$row2['br_2'])
        {
          $row2['br_2']="";
        }
        if(!$row2_b['br_2'])
        {
          $row2_b['br_2']="";
        }

        if(!$row2['failure_1'])
        {
          $row2['failure_1']=0;
        }
        if(!$row2_b['failure_1'])
        {
          $row2_b['failure_1']=0;
        }
        if(!$row2['failure_2'])
        {
          $row2['failure_2']=0;
        }
        if(!$row2_b['$failure_2'])
        {
          $row2_b['failure_2']=0;
        }

        if(!$row2['failurereason_1'])
        {
          $row2['failurereason_1']="";
        }
        if(!$row2_b['failurereason_1'])
        {
          $row2_b['failurereason_1']="";
        }
        if(!$row2['failurereason_2'])
        {
          $row2['failurereason_2']="";
        }
        if(!$row2_b['failurereason_2'])
        {
          $row2_b['failurereason_2']="";
        }
        //////////////////////////

        if(!$row3['standard_1'])
        {
          $row3['standard_1']="";
        }
        if(!$row3_b['standard_1'])
        {
          $row3_b['standard_1']="";
        }
        if(!$row3['standard_2'])
        {
          $row3['standard_2']="";
        }
        if(!$row3_b['standard_2'])
        {
          $row3_b['standard_2']="";
        }

        if(!$row3['br_1'])
        {
          $row3['br_1']="";
        }
        if(!$row3_b['br_1'])
        {
          $row3_b['br_1']="";
        }
        if(!$row3['br_2'])
        {
          $row3['br_2']="";
        }
        if(!$row3_b['br_2'])
        {
          $row3_b['br_2']="";
        }

        if(!$row3['failure_1'])
        {
          $row3['failure_1']=0;
        }
        if(!$row3_b['failure_1'])
        {
          $row3_b['failure_1']=0;
        }
        if(!$row3['failure_2'])
        {
          $row3['failure_2']=0;
        }
        if(!$row3_b['$failure_2'])
        {
          $row3_b['failure_2']=0;
        }

        if(!$row3['failurereason_1'])
        {
          $row3['failurereason_1']="";
        }
        if(!$row3_b['failurereason_1'])
        {
          $row3_b['failurereason_1']="";
        }
        if(!$row3['failurereason_2'])
        {
          $row3['failurereason_2']="";
        }
        if(!$row3_b['failurereason_2'])
        {
          $row3_b['failurereason_2']="";
        }
        //////////////////////////

        if(!$row4['standard_1'])
        {
          $row4['standard_1']="";
        }
        if(!$row4_b['standard_1'])
        {
          $row4_b['standard_1']="";
        }
        if(!$row4['standard_2'])
        {
          $row4['standard_2']="";
        }
        if(!$row4_b['standard_2'])
        {
          $row4_b['standard_2']="";
        }

        if(!$row4['br_1'])
        {
          $row4['br_1']="";
        }
        if(!$row4_b['br_1'])
        {
          $row4_b['br_1']="";
        }
        if(!$row4['br_2'])
        {
          $row4['br_2']="";
        }
        if(!$row4_b['br_2'])
        {
          $row4_b['br_2']="";
        }

        if(!$row4['failure_1'])
        {
          $row4['failure_1']=0;
        }
        if(!$row4_b['failure_1'])
        {
          $row4_b['failure_1']=0;
        }
        if(!$row4['failure_2'])
        {
          $row4['failure_2']=0;
        }
        if(!$row4_b['$failure_2'])
        {
          $row4_b['failure_2']=0;
        }

        if(!$row4['failurereason_1'])
        {
          $row4['failurereason_1']="";
        }
        if(!$row4_b['failurereason_1'])
        {
          $row4_b['failurereason_1']="";
        }
        if(!$row4['failurereason_2'])
        {
          $row4['failurereason_2']="";
        }
        if(!$row4_b['failurereason_2'])
        {
          $row4_b['failurereason_2']="";
        }
        //////////////////////////

        if(!$row5['standard_1'])
        {
          $row5['standard_1']="";
        }
        if(!$row5_b['standard_1'])
        {
          $row5_b['standard_1']="";
        }

        if(!$row5['standard_2'])
        {
          $row5['standard_2']="";
        }
        if(!$row5_b['standard_2'])
        {
          $row5_b['standard_2']="";
        }

        if(!$row5['standard_3'])
        {
          $row5['standard_3']="";
        }
        if(!$row5_b['standard_3'])
        {
          $row5_b['standard_3']="";
        }

        if(!$row5['br_1'])
        {
          $row5['br_1']="";
        }
        if(!$row5_b['br_1'])
        {
          $row5_b['br_1']="";
        }
        if(!$row5['br_2'])
        {
          $row5['br_2']="";
        }
        if(!$row5_b['br_2'])
        {
          $row5_b['br_2']="";
        }
        if(!$row5['br_3'])
        {
          $row5['br_3']="";
        }
        if(!$row5_b['br_3'])
        {
          $row5_b['br_3']="";
        }

        if(!$row5['failure_1'])
        {
          $row5['failure_1']=0;
        }
        if(!$row5_b['failure_1'])
        {
          $row5_b['failure_1']=0;
        }
        if(!$row5['failure_2'])
        {
          $row5['failure_2']=0;
        }
        if(!$row5_b['failure_2'])
        {
          $row5_b['failure_2']=0;
        }
        if(!$row5['failure_3'])
        {
          $row5['failure_3']=0;
        }
        if(!$row5_b['failure_3'])
        {
          $row5_b['failure_3']=0;
        }

        if(!$row5['failurereason_1'])
        {
          $row5['failurereason_1']="";
        }
        if(!$row5_b['failurereason_1'])
        {
          $row5_b['failurereason_1']="";
        }
        if(!$row5['failurereason_2'])
        {
          $row5['failurereason_2']="";
        }
        if(!$row5_b['failurereason_2'])
        {
          $row5_b['failurereason_2']="";
        }
        if(!$row5['failurereason_3'])
          {
            $row5['failurereason_3']="";
          }
          if(!$row5_b['failurereason_3'])
          {
            $row5_b['failurereason_3']="";
          }
        //////////////////////////

        if(!$row6['standard_1'])
        {
          $row6['standard_1']="";
        }
        if(!$row6_b['standard_1'])
        {
          $row6_b['standard_1']="";
        }
        if(!$row6['standard_2'])
        {
          $row6['standard_2']="";
        }
        if(!$row6_b['standard_2'])
        {
          $row6_b['standard_2']="";
        }

        if(!$row6['br_1'])
        {
          $row6['br_1']="";
        }
        if(!$row6_b['br_1'])
        {
          $row6_b['br_1']="";
        }
        if(!$row6['br_2'])
        {
          $row6['br_2']="";
        }
        if(!$row6_b['br_2'])
        {
          $row6_b['br_2']="";
        }

        if(!$row6['failure_1'])
        {
          $row6['failure_1']=0;
        }
        if(!$row6_b['failure_1'])
        {
          $row6_b['failure_1']=0;
        }
        if(!$row6['failure_2'])
        {
          $row6['failure_2']=0;
        }
        if(!$row6_b['$failure_2'])
        {
          $row6_b['failure_2']=0;
        }

        if(!$row6['failurereason_1'])
        {
          $row6['failurereason_1']="";
        }
        if(!$row6_b['failurereason_1'])
        {
          $row6_b['failurereason_1']="";
        }
        if(!$row6['failurereason_2'])
        {
          $row6['failurereason_2']="";
        }
        if(!$row6_b['failurereason_2'])
        {
          $row6_b['failurereason_2']="";
        }
        //////////////////////////

        if(!$row7['standard_1'])
        {
          $row7['standard_1']="";
        }
        if(!$row7_b['standard_1'])
        {
          $row7_b['standard_1']="";
        }
        if(!$row7['standard_2'])
        {
          $row7['standard_2']="";
        }
        if(!$row7_b['standard_2'])
        {
          $row7_b['standard_2']="";
        }

        if(!$row7['br_1'])
        {
          $row7['br_1']="";
        }
        if(!$row7_b['br_1'])
        {
          $row7_b['br_1']="";
        }
        if(!$row7['br_2'])
        {
          $row7['br_2']="";
        }
        if(!$row7_b['br_2'])
        {
          $row7_b['br_2']="";
        }

        if(!$row7['failure_1'])
        {
          $row7['failure_1']=0;
        }
        if(!$row7_b['failure_1'])
        {
          $row7_b['failure_1']=0;
        }
        if(!$row7['failure_2'])
        {
          $row7['failure_2']=0;
        }
        if(!$row7_b['$failure_2'])
        {
          $row7_b['failure_2']=0;
        }

        if(!$row7['failurereason_1'])
        {
          $row7['failurereason_1']="";
        }
        if(!$row7_b['failurereason_1'])
        {
          $row7_b['failurereason_1']="";
        }
        if(!$row7['failurereason_2'])
        {
          $row7['failurereason_2']="";
        }
        if(!$row7_b['failurereason_2'])
        {
          $row7_b['failurereason_2']="";
        }

        $stop1 = $row1_1['awhilestop_1']+$row1_1['awhilestop_2']; //  작업정지시간 두개던한거
        $stop2 = $row2_1['awhilestop_1']+$row2_1['awhilestop_2'];
        $stop3 = $row3_1['awhilestop_1']+$row3_1['awhilestop_2'];
        $stop4 = $row4_1['awhilestop_1']+$row4_1['awhilestop_2'];
        $stop5 = $row5_1['awhilestop_1']+$row5_1['awhilestop_2'];
        $stop6 = $row6_1['awhilestop_1']+$row6_1['awhilestop_2'];
        $stop7 = $row7_1['awhilestop_1']+$row7_1['awhilestop_2'];


        $stop1_b = $row1_1_b['awhilestop_1']+$row1_1_b['awhilestop_2']; //  작업정지시간 두개던한거
        $stop2_b = $row2_1_b['awhilestop_1']+$row2_1_b['awhilestop_2'];
        $stop3_b = $row3_1_b['awhilestop_1']+$row3_1_b['awhilestop_2'];
        $stop4_b = $row4_1_b['awhilestop_1']+$row4_1_b['awhilestop_2'];
        $stop5_b = $row5_1_b['awhilestop_1']+$row5_1_b['awhilestop_2'];
        $stop6_b = $row6_1_b['awhilestop_1']+$row6_1_b['awhilestop_2'];
        $stop7_b = $row7_1_b['awhilestop_1']+$row7_1_b['awhilestop_2'];


        $kg1= $row1['amount_1']*$row1['perweight_1'];
        $kg2= $row2['amount_1']*$row2['perweight_1'];
        $kg3= $row3['amount_1']*$row3['perweight_1'];
        $kg4= $row4['amount_1']*$row4['perweight_1'];
        $kg5= $row5['amount_1']*$row5['perweight_1'];
        $kg6= $row6['amount_1']*$row6['perweight_1'];
        $kg7= $row7['amount_1']*$row7['perweight_1'];

        $kg1_b= $row1_b['amount_1']*$row1_b['perweight_1'];
        $kg2_b= $row2_b['amount_1']*$row2_b['perweight_1'];
        $kg3_b= $row3_b['amount_1']*$row3_b['perweight_1'];
        $kg4_b= $row4_b['amount_1']*$row4_b['perweight_1'];
        $kg5_b= $row5_b['amount_1']*$row5_b['perweight_1'];
        $kg6_b= $row6_b['amount_1']*$row6_b['perweight_1'];
        $kg7_b= $row7_b['amount_1']*$row7_b['perweight_1'];
        //////
        $kg1_2= $row1['amount_2']*$row1['perweight_2'];
        $kg2_2= $row2['amount_2']*$row2['perweight_2'];
        $kg3_2= $row3['amount_2']*$row3['perweight_2'];
        $kg4_2= $row4['amount_2']*$row4['perweight_2'];
        $kg5_2= $row5['amount_2']*$row5['perweight_2'];
        $kg6_2= $row6['amount_2']*$row6['perweight_2'];
        $kg7_2= $row7['amount_2']*$row7['perweight_2'];

        $kg1_2_b= $row1_b['amount_2']*$row1_b['perweight_2'];
        $kg2_2_b= $row2_b['amount_2']*$row2_b['perweight_2'];
        $kg3_2_b= $row3_b['amount_2']*$row3_b['perweight_2'];
        $kg4_2_b= $row4_b['amount_2']*$row4_b['perweight_2'];
        $kg5_2_b= $row5_b['amount_2']*$row5_b['perweight_2'];
        $kg6_2_b= $row6_b['amount_2']*$row6_b['perweight_2'];
        $kg7_2_b= $row7_b['amount_2']*$row7_b['perweight_2'];
        ///////$kg1= $row1['amount_1']*$row1['perweight_1'];
        $kg1_3= $row1['amount_3']*$row1['perweight_3'];
        $kg2_3= $row2['amount_3']*$row2['perweight_3'];
        $kg3_3= $row3['amount_3']*$row3['perweight_3'];
        $kg4_3= $row4['amount_3']*$row4['perweight_3'];
        $kg5_3= $row5['amount_3']*$row5['perweight_3'];
        $kg6_3= $row6['amount_3']*$row6['perweight_3'];
        $kg7_3= $row7['amount_3']*$row7['perweight_3'];

        $kg1_3_b= $row1_b['amount_3']*$row1_b['perweight_3'];
        $kg2_3_b= $row2_b['amount_3']*$row2_b['perweight_3'];
        $kg3_3_b= $row3_b['amount_3']*$row3_b['perweight_3'];
        $kg4_3_b= $row4_b['amount_3']*$row4_b['perweight_3'];
        $kg5_3_b= $row5_b['amount_3']*$row5_b['perweight_3'];
        $kg6_3_b= $row6_b['amount_3']*$row6_b['perweight_3'];
        $kg7_3_b= $row7_b['amount_3']*$row7_b['perweight_3'];



        $timee11 = $row1_1['workinghours_1'];
        $timee12 = $row1_1['workinghours_2'];  // da에서 불러온시간형태의 작업정지시간
        $timee21 = $row2_1['workinghours_1'];
        $timee22 = $row2_1['workinghours_2'];
        $timee31 = $row3_1['workinghours_1'];
        $timee32 = $row3_1['workinghours_2'];
        $timee41 = $row4_1['workinghours_1'];
        $timee42 = $row4_1['workinghours_2'];
        $timee51 = $row5_1['workinghours_1'];
        $timee52 = $row5_1['workinghours_2'];
        $timee61 = $row6_1['workinghours_1'];
        $timee62 = $row6_1['workinghours_2'];
        $timee71 = $row7_1['workinghours_1'];
        $timee72 = $row7_1['workinghours_2'];


        $timee11_b = $row1_1_b['workinghours_1'];
        $timee12_b = $row1_1_b['workinghours_2'];  // da에서 불러온시간형태의 작업정지시간
        $timee21_b = $row2_1_b['workinghours_1'];
        $timee22_b = $row2_1_b['workinghours_2'];
        $timee31_b = $row3_1_b['workinghours_1'];
        $timee32_b = $row3_1_b['workinghours_2'];
        $timee41_b = $row4_1_b['workinghours_1'];
        $timee42_b = $row4_1_b['workinghours_2'];
        $timee51_b = $row5_1_b['workinghours_1'];
        $timee52_b = $row5_1_b['workinghours_2'];
        $timee61_b = $row6_1_b['workinghours_1'];
        $timee62_b = $row6_1_b['workinghours_2'];
        $timee71_b = $row7_1_b['workinghours_1'];
        $timee72_b = $row7_1_b['workinghours_2'];

        $hello11= strtotime($timee11);
        $hello12= strtotime($timee12); // 시간형태의 시간을 스트링으로
        $hello21= strtotime($timee21);
        $hello22= strtotime($timee22);
        $hello31= strtotime($timee31);
        $hello32= strtotime($timee32);
        $hello41= strtotime($timee41);
        $hello42= strtotime($timee42);
        $hello51= strtotime($timee51);
        $hello52= strtotime($timee52);
        $hello61= strtotime($timee61);
        $hello62= strtotime($timee62);
        $hello71= strtotime($timee71);
        $hello72= strtotime($timee72);

        $hello11_b= strtotime($timee11_b);
        $hello12_b= strtotime($timee12_b); // 시간형태의 시간을 스트링으로
        $hello21_b= strtotime($timee21_b);
        $hello22_b= strtotime($timee22_b);
        $hello31_b= strtotime($timee31_b);
        $hello32_b= strtotime($timee32_b);
        $hello41_b= strtotime($timee41_b);
        $hello42_b= strtotime($timee42_b);
        $hello51_b= strtotime($timee51_b);
        $hello52_b= strtotime($timee52_b);
        $hello61_b= strtotime($timee61_b);
        $hello62_b= strtotime($timee62_b);
        $hello71_b= strtotime($timee71_b);
        $hello72_b= strtotime($timee72_b);

        $worktime1 = $hello12-$hello11 ;
        $worktime2 = $hello22-$hello21 ;
        $worktime3 = $hello32-$hello31 ;
        $worktime4 = $hello42-$hello41 ;
        $worktime5 = $hello52-$hello51 ;
        $worktime6 = $hello62-$hello61 ;
        $worktime7 = $hello72-$hello71 ;
        $worktime_1 = $worktime1/60;
        $worktime_2 = $worktime2/60;
        $worktime_3 = $worktime3/60;
        $worktime_4 = $worktime4/60;
        $worktime_5 = $worktime5/60;
        $worktime_6 = $worktime6/60;
        $worktime_7 = $worktime7/60;
        $worktime1_b = $hello12_b-$hello11_b ;
        $worktime2_b = $hello22_b-$hello21_b ;
        $worktime3_b = $hello32_b-$hello31_b ;
        $worktime4_b = $hello42_b-$hello41_b ;
        $worktime5_b = $hello52_b-$hello51_b ;
        $worktime6_b = $hello62_b-$hello61_b ;
        $worktime7_b = $hello72_b-$hello71_b ;
        $worktime_1_b = $worktime1_b/60;
        $worktime_2_b = $worktime2_b/60;
        $worktime_3_b = $worktime3_b/60;
        $worktime_4_b = $worktime4_b/60;
        $worktime_5_b = $worktime5_b/60;
        $worktime_6_b = $worktime6_b/60;
        $worktime_7_b = $worktime7_b/60;





        if($worktime_1 <=0)
        {
          $worktime_1 = $worktime_1 + 720;
        }
        if($worktime_2 <=0)
        {
          $worktime_2 = $worktime_2 + 720;
        }
        if($worktime_3 <=0)
        {
          $worktime_3 = $worktime_3 + 720;
        }
        if($worktime_4 <=0)
        {
          $worktime_4 = $worktime_4 + 720;
        }
        if($worktime_5 <=0)
        {
          $worktime_5 = $worktime_5 + 720;
        }
        if($worktime_6 <=0)
        {
          $worktime_6 = $worktime_6 + 720;
        }
        if($worktime_7 <=0)
        {
          $worktime_7 = $worktime_7 + 720;
        }

        /////

        if($worktime_1_b <=0)
        {
          $worktime_1_b = $worktime_1_b + 720;
        }
        if($worktime_2_b <=0)
        {
          $worktime_2_b = $worktime_2_b + 720;
        }
        if($worktime_3_b <=0)
        {
          $worktime_3_b = $worktime_3_b + 720;
        }
        if($worktime_4_b <=0)
        {
          $worktime_4_b = $worktime_4_b + 720;
        }
        if($worktime_5_b <=0)
        {
          $worktime_5_b = $worktime_5_b + 720;
        }
        if($worktime_6_b <=0)
        {
          $worktime_6_b = $worktime_6_b + 720;
        }
        if($worktime_7_b <=0)
        {
          $worktime_7_b = $worktime_7_b + 720;
        }


        $worktime_1_1= $worktime_1-$stop1;
        $worktime_2_1= $worktime_2-$stop2;
        $worktime_3_1= $worktime_3-$stop3;
        $worktime_4_1= $worktime_4-$stop4;
        $worktime_5_1= $worktime_5-$stop5;
        $worktime_6_1= $worktime_6-$stop6;
        $worktime_7_1= $worktime_7-$stop7;


        $worktime_1_1_b= $worktime_1_b-$stop1_b;
        $worktime_2_1_b= $worktime_2_b-$stop2_b;
        $worktime_3_1_b= $worktime_3_b-$stop3_b;
        $worktime_4_1_b= $worktime_4_b-$stop4_b;
        $worktime_5_1_b= $worktime_5_b-$stop5_b;
        $worktime_6_1_b= $worktime_6_b-$stop6_b;
        $worktime_7_1_b= $worktime_7_b-$stop7_b;








    ?>



    document.getElementById('writer1_b').value= "<?= $row1_b['writer']?>";
    document.getElementById('writer2_b').value= "<?= $row2_b['writer']?>";
    document.getElementById('writer3_b').value= "<?= $row3_b['writer']?>";
    document.getElementById('writer4_b').value= "<?= $row3_b['writer']?>";
    document.getElementById('writer5_b').value= "<?= $row5_b['writer']?>";
    document.getElementById('writer6_b').value= "<?= $row6_b['writer']?>";
    document.getElementById('writer7_b').value= "<?= $row7_b['writer']?>";


    document.getElementById('standard_11').value= "<?= $row1_b['standard_1']?>";
    document.getElementById('amount_11').value= "<?= $row1_b['amount_1']?>";
    document.getElementById('perweight_11').value= "<?= $row1_b['perweight_1']?>";
    document.getElementById('weight_11').value= <?=$kg1_b?>;
    document.getElementById('worktime_11').value= <?= $worktime_1_1?>;
    document.getElementById('stoptime_11').value= <?= $stop1?>;
    document.getElementById('stopsign_11').value= "<?= $row1_b['br_1']?>";
    document.getElementById('badweight_11').value= "<?= $row1_b['failure_1']?>";
    document.getElementById('badsign_11').value= "<?= $row1_b['failurereason_1']?>";


    document.getElementById('standard_12').value= "<?= $row1_b['standard_2']?>";
    document.getElementById('amount_12').value= "<?= $row1_b['amount_2']?>";
    document.getElementById('perweight_12').value= "<?= $row1_b['perweight_2']?>";
    document.getElementById('weight_12').value= <?=$kg1_2_b?>;
    document.getElementById('worktime_12').value= <?= $worktime_1_1?>;
    document.getElementById('stoptime_12').value= <?= $stop1?>;
    document.getElementById('stopsign_12').value= "<?= $row1_b['br_2']?>";
    document.getElementById('badweight_12').value= "<?= $row1_b['failure_2']?>";
    document.getElementById('badsign_12').value= "<?= $row1_b['failurereason_2']?>";


    document.getElementById('standard_13').value= "<?= $row1_b['standard_3']?>";
    document.getElementById('amount_13').value= "<?= $row1_b['amount_3']?>";
    document.getElementById('perweight_13').value= "<?= $row1_b['perweight_3']?>";
    document.getElementById('weight_13').value= <?=$kg1_3_b?>;
    document.getElementById('worktime_13').value= <?= $worktime_1_1?>;
    document.getElementById('stoptime_13').value= <?= $stop1?>;
    document.getElementById('stopsign_13').value= "<?= $row1_b['br_3']?>";
    document.getElementById('badweight_13').value= "<?= $row1_b['failure_3']?>";
    document.getElementById('badsign_13').value= "<?= $row1_b['failurereason_3']?>";






    document.getElementById('standard_21').value= "<?= $row2_b['standard_1']?>";
    document.getElementById('amount_21').value= "<?= $row2_b['amount_1']?>";
    document.getElementById('perweight_21').value= "<?= $row2_b['perweight_1']?>";
    document.getElementById('weight_21').value= <?=$kg2_b?>;
    document.getElementById('worktime_21').value= <?= $worktime_2_1?>;
    document.getElementById('stoptime_21').value= <?= $stop2?>;
    document.getElementById('stopsign_21').value= "<?= $row2_b['br_1']?>";
    document.getElementById('badweight_21').value= "<?= $row2_b['failure_1']?>";
    document.getElementById('badsign_21').value= "<?= $row2_b['failurereason_1']?>";


    document.getElementById('standard_22').value= "<?= $row2_b['standard_2']?>";
    document.getElementById('amount_22').value= "<?= $row2_b['amount_2']?>";
    document.getElementById('perweight_22').value= "<?= $row2_b['perweight_2']?>";
    document.getElementById('weight_22').value= <?=$kg2_2_b?>;
    document.getElementById('worktime_22').value= <?= $worktime_2_1?>;
    document.getElementById('stoptime_22').value= <?= $stop2?>;
    document.getElementById('stopsign_22').value= "<?= $row2_b['br_2']?>";
    document.getElementById('badweight_22').value= "<?= $row2_b['failure_2']?>";
    document.getElementById('badsign_22').value= "<?= $row2_b['failurereason_2']?>";






    document.getElementById('standard_31').value= "<?= $row3_b['standard_1']?>";
    document.getElementById('amount_31').value= "<?= $row3_b['amount_1']?>";
    document.getElementById('perweight_31').value= "<?= $row3_b['perweight_1']?>";
    document.getElementById('weight_31').value= <?=$kg3_b?>;
    document.getElementById('worktime_31').value= <?= $worktime_3_1?>;
    document.getElementById('stoptime_31').value= <?= $stop3?>;
    document.getElementById('stopsign_31').value= "<?= $row3_b['br_1']?>";
    document.getElementById('badweight_31').value= "<?= $row3_b['failure_1']?>";
    document.getElementById('badsign_31').value= "<?= $row3_b['failurereason_1']?>";


    document.getElementById('standard_32').value= "<?= $row3_b['standard_2']?>";
    document.getElementById('amount_32').value= "<?= $row3_b['amount_2']?>";
    document.getElementById('perweight_32').value= "<?= $row3_b['perweight_2']?>";
    document.getElementById('weight_32').value= <?=$kg3_2_b?>;
    document.getElementById('worktime_32').value= <?= $worktime_3_1?>;
    document.getElementById('stoptime_32').value= <?= $stop3?>;
    document.getElementById('stopsign_32').value= "<?= $row3_b['br_2']?>";
    document.getElementById('badweight_32').value= "<?= $row3_b['failure_2']?>";
    document.getElementById('badsign_32').value= "<?= $row3_b['failurereason_2']?>";






    document.getElementById('standard_41').value= "<?= $row4_b['standard_1']?>";
    document.getElementById('amount_41').value= "<?= $row4_b['amount_1']?>";
    document.getElementById('perweight_41').value= "<?= $row4_b['perweight_1']?>";
    document.getElementById('weight_41').value= <?=$kg4_b?>;
    document.getElementById('worktime_41').value= <?= $worktime_4_1?>;
    document.getElementById('stoptime_41').value= <?= $stop4?>;
    document.getElementById('stopsign_41').value= "<?= $row4_b['br_1']?>";
    document.getElementById('badweight_41').value= "<?= $row4_b['failure_1']?>";
    document.getElementById('badsign_41').value= "<?= $row4_b['failurereason_1']?>";


    document.getElementById('standard_42').value= "<?= $row4_b['standard_2']?>";
    document.getElementById('amount_42').value= "<?= $row4_b['amount_2']?>";
    document.getElementById('perweight_42').value= "<?= $row4_b['perweight_2']?>";
    document.getElementById('weight_42').value= <?=$kg4_2_b?>;
    document.getElementById('worktime_42').value= <?= $worktime_4_1?>;
    document.getElementById('stoptime_42').value= <?= $stop4?>;
    document.getElementById('stopsign_42').value= "<?= $row4_b['br_2']?>";
    document.getElementById('badweight_42').value= "<?= $row4_b['failure_2']?>";
    document.getElementById('badsign_42').value= "<?= $row4_b['failurereason_2']?>";







    document.getElementById('standard_51').value= "<?= $row5_b['standard_1']?>";
    document.getElementById('amount_51').value= "<?= $row5_b['amount_1']?>";
    document.getElementById('perweight_51').value= "<?= $row5_b['perweight_1']?>";
    document.getElementById('weight_51').value= <?=$kg5_b?>;
    document.getElementById('worktime_51').value= <?= $worktime_5_1?>;
    document.getElementById('stoptime_51').value= <?= $stop5?>;
    document.getElementById('stopsign_51').value= "<?= $row5_b['br_1']?>";
    document.getElementById('badweight_51').value= "<?= $row5_b['failure_1']?>";
    document.getElementById('badsign_51').value= "<?= $row5_b['failurereason_1']?>";


    document.getElementById('standard_52').value= "<?= $row5_b['standard_2']?>";
    document.getElementById('amount_52').value= "<?= $row5_b['amount_2']?>";
    document.getElementById('perweight_52').value= "<?= $row5_b['perweight_2']?>";
    document.getElementById('weight_52').value= <?=$kg5_2_b?>;
    document.getElementById('worktime_52').value= <?= $worktime_5_1?>;
    document.getElementById('stoptime_52').value= <?= $stop5?>;
    document.getElementById('stopsign_52').value= "<?= $row5_b['br_2']?>";
    document.getElementById('badweight_52').value= "<?= $row5_b['failure_2']?>";
    document.getElementById('badsign_52').value= "<?= $row5_b['failurereason_2']?>";


    document.getElementById('standard_53').value= "<?= $row5_b['standard_3']?>";
    document.getElementById('amount_53').value= "<?= $row5_b['amount_3']?>";
    document.getElementById('perweight_53').value= "<?= $row5_b['perweight_3']?>";
    document.getElementById('weight_53').value= <?=$kg5_3_b?>;
    document.getElementById('worktime_53').value= <?= $worktime_5_1?>;
    document.getElementById('stoptime_53').value= <?= $stop5?>;
    document.getElementById('stopsign_53').value= "<?= $row5_b['br_3']?>";
    document.getElementById('badweight_53').value= "<?= $row5_b['failure_3']?>";
    document.getElementById('badsign_53').value= "<?= $row5_b['failurereason_3']?>";




    document.getElementById('standard_61').value= "<?= $row6_b['standard_1']?>";
    document.getElementById('amount_61').value= "<?= $row6_b['amount_1']?>";
    document.getElementById('perweight_61').value= "<?= $row6_b['perweight_1']?>";
    document.getElementById('weight_61').value= <?=$kg6_b?>;
    document.getElementById('worktime_61').value= <?= $worktime_6_1?>;
    document.getElementById('stoptime_61').value= <?= $stop6?>;
    document.getElementById('stopsign_61').value= "<?= $row6_b['br_1']?>";
    document.getElementById('badweight_61').value= "<?= $row6_b['failure_1']?>";
    document.getElementById('badsign_61').value= "<?= $row6_b['failurereason_1']?>";


    document.getElementById('standard_62').value= "<?= $row6_b['standard_2']?>";
    document.getElementById('amount_62').value= "<?= $row6_b['amount_2']?>";
    document.getElementById('perweight_62').value= "<?= $row6_b['perweight_2']?>";
    document.getElementById('weight_62').value= <?=$kg6_2_b?>;
    document.getElementById('worktime_62').value= <?= $worktime_6_1?>;
    document.getElementById('stoptime_62').value= <?= $stop6?>;
    document.getElementById('stopsign_62').value= "<?= $row6_b['br_2']?>";
    document.getElementById('badweight_62').value= "<?= $row6_b['failure_2']?>";
    document.getElementById('badsign_62').value= "<?= $row6_b['failurereason_2']?>";


    document.getElementById('standard_71').value= "<?= $row7_b['standard_1']?>";
    document.getElementById('amount_71').value= "<?= $row7_b['amount_1']?>";
    document.getElementById('perweight_71').value= "<?= $row7_b['perweight_1']?>";
    document.getElementById('weight_71').value= <?=$kg7_b?>;
    document.getElementById('worktime_71').value= <?= $worktime_7_1?>;
    document.getElementById('stoptime_71').value= <?= $stop7?>;
    document.getElementById('stopsign_71').value= "<?= $row7_b['br_1']?>";
    document.getElementById('badweight_71').value= "<?= $row7_b['failure_1']?>";
    document.getElementById('badsign_71').value= "<?= $row7_b['failurereason_1']?>";


    document.getElementById('standard_72').value= "<?= $row7_b['standard_2']?>";
    document.getElementById('amount_72').value= "<?= $row7_b['amount_2']?>";
    document.getElementById('perweight_72').value= "<?= $row7_b['perweight_2']?>";
    document.getElementById('weight_72').value= <?=$kg7_2_b?>;
    document.getElementById('worktime_72').value= <?= $worktime_7_1?>;
    document.getElementById('stoptime_72').value= <?= $stop7?>;
    document.getElementById('stopsign_72').value= "<?= $row7_b['br_2']?>";
    document.getElementById('badweight_72').value= "<?= $row7_b['failure_2']?>";
    document.getElementById('badsign_72').value= "<?= $row7_b['failurereason_2']?>";


    });



  function input_Text()
  {
    //var c1_c="1234";
    //document.c1_1.value=c1_c;
    var value = $('#date1').val();
    //document.write(value);
    window.location.href = './process1_count_b.php?date=' + value;

  }
  </script>

  <script type="text/javascript">
    function revisedb(){


      document.getElementById('writer1_b').disabled = false;
      document.getElementById('writer2_b').disabled = false;
      document.getElementById('writer3_b').disabled = false;
      document.getElementById('writer4_b').disabled = false;
      document.getElementById('writer5_b').disabled = false;
      document.getElementById('writer6_b').disabled = false;
      document.getElementById('writer7_b').disabled = false;

      document.getElementById('standard_11').disabled = false;
      document.getElementById('amount_11').disabled = false;
      document.getElementById('perweight_11').disabled = false;
      document.getElementById('stopsign_11').disabled = false;
      document.getElementById('badweight_11').disabled = false;
      document.getElementById('badsign_11').disabled = false;


      document.getElementById('standard_12').disabled = false;
      document.getElementById('amount_12').disabled = false;
      document.getElementById('perweight_12').disabled = false;
      document.getElementById('stopsign_12').disabled = false;
      document.getElementById('badweight_12').disabled = false;
      document.getElementById('badsign_12').disabled = false;


      document.getElementById('standard_13').disabled = false;
      document.getElementById('amount_13').disabled = false;
      document.getElementById('perweight_13').disabled = false;
      document.getElementById('stopsign_13').disabled = false;
      document.getElementById('badweight_13').disabled = false;
      document.getElementById('badsign_13').disabled = false;


      document.getElementById('standard_21').disabled = false;
      document.getElementById('amount_21').disabled = false;
      document.getElementById('perweight_21').disabled = false;



      document.getElementById('stopsign_21').disabled = false;
      document.getElementById('badweight_21').disabled = false;
      document.getElementById('badsign_21').disabled = false;


      document.getElementById('standard_22').disabled = false;
      document.getElementById('amount_22').disabled = false;
      document.getElementById('perweight_22').disabled = false;



      document.getElementById('stopsign_22').disabled = false;
      document.getElementById('badweight_22').disabled = false;
      document.getElementById('badsign_22').disabled = false;


      document.getElementById('standard_31').disabled = false;
      document.getElementById('amount_31').disabled = false;
      document.getElementById('perweight_31').disabled = false;

      document.getElementById('stopsign_31').disabled = false;
      document.getElementById('badweight_31').disabled = false;
      document.getElementById('badsign_31').disabled = false;


      document.getElementById('standard_32').disabled = false;
      document.getElementById('amount_32').disabled = false;
      document.getElementById('perweight_32').disabled = false;

      document.getElementById('stopsign_32').disabled = false;
      document.getElementById('badweight_32').disabled = false;
      document.getElementById('badsign_32').disabled = false;


      document.getElementById('standard_41').disabled = false;
      document.getElementById('amount_41').disabled = false;
      document.getElementById('perweight_41').disabled = false;

      document.getElementById('stopsign_41').disabled = false;
      document.getElementById('badweight_41').disabled = false;
      document.getElementById('badsign_41').disabled = false;


      document.getElementById('standard_42').disabled = false;
      document.getElementById('amount_42').disabled = false;
      document.getElementById('perweight_42').disabled = false;

      document.getElementById('stopsign_42').disabled = false;
      document.getElementById('badweight_42').disabled = false;
      document.getElementById('badsign_42').disabled = false;


      document.getElementById('standard_51').disabled = false;
      document.getElementById('amount_51').disabled = false;
      document.getElementById('perweight_51').disabled = false;

      document.getElementById('stopsign_51').disabled = false;
      document.getElementById('badweight_51').disabled = false;
      document.getElementById('badsign_51').disabled = false;


      document.getElementById('standard_52').disabled = false;
      document.getElementById('amount_52').disabled = false;
      document.getElementById('perweight_52').disabled = false;

      document.getElementById('stopsign_52').disabled = false;
      document.getElementById('badweight_52').disabled = false;
      document.getElementById('badsign_52').disabled = false;


      document.getElementById('standard_53').disabled = false;
      document.getElementById('amount_53').disabled = false;
      document.getElementById('perweight_53').disabled = false;

      document.getElementById('stopsign_53').disabled = false;
      document.getElementById('badweight_53').disabled = false;
      document.getElementById('badsign_53').disabled = false;


      document.getElementById('standard_61').disabled = false;
      document.getElementById('amount_61').disabled = false;
      document.getElementById('perweight_61').disabled = false;

      document.getElementById('stopsign_61').disabled = false;
      document.getElementById('badweight_61').disabled = false;
      document.getElementById('badsign_61').disabled = false;


      document.getElementById('standard_62').disabled = false;
      document.getElementById('amount_62').disabled = false;
      document.getElementById('perweight_62').disabled = false;

      document.getElementById('stopsign_62').disabled = false;
      document.getElementById('badweight_62').disabled = false;
      document.getElementById('badsign_62').disabled = false;


      document.getElementById('standard_71').disabled = false;
      document.getElementById('amount_71').disabled = false;
      document.getElementById('perweight_71').disabled = false;

      document.getElementById('stopsign_71').disabled = false;
      document.getElementById('badweight_71').disabled = false;
      document.getElementById('badsign_71').disabled = false;


      document.getElementById('standard_72').disabled = false;
      document.getElementById('amount_72').disabled = false;
      document.getElementById('perweight_72').disabled = false;

      document.getElementById('stopsign_72').disabled = false;
      document.getElementById('badweight_72').disabled = false;
      document.getElementById('badsign_72').disabled = false;


    }

  </script>

  <title>nuvotec dashboard</title>

  <?php include 'session_admin.php';?>

  <style>
  .table-under{ font-size: 1px; }
  .table-under-import{font-size : 15px;}
  .table-under-small{width: 50px;}
  .table-bordered{text-align: center; vertical-align: middle;}
  </style>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.0.min.js" ></script>
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
            <a href="process2.php">제 2 호기</a>
          </li>
          <li class="breadcrumb-item active">수량</li>
        </ol>

        <ol class="bread">
          <a class="btn btn-outline-secondary" href="process2_mix.php">배합</a>
          <a class="btn btn-outline-secondary" href="process2_press.php">압출</a>
          <a class="btn btn-outline-secondary" href="process2_cut.php">검사</a>
          <a class="btn btn-outline-secondary" href="process2_count.php">수량</a>
          <a class="btn btn-outline-secondary" href="process2_other.php">기타</a>
        </ol>

        <ol class="bread">
          <a class="btn btn-outline-danger" href="process2_count_n.php">주간</a>
          <a class="btn btn-outline-primary" href="process2_count_b.php">야간</a>


        </ol>

        <ol class="bread">
          <a class="btn btn-dark float-right" onclick="revisedb()" href="#">수정</a>
          <button class="btn btn-dark float-right" id='db_search' onclick="input_Text()" name='dbsearch'>검색</button>
        </ol>
        <br /><br />

        <!-- Page Content -->


        <form method='post' action='revise_process1_count_b.php'>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th colspan="4">검사일자</th>
                  <td colspan="10"><input type="date" name="date1" id='date1' class="form-control" placeholder="검사일자" value="<?=$dt?>" /></td>
                </tr>

                  <th colspan="14">야간근무자</th>
                </tr>
                <tr>
                  <th>1</th>
                  <td><input type="text" name="writer1_b" id="writer1_b" class="form-control" disabled='disabled' placeholder="작성자" /></td>
                  <th>2</th>
                  <td><input type="text" name="writer2_b" id="writer2_b" class="form-control" disabled='disabled' placeholder="작성자" /></td>
                  <th>3</th>
                  <td><input type="text" name="writer3_b" id="writer3_b" class="form-control" disabled='disabled' placeholder="작성자" /></td>
                  <th>4</th>
                  <td><input type="text" name="writer4_b" id="writer4_b" class="form-control" disabled='disabled' placeholder="작성자" /></td>
                  <th>5</th>
                  <td><input type="text" name="writer5_b" id="writer5_b" class="form-control" disabled='disabled' placeholder="작성자" /></td>
                  <th>6</th>
                  <td><input type="text" name="writer6_b" id="writer6_b" class="form-control" disabled='disabled' placeholder="작성자" /></td>
                  <th>7</th>
                  <td><input type="text" name="writer7_b" id="writer7_b" class="form-control" disabled='disabled' placeholder="작성자" /></td>
                </tr>
              </thead>
            </table>
          </div>

        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th colspan="2" rowspan="2">구분</th>
                <th rowspan="2" colspan="2">품명 및 규격</th>
                <th colspan="3">생산량</th>
                <th rowspan="2">작업시간(분)</th>
                <th colspan="2">작업정지</th>
                <th colspan="2">불량</th>

              </tr>
              <tr>
                <th>본</th>
                <th>본당 중량</th>
                <th>중량</th>
                <th>시간(분)</th>
                <th>기호</th>
                <th>중량</th>
                <th>기호</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th rowspan="16">공장(PVC)</th>
                <th rowspan="3" class="table-under-small">1-1</th>
                <td colspan="2"><input type="text" name='standard_11' id='standard_11' class="form-control" disabled='disabled' placeholder="품명 및 규격" /></td>
                <td><input type="number" name='amount_11' id='amount_11' class="form-control" disabled='disabled' placeholder="본" /></td>
                <td><input type="number" name='perweight_11' id='perweight_11' class="form-control" disabled='disabled' placeholder="본당 중량" /></td>
                <td><input type="number" name='weight_11' id='weight_11' class="form-control" disabled='disabled' placeholder="중량(kg)" /></td>
                <td><input type="text" name='worktime_11' id='worktime_11' class="form-control" disabled='disabled' placeholder="작업 시간(분)" /></td>
                <td><input type="number" name='stoptime_11' id='stoptime_11' class="form-control" disabled='disabled' placeholder="시간(분)" /></td>
                <td><input type="text" name='stopsign_11' id='stopsign_11' class="form-control" disabled='disabled' placeholder="기호" /></td>
                <td><input type="number" name='badweight_11' id='badweight_11' class="form-control" disabled='disabled' placeholder="중량" /></td>
                <td><input type="text" name='badsign_11' id='badsign_11' class="form-control" disabled='disabled' placeholder="기호" /></td>

              </tr>
              <tr>
                <td colspan="2"><input type="text" name='standard_12' id='standard_12' class="form-control" disabled='disabled' placeholder="품명 및 규격" /></td>
                <td><input type="number" name='amount_12' id='amount_12' class="form-control" disabled='disabled' placeholder="본" /></td>
                <td><input type="number" name='perweight_12' id='perweight_12' class="form-control" disabled='disabled' placeholder="본당 중량" /></td>
                <td><input type="number" name='weight_12' id='weight_12' class="form-control" disabled='disabled' placeholder="중량(kg)" /></td>
                <td><input type="number" name='worktime_12' id='worktime_12' class="form-control" disabled='disabled' placeholder="작업 시간(분)" /></td>
                <td><input type="number" name='stoptime_12' id='stoptime_12' class="form-control" disabled='disabled' placeholder="시간(분)" /></td>
                <td><input type="text" name='stopsign_12' id='stopsign_12' class="form-control" disabled='disabled' placeholder="기호" /></td>
                <td><input type="number" name='badweight_12' id='badweight_12' class="form-control" disabled='disabled' placeholder="중량" /></td>
                <td><input type="text" name='badsign_12' id='badsign_12' class="form-control" disabled='disabled' placeholder="기호" /></td>

              </tr>
              <tr>
                <td colspan="2"><input type="text" name='standard_13' id='standard_13' class="form-control" disabled='disabled' placeholder="품명 및 규격" /></td>
                <td><input type="number" name='amount_13' id='amount_13' class="form-control" disabled='disabled' placeholder="본" /></td>
                <td><input type="number" name='perweight_13' id='perweight_13' class="form-control" disabled='disabled' placeholder="본당 중량" /></td>
                <td><input type="number" name='weight_13' id='weight_13' class="form-control" disabled='disabled' placeholder="중량(kg)" /></td>
                <td><input type="number" name='worktime_13' id='worktime_13' class="form-control" disabled='disabled' placeholder="작업 시간(분)" /></td>
                <td><input type="number" name='stoptime_13' id='stoptime_13' class="form-control" disabled='disabled' placeholder="시간(분)" /></td>
                <td><input type="text" name='stopsign_13' id='stopsign_13' class="form-control" disabled='disabled' placeholder="기호" /></td>
                <td><input type="number" name='badweight_13' id='badweight_13' class="form-control" disabled='disabled' placeholder="중량" /></td>
                <td><input type="text" name='badsign_13' id='badsign_13' class="form-control" disabled='disabled' placeholder="기호" /></td>

              </tr>
              <tr>
                <th rowspan="2" class="table-under-small">1-2</th>
                <td colspan="2"><input type="text" name='standard_21' id='standard_21' class="form-control" disabled='disabled' placeholder="품명 및 규격" /></td>
                <td><input type="number" name='amount_21' id='amount_21' class="form-control" disabled='disabled' placeholder="본" /></td>
                <td><input type="number" name='perweight_21' id='perweight_21' class="form-control" disabled='disabled' placeholder="본당 중량" /></td>
                <td><input type="number" name='weight_21' id='weight_21' class="form-control" disabled='disabled' placeholder="중량(kg)" /></td>
                <td><input type="number" name='worktime_21' id='worktime_21' class="form-control" disabled='disabled' placeholder="작업 시간(분)" /></td>
                <td><input type="number" name='stoptime_21' id='stoptime_21' class="form-control" disabled='disabled' placeholder="시간(분)" /></td>
                <td><input type="text" name='stopsign_21' id='stopsign_21' class="form-control" disabled='disabled' placeholder="기호" /></td>
                <td><input type="number" name='badweight_21' id='badweight_21' class="form-control" disabled='disabled' placeholder="중량" /></td>
                <td><input type="text" name='badsign_21' id='badsign_21' class="form-control" disabled='disabled' placeholder="기호" /></td>

              </tr>
              <tr>
                <td colspan="2"><input type="text" name='standard_22' id='standard_22' class="form-control" disabled='disabled' placeholder="품명 및 규격" /></td>
                <td><input type="number" name='amount_22' id='amount_22' class="form-control" disabled='disabled' placeholder="본" /></td>
                <td><input type="number" name='perweight_22' id='perweight_22' class="form-control" disabled='disabled' placeholder="본당 중량" /></td>
                <td><input type="number" name='weight_22' id='weight_22' class="form-control" disabled='disabled' placeholder="중량(kg)" /></td>
                <td><input type="number" name='worktime_22' id='worktime_22' class="form-control" disabled='disabled' placeholder="작업 시간(분)" /></td>
                <td><input type="number" name='stoptime_22' id='stoptime_22' class="form-control" disabled='disabled' placeholder="시간(분)" /></td>
                <td><input type="text" name='stopsign_22' id='stopsign_22' class="form-control" disabled='disabled' placeholder="기호" /></td>
                <td><input type="number" name='badweight_22' id='badweight_22' class="form-control" disabled='disabled' placeholder="중량" /></td>
                <td><input type="text" name='badsign_22' id='badsign_22' class="form-control" disabled='disabled' placeholder="기호" /></td>

              </tr>
              <tr>
                <th rowspan="2" class="table-under-small">1-3</th>
                <td colspan="2"><input type="text" name='standard_31' id='standard_31' class="form-control" disabled='disabled' placeholder="품명 및 규격" /></td>
                <td><input type="number" name='amount_31' id='amount_31' class="form-control" disabled='disabled' placeholder="본" /></td>
                <td><input type="number" name='perweight_31' id='perweight_31' class="form-control" disabled='disabled' placeholder="본당 중량" /></td>
                <td><input type="number" name='weight_31' id='weight_31' class="form-control" disabled='disabled' placeholder="중량(kg)" /></td>
                <td><input type="number" name='worktime_31' id='worktime_31' class="form-control" disabled='disabled' placeholder="작업 시간(분)" /></td>
                <td><input type="number" name='stoptime_31' id='stoptime_31' class="form-control" disabled='disabled' placeholder="시간(분)" /></td>
                <td><input type="text" name='stopsign_31' id='stopsign_31' class="form-control" disabled='disabled' placeholder="기호" /></td>
                <td><input type="number" name='badweight_31' id='badweight_31' class="form-control" disabled='disabled' placeholder="중량" /></td>
                <td><input type="text" name='badsign_31' id='badsign_31' class="form-control" disabled='disabled' placeholder="기호" /></td>

              </tr>
              <tr>
                <td colspan="2"><input type="text" name='standard_32' id='standard_32' class="form-control" disabled='disabled' placeholder="품명 및 규격" /></td>
                <td><input type="number" name='amount_32' id='amount_32' class="form-control" disabled='disabled' placeholder="본" /></td>
                <td><input type="number" name='perweight_32' id='perweight_32' class="form-control" disabled='disabled' placeholder="본당 중량" /></td>
                <td><input type="number" name='weight_32' id='weight_32' class="form-control" disabled='disabled' placeholder="중량(kg)" /></td>
                <td><input type="number" name='worktime_32' id='worktime_32' class="form-control" disabled='disabled' placeholder="작업 시간(분)" /></td>
                <td><input type="number" name='stoptime_32' id='stoptime_32' class="form-control" disabled='disabled' placeholder="시간(분)" /></td>
                <td><input type="text" name='stopsign_32' id='stopsign_32' class="form-control" disabled='disabled' placeholder="기호" /></td>
                <td><input type="number" name='badweight_32' id='badweight_32' class="form-control" disabled='disabled' placeholder="중량" /></td>
                <td><input type="text" name='badsign_32' id='badsign_32' class="form-control" disabled='disabled' placeholder="기호" /></td>

              </tr>
              <tr>
                <th rowspan="2" class="table-under-small">1-4</th>
                <td colspan="2"><input type="text" name='standard_41' id='standard_41' class="form-control" disabled='disabled' placeholder="품명 및 규격" /></td>
                <td><input type="number" name='amount_41' id='amount_41' class="form-control" disabled='disabled' placeholder="본" /></td>
                <td><input type="number" name='perweight_41' id='perweight_41' class="form-control" disabled='disabled' placeholder="본당 중량" /></td>
                <td><input type="number" name='weight_41' id='weight_41' class="form-control" disabled='disabled' placeholder="중량(kg)" /></td>
                <td><input type="number" name='worktime_41' id='worktime_41' class="form-control" disabled='disabled' placeholder="작업 시간(분)" /></td>
                <td><input type="number" name='stoptime_41' id='stoptime_41' class="form-control" disabled='disabled' placeholder="시간(분)" /></td>
                <td><input type="text" name='stopsign_41' id='stopsign_41' class="form-control" disabled='disabled' placeholder="기호" /></td>
                <td><input type="number" name='badweight_41' id='badweight_41' class="form-control" disabled='disabled' placeholder="중량" /></td>
                <td><input type="text" name='badsign_41' id='badsign_41' class="form-control" disabled='disabled' placeholder="기호" /></td>

              </tr>
              <tr>
                <td colspan="2"><input type="text" name='standard_42' id='standard_42' class="form-control" disabled='disabled' placeholder="품명 및 규격" /></td>
                <td><input type="number" name='amount_42' id='amount_42' class="form-control" disabled='disabled' placeholder="본" /></td>
                <td><input type="number" name='perweight_42' id='perweight_42' class="form-control" disabled='disabled' placeholder="본당 중량" /></td>
                <td><input type="number" name='weight_42' id='weight_42' class="form-control" disabled='disabled' placeholder="중량(kg)" /></td>
                <td><input type="number" name='worktime_42' id='worktime_42' class="form-control" disabled='disabled' placeholder="작업 시간(분)" /></td>
                <td><input type="number" name='stoptime_42' id='stoptime_42' class="form-control" disabled='disabled' placeholder="시간(분)" /></td>
                <td><input type="text" name='stopsign_42' id='stopsign_42' class="form-control" disabled='disabled' placeholder="기호" /></td>
                <td><input type="number" name='badweight_42' id='badweight_42' class="form-control" disabled='disabled' placeholder="중량" /></td>
                <td><input type="text" name='badsign_42' id='badsign_42' class="form-control" disabled='disabled' placeholder="기호" /></td>

              </tr>
              <tr>
                <th rowspan="3" class="table-under-small">1-5</th>
                <td colspan="2"><input type="text" name='standard_51' id='standard_51' class="form-control" disabled='disabled' placeholder="품명 및 규격" /></td>
                <td><input type="number" name='amount_51' id='amount_51' class="form-control" disabled='disabled' placeholder="본" /></td>
                <td><input type="number" name='perweight_51' id='perweight_51' class="form-control" disabled='disabled' placeholder="본당 중량" /></td>
                <td><input type="number" name='weight_51' id='weight_51' class="form-control" disabled='disabled' placeholder="중량(kg)" /></td>
                <td><input type="number" name='worktime_51' id='worktime_51' class="form-control" disabled='disabled' placeholder="작업 시간(분)" /></td>
                <td><input type="number" name='stoptime_51' id='stoptime_51' class="form-control" disabled='disabled' placeholder="시간(분)" /></td>
                <td><input type="text" name='stopsign_51' id='stopsign_51' class="form-control" disabled='disabled' placeholder="기호" /></td>
                <td><input type="number" name='badweight_51' id='badweight_51' class="form-control" disabled='disabled' placeholder="중량" /></td>
                <td><input type="text" name='badsign_51' id='badsign_51' class="form-control" disabled='disabled' placeholder="기호" /></td>

              </tr>
              <tr>
                <td colspan="2"><input type="text" name='standard_52' id='standard_52' class="form-control" disabled='disabled' placeholder="품명 및 규격" /></td>
                <td><input type="number" name='amount_52' id='amount_52' class="form-control" disabled='disabled' placeholder="본" /></td>
                <td><input type="number" name='perweight_52' id='perweight_52' class="form-control" disabled='disabled' placeholder="본당 중량" /></td>
                <td><input type="number" name='weight_52' id='weight_52' class="form-control" disabled='disabled' placeholder="중량(kg)" /></td>
                <td><input type="number" name='worktime_52' id='worktime_52' class="form-control" disabled='disabled' placeholder="작업 시간(분)" /></td>
                <td><input type="number" name='stoptime_52' id='stoptime_52' class="form-control" disabled='disabled' placeholder="시간(분)" /></td>
                <td><input type="text" name='stopsign_52' id='stopsign_52' class="form-control" disabled='disabled' placeholder="기호" /></td>
                <td><input type="number" name='badweight_52' id='badweight_52' class="form-control" disabled='disabled' placeholder="중량" /></td>
                <td><input type="text" name='badsign_52' id='badsign_52' class="form-control" disabled='disabled' placeholder="기호" /></td>

              </tr>
              <tr>
                <td colspan="2"><input type="text" name='standard_53' id='standard_53' class="form-control" disabled='disabled' placeholder="품명 및 규격" /></td>
                <td><input type="number" name='amount_53' id='amount_53' class="form-control" disabled='disabled' placeholder="본" /></td>
                <td><input type="number" name='perweight_53' id='perweight_53' class="form-control" disabled='disabled' placeholder="본당 중량" /></td>
                <td><input type="number" name='weight_53' id='weight_53' class="form-control" disabled='disabled' placeholder="중량(kg)" /></td>
                <td><input type="number" name='worktime_53' id='worktime_53' class="form-control" disabled='disabled' placeholder="작업 시간(분)" /></td>
                <td><input type="number" name='stoptime_53' id='stoptime_53' class="form-control" disabled='disabled' placeholder="시간(분)" /></td>
                <td><input type="text" name='stopsign_53' id='stopsign_53' class="form-control" disabled='disabled' placeholder="기호" /></td>
                <td><input type="number" name='badweight_53' id='badweight_53' class="form-control" disabled='disabled' placeholder="중량" /></td>
                <td><input type="text" name='badsign_53' id='badsign_53' class="form-control" disabled='disabled' placeholder="기호" /></td>

              </tr>
              <tr>
                <th rowspan="2" class="table-under-small">1-6</th>
                <td colspan="2"><input type="text" name='standard_61' id='standard_61' class="form-control" disabled='disabled' placeholder="품명 및 규격" /></td>
                <td><input type="number" name='amount_61' id='amount_61' class="form-control" disabled='disabled' placeholder="본" /></td>
                <td><input type="number" name='perweight_61' id='perweight_61' class="form-control" disabled='disabled' placeholder="본당 중량" /></td>
                <td><input type="number" name='weight_61' id='weight_61' class="form-control" disabled='disabled' placeholder="중량(kg)" /></td>
                <td><input type="number" name='worktime_61' id='worktime_61' class="form-control" disabled='disabled' placeholder="작업 시간(분)" /></td>
                <td><input type="number" name='stoptime_61' id='stoptime_61' class="form-control" disabled='disabled' placeholder="시간(분)" /></td>
                <td><input type="text" name='stopsign_61' id='stopsign_61' class="form-control" disabled='disabled' placeholder="기호" /></td>
                <td><input type="number" name='badweight_61' id='badweight_61' class="form-control" disabled='disabled' placeholder="중량" /></td>
                <td><input type="text" name='badsign_61' id='badsign_61' class="form-control" disabled='disabled' placeholder="기호" /></td>

              </tr>
              <tr>
                <td colspan="2"><input type="text" name='standard_62' id='standard_62' class="form-control" disabled='disabled' placeholder="품명 및 규격" /></td>
                <td><input type="number" name='amount_62' id='amount_62' class="form-control" disabled='disabled' placeholder="본" /></td>
                <td><input type="number" name='perweight_62' id='perweight_62' class="form-control" disabled='disabled' placeholder="본당 중량" /></td>
                <td><input type="number" name='weight_62' id='weight_62' class="form-control" disabled='disabled' placeholder="중량(kg)" /></td>
                <td><input type="number" name='worktime_62' id='worktime_62' class="form-control" disabled='disabled' placeholder="작업 시간(분)" /></td>
                <td><input type="number" name='stoptime_62' id='stoptime_62' class="form-control" disabled='disabled' placeholder="시간(분)" /></td>
                <td><input type="text" name='stopsign_62' id='stopsign_62' class="form-control" disabled='disabled' placeholder="기호" /></td>
                <td><input type="number" name='badweight_62' id='badweight_62' class="form-control" disabled='disabled' placeholder="중량" /></td>
                <td><input type="text" name='badsign_62' id='badsign_62' class="form-control" disabled='disabled' placeholder="기호" /></td>

              </tr>
              <tr>
                <th rowspan="2" class="table-under-small">1-7</th>
                <td colspan="2"><input type="text" name='standard_71' id='standard_71' class="form-control" disabled='disabled' placeholder="품명 및 규격" /></td>
                <td><input type="number" name='amount_71' id='amount_71' class="form-control" disabled='disabled' placeholder="본" /></td>
                <td><input type="number" name='perweight_71' id='perweight_71' class="form-control" disabled='disabled' placeholder="본당 중량" /></td>
                <td><input type="number" name='weight_71' id='weight_71' class="form-control" disabled='disabled' placeholder="중량(kg)" /></td>
                <td><input type="number" name='worktime_71' id='worktime_71' class="form-control" disabled='disabled' placeholder="작업 시간(분)" /></td>
                <td><input type="number" name='stoptime_71' id='stoptime_71' class="form-control" disabled='disabled' placeholder="시간(분)" /></td>
                <td><input type="text" name='stopsign_71' id='stopsign_71' class="form-control" disabled='disabled' placeholder="기호" /></td>
                <td><input type="number" name='badweight_71' id='badweight_71' class="form-control" disabled='disabled' placeholder="중량" /></td>
                <td><input type="text" name='badsign_71' id='badsign_71' class="form-control" disabled='disabled' placeholder="기호" /></td>

              </tr>
              <tr>
                <td colspan="2"><input type="text" name='standard_72' id='standard_72' class="form-control" disabled='disabled' placeholder="품명 및 규격" /></td>
                <td><input type="number" name='amount_72' id='amount_72' class="form-control" disabled='disabled' placeholder="본" /></td>
                <td><input type="number" name='perweight_72' id='perweight_72' class="form-control" disabled='disabled' placeholder="본당 중량" /></td>
                <td><input type="number" name='weight_72' id='weight_72' class="form-control" disabled='disabled' placeholder="중량(kg)" /></td>
                <td><input type="number" name='worktime_72' id='worktime_72' class="form-control" disabled='disabled' placeholder="작업 시간(분)" /></td>
                <td><input type="number" name='stoptime_72' id='stoptime_72' class="form-control" disabled='disabled' placeholder="시간(분)" /></td>
                <td><input type="text" name='stopsign_72' id='stopsign_72' class="form-control" disabled='disabled' placeholder="기호" /></td>
                <td><input type="number" name='badweight_72' id='badweight_72' class="form-control" disabled='disabled' placeholder="중량" /></td>
                <td><input type="text" name='badsign_72' id='badsign_72' class="form-control" disabled='disabled' placeholder="기호" /></td>
                ``
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
  </script>
  <script src="js/sb-admin.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

</body>

</html>
