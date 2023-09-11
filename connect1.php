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
<body>
<?php
session_start();
$host ="localhost";
$dbusername ="root";
$dbpassword = "";
$dbname = "ananta";


$con = new mysqli($host,$dbusername,$dbpassword,$dbname);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "Select * from user_info where username='$username' AND password='$password'";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        $data = mysqli_fetch_assoc($result);
        $name = $data['name'];
        $_SESSION['Name12'] = $name;
        $_SESSION['userid'] = $username;


       
        // echo '
        // <span class="black">
        // <h3>UPI & NET BANKING AVILABLE!</h3><i class="fas fa-map-marker-alt"><strong
        //         style="color: white; font-size: 15px;">India</strong></i>
        // </span>
        // <section id="header" style="background-color: #f9f9f9;">
        //     <a href="#"><img src="images/logo.png" class="logo" alt=""></a>
        //     <div>
        //         <ul id="navbar">
        //             <li><a class="active" href="#">My Account</a></li>
        //         </ul>
        //     </div>
        // </section>
        // <section id="sucess">
        //     <i class="fas fa-wreath" style="color: #3bba50;"></i>
        //     <h2>LOGIN <span style="color: #3bba50;">SUCCESSFUL</span></h2>
        //     <h3>WELCOME BACK!</h3>
        // </section>
        // <footer class="section-p1" id="fooot">
        //     <div class="column">
        //         <img class="logo" src="images/zx.png" alt="ERROR LOADING">
        //         <h4>Contact</h4>
        //         <p><strong>Ananta </strong> Osteria Belivery Hills da Massimo Buttra</p>
        //         <p>© 2016 - 2020 ANANTA S.p.A. - All rights reserved.<strong>License</strong> # 2294/I/193</p>
        //         <div class="follow">
        //             <h4>FIND US ON</h4>
        //             <div class="icon">
        //                 <i class="fab fa-facebook-f" onclick = "Fbredirect();"></i>
        //                 <i class="fab fa-twitter" onclick = "Twredirect();"></i>
        //                 <i class="fab fa-instagram" onclick ="Inredirect();"></i>
        //                 <i class="fab fa-youtube" onclick ="Ytredirect();"></i>
        //             </div>
        //         </div>
        //     </div>
    
        //     <div class="column">
        //         <h4>The Comapny</h4>
        //         <a href="about.html">About Ananta</a>
        //         <a href="privacy.html">Privacy & Cookies</a>
        //         <a href="legal.html">Legal</a>
        //         <a href="coinfo.html">Corporate Information</a>
        //     </div>
    
        //     <div class="column">
        //         <h4>NEED HELP?</h4>
        //         <a href="contact.html">Contact Us</a>
        //         <a href="shipping.html">Shipping Services</a>
        //         <a href="procare.html">Product Care</a>
        //         <a href="return.html">Return & Exchange</a>
        //         <a href="faq.html">FAQs</a>
        //     </div>
    
        //     <div class="column install">
        //         <h4>Install Now</h4>
        //         <p>Avilable on App store</p>
        //         <div class="row">
        //             <img src="images/app.jpg" onclick="Appredirect();" alt="ERROR LOADING">
        //         <p>Secured Payment</p>
        //         <img src="images/pay.png" onclick="Payredirect();" alt="ERROR LOADING">
        //     </div>
        // </footer>
        // <h3 class="foot12">Copyright © 2018 – All Rights Reserved.</h3>
        // <script>
        //     document.querySelector("#userlog").innerHtml
        // </script>
        // ';
        header('location:loginSucess.php');
    }

    else{
        echo '   
        <section id="header">
            <a href="#"><img src="images/logo.png" class="logo" alt=""></a>
            <div>
                <ul id="navbar">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a class="active" href="login.html">Login</a></li>
                    <li><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
                </ul>
            </div>
        </section>
        <section id="ban2">
            <h2>BE THE PART OF <span>ANANTA LEGACY.</span></h2>
        </section>
        <section id="login-details">
            <form action="connect1.php" method="post">
                <h2>USER <strong style="color: crimson;">LOGIN</strong> </h2>
                <label style="color: red;font-size: 11px;margin-right:230px;">*INVALID CREDENTIALS</label>
                <span><i class="fas fa-user"></i><input name="username" type="email" placeholder="ENTER USERNAME."></span>
                <label style="color: red;font-size: 11px;margin-right:230px;">*INVALID CREDENTIALS</label>
                <span><i class="fas fa-key"></i><input type="password" name="password" placeholder="ENTER PASSWORD."></span>
                <p style="font-size: 13px;"><Strong>NEW USER?</Strong><a href="signup.html">SIGN UP</a></p>
                <button class="normal" id="banbb">Submit</button>
            </form>
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
                <a href="garden.html">Ananta Garden</a>
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
        <h3 class="black">Copyright © 2018 – All Rights Reserved.</h3>';
    }
}

?>
