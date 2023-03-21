<?php
    session_start();
    include_once 'serverside/variables.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
.charSlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  font-family: 'The Nautigal', cursive;
  color: #f2f2f2;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  top: 490px;
  left: 250px;
  bottom: 8px;
  width: 50%;
  text-align: center;
}

/* Number text (1/10 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.charDot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 2.0s;
}

@keyframes fade {
  from {opacity: .2} 
  to {opacity: 2}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


/*storyboard script */
.sb_gallery {
  max-width: 1000px;
  position: static;
  margin: auto;
}
div.gallery {
  border: 1px solid #ccc;
  padding: 4px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  font-family: 'The Nautigal', cursive;
  font-size: 35px;
  padding: 15px;
  color: white;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 10px;
  float: center;
  width: 60%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}


/* chara gallery*/
* {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.character-container {
  position: relative;
  max-width: 1000px;
  margin: auto;
}
.level-container {
  position: relative;
  max-width: 1000px;
  margin: auto;
}

/* Hide the images by default */
.charSlides {
  display: none;
}
.levSlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}
.lcursor {
  cursor: pointer;
}

/* Number text (1/3 etc) */
.charnumbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.levnumbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  font-family: 'The Nautigal', cursive;
  font-size: 35px;
  text-align: center;
  padding: 10px;
  color: white;
  border-radius: 10px 10px 0 0;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(255,255,255, 0.3) 0px 18px 36px -18px inset;
}
.level-caption-container {
  font-family: 'The Nautigal', cursive;
  font-size: 35px;
  text-align: center;
  padding: 10px;
  color: white;
  border-radius: 10px 10px 0 0;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(255,255,255, 0.3) 0px 18px 36px -18px inset;
}

.row:after {
  content: "";
  display: table;
  clear: both;
  
}
.lrow:after {
  content: "";
  display: table;
  clear: both;
  
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
  
}
.lcolumn {
  float: left;
  width: 16.66%;
  
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
  max-width:230px;
  max-height:95px;
  width: auto;
  height: auto;
}
.levDemo {
  opacity: 0.6;
  max-width:230px;
  max-height:95px;
  width: auto;
  height: auto;
}

.char-active,
.demo:hover {
  opacity: 1;
}

.lev-active,
.levDemo:hover {
  opacity: 1;
}

.history .container{
    width: 1400px;
    margin: 0 auto;
}
.history .container .text_box h1{
  font-family: 'The Nautigal', cursive;
}



.slider {
  background: #111;
  width: 1280px;
  height: 620px;
  padding: 10px;
  margin-left: auto;
  margin-right: auto;
  position: relative;
  top: 10px;
  box-shadow: 0 30px 50px -20px black;
  overflow: hidden;
  border-radius: 55px;
}

.images {
  background: #444;
  width: 100%;
  height: 620px;
  transition: background .5s linear;
}

input[type='radio'] {
  -webkit-appearance: none;
  appearance: none;
  background-color: #444;
  background-size: 225px 70px;
  width: 190px;
  height: 70px;
  margin: 5px;
  margin-top: 260px;
  cursor: pointer;
  position: relative;
  float: left;
  top: 270px;
  border-radius: 55px;
  -webkit-filter: grayscale();
}
input[type='radio']:checked {
  content: '';
  border: solid 5px #ccc;
  box-shadow: none;
  -webkit-filter: none;
}

input[type='radio']:hover{
  border: solid 5px #fff;
  -webkit-filter: none;
  transform: scale(1.05);
  z-index: 9999;
}

.slide1 {
  background: url('./images/<?php echo $char1 ?>');
}

.slide2 {
  background: url('./images/<?php echo $char2 ?>');
}

.slide3 {
  background: url('./images/<?php echo $char3 ?>');
}

.slide4 {
  background: url('./images/<?php echo $char4 ?>');
}
.slide5 {
  background: url('./images/<?php echo $char5 ?>');
}
.slide6 {
  background: url('./images/<?php echo $char6 ?>');
}

.slide1:checked ~ .images {
  background: url('./images/<?php echo $char1 ?>');
}

.slide2:checked ~ .images {
  background: url('./images/<?php echo $char2 ?>');
}

.slide3:checked ~ .images {
  background: url('./images/<?php echo $char3 ?>');
}

.slide4:checked ~ .images {
  background: url('./images/<?php echo $char4 ?>');
}
.slide5:checked ~ .images {
  background: url('./images/<?php echo $char5 ?>');
}
.slide6:checked ~ .images {
  background: url('./images/<?php echo $char6 ?>');
}



.menu .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
    gap:.5rem;
}

.menu .box-container .box{
    padding:1rem;
    margin: 25px 12px 0 12px;
    text-align: center;
    border:var(--border);
    background:rgb(153, 128, 99);
    border-radius: 25px;
    box-shadow: 0 0 14px 0 rgba(0,0,0.80);
}

