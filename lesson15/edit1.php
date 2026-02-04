<?php 


include_once("config.php");


$id = $_GET['id'];


$sql = "SELECT * FROM users WHERE id=:id";


$prep = $conn->prepare($sql);


$prep->bindParam(':id', $id);


$prep->execute();


$data = $prep->fetch();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>


    <style>


        form>input {
            margin-bottom: 10px;
            font-size: 20px;
            padding: 5px;
        }


        button {
            background: none;
            border: none;
            border: 1px solid black;
            padding: 10px 40px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="update.php" method="POST">
    <input type="number" name="id"  value="<?php echo $data['id']?>" readonly><br>
    <input type="text" title="title" value="<?php echo $data['title']?>"><br>
    <input type="text" description="description" value="<?php echo $data['decription']?>"><br>
    <input type="text" quantity="quantity" value="<?php echo $data['quantity']?>"><br>
    <input type="email" price="price" value="<?php echo $data['price']?>"><br>


        <br><br>
        <button type="submit" name="update">UPDATE</button>
       
    </form>
    <a href="dashboard.php">Dashboard</a>
    </body>
</html>