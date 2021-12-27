<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="icon" href="https://i.ibb.co/xhKTfVb/1631179818168.png">
<title>4Muslims</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link src="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="style.css">  

</head>
<body>
<div id="myProgress">
<div id="myBar"></div>
</div>
    <nav id="mynav" class="navbar navbar-inverse" style="background-color: #0e4130!important;">
        <div class="container-fluid">
        <div class="navbar-header">
        <div style="padding-right: 300px;" class="navbar-brand" onclick="this.onclick=null; move() ,window.location.href='/islam/home/'">
        <span class="glyphicon">&#xe091;</span>
    </div>
        </div>
        </div>
        </nav>
    
 

<br>
<div class="d-grid gap-2" style="padding: 1.2em;">
<button class="btn btn-primary" onclick="this.onclick=null; move() ,window.location.href='/islam/duoa/goama_eldoa/index.php'" style="border: none;   background-color: white!important; color: black;display: inline-block; height: 70px; font-size: 23px; background-color: #0d6efd;   width: 100%;" type="button">جوامع الدعاء</button>
<br>
<br>
<button class="btn btn-primary" onclick="this.onclick=null; move() ,window.location.href='/islam/duoa/adia_nabawia/index.php'" style="border: none;   background-color: white!important; color: black;display: inline-block; height: 70px; font-size: 23px; background-color: #0d6efd;   width: 100%;" type="button">أدعية نبوية</button>
<br>
<br>
<button class="btn btn-primary" onclick="this.onclick=null; move() ,window.location.href='/islam/duoa/aladaia_elquranya/index.php'" style="border: none;   background-color: white!important; color: black;display: inline-block; height: 70px; font-size: 23px; background-color: #0d6efd;   width: 100%;" type="button">الْأدْعِيَةُ القرآنية</button>
<br>
<br>
<button class="btn btn-primary" onclick="this.onclick=null; move() ,window.location.href='/islam/duoa/adia_elanbyaa/index.php'" style="border: none;   background-color: white!important; color: black;display: inline-block; height: 70px; font-size: 23px; background-color: #0d6efd;   width: 100%;" type="button">أدعية الأنبياء</button>
<br>
<br>
<button class="btn btn-primary" onclick="this.onclick=null; move() ,window.location.href='/islam/duoa/doua_takhtem_elquran/index.php'" style="border: none;   background-color: white!important; color: black;display: inline-block; height: 70px; font-size: 23px; background-color: #0d6efd;   width: 100%;" type="button">دُعَاءُ خَتْمِ القُرْآنِ الكَريمِ</button>
<br>
<br>
<button class="btn btn-primary" onclick="this.onclick=null; move() ,window.location.href='/islam/duoa/adia_llmyat/index.php'" style="border: none;   background-color: white!important; color: black;display: inline-block; height: 70px; font-size: 23px; background-color: #0d6efd;   width: 100%;" type="button">أدعية للميّت</button>

</div>    









































    <br><br><br><br>

	<header class="header">
  <div class="container">
    <nav class="bottom-nav" style="background-color: #0e4130;">
      <div onclick="this.onclick=null; move() ,window.location.href='/islam/home/'"  class="bottom-nav-item">
        <div class="bottom-nav-link">
        <i class="material-icons">&#xe871;</i>
          <span>Dashboard</span>
        </div>
      </div>
      <div onclick="this.onclick=null; move() ,window.location.href='/islam/account/'" class="bottom-nav-item">
        <div class="bottom-nav-link">
        <i class="material-icons">&#xe853;</i>
        <span>Account</span>
        </div>
      </div>

      <div onclick="this.onclick=null; move() ,window.location.href='/islam/settings'" class="bottom-nav-item">
        <div class="bottom-nav-link">
        <i class="material-icons">&#xe8b8;</i>
          <span>Setting</span>
        </div>
      </div>
    </nav>
  </div>
</header>   


<script>

var i = 0;
function move() {
if (i == 0) {
i = 1;
var elem = document.getElementById("myBar");
var width = 1;
var id = setInterval(frame, 10);
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
document.getElementById("myBar").style = "width: 1%; height: 3px; background-color: #29b389;";
document.getElementById("myProgress").style = "width: 100%; background-color: #ddd;";

}

</script>


</body>
</html>