.menu .box-container .box img{
    height: 10rem;
}

.menu .box-container .box img:hover{
    transform: scale(1.8);
}

.menu .box-container .box h3{
    color: #000000;
    font-family: antonio bold;
    font-size: 1.4rem;
    padding:1rem 0;
}

.menu .box-container .box .collect{
    color: #000000;
    font-size: 1rem;
    font-family: antonio bold;
    padding:.5rem 0;
    font-style: italic;
}


.flipbookkk{
        margin-top: 15vh !important;
        margin-bottom: 5vh !important;

    }

    .frame{
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .flipbookkk-title{
        color: #ffa200;
        text-align: center;
        font-size: 5vw !important;
        font-family: "Poppins", Sans-serif;
        font-weight: 900;
        line-height: 75px;
       text-shadow: 1px 3px 0px #373737;
    }

    @media(min-width: 768px){
        .flipbookkk-title{
        font-size: 2.5vw !important;
    }

    }



    .about-section{
    background: url('./images/level.png') no-repeat left;
    background-size: 45%;
    overflow: hidden;
    padding: 100px 0;
}

.inner-container{
    width: 63%;
    float: right;
    background: hsla(0, 0%, 100%, .25) border-box;
    border-radius: 25px;
    box-shadow: 0 0 14px 0 rgba(0,0,0.80);
    padding: 75px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(10rem, 1fr));
    gap:2rem;
    margin-top: 100px;
}

.inner-container img{
   width: 100%;
   margin: 25px 15px 0 15px;
   border-radius: 18px;
}

.inner-container img:hover{
  transform: scale(2.5);
  margin-left: -100px;
  border-radius: 0px;
  -webkit-filter: grayscale(45%);
  box-shadow: 0 0 14px 0 rgba(0,0,0.80);
}

@media screen and (max-width:1200px){
    .inner-container{
        padding: 80px;
    }
}

