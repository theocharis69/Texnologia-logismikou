<!-- File path: /mnt/data/signup.html -->
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
      <form class="signup-form" id="signup-form">
        <h2>Sign Up</h2>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required />
        </div>
        <div class="form-group">
          <label for="surname">Surname</label>
          <input type="text" id="surname" name="surname" required />
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required />
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required />
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
          <small class="error-message" id="password-error"
            >Password must be at least 8 characters long, contain at least one
            digit, one uppercase letter, and one special character.</small
          >
        </div>
        <button type="submit">Sign Up</button>
      </form>
    </div>
    <script src="script.js"></script>
  </body>
</html>
