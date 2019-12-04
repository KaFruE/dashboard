<?php
    //include("config.php");  //DB연결을 위한 config.php를 로딩합니다.
    header("Content-Type:text/html;charset=utf-8");

    session_start();   //세션의 시작

    $connect = mysqli_connect("localhost", "yook6442", "yug6442!", "yook6442") or die("fail");

    //입력 받은 id와 password
  $id=$_GET['id'];
  $password=$_GET['password'];

  //아이디가 있는지 검사
  $query = "select * from login where id='$id'";
  $result = $connect->query($query);


  //아이디가 있다면 비밀번호 검사
  if(mysqli_num_rows($result)==1) {

          $row=mysqli_fetch_assoc($result);
          //비밀번호가 맞다면 세션 생성
          if($row['password']==$password){
                  $_SESSION['userid']=$id;
                  if(isset($_SESSION['userid'])){
                    $_SESSION['auth'] = $row['auth'];
                  ?>      <script>
                                  alert("로그인 되었습니다.");
                                  location.replace("./main.php");
                          </script>
<?php
                  }
                  else{
                          echo "session fail";
                  }
          }

          else {
  ?>              <script>
                          alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                          history.back();
                  </script>
  <?php
          }

  }

          else{
?>              <script>
                  alert("아이디 혹은 비밀번호가 잘못되었습니다.");
                  history.back();
          </script>
<?php
  }


?>
