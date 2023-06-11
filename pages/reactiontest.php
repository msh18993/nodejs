<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>반응속도 테스트</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<style>
  .container {
    text-align: center;
    width: 100vm;
    height: 75vh;
    margin-left: 0px;
    margin-right: 0px;
    font-size: 50px;
    font-family: cursive;
    background-color: rgb(43, 135, 209);
    color: white;
  }

  #click_to_start {
    font-size: 30px;
  }
</style>

<body>
  <?php
  require '../src/navbar.php';
  ?>

  <div class="container user-select-none" id="main_button" onclick="start()">
    Reaction Time Test
    <p id="click_to_start">Click to Start</p>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">기록</th>
        <th scope="col">평균</th>
      </tr>
    </thead>
    <tbody id="scoreBoard"></tbody>
  </table>
</body>

<script>
  var time1;
  var time2;
  var dir = document.getElementById("main_button");
  var timer;
  var time3 = [];
  var res;

  function start() {
    dir.innerHTML = "Wait for Green...";
    dir.style.backgroundColor = "red";
    var ranTime = Math.floor(Math.random() * 4000 + 2000);
    dir.setAttribute("onclick", "retry()");
    timer = setTimeout("turnGreen()", ranTime);
    timer;
  }

  function turnGreen() {
    time1 = new Date();
    dir.style.backgroundColor = "green";
    dir.innerHTML = "Click!";
    dir.setAttribute("onclick", "result()");
  }

  function result() {
    time2 = new Date();
    dir.style.backgroundColor = "rgb(43, 135, 209)";
    var timePassed = time2.getTime() - time1.getTime();
    time3.push(timePassed);
    res = time3.reduce(function add(sum, currValue) {
      return sum + currValue;
    }, 0);
    var average = Math.ceil(res / time3.length);
    dir.innerHTML =
      timePassed +
      "ms elapsed...<br> click to try again<br> average : " +
      average +
      "ms";
    dir.setAttribute("onclick", "start()");
    var record = document.createElement("tr");
    record.innerHTML =
      '<th scope="row">' +
      time3.length +
      "</th><td>" +
      timePassed +
      "ms</td><td>" +
      average +
      "ms</td>";
    document.querySelector("#scoreBoard").appendChild(record);
  }

  function retry() {
    dir.innerHTML = "not yet! try again...";
    dir.setAttribute("onclick", "start()");
    dir.style.backgroundColor = "rgb(43, 135, 209)";
    clearTimeout(timer);
  }
</script>