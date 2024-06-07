<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/userlogin.css">
    <link href="https://fonts.cdnfonts.com/css/roseritta" rel="stylesheet">
</head>
<body>
    <form method="POST" action="userlogin.php" >

        <img class="background" src="/BIBLIO/frontend/webimages/login.png" alt="Background of user login page">

        <a href="/BIBLIO/frontend/landing.html">
            <p id="backButton">BACK</p>
        </a>
        
        <input type="text" id="username" name="email"> 

        <input type="password" id="password" name="password" required> 

        <input type="submit" id="loginButton" name="login" value="LOGIN"> 

    </form>
</body>
</html>
