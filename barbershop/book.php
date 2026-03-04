<?php
include "config.php";
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
}
?>
<link rel="stylesheet" href="style.css">

<div class="navbar">
    <h1>Elite Cuts</h1>
    <a href="logout.php">Logout</a>
</div>

<div class="container">
    <h2 style="text-align:center;">Book Appointment</h2>

    <div class="form-box">
        <form method="POST">
            <select name="barber_id" required>
                <option value="">Choose Your Barber</option>
                <?php
                $barbers = $conn->query("SELECT * FROM barbers");
                while($row = $barbers->fetch_assoc()){
                    echo "<option value='".$row['id']."'>".$row['name']."</option>";
                }
                ?>
            </select>

            <input type="date" name="date" required>
            <input type="time" name="time" required>

            <button name="book">Confirm Booking</button>
        </form>
    </div>
</div>

<?php
if(isset($_POST['book'])){
    $user_id = $_SESSION['user_id'];
    $barber_id = $_POST['barber_id'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "INSERT INTO bookings (user_id, barber_id, booking_date, booking_time)
            VALUES ('$user_id', '$barber_id', '$date', '$time')";
    
    if($conn->query($sql)){
    header("Location: my_bookings.php");
    exit();
}
    } else {
        echo "<p style='text-align:center;color:red;'>Error booking.</p>";
    }

?>