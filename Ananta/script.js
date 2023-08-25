
function Redirect() {
  window.location.href = "shop.html";
}

function Redirect1() {
  window.location.href = "sports.html";
}
function Redirect2() {
  window.location.href = "members.html";
}
function Redirect3() {
  window.location.href = "login.html";
}
function Fbredirect() {
  window.location = "https://www.facebook.com";
}
function Twredirect() {
  window.location = "https://www.twitter.com";
}
function Inredirect() {
  window.location = "https://www.instagram.com";
}
function Ytredirect() {
  window.location = "https://www.youtube.com";
}
function Appredirect() {
  window.location = "https://www.apple.com/app-store";
}
function Payredirect() {
  window.location =
    "https://www.visa.co.in/pay-with-visa/featured-technologies/visa-secure.html";
}
function Checkout() {
    window.location.href = "checkout.html";
}
function shop(){
  window.location.href = "shop.html";
}

function qtytotal() {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  let totalAmount = 0;
  for (const item of cart) {
    const qtyTotal = item.qty ;
    totalAmount += qtyTotal;
  }
  document.querySelector("#cartAmount").innerText = `${totalAmount}`;
}

qtytotal();