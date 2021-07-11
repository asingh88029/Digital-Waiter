<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Table | Dine In | GEEKonix Restuarant</title>

    <!-- default base url -->
    <base href="http://localhost/Digital-Waiter/" target="_blank">

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
    <!-- dinein css -->
    <link rel="stylesheet" href="style/dinein.css">
</head>
<body>
    <!-- adding navigation bar -->
    <?php
      require './../common-component/nav.php'; 
    ?>

    <div>
      <span id="choose-text">Choose Your</span>
      <span id="dine-table-text">Dine Table</span>
    </div>

    <div>
      <div>
        <img id="one-img" src="images/dinein/one.png" alt="...">
      </div>
      <div>
        <img id="two-img" src="images/dinein/two.png" alt="...">
      </div>
      <div>
        <img id="three-img" src="images/dinein/three.png" alt="...">
      </div>
      <div>
        <img id="four-img" src="images/dinein/four.png" alt="...">
      </div>
      <div>
        <img id="five-img" src="images/dinein/five.png" alt="...">
      </div>
      <div>
        <img id="six-img" src="images/dinein/six.png" alt="...">
      </div>
      <div>
        <img id="seven-img" src="images/dinein/seven.png" alt="...">
      </div>
      <div>
        <img id="eight-img" src="images/dinein/eight.png" alt="...">
      </div>
      <div>
        <img id="nine-img" src="images/dinein/nine.png" alt="...">
      </div>
      <div>
        <img id="ten-img" src="images/dinein/ten.png" alt="...">
      </div>
      <div>
        <img id="eleven-img" src="images/dinein/eleven.png" alt="...">
      </div>
      <div>
        <img id="twelve-img" src="images/dinein/twelve.png" alt="...">
      </div>
    </div>

    <div>
      <img id="family-table" src="images/dinein/family-table.png" alt="">
    </div>

    <?php
      require './../common-component/footer.php';
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