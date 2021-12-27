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


