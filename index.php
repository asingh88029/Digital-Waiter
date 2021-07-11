<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GEEKonix Restuarant | Home</title>

    <!-- default base url -->
    <base href="http://localhost/Digital-Waiter/">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">

    <!-- add style sheet links //bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- common css -->
    <link rel="stylesheet" href="style/common.css">
    <!-- index css -->
    <link rel="stylesheet" href="style/index.css">

  </head>
  <body>

    <!-- adding navigation bar -->
    <?php
      require './common-component/nav.php'; 
    ?>

    <div>
      <span id="welcome-text">Welcome!</span>
    </div>

    <div>
      <span id="geekonix-text">GEEKonix Restuarant</span>
    </div>

    <div>
      <div>
        <img id="take-away" src="images/index/take-away.png" alt="...">
        <span id="take-away-text">Take Away</span>
      </div>
      <div>
        <a href="pages/dinein.php">
        <img id="dine-in" src="images/index/dine-in.png" alt="...">
        <span id="dine-in-text">Dine In</span>
        </a>
      </div>
      <div>
        <img id="door-step" src="images/index/door-step.png" alt="...">
        <span id="door-step-text">Door Step</span>
      </div>
    </div>

    <div>
      <img id="banner-thali" src="images/index/banner-thali.png" alt="...">
    </div>

    <div>
      <img id="offer-img" src="images/index/offer-img.png" alt="...">
      <span id="today-special-text">Today's Special For You</span>
    </div>

    <div>
      <div>
        <img id="dosa" src="images/index/dosa.png" alt="...">
        <span id="dosa-text">Masala Dosa</span>
      </div>
      <div>
        <img id="fish-curry" src="images/index/fish-curry.png" alt="...">
        <span id="fish-curry-text">Fish Curry</span>
      </div>
      <div>
        <img id="litti-chokha" src="images/index/litti-chokha.png" alt="...">
        <span id="litti-chokha-text">Litti Chokha</span>
      </div>
      <div>
        <img id="biryani" src="images/index/biryani.png" alt="...">
        <span id="biryani-text">Biryani</span>
      </div>
    </div>

    <?php
      require './common-component/footer.php';
    ?>

    <!-- add scripts link here -->
    <!-- bootstrap important scripts links -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