@media screen and (max-width:1000px){
    .about-section{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-container{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about-section{
        padding: 0;
    }
    .inner-container{
        padding: 60px;
    }
}

.about .row{
    display: flex;
    align-items: center;
    justify-content: space-between;
    background:var(--black);
    flex-wrap: wrap;
    margin-top: -55px;
    box-shadow: 0 0 14px 0 rgba(0,0,0.80);
}

.about .row .image{
    flex:1 1 45rem;
}

.about .row .image img{
    width: 15%;
    border-radius: 32px;
}
.about .row .content{
    flex:1 1 45rem;
    padding:2rem;
}

.about .row .content h3{
    font-size: 2rem;
    color:#fff;
}

.about .row .content p{
    font-size: 1rem;
    color:#ccc;
    padding:1rem 0;
    line-height: 1.8;
    text-align: justify;
}



    .hero {
  overflow: hidden;
  height: 630px;
  margin-left: 100px;
  margin-right: 100px;
  display: block;
  border-radius: 15px;
  box-shadow: 0 0 14px 0 rgba(0,0,0.80);
}
.video-hero {
  padding: calc(10% + 40px) 0;
  background: #444 url(https://c.radikal.ru/c06/1809/60/ed3ac1815a4b.png);
  position: relative;
  height: 630px;
  border-radius: 15px;
}
.about-title {
  font-family: antonio bold;
  font-size: 70px;
  text-align: center;
  position: relative;
  opacity: 0.1;
  margin-left: auto;
  margin-right: auto;
  display: block;
}
.about-title a {
  text-decoration: none;
  color: #fff;
}
/* VIDEO */
.video-hero .video {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 0;
  width: 100%;
  transform: translate(-50%, -50%);
  opacity: 0.5;
}

@media (max-width: 768px) {
  .video-hero {
    padding: calc(10% + 40px) 0;
  }
}
@media (max-width: 480px) {
  .about-title {
    font-size: 40px;
  }
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $websiteTitle; ?> - Faculty</title>
    <link rel="icon" href="images/<?php echo $websiteLogo; ?>">
    <!-- Styles -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/about.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=The+Nautigal:wght@700&display=swap" rel="stylesheet">
</head>
<body>
 
    <?php
        include_once "layouts/header.php";
    ?><br><br>


<section class="hero">
  <div class="video-hero">
  <video class="video" loop="loop" autoplay="">
    <source src="#" type="video/mp4" />
    <source src="#" type="video/ogv" />
    <source src="./images/<?php echo $video ?>" type="video/webm" />
  </video>
    </div>
</section>

   <!-- <div class="history">
        <div class="container">
            <div class="box text_box"><br><br>
            <h1>Tomorrow Always Comes</h1> is a single-player walking simulator game that explores the
            life of Stephen, the main character, as he faces daily struggles and challenges that a fresh
            graduate encounters. Solve puzzles and complete tasks as you go through his memories from the
            past and help him grow as a person in the near present.
            </div>
        </div>
    </div>-->

    <div class="admin_dashboard_header">
        <div class="container">
            <h2>CHARACTERS GALLERY</h2>
        </div>
    </div>
    <div class='slider'>
  <input checked='' class='slide1' name='thumbnail' type='radio' />
  <input class='slide2' name='thumbnail' type='radio' />
  <input class='slide3' name='thumbnail' type='radio' />
  <input class='slide4' name='thumbnail' type='radio' />
  <input class='slide5' name='thumbnail' type='radio' />
  <input class='slide6' name='thumbnail' type='radio' />
  <div class='images'></div>
</div>


<div class="admin_dashboard_header">
        <div class="container">
            <h2>COLLECTIBLES</h2>
        </div>
    </div>
<section class="menu" id="menu">
    <div class="box-container">
        <div class="box">
            <img src="./images/<?php echo $img1 ?>" alt="">
            <h3><?php echo $name1 ?></h3> 
            <div class="collect"></div>
        </div>
        <div class="box">
            <img src="./images/<?php echo $img2 ?>" alt="">
            <h3><?php echo $name2 ?></h3> 
            <div class="collect"></div>
        </div>
        <div class="box">
            <img src="./images/<?php echo $img3 ?>" alt="">
            <h3><?php echo $name3 ?></h3> 
            <div class="collect"></div>
        </div>
        <div class="box">
            <img src="./images/<?php echo $img4 ?>" alt="">
            <h3><?php echo $name4 ?></h3> 
            <div class="collect"></div>
        </div>
        <div class="box">
            <img src="./images/<?php echo $img5 ?>" alt="">
            <h3><?php echo $name5 ?></h3> 
            <div class="collect"></div>
        </div>
        <div class="box">
            <img src="./images/<?php echo $img6 ?>" alt="">
            <h3><?php echo $name6 ?></h3> 
            <div class="collect"></div>
        </div>
        <div class="box">
            <img src="./images/<?php echo $img7 ?>" alt="">
            <h3><?php echo $name7 ?></h3> 
            <div class="collect"></div>
        </div>
        <div class="box">
            <img src="./images/<?php echo $img8 ?>" alt="">
            <h3><?php echo $name8 ?></h3> 
            <div class="collect"></div>
        </div>
        <div class="box">
            <img src="./images/<?php echo $img9 ?>" alt="">
            <h3><?php echo $name9 ?></h3> 
            <div class="collect"></div>
        </div>
        <div class="box">
            <img src="./images/<?php echo $img10 ?>" alt="">
            <h3><?php echo $name10 ?></h3> 
            <div class="collect"></div>
        </div>

        
    </div>
</section>


<div class="about-section">
  <div class="inner-container">
 <img src="./images/<?php echo $lvl1 ?>">
 <img src="./images/<?php echo $lvl2 ?>">
 <img src="./images/<?php echo $lvl3 ?>">
 <img src="./images/<?php echo $lvl4 ?>">
 <img src="./images/<?php echo $lvl5 ?>">
 <img src="./images/<?php echo $lvl6  ?>">
  </div>
</div>

<!-- HTML CODE IF ADMIN IS LOGGED IN -->
    <div class="admin_dashboard_header">
        <div class="container">
            <h2>STORYBOARDS</h2>
        </div>
    </div>
    <br>


<div class="sb_gallery" align='center'>
        <div class="responsive">
        <div class="gallery">
            <a target="_blank">
            <img src="images/<?php echo $story1  ?>" alt="storyboard1" width="600" height="400">
            </a>
            <div class="desc"><?php echo $sname1 ?></div>
        </div>
        </div>


        <div class="responsive">
        <div class="gallery">
            <a target="_blank">
            <img src="images/<?php echo $story2  ?>" alt="sortyboard2" width="600" height="400">
            </a>
            <div class="desc"><?php echo $sname2 ?></div>
        </div>
        </div>

        
        <div class="responsive">
        <div class="gallery">
            <a target="_blank">
            <img src="images/<?php echo $story3  ?>" alt="sortyboard3" width="600" height="400">
            </a>
            <div class="desc"><?php echo $sname3 ?></div>
        </div>
        </div>

        <div class="responsive">
        <div class="gallery">
            <a target="_blank">
            <img src="images/<?php echo $story4  ?>" alt="sortyboard3" width="600" height="400">
            </a>
            <div class="desc"><?php echo $sname4 ?></div>
        </div>
        </div>
</div>      
<br>
    <?php
        include_once "layouts/footer.php";
    ?>
  
    <script src="app.js"></script> 

</body>
</html>

