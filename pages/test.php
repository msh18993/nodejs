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
    $dataDir = '../data';
    $titles = scandir($dataDir);
    for ($i=0; $i<count($titles); $i++) {
        if ($titles[$i] = '.' || '..') {
            unset($titles[$i]);
        };
    }
    ?>

  

<div class="list-group">  
    <?php
        // for ($i=0; $i<count($titles); $i++) {
        //     $contents = file_get_contents($dataDir.'/'.$titles[i]);
        //     echo '<a href="#" class="list-group-item list-group-item-action active" aria-current="true">
        //     <div class="d-flex w-100 justify-content-between">
        //       <h5 class="mb-1">'.$titles[$i].'</h5>
        //       <small>'.
        // }
    ?>
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">Some placeholder content in a paragraph.</p>
    <small>And some small print.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Some placeholder content in a paragraph.</p>
    <small class="text-muted">And some muted small print.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Some placeholder content in a paragraph.</p>
    <small class="text-muted">And some muted small print.</small>
  </a>
</div>


    <form action="../src/create_comment.php" method="post">
        <input type="text" name="title" placeholder="title">
        <input type="hidden" name="time" value="<?= date("Y-m-d H:i:s");?>"><br>
        <input type="textarea" name="comment" placeholder="comment here...">
        <input type="submit" value="submit">
    </form>
</body>