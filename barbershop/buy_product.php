<?php
include "config.php";

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

if(isset($_GET['product'])){
    $product = $_GET['product'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO bookings (user_id, product_name)
            VALUES ('$user_id', '$product')";

    if($conn->query($sql)){
        header("Location: thankyou.php");
        exit();
    }
}
?>