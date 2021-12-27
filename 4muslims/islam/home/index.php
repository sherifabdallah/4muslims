
<!DOCTYPE html>
<html lang="en" id="body">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="https://i.ibb.co/xhKTfVb/1631179818168.png">
    <title>4Muslims</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="/islam/home/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/header-fixed.css">
	<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
  <link src="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="/islam/home/style2.css">
    <style>
      .btn{
	        background-color: white!important;
          color: black;
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
<body>
<div id="myProgress">
<div id="myBar"></div>
</div>


<header class="header-fixed" style="background-color: #0e4130;">

	<div class="header-limiter" style="padding-bottom: 2em;">

		<h1 style="color: white; font-size: 30px;"><a href="#">4Muslims</a></h1>
		<nav style="padding-bottom: 2em;">
			<a href="#" id="ah"></a>
		</nav>

	</div>

</header>
<br>
<div class="d-grid gap-2" style="padding: 1.2em;">
  <button     onclick="this.onclick=null; move() , window.location.href='/islam/quran/'" class="btn btn-primary" style="height: 70px; color:black;"   type="button">القرآن الكريم</button>
  <button     onclick="this.onclick=null; move() ,window.location.href='/islam/azkar/'" class="btn btn-primary" style="height: 70px; color:black;"   type="button">اذِكارْ</button>
  <button     onclick="this.onclick=null; move() ,window.location.href='/islam/duoa/'" class="btn btn-primary" style="height: 70px; color:black;"   type="button">الدعاء</button>
  <button     onclick="this.onclick=null; move() ,window.location.href='/islam/tasbeh/'" class="btn btn-primary" style="height: 70px; color:black;"   type="button">تَسْبِيح‎</button>

  <button     onclick="this.onclick=null; move() ,window.location.href='/islam/azan/'"  class="btn btn-primary" style="height: 70px; color:black;"   type="button">مواقيت الصلاه</button>
</div>
<hr  style="height: 0px;border: none;border-top: 1px solid black" style="border-bottom: 0px">
<br>

<div class="col-md-4" style="height: fit-content;">
  <div class="card text-black bg-info mb-3" style="background-color: white!important; color: black;  border-radius: 25px;">
  <div class="card-body">
  <p class="card-text" id="duration_script" style="text-align: center; font-size: 25px;" >
  </p>
  <div style="font-size: 18px; color: black;">

    <center>
      تقال مره واحده
    </center>

  </div>
  <hr>
  </div>
  </div>
  </div>
  <br>
  



<br><br><br><br>


<header class="header">
  <div class="container">
    <nav class="bottom-nav">
      <div  class="bottom-nav-item">
        <div class="bottom-nav-link">
        <i class="material-icons">&#xe871;</i>
          <span>Dashboard</span>
       
        </div>
      </div>
      <div       onclick="this.onclick=null; move() ,window.location.href='/islam/account/'" class="bottom-nav-item">
        <div class="bottom-nav-link">
        <i class="material-icons">&#xe853;</i>
        <span>Account</span>
        </div>
      </div>

      <div       onclick="this.onclick=null; move() ,window.location.href='/islam/settings/'" class="bottom-nav-item">
        <div class="bottom-nav-link">
        <i class="material-icons">&#xe8b8;</i>
          <span>Setting</span>
        </div>
      </div>
    </nav>
  </div>
</header>

<script >
// Proggress bar
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

var day = new Date();
var hr = day.getHours();
if (hr >= 5 && hr < 15) {
    document.getElementById('duration_script').innerHTML = "أَصْبَـحْـنا وَأَصْبَـحْ المُـلكُ للهِ رَبِّ العـالَمـين ، اللّهُـمَّ إِنِّـي أسْـأَلُـكَ خَـيْرَ هـذا الـيَوْم ، فَـتْحَهُ ، وَنَصْـرَهُ ، وَنـورَهُ وَبَـرَكَتَـهُ ، وَهُـداهُ ، وَأَعـوذُ بِـكَ مِـنْ شَـرِّ ما فـيهِ وَشَـرِّ ما بَعْـدَه";

} else {
    document.getElementById('duration_script').innerHTML =  "أَمْسَيْنا وَأَمْسَى الْمُلْكُ للهِ رَبِّ الْعَالَمَيْنِ، اللَّهُمَّ إِنَّي أسْأَلُكَ خَيْرَ هَذَه اللَّيْلَةِ فَتْحَهَا ونَصْرَهَا، ونُوْرَهَا وبَرَكَتهَا، وَهُدَاهَا، وَأَعُوذُ بِكَ مِنْ شَرِّ مَا فيهِا وَشَرَّ مَا بَعْدَهَا";

}


  document.getElementById('ah').innerHTML = date.toLocaleDateString('ar-sa', dateOptions);
  document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/رَبِّهِمْ/g,"<span style='color: red;'>رَبِّهِمْ</span>");
  document.getElementById("body").innerHTML = document.getElementById("body").innerHTML.replace(/اللَّهِ/g,"<span style='color: red;'>اللَّهِ</span>");
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


</script>

</body>
</html>