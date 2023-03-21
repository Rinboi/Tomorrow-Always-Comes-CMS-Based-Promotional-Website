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

    <!-- USING THE SAME TEMPLATE :D -->
    <div class="admin_dashboard_header">
        <div class="container">
            <h2>Online Registration</h2>
        </div>
    </div><br>

    <?php
        if ( isset( $_GET['input'] ) && !empty( $_GET['input'] ) ){

            if($_GET['input'] == "invalidcharacters"){
                echo "
                    <div class='online_registration_error'>
                    <div class='container'>
                        <h3>Warning: Invalid characters were used in the registration form.</h3>
                    </div>
                    </div>
                ";
            }

        }
    ?>

    <div class="registration-form">
        <div class="container"> 
            <form action="serverside/registration_validation.php" method="POST" id="reg_form">
               <p class="registration_warnings">This is strictly for FEU Tech Open House attendees only. Fill out the form carefully for registration.</p> 

               <p class="registration_headers">Year Level</p>

               <div class="input_dividers">
                   <div class="input_dividers_child">
                       <select name="grade_level">
                            <option value="First Year">First Year</option>
                            <option value="Second Year">Second Year</option>
                            <option value="Third Year">Third Year</option>
                            <option value="Fourth Year">Fourth Year</option>
                       </select>
                       <p>Year Level</p>
                   </div> 
               </div>

               <p class="registration_headers">Student Name</p>

               <div class="input_dividers">
                   <div class="input_dividers_child">
                       <input type="text" placeholder="Juan (Required)" name="student_fname" required>
                       <p>First Name</p>
                   </div> 
                   <div class="input_dividers_child">
                       <input type="text" placeholder="Santos (Optional)" name="student_mname">
                       <p>Middle Name</p>
                   </div>
                   <div class="input_dividers_child">
                       <input type="text" placeholder="Dela Cruz (Required)" name="student_lname" required>
                       <p>Last Name</p>
                   </div>
               </div>

               <p class="registration_headers">Gender</p>

               <div class="input_dividers">
                   <div class="input_dividers_child">
                       <select name="student_gender">
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                       </select>
                   </div>
               </div>

               <p class="registration_headers">Email Address</p>

               <div class="input_dividers">
                   <div class="input_dividers_child">
                   <input type="email" placeholder="sample@fit.edu.ph (Required)" name="student_email" required>
                   </div>
               </div>

               <p class="registration_headers">Student Number</p>

               <div class="input_dividers">
                   <div class="input_dividers_child">
                       <input type="text" placeholder="2022xxxxx (Required)" name="student_number" required>
                   </div>
               </div>

               <br><br>

               <div class="input_dividers">
                   <div class="input_dividers_child">
                       <input class="button" type="submit" name="submit" value="Submit Application">
                   </div>
                   <div class="input_dividers_child">
                       <button type="button" class="button" onclick="clearAll()">Clear Fields</button>
                   </div>
               </div>

            </form>
        </div>
    </div>

    <script>
        function clearAll(){    
            document.getElementById("reg_form").reset();
        }
    </script>

    <?php
        include_once "layouts/footer.php";
    ?>

</body>
</html>

