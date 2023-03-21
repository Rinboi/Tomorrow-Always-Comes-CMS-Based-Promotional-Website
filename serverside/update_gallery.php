<?php

    session_start();

    include_once 'dbh.inc.php';

//COLLECTIBLE 1
    if(isset($_POST['submit_1'])){
        $name1 = mysqli_real_escape_string($conn, $_POST['imgname1']);
        $fileName = "";
        

        $file = $_FILES['file1'];

        $fileName = $_FILES['file1']['name'];
        $fileTmpName = $_FILES['file1']['tmp_name'];
        $fileSize = $_FILES['file1']['size'];
        $fileError = $_FILES['file1']['error'];
        $fileType = $_FILES['file1']['type'];

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
                        empty($name1)
                    ))
                    {
                        $collectibleQuery = "UPDATE collectibles SET img1='$fileName' WHERE id=1;";
                        $collectibleNameQuery = "UPDATE collectibles SET img1='$name1' WHERE id=2;";
                        if(mysqli_query($conn, $collectibleQuery)){
                            if(mysqli_query($conn, $collectibleNameQuery)){
                            header("Location: ../admin_dashboard.php?school_edit=success"); 
                            exit();
                            }
                        }
                        else{
                            header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                            exit();
                        }
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

//COLLECTIBLE 2
    if(isset($_POST['submit_2'])){
        $name2 = mysqli_real_escape_string($conn, $_POST['imgname2']);
        $fileName = "";
        

        $file = $_FILES['file2'];

        $fileName = $_FILES['file2']['name'];
        $fileTmpName = $_FILES['file2']['tmp_name'];
        $fileSize = $_FILES['file2']['size'];
        $fileError = $_FILES['file2']['error'];
        $fileType = $_FILES['file2']['type'];

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
                        empty($name2)
                    ))
                    {
                        $collectibleQuery = "UPDATE collectibles SET img2='$fileName' WHERE id=1;";
                        $collectibleNameQuery = "UPDATE collectibles SET img2='$name2' WHERE id=2;";
                        if(mysqli_query($conn, $collectibleQuery)){
                            if(mysqli_query($conn, $collectibleNameQuery)){
                            header("Location: ../admin_dashboard.php?school_edit=success"); 
                            exit();
                            }
                        }
                        else{
                            header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                            exit();
                        }
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

//COLLECTIBLE 3
    if(isset($_POST['submit_3'])){
        $name3 = mysqli_real_escape_string($conn, $_POST['imgname3']);
        $fileName = "";
        

        $file = $_FILES['file3'];

        $fileName = $_FILES['file3']['name'];
        $fileTmpName = $_FILES['file3']['tmp_name'];
        $fileSize = $_FILES['file3']['size'];
        $fileError = $_FILES['file3']['error'];
        $fileType = $_FILES['file3']['type'];

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
                        empty($name3)
                    ))
                    {
                        $collectibleQuery = "UPDATE collectibles SET img3='$fileName' WHERE id=1;";
                        $collectibleNameQuery = "UPDATE collectibles SET img3='$name3' WHERE id=2;";
                        if(mysqli_query($conn, $collectibleQuery)){
                            if(mysqli_query($conn, $collectibleNameQuery)){
                            header("Location: ../admin_dashboard.php?school_edit=success"); 
                            exit();
                            }
                        }
                        else{
                            header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                            exit();
                        }
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

//COLLECTIBLE 4
    if(isset($_POST['submit_4'])){
        $name4 = mysqli_real_escape_string($conn, $_POST['imgname4']);
        $fileName = "";
        

        $file = $_FILES['file4'];

        $fileName = $_FILES['file4']['name'];
        $fileTmpName = $_FILES['file4']['tmp_name'];
        $fileSize = $_FILES['file4']['size'];
        $fileError = $_FILES['file4']['error'];
        $fileType = $_FILES['file4']['type'];

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
                        empty($name4)
                    ))
                    {
                        $collectibleQuery = "UPDATE collectibles SET img4='$fileName' WHERE id=1;";
                        $collectibleNameQuery = "UPDATE collectibles SET img4='$name4' WHERE id=2;";
                        if(mysqli_query($conn, $collectibleQuery)){
                            if(mysqli_query($conn, $collectibleNameQuery)){
                            header("Location: ../admin_dashboard.php?school_edit=success"); 
                            exit();
                            }
                        }
                        else{
                            header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                            exit();
                        }
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

//COLLECTIBLE 5
if(isset($_POST['submit_5'])){
    $name5 = mysqli_real_escape_string($conn, $_POST['imgname5']);
    $fileName = "";
    

    $file = $_FILES['file5'];

    $fileName = $_FILES['file5']['name'];
    $fileTmpName = $_FILES['file5']['tmp_name'];
    $fileSize = $_FILES['file5']['size'];
    $fileError = $_FILES['file5']['error'];
    $fileType = $_FILES['file5']['type'];

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
                    empty($name5)
                ))
                {
                    $collectibleQuery = "UPDATE collectibles SET img5='$fileName' WHERE id=1;";
                    $collectibleNameQuery = "UPDATE collectibles SET img5='$name5' WHERE id=2;";
                    if(mysqli_query($conn, $collectibleQuery)){
                        if(mysqli_query($conn, $collectibleNameQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        }
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//COLLECTIBLE 6
if(isset($_POST['submit_6'])){
    $name6 = mysqli_real_escape_string($conn, $_POST['imgname6']);
    $fileName = "";
    

    $file = $_FILES['file6'];

    $fileName = $_FILES['file6']['name'];
    $fileTmpName = $_FILES['file6']['tmp_name'];
    $fileSize = $_FILES['file6']['size'];
    $fileError = $_FILES['file6']['error'];
    $fileType = $_FILES['file6']['type'];

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
                    empty($name6)
                ))
                {
                    $collectibleQuery = "UPDATE collectibles SET img6='$fileName' WHERE id=1;";
                    $collectibleNameQuery = "UPDATE collectibles SET img6='$name6' WHERE id=2;";
                    if(mysqli_query($conn, $collectibleQuery)){
                        if(mysqli_query($conn, $collectibleNameQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        }
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//COLLECTIBLE 7
if(isset($_POST['submit_7'])){
    $name7 = mysqli_real_escape_string($conn, $_POST['imgname7']);
    $fileName = "";
    

    $file = $_FILES['file7'];

    $fileName = $_FILES['file7']['name'];
    $fileTmpName = $_FILES['file7']['tmp_name'];
    $fileSize = $_FILES['file7']['size'];
    $fileError = $_FILES['file7']['error'];
    $fileType = $_FILES['file7']['type'];

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
                    empty($name7)
                ))
                {
                    $collectibleQuery = "UPDATE collectibles SET img7='$fileName' WHERE id=1;";
                    $collectibleNameQuery = "UPDATE collectibles SET img7='$name7' WHERE id=2;";
                    if(mysqli_query($conn, $collectibleQuery)){
                        if(mysqli_query($conn, $collectibleNameQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        }
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//COLLECTIBLE 8
if(isset($_POST['submit_8'])){
    $name8 = mysqli_real_escape_string($conn, $_POST['imgname8']);
    $fileName = "";
    

    $file = $_FILES['file8'];

    $fileName = $_FILES['file8']['name'];
    $fileTmpName = $_FILES['file8']['tmp_name'];
    $fileSize = $_FILES['file8']['size'];
    $fileError = $_FILES['file8']['error'];
    $fileType = $_FILES['file8']['type'];

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
                    empty($name8)
                ))
                {
                    $collectibleQuery = "UPDATE collectibles SET img8='$fileName' WHERE id=1;";
                    $collectibleNameQuery = "UPDATE collectibles SET img8='$name8' WHERE id=2;";
                    if(mysqli_query($conn, $collectibleQuery)){
                        if(mysqli_query($conn, $collectibleNameQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        }
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//COLLECTIBLE 9
if(isset($_POST['submit_9'])){
    $name9 = mysqli_real_escape_string($conn, $_POST['imgname9']);
    $fileName = "";
    

    $file = $_FILES['file9'];

    $fileName = $_FILES['file9']['name'];
    $fileTmpName = $_FILES['file9']['tmp_name'];
    $fileSize = $_FILES['file9']['size'];
    $fileError = $_FILES['file9']['error'];
    $fileType = $_FILES['file9']['type'];

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
                    empty($name9)
                ))
                {
                    $collectibleQuery = "UPDATE collectibles SET img9='$fileName' WHERE id=1;";
                    $collectibleNameQuery = "UPDATE collectibles SET img9='$name9' WHERE id=2;";
                    if(mysqli_query($conn, $collectibleQuery)){
                        if(mysqli_query($conn, $collectibleNameQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        }
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//COLLECTIBLE 10
if(isset($_POST['submit_10'])){
    $name10 = mysqli_real_escape_string($conn, $_POST['imgname10']);
    $fileName = "";
    

    $file = $_FILES['file10'];

    $fileName = $_FILES['file10']['name'];
    $fileTmpName = $_FILES['file10']['tmp_name'];
    $fileSize = $_FILES['file10']['size'];
    $fileError = $_FILES['file10']['error'];
    $fileType = $_FILES['file10']['type'];

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
                    empty($name10)
                ))
                {
                    $collectibleQuery = "UPDATE collectibles SET img10='$fileName' WHERE id=1;";
                    $collectibleNameQuery = "UPDATE collectibles SET img10='$name10' WHERE id=2;";
                    if(mysqli_query($conn, $collectibleQuery)){
                        if(mysqli_query($conn, $collectibleNameQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        }
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//VIDEO
if(isset($_POST['submit_v'])){
    $name10 = mysqli_real_escape_string($conn, $_POST['imgname10']);
    $fileName = "";
    

    $file = $_FILES['filev'];

    $fileName = $_FILES['filev']['name'];
    $fileTmpName = $_FILES['filev']['tmp_name'];
    $fileSize = $_FILES['filev']['size'];
    $fileError = $_FILES['filev']['error'];
    $fileType = $_FILES['filev']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowedv = array('mp4','mov','wmv','flv', 'avi', 'webm');

    if(in_array($fileActualExt,$allowedv)){
        if($fileError === 0){
            if ($fileSize < 90000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../images/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
                $fileName = $fileNameNew;
                {
                    $videoQuery = "UPDATE gallery_video SET video='$fileName' WHERE id=1;";
                    if(mysqli_query($conn, $videoQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();    
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//LEVEL 1
if(isset($_POST['sublvl_1'])){
    $fileName = "";
    

    $file = $_FILES['lvl1'];

    $fileName = $_FILES['lvl1']['name'];
    $fileTmpName = $_FILES['lvl1']['tmp_name'];
    $fileSize = $_FILES['lvl1']['size'];
    $fileError = $_FILES['lvl1']['error'];
    $fileType = $_FILES['lvl1']['type'];

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
                {
                    $levelQuery = "UPDATE levels SET level1='$fileName' WHERE id=1;";
                    if(mysqli_query($conn, $levelQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//LEVEL 2
if(isset($_POST['sublvl_2'])){
    $fileName = "";
    

    $file = $_FILES['lvl2'];

    $fileName = $_FILES['lvl2']['name'];
    $fileTmpName = $_FILES['lvl2']['tmp_name'];
    $fileSize = $_FILES['lvl2']['size'];
    $fileError = $_FILES['lvl2']['error'];
    $fileType = $_FILES['lvl2']['type'];

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
                {
                    $levelQuery = "UPDATE levels SET level2='$fileName' WHERE id=1;";
                    if(mysqli_query($conn, $levelQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//LEVEL 3
if(isset($_POST['sublvl_3'])){
    $fileName = "";
    

    $file = $_FILES['lvl3'];

    $fileName = $_FILES['lvl3']['name'];
    $fileTmpName = $_FILES['lvl3']['tmp_name'];
    $fileSize = $_FILES['lvl3']['size'];
    $fileError = $_FILES['lvl3']['error'];
    $fileType = $_FILES['lvl3']['type'];

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
                {
                    $levelQuery = "UPDATE levels SET level3='$fileName' WHERE id=1;";
                    if(mysqli_query($conn, $levelQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//LEVEL 4
if(isset($_POST['sublvl_4'])){
    $fileName = "";
    

    $file = $_FILES['lvl4'];

    $fileName = $_FILES['lvl4']['name'];
    $fileTmpName = $_FILES['lvl4']['tmp_name'];
    $fileSize = $_FILES['lvl4']['size'];
    $fileError = $_FILES['lvl4']['error'];
    $fileType = $_FILES['lvl4']['type'];

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
                {
                    $levelQuery = "UPDATE levels SET level4='$fileName' WHERE id=1;";
                    if(mysqli_query($conn, $levelQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//LEVEL 1
if(isset($_POST['sublvl_5'])){
    $fileName = "";
    

    $file = $_FILES['lvl5'];

    $fileName = $_FILES['lvl5']['name'];
    $fileTmpName = $_FILES['lvl5']['tmp_name'];
    $fileSize = $_FILES['lvl5']['size'];
    $fileError = $_FILES['lvl5']['error'];
    $fileType = $_FILES['lvl5']['type'];

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
                {
                    $levelQuery = "UPDATE levels SET level5='$fileName' WHERE id=1;";
                    if(mysqli_query($conn, $levelQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//LEVEL 6
if(isset($_POST['sublvl_6'])){
    $fileName = "";
    

    $file = $_FILES['lvl6'];

    $fileName = $_FILES['lvl6']['name'];
    $fileTmpName = $_FILES['lvl6']['tmp_name'];
    $fileSize = $_FILES['lvl6']['size'];
    $fileError = $_FILES['lvl6']['error'];
    $fileType = $_FILES['lvl6']['type'];

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
                {
                    $levelQuery = "UPDATE levels SET level6='$fileName' WHERE id=1;";
                    if(mysqli_query($conn, $levelQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//CHARACTER 1
if(isset($_POST['submit_c1'])){
    $fileName = "";
    

    $file = $_FILES['char1'];

    $fileName = $_FILES['char1']['name'];
    $fileTmpName = $_FILES['char1']['tmp_name'];
    $fileSize = $_FILES['char1']['size'];
    $fileError = $_FILES['char1']['error'];
    $fileType = $_FILES['char1']['type'];

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
                {
                    $levelQuery = "UPDATE characters SET chara1='$fileName' WHERE id=1;";
                    if(mysqli_query($conn, $levelQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//CHARACTER 2
if(isset($_POST['submit_c2'])){
    $fileName = "";
    

    $file = $_FILES['char2'];

    $fileName = $_FILES['char2']['name'];
    $fileTmpName = $_FILES['char2']['tmp_name'];
    $fileSize = $_FILES['char2']['size'];
    $fileError = $_FILES['char2']['error'];
    $fileType = $_FILES['char2']['type'];

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
                {
                    $levelQuery = "UPDATE characters SET chara2='$fileName' WHERE id=1;";
                    if(mysqli_query($conn, $levelQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//CHARACTER 2
if(isset($_POST['submit_c3'])){
    $fileName = "";
    

    $file = $_FILES['char3'];

    $fileName = $_FILES['char3']['name'];
    $fileTmpName = $_FILES['char3']['tmp_name'];
    $fileSize = $_FILES['char3']['size'];
    $fileError = $_FILES['char3']['error'];
    $fileType = $_FILES['char3']['type'];

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
                {
                    $levelQuery = "UPDATE characters SET chara3='$fileName' WHERE id=1;";
                    if(mysqli_query($conn, $levelQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//CHARACTER 4
if(isset($_POST['submit_c4'])){
    $fileName = "";
    

    $file = $_FILES['char4'];

    $fileName = $_FILES['char4']['name'];
    $fileTmpName = $_FILES['char4']['tmp_name'];
    $fileSize = $_FILES['char4']['size'];
    $fileError = $_FILES['char4']['error'];
    $fileType = $_FILES['char4']['type'];

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
                {
                    $levelQuery = "UPDATE characters SET chara4='$fileName' WHERE id=1;";
                    if(mysqli_query($conn, $levelQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//CHARACTER 5
if(isset($_POST['submit_c5'])){
    $fileName = "";
    

    $file = $_FILES['char5'];

    $fileName = $_FILES['char5']['name'];
    $fileTmpName = $_FILES['char5']['tmp_name'];
    $fileSize = $_FILES['char5']['size'];
    $fileError = $_FILES['char5']['error'];
    $fileType = $_FILES['char5']['type'];

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
                {
                    $levelQuery = "UPDATE characters SET chara5='$fileName' WHERE id=1;";
                    if(mysqli_query($conn, $levelQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//CHARACTER 6
if(isset($_POST['submit_c6'])){
    $fileName = "";
    

    $file = $_FILES['char6'];

    $fileName = $_FILES['char6']['name'];
    $fileTmpName = $_FILES['char6']['tmp_name'];
    $fileSize = $_FILES['char6']['size'];
    $fileError = $_FILES['char6']['error'];
    $fileType = $_FILES['char6']['type'];

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
                {
                    $levelQuery = "UPDATE characters SET chara6='$fileName' WHERE id=1;";
                    if(mysqli_query($conn, $levelQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//STORYBOARD 1
if(isset($_POST['submit_s1'])){
    $sname1 = mysqli_real_escape_string($conn, $_POST['stname1']);
    $fileName = "";
    

    $file = $_FILES['st1'];

    $fileName = $_FILES['st1']['name'];
    $fileTmpName = $_FILES['st1']['tmp_name'];
    $fileSize = $_FILES['st1']['size'];
    $fileError = $_FILES['st1']['error'];
    $fileType = $_FILES['st1']['type'];

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
                    empty($sname1)
                ))
                {
                    $storyQuery = "UPDATE storyboards SET board1='$fileName' WHERE id=1;";
                    $storyNameQuery = "UPDATE storyboards SET board1='$sname1' WHERE id=2;";
                    if(mysqli_query($conn, $storyQuery)){
                        if(mysqli_query($conn, $storyNameQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        }
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//STORYBOARD 2
if(isset($_POST['submit_s2'])){
    $sname2 = mysqli_real_escape_string($conn, $_POST['stname2']);
    $fileName = "";
    

    $file = $_FILES['st2'];

    $fileName = $_FILES['st2']['name'];
    $fileTmpName = $_FILES['st2']['tmp_name'];
    $fileSize = $_FILES['st2']['size'];
    $fileError = $_FILES['st2']['error'];
    $fileType = $_FILES['st2']['type'];

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
                    empty($sname2)
                ))
                {
                    $storyQuery = "UPDATE storyboards SET board2='$fileName' WHERE id=1;";
                    $storyNameQuery = "UPDATE storyboards SET board2='$sname2' WHERE id=2;";
                    if(mysqli_query($conn, $storyQuery)){
                        if(mysqli_query($conn, $storyNameQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        }
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//STORYBOARD 3
if(isset($_POST['submit_s3'])){
    $sname3 = mysqli_real_escape_string($conn, $_POST['stname3']);
    $fileName = "";
    

    $file = $_FILES['st3'];

    $fileName = $_FILES['st3']['name'];
    $fileTmpName = $_FILES['st3']['tmp_name'];
    $fileSize = $_FILES['st3']['size'];
    $fileError = $_FILES['st3']['error'];
    $fileType = $_FILES['st3']['type'];

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
                    empty($sname3)
                ))
                {
                    $storyQuery = "UPDATE storyboards SET board3='$fileName' WHERE id=1;";
                    $storyNameQuery = "UPDATE storyboards SET board3='$sname3' WHERE id=2;";
                    if(mysqli_query($conn, $storyQuery)){
                        if(mysqli_query($conn, $storyNameQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        }
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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

//STORYBOARD 4
if(isset($_POST['submit_s4'])){
    $sname4 = mysqli_real_escape_string($conn, $_POST['stname4']);
    $fileName = "";
    

    $file = $_FILES['st4'];

    $fileName = $_FILES['st4']['name'];
    $fileTmpName = $_FILES['st4']['tmp_name'];
    $fileSize = $_FILES['st4']['size'];
    $fileError = $_FILES['st4']['error'];
    $fileType = $_FILES['st4']['type'];

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
                    empty($sname4)
                ))
                {
                    $storyQuery = "UPDATE storyboards SET board4='$fileName' WHERE id=1;";
                    $storyNameQuery = "UPDATE storyboards SET board4='$sname4' WHERE id=2;";
                    if(mysqli_query($conn, $storyQuery)){
                        if(mysqli_query($conn, $storyNameQuery)){
                        header("Location: ../admin_dashboard.php?school_edit=success"); 
                        exit();
                        }
                    }
                    else{
                        header("Location: ../admin_dashboard.php?school_edit=databaseerror");
                        exit();
                    }
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