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
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="box">
        <div id="inner-heading">
            <img onClick="gotoHome()" src="./images/logox.png" style="width: 16rem;margin-left: 4rem;">
        </div>
        <hr>
        <section id="sucess">
            <!-- <i class="far fa-badge-check" style="color: #1cb535;"></i> -->
            <img src="images/sucess.gif" alt="">
            <h2>ORDER HAS BEEN PLACED <span style="color: #3bba50;">SUCCESSFULLY. </span></h2>
            <h4>Your Order ID is : <strong style="color: red;">ANANTA</strong><span id="orderID">200</span></h4>
            <p style="margin: 10px;font-weight: 600;font-size: 12px;">Thanks for shopping with us! Your order has been
                placed sucessfully and you'll recive a Email when your order will be shipped.Email will contain invoice
                and tracking id. <br>You can also track your order using OderID.We're 24/7 here for helping you.
                You'll be redirect to home page in <strong style="color: red;"><span id="interval"
                        style="color: red;">10</span>sec</strong> </p>
        </section>
    </div>

    <script>
        function randId() {
            // var orderID = Math.floor(Math.random() * 100000000) + 1296739;
            // document.querySelector("#orderID").innerText = `${orderID}`;
            var ordID = localStorage.getItem("oderID");
            document.querySelector("#orderID").innerText = `${ordID}`;
        }
        var time = 10;
        setInterval(function () {
            time--;
            document.querySelector("#interval").innerText = `${time}`;
        }, 1000)
        setTimeout(function () {
            window.location.href = "accountinfo.php";
        }, 10000)
        randId();
    </script>
</body>
</html>