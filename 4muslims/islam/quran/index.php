<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link src="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<style>
  input[type="text"]::placeholder { 
                  
                  /* Firefox, Chrome, Opera */
                  text-align: right;
                }
                .form-control { 
                text-align: right; 
                }
              li{  padding: 0.5em;}
              .btn{
	        background-color: white!important;
          color: black;
            }
            .btn:hover{ background-color: white!important; color: black; }
</style>
<link rel="icon" href="https://i.ibb.co/xhKTfVb/1631179818168.png">
<title>4Muslims</title>
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











  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myList li").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>
</head>
<body>
<div id="myProgress">
<div id="myBar"></div>
</div>
        <nav id="mynav" class="navbar navbar-inverse" style="background-color: #0e4130!important;">
        <div class="container-fluid">
        <div class="navbar-header">
        <div style="padding-right: 300px;" class="navbar-brand" onclick="this.onclick=null; move() ,  window.location.href='/islam/home/'">
        <span class="glyphicon">&#xe091;</span>
        </div>
        </div>
        </div>
        </nav>
    
 






<div  class="form-group" style="padding: 1.2em;"  >
<input id="myInput" type="text" placeholder="قم بلبحث علي اسم السوره" class="form-control" style="height: 45px;" id="usr"   name="username" >
</div>

<div class="d-grid gap-2" id="buttons_group" style="padding: 1.2em;" >
<div id="myList">


<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elfat7a'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الفاتحة</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elbkrah'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >البقرة</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='al3omran'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >آل عمران</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elnsa2'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >النساء</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elma2eda'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >المآئدة</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elan3am'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الأنعام</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='ela3raf'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الأعراف</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elanfal'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الأنفال</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='eltawba'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >التوبة</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='younis'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >يونس</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='hood'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >هود</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='youssif'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >يوسف</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elraad'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الرعد</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='ibrahiem'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >إبراهيم</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='el7agar'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الحجر</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elna7l'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >النحل</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elesra2'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الإسراء</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elkahf'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الكهف</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='maryam'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >مريم</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='taha'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >طـه</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elanbya2'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الأنبياء</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='el7eg'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الحج</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elmo2menon'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >المؤمنون</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elnoor'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >النور</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elforkan'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الفرقان</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elsho3ra2'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الشعراء</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elnaml'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >النمل</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elkasas'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >القصص</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='el3ankabot'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >العنكبوت</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elroom'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الروم</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='lokman'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >لقمان</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elsajda'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >السجدة</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='ela7zab'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الاحزاب</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='saba2'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >سبأ</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='fater'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >فاطر</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='yassin'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >يس</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elsafat'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الصافات</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='saaad'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >ص</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elzomor'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الزمر</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='ghafer'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >غافر</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='foslt'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >فصلت</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elshora'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الشورى</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elzakhraf'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الزخرف</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='eldokhan'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الدخان</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elgathya'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الجاثية</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='ele7kaf'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الأحقاف</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='mohammed'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >محمد</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elfat7'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الفتح</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='el7ograt'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الحجرات</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='kaaf'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >ق</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='aldhaariat'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الذاريات</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alttwr'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الطور</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alnajm'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >النجم</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alqamar'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >القمر</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alrahman'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الرحمن</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alwaqiea'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الواقعة</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alhadid'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الحديد</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='almujadala'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >المجادلة</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alhashr'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الحشر</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='almumtahina'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الممتحنة</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alsaf'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الصف</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='aljumea'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الجمعة</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='almunafiqun'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >المنافقون</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='altaghabun'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >التغابن</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='altalaq'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الطلاق</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='altahrim'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >التحريم</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='almolk'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الملك</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alqalam'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >القلم</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alhaqa'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الحاقة</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='almaearij'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >المعارج</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='nuh'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >نوح</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='aljinu'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الجن</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='almuzamil'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >المزمل</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='almudathir'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >المدثر</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alqiama'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >القيامة</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alansan'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الإنسان</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='almursalat'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >المرسلات</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='elnaba2'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >النبأ</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alnaazieat'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >النازعات</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='eabs'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >عبس</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='altakwir'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >التكوير</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alanfitar'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الإنفطار</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='almutafifin'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >المطففين</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alanshiqaq'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الإنشقاق</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alburuj'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >البروج</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='altaariq'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الطارق</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alaealaa'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الأعلى</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alghashia'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الغاشية</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alfajr'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الفجر</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='albalad'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >البلد</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alshams'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الشمس</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='allayl'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الليل</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alduhaa'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الضحى</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alsharh'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الشرح	</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='altiyn'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >التين</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alealaq'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >العلق</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alqadr'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >القدر</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='albayina'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >البيِّنة</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alzalzala'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الزلزلة</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='aleadiat'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >العاديات</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alqariea'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >القارعة</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='altakathur'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >التكاثر</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='aleasr'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >العصر</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alhamza'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الهمزة</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alfil'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الفيل</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='quraysh'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >قريش</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='almaeun'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الماعون</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alkawthar'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الكوثر</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alkafirun'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الكافرون</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alnasr'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >النصر</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='almasad'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >المسد</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alakhilas'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الإخلاص</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alfalaq'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الفلق</button></li>
<li><button class="btn btn-primary" onclick="this.onclick=null; move() ,  window.location.href='alnaas'" style="border: none;   display: inline-block; height: 70px; font-size: 23px;   width: 100%;" type="button" >الناس</button></li>


</div>    
</div>







































    <br><br><br><br>

	<header class="header">
  <div class="container">
    <nav class="bottom-nav" style="background-color: #0e4130;">
      <div onclick="this.onclick=null; move() ,  window.location.href='/islam/home/'"  class="bottom-nav-item">
        <div class="bottom-nav-link">
        <i class="material-icons">&#xe871;</i>
          <span>Dashboard</span>
        </div>
      </div>
      <div onclick="this.onclick=null; move() ,  window.location.href='/islam/account/'" class="bottom-nav-item">
        <div class="bottom-nav-link">
        <i class="material-icons">&#xe853;</i>
        <span>Account</span>
        </div>
      </div>

      <div onclick="this.onclick=null; move() ,  window.location.href='/islam/settings'" class="bottom-nav-item">
        <div class="bottom-nav-link">
        <i class="material-icons">&#xe8b8;</i>
          <span>Setting</span>
        </div>
      </div>
    </nav>
  </div>
</header>   

<script>
  // get input field and add 'keyup' event listener
let searchInput = document.querySelector('.search_input');
searchInput.addEventListener('keyup', search);

// get all title
let titles = document.querySelectorAll('.serc_sys .tit');
let searchTerm = '';
let tit = '';

function search(e) {
// get input fieled value and change it to lower case
searchTerm = e.target.value.toLowerCase();

titles.forEach((title) => {
// navigate to p in the title, get its value and change it to lower case
tit = title.textContent.toLowerCase();
// it search term not in the title's title hide the title. otherwise, show it.
tit.includes(searchTerm) ? title.style.display = 'block' : title.style.display = 'none';
});
}
</script>

</body>
</html>