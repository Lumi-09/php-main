<?php
include "config.php";
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}
?>

<link rel="stylesheet" href="style.css">

<div class="navbar">
    <h1>Elite Cuts</h1>
    <div>
        <a href="book.php">Book</a>
        <a href="my_bookings.php">My Bookings</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<div class="container">

    <h2 style="text-align:center;">Welcome to Elite Cuts</h2>

    <!-- Products Section -->
    <div class="products-section">
        <h2 style="text-align:center; margin-bottom:30px;">Men’s Hair Products</h2>

        <div class="products-grid">

            <div class="product-card">
                <img src="images/pomade.jpg" alt="Pomade">
                <h3>Classic Pomade</h3>
                <p class="price">$15</p>
                <a href="buy_product.php?product=Classic Pomade">
<button class="buy-btn">Buy Now</button>
</a>
            </div>

            <div class="product-card">
                <img src="images/wax.jpg" alt="Hair Wax">
                <h3>Strong Hold Wax</h3>
                <p class="price">$18</p>
                <a href="buy_product.php?product=Classic Pomade">
<button class="buy-btn">Buy Now</button>
</a>
            </div>

            <div class="product-card">
                <img src="images/oil2.jpg" alt="Beard Oil">
                <h3>Premium Beard Oil</h3>
                <p class="price">$20</p>
                <a href="buy_product.php?product=Premium Shampoo">
<button class="buy-btn">Buy Now</button>
</a>
            </div>

            <div class="product-card">
                <img src="images/spray.jpg" alt="Hair Spray">
                <h3>Hair Spray</h3>
                <p class="price">$14</p>
                <a href="buy_product.php?product=Premium Shampoo">
<button class="buy-btn">Buy Now</button>
</a>
            </div>

            <div class="product-card">
                <img src="images/shampoo.jpg" alt="Shampoo">
                <h3>Men’s Volume Shampoo</h3>
                <p class="price">$22</p>
                <a href="buy_product.php?product=Premium Shampoo">
<button class="buy-btn">Buy Now</button>
</a>
            </div>

            <div class="product-card">
                <img src="images/clay.jpg" alt="Hair Clay">
                <h3>Matte Hair Clay</h3>
                <p class="price">$19</p>
                <a href="buy_product.php?product=Premium Shampoo">
<button class="buy-btn">Buy Now</button>
</a>
            </div>
            <div class="product-card">

        </div>
    </div>

</div>
<div class="product-card">
    <img src="images/serum.jpg" alt="Hair Serum">
    <h3>Shine Hair Serum</h3>
    <p class="price">$17</p>
    <a href="buy_product.php?product=Premium Shampoo">
<button class="buy-btn">Buy Now</button>
</a>
</div>

<div class="product-card">
    <img src="images/balm.jpg" alt="Beard Balm">
    <h3>Beard Styling Balm</h3>
    <p class="price">$16</p>
    <a href="buy_product.php?product=Classic Pomade">
    <button class="buy-btn">Buy Now</button>
</a>
</div>