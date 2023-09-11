<?php
    session_start();
    $con = new mysqli("localhost","root","","ananta");
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
    #tracker {
        display: flex;
        flex-direction: column;
        background-color: black;
        justify-content: center;
        height: 25vh;
        align-items: center;
    }

    #tracker h1,
    #tracker h3 {
        color: white;
    }
    #form-details button:hover{
        background-color: #616161;
    }
    #details{
        list-style: none;
        font-size:20px;
    }
</style>

<body>
    <span class="black">
        <h3>UPI & NET BANKING AVILABLE!</h3><i class="fas fa-map-marker-alt"><strong
                style="color: white; font-size: 15px;">India</strong></i>
    </span>
    <section id="header">
        <a href="#"><img src="images/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <div id="down">
                    <li><a id="userlog" href="login.html">Login&nbsp;&nbsp;<i class="fad fa-chevron-double-down"
                                style="--fa-secondary-color: #616161; --fa-primary-color: #000000;"></i>&nbsp;&nbsp;&nbsp;</a>
                    </li>
                    <div class="col">
                        <ul class="hov">
                            <li><button onclick="window.location.href = 'signup.html';">Sign Up | Create
                                    Account</button></li>
                            <li style="font-size: 16px;"><strong>Your Account</strong></li>
                            <li><i class="fas fa-briefcase"></i></i><span>Purchases</span></li>
                            <li><i class="fas fa-heart-circle"
                                    style="color: rgb(201, 46, 46);"></i><span>Wishlist</span></li>
                            <li><i class="fab fa-atlassian"></i><span>The Ananta Club</span></li>
                            <li onclick="window.location.href = 'order.html'"><i class="fas fa-truck-moving"></i><span
                                    style="color: red;font-weight: 600;">Order Tracker</span></li>
                            <li><i class="fas fa-money-check-alt"></i><span>Payment Methods</span></li>
                            <li><i class="fas fa-eye"></i><span>Looks</span></li>
                            <li><i class="fas fa-shopping-cart"></i><span>Pay & Manage Ananta Card</span></li>
                            <li style="margin-top: 40px;font-size: 16px;"><strong>Account Settings</strong></li>
                            <li><span>Password & Personal Info</span></li>
                            <li><span>Email & Mail Prefrences</span></li>
                            <li><span>Stores & Events</span></li>
                            <li style="margin-top: 40px;"><strong>We're here to help, 24/7</strong></li>
                            <li onclick="window.location.href = 'contact.html'" style="margin-bottom: 20px;">
                                <span>Contact Us</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="cart">
                    <li style="border-radius: 50%;padding: 10px;background-color: rgb(222, 222, 222);"><a
                            href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
                    <div id="cartAmount"></div>
                </div>
            </ul>
        </div>
    </section>
    <section id="tracker">
        <h1>ORDER TRACKING</h1>
        <h3>Trace Your Order</h3>
    </section>
    <section id="form-details" style="display: flex;justify-content: center;gap: 10px;padding-bottom: 10px;">
        <form action="order.php" method="post">
            <h2><span style="color: red;font-size: 40px;"> ORDER</span> DETAILS</h2>
            <ul id="details">
                <li><strong>Order ID : </strong><?php echo $_SESSION['ID_order'] ?></li>
                <li><strong>E Mail : </strong><?php echo $_SESSION['User'] ?></li>
                <li><strong>Name : </strong><?php echo $_SESSION['customer'] ?></li>
                <li><strong>Address : </strong><?php echo $_SESSION['location'] ?></li>
                <li style="margin-left:110px;"><?php echo $_SESSION['Pin'] ?></li>
                <li><strong>Phone Number : </strong><?php echo $_SESSION['Contact'] ?></li>
                <li><strong>Order Status : </strong><span style="color:red;font-size:20px;font-weight:600;"><?php echo $_SESSION['Remark'] ?></span></li>
                <li><strong>Total Items : </strong><span style="color:red;font-size:20px;font-weight:600;"><?php echo $_SESSION['Itemtot'] ?></span></li>
                <li><strong>Bill Amount : </strong><span style="color:red;font-size:20px;font-weight:600;"><?php echo $_SESSION['Paid'] ?></span></li>
            </ul>
        </form>
        <div class="people">
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30773234.484104022!2d61.03020467618885!3d19.691396159420602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1693637190537!5m2!1sen!2sin"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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
    <script src="script.js">
    </script>
    <script type="module" src="./products.js">
    </script>