<?php
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

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <link rel="stylesheet" href="style.css">
</head>
<style>
    #logout{
        position: relative;
    }
    #coldown{
        position: absolute;
        top: 23px;
        right: 0px;
        width:90%;
        visibility:hidden;
    }
    #coldown .cd{
        background-color: #f9f9f9;
    }
    .cd li{
        padding: 20px;
    }
    .cd span:hover{
        border-bottom:3px solid black;
        cursor: pointer;
    }
    #logers:hover .cd{
        visibility: visible;
        cursor: pointer;
    }
</style>
<body>
    <span  class="black"><h3>USE ANANTA EXCITING COUPON!</h3><i class="fas fa-map-marker-alt"><strong style="color: white; font-size: 15px;">India</strong></i></span>

    <section id="header">
        <a href="#"><img src="images/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="purchase.php">Purchases</a></li>
                <li><a href="accountinfo.php">Account Info</a></li>
                <div id="logout">
                    <div id="logers">
                        <li><a>Logout <i class="fas fa-sign-out-alt"></i></a></li>
                        <div id="coldown">
                            <div class="cd">
                                <li style="padding:10px 20px;"><span onclick="window.location.href = 'logout.php';">Yes</span></li>
                                <li style="padding:10px 20px;"><span onclick="window.location.href = 'accountinfo.php';">No</span></li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart">
                    <li style="border-radius: 50%;padding: 10px;background-color: rgb(222, 222, 222);"><a
                            href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                    <div id="cartAmount"></div>
                </div>
            </ul>
        </div>
    </section>
    <section id="at-cart">
        <h2>#SHOPPING <span>CART.</span></h2>
        <p>Women who wear black have colorful lives.</p>
    </section>
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td><strong>REMOVE</strong></td>
                    <td><strong>IMAGE</strong></td>
                    <td><strong>PRODUCT</strong></td>
                    <td><strong>QUANTITY</strong></td>
                    <td><strong>PRICE</strong></td>
                </tr>
            </thead>
            <tbody id="tableBody">

            </tbody>
        </table>
    </section>
    <div id="emptyCart"></div>
    <section id="addcart" class="section-p1">
        <div id="coupon">
            <!-- <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="ENTER COUPON CODE">
                <button class="normal">APPLY</button>
            </div> -->
            <img src="images/URL.png" alt="" style="margin: 30px;margin-left: 210px;">
            <p style="text-align: center;margin-right: 20px;">By Scanning this you'll be redirected to Ananta Coupon System where you can Avail my <span style="color: red;">exciting offers and Coupon Codes with discount Upto 70%-OFF.</span> Grab these Exciting codes Now.</p>
        </div>

        <div id="subtotal">
            <h3>BAG TOTAL</h3>
            <table>
                <tr>
                    <td>Bag Sub-Total</td>
                    <td id="sub-total"></td>
                </tr>
                <tr>
                    <td>SHIPPING</td>
                    <td>FREE</td>
                </tr>
                <tr>
                    <td><strong>TOTAL</strong></td>
                    <td id="total" style="font-weight: 800;"><strong></strong></td>
                </tr>
            </table>
            <button class="normal" id="checkbut" onclick= "window.location.href='membercheckout.html';">CHECKOUT</button>
        </div>
    </section>
    <section id="banner" class="section-m1">
        <h4>FREE DELIVERY, FREE RETURNS</h4>
        <h2>JOIN ANANTA AND GET <span>15% OFF</span></h2>
        <button class="normal" onclick ="Redirect3();">SIGN UP FOR FREE </button>
    </section>
    <footer class="section-p1" id="fooot">
        <div class="column">
            <img class="logo" src="images/zx.png" alt="ERROR LOADING">
            <h4>Contact</h4>
            <p><strong>Ananta </strong> Osteria Belivery Hills da Massimo Buttra</p>
            <p>© 2016 - 2020 ANANTA S.p.A. - All rights reserved.<strong>License</strong> # 2294/I/193</p>
            <div class="follow">
                <h4>FIND US ON</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f" onclick = "Fbredirect();"></i>
                    <i class="fab fa-twitter" onclick = "Twredirect();"></i>
                    <i class="fab fa-instagram" onclick ="Inredirect();"></i>
                    <i class="fab fa-youtube" onclick ="Ytredirect();"></i>
                </div>
            </div>
        </div>

        <div class="column">
            <h4>The Comapny</h4>
            <a href="about.html">About Ananta</a>
            <a href="privacy.html">Privacy & Cookies</a>
            <a href="legal.html">Legal</a>
            <a href="coinfo.html">Corporate Information</a>
        </div>

        <div class="column">
            <h4>NEED HELP?</h4>
            <a href="contact.html">Contact Us</a>
            <a href="shipping.html">Shipping Services</a>
            <a href="procare.html">Product Care</a>
            <a href="return.html">Return & Exchange</a>
            <a href="faq.html">FAQs</a>
        </div>

        <div class="column install">
            <h4>Install Now</h4>
            <p>Avilable on App store</p>
            <div class="row">
                <img src="images/app.jpg" onclick="Appredirect();" alt="ERROR LOADING">
            <p>Secured Payment</p>
            <img src="images/pay.png" onclick="Payredirect();" alt="ERROR LOADING">
        </div>
    </footer>
    <h3 class="foot12">Copyright © 2018 – All Rights Reserved.</h3>
    <script src="script.js">
    </script>
    <script type="module" src="./cart.js"></script>
</body>
</html>