<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Request</title>
    <link rel="normalize" href="css/normalize.css" />
    <link href="https://fonts.cdnfonts.com/css/roseritta" rel="stylesheet" />

    <style>
      * {
        margin: 0px;
        margin-bottom: -5px;
      }

      body {
        position: relative;
      }

      .background {
        width: 100%;
        height: 100%;

        z-index: -99999;
      }

      #backButton {
        position: absolute;

        font-family: "Roseritta", sans-serif;
        font-size: 120%;
        color: white;
        text-decoration: underline;

        top: 17.2vh;
        left: 5vw;
      }

      #bookName {
        position: absolute;

        background-color: black;
        border: 1px solid white;
        color: white;

        width: 660px;
        height: 40px;
        border-radius: 20px;

        left: 45vw;
        top: 32.5vh;

        text-align: center;
      }

      #ISBN {
        position: absolute;

        background-color: black;
        border: 1px solid white;
        color: white;

        width: 660px;
        height: 40px;
        border-radius: 20px;

        left: 45vw;
        top: 45.5vh;

        text-align: center;
      }

      #authorName {
        position: absolute;

        background-color: black;
        border: 1px solid white;
        color: white;

        width: 660px;
        height: 40px;
        border-radius: 20px;

        left: 45vw;
        top: 58.5vh;

        text-align: center;
      }

      #Sender_name {
        position: absolute;

        background-color: black;
        border: 1px solid white;
        color: white;

        width: 660px;
        height: 40px;
        border-radius: 20px;

        left: 45vw;
        top: 72vh;

        text-align: center;
      }

      #submitRequestButton {
        position: absolute;

        font-family: "Roseritta", sans-serif;
        color: white;
        font-size: 150%;

        background-color: black;
        border: solid 1px white;
        border-radius: 25px;

        padding-left: 30px;
        padding-right: 30px;
        padding-top: 10px;

        right: 9.6vw;
        bottom: 12vh;
      }
    </style>
  </head>
  <body>
    <form action="request_book.php" method="post">
      <img
        class="background"
        src="BIBLIO/frontend/webimages/request.png"
        alt="Background of user login page"
      />

      <a href="/BIBLIO/frontend/userDashboard.html">
        <p id="backButton">BACK</p>
      </a>

      <input type="text" id="bookName" name="bookName" placeholder="Full Book Name" />
      <input
        type="text"
        id="ISBN"
        name="ISBN"
        placeholder="ISBN Number (Can be found online)"
      />
      <input
        type="text"
        id="authorName"
        name="authorName"
        placeholder="Full Name of the Author"
        required
      />
      <input
        type="text"
        id="Sender_name"
        name="Sender_name"
        placeholder="sender name"
        required
      />

      <input type="submit" id="submitRequestButton" value="SUBMIT" />
    </form>
  </body>
</html>
