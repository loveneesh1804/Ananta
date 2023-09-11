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
</style>
<body>
<?php
session_start();
$orderID = filter_input(INPUT_POST ,'order_ID');
if(!empty($orderID)){
    $host ="localhost";
    $dbusername ="root";
    $dbpassword = "";
    $dbname = "ananta";

    $con = new mysqli($host,$dbusername,$dbpassword,$dbname);

    $sql = "SELECT * FROM order_status WHERE order_ID=$orderID";
    $data = mysqli_query($con,$sql);
    if ($data == TRUE){
        $result = mysqli_fetch_assoc($data);
        $amount = $result['Amount'];
        $status = $result['status'];
        $order_id = $result['order_ID'];
        $querry = "SELECT * FROM order_details WHERE order_ID=$orderID";
        $data1 = mysqli_query($con,$querry);
        $result1 = mysqli_fetch_assoc($data1);
        $address = $result1['Address'];
        $name = $result1['Name'];
        $postalcode = $result1['Postal_code'];
        $phone = $result1['Phone_No'];
        $username = $result1['Username'];
        $totITEM = $result1['Items'];
    
    
        $_SESSION['User']=$username;
        $_SESSION['Paid']=$amount;
        $_SESSION['Remark']=$status;
        $_SESSION['ID_order']=$order_id;
        $_SESSION['location']=$address;
        $_SESSION['customer']=$name;
        $_SESSION['Pin']=$postalcode;
        $_SESSION['Contact']=$phone;
        $_SESSION['Itemtot']=$totITEM;

        header('location:orderDetails.php');
    }
    else{
        header('location:orderInvalid.html');
    }
}
else{
    header('location:orderEmpty.html');
}