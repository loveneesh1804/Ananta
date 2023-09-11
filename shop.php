<?php
    session_start();
    $con = new mysqli("localhost","root","","ananta");
    $check = $_SESSION['userid'];
    if($check == true){

    }
    else{
        header('location:index.html');
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
    <style>
        #navdown {
            position: relative;
        }

        #dropdown {
            display: flex;
            align-items: center;
            justify-content: center;
            list-style: none;
            background-color: #f2f3f6;
            height: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        #dropdown a {
            margin: 0px 30px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        #navdown span:hover {
            border-bottom: 3px solid #333;
            cursor: pointer;
        }

        .subnav1 {
            display: flex;
            justify-content: center;
            position: absolute;
            box-sizing: border-box;
            top: 26px;
            right: 0px;
            width: 100%;
            padding: 50px 0px;
            padding-bottom: 40px;
            background-color: #f9f9f9;
            /* transition: all 0.3s ease-in-out; */
            visibility: hidden;
        }

        .colu1 li {
            list-style: none;
            font-size: 14px;
            padding: 7px 22px;
            color: #000000;
        }

        .bolde li {
            font-weight: 700;
            font-size: 14px;
        }

        #male:hover .subnav1 {
            visibility: visible;
            /* transition: all 0.3s ease-in-out; */
        }
        #female:hover .subnav1 {
            visibility: visible;
            /* transition: all 0.3s ease-in-out; */
        }
        .subnav2 {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            position: absolute;
            box-sizing: border-box;
            top: 26px;
            right: 500px;
            width: 24%;
            padding: 50px 0px;
            background-color: #f9f9f9;
            visibility: hidden;
        }
        #brandes:hover .subnav2 {
            visibility: visible;
            /* transition: all 0.3 ease-in-out; */
        }
        .colu1 i{
            padding-right: 5px;
            font-size: 20px;
        }
        #kidzs:hover .subnav1{
            visibility: visible;
            /* transition: all 0.3 ease-in-out; */
        }
        .subnav3 {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: absolute;
            box-sizing: border-box;
            top: 26px;
            right: 200px;
            width: 38%;
            padding: 20px 0px;
            background-color: #f9f9f9;
            visibility: hidden;
        }
        .subnav3 button{
            padding: 15px 25px;
            background-color: transparent;
            font-weight: 800;
            border: 1px solid #bebdbd;
            border-radius: 2px;
            font-size: 13px;
        }
        .subnav3 i{
            padding: 0px 10px;
            margin-left: 10px;
            color: #7c7c7c;
        }
        #imglog:hover .subnav3 {
            visibility: visible;
            /* transition: all 0.3 ease-in-out; */
        }
        #newwer{
            position: absolute;
            right: 490px;
            font-size: 9px;
            color: red;
            font-weight: 800;
        }
        #xyz123 span:hover{
            border-bottom: 3px solid rgb(240, 13, 13);
            cursor: pointer;
        }
        #purchase table{
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
            white-space: nowrap;
        }

        #purchase table thead{
            border: 1px solid rgb(206,197,197);
            border-left: none;
            border-right: none;
            padding: 10px 10px;
        }

        #purchase table td{
            padding: 20px 10px;
            font-size: 20px;
            text-align:center;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
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
</head>

<body>
    <span class="black">
        <h3>UPI & NET BANKING AVILABLE!</h3><i class="fas fa-map-marker-alt"><strong
                style="color: white; font-size: 15px;">India</strong></i>
    </span>
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
    <section id="hero12">
        <h2><span>#LIFE</span> IS TOO SHORT!</h2>
        <p>USE <span>WISELY</span>.</p>
    </section>
    <section id="product" class="section-p1">
        <div class="pro-container" id="container">
            <!-- From shop.js -->
        </div>

    </section>
    <section id="page" class="section-p1">
        <a href="shop.html">1</a>
        <!-- <a href="shop2.html">2</a>
        <a href="shop3.html">3</a>
        <a href="shop1.html"><i class="fal fa-long-arrow-alt-right"></i></a> -->
    </section>
    <section id="update" class="section-p1 section-m1">
        <div class="news">
            <h4>SIGN UP FOR ANANTA UPDATES</h4>
            <p>By entering your email address, you consent to receiving our newsletter with access to our<span>
                    collections, events and initiatives.</span> </p>
        </div>
        <div class="form">
            <input type="email" placeholder="Email Address">
        </div>
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
                    <i class="fab fa-facebook-f" onclick="Fbredirect();"></i>
                    <i class="fab fa-twitter" onclick="Twredirect();"></i>
                    <i class="fab fa-instagram" onclick="Inredirect();"></i>
                    <i class="fab fa-youtube" onclick="Ytredirect();"></i>
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


</body>
<script src="./script.js"></script>
<script type="module" src="./shop.js"></script>
</body>

</html>