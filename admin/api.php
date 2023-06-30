<?php
// INSERT DB
require('./config.php');

// AUTH SESSION
session_start();

// LOGICAL CASE
if (isset($_POST['login_admin'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // VALIDATE DATA
    if (empty($email) || empty($password)) {
        header('Location: login.php?error=Email or password can not be empty.');
        exit();
    }

    // FIND ADMIN
    $user_sql = "SELECT * FROM admin WHERE email = '$email';";
    $result = mysqli_query($conn, $user_sql);
    if ($result->num_rows == 0) {
        header('Location: login.php?error=No admin account exist.');
        exit();
    }

    $user = mysqli_fetch_assoc($result);
    $password_verified = password_verify($password, $user['password']);

    if ($password_verified == True) {
        $_SESSION['admin_id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        header('Location: dashboard.php');
        exit();
    } else {
        header('Location: login.php?error=Invalid Password.');
        exit();
    }
} else if (isset($_GET['log_out'])) {
    session_unset();
    session_destroy();
    header("Location: login.php?error=Logged Out!");
    exit();
} else {
    echo ("DEBUG");
}
