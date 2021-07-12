// fetching Price String
let dish1AmountString = new String(
  document.getElementById("dish1-price").innerText
);
let dish2AmountString = new String(
  document.getElementById("dish2-price").innerText
);
let tipAmountString = new String(
  document.getElementById("waiter-tip-price").innerText
);

// converting price string into number
let dish1Price = new Number(
  dish1AmountString.substring(1, dish1AmountString.length)
);
let dish2Price = new Number(
  dish2AmountString.substring(1, dish2AmountString.length)
);
let tipPrice = new Number(tipAmountString.substring(1, tipAmountString.length));

// total price calculation
let totalPrice = new Number(dish1Price + dish2Price + tipPrice);

// updating total price in DOM
document.getElementById("total-amt").innerHTML = `&#8377;${totalPrice}`;

//pay now action
let payNowBtn = document.getElementById("payment-btn");
payNowBtn.addEventListener("click", payNowFunc);

function payNowFunc() {
  var name = "Ankit";
  var amt = totalPrice;

  jQuery.ajax({
    type: "post",
    url: "common-component/payment_process.php",
    data: "amt=" + amt + "&name=" + name,
    success: function (result) {
      var options = {
        key: "rzp_test_gic4Be1lWZr2SD",
        amount: amt * 100,
        currency: "INR",
        name: "GEEKonix Restuarant",
        description: "Complete Your Order Payment Here",
        image:
          "./../images/common/geekonix-logo.png",
        handler: function (response) {
          jQuery.ajax({
            type: "post",
            url: "common-component/payment_process.php",
            data: "payment_id=" + response.razorpay_payment_id,
            success: function (result) {
              window.location.href = `pages/payment-success.php?tip=${tipPrice}&amt=${totalPrice}&txnid=${response.razorpay_payment_id}`;
            },
          });
        },
      };
      var rzp1 = new Razorpay(options);
      rzp1.open();
    },
  });
}