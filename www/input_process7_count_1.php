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
            <a href="input_process7.php">제 7 호기</a>
          </li>
          <li class="breadcrumb-item active">수량</li>
        </ol>

        <ol class="bread">
          <a class="btn btn-outline-secondary" href="input_process7_mix.php">배합</a>
          <a class="btn btn-outline-secondary" href="input_process7_press.php">압출</a>
          <a class="btn btn-outline-secondary" href="input_process7_cut.php">검사</a>
          <a class="btn btn-outline-secondary" href="input_process7_count.php">수량</a>
          <a class="btn btn-outline-secondary" href="input_process7_other.php">기타</a>
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
          <a id="clock1" class="btn btn-dark float-right clocks" href="input_process7_count_1.php">야간</a>
          <a id="clock2" class="btn btn-dark float-right clocks" href="input_process7_count_1.php">주간</a>
        </ol>

      </br></br>

      <form method='post' action='write_process1_count.php'>
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
              <thead>
                <tr>
                  <th colspan ="2">규격/구분</th>
                  <th>체크시간</th>
                  <th>수량</th>
                  <th>본당시간</th>
                  <th>본당중량</th>
                  <th>불량</th>
                  <th colspan ="2">불량원인</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td colspan="2"><input type="text" name="standard_1" id="standard_1" class="form-control" placeholder="규격" /></td>
                  <td><input type="time" name="checktime_1" id="checktime_1" class="form-control" placeholder="체크시간" /></td>
                  <td><input type="number" name="amount_1" id="amount_1" class="form-control" placeholder="수량" /></td>
                  <td><input type="time" name="pertime_1" id="pertime_1" class="form-control" placeholder="본당시간" /></td>
                  <td><input type="number" name="perweight_1" id="perweight_1" class="form-control" placeholder="본당중량" /></td>
                  <td><input type="text" name="failure_1" id="failure_1" class="form-control" placeholder="불량" /></td>
                  <td colspan="2"><input type="text" name="failurereason_1" id="failurereason_1" class="form-control" placeholder="불량원인" /></td>
                </tr>
                <tr>
                  <td colspan="2"><input type="text" name="standard_2" id="standard_2" class="form-control" placeholder="규격" /></td>
                  <td><input type="time" name="checktime_2" id="checktime_2" class="form-control" placeholder="체크시간" /></td>
                  <td><input type="number" name="amount_2" id="amount_2" class="form-control" placeholder="수량" /></td>
                  <td><input type="time" name="pertime_2" id="pertime_2" class="form-control" placeholder="본당시간" /></td>
                  <td><input type="number" name="perweight_2" id="perweight_2" class="form-control" placeholder="본당중량" /></td>
                  <td><input type="text" name="failure_2" id="failure_2" class="form-control" placeholder="불량" /></td>
                  <td colspan="2"><input type="text" name="failurereason_2" id="failurereason_2" class="form-control" placeholder="불량원인" /></td>
                </tr>
                <tr>
                  <td colspan="2"><input type="text" name="standard_3" id="standard_3" class="form-control" placeholder="규격" /></td>
                  <td><input type="time" name="checktime_3" id="checktime_3" class="form-control" placeholder="체크시간" /></td>
                  <td><input type="number" name="amount_3" id="amount_3" class="form-control" placeholder="수량" /></td>
                  <td><input type="time" name="pertime_3" id="pertime_3" class="form-control" placeholder="본당시간" /></td>
                  <td><input type="number" name="perweight_3" id="perweight_3" class="form-control" placeholder="본당중량" /></td>
                  <td><input type="text" name="failure_3" id="failure_3" class="form-control" placeholder="불량" /></td>
                  <td colspan="2"><input type="text" name="failurereason_3" id="failurereason_3" class="form-control" placeholder="불량원인" /></td>
                </tr>
                <tr>
                  <td colspan="2"><input type="text" name="standard_4" id="standard_4" class="form-control" placeholder="규격" /></td>
                  <td><input type="time" name="checktime_4" id="checktime_4" class="form-control" placeholder="체크시간" /></td>
                  <td><input type="number" name="amount_4" id="amount_4" class="form-control" placeholder="수량" /></td>
                  <td><input type="time" name="pertime_4" id="pertime_4" class="form-control" placeholder="본당시간" /></td>
                  <td><input type="number" name="perweight_4" id="perweight_4" class="form-control" placeholder="본당중량" /></td>
                  <td><input type="text" name="failure_4" id="failure_4" class="form-control" placeholder="불량" /></td>
                  <td colspan="2"><input type="text" name="failurereason_4" id="failurereason_4" class="form-control" placeholder="불량원인" /></td>
                </tr>
              </tbody>
            </table>
          </div>

          <input class="btn btn-dark btn-block" type="submit" value="저장">
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
                   <th colspan="2" class='table-under-import'>품명</th>
                   <th colspan="2" class='table-under-import'>규격</th>
                   <th colspan="4" class='table-under-import'>불량 원인 및 조치</th>
                   <th colspan="2" class='table-under-import'>처리내역(폐기/특채)</th>
                 </tr>
                 <tr class='table-under'>
                   <td colspan="2"><input type="text" name="pm_1" id="pm_1" class="form-control" placeholder="품명" /></td>
                   <td colspan="2"><input type="number" name="gg_1" id="gg_1" class="form-control" placeholder="규격" /></td>
                   <td colspan="4"><input type="text" name="br_1" id="br_1" class="form-control" placeholder="불량 원인 및 조치" /></td>
                   <td colspan="2"><input type="text" name="cr_1" id="cr_1" class="form-control" placeholder="처리내역" /></td>
                 </tr>
                 <tr class='table-under'>
                   <td colspan="2"><input type="text" name="pm_2" id="pm_2" class="form-control" placeholder="품명" /></td>
                   <td colspan="2"><input type="number" name="gg_2" id="gg_2" class="form-control" placeholder="규격" /></td>
                   <td colspan="4"><input type="text" name="br_2" id="br_2" class="form-control" placeholder="불량 원인 및 조치" /></td>
                   <td colspan="2"><input type="text" name="cr_2" id="cr_2" class="form-control" placeholder="처리내역" /></td>
                 </tr>
                 <tr class='table-under'>
                   <td colspan="2"><input type="text" name="pm_3" id="pm_3" class="form-control" placeholder="품명" /></td>
                   <td colspan="2"><input type="number" name="gg_3" id="gg_3" class="form-control" placeholder="규격" /></td>
                   <td colspan="4"><input type="text" name="br_3" id="br_2" class="form-control" placeholder="불량 원인 및 조치" /></td>
                   <td colspan="2"><input type="text" name="cr_3" id="cr_3" class="form-control" placeholder="처리내역" /></td>
                 </tr>
                 <tr class='table-under'>
                   <td colspan="2"><input type="text" name="pm_4" id="pm_4" class="form-control" placeholder="품명" /></td>
                   <td colspan="2"><input type="number" name="gg_4" id="gg_4" class="form-control" placeholder="규격" /></td>
                   <td colspan="4"><input type="text" name="br_4" id="br_4" class="form-control" placeholder="불량 원인 및 조치" /></td>
                   <td colspan="2"><input type="text" name="cr_4" id="cr_4" class="form-control" placeholder="처리내역" /></td>
                 </tr>
                 <tr>
                   <th rowspan="2" colspan="2">정지시간 기호</th>
                   <th colspan="8">불량 항목 기호</th>
                 </tr>
                 <tr class='table-under-import'>
                   <th colspan="4">기계</th>
                   <th colspan="4">검사</th>
                 </tr>
                 <tr>
                   <th class='table-under-small'>A1</th>
                   <td>압출기고장(휘드,스크류)</td>
                   <th class='table-under-small'>C1</th>
                   <td>가동(수리후)</td>
                   <th class='table-under-small'>C2</th>
                   <td>가동(규격교체후)</td>
                   <th class='table-under-small'>C30</th>
                   <td>외관(기포,주름,탄호)</td>
                   <th class='table-under-small'>C31</th>
                   <td>치수(6개수)</td>
                 </tr>
                 <tr>
                   <th class='table-under-small'>A2</th>
                   <td>코로게이트 고장</td>
                   <th class='table-under-small'>C3</th>
                   <td>가동(대기후)</td>
                   <th class='table-under-small'>C4</th>
                   <td>제동(고장)</td>
                   <th class='table-under-small'>C32</th>
                   <td>인장,강성,편평불량</td>
                   <th class='table-under-small'>C33</th>
                   <td>아세톤불량</td>
                 </tr>
                 <tr>
                   <th class='table-under-small'>A3</th>
                   <td>감속기고장</td>
                   <th class='table-under-small'>C5</th>
                   <td>제동(규격교체전)</td>
                   <th class='table-under-small'>C6</th>
                   <td>제동(대기전)</td>
                   <th class='table-under-small'>C34</th>
                   <td>낙추충격불량</td>
                   <th class='table-under-small'></th>
                   <td></td>
                 </tr>
                 <tr>
                   <th class='table-under-small'>A4</th>
                   <td>절단기고장</td>
                   <th class='table-under-small'>C7</th>
                   <td>온도/속도이상</td>
                   <th class='table-under-small'>C8</th>
                   <td>진공/에어이상</td>
                   <td colspan="4" rowspan="14"></td>
                  </tr>
                  <tr>
                    <th class='table-under-small'>A5</th>
                    <td>금형(다이스)이상</td>
                    <th class='table-under-small'>C9</th>
                    <td>냉각불량</td>
                    <th class='table-under-small'>C10</th>
                    <td>코로게이트이상</td>
                  </tr>
                  <tr>

                    <th class='table-under-small'>A6</th>
                    <td>금형/몰드교체</td>
                    <th class='table-under-small'>C11</th>
                    <td>휘드,스크류이상</td>
                    <th class='table-under-small'>C12</th>
                    <td>절단기이상</td>
                  </tr>
                  <tr>
                    <th class='table-under-small'>A7</th>
                    <td>전기이상</td>
                    <th class='table-under-small'>C13</th>
                    <td>몰드이상</td>
                    <th class='table-under-small'>C14</th>
                    <td>감속기이상</td>
                  </tr>
                  <tr>
                    <th class='table-under-small'>A8</th>
                    <td>제품불량정지</td>
                    <th class='table-under-small'>C15</th>
                    <td>주변기계(오일펌프,벨트등)</td>
                    <th class='table-under-small'>C16</th>
                    <td>정전,기계 정지</td>
                  </tr>
                  <tr>

                    <th class='table-under-small'>A9</th>
                    <td>정전,기계정지</td>
                    <th class='table-under-small'>C17</th>
                    <td>센터조정</td>
                    <th class='table-under-small'>C18</th>
                    <td>기타</td>
                  </tr>
                  <tr>
                    <th class='table-under-small'>A10</th>
                    <td>계획정지(휴무,대기)</td>
                    <th colspan="4">재료</th>
                </tr>
                <tr>
                  <th class='table-under-small'>A11</th>
                  <td>도금 및 수리 대기</td>
                  <th class='table-under-small'>C19</th>
                  <td>원료이상</td>
                  <th class='table-under-small'>C20</th>
                  <td>배합이상</td>
                </tr>
                <tr>

                  <th class='table-under-small'>A12</th>
                  <td>몰드이상</td>
                  <th colspan="4">호기</th>
                </tr>
                <tr>
                  <th class='table-under-small'>A13</th>
                  <td>주변기계이상(오일펌프,벨트등)</td>
                  <th class='table-under-small'>C21</th>
                  <td>탄화불량</td>
                  <th class='table-under-small'>C22</th>
                  <td>내면갈라짐</td>
                </tr>
                <tr>
                  <th class='table-under-small'>A14</th>
                  <td>확관기고장</td>
                  <th class='table-under-small'>C23</th>
                  <td>내면기포(접착불량)</td>
                  <th class='table-under-small'>C24</th>
                  <td>이물질에산터짐(미성형)</td>
                </tr>
                <tr>

                  <th rowspan="3">A15</th>
                  <td rowspan="3">기타</td>
                  <th class='table-under-small'>C25</th>
                  <td>적재불량(떨어짐)</td>
                  <th class='table-under-small'>C26</th>
                  <td>실험불량</td>
                </tr>
                <tr>
                  <th class='table-under-small'>C27</th>
                  <td>슬리브불량</td>
                  <th class='table-under-small'>C28</th>
                  <td>취급부주의</td>
                </tr>
                <tr>
                  <th class='table-under-small'>C29</th>
                  <td>기타</td>
                  <th class='table-under-small'></th>
                  <td></td>
                </tr>
               </tbody>
             </table>
           </div>
           <br />
           <input class="btn btn-dark btn-block" type="submit" value="저장">
           <br /><br />
      </form>
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
