<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <a href="homepage.php" class="nav-link" id="Go-Back">Go back</a>
    <div class="login-container">
      <button id="theme-toggle">Change to Dark</button>
      <?php
        include("php/config.php");
        
        if(isset($_POST['submit'])) {
          $email = mysqli_real_escape_string($con, $_POST['email']);
          $password = mysqli_real_escape_string($con, $_POST['password']);

          // Perform query to check if user exists
          $result = mysqli_query($con, "SELECT * FROM user WHERE email='$email' AND password='$password'") or die("Select Error");
          $row = mysqli_fetch_assoc($result);

          // Check if a valid user was found
          if(is_array($row) && !empty($row)) {
            // Set session variables
            $_SESSION['valid'] = $row['email'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['surname'] = $row['surname'];

            // Redirect to user page
            header("Location: user.php");
            exit();
          } else {
            // Display error message if login failed
            echo "<div class='message'>
                    <p>Wrong Username or Password</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Go back</button></a>";
          }
        } else {
      ?>
      <form class="login-form" method="post">
        <h2>Login</h2>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>
        <button type="submit" name="submit" class="btn">Login</button>
      </form>
      <?php
        }
      ?>
    </div>
    <script src="script.js"></script>
  </body>
</html>
