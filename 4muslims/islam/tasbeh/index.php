<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <link src="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
  <link rel="icon" href="https://i.ibb.co/xhKTfVb/1631179818168.png">
  <title>4Muslims</title>
    <style>
body{
    width: 100%;
    height: 100%;
    background-image:url(https://i.ibb.co/jr4D0WN/head-bg-mobile.jpg);
    background-size: cover;
    background-attachment:fixed;
    margin: 0;
    padding: 0;
    }
.header-fixed {
    background-color: #0CB099;
    margin: 0;
    padding: 0;
    box-shadow:0 1px 1px #ccc;
	padding: 20px 40px;
	height: 80px;
	color: #ffffff;
	box-sizing: border-box;
	top:-100px;

	-webkit-transition:top 0.3s;
	transition:top 0.3s;
	border: 1px solid white;
	border-radius: 10px;
}

.header-fixed .header-limiter {
	max-width: 1200px;
	text-align: center;
	margin: 0 auto;
}

/*	The header placeholder. It is displayed when the header is fixed to the top of the
	browser window, in order to prevent the content of the page from jumping up. */

.header-fixed-placeholder{
	height: 80px;
	display: none;
}

/* Logo */

.header-fixed .header-limiter h1 {
	float: left;
	font: normal 28px Cookie, Arial, Helvetica, sans-serif;
	line-height: 40px;
	margin: 0;
}

.header-fixed .header-limiter h1 span {
	color: #292c2f;
}

/* The navigation links */

.header-fixed .header-limiter a {
	color: #ffffff;
	text-decoration: none;
}

.header-fixed .header-limiter nav {
	font:16px Arial, Helvetica, sans-serif;
	line-height: 40px;
	float: right;
}

.header-fixed .header-limiter nav a{
	display: inline-block;
	padding: 0 5px;
	text-decoration:none;
	color: #ffffff;
	opacity: 0.9;
}

.header-fixed .header-limiter nav a:hover{
	opacity: 1;
}

.header-fixed .header-limiter nav a.selected {
	color: #608bd2;
	pointer-events: none;
	opacity: 1;
}

/* Fixed version of the header */

body.fixed .header-fixed {
	padding: 10px 40px;
	height: 50px;
	position: fixed;
	width: 100%;
	top: 0;
	left: 0;
	z-index: 1;
}

body.fixed .header-fixed-placeholder {
	display: block;
}

body.fixed .header-fixed .header-limiter h1 {
	font-size: 24px;
	line-height: 30px;
}

body.fixed .header-fixed .header-limiter nav {
	line-height: 28px;
	font-size: 13px;
}


/* Making the header responsive */

@media all and (max-width: 600px) {

	.header-fixed {
		padding: 20px 0;
		height: 75px;
	}

	.header-fixed .header-limiter h1 {
		float: none;
		margin: -8px 0 10px;
		text-align: center;
		font-size: 24px;
		line-height: 1;
	}

	.header-fixed .header-limiter nav {
		line-height: 1;
		float:none;
	}

	.header-fixed .header-limiter nav a {
		font-size: 13px;
	}

	body.fixed .header-fixed {
		display: none;
	}

}

/*
	 We are clearing the body's margin and padding, so that the header fits properly.
	 We are also adding a height to demonstrate the scrolling behavior. You can remove
	 these styles.
 */

body {
	margin: 0;
	padding: 0;
	height: 100%;
}
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}
body {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 1rem;
  font-weight: normal;
  line-height: 1.5;
  color: #252a32;
}
.container {
  max-width: 80rem;
  width: 100%;
  height: auto;
  padding: 0 2rem;
  margin: 0 auto;
}
.header .bottom-nav {
  display: flex;
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 0.8rem 0;
  background-color: #252a32;
  z-index: 99;
  will-change: transform;
  transform: translateZ(0);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 3px rgba(0, 0, 0, 0.24);
}
.header .bottom-nav-item {
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  justify-content: center;
  text-align: center;
  font-size: 0.8rem;
  color: #f1f5f8;
}
.header .bottom-nav-link {
  display: flex;
  flex-direction: column;
}
.header .bottom-nav .active {
  color: #00a4bd;
}
#gallerywrapper #gallery {
  position:absolute;

  height:450px;
  overflow:hidden;
} 

