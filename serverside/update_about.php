<?php

    session_start();
    include_once 'dbh.inc.php';

    //GAME INFORMATION
    if(isset($_POST['gsubmit'])){

        $gtitle = mysqli_real_escape_string($conn, $_POST['gtitle']);
        $ginfo = mysqli_real_escape_string($conn, $_POST['ginfo']);
        $fileName = "";
        
        // LOGO

        $file = $_FILES['gimg'];

        $fileName = $_FILES['gimg']['name'];
        $fileTmpName = $_FILES['gimg']['tmp_name'];
        $fileSize = $_FILES['gimg']['size'];
        $fileError = $_FILES['gimg']['error'];
        $fileType = $_FILES['gimg']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg','jpeg','png','gif');

        if(in_array($fileActualExt,$allowed)){
            if($fileError === 0){
                if ($fileSize < 90000000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = '../images/'.$fileNameNew;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    $fileName = $fileNameNew;

                    if(!(
                        empty($gtitle) ||
                        empty($ginfo)
                    )){
                        $gameQuery = "UPDATE about_game SET game_image='$fileName', game_title='$gtitle', game_info='$ginfo' WHERE id=1;";
                        if(mysqli_query($conn, $gameQuery)){
                            header("Location: ../admin_dashboard.php?school_edit=success"); 
                            exit();
                        }
                        else{
                            header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                            exit();
                        }
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=error");
                        exit();
                    }


                }
                else{
                    header("Location: ../admin_dashboard.php?school_logo=invalidtype");
                    exit();
                }
        }
        else{
            header("Location: ../admin_dashboard.php?school_logo=invalidtype");
            exit();
        }
    } 
    else {
        header("Location: ../admin_dashboard.php?school_logo=invalidtype");
        exit();
    }
 }

  //CLIENT INFORMATION
  if(isset($_POST['csubmit'])){

    $ctitle = mysqli_real_escape_string($conn, $_POST['ctitle']);
    $cinfo = mysqli_real_escape_string($conn, $_POST['cinfo']);
    $fileName = "";
    
    // LOGO

    $file = $_FILES['cimg'];

    $fileName = $_FILES['cimg']['name'];
    $fileTmpName = $_FILES['cimg']['tmp_name'];
    $fileSize = $_FILES['cimg']['size'];
    $fileError = $_FILES['cimg']['error'];
    $fileType = $_FILES['cimg']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','gif');

    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if ($fileSize < 90000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../images/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                $fileName = $fileNameNew;

                if(!(
                    empty($ctitle) ||
                    empty($cinfo)
                )){
                    $clientQuery = "UPDATE about_client SET client_image='$fileName', client_title='$ctitle', client_info='$cinfo' WHERE id=1;";
                    if(mysqli_query($conn, $clientQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
                }
                else{
                    header("Location: ../admin_dashboard.php?school_edit=error");
                    exit();
                }


            }
            else{
                header("Location: ../admin_dashboard.php?school_logo=invalidtype");
                exit();
            }
    }
    else{
        header("Location: ../admin_dashboard.php?school_logo=invalidtype");
        exit();
    }
} 
else {
    header("Location: ../admin_dashboard.php?school_logo=invalidtype");
    exit();
}
}

//DEV INFORMATION 1
if(isset($_POST['igsubmit1'])){

    $igname1 = mysqli_real_escape_string($conn, $_POST['igname1']);
    $igtitle1 = mysqli_real_escape_string($conn, $_POST['igtitle1']);
    $igemail1 = mysqli_real_escape_string($conn, $_POST['igemail1']);
    $fileName = "";
    
    // LOGO

    $file = $_FILES['igimg1'];

    $fileName = $_FILES['igimg1']['name'];
    $fileTmpName = $_FILES['igimg1']['tmp_name'];
    $fileSize = $_FILES['igimg1']['size'];
    $fileError = $_FILES['igimg1']['error'];
    $fileType = $_FILES['igimg1']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','gif');

    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if ($fileSize < 90000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../images/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                $fileName = $fileNameNew;

                if(!(
                    empty($igname1) ||
                    empty($igtitle1) ||
                    empty($igemail1)
                )){
                    $devQuery = "UPDATE about_developers SET dev_image='$fileName', dev_name='$igname1', dev_title='$igtitle1', dev_email='$igemail1' WHERE id=1;";
                    if(mysqli_query($conn, $devQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
                }
                else{
                    header("Location: ../admin_dashboard.php?school_edit=error");
                    exit();
                }


            }
            else{
                header("Location: ../admin_dashboard.php?school_logo=invalidtype");
                exit();
            }
    }
    else{
        header("Location: ../admin_dashboard.php?school_logo=invalidtype");
        exit();
    }
} 
else {
    header("Location: ../admin_dashboard.php?school_logo=invalidtype");
    exit();
}
}

//DEV INFORMATION 2
if(isset($_POST['igsubmit2'])){

    $igname2 = mysqli_real_escape_string($conn, $_POST['igname2']);
    $igtitle2 = mysqli_real_escape_string($conn, $_POST['igtitle2']);
    $igemail2 = mysqli_real_escape_string($conn, $_POST['igemail2']);
    $fileName = "";
    
    // LOGO

    $file = $_FILES['igimg2'];

    $fileName = $_FILES['igimg2']['name'];
    $fileTmpName = $_FILES['igimg2']['tmp_name'];
    $fileSize = $_FILES['igimg2']['size'];
    $fileError = $_FILES['igimg2']['error'];
    $fileType = $_FILES['igimg2']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','gif');

    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if ($fileSize < 90000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../images/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                $fileName = $fileNameNew;

                if(!(
                    empty($igname2) ||
                    empty($igtitle2) ||
                    empty($igemail2)
                )){
                    $devQuery = "UPDATE about_developers SET dev_image='$fileName', dev_name='$igname2', dev_title='$igtitle2', dev_email='$igemail2' WHERE id=2;";
                    if(mysqli_query($conn, $devQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
                }
                else{
                    header("Location: ../admin_dashboard.php?school_edit=error");
                    exit();
                }


            }
            else{
                header("Location: ../admin_dashboard.php?school_logo=invalidtype");
                exit();
            }
    }
    else{
        header("Location: ../admin_dashboard.php?school_logo=invalidtype");
        exit();
    }
} 
else {
    header("Location: ../admin_dashboard.php?school_logo=invalidtype");
    exit();
}
}

