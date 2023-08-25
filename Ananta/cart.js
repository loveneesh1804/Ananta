let cart = JSON.parse(localStorage.getItem("cart")) || [];

function display(c) {
  document.querySelector("#tableBody").innerHTML = ``;
  c.map((el, ind) => {
    var tr = document.createElement("tr");

    var removeIcon = document.createElement("td");
    removeIcon.addEventListener("click", () => {
      handleRemove(el);
    });
    removeIcon.innerHTML = `<a class="remove"><i class=" far fa-times-circle "></i></a>`;

    var item = document.createElement("td");
    var img = document.createElement("img");
    img.setAttribute("src", el.src);
    item.append(img);

    var name = document.createElement("td");
    name.innerText = el.productName;

    var quantity = document.createElement("td");
    var input = document.createElement("input");
    input.type = "number";
    input.value = el.qty;
    input.min = 1;
    input.addEventListener("change", (event) => {
      let value = event.target.value >= 1 ? event.target.value : 1;
      handleChange(value, el);
    });

    quantity.append(input);

    var price = document.createElement("td");
    price.innerText = `$${el.price}`;

    tr.append(removeIcon, item, name, quantity, price);
    document.querySelector("#tableBody").append(tr);
  });
}

function handleChange(qty, el) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  cart.map((element) => {
    if (element.id == el.id) {
      element.qty = Number(qty);
    }
  });
  localStorage.setItem("cart", JSON.stringify(cart));
  subtotal();
}



function handleRemove(el) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  let newCart = cart.filter((item) => item.id != el.id);
  localStorage.setItem("cart", JSON.stringify(newCart));
  display(newCart);
  subtotal();
}

function subtotal() {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  let total = 0;
  let totalAmount = 0;
  for (const item of cart) {
    const itemTotal = item.qty * item.price;
    total += itemTotal;
    const qtyTotal = item.qty ;
    totalAmount += qtyTotal;
  }
  document.querySelector("#sub-total").innerText = `$${total.toFixed(2)}`;
  document.querySelector("#total").innerText = `$${total.toFixed(2)}`;
  document.querySelector("#cartAmount").innerText = `${totalAmount}`;
  while(totalAmount === 0){
    document.querySelector("#emptyCart").innerHTML = `<h1>YOUR CART IS <span> EMPTY</span> </h1>
    <p>Looks like you have'nt added any item to your Cart.</p><br>
    <button onclick = "shop();">ADD ITEM TO CART</button><hr>`;
    const clear = document.querySelector("#checkbut");
    clear.remove();
  }  
}



display(cart);
subtotal();