#gallerywrapper #gallery div {
height:900px; 
  position:relative;
} 

#gallerywrapper #gallery div img {
  clear:both; 
  display:block; 
  margin:0 auto; 
  border:0;
} 
#next_prev {
text-decoration: none;
display: inline-block;
padding: 8px 16px;
}

#next_prev:hover {
background-color: #ddd;
color: black;
}

.previous {
background-color: #f1f1f1;
color: black;
}

.next {
background-color: #04AA6D;
color: white;
}

.round {
border-radius: 50%;
}
body{
	color: #ffffff;
}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  height: 25% !important;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;
    height: 25% !important;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  height: 25% !important;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
    height: 25% !important;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  height: 25% !important;
}

.counter {
	 text-align: center;
	 text-transform: uppercase;
	 text-decoration: none;
	 font-size: 19px;
	 font-weight: 100;
	 font-family: "Segoe UI";
	 letter-spacing: 1px;
}
 .counter:before {
	 border-radius: 100px;
	 border: 2px solid silver;
	 box-shadow: 0 0 15px rgba(0,255,204,0.15), 0 0 15px rgba(0,255,204,0.15) inset;
	 content: "";
	 display: block;
	 position: absolute;
	 left: 52%;
	 top: 52%;
	 height: 110px;
	 width: 110px;
	 margin-left: -57px;
	 margin-top: -57px;
	 opacity: 1;
	 transform: scale(1);
	 transition: all 300ms;
}
 .counter:hover:before {
	 transform: scale(1.05);
}
 .counter.butoon {
	 background: #02a16e;
	 border: none;
	 border-radius: 900px;
	 color: #e4ecfa;
	 display: block;
	 width: 100px;
	 height: 100px;
	 line-height: 100px;
	 position: relative;
	 margin: auto;


}
 .counter.butoon:hover {
	 background: #0e4130;
	 padding: -2px;
}
.no-highlight {
	user-select: none;
	-ms-user-select: none;
	-moz-user-select: none;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
}
body{
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome and Opera */
}


    </style>
	
</head>
<body id="body">
	<div id="myProgress">
  <div id="myBar"></div>
  </div>
<nav id="mynav" class="navbar navbar-inverse" style="background-color: #0e4130!important;">
    <div class="container-fluid">
    <div class="navbar-header">
    <div style="padding-right: 300px;" class="navbar-brand" onclick="this.onclick=null; move() , window.location.href='/islam/home/'">
    <span class="glyphicon">&#xe091;</span>
</div>
    </div>
    </div>
    </nav>

<br>
<br>



<div class="col-md-4" style="height: fit-content;">
<div class="card text-black bg-info mb-3" style="background-color: white!important; color: black;  border-radius: 25px;">
<div class="card-body">
<p class="card-text" style="text-align: center; font-size: 30px;" >سُبْحَانَ اللَّهِ
</p>
<div style="font-size: 18px; color: black;">يكتب له ألف حسنة أو يحط عنه ألف خطيئة</div>
<hr>
     <div class="no-highlight"  onclick="count1()">
<div class="counter butoon" ><span id="display1">0</span>/33</div>
</div>
</div>
</div>
</div>
<br>
<div class="col-md-4" style="height: fit-content;">
<div class="card text-black bg-info mb-3" style="background-color: white!important; color: black;  border-radius: 25px;">
<div class="card-body">
<p class="card-text" style="text-align: center; font-size: 30px;" >اٍّلَّحّْمُّدٌّ لَّلَّهّْ
</p>
<div style="font-size: 18px; color: black;">تملأ ميزان العبد بالحسنات</div>
<hr>
     <div class="no-highlight"  onclick="count2()">
<div class="counter butoon" ><span id="display2">0</span>/33</div>
</div>
</div>
</div>
</div>
<br>
<div class="col-md-4" style="height: fit-content;">
<div class="card text-black bg-info mb-3" style="background-color: white!important; color: black;  border-radius: 25px;">
<div class="card-body">
<p class="card-text" style="text-align: center; font-size: 30px;" >اٍّلَّلَّهّْ اٍّكّْبّْرًّ
</p>
<div style="font-size: 18px; color: black;">من قال الله أكبر كتبت له عشرون حسنة وحطت عنه عشرون سيئة. الله أكبر من كل شيء</div>
<hr>
     <div class="no-highlight"  onclick="count3()">
