<?php include "config.php"; ?>
<link rel="stylesheet" href="style.css">

<div class="navbar">
    <h1>Elite Cuts</h1>
    <div>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </div>
</div>

<div class="hero">
    <h2>Premium Barber Experience<br>Book Your Cut Today</h2>
</div>

<div class="container">
    <h2 style="text-align:center; margin-bottom:30px;">Our Barbers</h2>

    <div class="barber-grid">
        <?php
        $barbers = $conn->query("SELECT * FROM barbers");
        while($row = $barbers->fetch_assoc()){
        ?>
        <div class="barber-card">
            <h3><?php echo $row['name']; ?></h3>
        </div>
        <?php } ?>
    </div>
</div>