<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ananta</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <link rel="stylesheet" href="style.css">
</head>
    
<body>
<?php



$name = filter_input(INPUT_POST ,'name');
$email = filter_input(INPUT_POST ,'email');
$subject = filter_input(INPUT_POST ,'subject');
$message = filter_input(INPUT_POST ,'message');


if(!empty($message)){
if(!empty($email)){

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
    $sql = "INSERT INTO problem (name,email,subject, message)
    values ('$name','$email','$subject','$message')";
    if ($con->query($sql)){
        echo '    <h3 class ="black">UPI & NET BANKING AVILABLE!</h3>
        <section id="header">
            <a href="#"><img src="images/logo.png" class="logo" alt=""></a>
            <div>
                <ul id="navbar">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a class="active" href="contact.html">Contact</a></li>
                    <li><a href="signup.html">Sign Up</a></li>
                    <div class="cart">
                    <li style="border-radius: 50%;padding: 10px;background-color: rgb(222, 222, 222);"><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
                    <div id="cartAmount">0</div>
                    </div>
                </ul>
            </div>
        </section>
        <section id="sucess">
            <i class="fad fa-check-double" style="--fa-primary-color: #ffbb00; --fa-secondary-color: #d2c319;"></i>
            <h2>THANKS FOR <span style ="color:tomato;">CONTACTING US !</h2>
            <h3>Your Message has been received and we will be contacting you shortly. </h3>
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
        <h3 class="black">Copyright © 2018 – All Rights Reserved.</h3>' ;
    }
    else{
        echo "ERROR". $sql ."<br>". $con->error;
    }
    $con->close();
}
}
else{
    echo '    <h3 class ="black">CONTACT US AT : ananta1804@gmail.com</h3>

    <section id="header">
        <a href="#"><img src="images/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="about.html">About</a></li>
                <li><a class="active" href="contact.html">Contact</a></li>
                <li><a href="login.html">Login</a></li>
                <div class="cart">
                <li style="border-radius: 50%;padding: 10px;background-color: rgb(222, 222, 222);"><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
                <div id="cartAmount">0</div>
                </div>
            </ul>
        </div>
    </section>
    <section id="at-contact">
        <h2>#Lets make something <strong>awesome together.</strong></h2>
        <p>Get in touch</p>
    </section>
    <section id="form-details">
        <form action="connect2.php" method="post">
            <span>LEAVE A MESSAGE</span>
            <h2>We Love To Hear From You</h2>
            <input type="text" name="name" placeholder="ENTER YOUR NAME.">
            <label style="color: crimson;font-size: 11px;">*INVALID MAIL ADDRESS</label>
            <input type="email" name="email" placeholder="ENTER E-Mail.">
            <input type="text" name="subject" placeholder="SUBJECT.">
            <textarea name="message" id="" cols="30" rows="10" placeholder="YOUR MESSAGE"></textarea>
            <button class="normal">Submit</button>
        </form>
        <div class="people">
            <div class="people1"><h2><span>CONSUMER </span>PROTECTION</h2></div>
            <div>
                <p><span>Grievance Officer</span>Name: KRISHNA <br>Designation: Digital Brand Commerce Director <br>
                    Address: Plot No. 53, Sector-32, Gurugram, Haryana-122001, India ,<br>
                    Email: Grievanceofficer@ananta.com,<br>
                    Tel: 1-800-120-3300</p>
            </div>
        </div>
    </section>
    <section id="update" class="section-p1 section-m1">
        <div class = "news">
            <h4>SIGN UP FOR ANANTA UPDATES</h4>
            <p>By entering your email address, you consent to receiving our newsletter with access to our<span> collections, events and initiatives.</span> </p>
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
    <h3 class="black">Copyright © 2018 – All Rights Reserved.</h3> ' ;
    die();
}
 }
else{
    echo  '<h3 class ="black">CONTACT US AT : ananta1804@gmail.com</h3>

    <section id="header">
        <a href="#"><img src="images/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="about.html">About</a></li>
                <li><a class="active" href="contact.html">Contact</a></li>
                <li><a href="login.html">Login</a></li>
                <div class="cart">
                <li style="border-radius: 50%;padding: 10px;background-color: rgb(222, 222, 222);"><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
                <div id="cartAmount">0</div>
                </div>
            </ul>
        </div>
    </section>
    <section id="at-contact">
        <h2>#Lets make something <strong>awesome together.</strong></h2>
        <p>Get in touch</p>
    </section>
    <section id="form-details">
        <form action="connect2.php" method="post">
            <span>LEAVE A MESSAGE</span>
            <h2>We Love To Hear From You</h2>
            <input type="text" name="name" placeholder="ENTER YOUR NAME.">
            <input type="email" name="email" placeholder="ENTER E-Mail.">
            <input type="text" name="subject" placeholder="SUBJECT.">
            <label style="color: crimson;font-size: 11px;">*MESSAGE CANNOT BE EMPTY</label>
            <textarea name="message" id="" cols="30" rows="10" placeholder="YOUR MESSAGE"></textarea>
            <button class="normal">Submit</button>
        </form>
        <div class="people">
            <div class="people1"><h2><span>CONSUMER </span>PROTECTION</h2></div>
            <div>
                <p><span>Grievance Officer</span>Name: KRISHNA <br>Designation: Digital Brand Commerce Director <br>
                    Address: Plot No. 53, Sector-32, Gurugram, Haryana-122001, India ,<br>
                    Email: Grievanceofficer@ananta.com,<br>
                    Tel: 1-800-120-3300</p>
            </div>
        </div>
    </section>
    <section id="update" class="section-p1 section-m1">
        <div class = "news">
            <h4>SIGN UP FOR ANANTA UPDATES</h4>
            <p>By entering your email address, you consent to receiving our newsletter with access to our<span> collections, events and initiatives.</span> </p>
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