<?php


    include_once('config.php');


    if(isset($_POST['submit']))
    {


        $product = $_POST['product'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];



            $sql = "INSERT INTO products(product,title,description,quantity,price) VALUES (:product, :title, :description, :quantity, :price)";


            $insertSql = $conn->prepare($sql);


            $insertSql->bindParam(':product', $product);
            $insertSql->bindParam(':title', $title);
            $insertSql->bindParam(':description', $description);
            $insertSql->bindParam(':quantity', $quantity);
            $insertSql->bindParam(':price', $price);


            $insertSql->execute();


            echo "The product has been added successfully";


            echo "<br>";


            echo "<a href='dashboard.php'>Dashboard</a>";


    }



?>