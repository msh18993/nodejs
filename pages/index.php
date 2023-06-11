<!doctype html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>나의 페이지</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<style>
	.card {
		display: inline-block;
		margin: 8px;
	}

	.card-body {
		width: 18rem;
		height: 200px;
	}

	img {
		width: 18rem;
		height: 200px;
		object-fit: cover;
	}
</style>

<body>
	<?php
	require '../src/navbar.php';
	?>

	<div class="shadow p-3 mb-5 bg-body rounded">
		<h1>Time Until The Day</h1>
		<h2 id="remain-time"></h2>
		<script src="../src/dday.js"></script>
	</div>



	<div class="card" style="width: 18rem;">
		<img src="../images/movie.jpg" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">보고싶은 영상이 있을때 <span class="badge bg-secondary">New</span></h5>
			<p class="card-text">토렌트를 이용한 영상 다운로드 방법</p>
			<br>
			<a href="torrent_guide.php" class="btn btn-primary">방법 보기</a>
		</div>
	</div>
	<div class="card" style="width: 18rem;">
		<img src="../images/reationtest.png" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">반응속도 테스트 <span class="badge bg-secondary">New</span></h5>
			<p class="card-text">초록색이 되면 클릭해 반응속도를 확인해보세요</p>
			<a href="reactiontest.php" class="btn btn-primary">플레이 하기</a>
		</div>
	</div>
	<div class="card" style="width: 18rem;">
		<img src="../images/coding.jpg" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">개발중... <span class="badge bg-secondary">New</span></h5>
			<p class="card-text">추가예정</p>
			<br>
			<a href="test.php" class="btn btn-primary">test page</a>
		</div>
	</div>

</body>

</html>