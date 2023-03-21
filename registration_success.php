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
    <title><?php echo $websiteTitle; ?> - Online Registration</title>
    <link rel="icon" href="images/<?php echo $websiteLogo; ?>">
    <!-- Styles -->
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/registration.css">
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
        if ( isset( $_GET['id'] ) && !empty( $_GET['id'] ) ){
            $id = strval($_GET['id']);   
    ?>

        <div class="registration-success">
                <div class="container">
                    <img src="images/complete_icon.png" alt="Completed">
                    <h1>REGISTRATION SUCCESSFUL</h1>
                    <h3>Registration ID: <?php echo $id;?></h3>
                    <div class="instruction">
                        <p align='center'>Please save your registration ID for us to verify your application.<br> Do not share this link to others for your own security.</p>
                    </div>
                </div>
        </div>

   <?php
        }
        else{
   ?>

    <div class="registration-success">
                <div class="container">
                <div class="instruction">
                        <p>Invalid URL, please go back to the <a href="online_registration.php">Registration</a> page.</p>
                    </div>            
                </div>
        </div>

    <?php
        }
        include_once "layouts/footer.php";
    ?>

</body>
</html>
