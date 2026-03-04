<?php include "config.php"; ?>

<link rel="stylesheet" href="style.css">

<div class="container">
<h2>Register</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button name="register">Register</button>
</form>

<a href="login.php">Login here</a>

<?php
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if($conn->query($sql)){
    header("Location: login.php");
    exit();
} else {
    echo "<p style='color:red; text-align:center;'>Username already exists.</p>";
}
}
?>
</div>