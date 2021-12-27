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







var i2 = 0;

function count2() {
    if (i2 < 3) {
        i2++;
    } else if (i2 = 3) {
        i2 = 0;
    }
    document.getElementById("display2").innerHTML = i2;
}
var i3 = 0;

function count3() {
    if (i3 < 33) {
        i3++;
    } else if (i3 = 33) {
        i3 = 0;
    }
    document.getElementById("display3").innerHTML = i3;
}
var i4 = 0;

function count4() {
    if (i4 < 33) {
        i4++;
    } else if (i4 = 33) {
        i4 = 0;
    }
    document.getElementById("display4").innerHTML = i4;
}
var i5 = 0;

function count5() {
    if (i5 < 34) {
        i5++;
    } else if (i5 = 34) {
        i5 = 0;
    }
    document.getElementById("display5").innerHTML = i5;
}
var i6 = 0;

function count6() {
    if (i6 < 3) {
        i6++;
    } else if (i6 = 3) {
        i6 = 0;
    }
    document.getElementById("display6").innerHTML = i6;
}
var i7 = 0;

function count7() {
    if (i7 < 3) {
        i7++;
    } else if (i7 = 3) {
        i7 = 0;
    }
    document.getElementById("display7").innerHTML = i7;
}
var i8 = 0;

function count8() {
    if (i8 < 3) {
        i8++;
    } else if (i8 = 3) {
        i8 = 0;
    }
    document.getElementById("display8").innerHTML = i8;
}
var i9 = 0;

function count9() {
    if (i9 < 3) {
        i9++;
    } else if (i9 = 3) {
        i9 = 0;
    }
    document.getElementById("display9").innerHTML = i9;
}
var i10 = 0;

function count10() {
    if (i10 < 3) {
        i10++;
    } else if (i10 = 3) {
        i10 = 0;
    }
    document.getElementById("display10").innerHTML = i10;
}
var i11 = 0;

function count11() {
    if (i11 < 3) {
        i11++;
    } else if (i11 = 3) {
        i11 = 0;
    }
    document.getElementById("display11").innerHTML = i11;
}
var i12 = 0;

function count12() {
    if (i12 < 3) {
        i12++;
    } else if (i12 = 3) {
        i12 = 0;
    }
    document.getElementById("display12").innerHTML = i12;
}
var i13 = 0;

function count13() {
    if (i13 < 10) {
        i13++;
    } else if (i13 = 10) {
        i13 = 0;
    }
    document.getElementById("display13").innerHTML = i13;
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



