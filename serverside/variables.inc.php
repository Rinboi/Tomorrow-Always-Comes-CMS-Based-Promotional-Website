<?php

    include_once 'dbh.inc.php';

    $detailQuery = "SELECT * FROM school WHERE school_id=1;";
    //website settings
    $websiteName = "";
    $websiteAddress = "";
    $websiteContact = "";
    $websiteLogo = "";
    $websiteTitle = "";
    $websiteEmail = "";
    $websiteAbout = "";

    //ABOUT PAGE
    //game desc
    $gimg = "";
    $gtitle = "";
    $ginfo = "";
    //client desc
    $cimg = "";
    $ctitle = "";
    $cinfo = "";
    //dev info
    $igimg1 = "";
    $igname1 = "";
    $igtitle1 = "";
    $igemail1 = "";

    $igimg2 = "";
    $igname2 = "";
    $igtitle2 = "";
    $igemail2 = "";

    $igimg3 = "";
    $igname3 = "";
    $igtitle3 = "";
    $igemail3 = "";
    
    $igimg4 = "";
    $igname4 = "";
    $igtitle4 = "";
    $igemail4 = "";

    $igimg5 = "";
    $igname5 = "";
    $igtitle5 = "";
    $igemail5 = "";

    //GALLERY PAGE
    //characters
    $char1 = "";
    $char2 = "";
    $char3 = "";
    $char4 = "";
    $char5 = "";
    $char6 = "";
    //collectibles
    $img1 = "";
    $img2 = "";
    $img3 = "";
    $img4 = "";
    $img5 = "";
    $img6 = "";
    $img7 = "";
    $img8 = "";
    $img9 = "";
    $img10 = "";

    $name1 = "";
    $name2 = "";
    $name3 = "";
    $name4 = "";
    $name5 = "";
    $name6 = "";
    $name7 = "";
    $name8 = "";
    $name9 = "";
    $name10 = "";
    //video
    $video = "";
    //levels
    $lvl1 = "";
    $lvl2 = "";
    $lvl3 = "";
    $lvl4 = "";
    $lvl5 = "";
    $lvl6 = "";
    //storyboards
    $story1 = "";
    $story2 = "";
    $story3 = "";
    $story4 = "";

    $sname1 = "";
    $sname2 = "";
    $sname3 = "";
    $sname4 = "";

    if($result = mysqli_query($conn, $detailQuery)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $websiteName = $row['school_name'];
                $websiteAddress = $row['school_address'];
                $websiteContact = $row['contact_number'];
                $websiteLogo = $row['school_logo'];
                $websiteTitle = $row['game_title'];
                $websiteEmail = $row['game_email'];
                $websiteAbout = $row['aboutus_area'];
            }
        }
    }

    $collectibleQuery = "SELECT * FROM collectibles WHERE id=1;";
    if($result = mysqli_query($conn, $collectibleQuery)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $img1 = $row['img1'];
                $img2 = $row['img2'];
                $img3 = $row['img3'];
                $img4 = $row['img4'];
                $img5 = $row['img5'];
                $img6 = $row['img6'];
                $img7 = $row['img7'];
                $img8 = $row['img8'];
                $img9 = $row['img9'];
                $img10 = $row['img10'];
            }
        }
    }

    $collectibleNameQuery = "SELECT * FROM collectibles WHERE id=2;";
    if($result = mysqli_query($conn, $collectibleNameQuery)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $name1 = $row['img1'];
                $name2 = $row['img2'];
                $name3 = $row['img3'];
                $name4 = $row['img4'];
                $name5 = $row['img5'];
                $name6 = $row['img6'];
                $name7 = $row['img7'];
                $name8 = $row['img8'];
                $name9 = $row['img9'];
                $name10 = $row['img10'];
            }
        }
    }

    $videoQuery = "SELECT * FROM gallery_video WHERE id=1;";
    if($result = mysqli_query($conn, $videoQuery)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $video = $row['video'];
            }
        }
    }

    $levelQuery = "SELECT * FROM levels WHERE id=1;";
    if($result = mysqli_query($conn, $levelQuery)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $lvl1 = $row['level1'];
                $lvl2 = $row['level2'];
                $lvl3 = $row['level3'];
                $lvl4 = $row['level4'];
                $lvl5 = $row['level5'];
                $lvl6 = $row['level6'];
            }
        }
    }

    $characterQuery = "SELECT * FROM characters WHERE id=1;";
    if($result = mysqli_query($conn, $characterQuery)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $char1 = $row['chara1'];
                $char2 = $row['chara2'];
                $char3 = $row['chara3'];
                $char4 = $row['chara4'];
                $char5 = $row['chara5'];
                $char6 = $row['chara6'];
            }
        }
    }

    $storyQuery = "SELECT * FROM storyboards WHERE id=1;";
    if($result = mysqli_query($conn, $storyQuery)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $story1 = $row['board1'];
                $story2 = $row['board2'];
                $story3 = $row['board3'];
                $story4 = $row['board4'];
            }
        }
    }

    $storyNameQuery = "SELECT * FROM storyboards WHERE id=2;";
    if($result = mysqli_query($conn, $storyNameQuery)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $sname1 = $row['board1'];
                $sname2 = $row['board2'];
                $sname3 = $row['board3'];
                $sname4 = $row['board4'];
            }
        }
    }

    $gameQuery = "SELECT * FROM about_game WHERE id=1;";
    if($result = mysqli_query($conn, $gameQuery)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $gimg = $row['game_image'];
                $gtitle = $row['game_title'];
                $ginfo = $row['game_info'];
            }
        }
    }

    $clientQuery = "SELECT * FROM about_client WHERE id=1;";
    if($result = mysqli_query($conn, $clientQuery)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $cimg = $row['client_image'];
                $ctitle = $row['client_title'];
                $cinfo = $row['client_info'];
            }
        }
    }

        $devQuery = "SELECT * FROM about_developers WHERE id=1;";
        if($result = mysqli_query($conn, $devQuery)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                        $igimg1 = $row['dev_image'];
                        $igname1 = $row['dev_name'];
                        $igtitle1 = $row['dev_title'];
                        $igemail1 = $row['dev_email'];
                    }
                }
            }

        $devQuery = "SELECT * FROM about_developers WHERE id=2;";
        if($result = mysqli_query($conn, $devQuery)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $igimg2 = $row['dev_image'];
                    $igname2 = $row['dev_name'];
                    $igtitle2 = $row['dev_title'];
                    $igemail2 = $row['dev_email'];
                    }
                }
            }
        $devQuery = "SELECT * FROM about_developers WHERE id=3;";
        if($result = mysqli_query($conn, $devQuery)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                        $igimg3 = $row['dev_image'];
                        $igname3 = $row['dev_name'];
                        $igtitle3 = $row['dev_title'];
                        $igemail3 = $row['dev_email'];
                    }
                }
            }    
        $devQuery = "SELECT * FROM about_developers WHERE id=4;";
        if($result = mysqli_query($conn, $devQuery)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $igimg4 = $row['dev_image'];
                    $igname4 = $row['dev_name'];
                    $igtitle4 = $row['dev_title'];
                    $igemail4 = $row['dev_email'];
                    }
                }
            } 
            
        $devQuery = "SELECT * FROM about_developers WHERE id=5;";
        if($result = mysqli_query($conn, $devQuery)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                        $igimg5 = $row['dev_image'];
                        $igname5 = $row['dev_name'];
                        $igtitle5 = $row['dev_title'];
                        $igemail5 = $row['dev_email'];
                    }
                }
            }    