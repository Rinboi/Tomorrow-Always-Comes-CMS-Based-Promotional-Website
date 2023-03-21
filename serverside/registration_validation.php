<?php 
    // Validates and inserts registration data for the student

    include_once 'dbh.inc.php';
    include_once 'variables.inc.php';

    if(isset($_POST['submit'])){

        // Double Checking the forms for valid input

        $gradeLevel = mysqli_real_escape_string($conn, $_POST['grade_level']);
        $studentFirst = mysqli_real_escape_string($conn, $_POST['student_fname']);
        $studentMiddle = mysqli_real_escape_string($conn, $_POST['student_mname']);
        $studentLast = mysqli_real_escape_string($conn, $_POST['student_lname']);
        $gender = mysqli_real_escape_string($conn, $_POST['student_gender']);
        $studentEmail = mysqli_real_escape_string($conn, $_POST['student_email']);
        $studentNumber = mysqli_real_escape_string($conn, $_POST['student_number']);
        date_default_timezone_set("Asia/Manila");
        $currentDate = date("F d, Y");
        $currentTime = date("h:i:s A");

        $studentID = md5($studentFirst.$studentLast);


        if(  !empty($studentFirst) &&
             !empty($studentLast)  &&
             !empty($studentEmail) &&
             !empty($studentNumber)
             ){
            // If everything is not empty

            if( (!preg_match('/[^A-Za-z\s]/', $studentFirst)) &&
                (!preg_match('/[^A-Za-z\s]/', $studentLast)) &&
                (!preg_match('/[^0-9]/', $studentNumber))
                )
            {

                // Checks if characters have valid characters in it

                // Replaces Middle names into null if empty

                if(empty($studentMiddle)){
                    $studentMiddle = NULL;
                }
                if (!filter_var($studentEmail, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../online_registration.php?input=invalid%email");
                }
                else{
                    // If everything is okay
                    // INSERT INTO DATABASE :D (VERY LONG)
                    $sql = "INSERT INTO student_registration(
                        student_id,
                        student_grade_level,
                        student_firstname,
                        student_middlename,
                        student_lastname,
                        student_gender,
                        student_email,
                        student_number,
                        registration_date,
                        registration_time,
                        registration_status
                    ) VALUES (
                        '$studentID',
                        '$gradeLevel',
                        '$studentFirst',
                        '$studentMiddle',
                        '$studentLast',
                        '$gender',
                        '$studentEmail',
                        '$studentNumber',
                        '$currentDate',
                        '$currentTime',
                        'Pending'
                    );";
                    
                    if($result = mysqli_query($conn, $sql)){
                        header("Location: ../registration_success.php?id=".$studentID);                    
                        exit();
                    }else{
                        header("Location: ../online_registration.php?database=error");
                        exit();
                    }

                }
            }
            else{
                header("Location: ../online_registration.php?input=invalidcharacters");
                exit();
            }
        }
        else{
            // If one of them is empty
            header("Locatition: ../online_registration.php?input=empty");
            exit();
        }

    }
