<?php
// Cairo
$cairo_fajr = explode('"' , explode('Fajr":"0', file_get_contents('https://api.pray.zone/v2/times/today.json?city=cairo'))[1])[0];
$cairo_duhr = explode('"' , explode('Dhuhr":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=cairo'))[1])[0];
$cairo_duhr_Am_or_Pm = substr($cairo_duhr,0,2);
$cairo_asr = explode('"' , explode('Asr":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=cairo'))[1])[0];
$cairo_asr = substr($cairo_asr , 0 , 2) - 12 . ':' . substr($cairo_asr,3 , 4);
$cairo_maghrib = explode('"' , explode('Maghrib":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=cairo'))[1])[0];
$cairo_maghrib = substr($cairo_maghrib , 0 , 2) - 12 . ':' . substr($cairo_maghrib,3 , 4);
$cairo_Isha = explode('"' , explode('Isha":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=cairo'))[1])[0];
$cairo_Isha = substr($cairo_Isha , 0 , 2) - 12 . ':' . substr($cairo_Isha,3 , 4);
// Alexandrea
$alexandria_fajr = explode('"' , explode('Fajr":"0', file_get_contents('https://api.pray.zone/v2/times/today.json?city=alexandria'))[1])[0];
$alexandria_duhr = explode('"' , explode('Dhuhr":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=alexandria'))[1])[0];
$alexandria_duhr_Am_or_Pm = substr($alexandria_duhr,0,2);
$alexandria_asr = explode('"' , explode('Asr":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=alexandria'))[1])[0];
$alexandria_asr = substr($alexandria_asr , 0 , 2) - 12 . ':' . substr($alexandria_asr,3 , 4);
$alexandria_maghrib = explode('"' , explode('Maghrib":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=alexandria'))[1])[0];
$alexandria_maghrib = substr($alexandria_maghrib , 0 , 2) - 12 . ':' . substr($alexandria_maghrib,3 , 4);
$alexandria_Isha = explode('"' , explode('Isha":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=alexandria'))[1])[0];
$alexandria_Isha = substr($alexandria_Isha , 0 , 2) - 12 . ':' . substr($alexandria_Isha,3 , 4);
// luxor
$luxor_fajr = explode('"' , explode('Fajr":"0', file_get_contents('https://api.pray.zone/v2/times/today.json?city=luxor'))[1])[0];
$luxor_duhr = explode('"' , explode('Dhuhr":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=luxor'))[1])[0];
$luxor_duhr_Am_or_Pm = substr($luxor_duhr,0,2);
$luxor_asr = explode('"' , explode('Asr":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=luxor'))[1])[0];
$luxor_asr = substr($luxor_asr , 0 , 2) - 12 . ':' . substr($luxor_asr,3 , 4);
$luxor_maghrib = explode('"' , explode('Maghrib":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=luxor'))[1])[0];
$luxor_maghrib = substr($luxor_maghrib , 0 , 2) - 12 . ':' . substr($luxor_maghrib,3 , 4);
$luxor_Isha = explode('"' , explode('Isha":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=luxor'))[1])[0];
$luxor_Isha = substr($luxor_Isha , 0 , 2) - 12 . ':' . substr($luxor_Isha,3 , 4);
// aswan
$aswan_fajr = explode('"' , explode('Fajr":"0', file_get_contents('https://api.pray.zone/v2/times/today.json?city=aswan'))[1])[0];
$aswan_duhr = explode('"' , explode('Dhuhr":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=aswan'))[1])[0];
$aswan_duhr_Am_or_Pm = substr($aswan_duhr,0,2);
$aswan_asr = explode('"' , explode('Asr":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=aswan'))[1])[0];
$aswan_asr = substr($aswan_asr , 0 , 2) - 12 . ':' . substr($aswan_asr,3 , 4);
$aswan_maghrib = explode('"' , explode('Maghrib":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=aswan'))[1])[0];
$aswan_maghrib = substr($aswan_maghrib , 0 , 2) - 12 . ':' . substr($aswan_maghrib,3 , 4);
$aswan_Isha = explode('"' , explode('Isha":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=aswan'))[1])[0];
$aswan_Isha = substr($aswan_Isha , 0 , 2) - 12 . ':' . substr($aswan_Isha,3 , 4);
// giza
$giza_fajr = explode('"' , explode('Fajr":"0', file_get_contents('https://api.pray.zone/v2/times/today.json?city=giza'))[1])[0];
$giza_duhr = explode('"' , explode('Dhuhr":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=giza'))[1])[0];
$giza_duhr_Am_or_Pm = substr($giza_duhr,0,2);
$giza_asr = explode('"' , explode('Asr":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=giza'))[1])[0];
$giza_asr = substr($giza_asr , 0 , 2) - 12 . ':' . substr($giza_asr,3 , 4);
$giza_maghrib = explode('"' , explode('Maghrib":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=giza'))[1])[0];
$giza_maghrib = substr($giza_maghrib , 0 , 2) - 12 . ':' . substr($giza_maghrib,3 , 4);
$giza_Isha = explode('"' , explode('Isha":"', file_get_contents('https://api.pray.zone/v2/times/today.json?city=giza'))[1])[0];
$giza_Isha = substr($giza_Isha , 0 , 2) - 12 . ':' . substr($giza_Isha,3 , 4);


