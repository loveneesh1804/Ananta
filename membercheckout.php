<?php
    session_start();
    error_reporting(0);
    $con = new mysqli("localhost","root","","ananta");
    $idname = $_SESSION['userid'];
    session_start();
    $con = new mysqli("localhost","root","","ananta");
    $check = $_SESSION['userid'];
    if($check == true){

    }
    else{
        header('location:login.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ananta</title>
    <script src="https://kit.fontawesome.com/9994241b69.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="checkout.css">
</head>
<body>
<?php

$Username = $_SESSION['userid'];
$Name = filter_input(INPUT_POST ,'firstname');
$Address = filter_input(INPUT_POST ,'address');
$Postal_code = filter_input(INPUT_POST ,'postalcode');
$Phone_No = filter_input(INPUT_POST ,'phone');
$Order_ID = $_COOKIE['ID_Order'];
$totalItems = $_COOKIE['itemsTotal'];
if(!empty($Address)){
    if(!empty($Username)){
        if(!empty($Name)){
            if(!empty($Postal_code)){
                if(!empty($Phone_No)){
                    $host ="localhost";
                    $dbusername ="root";
                    $dbpassword = "";
                    $dbname = "ananta";


                    $con = new mysqli($host,$dbusername,$dbpassword,$dbname);

                    if(mysqli_connect_error()){
                        die('Connect Error ('. mysqli_connect_errno().')'
                        . mysqli_connect_error());
                    }
                    else{
                        $sql = "INSERT INTO order_details (Username,Name,Address,Postal_code,Phone_No,order_ID,Items)
                        values ('$Username','$Name','$Address','$Postal_code','$Phone_No','$Order_ID','$totalItems')";
                        if ($con->query($sql)){
                            header('location:payment1.html');
                        }
                        else{
                            echo "ERROR". $sql ."<br>". $con->error;
                        }
                        $con->close();
                    }
                }
            }
        }
    }
}
else{
    echo '
    <div class="box">
    <div id="inner-heading">
        <img onClick="gotoHome()" style="width: 16rem;margin-left: 4rem;" src="./images/logox.png">
    </div>

    <div class="box">

        <div id="box-1">

            <div id="inner-box-1">
                <hr>
                <div id="secure-1">
                    <div id="secure">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-bag-check" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                            <path
                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                        </svg>
                        <h2>Secure checkout <small>powered by Anantafree</small> </h2>
                    </div>
                    <div id="secure" class="pad">
                        <small>English</small>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#777777" class=""
                            viewBox="0 0 16 16">
                            <path
                                d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </div>
                </div>

                <div id="secure-2">
                    <p>Already have a Ananta account? Click here.</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />
                    </svg>
                </div>
                <hr>

                <div id="secure" class="pad">
                    <h2 style="font-size: 18px;">Delivery</h2>&nbsp<span id="err" style="color: red;font-weight: 700;">(* Mandatory Fields Can Not Be Left Empty.)</span>
                </div>

                <div id="changeContent">
                    <form action="checkout.php" method="post" id="form">
                        <p style="color: red;font-size: 15px;"></p>
                        <input type="email" class="remover" placeholder="* Email" id="mail" name="username">
                        <input type="text" style="margin-bottom: 10px;" class="remover" placeholder="* First Name" id="firstName" name="firstname">
                        <input type="text" style="margin-bottom: 10px;" class="remover" placeholder="Last Name" id="lastName">
                        <input type="text" class="remover" placeholder="* Address" id="address" name="address">
                        <input type="text" class="remover" placeholder="Address 2(Optional)" id="address2">
                        <input type="text" class="remover" placeholder="* Postal Code" id="postalCode" name="postalcode">
                        <input type="text" class="remover" placeholder="City" id="city">
                        <input type="text" class="remover" placeholder="Locality" id="region">
                        <input type="text" class="remover" style="margin-bottom: 15px;" placeholder="* Phone" id="phone" name="phone">
                        <input type="text" class="remover" style="margin-bottom: 15px;" placeholder="Region (Optional)" id="location">
                        <button type="submit" id="SignUp">Proceed to Payment <span id="icon"><i class="fa-solid fa-angles-right font"></i></span></button>
                    </form>
                </div>
                <hr>
                <div class="bottom-text margin-text" style="margin-top: 10px;">By placing your order, you agree to the Terms & Conditions and
                    Privacy Policy of Anantafree from Pitney Bowes,</div>
                <div class="bottom-text">Anantas international fulfillment service. Anantafree is an online
                    merchant that is located at Shelton, US, 06484, 27</div>
                <div class="bottom-text">Waterview Drive, CT.</div>

            </div>

            <div id="inner-box-2">
                <hr>
                <div id="upper-part">
                    <div id="secure">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-cart3" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                        <h1 id="order">Your Order</h1>
                    </div>
                    <button id="SignUp-1" onclick="cart()"><i class="fa-solid fa-angles-left font"></i> Back to Cart</button>
                    <hr>
                    <table>
                        <tbody id="body">
                            <tr class="row">
                                <td>Items</td>
                                <td id="itemTotal">2000</td>
                            </tr>
                            <tr class="row">
                                <td>
                                    <h2>Total</h2>
                                </td>
                                <td style="font-size: 20px;font-weight: 600;" id="total">2000</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <!-- <div id="secure" class="promo">
                        <i class="fa-light fa-plus" style="color:#2A9DCC"></i>
                        <h1 style="font-size: 14px;color: #2A9DCC;">Promo Code</h1>
                    </div>
                    <hr> -->
                    <div id="coupon" style="margin-left: 8px;margin-bottom: 3px;">
                        <h3 style="margin-top: 300px;font-size: 30px;justify-content: left;align-items: center;display: flex;">We Accept</h3>
                        <div id="iconpay" style="margin-bottom: 4px;">
                            <i class="fab fa-cc-mastercard"></i>
                            <i class="fab fa-google-wallet"></i>
                            <i class="fab fa-paypal"></i>
                            <i class="fab fa-google-pay"></i>
                            <i class="fab fa-cc-visa"></i>
                            <i class="fab fa-cc-apple-pay"></i>
                            <i class="fab fa-cc-amazon-pay"></i>
                            <i class="fab fa-cc-stripe"></i>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function gotoHome() {
        window.location.href = "index.html";
    }
    function cart() {
        window.location.href = "cart.html";
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
        document.querySelector("#total").innerText = `₹`+`${total.toLocaleString()}`+`.00`;
        document.querySelector("#itemTotal").innerText = `${totalAmount}`;
    
    }
    subtotal();
    </script>
    ';
    die();
}

?>
<script src="script.js"></script>
</body>
</html>