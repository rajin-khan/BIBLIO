<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file for styling -->
</head>
<body>
    <div class="container">
        <h2>Admin Login</h2>
        <form action="adminlogin.php" method="post">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
        <?php
        if (isset($wrongPassword) && $wrongPassword) {
            echo '<br><br><center><span class="alert-danger">Wrong Password !! An email has been sent to you regarding this attempt.</span></center>';
        } elseif (isset($_POST['login']) && !$wrongPassword) {
            echo '<br><br><center><span class="alert-danger">Email not found. Please check your email and try again.</span></center>';
        }
        ?>
    </div>
</body>
</html>
