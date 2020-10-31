<?php
require_once 'db.con.php';
include 'includes/functions.php';

if (!isset($_POST['signin'])) {
    header('Location: ../login.php');
}
else {
    $userEmail = $_POST['user_email'];
    $userPass = $_POST['user_password'];
 
    $sql = "SELECT * FROM admin WHERE email=?";
    $stmt = mysqli_stmt_init($DBconnect);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,'s',$userEmail);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    if($rows = mysqli_fetch_assoc($result)){
        if(password_verify($userPass,$rows['password'])){
            session_start();
            $_SESSION['staff_id'] = $rows['staff_id'];
            $_SESSION['first_name'] = $rows['first_name'];
            $_SESSION['role'] = $rows['role'];

            $fname = $rows['first_name'];
            $_SESSION['successeInfo'] = "Have a productive time today $fname";
            header('Location: ../dashboard.php');
        }
        else {
            header('Location: ../login.php?error=incorrect_pass');
        }
    }
    else {
        header('Location: ../login.php?error=user_not_found');
    }
}