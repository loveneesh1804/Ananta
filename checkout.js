document.querySelector("#form").addEventListener("submit", myform);
function myform(event) {
    event.preventDefault();
    var email = form.mail.value;
    var firstname = form.firstName.value;
    var lastname = form.lastName.value;
    var address = form.address.value;
    var postalcode = form.postalCode.value;
    var city = form.city.value;
    var phone = form.phone.value;
    if(email === "" || firstname === "" || postalcode === "" || address === "" || phone === ""){
      setTimeout(function(){
        document.querySelector("#err").innerHTML = `<h4>(* These field are Mandatory and cannot be left Empty.)</h4>`;
      },300);
    }
    else{
      document.querySelector("#err").innerHTML = `<h3>${email}</h3><h3>${firstname} ${lastname}</h3><h3>${address} ${city}, ${postalcode}</h3><h4>${phone}</h4>`
      document.querySelector("#err").style.color = "black";
      document.querySelector("#SignUp").innerHTML = `Proceed to Payment <i class="fa-solid fa-angles-right font"></i>`;
      const element = document.querySelectorAll(".remover");
      for(var i=0;i<=9;i++){
        element[i].remove();
      }
        const coup = document.querySelector("#coupon");
        // coup.remove();
        coup.innerHTML = `<div id="coupon" style="margin-left: 8px;margin-bottom: 3px;">
        <h3 style="margin-top: 55px;font-size: 20px;justify-content: right;align-items: center;display: flex;">Contact Us</h3>
        <div id="iconpay1" style="margin-bottom: 4px;justify-content: right;">
          <i class="fab fa-facebook"></i>
          <i class="fab fa-youtube"></i>
          <i class="fab fa-instagram-square"></i>
          <i class="fab fa-pinterest"></i>
          <i class="fab fa-twitter"></i>
        </div>
        <hr>
    </div>`;
        document.querySelector("#form").addEventListener("submit",function(){
        window.location.href = "payment.html";
      })
    }
  };


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
    document.querySelector("#total").innerText = `₹`+`${total.toLocaleString()}`+`.00`;
    document.querySelector("#itemTotal").innerText = `${totalAmount}`;

}



subtotal();