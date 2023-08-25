<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <link rel="stylesheet" href="style.css">
</head>
    
<body>
<?php
$name = filter_input(INPUT_POST ,'name');
$mobile = filter_input(INPUT_POST ,'mobile');
$username = filter_input(INPUT_POST ,'username');
$password = filter_input(INPUT_POST ,'password');

if(!empty($username)){
if(!empty($password)){
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
    $sql = "INSERT INTO user_info (name,mobile,username, password)
    values ('$name','$mobile','$username','$password')";
    if ($con->query($sql)){
        echo '    <h3 class ="black">UPI & NET BANKING AVILABLE!</h3>
        <section id="header">
            <a href="#"><img src="images/logo.png" class="logo" alt=""></a>
            <div>
                <ul id="navbar">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a class="active" href="signup.html">Sign Up</a></li>
                </ul>
            </div>
        </section>
        <section id="sucess">
            <i class="fas fa-badge-check" style="color: #3bba50;"></i>
            <h2>ACCOUNT CREATED <span style="color: #3bba50;">SUCESSFULLY</span></h2>
            <h3><a href="login.html">Click Here</a> to login in.</h3>
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
        <h3 class="black">Copyright © 2018 – All Rights Reserved.</h3>' ;
    }
    else{
        echo "ERROR". $sql ."<br>". $con->error;
    }
    $con->close();
}
}
else{
    echo '    <h3 class ="black">UPI & NET BANKING AVILABLE!</h3>
    <section id="header">
        <a href="#"><img src="images/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a class="active" href="signup.html">Sign Up</a></li>
            </ul>
        </div>
    </section>
    <section id="ban3">
        <h2>#JOIN US.</h2>
        <p>Get early access to every product for free.</p>
    </section>
    <section id="login-details">
        <form action="connect.php" method="post">
            <h2>Create <strong style="color: tomato;">Account</strong></h2>
            <span><i class="far fa-file-signature"></i><input type="text" name="name" placeholder="ENTER FULL NAME."></span>
            <span><i class="fas fa-mobile-alt" style="padding-right: 20px;"></i><input type="text" name="mobile" placeholder="ENTER MOBILE NUMBER."></span>
            <span><i class="far fa-user-plus"></i><input type="email" name="username" placeholder="ENTER USERNAME."></span>
            <label style="color: red;font-size: 13px;padding-right: 140px;">*PASSWORD should not be empty!</label>
            <span><i class="far fa-lock-open-alt"></i><input type="password" name="password" placeholder="NEW PASSWORD."></span>
            <button class="normal" id="banbb">JOIN NOW</button>
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
    <h3 class="black">Copyright © 2018 – All Rights Reserved.</h3> ' ;
    die();
}
 }
else{
    echo  '    <h3 class ="black">UPI & NET BANKING AVILABLE!</h3>
    <section id="header">
        <a href="#"><img src="images/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a class="active" href="signup.html">Sign Up</a></li>
            </ul>
        </div>
    </section>
    <section id="ban3">
        <h2>#JOIN US.</h2>
        <p>Get early access to every product for free.</p>
    </section>
    <section id="login-details">
        <form action="connect.php" method="post">
            <h2>Create <strong style="color: tomato;">Account</strong></h2>
            <span><i class="far fa-file-signature"></i><input type="text" name="name" placeholder="ENTER FULL NAME."></span>
            <span><i class="fas fa-mobile-alt" style="padding-right: 20px;"></i><input type="text" name="mobile" placeholder="ENTER MOBILE NUMBER."></span>
            <label style="color: red;font-size: 13px;padding-right: 140px;">*USERNAME should not be empty!</label>
            <span><i class="far fa-user-plus"></i><input type="email" name="username" placeholder="ENTER USERNAME."></span>
            <span><i class="far fa-lock-open-alt"></i><input type="password" name="password" placeholder="NEW PASSWORD."></span>
            <button class="normal" id="banbb">JOIN NOW</button>
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
    <h3 class="black">Copyright © 2018 – All Rights Reserved.</h3> ';
    die();
}


?>

<script src="script.js">
</script>
</body>
</html>