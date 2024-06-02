<?php
session_start();
if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
    exit();
}

include("php/config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
    $email = $_SESSION['valid'];

    $query = "DELETE FROM user WHERE email='$email'";
    if (mysqli_query($con, $query)) {
        session_destroy();
        session_start();
        $_SESSION['delete_success'] = true;
        header("Location: user.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}
?>
