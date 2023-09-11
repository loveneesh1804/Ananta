<?php
    session_start();
    error_reporting(0);
    $con = new mysqli("localhost","root","","ananta");
    $idname = $_SESSION['userid'];
    $query = "SELECT * FROM user_info WHERE username='$idname'";
    $result12 = mysqli_query($con,$query);
    $data2 = mysqli_fetch_assoc($result12);
    $sql = "SELECT * FROM order_details WHERE Username='$idname'";
    $result3 = mysqli_query($con,$sql);
    $rowNo = mysqli_num_rows($result3);
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
    <span class="black">
        <h3>UPI & NET BANKING AVILABLE!</h3><i class="fas fa-map-marker-alt"><strong
                style="color: white; font-size: 15px;">India</strong></i>
    </span>
    <section id="header">
        <a href="#"><img src="images/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="shop.php">Shop</a></li>
                <li><a href="purchase.php">Purchases</a></li>
                <li><a class="active" href="accountinfo.php">Account Info</a></li>
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
            </ul>
        </div>
    </section>
    <section id="form-details" style="display: flex;justify-content: center;gap: 10px;padding-bottom: 10px;">
        <form action="order1.php" method="post">
            <h2><span style="color: red;font-size: 40px;"> ACCOUNT</span> DETAILS</h2>
            <ul style="list-style:none;font-size:20px;">
                <li><strong>Name : </strong><?php echo $data2['name'];?></li>
                <li><strong>Username : </strong><?php echo $data2['username'];?></li>
                <li><strong>Mobile No : </strong><?php echo $data2['mobile'];?></li>
                <li><strong>Transaction : </strong><?php echo $rowNo; ?></li>
                <h4 style="margin-top:40px;font-size:25px;">Track Your <span style="color:grey;"> ORDER</span> </h4>
                <input style="width: 400px;" type="text" name="order_ID" placeholder="ORDER ID *" autocomplete="off">
            </ul>
        </form>
        <div class="people">
            <div>
                <i style="font-size:300px;" class="fas fa-user-circle"></i>  
            </div>
        </div>
    </section>
    <hr>
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