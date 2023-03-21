<?php
    session_start();
    include_once 'serverside/variables.inc.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $websiteTitle; ?> - Facilities</title>
    <link rel="icon" href="images/<?php echo $websiteLogo; ?>">
    <!-- Styles -->
    <link rel="stylesheet" href="styles/mainn.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/registration.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=The+Nautigal:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
  <script type="text/javascript">
  function clean(e){

    var textfield = document.getElementById(e);
    var regex = [/fuck/gi, /ass/gi, /anal/gi, /bitch/gi, /blowjob/gi, /boob/gi, /chink/gi, /clit/gi,
    /cock/gi, /cum/gi, /cunt/gi, /dick/gi, /dildo/gi, /ejaculat/gi, /fag/gi, /gay/gi, /hitler/gi,
    /horny/gi, /masturbat/gi, /molest/gi, /mothaf/gi, /motherf/gi, /negro/gi, /nigg/gi, /nigger/gi, /nazi/gi, 
    /nipp/gi, /niglet/gi, /orgy/gi, /orgasm/gi, /osama/gi, /pansy/gi, /pansies/gi, /panties/gi, 
    /poop/gi, /penis/gi, /pimp/gi, /piss/gi, /porn/gi, /prick/gi, /pussy/gi, /pubic/gi, /queef/gi,
    /queer/gi, /rape/gi, /retard/gi, /scat/gi, /schlong/gi, /sex/gi, /sissy/gi, /skank/gi, /slut/gi,
    /snigg/gi, /stupid/gi, /suicide/gi, /tits/gi, /titt/gi, /vagina/gi, /turd/gi, /twat/gi, /twink/gi,
    /wank/gi, /whore/gi, /puta/gi, /tanga/gi, /tangina/gi, /gago/gi, /pakyu/gi, /ulol/gi, /inutil/gi,
    /tarantado/gi, /tae/gi, /tite/gi, /titi/gi, /pepe/gi, /pek/gi, /kantot/gi, /kantut/gi, /puki/gi,
    /puki/gi, /punyeta/gi, /shit/gi, /shet/gi, /bobo/gi, /kupal/gi, /burat/gi];
    for(var i=0; i<=regex.length; i++ )
    textfield.value = textfield.value.replace(regex[i], "****");
}
</script>

<style>
#events{
  margin-top: 0px;
}
#forum{
  margin-top: 0px;
}
</style>
</head>
<body>
    <?php
        include_once "layouts/header.php";
    ?>
    <div id="events">
        <div class="container">
            <h2>Ratings and Reviews
            <?php 

                    echo "  <form method='GET' action='compose_post.php'>
                                <button class='delete-button' name='announcements' type='submit'>Write a Review ✒️</button>
                            </form>";

            ?> </h2>

            <?php
                $newsQuery = "SELECT * FROM announcements ORDER BY announcement_id DESC LIMIT 3;";
                if($result = mysqli_query($conn, $newsQuery)){
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){

                            $announcementTitle = $row['announcement_title'];
                            $announcementContent = $row['announcement_content'];
                            $announcementDate = $row['announcement_date'];
                            $announcementTime = $row['announcement_time'];
                            $announcementAuthor = $row['announcement_author'];
                            $announcementRating = $row['announcement_rating'];
                            $id = $row['announcement_id'];

                            $cuttedContent = substr($announcementContent, 0, 70)."...";

                            echo "
                            <div class='news'>
                            <h3><a href='post.php?id=$id&type=announcements'>$announcementTitle</a></h3>
                                <span class='news-date'>$announcementDate | $announcementTime</span><br>
                                <span class='news-date'>Rating: $announcementRating/5</span>
                                <p>$cuttedContent</p> 
                            ";    

                            if(isset($_SESSION['admin_logged_in'])){
                                echo "<form method='POST' action='serverside/delete_post.inc.php' class='crud'>
                                <input type='text' name='ID' value='$id' style='display:none'>
                                <input class='delete-button' type='submit' name='delete_announcement' value='Delete Post'>
                                </form>
                                
                                ";   
                            }
                            
                            echo "
                            </div>";
                        }

                        echo "  <div class='view_all'>
                                    <h3><a href='news.php?type=announcements'>View All</a></h3>
                                </div>";
                    }
                    else{
                        echo "
                        <div class='news'>
                            <h3>No Available Reviews</h3>
                        </div>
                        ";  
                    }
                }
            ?> 

        </div>
        
    </div>
    <div id="forum">
      <div id="ReplyModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
        	<div class="form-group">
        	  <label for="usr">Write your name:</label>
        	  <input type="text" class="form-control" name="Rname" id="Rname" onkeyup="clean('Rname')"  onkeydown="clean('Rname')" required>
        	</div>
            <div class="form-group">
              <label for="comment">Write your reply:</label>
              <textarea class="form-control" rows="5" name="Rmsg" id="Rmsg" onkeyup="clean('Rmsg')"  onkeydown="clean('Rmsg')" required></textarea>
            </div>
        	 <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
      </form>
      </div>
    </div>

  </div>
</div>
<div class="container">

<div class="panel panel-default" style="margin-top:50px">
  <div class="panel-body">
    <h3>Forum Section</h3>
    <hr>
    <form name="frm" method="post">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
	<div class="form-group">
	  <label for="usr">Write your name:</label>
	  <input type="text" class="form-control" name="name" id="name" onkeyup="clean('name')"  onkeydown="clean('name')" required>
	</div>
    <div class="form-group">
      <label for="comment">Write your comment:</label>
      <textarea class="form-control" rows="5" name="msg" id="msg" onkeyup="clean('msg')"  onkeydown="clean('msg')" required></textarea>
    </div>
	 <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
  </form>
  </div>
</div>
  

<div class="panel panel-default">
  <div class="panel-body">
    <h4>Recent questions</h4>           
	<table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
	  <tbody id="record">
		
	  </tbody>
	</table>
  </div>
</div>
</div>
</div>

    

    <?php
        include_once "layouts/footer.php";
    ?>

</body>
</html>

