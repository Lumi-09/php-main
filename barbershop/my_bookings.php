<?php
include "config.php";

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Join bookings with barbers table
$sql = "SELECT bookings.*, barbers.name AS barber_name
        FROM bookings
        JOIN barbers ON bookings.barber_id = barbers.id
        WHERE bookings.user_id = '$user_id'
        ORDER BY booking_date DESC, booking_time DESC";

$result = $conn->query($sql);
?>

<link rel="stylesheet" href="style.css">

<div class="navbar">
    <h1>Elite Cuts</h1>
    <div>
        <a href="dashboard.php">Dashboard</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<div class="container">
    <h2 style="text-align:center; margin-bottom:30px;">My Bookings</h2>

    <?php if($result->num_rows > 0){ ?>
        <div style="background:#1c1c1c; padding:20px; border-radius:10px;">
            <table style="width:100%; text-align:center;">
                <tr style="color:#d4af37;">
                    <th>Barber</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>

                <?php while($row = $result->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $row['barber_name']; ?></td>
                    <td><?php echo $row['booking_date']; ?></td>
                    <td><?php echo $row['booking_time']; ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    <?php } else { ?>
        <p style="text-align:center;">You have no bookings yet.</p>
    <?php } ?>
</div>