?>

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
  <title>Document</title>

	
</head>
<body>
<div id="myProgress">
  <div id="myBar"></div>
  </div>
<nav id="mynav" class="navbar navbar-inverse" style="background-color: #0e4130;">


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

<div style="width: 360.4px; font-size: 15px; text-align: center;" class="container ">

    <table class="table table">



    <div   style="background-color: #9bd4d3; padding: 1em; font-size: 16.5px;">
    <div href="#" style="color: white; font-size: 19px;" id="ah"></div>
    </div>
       <thead class="thead" style="background-color: #82cad1; font-size: 16.5px;">

       
           <tr >
           <th>عشاء</th>
           <th>مغرب</th>
           <th>عصر</th>
           <th>ظهر</th>
           <th>فجر</th>
           <th>المواقيت</th>
         </tr>
       </thead>
       <tbody  class="thead-dark" style="background-color: #9bd4d3;  font-weight: bold;">
         <tr>
           <td><?php echo $cairo_Isha; ?> م</td>
           <td><?php echo $cairo_maghrib; ?> م</td>
           <td><?php echo $cairo_asr; ?> م</td>
           <td><?php echo $cairo_duhr;
           ?>
           <?php
           if ($cairo_duhr_Am_or_Pm < 12) {
             echo 'ص';
           } else{
             echo 'م';
           }
           ?>
          </td>
           <td><?php echo $cairo_fajr ?> ص</td>
           <td >القاهره</td>
         </tr>

         <tr style="background-color: #82cad1;   ">
         <td><?php echo $alexandria_Isha; ?> م</td>
           <td><?php echo $alexandria_maghrib; ?> م</td>
           <td><?php echo $alexandria_asr; ?> م</td>
           <td><?php echo $alexandria_duhr;
           ?>
           <?php
           if ($alexandria_duhr_Am_or_Pm < 12) {
             echo 'ص';
           } else{
             echo 'م';
           }
           ?>
          </td>
           <td><?php echo $alexandria_fajr ?> ص</td>
           <td>الاسكندريه</td>
         </tr>

         <tr>
         <td><?php echo $giza_Isha; ?> م</td>
           <td><?php echo $giza_maghrib; ?> م</td>
           <td><?php echo $giza_asr; ?> م</td>
           <td><?php echo $giza_duhr;
           ?>
           <?php
           if ($giza_duhr_Am_or_Pm < 12) {
             echo 'ص';
           } else{
             echo 'م';
           }
           ?>
          </td>
           <td><?php echo $giza_fajr ?> ص</td>
           <td>الجيزه</td>
         </tr>
         <tr style="background-color: #82cad1;  ">
         <td><?php echo $luxor_Isha; ?> م</td>
           <td><?php echo $luxor_maghrib; ?> م</td>
           <td><?php echo $luxor_asr; ?> م</td>
           <td><?php echo $luxor_duhr;
           ?>
           <?php
           if ($luxor_duhr_Am_or_Pm < 12) {
             echo 'ص';
           } else{
             echo 'م';
           }
           ?>
          </td>
           <td><?php echo $luxor_fajr ?> ص</td>
           <td>الاقصر</td>
         </tr>
         <tr>
         <td><?php echo $aswan_Isha; ?> م</td>
           <td><?php echo $aswan_maghrib; ?> م</td>
           <td><?php echo $aswan_asr; ?> م</td>
           <td><?php echo $aswan_duhr;
           ?>
           <?php
           if ($aswan_duhr_Am_or_Pm < 12) {
             echo 'ص';
           } else{
             echo 'م';
           }
           ?>
          </td>
           <td><?php echo $aswan_fajr ?> ص</td>
           <td>اسوان</td>
         </tr>
         
       </tbody>
     </table>
     </div>































      <br><br><br><br>

	<header class="header">
  <div class="container">
    <nav class="bottom-nav" style="background-color: #0e4130;">
      <div onclick="this.onclick=null; move() , window.location.href='/islam/home/'" class="bottom-nav-item ">
        <div class="bottom-nav-link">
        <i class="material-icons">&#xe871;</i>
          <span>Dashboard</span>
        </div>
      </div>
      <div class="bottom-nav-item" onclick="this.onclick=null; move() , window.location.href='/islam/account'">
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









const date = new Date();

const dateOptions = {
  weekday: 'long',
  year: 'numeric',
  month: 'long',
  day: 'numeric',
};

document.getElementById('ah').innerHTML = date.toLocaleDateString('ar-en', dateOptions);
</script>

</body>
</html>