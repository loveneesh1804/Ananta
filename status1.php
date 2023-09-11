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
    <script src="https://kit.fontawesome.com/9994241b69.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
<?php




// if($input_code == $captcha_Code){
//     $sql = "INSERT INTO order_status (order_ID,status,Amount)
//     values ('$Order_ID','$status_sucess','$order_total')";
//     header('location:payment.html');
// }
$Order_ID = $_COOKIE['ID_Order'];
$status_sucess = "Successfully Placed";
$order_total = $_COOKIE['Status_total'];
$captcha_Code = $_COOKIE['captcha'];
// $input_code = $_POST["confirm_Order"];
$input_code = filter_input(INPUT_POST ,'confirm_Order');


if(!empty($input_code)){
    $host ="localhost";
    $dbusername ="root";
    $dbpassword = "";
    $dbname = "ananta";

    
    $con = new mysqli($host,$dbusername,$dbpassword,$dbname);

    if(mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno().')'
        . mysqli_connect_error());
    }
    else if($input_code == $captcha_Code){
        $sql = "INSERT INTO order_status(order_ID,status,Amount)
        values ('$Order_ID','$status_sucess','$order_total')";
        if ($con->query($sql)){
            header('location:sucess1.php');
        }
        else{
            echo "ERROR". $sql ."<br>". $con->error;
        }
        $con->close();
    }
    else{
        header('location:fail1.html');
    }
}
else{
    header('location:fill_captcha1.html');
}

?>
</body>
</html>

<!-- // if(!empty($input_code)){
//     $host ="localhost";
//     $dbusername ="root";
//     $dbpassword = "";
//     $dbname = "ananta";

//     $con = new mysqli($host,$dbusername,$dbpassword,$dbname);

//     if(mysqli_connect_error()){
//         die('Connect Error ('. mysqli_connect_errno().')'
//         . mysqli_connect_error());
//     }
//     else if($input_code == $captcha_Code){
//         $sql = "INSERT INTO order_status(order_ID,status,Amount)
//         values ('$Order_ID','$status_sucess','$order_total')";
//         if ($con->query($sql)){
//             header('location:sucess.html');
//         }
//         else{
//             echo "ERROR". $sql ."<br>". $con->error;
//         }
//         $con->close();
//     }
// } -->

