<?php
session_start();
if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
    exit();
}

include("php/config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $surname = mysqli_real_escape_string($con, $_POST['surname']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $email = $_SESSION['valid'];

    $query = "UPDATE user SET username='$username', name='$name', surname='$surname', password='$password' WHERE email='$email'";
    if (mysqli_query($con, $query)) {
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $name;
        $_SESSION['surname'] = $surname;
        $_SESSION['password'] = $password;
        $_SESSION['update_success'] = true;
        header("Location: user.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}
?>
