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
    <title><?php echo $websiteTitle; ?> - Admin Dashboard</title>
    <link rel="icon" href="images/<?php echo $websiteLogo; ?>">
    <!-- Styles -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/footer.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=The+Nautigal:wght@700&display=swap" rel="stylesheet">
</head>
<body>
 
    <?php
        include_once "layouts/header.php";
    ?>

    <?php
        if(isset($_SESSION['admin_logged_in'])){

    ?>

        <!-- HTML CODE IF ADMIN IS LOGGED IN -->
        <div class="admin_dashboard_header">
            <div class="container">
                <h2>Admin Dashboard</h2>
            </div>
        </div>
        
        <div class="admin_dashboard_content">
            <div class="container">
                <h3>Admin Settings</h3>
            </div>
            <div class="container">
                <form action="serverside/change_admin.inc.php" method="POST">

                    <?php
                        if ( isset( $_GET['admin'] ) && !empty( $_GET['admin'] ) ){
                            switch($_GET['admin']){
                                case "password_too_short":
                                    echo "  <div class='warning_message_small'>
                                                <img src='images/warning_symbol.png' alt='Warning Symbol'>
                                                <h4>Warning: Password is too short.</h4>
                                            </div>
                                        ";
                                break;
                                case "passwords_doesnt_match":
                                    echo "  <div class='warning_message_small'>
                                                <img src='images/warning_symbol.png' alt='Warning Symbol'>
                                                <h4>Warning: Password does not match.</h4>
                                            </div>
                                        ";
                                break;
                                case "invalid_characters":
                                echo "  <div class='warning_message_small'>
                                            <img src='images/warning_symbol.png' alt='Warning Symbol'>
                                            <h4>Warning: Ivalid characters were used.</h4>
                                        </div>
                                        ";
                                break;
                                case "incorrect_info":
                                echo "  <div class='warning_message_small'>
                                            <img src='images/warning_symbol.png' alt='Warning Symbol'>
                                            <h4>Warning: Incorrect Admin Credentials.</h4>
                                        </div>
                                    ";
                                break;
                                case "empty":
                                echo "  <div class='warning_message_small'>
                                            <img src='images/warning_symbol.png' alt='Warning Symbol'>
                                            <h4>Warning: Fill out all the fields.</h4>
                                        </div>
                                    ";
                                break;
                                default:
                                break;
                            }
                        }
                    ?>
                            
                    <table>
                        <tr>
                            <th colspan="2">Change Admin Credentials</th>
                        </tr>
                        <tr>
                            <td>Current Username: </td>
                            <td><input type="text" name="username_old"></td>
                        </tr>   
                        <tr>
                            <td>Current Password: </td>
                            <td><input type="password" name="password_old"></td>
                        </tr>
                        <tr>
                            <td>New Username: </td>
                            <td><input type="text" name="username_new"></td>
                        </tr>
                        <tr>
                            <td>New Password: </td>
                            <td><input type="password" name="password_new"></td>
                        </tr>
                        <tr>
                            <td>Confirm New Password: </td>
                            <td><input type="password" name="password_new_confirm"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="Save Changes"></td>
                            <td><input type="submit" name="restore_to_default" value="Reset to Default"></td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="container">
                <h3>Website Settings</h3>
            </div>

            <div class="container">
                <form action="serverside/update_website_info.php" method="POST" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <th colspan="2">Website and Contact Information</th>
                        </tr>
                        <tr>
                            <td>Website Logo: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="file"><img src="images/<?php echo $websiteLogo; ?>" id="blah" width=50 height=50></td>
                        </tr>
                        <tr>
                            <td>Location: </td>
                            <td><input type="text" name="school_name" value="<?php echo $websiteName; ?>"></td>
                        </tr>   
                        <tr>
                            <td>Address: </td>
                            <td><input type="text" name="school_address" value="<?php echo $websiteAddress; ?>"></td>
                        </tr>
                        <tr>
                            <td>Contact Number: </td>
                            <td><input type="text" name="school_contact" value="<?php echo $websiteContact; ?>"></td>
                        </tr>
                        <tr>
                            <td>Website Name: </td>
                            <td><input type="text" name="game_title" value="<?php echo $websiteTitle; ?>"></td>
                        </tr>
                        <tr>
                            <td>Developer's Email: </td>
                            <td><input type="text" name="game_email" value="<?php echo $websiteEmail; ?>"></td>
                        </tr>
                        <tr>
                            <td>About Us: </td>
                            <td><textarea name="aboutus_area" id="" cols="60" rows="10"><?php echo $websiteAbout; ?></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" name="submit" value="Save Changes"></td>
                        </tr>
                    </table>
                </form>
            </div>


            <div class="container">
                <h3>About Settings</h3>
            </div>

            <div class="container">
                <form action="serverside/update_about.php" method="POST" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <th colspan="4">Game Description</th>
                        </tr>
                        <tr>
                            <td>Game Image: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="gimg"><img src="images/<?php echo $gimg; ?>" id="blah" width=50 height=50></td>
                        </tr>
                        <tr>
                            <td>Game Title: </td>
                            <td><input type="text" name="gtitle" value="<?php echo $gtitle; ?>"></td>
                        </tr>
                        <tr>
                            <td>Game Information: </td>
                            <td><textarea name="ginfo" id="" cols="60" rows="10"><?php echo $ginfo; ?></textarea></td>
                            <td colspan="2"><input type="submit" name="gsubmit" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <th colspan="4">Client Description</th>
                        </tr>
                        <tr>
                            <td>Client Image: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="cimg"><img src="images/<?php echo $cimg; ?>" id="blah" width=50 height=50></td>
                        </tr>
                        <tr>
                            <td>Client Title: </td>
                            <td><input type="text" name="ctitle" value="<?php echo $ctitle; ?>"></td>
                        </tr>
                        <tr>
                            <td>Client Information: </td>
                            <td><textarea name="cinfo" id="" cols="60" rows="10"><?php echo $cinfo; ?></textarea></td>
                            <td colspan="2"><input type="submit" name="csubmit" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <th colspan="4">About Developers</th>
                        </tr>
                        <tr>
                            <td>Member Image: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="igimg1"><img src="images/<?php echo $igimg1; ?>" id="blah" width=50 height=50></td>
                        </tr>
                        <tr>
                            <td>Member Name: </td>
                            <td><input type="text" name="igname1" value="<?php echo $igname1; ?>"></td>
                        </tr>
                        <tr>
                            <td>Member Title: </td>
                            <td><input type="text" name="igtitle1" value="<?php echo $igtitle1; ?>"></td>
                        </tr>
                        <tr>
                            <td>Member Email: </td>
                            <td><input type="text" name="igemail1" value="<?php echo $igemail1; ?>"></td>
                            <td colspan="2"><input type="submit" name="igsubmit1" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Member Image: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="igimg2"><img src="images/<?php echo $igimg2; ?>" id="blah" width=50 height=50></td>
                        </tr>
                        <tr>
                            <td>Member Name: </td>
                            <td><input type="text" name="igname2" value="<?php echo $igname2; ?>"></td>
                        </tr>
                        <tr>
                            <td>Member Title: </td>
                            <td><input type="text" name="igtitle2" value="<?php echo $igtitle2; ?>"></td>
                        </tr>
                        <tr>
                            <td>Member Email: </td>
                            <td><input type="text" name="igemail2" value="<?php echo $igemail2; ?>"></td>
                            <td colspan="2"><input type="submit" name="igsubmit2" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Member Image: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="igimg3"><img src="images/<?php echo $igimg3; ?>" id="blah" width=50 height=50></td>
                        </tr>
                        <tr>
                            <td>Member Name: </td>
                            <td><input type="text" name="igname3" value="<?php echo $igname3; ?>"></td>
                        </tr>
                        <tr>
                            <td>Member Title: </td>
                            <td><input type="text" name="igtitle3" value="<?php echo $igtitle3; ?>"></td>
                        </tr>
                        <tr>
                            <td>Member Email: </td>
                            <td><input type="text" name="igemail3" value="<?php echo $igemail3; ?>"></td>
                            <td colspan="2"><input type="submit" name="igsubmit3" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Member Image: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="igimg4"><img src="images/<?php echo $igimg4; ?>" id="blah" width=50 height=50></td>
                        </tr>
                        <tr>
                            <td>Member Name: </td>
                            <td><input type="text" name="igname4" value="<?php echo $igname4; ?>"></td>
                        </tr>
                        <tr>
                            <td>Member Title: </td>
                            <td><input type="text" name="igtitle4" value="<?php echo $igtitle4; ?>"></td>
                        </tr>
                        <tr>
                            <td>Member Email: </td>
                            <td><input type="text" name="igemail4" value="<?php echo $igemail4; ?>"></td>
                            <td colspan="2"><input type="submit" name="igsubmit4" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Member Image: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="igimg5"><img src="images/<?php echo $igimg5; ?>" id="blah" width=50 height=50></td>
                        </tr>
                        <tr>
                            <td>Member Name: </td>
                            <td><input type="text" name="igname5" value="<?php echo $igname5; ?>"></td>
                        </tr>
                        <tr>
                            <td>Member Title: </td>
                            <td><input type="text" name="igtitle5" value="<?php echo $igtitle5; ?>"></td>
                        </tr>
                        <tr>
                            <td>Member Email: </td>
                            <td><input type="text" name="igemail5" value="<?php echo $igemail5; ?>"></td>
                            <td colspan="2"><input type="submit" name="igsubmit5" value="Save Changes"></td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="container">
                <h3>Gallery Settings</h3>
            </div>
            <div class="container">
                <form action="serverside/update_gallery.php" method="POST" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <th colspan="4">Trailer Video</th>
                        </tr>
                        <tr>
                            <td>Upload Video: </td>
                            <td class="logo_input"><input type="file" onchange="readURL(this)" name="filev"></td>
                            <td style="font-size: 13px;"><?php echo $video; ?></td>
                            <td ><input type="submit" name="submit_v" id="submit_v" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <th colspan="4">Gallery Characters</th>
                        </tr>
                        <tr>
                            <td>Character 1: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="char1"><img src="images/<?php echo $char1; ?>" id="blah" width=50 height=50></td>
                            <td><?php echo $char1; ?></td>
                            <td><input type="submit" name="submit_c1" id="submit_c1" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Character 2: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="char2"><img src="images/<?php echo $char2; ?>" id="blah" width=50 height=50></td>
                            <td><?php echo $char2; ?></td>
                            <td><input type="submit" name="submit_c2" id="submit_c2" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Character 3: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="char3"><img src="images/<?php echo $char3; ?>" id="blah" width=50 height=50></td>
                            <td><?php echo $char3; ?></td>
                            <td><input type="submit" name="submit_c3" id="submit_c3" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Character 4: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="char4"><img src="images/<?php echo $char4; ?>" id="blah" width=50 height=50></td>
                            <td><?php echo $char4; ?></td>
                            <td><input type="submit" name="submit_c4" id="submit_c4" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Character 5: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="char5"><img src="images/<?php echo $char5; ?>" id="blah" width=50 height=50></td>
                            <td><?php echo $char5; ?></td>
                            <td><input type="submit" name="submit_c5" id="submit_c5" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Character 6: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="char6"><img src="images/<?php echo $char6; ?>" id="blah" width=50 height=50></td>
                            <td><?php echo $char6; ?></td>
                            <td><input type="submit" name="submit_c6" id="submit_c6" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <th colspan="4">Gallery Collectibles</th>
                        </tr>
                        <tr>
                            <td>Collectible 1: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="file1"><img src="images/<?php echo $img1; ?>" id="blah" width=50 height=50></td>
                            <td><input type="text" name="imgname1" value="<?php echo $name1; ?>"></td>
                            <td><input type="submit" name="submit_1" id="submit_1" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Collectible 2: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="file2"><img src="images/<?php echo $img2; ?>" id="blah" width=50 height=50></td>
                            <td><input type="text" name="imgname2" value="<?php echo $name2; ?>"></td>
                            <td><input type="submit" name="submit_2" id="submit_2" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Collectible 3: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="file3"><img src="images/<?php echo $img3; ?>" id="blah" width=50 height=50></td>
                            <td><input type="text" name="imgname3" value="<?php echo $name3; ?>"></td>
                            <td><input type="submit" name="submit_3" id="submit_3" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Collectible 4: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="file4"><img src="images/<?php echo $img4; ?>" id="blah" width=50 height=50></td>
                            <td><input type="text" name="imgname4" value="<?php echo $name4; ?>"></td>
                            <td><input type="submit" name="submit_4" id="submit_4" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Collectible 5: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="file5"><img src="images/<?php echo $img5; ?>" id="blah" width=50 height=50></td>
                            <td><input type="text" name="imgname5" value="<?php echo $name5; ?>"></td>
                            <td><input type="submit" name="submit_5" id="submit_5" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Collectible 6: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="file6"><img src="images/<?php echo $img6; ?>" id="blah" width=50 height=50></td>
                            <td><input type="text" name="imgname6" value="<?php echo $name6; ?>"></td>
                            <td><input type="submit" name="submit_6" id="submit_6" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Collectible 7: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="file7"><img src="images/<?php echo $img7; ?>" id="blah" width=50 height=50></td>
                            <td><input type="text" name="imgname7" value="<?php echo $name7; ?>"></td>
                            <td><input type="submit" name="submit_7" id="submit_7" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Collectible 8: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="file8"><img src="images/<?php echo $img8; ?>" id="blah" width=50 height=50></td>
                            <td><input type="text" name="imgname8" value="<?php echo $name8; ?>"></td>
                            <td><input type="submit" name="submit_8" id="submit_8" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Collectible 9: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="file9"><img src="images/<?php echo $img9; ?>" id="blah" width=50 height=50></td>
                            <td><input type="text" name="imgname9" value="<?php echo $name9; ?>"></td>
                            <td><input type="submit" name="submit_9" id="submit_9" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Collectible 10: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="file10"><img src="images/<?php echo $img10; ?>" id="blah" width=50 height=50></td>
                            <td><input type="text" name="imgname10" value="<?php echo $name10; ?>"></td>
                            <td><input type="submit" name="submit_10" id="submit_10" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <th colspan="4">Gallery Levels</th>
                        </tr>
                        <tr>
                            <td>Levels 1: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="lvl1"><img src="images/<?php echo $lvl1; ?>" id="blah" width=50 height=50></td>
                            <td style="font-size: 13px;"><?php echo $lvl1; ?></td>
                            <td><input type="submit" name="sublvl_1" id="sublvl_1" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Levels 2: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="lvl2"><img src="images/<?php echo $lvl2; ?>" id="blah" width=50 height=50></td>
                            <td style="font-size: 13px;"><?php echo $lvl2; ?></td>
                            <td><input type="submit" name="sublvl_2" id="sublvl_1" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Levels 3: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="lvl3"><img src="images/<?php echo $lvl3; ?>" id="blah" width=50 height=50></td>
                            <td style="font-size: 13px;"><?php echo $lvl3; ?></td>
                            <td><input type="submit" name="sublvl_3" id="sublvl_1" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Levels 4: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="lvl4"><img src="images/<?php echo $lvl4; ?>" id="blah" width=50 height=50></td>
                            <td style="font-size: 13px;"><?php echo $lvl4; ?></td>
                            <td><input type="submit" name="sublvl_4" id="sublvl_1" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Levels 5: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="lvl5"><img src="images/<?php echo $lvl5; ?>" id="blah" width=50 height=50></td>
                            <td style="font-size: 13px;"><?php echo $lvl5; ?></td>
                            <td><input type="submit" name="sublvl_5" id="sublvl_1" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Levels 6: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="lvl6"><img src="images/<?php echo $lvl6; ?>" id="blah" width=50 height=50></td>
                            <td style="font-size: 13px;"><?php echo $lvl6; ?></td>
                            <td><input type="submit" name="sublvl_6" id="sublvl_1" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <th colspan="4">Gallery Storyboards</th>
                        </tr>
                        <tr>
                            <td>Storyboard 1: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="st1"><img src="images/<?php echo $story1; ?>" id="blah" width=50 height=50></td>
                            <td><input type="text" name="stname1" value="<?php echo $sname1; ?>"></td>
                            <td><input type="submit" name="submit_s1" id="submit_s1" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Storyboard 2: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="st2"><img src="images/<?php echo $story2; ?>" id="blah" width=50 height=50></td>
                            <td><input type="text" name="stname2" value="<?php echo $sname2; ?>"></td>
                            <td><input type="submit" name="submit_s2" id="submit_s2" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Storyboard 3: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="st3"><img src="images/<?php echo $story3; ?>" id="blah" width=50 height=50></td>
                            <td><input type="text" name="stname3" value="<?php echo $sname3; ?>"></td>
                            <td><input type="submit" name="submit_s3" id="submit_s3" value="Save Changes"></td>
                        </tr>
                        <tr>
                            <td>Storyboard 4: </td>
                            <td class="logo_input"><input type="file"  onchange="readURL(this)" name="st4"><img src="images/<?php echo $story4; ?>" id="blah" width=50 height=50></td>
                            <td><input type="text" name="stname4" value="<?php echo $sname4; ?>"></td>
                            <td><input type="submit" name="submit_s4" id="submit_s4" value="Save Changes"></td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class="container">
                <h3>Registered Applicants</h3>
            </div>

            <div class="container" id="application_button">
                <a href="application_data.php">View Registered Applicants</a>
            </div>

        </div>
        

    <?php
        }
        else{
    ?>

        <!-- HTML CODE IF ADMIN IS NOT LOGGED IN -->
        <div class="warning_message">
            <div class="container">
                <div class="warning_content">
                    <img src="images/warning_symbol.png" alt="Warning">
                    <h2>Access Denied: You must be an admin to access this part of the website.</h2>
                </div>
            </div>
        </div>

    <?php
        }
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