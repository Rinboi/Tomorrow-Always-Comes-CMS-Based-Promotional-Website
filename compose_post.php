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
    <title><?php echo $websiteTitle; ?> - Compose </title>
    <link rel="icon" href="images/<?php echo $websiteLogo; ?>">
    <!-- Styles -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/footer.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=The+Nautigal:wght@700&display=swap" rel="stylesheet">

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




</head>
<body>
 
    <?php
        include_once "layouts/header.php";
    ?>

<?php

    ?>

        <!-- HTML CODE IF ADMIN IS LOGGED IN -->

        <div class="admin_dashboard_header">
            <div class="container">
                <?php
                    $title = "";
                    $author = "";
                    $content = "";
                    $image = "";
                    $rating = "1";

                    if(isset($_GET['news'])){
                        echo "<h2>Compose Event</h2>";
                    }
                    else if(isset($_GET['announcements'])){
                        echo "<h2>Compose Review</h2>";
                    }
                    else if(isset($_GET['edit_news'])){
                        echo "<h2>Edit Event</h2>";
                    }
                    else if(isset($_GET['edit_announcement'])){
                        echo "<h2>Edit Review</h2>";
                    }
                    else{
                        echo "<h2>Please return to <a href='index.php'>Home Page</a>";
                    }
                ?>
            </div>
        </div>

        <div class="composition_interface">
            <div class="container">
                <form method="POST" action="serverside/upload_event_announcement.inc.php" enctype="multipart/form-data">
                    
                    <?php
                        if(isset($_GET['edit_news'])){
                            include_once 'serverside/dbh.inc.php';
                            $id = mysqli_real_escape_string($conn,$_GET['ID']);

                            echo "<input type='text' name='id' value='$id' style='display:none'>";

                            $sql = "SELECT * FROM news WHERE news_id=$id;";

                            if($result = mysqli_query($conn, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        $title = $row['news_title'];
                                        $author = $row['news_author'];
                                        $content = $row['news_content'];
                                        $image = $row['image'];
                                    }
                                }
                            }
                            else{
                                header("Location: index.php?database=error");
                                exit();
                            }
                        }
                        else if(isset($_GET['edit_announcement'])){
                            include_once 'serverside/dbh.inc.php';
                            $id = mysqli_real_escape_string($conn,$_GET['ID']);
                            echo "<input type='text' name='id' value='$id' style='display:none'>";
                            $sql = "SELECT * FROM announcements WHERE announcement_id=$id;";

                            if($result = mysqli_query($conn, $sql)){
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        $title = $row['announcement_title'];
                                        $author = $row['announcement_author'];
                                        $content = $row['announcement_content'];
                                        $image = $row['image'];
                                    }
                                }
                            }
                            else{
                                header("Location: index.php?database=error");
                                exit();
                            }
                        }
                    ?>

                    <table>
                        <tr>
                            <td style="color: #fff">
                                Image: 
                            </td>
                            <td>
                                <img src="images/<?php
                                    if($image != "" || $image != null){
                                        echo $image;
                                    }
                                    else{
                                        echo "placeholder-image.png";
                                    }
                                ?>" id="blah" alt="LOGO" class='upload_images'>
                                <input type="file" onchange="readURL(this)" name="file"> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="compose_description"style="color: #fff">Subject: </span>
                            </td>
                            <td>
                                <input type="text" placeholder="Subject" name="title" id ="title" onkeyup="clean('title')"  onkeydown="clean('title')"value="<?php echo $title;?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="compose_description"style="color: #fff">Author: </span>
                            </td>
                            <td>
                                <input type="text" placeholder="Author" name="author" id="author" onkeyup="clean('author')"  onkeydown="clean('author')" value="<?php echo $author;?>" required>
                            </td>
                        </tr>  
                    </table>
                            <div class="rate">
                                <input type="radio" id="star5" name="rate" value="5" <?php echo ($rating=5)?>>
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" id="star4" name="rate" value="4" <?php echo ($rating=4)?>>
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" name="rate" value="3" <?php echo ($rating=3)?>>
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" name="rate" value="2" <?php echo ($rating=2)?>>
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" name="rate" value="1" checked <?php echo ($rating=1)?>>
                                <label for="star1" title="text">1 star</label>
                            </div>
                    <textarea name="content" id="content" onkeyup="clean('content')"  onkeydown="clean('content')" cols="30" rows="10"><?php echo $content;?></textarea>
                    <?php
                        if(isset($_GET['news'])){
                            echo '<input type="submit" name="events_submit" value="POST UPDATE">';
                        }
                        else if(isset($_GET['announcements'])){
                            echo '<input type="submit" name="announcement_submit" value="POST REVIEW">';
                        }
                        else if(isset($_GET['edit_news'])){
                            echo '<input type="submit" name="events_edit" value="EDIT UPDATE">';
                        }
                        else if(isset($_GET['edit_announcement'])){
                            echo '<input type="submit" name="announcement_edit" value="EDIT REVIEW">';
                        }
                    ?>
                    
                </form>    
            </div>
        </div>


    <?php
    ?>

    <?php
        include_once "layouts/footer.php";
    ?>

    <script>
        
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {

                    document.getElementById("blah").setAttribute("src", e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</body>
</html>