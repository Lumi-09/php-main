<?php include "config.php"; ?>
<link rel="stylesheet" href="style.css">

<div class="navbar">
    <h1>Elite Cuts</h1>
</div>

<div class="form-box">
    <h2 style="text-align:center;">Login</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button name="login">Login</button>
    </form>

    <p style="text-align:center; margin-top:10px;">
        <a href="register.php" style="color:#d4af37;">Create account</a>
    </p>
</div>

<?php
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE username='$username'");
    $user = $result->fetch_assoc();

    if($user && password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['id'];
        header("Location: dashboard.php");
    } else {
        echo "<p style='text-align:center;color:red;'>Invalid login</p>";
    }
}
?>