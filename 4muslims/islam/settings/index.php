<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="icon" href="https://i.ibb.co/xhKTfVb/1631179818168.png">
<title>4Muslims</title>



  <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="css\maicons.css">

  <link rel="stylesheet" href="vendor\animate\animate.css">

  <link rel="stylesheet" href="vendor\owl-carousel\css\owl.carousel.min.css">

  <link rel="stylesheet" href="css\bootstrap.css">

  <link rel="stylesheet" href="css\mobster.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <link src="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
  <link href="style.css" rel="stylesheet"> 
  
  <title>Document</title>

</head>
<body style="background-image:url(https://i.ibb.co/jr4D0WN/head-bg-mobile.jpg); background-size: cover; background-attachment:fixed;">
<div id="myProgress">
  <div id="myBar"></div>
  </div>
<nav id="mynav" class="navbar navbar-inverse" style="background-color: #0e4130!important;">
  <div class="container-fluid">
  <div class="navbar-header">
  <div  style=" padding-right: 300px; padding-top: 17px; " class="navbar-brand" onclick="this.onclick=null; move() , window.location.href='<?php echo $_SERVER['HTTP_REFERER']; ?>'">
  <span class="glyphicon">&#xe091;</span>
</div>
  </div>
  </div>
  </nav>


<br>



<main>

<div class="page-section pt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card-page">
          <h5 class="fg-primary">About us</h5>
          <hr>
          <div style="font-size: 14px;">
          <p>At 4Muslims, we build a mobile app that offers comprehensive religious, lifestyle and community features to the Ummah, to continuously inspire them to be better individuals.</p>
          <p>4Muslims started as a mobile application with a simple idea: to provide accurate prayer times for our Ummah. Over time, we have grown with our user’s evolving needs, into a comprehensive mobile app that serves millions of users around the world. We are part of the Muslim community and we understand its challenges. The 4Muslims team includes individuals of diverse nationalities based in three geographies, but we are bonded by one passion: to solve the digital needs and challenges of our Ummah.</p>
          <!-- Video -->

          <p>Every individual grows in unique ways but, regardless of our backgrounds, all of us belong to the larger Muslim community that grows stronger and better together. The community is our most important asset.</p>
        </div>
        </div>


          </div>
        </div>
    
      
      </div>
      <div class="page-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 my-3 wow fadeInUp">
              <div class="card-page">
                <div class="row row-beam-md">
                  <div class="col-md-4 text-center py-3 py-md-2">
                    <p class="fg-primary fw-medium fs-vlarge">Location</p>
                    <p style="font-size: 15px;" class="mb-0">Egypt, Cairo Governorate</p>
                  </div>
                  <br>

                  <div class="col-md-4 text-center py-3 py-md-2">
                    <p class="fg-primary fw-medium fs-vlarge">Email</p>
                    <a style="font-size: 15px;"  class="mb-0">for-muslims@hotmail.com</a>
    
    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <br>
    
    </div>
  
    </div>


  
  </div>

  </main> <!-- .bg-light -->




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
        <div class="bottom-nav-link ">
        <i class="material-icons">&#xe8b8;</i>
          <span>Setting</span>
        </div>
      </div>
    </nav>
  </div>
</header>



<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/mobster.js"></script>

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