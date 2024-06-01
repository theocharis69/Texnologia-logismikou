<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <a href="homepage.php" class="nav-link" id="Go-Back">Go back</a>
    <div class="signup-container">
        <button id="theme-toggle">Change to Dark</button>
        <form class="signup-form" id="signup-form" method="POST" action="">
            <h2>Sign Up</h2>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required autocomplete="off"/>
            </div>
            <div class="form-group">
                <label for="surname">Surname</label>
                <input type="text" id="surname" name="surname" required autocomplete="off"/>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required autocomplete="off"/>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required autocomplete="off"/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}"
                />
                <small class="error-message" id="password-error">Password must be at least 8 characters long, contain at least one digit, one uppercase letter, and one special character.</small>
            </div>
            <button class="btn" name="submit" type="submit">Submit</button>
        </form> 
    </div>
    <script src="script.js"></script>
</body>
</html>

<?php
include("php/config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];

    // Insert into the database
    $query = mysqli_query($con, "INSERT INTO user (username, name, surname, email, password) VALUES ('$username', '$name', '$surname', '$email', '$password')");

    // Check if the query was successful
    if ($query) {
         echo "<p>Form submitted successfully.</p>";
        echo "<button class='btn' onclick=\"redirectToLogin()\">Go to Login Page</button>";
        echo "<script>
                function redirectToLogin() {
                    window.location.href = 'login.php';
                }
              </script>";
        exit();
    } else {
        echo "Registration was unsuccessful.";
    }
}
?>
