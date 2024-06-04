<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define your user credentials
    $valid_user_id = "admin";
    $valid_password = "password123";

    // Get user input
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];

    // Check if credentials are valid
    if($user_id === $valid_user_id && $password === $valid_password) {
        // Authentication successful
        $_SESSION['user_id'] = $user_id;
        header("location: welcome.php"); // Redirect to welcome page
    } else {
        // Authentication failed
        $error = "Invalid user ID or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>
<body>
    <h2>User Login</h2>
    <?php if(isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="user_id">User ID:</label><br>
        <input type="text" id="user_id" name="user_id" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>