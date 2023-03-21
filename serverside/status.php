<?php
    include 'dbh.inc.php';
    require_once "PHPMailer.php";
    $mail = new MailController();

    if(isset($_POST['delete'])){

        $id = $_POST['id'];

        $sql = "DELETE FROM student_registration WHERE student_id='$id';";

        if($result = mysqli_query($conn, $sql)){
            header("Location: ../application_data.php?delete=success");
            exit();
        }
        else{
            header("Location: ../change_status.php?id=$id?delete=fail");
            exit();
        }


    }
    else if(isset($_POST['update'])){
        $id = $_POST['id'];
        $sql = "UPDATE student_registration SET registration_status='Registered' WHERE student_id='$id';";

        if($result = mysqli_query($conn, $sql)){
            header("Location: ../application_data.php?register=success");
            $sub = "Registration Complete!";
            $email = $_POST['email'];
            $mail->sendMail($email, $sub); 
            exit();
        }
        else{
            header("Location: ../change_status.php?id=$id?register=fail");
            exit();
        }
    }