<div class="counter butoon" ><span id="display3">0</span>/33</div>
</div>
</div>
</div>
</div>
<br>
<div class="col-md-4" style="height: fit-content;">
<div class="card text-black bg-info mb-3" style="background-color: white!important; color: black;  border-radius: 25px;">
<div class="card-body">
<p class="card-text" style="text-align: center; font-size: 30px;" >لَا إِلَهَ إِلَّا اللَّهُ
</p>
<div style="font-size: 18px; color: black;">أفضل الذكر لا إله إلاّ الله</div>
<hr>
     <div class="no-highlight"  onclick="count5()">
<div class="counter butoon" ><span id="display5">0</span>/33</div>
</div>
</div>
</div>
</div>
<br>
<div class="col-md-4" style="height: fit-content;">
<div class="card text-black bg-info mb-3" style="background-color: white!important; color: black;  border-radius: 25px;">
<div class="card-body">
<p class="card-text" style="text-align: center; font-size: 30px;" >الْلَّهُم صَلِّ وَسَلِم وَبَارِك عَلَى سَيِّدِنَا مُحَمَّد
</p>
<div style="font-size: 18px; color: black;">من صلى عليه حين يصبح وحين يمسى ادركته شفاعته يوم القيامة</div>
<hr>
     <div class="no-highlight"  onclick="count4()">
<div class="counter butoon" ><span id="display4">0</span>/33</div>
</div>
</div>
</div>
</div>
<br>
<div class="col-md-4" style="height: fit-content;">
<div class="card text-black bg-info mb-3" style="background-color: white!important; color: black;  border-radius: 25px;">
<div class="card-body">
<p class="card-text" style="text-align: center; font-size: 30px;" >لَا إلَه إلّا اللهُ وَحْدَهُ لَا شَرِيكَ لَهُ، لَهُ الْمُلْكُ وَلَهُ الْحَمْدُ وَهُوَ عَلَى كُلُّ شَيْءِ قَدِيرِ
</p>
<div style="font-size: 18px; color: black;">كانت له عدل عشر رقاب، وكتبت له مئة حسنة، ومحيت عنه مئة سيئة، وكانت له حرزا من الشيطان</div>
<hr>
     <div class="no-highlight"  onclick="count6()">
<div class="counter butoon" ><span id="display6">0</span>/100</div>
</div>
</div>
</div>
</div>
<br>
<div class="col-md-4" style="height: fit-content;">
<div class="card text-black bg-info mb-3" style="background-color: white!important; color: black;  border-radius: 25px;">
<div class="card-body">
<p class="card-text" style="text-align: center; font-size: 30px;" >اٍّسًّتُّغٌّفّْرًّ اٍّلَّلَّهّْ اٍّلَّعَّظُيٌّمُّ وّ أتُّوّبّْ إلَّيٌّهّْ
</p>
<div style="font-size: 18px; color: black;">لفعل الرسول صلى الله عليه وسلم</div>
<hr>
     <div class="no-highlight"  onclick="count7()">
<div class="counter butoon" ><span id="display7">0</span>/100</div>
</div>
</div>
</div>
</div>
<br>
<div class="col-md-4" style="height: fit-content;">
<div class="card text-black bg-info mb-3" style="background-color: white!important; color: black;  border-radius: 25px;">
<div class="card-body">
<p class="card-text" style="text-align: center; font-size: 30px;" >لا حَوْلَ وَلا قُوَّةَ إِلا بِاللَّهِ
</p>
<div style="font-size: 18px; color: black;">كنز من كنوز الجنة</div>
<hr>
     <div class="no-highlight"  onclick="count8()">
<div class="counter butoon" ><span id="display8">0</span>/100</div>
</div>
</div>
</div>
</div>
<br>
<div class="col-md-4" style="height: fit-content;">
<div class="card text-black bg-info mb-3" style="background-color: white!important; color: black;  border-radius: 25px;">
<div class="card-body">
<p class="card-text" style="text-align: center; font-size: 30px;">سُبْحَانَ اللَّهِ وَبِحَمْدِهِ ، سُبْحَانَ اللَّهِ الْعَظِيمِ
</p>
<div style="font-size: 18px; color: black;">ثقيلتان في الميزان حبيبتان إلى الرحمن</div>
<hr>
     <div class="no-highlight"  onclick="count9()">
