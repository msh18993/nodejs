<!doctype html>
<html lang="ko">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>부팅 시작프로그램 비활성화</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<body>
  <?php
  require '../src/navbar.php';
  ?>

  <h2><strong>시작프로그램 비활성화 하기</strong></h2>
  <img src="../images/win10_start_program_disable_01.jpg"><br>
  <img src="../images/cse.jpg"><br>
  <p>우선 시작프로그램에 등록된 프로그램의 동작을 관리하려면 작업표시줄을 마우스 오른쪽 버튼으로 클릭한 다음 작업관리자를 클릭합니다.</p>
  <p>혹은 작업관리자를 실행하기위한 단축기 ctrl + shift + esc 를 눌러 실행시킵니다.</p>
  <img src="../images/hoxy.png"><br>
  <P>만약 이런 모양의 작업관리자가 나온다면 창 하단의 자세히를 눌러주시면 됩니다.</P>
  <img src="../images/win10_start_program_disable_02.jpg"><br>
  <p>작업 관리자 상단의 ①’시작프로그램’ 탭을 클릭한 다음 등록되어 있는 프로그램 중 불필요한 프로그램(이 경우에는 qBittorent)을 마우스 오른쪽 버튼으로 클릭해서 나오는 메뉴의 ②’사용 안 함’을 클릭합니다.</p>
  <img src="../images/win10_start_program_disable_03.jpg"><br>
  <p>설정한 프로그램의 상태가 사용 안 함으로 변경되어 부팅시 해당 프로그램이 실행되지 않게 됩니다.</p>


</body>