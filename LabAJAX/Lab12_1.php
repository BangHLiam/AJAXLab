<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script>
    var httpRequset;
    function send(){
      httpRequest = new XMLHttpRequest();
      httpRequest.onreadystatechange = showResult;

      var mango = document.getElementById("mango").value;
      var orange = document.getElementById("orange").value;
      var banana = document.getElementById("banana").value;

      var url = "add.php?mango=" + mango + "&orange=" + orange +"&banana=" + banana;

      httpRequest.open("GET", url);
      httpRequest.send();
    }

    function showResult(){
      if(httpRequest.readyState == 4 && httpRequest.status == 200){
        document.getElementById("result").innerHTML = httpRequest.responseText;
      }
    }
  </script>
</head>
<body>
  มะม่วง กก ละ 30 บาท ขายได้  <input type="number" id="mango">กก.<br>
  ส้ม กก. ละ 70 บาท ขายได้ <input type="number" id="orange">กก.<br>
  กล้วย หวีละ 30 บาท ขายได้ <input type="number" id="banana" onkeyup="send()">หวี<br>

  <span id="result"></span>
</body>
</html>