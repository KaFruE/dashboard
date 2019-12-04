<?php
  session_start();
  //include("login_action.php");
  if(!isset($_SESSION['userid']))
  {
	   header('Location: ./index.php');
     //echo "<meta http-equiv='refresh' content='0;url=login.php'>";
	   //exit;
   }
   else if(!($_SESSION['auth']==1))
   {
?>
     <script>
        alert("권한이 부족합니다.");
        history.back();
     </script>
<?php
   }

?>
