import data from "./db.json" assert { type: "json" };

let cart = JSON.parse(localStorage.getItem("cart")) || [];

data.map((el, index) => {
  var div = document.createElement("div");
  div.classList.add("pro");

  var img = document.createElement("img");
  img.setAttribute("src", el.src);

  var div2 = document.createElement("div");
  div2.classList.add("des");

  var span = document.createElement("span");
  span.innerText = el.heroName;

  var h5 = document.createElement("h5");
  h5.innerText = el.productName;

  var div3 = document.createElement("div");
  div3.classList.add("star");
  div3.innerHTML = `<i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>`;

  var h4 = document.createElement("h4");
  h4.innerText = `$${el.price}`;

  var addToCart = document.createElement("button");
  addToCart.style.border = "none";
  addToCart.style.background = "none";
  addToCart.style.cursor = "pointer";
  addToCart.innerHTML = `<i class="fal fa-shopping-cart cart"></i>`;
  addToCart.addEventListener("click", () => {
    toCart(el);
  });

  div2.append(span, h5, div3, h4, addToCart);
  div.append(img, div2);

  document.querySelector("#container").append(div);
});

function toCart(el) {
  let flag = false;
  cart.map((element, ind) => {
    if (element.id == el.id) {
      element.qty = element.qty + 1;
      flag = true;
    }
  });
  if (flag) {
    localStorage.setItem("cart", JSON.stringify(cart));
    qtytotal();
  } else {
    el.qty = 1;
    cart.push(el);
    localStorage.setItem("cart", JSON.stringify(cart));
    qtytotal();
  }
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