<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="normalize" href="css/normalize.css">
    <link rel="stylesheet" href="css/signup.css">
    <link href="https://fonts.cdnfonts.com/css/roseritta" rel="stylesheet">
</head>
<body>
    <form action="userRegistration.php" method="POST">

        <img class="background" src="/BIBLIO/frontend/webimages/signup.png" alt="Background of user login page">

        <a href="/BIBLIO/frontend/landing.html">
            <p id="backButton">BACK</p>
        </a>
        
        <input type="text" id="name" name="name" placeholder="Full Name">
        <input type="email" id="email" name="email" placeholder="email@example.com">
        <input type="date" id="DOB" name="DOB">
        <input type="text" id="phone" name="mobile" placeholder="Number">
        <input type="text" id="username" name="id" required>
        <input type="password" id="password" name="password" required>

        <input type="submit" id="signUpButton" value="SIGN UP">
        
    </form>
</body>
</html>
