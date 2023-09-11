function subtotal() {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  let total = 0;
  let totalAmount = 0;
  for (const item of cart) {
    const itemTotal = item.qty * item.price;
    total += itemTotal;
    const qtyTotal = item.qty;
    totalAmount += qtyTotal;
  }
  document.querySelector("#total").innerText = `₹` + `${total.toLocaleString()}` + `.00`;
  document.querySelector("#itemTotal").innerText = `${totalAmount}`;

}


function gen() {
  var numst = "";
  var characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
  for (var i = 0; i < 5; i++) {
    numst += characters.charAt(Math.floor(Math.random() * characters.length));
  }
  return numst;
}

function discount() {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  let total = 0;
  for (const item of cart) {
    const itemTotal = item.qty * item.price;
    total += itemTotal;
  }
  document.querySelector("#form2").addEventListener("submit", function (event) {
    event.preventDefault();
    var discount = form2.discount.value;
    console.log(discount);
    if (discount === "ANANTA50") {
      total = (total * 0.5);
      setTimeout(function () {
        document.querySelector("#total").innerText = `₹` + `${total.toFixed(2)}`;
        document.querySelector("#result").innerText = `Coupon Applied`;
        document.querySelector(".SignUp").style.display = "none";
        document.querySelector("#change").innerText = `(50% OFF)`;
        document.querySelector("#discount").remove();
        document.querySelector("#result12").remove();
      }, 100);
    }
    else if (discount === "ANANTAXR10") {
      total = (total * 0.9);
      setTimeout(function () {
        document.querySelector("#total").innerText = `₹` + `${total.toFixed(2)}`;
        document.querySelector("#result").innerText = `Coupon Applied`;
        document.querySelector(".SignUp").style.display = "none";
        document.querySelector("#change").innerText = `(10% OFF)`;
        document.querySelector("#discount").remove();
        document.querySelector("#result12").remove();
      }, 100);
    }
    else if (discount === "ANANTA#3OFF") {
      total = (total * 0.7);
      setTimeout(function () {
        document.querySelector("#total").innerText = `₹` + `${total.toFixed(2)}`;
        document.querySelector("#result").innerText = `Coupon Applied`;
        document.querySelector(".SignUp").style.display = "none";
        document.querySelector("#change").innerText = `(30% OFF)`;
        document.querySelector("#discount").remove();
        document.querySelector("#result12").remove();
      }, 100);
    }
    else if (discount === "ANANTASALEDAY15") {
      total = (total * 0.75);
      setTimeout(function () {
        document.querySelector("#total").innerText = `₹` + `${total.toFixed(2)}`;
        document.querySelector("#result").innerText = `Coupon Applied`;
        document.querySelector(".SignUp").style.display = "none";
        document.querySelector("#change").innerText = `(15% OFF)`;
        document.querySelector("#discount").remove();
        document.querySelector("#result12").remove();
      }, 100);
    }
    else {
      setTimeout(function () {
        document.querySelector("#result12").innerText = `Invalid Coupon`;
      }, 200);
    }
  });
}

let num = gen();
document.querySelector("#ranNum").innerText = `${num}`;

var form1 = document.querySelector("#form1");

document.querySelector("#form1").addEventListener("submit", myform);
function myform(event) {
  event.preventDefault()
  var confirm = form1.confirm.value;
  if (confirm === num) {
    var totalStatus = document.querySelector("#total").innerText;
    document.cookie = "Status_total="+totalStatus;
    // window.location.href = "sucess.html";
  }
  else if (confirm === "") {
    alert("FILL CAPTCHA TO PLACE ORDER.")
  }
  else {
    alert('INVALID CAPTCHA');
  }
}

subtotal();
discount();