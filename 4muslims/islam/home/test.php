<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
</head>
<body>

<h1>JavaScript Progress Bar</h1>

<div id="myProgress">
  <div id="myBar"></div>
</div>

<br>
<button id="click">Click Me</button> 
<button id="click">Click Me</button> 
<script>
var i = 0;
('button').onclick = function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 12);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
  document.getElementById("myBar").style = "width: 1%; height: 4px; background-color: #04AA6D;";
  document.getElementById("myProgress").style = "width: 100%; background-color: #ddd;";

}
</script>

</body>
</html>
