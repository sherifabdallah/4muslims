<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="icon" href="https://i.ibb.co/xhKTfVb/1631179818168.png">
<title>4Muslims</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf30Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link src="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
    <link rel="stylesheet" href="style.css">    
     
</head>
<body id="body">
<div id="myProgress">
<div id="myBar"></div>
</div>
<nav id="mynav" class="navbar navbar-inverse" style="background-color: #0e4130!important;">
    <div class="container-fluid">
    <div class="navbar-header">
    <div style="padding-right: 300px;" class="navbar-brand" onclick="this.onclick=null; move() , window.location.href='/islam/azkar/'">
    <span class="glyphicon">&#xe091;</span>
    </div></div></div></nav><br>


<br>
<div class="col-md-4" style="height: fit-content;">
<div class="card text-white" style="background-color: white; color: black;  border-radius: 25px;">
<div class="card-body">
<div style="font-size: 30px; color: black;">أذكار الدخول إلى المنزل</div>
<br>
<p class="card-text" style="text-align: center; font-size: 29px;" >بِسْـمِ اللهِ وَلَجْنـا، وَبِسْـمِ اللهِ خَـرَجْنـا، وَعَلـى رَبِّنـا تَوَكّلْـنا
</p>
<hr>
<div style="font-size: 19px; color: black;">تقال مره واحده</div>
</div>
</div>
</div>
<br>
<div class="col-md-4" style="height: fit-content;">
<div class="card text-white" style="background-color: white; color: black;  border-radius: 25px;">
<div class="card-body">
<div style="font-size: 30px; color: black;">أذكار الخروج من المنزل</div>
<br>
<p class="card-text" style="text-align: center; font-size: 29px;" >بِسْمِ اللهِ ، تَوَكَّلْـتُ عَلى اللهِ وَلا حَوْلَ وَلا قُـوَّةَ إِلاّ بِالله.
اللّهُـمَّ إِنِّـي أَعـوذُ بِكَ أَنْ أَضِـلَّ أَوْ أُضَـل ، أَوْ أَزِلَّ أَوْ أُزَل ، أَوْ أَظْلِـمَ أَوْ أَُظْلَـم ، أَوْ أَجْهَلَ أَوْ يُـجْهَلَ عَلَـيّ
</p>
<hr>
<div style="font-size: 19px; color: black;">تقال مره واحده</div>
</div>
</div>
</div>
















    
<br><br><br><br>

<header class="header">
<div class="container">
<nav class="bottom-nav" style="background-color: #0e4130;">
<div onclick="this.onclick=null; move() , window.location.href='/islam/home/'"  class="bottom-nav-item ">
<div class="bottom-nav-link">
<i class="material-icons">&#xe871;</i>
<span>Dashboard</span>
</div>
</div>
<div onclick="this.onclick=null; move() , window.location.href='/islam/account/'" class="bottom-nav-item">
<div class="bottom-nav-link">
<i class="material-icons">&#xe853;</i>
<span>Account</span>
</div>
</div>

<div onclick="this.onclick=null; move() , window.location.href='/islam/settings'" class="bottom-nav-item">
<div class="bottom-nav-link">
<i class="material-icons">&#xe8b8;</i>
<span>Setting</span>
</div>
</div>
</nav>
</div>
</header>

<script src="script.js"></script>
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