//DEV INFORMATION 3
if(isset($_POST['igsubmit3'])){

    $igname3 = mysqli_real_escape_string($conn, $_POST['igname3']);
    $igtitle3 = mysqli_real_escape_string($conn, $_POST['igtitle3']);
    $igemail3 = mysqli_real_escape_string($conn, $_POST['igemail3']);
    $fileName = "";
    
    // LOGO

    $file = $_FILES['igimg3'];

    $fileName = $_FILES['igimg3']['name'];
    $fileTmpName = $_FILES['igimg3']['tmp_name'];
    $fileSize = $_FILES['igimg3']['size'];
    $fileError = $_FILES['igimg3']['error'];
    $fileType = $_FILES['igimg3']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','gif');

    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if ($fileSize < 90000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../images/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                $fileName = $fileNameNew;

                if(!(
                    empty($igname3) ||
                    empty($igtitle3) ||
                    empty($igemail3)
                )){
                    $devQuery = "UPDATE about_developers SET dev_image='$fileName', dev_name='$igname3', dev_title='$igtitle3', dev_email='$igemail3' WHERE id=3;";
                    if(mysqli_query($conn, $devQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
                }
                else{
                    header("Location: ../admin_dashboard.php?school_edit=error");
                    exit();
                }


            }
            else{
                header("Location: ../admin_dashboard.php?school_logo=invalidtype");
                exit();
            }
    }
    else{
        header("Location: ../admin_dashboard.php?school_logo=invalidtype");
        exit();
    }
} 
else {
    header("Location: ../admin_dashboard.php?school_logo=invalidtype");
    exit();
}
}

//DEV INFORMATION 4
if(isset($_POST['igsubmit4'])){

    $igname4 = mysqli_real_escape_string($conn, $_POST['igname4']);
    $igtitle4 = mysqli_real_escape_string($conn, $_POST['igtitle4']);
    $igemail4 = mysqli_real_escape_string($conn, $_POST['igemail4']);
    $fileName = "";
    
    // LOGO

    $file = $_FILES['igimg4'];

    $fileName = $_FILES['igimg4']['name'];
    $fileTmpName = $_FILES['igimg4']['tmp_name'];
    $fileSize = $_FILES['igimg4']['size'];
    $fileError = $_FILES['igimg4']['error'];
    $fileType = $_FILES['igimg4']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','gif');

    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if ($fileSize < 90000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../images/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                $fileName = $fileNameNew;

                if(!(
                    empty($igname4) ||
                    empty($igtitle4) ||
                    empty($igemail4)
                )){
                    $devQuery = "UPDATE about_developers SET dev_image='$fileName', dev_name='$igname4', dev_title='$igtitle4', dev_email='$igemail4' WHERE id=4;";
                    if(mysqli_query($conn, $devQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
                }
                else{
                    header("Location: ../admin_dashboard.php?school_edit=error");
                    exit();
                }


            }
            else{
                header("Location: ../admin_dashboard.php?school_logo=invalidtype");
                exit();
            }
    }
    else{
        header("Location: ../admin_dashboard.php?school_logo=invalidtype");
        exit();
    }
} 
else {
    header("Location: ../admin_dashboard.php?school_logo=invalidtype");
    exit();
}
}

//DEV INFORMATION 5
if(isset($_POST['igsubmit5'])){

    $igname5 = mysqli_real_escape_string($conn, $_POST['igname5']);
    $igtitle5 = mysqli_real_escape_string($conn, $_POST['igtitle5']);
    $igemail5 = mysqli_real_escape_string($conn, $_POST['igemail5']);
    $fileName = "";
    
    // LOGO

    $file = $_FILES['igimg5'];

    $fileName = $_FILES['igimg5']['name'];
    $fileTmpName = $_FILES['igimg5']['tmp_name'];
    $fileSize = $_FILES['igimg5']['size'];
    $fileError = $_FILES['igimg5']['error'];
    $fileType = $_FILES['igimg5']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png','gif');

    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if ($fileSize < 90000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../images/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                $fileName = $fileNameNew;

                if(!(
                    empty($igname5) ||
                    empty($igtitle5) ||
                    empty($igemail5)
                )){
                    $devQuery = "UPDATE about_developers SET dev_image='$fileName', dev_name='$igname5', dev_title='$igtitle5', dev_email='$igemail5' WHERE id=5;";
                    if(mysqli_query($conn, $devQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
                }
                else{
                    header("Location: ../admin_dashboard.php?school_edit=error");
                    exit();
                }


            }
            else{
                header("Location: ../admin_dashboard.php?school_logo=invalidtype");
                exit();
            }
    }
    else{
        header("Location: ../admin_dashboard.php?school_logo=invalidtype");
        exit();
    }
} 
else {
    header("Location: ../admin_dashboard.php?school_logo=invalidtype");
    exit();
}
}

