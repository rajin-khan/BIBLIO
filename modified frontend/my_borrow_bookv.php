<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="normalize" href="css/normalize.css">
    <link href="https://fonts.cdnfonts.com/css/roseritta" rel="stylesheet">

    <style>

        * {

            margin: 0px;
            margin-bottom: -5px;
        }
        
        body {
        
            position: relative
        }
        
        .background {
        
            width: 100%;
            height: 100%;
        
            z-index: -99999;
        }
        
        #username {

            position:absolute;
        
            width: 300px;
            height: 30px;
            border-radius: 15px;
        
            right: 40vw;
            top: 55vh;
        
            text-align: center;
        }
        
        button {
        
            position: absolute;
        
            border-radius: 25px;
            z-index: 101;
        
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 9px;
        }

        #enterButton {

            position: absolute;
        
            font-family: 'Roseritta', sans-serif;
            color: white;
            font-size: 150%;
        
            background-color: black;
            border: solid 1px white;
            border-radius: 25px;
        
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 10px;
        
            right: 46.5vw;
            top: 63vh;
        }

    </style>

</head>
<body>

    <div class="background">
        <img class="background" src="BIBLIO/frontend/webimages/usernameInput.png" alt="Background of profile page">
    </div>

    <form action="my_borrow_book.php" method="post">
        <input type="text" id="username" name="username" placeholder="Enter your username here">
        <input type="submit" id="enterButton" value="ENTER">
    </form>

</body>
</html>