<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment Confirmation | GEEKonix Restuarent</title>
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
    <link rel="stylesheet" href="style/payment-success.css" />
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
        <span id="thankyou-text">Thank-You!</span>
    </div>

    <div>
        <span id="payment-text">Payment Summary</span>
        <div>
            <img src="images/payment-summary/litti.png" alt="..." id="dish1-img">
            <span id="dish1-quant">1 x Litti Chokha</span>
            <span id="dish1-price">&#8377;150</span>
        </div>
        <div>
            <img src="images/payment-summary/bisleri.png" alt="..." id="dish2-img">
            <span id="dish2-quant">1 x Bisleri 1L</span>
            <span id="dish2-price">&#8377;20</span>
        </div>
        <div>
            <img src="images/payment-summary/waiter-pic.png" alt="..." id="waiter-pic">
            <span id="waiter-tip-text">Tip Amount</span>
            <span id="waiter-tip-price">&#8377;100</span>
        </div>
        <div>
            <span id="total-text">Total</span>
            <span id="total-amt">&#8377;270</span>
        </div>
        <div>
            <span id="txn-text">Txn Id:</span>
            <span id="txn-id-txt">xkyy1544wrkk1544</span>
        </div>
        <div>
            <img src="images/payment-success/paid-img.png" alt="..." id="paid-img"> 
        </div>
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
