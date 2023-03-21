<?php
    session_start();
    include_once 'serverside/variables.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $websiteTitle; ?> - Home</title>
    <link rel="icon" href="images/<?php echo $websiteLogo; ?>">
    <!-- Styles -->
    <link rel="stylesheet" href="styles/mainn.css">
    <link rel="stylesheet" href="styles/footer.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=The+Nautigal:wght@700&display=swap" rel="stylesheet">
    <style>
        #page-preloader {
  position: fixed;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  background: #ffffff;
  z-index: 100500;
}
#events{
  margin-top: 0px;
  margin-bottom: 0px;
}
#page-preloader .spinner {
  margin-right: auto;
  margin-left: auto;
  display: block;
  margin-top: 20%;
  width: 10%;
  z-index: 10000; 
  animation: 3s infinite alternate shadow;
}

@keyframes floating {
    0% {
      transform: translatey(0px);
    }
    50% {
      transform: translatey(-10px);
    }
    100% {
      transform: translatey(0px);
    }
  }
  @keyframes shadow {
    0% {
      width:180px;
    }
    50% {
      width:150px;
    }
    100% {
      width:180px;
    }
  }
    </style>
</head>
<body>


<div class="head" id="animation">
<?php
        include_once "layouts/header.php";
    ?>
  <div class="wrapper">
    <div class="half right">
      <div class="padding">
      </div>
    </div>
    <div class="half left">
    <div class="padding">
        <h2 class="title-head">Tomorrow Always <span>Comes</span></h2>
        <p class="descp-head"><span>“</span> Whatever you lose, you'll find it again.<span>”</span> </p>
        <div class="space"></div>
       <p class="resume"><a class="button button-explore" href="#updates">View Updates</a>
       <a class="button button-explore" href="gallery.php">Explore Now</a></p>
      </div>
    </div>
  </div>
</div>


            <!-- <div class="social-media">
                <h3>Like us on facebook</h3>
                <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100087196065215" data-height="127" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/feueac" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/feueac">FEU Institute of Technology</a></blockquote></div>
                <h3>Our Location</h3>
                <div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=FEU%20Institute%20of%20Technology&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net"></a></div><style>.mapouter{text-align:right;height:300px;width:300px;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:300px;}</style>Google Maps by <a href="https://www.embedgooglemap.net" rel="nofollow" target="_blank">Embedgooglemap.net</a></div>
            </div>
        </div>-->


    <div id="events">
        <div class="container" id="updates">
            <h2>Updates <?php 
            if(isset($_SESSION['admin_logged_in'])){
                echo "  <form method='GET' action='compose_content.php'>
                            <button name='news' type='submit'>Compose Update</button>
                        </form>";
            }
            ?> </h2>

            <?php
                $newsQuery = "SELECT * FROM news ORDER BY news_id DESC LIMIT 3;";
                if($result = mysqli_query($conn, $newsQuery)){
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){

                            $newsTitle = $row['news_title'];
                            $newsContent = $row['news_content'];
                            $newsDate = $row['news_date'];
                            $newsTime = $row['news_time'];
                            $newsAuthor = $row['news_author'];
                            $id = $row['news_id'];

                            $cuttedContent = substr($newsContent, 0, 70)."...";

                            echo "
                            <div class='news'>
                                <h3><a href='post.php?id=$id&type=news'>$newsTitle</a></h3>
                                <span class='news-date'>$newsDate | $newsTime</span>
                                <p>$cuttedContent</p> 
                            ";    

                            if(isset($_SESSION['admin_logged_in'])){
                                echo "<form method='POST' action='serverside/delete_post.inc.php' class='crud'>
                                <input type='text' name='ID' value='$id' style='display:none'>
                                <input type='submit' class='delete-button' name='delete_news' value='Delete Post'>
                                </form>
                                <form method='GET' action='compose_content.php' class='crud'>
                                <input type='text' name='ID' value='$id' style='display:none'>
                                <input type='submit' class='delete-button' name='edit_news' value='Edit Post'>
                                </form>";   
                            }
                            
                            echo "
                            </div>";
                        }

                        echo "  <div class='view_all'>
                                    <h3><a href='news.php?type=events'>View All Updates</a></h3>
                                </div>";
                    }
                    else{
                        echo "
                        <div class='news'>
                            <h3>No Available Updates</h3>
                        </div>
                        ";  
                    }
                }
            ?> 
        </div>
        
    </div>

    <div id="page-preloader">
   <img src="images/homescreen.png" class="spinner">
</div> 

    <?php
        include_once "layouts/footer.php";
    ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
      $(window).on('load', function () {
    var $preloader = $('#page-preloader'),
      $spinner   = $preloader.find('.spinner');
    $spinner.delay(85000).fadeOut();
    $preloader.delay(5500).fadeOut('slow');
    });
 </script>
</body>
</html>