document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø±ÙŽØ¨Ù‘ÙÙ‡ÙÙ…Ù’/g,"<span style='color: red;'>Ø±ÙŽØ¨Ù‘ÙÙ‡ÙÙ…Ù’</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø±ÙŽØ¨Ù‘ÙŽÙƒÙŽ/g,"<span style='color: ;'>Ø±ÙŽØ¨Ù‘ÙŽÙƒÙŽ</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø¥Ù„ÙŽÙ‡/g,"<span style='color: red;'>Ø¥Ù„ÙŽÙ‡</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø§Ù„Ù’Ù„ÙŽÙ‘Ù‡ÙÙ…/g,"<span style='color: red;'>Ø§Ù„Ù’Ù„ÙŽÙ‘Ù‡ÙÙ…</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø§Ù‘ÙÙ„Ù‘ÙŽÙ„Ù‘ÙŽÙ‡Ù‘Ù’/g,"<span style='color: red;'>Ø§Ù‘ÙÙ„Ù‘ÙŽÙ„Ù‘ÙŽÙ‡Ù‘Ù’</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø§Ù„Ù„Ù‡Ù…Ù‘ÙŽ/g,"<span style='color: red;'>Ø§Ù„Ù„Ù‡Ù…Ù‘ÙŽ</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø±ÙŽØ¨Ù‘ÙÙƒ/g,"<span style='color: red;'>Ø±ÙŽØ¨Ù‘ÙÙƒ</span>");    
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø§Ù„Ù„Ù‘ÙŽÙ‡ÙÙ…/g,"<span style='color: red;'>Ø§Ù„Ù„Ù‘ÙŽÙ‡ÙÙ…</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø±ÙŽØ¨Ù‘ÙŽÙ†ÙŽØ§/g,"<span style='color: red;'>Ø±ÙŽØ¨Ù‘ÙŽÙ†ÙŽØ§</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/ÙˆÙŽØ±ÙŽØ¨Ù‘ÙÙƒÙÙ…/g,"<span style='color: red;'>ÙˆÙŽØ±ÙŽØ¨Ù‘ÙÙƒÙÙ…</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø±ÙŽØ¨Ù‘ÙÙŠ/g,"<span style='color: red;'>Ø±ÙŽØ¨Ù‘ÙÙŠ</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø±ÙŽØ¨Ù‘ÙÙ†ÙŽØ§/g,"<span style='color: red;'>Ø±ÙŽØ¨Ù‘ÙÙ†ÙŽØ§</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø§Ù„Ù„Ù‘ÙŽÙ‡/g,"<span style='color: red;'>Ø§Ù„Ù„Ù‘ÙŽÙ‡</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø§Ù„Ù„ÙŽÙ‘Ù‡ÙÙ…/g,"<span style='color: red;'>Ø§Ù„Ù„ÙŽÙ‘Ù‡ÙÙ…</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø§Ù„Ù„ÙŽÙ‘Ù‡/g,"<span style='color: red;'>Ø§Ù„Ù„ÙŽÙ‘Ù‡</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø§Ù„Ù„Ù‘Ù‡ÙÙ€Ù…/g,"<span style='color: red;'>Ø§Ù„Ù„Ù‘Ù‡ÙÙ€Ù…</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø¨Ø§Ù„Ù„Ù‘Ù‡/g,"<span style='color: red;'>Ø¨Ø§Ù„Ù„Ù‘Ù‡</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø§Ù„Ù„Ù‡/g,"<span style='color: red;'>Ø§Ù„Ù„Ù‡</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø§Ù„Ù„Ù‡Ù…/g,"<span style='color: red;'>Ø§Ù„Ù„Ù‡Ù…</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ù„Ù„Ù‡/g,"<span style='color: red;'>Ù„Ù„Ù‡</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/ÙŠØ§ Ø±Ø¨/g,"<span style='color: red;'>Ø§Ù„Ù„Ù‡Ù…</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø¥Ù„Ù‡/g,"<span style='color: red;'>Ø¥Ù„Ù‡</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø§Ù„Ù„Ù‘Ù‡/g,"<span style='color: red;'>Ø§Ù„Ù„Ù‘Ù‡</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø§Ù„Ù„Ù‘Ù‡ÙÙ€Ù…/g,"<span style='color: red;'>Ø§Ù„Ù„Ù‘Ù‡ÙÙ€Ù…</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ù±Ù„Ù„Ù‘ÙŽÙ‡/g,"<span style='color: red;'>Ù±Ù„Ù„Ù‘ÙŽÙ‡</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø¨ÙØ§Ù„Ù„Ù‡/g,"<span style='color: red;'>Ø¨ÙØ§Ù„Ù„Ù‡</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø¨Ø§Ù„Ù„Ù‡/g,"<span style='color: red;'>Ø¨Ø§Ù„Ù„Ù‡</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø§Ù„Ù„Ù‘ÙŽÙ‡ÙÙ…/g,"<span style='color: red;'>Ø§Ù„Ù„Ù‘ÙŽÙ‡ÙÙ…</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø§Ù„Ù„ÙŽÙ‘Ù‡ÙÙ…ÙŽÙ‘/g,"<span style='color: red;'>Ø§Ù„Ù„ÙŽÙ‘Ù‡ÙÙ…ÙŽÙ‘</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø§Ù„Ù„ÙŽÙ‘Ù‡ÙÙ…ÙŽÙ‘ØµÙŽÙ„/g,"<span style='color: red;'>Ø§Ù„Ù„ÙŽÙ‘Ù‡ÙÙ…ÙŽÙ‘ØµÙŽÙ„</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ù„ÙÙ„ÙŽÙ‘Ù‡/g,"<span style='color: red;'>Ù„ÙÙ„ÙŽÙ‘Ù‡</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ù±Ù„Ù„Ù‘Ù°Ù‡/g,"<span style='color: red;'>Ù±Ù„Ù„Ù‘Ù°Ù‡</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø±ÙŽØ¨Ù‘/g,"<span style='color: red;'>Ø±ÙŽØ¨Ù‘</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø¥ÙÙ„ÙŽÙ‡/g,"<span style='color: red;'>Ø¥ÙÙ„ÙŽÙ‡</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø±Ø¨Ù‘ÙŽÙ†ÙŽØ§/g,"<span style='color: red;'>Ø±Ø¨Ù‘ÙŽÙ†ÙŽØ§</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø±Ù‘ÙŽØ¨ÙÙ‘/g,"<span style='color: red;'>Ø±Ù‘ÙŽØ¨ÙÙ‘</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ø±ÙŽØ¨ÙÙ‘/g,"<span style='color: red;'>Ø±ÙŽØ¨ÙÙ‘</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ù„Ù‘ÙŽÙ„Ù‘ÙŽÙ‡Ù‘Ù’/g,"<span style='color: red;'>Ù„Ù‘ÙŽÙ„Ù‘ÙŽÙ‡Ù‘Ù’</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/ï´¾/g,"<span class='text-warning'>ï´¾</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/ï´¿/g,"<span class='text-warning'>ï´¿</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ù¡/g,"<span class='text-warning'>Ù¡</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ù¢/g,"<span class='text-warning'>Ù¢</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ù£/g,"<span class='text-warning'>Ù£</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ù¤/g,"<span class='text-warning'>Ù¤</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ù¥/g,"<span class='text-warning'>Ù¥</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ù¦/g,"<span class='text-warning'>Ù¦</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ù§/g,"<span class='text-warning'>Ù§</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ù¨/g,"<span class='text-warning'>Ù¨</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ù©/g,"<span class='text-warning'>Ù©</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/Ù /g,"<span class='text-warning'>Ù </span>");




</script>
</body>
</html>