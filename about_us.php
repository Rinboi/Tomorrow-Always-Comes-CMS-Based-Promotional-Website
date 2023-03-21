<?php
    session_start();
    include_once 'serverside/variables.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>

:root{
    --main-color:#d3ad7f;
    --black:#13131a;
    --bg:#010103;
    --border:.1rem solid rgba(255,255,255,.3);
}

.local_container {
  padding: 50px;
  text-align: left;
  color: white;
}
.column {
    
    float: left;
  width: 33.33%;
  padding: 10px;
  margin-bottom: 16px;
}
.column2 {

float: left;
width: 50%;
padding: 80px;
padding-top: 20px;  
margin-bottom: 16px;
}

.skills > span{
    color: #ffffff !important;
}


.card {
    height: 250px;
  width: 500px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 4px;
  align-self: center;
}

.card img{
    padding: 5px;
}

.container {
    
  padding: 10px;
}
.containertext{
    padding-left: 10px;
    height: 250px;
  width: 350px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}


@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

section{
    padding:8rem 2%;
    margin-top: 7rem;
}

.btn{
    font-size: 15px;
    color: #000000;
}

.heading{
    margin-top: 1rem;
    font-size: 1.5rem;
    margin-left: 1rem;
    font-weight: 800;
    color: #ffffff;
}

.featured .featured-slider{
  background-color: transparent;
  padding: 0 5rem 0 0.5rem;
  border-radius: 15px;
  margin-top: -175px;
}

.featured .featured-slider .box{
    margin:1rem 0;
    position: relative;
    overflow: hidden;
    border-radius: 45px;
    text-align: center;
    box-shadow: 0 14px 0 0 rgba(0,0,0.10);
}

.featured .featured-slider .box .image img{
    height: 15rem;
    width: 100%;
}

.featured .featured-slider .box .image img:hover{
    transform: scale(1.1);
}

.featured .featured-slider .box .icons a:hover{
    color:#fff;
}

.featured .featured-slider .box .content{
    background: #ffffff;
    padding:1rem;
}

.featured .featured-slider .box .content h3{
    font-size: 1.1rem;
    font-family:'Montserrat', sans-serif;
}

.title {
  color:#000000;
  font-weight: 455;
  line-height: 27px;
  font-size: 14px;
}

span{
    color:blue;
    font-size: 14px;
    font-weight: 800;
}

.swiper-button-next,
.swiper-button-prev{
    height:4rem;
    width:3rem;
}

.swiper-button-next::after,
.swiper-button-prev::after{
    font-size: 2rem;
}

.swiper-button-next:hover,
.swiper-button-prev:hover{
    color:#fff;
}


.about-section{
    background: url('./images/<?php echo $gimg ?>') no-repeat left;
    background-size: 55%;
    overflow: hidden;
    padding: 100px 0;
}

.inner-container{
    width: 55%;
    float: right;
    background: hsla(0, 0%, 100%, .25) border-box;
    border-radius: 25px;
    box-shadow: 0 0 14px 0 rgba(0,0,0.80);
    padding: 150px;
}

.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
    color: #ffffff;
}

.text{
    font-size: 13px;
    color: #ffffff;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

.skills{
    display: flex;
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
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

.typing-demo {
  width: 22ch;
  animation: typing 2.5s steps(22), blink .5s step-end infinite alternate;
  white-space: nowrap;
  overflow: hidden;
  border-right: 3px solid;
  font-family: monospace;
  font-size: 2em;
}

@keyframes typing {
  from {
    width: 0
  }
}
    
@keyframes blink {
  50% {
    border-color: transparent
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


</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $websiteTitle; ?> - About Us</title>
    <link rel="icon" href="images/<?php echo $websiteLogo; ?>">
    <!-- Styles -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/about.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=The+Nautigal:wght@700&display=swap" rel="stylesheet">

</head>
<body>
 
    <?php
        include_once "layouts/header.php";
    ?>

<div class="about-section">
  <div class="inner-container">
    <h1 class="typing-demo"><?php echo $gtitle ?></h1>
    <p class="text">
    <?php echo $ginfo    ?>
    </p>
    <div class="skills">
      <span>学生</span>
      <span>プログラマー</span>
      <span>カレッジ</span>
    </div>
  </div>
</div>

    <section class="about" id="about">
    <div class="row">
        <div class="image">
            <img src="./images/<?php echo $cimg ?>" alt="">
        </div>
        <div class="content">
            <h3><?php echo $ctitle ?></h3>
            <?php echo $cinfo ?>
        </div>
    </div>
</section>

    <section class="featured" id="featured">
    <div class="swiper featured-slider">
        <h1 class="heading">⚔️INGENIOUS GENIUSES</h1>
        <div class="swiper-wrapper">
  
            <div class="swiper-slide box">
                <div class="image">
                    <img src="./images/<?php echo $igimg1?>" alt="waiting to load images">
                </div>
                <div class="content">
                <h3>⚜️<?php echo $igname1 ?></h3>
                <p class="title"><?php echo $igtitle1 ?>r</p>
                <span><i class="fa fa-envelope"></i> <?php echo $igemail1?></span>
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="./images/<?php echo $igimg2 ?>" alt="waiting to load images">
                </div>
                <div class="content">
                <h3>🐲<?php echo $igname2 ?></h3>
                <p class="title"><?php echo $igtitle2 ?></p>
                <span><i class="fa fa-envelope"></i> <?php echo $igemail2 ?></span>
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="./images/<?php echo $igimg3 ?>" alt="waiting to load images">
                </div>
                <div class="content">
                <h3>🤺<?php echo $igname3 ?></h3>
                <p class="title"><?php echo $igtitle3 ?></p>
                <span><i class="fa fa-envelope"></i><?php echo $igemail3 ?></span>
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="./images/<?php echo $igimg4 ?>" alt="waiting to load images">
                </div>
                <div class="content">
                <h3>🔰<?php echo $igname4 ?></h3>
                <p class="title"><?php echo $igtitle4 ?></p>
                <span><i class="fa fa-envelope"></i> <?php echo $igemail4 ?></span>
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="./images/<?php echo $igimg5 ?>" alt="waiting to load images">
                </div>
                <div class="content">
                <h3>🔥<?php echo $igname5 ?></h3>
                <p class="title"><?php echo $igtitle5 ?></p>
                <span><i class="fa fa-envelope"></i> <?php echo $igemail5 ?></span>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
  </section>
    
    <?php
        include_once "layouts/footer.php";
    ?>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="app.js"></script>
</body>
</html>

