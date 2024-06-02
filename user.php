<?php
session_start();
if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Page</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
        <h2>Pnp & Nodas</h2>
        <nav>
            <a href="logout.php" class="nav-link">Sign out</a>
            <button id="theme-toggle">Change to Dark</button>
        </nav>
    </header>
    <div class="user-container">
        <div class="user-attributes">
            <?php if (isset($_SESSION['valid'])): ?>
                <form action="update_user.php" method="post">
                    <h3>User Details</h3>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="<?php echo $_SESSION['valid']; ?>" readonly />
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" value="<?php echo $_SESSION['username']; ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="name">First Name:</label>
                        <input type="text" id="name" name="name" value="<?php echo $_SESSION['name']; ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="surname">Surname:</label>
                        <input type="text" id="surname" name="surname" value="<?php echo $_SESSION['surname']; ?>" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" value="<?php echo $_SESSION['password']; ?>" required />
                    </div>
                    <button type="submit" name="update" class="btn">Update</button>
                </form>
                <form action="delete_user.php" method="post">
                    <button type="submit" name="delete" class="btn btn-danger">Delete Account</button>
                </form>
            <?php else: ?>
                <a href="login.php">Go to Login</a></div>
            <?php endif; ?>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
