<!doctype html>
<html lang="ko">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>영상 다운로드 가이드</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<body>
  <?php
  require '../src/navbar.php';
  ?>

  <figure>
    <blockquote class="blockquote">
      <p>이 방법은 모바일과 PC환경 전부 가능합니다. 각각 사전준비를 마치고 실시하십시오.</p>
    </blockquote>
    <figcaption class="blockquote-footer">
      사전준비가 안되어있다면 아래의 링크로 접속해 사전준비를 완료하시면 됩니다.<cite title="Source Title"> 사전준비는 최초실행 1회만 요구됩니다. </cite>
    </figcaption>
  </figure>

  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          모바일 환경 사전준비
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>모바일 환경에서는 Flud라는 앱이 필요합니다.</strong> Flud는 토렌트를 모바일 환경에서 작동시키기 위한 앱으로 플레이스토어에서 Flud를 검색해 다운로드 받으실 수 있습니다. 또는 다음 <a href="https://play.google.com/store/apps/details?id=com.delphicoder.flud&hl=ko">링크</a>를 통해 플레이스토어로 바로가기가 가능합니다.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          PC 환경 사전준비
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>PC환경에서는 qBittorent라는 프로그램이 필요합니다.</strong> qBittorent는 토렌트를 PC환경에서 작동시키기 위한 응용 프로그램으로, 구글에서 qBittorent를 검색해서 qBittorent공식 사이트에서 다운로드 받으실 수 있습니다. 또는 다음 <a href="https://www.fosshub.com/qBittorrent.html?dwl=qbittorrent_4.5.3_x64_setup.exe">링크</a>를 통해 다운로드가 가능합니다. 다운받은 qbittorrent_4.5.3_x64_setup.exe파일을 실행시켜 설치를 완료해 주세요. 이 프로그램에 경우 기본값으로 윈도우가 시작되었을때 같이 실행되는 프로그램으로 등록되어 있습니다. 이 설정을 꺼주세요. 끄기위한 방법은 다음 <a href="bootingprogram.php">링크</a>를 통해 알 수 있습니다.
        </div>
      </div>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-4">
      <nav id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 border-end">
        <nav class="nav nav-pills flex-column">
          <a class="nav-link" href="#item-1">토렌트 파일 다운받기</a>
          <nav class="nav nav-pills flex-column">
            <a class="nav-link ms-3 my-1" href="#item-1-1">토렌트 qq 사이트 접속</a>
            <a class="nav-link ms-3 my-1" href="#item-1-2">원하는 파일 검색</a>
            <a class="nav-link ms-3 my-1" href="#item-1-3">마그넷 링크 열기</a>
          </nav>
          <a class="nav-link" href="#item-2">토렌트 내용 다운로드</a>
          <a class="nav-link" href="#item-3">다운로드 완료 후</a>
          <nav class="nav nav-pills flex-column">
            <a class="nav-link ms-3 my-1" href="#item-3-1">PC 기준 후처리</a>
            <a class="nav-link ms-3 my-1" href="#item-3-2">모바일 기준 후처리</a>
          </nav>
          <a class="nav-link" href="#item-4">자막파일 (선택적)</a>
          <nav class="nav nav-pills flex-column">
            <a class="nav-link ms-3 my-1" href="#item-4-1">자막파일 적용방법</a>
          </nav>
        </nav>
      </nav>
    </div>

    <div class="col-8">
      <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
        <div id="item-1">
          <h4><strong>토렌트 파일 다운받기</strong></h4>
          <p>토렌트를 실행시킬 준비가 완료되었으니 원하는 영상의 토렌트 파일을 찾아줍니다. 토렌트 파일은 여러 가지 토렌트 사이트에서 다운로드가 가능합니다. 그중 가장 유명하고 자료가 방대한 <em>torrent qq</em>라는 사이트에서 파일을 다운받을 예정입니다. 토렌트 파일만 구하면 그 파일을 실행시키기만 하면 다운받을 수 있기에 토렌트 파일을 다른 방법으로 (ex. 심민석한테 파일 달라고 하기) 이 단계는 건너뛰시면 됩니다. 작업은 크롬에서 진행하는것을 추천합니다.</p>
        </div>
        <div id="item-1-1">
          <h5>토렌트 qq 사이트 접속</h5>
          <p>구글에서 <strong>토렌트 qq</strong>라고 검색을 해, 혹은 다음 <a href='https://www.google.com/search?q=%ED%86%A0%EB%A0%8C%ED%8A%B8+qq'>링크</a>를 클릭해, 가장 먼저 나오는 사이트를 들어갑니다.</p>
        </div>
        <div id="item-1-2">
          <h5>원하는 파일 검색</h5>
          <p>가장위에 검색어를 입력하라는 검색창에 원하는 영화, 드라마의 이름을 검색합니다. 검색한 결과가 출력됩니다. 여기서 여러가지 계시물이 나올텐데 제목과 파일용량을 토대로 원하는 자료를 찾습니다. 제목에서는 그 영상의 내용과 영상파일 정보(ex. 1080p, 720p -> 화질정보, H264 -> 코덱 정보 등)을 확인할 수 있어 상황에 맞는 자료를 선택하면 됩니다. </p>
        </div>
        <div id="item-1-3">
          <h5>마그넷 링크 열기</h5>
          <p>다음과 같은 <a href="../images/magnet_link.jpg">이미지</a>의 마그넷 링크라는 버튼을 눌러줍니다. 그러면 PC에서 실행하는 경우 브라우저에서 팝업창이 뜰텐데 확인을 눌러주면 됩니다. 모바일 환경에서는 바로 Flud가 실행됩니다.</p>
        </div>
        <div id="item-2">
          <h4><strong>토렌트 내용 다운로드</strong></h4>
          <p>마그넷 링크를 통해 메타데이터를 받아오면 그 토렌트에 포함된 파일 목록을 볼 수 있습니다. 보통은 모든 파일을 다운로드 받기 때문에 체크박스를 그대로 냅둔다. 혹시 원하는 특정 파일만 (ex. 시리즈 중에서 한 편만 다운받을 경우) 다운받고 싶은 경우 원하는 파일만 선택한다. 그 이후 다운로드를 진행한다. 다운로드 진행상황이 표시되고 프로세스 바가 100%가 되면 상태가 배포중으로 바뀌면서 다운로드가 완료된다.</p>
        </div>
        <div id="item-3">
          <h4><strong>다운로드 완료 후</strong></h4>
          <p>다운로드가 완료된 후 파일은 윈도우와 안드로이드 각각의 다운로드 폴더에 저장된다. 그 후 사용자는 다운로드가 완료된 토렌트 내용을 제거해줘야 한다. 이 과정을 생략하면 프로그램이 실행될때마다 전에 사용하던 토렌트 내용이 같이 프로세스 되기 때문에 제거해줘야 한다.</p>
        </div>
        <div id="item-3-1">
          <h5>PC 기준 후처리</h5>
          <p>다운로드가 완료되어 배포중이라고 뜨는 작업에 대해 우클릭한다. 우클릭을 하면 토렌트 제거라는 항목을 볼 수 있다. 그 항목을 선택한 후 나오는 팝업창에 대해서는 체크박스를 해제한후 제거를 진행한다. 팝업창에 내용은 다운로드 받은 영상파일도 같이 삭제하겠다는 말이다. 그래서 체크박스를 해제 한 후 제거한다.</p>
        </div>
        <div id="item-3-2">
          <h5>모바일 기준 후처리</h5>
          <p>PC의 다운로드 폴더는 익숙한 반면 모바일의 다운로드 폴더는 잘 모르는 경우가 많다. 모바일도 <strong>내 파일</strong>이라는 파일탐색기 앱에 들어가 <em>내장 저장공간 -> Download </em>폴더에 들어가면 다운로드 받은 파일들을 볼 수 있다. 다운로드가 완료된 작업에 대하여 길게 눌러 선택한다. 이후 우측 상단의 점 세개 아이콘을 눌러 토렌트 제거를 선택한다. 그러면 팝업창이 뜰텐데 그 팝업창에 대해 다운로드 된 데이터도 삭제하시겠습니까라는 항목의 체크박스를 해제한 후 확인을 누른다.</p>
        </div>
        <div id="item-4">
          <h4><strong>자막파일 (선택적)</strong></h4>
          <p>영상에서 자막 파일이 필요한 경우가 있다. 이 경우 자막파일을 구하는 방법이다. 토렌트로 다운받은 자막파일은 자체적으로 포함되어 있거나 토렌트 qq 사이트에 게시글에 다음 <a href="../images/caption.jpg">이미지</a>와 같이 포함되어 있다. 이를 다운받거나 구글링을 통해 구할 수 있다. 구글에서 자막을 원하는 영상의 제목과 자막 키워드를 붙여 검색하여 다운받으면 된다. 찾기 쉽게 대표적인 자막파일의 종류를 알려주면 .smi, .srt, .ass의 확장자가 있다. 이러한 확장자를 가진 파일을 찾으면 자막파일을 찾은것이다.</p>
        </div>
        <div id="item-4-1">
          <h5>자막파일 적용방법</h5>
          <p>보통 PC, 혹은 모바일에서 사용하는 플레이어에서는 자막파일의 이름과 영상파일의 이름이 같고, 같은 폴더(같은 디렉토리) 내에 존재하면 자동으로 적용된다. 그렇지 않은 경우 PC에서는 영상이 재생되는 창에 자막파일을 드래그 & 드롭 하는 방식으로도 자막 적용이 가능하다. 모바일의 경우 비디오 플레이어마다 천차 만별이라 정확한 방법은 없지만 대부분의 경우 영상 설정에서 자막 파일이라는 설정탭을 찾을 수 있다. 그 자막파일 설정탭에서 자막파일이 저장된 저장공간(디렉토리)를 찾아가 열어주면 된다. </p>
        </div>
      </div>
    </div>
  </div>

</body>