<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Tip | GEEKonix Restuarent</title>
    <!-- default base url -->
    <base href="http://localhost/Digital-Waiter/"/>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Arvo&display=swap"
      rel="stylesheet"
    />

    <!-- add style sheet links //bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- common css -->
    <link rel="stylesheet" href="style/common.css" />
    <!-- dinein css -->
    <link rel="stylesheet" href="style/addtip.css" />
  </head>
  <body>
      <!-- adding navigation bar -->
    <?php
        require './../common-component/nav.php'; 
    ?>

    <div>
      <div>
          <img id="waiter-img" src="images/waiter/waiter-img.png" alt="...">
          <img id="table-num" src="images/waiter/table-num.png" alt="...">
      </div>
      <div>
          <span id="waiter-name">John Huk</span>
          <span id="waiter-lang">Hindi | Bengali | English</span>
      </div>
      <div>
        <img id="waiter-star" src="images/waiter/waiter-star.png" alt="...">
      </div>
    </div>

    <div>
        <span id="waiter-help-text">Help John's Family</span>
    </div>

    <div>
        <img id="waiter-family-pic" src="images/addtip/waiter-family-pic.png" alt="...">
    </div>

    <div>
        <span id="add-tip-text">Add Tip:</span>
    </div>

    <div>
        <button id="amt1-btn" class="amt-btn-text">&#8377; 10</button>
        <button id="amt2-btn" class="amt-btn-text">&#8377; 50</button>
        <button id="amt3-btn" class="amt-btn-text">&#8377; 100</button>
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
    <script src="script/addtip.js"></script>
  </body>
</html>
