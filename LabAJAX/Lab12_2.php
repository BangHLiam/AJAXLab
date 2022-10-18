<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script>
    function send(){
      request = new XMLHttpRequest();
      request.onreadystatechange = showResult;

      var keyword = document.getElementById("keyword").value;
      var url = "memberTable.php?keyword=" + keyword;
      request.open("GET",url,true);
      request.send(null);
    }

    function showResult(){
      if(request.readyState == 4){
        if(request.status == 200){
          document.getElementById("result").innerHTML = request.responseText;
        }
      }
    }
  </script>
</head>
<body>
  <input type="text" id="keyword" onkeyup="send()">
  <div id="result"></div>
</body>
</html>