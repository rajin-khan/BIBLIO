<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="normalize" href="css/normalize.css">
    <link rel="stylesheet" href="adminlogin.css">
    <link href="https://fonts.cdnfonts.com/css/roseritta" rel="stylesheet">
</head>
<body>
    <form action="adminlogin.php" method="POST">
        <img class="background" src="/BIBLIO/frontend/webimages/admin login.png" alt="Background of admin login page">

        <a href="/BIBLIO/frontend/landing.html">
            <p id="backButton">BACK</p>
        </a>
        
        <input type="text" name="id" id="username" placeholder="Admin ID" required>
        <input type="password" name="password" id="password" placeholder="Password" required>

        <input type="submit" name="login" id="loginButton" value="LOGIN">
        
    </form>
</body>
</html>