<div class="counter butoon" ><span id="display9">0</span>/100</div>
</div>
</div>
</div>
</div>





















      <br><br><br><br>

	<header class="header">
  <div class="container">
    <nav class="bottom-nav" style="background-color: #0e4130;">
      <div onclick="this.onclick=null; move() , window.location.href='/islam/home/'"  class="bottom-nav-item">
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




document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/رَبِّهِمْ/g,"<span style='color: red;'>رَبِّهِمْ</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/رَبَّكَ/g,"<span style='color: ;'>رَبَّكَ</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/إلَه/g,"<span style='color: red;'>إلَه</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/الْلَّهُم/g,"<span style='color: red;'>الْلَّهُم</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/اٍّلَّلَّهّْ/g,"<span style='color: red;'>اٍّلَّلَّهّْ</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/اللهمَّ/g,"<span style='color: red;'>اللهمَّ</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/رَبِّك/g,"<span style='color: red;'>رَبِّك</span>");    
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/اللَّهُم/g,"<span style='color: red;'>اللَّهُم</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/رَبَّنَا/g,"<span style='color: red;'>رَبَّنَا</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/وَرَبِّكُم/g,"<span style='color: red;'>وَرَبِّكُم</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/رَبِّي/g,"<span style='color: red;'>رَبِّي</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/رَبُّنَا/g,"<span style='color: red;'>رَبُّنَا</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/اللَّه/g,"<span style='color: red;'>اللَّه</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/اللَّهُم/g,"<span style='color: red;'>اللَّهُم</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/اللَّه/g,"<span style='color: red;'>اللَّه</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/اللّهُـم/g,"<span style='color: red;'>اللّهُـم</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/باللّه/g,"<span style='color: red;'>باللّه</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/الله/g,"<span style='color: red;'>الله</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/اللهم/g,"<span style='color: red;'>اللهم</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/لله/g,"<span style='color: red;'>لله</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/يا رب/g,"<span style='color: red;'>اللهم</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/إله/g,"<span style='color: red;'>إله</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/اللّه/g,"<span style='color: red;'>اللّه</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/اللّهُـم/g,"<span style='color: red;'>اللّهُـم</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/ٱللَّه/g,"<span style='color: red;'>ٱللَّه</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/بِالله/g,"<span style='color: red;'>بِالله</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/بالله/g,"<span style='color: red;'>بالله</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/اللَّهُم/g,"<span style='color: red;'>اللَّهُم</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/اللَّهُمَّ/g,"<span style='color: red;'>اللَّهُمَّ</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/اللَّهُمَّصَل/g,"<span style='color: red;'>اللَّهُمَّصَل</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/لِلَّه/g,"<span style='color: red;'>لِلَّه</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/ٱللّٰه/g,"<span style='color: red;'>ٱللّٰه</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/رَبّ/g,"<span style='color: red;'>رَبّ</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/إِلَه/g,"<span style='color: red;'>إِلَه</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/ربَّنَا/g,"<span style='color: red;'>ربَّنَا</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/رَّبِّ/g,"<span style='color: red;'>رَّبِّ</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/رَبِّ/g,"<span style='color: red;'>رَبِّ</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/لَّلَّهّْ/g,"<span style='color: red;'>لَّلَّهّْ</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/﴾/g,"<span class='text-warning'>﴾</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/﴿/g,"<span class='text-warning'>﴿</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/١/g,"<span class='text-warning'>١</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/٢/g,"<span class='text-warning'>٢</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/٣/g,"<span class='text-warning'>٣</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/٤/g,"<span class='text-warning'>٤</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/٥/g,"<span class='text-warning'>٥</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/٦/g,"<span class='text-warning'>٦</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/٧/g,"<span class='text-warning'>٧</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/٨/g,"<span class='text-warning'>٨</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/٩/g,"<span class='text-warning'>٩</span>");
document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/٠/g,"<span class='text-warning'>٠</span>");




</script>


</body>
</html>