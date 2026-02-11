<?php
/*
We will include config.php for connection with database.
We will fetch all datas from movies in database and show them.
*/
<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: home.php");
    exit();
}
?>

session_start(); // START SESSION

include_once('config.php');

$sql = "SELECT * FROM movies";
$selectMovies = $conn->prepare($sql);
$selectMovies->execute();
$movies_data = $selectMovies->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand">
        <strong>Album</strong>
      </a>
    </div>
  </div>
</header>

<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Movie Album</h1>
        <p class="lead text-muted">Browse our movie collection.</p>
      </div>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php foreach ($movies_data as $movie_data) { ?>

        <div class="col">
          <div class="card shadow-sm">

            <img src="movie_images/<?php echo $movie_data['movie_image']; ?>" height="350">

            <div class="card-body">
              <h4><?php echo $movie_data['movie_name']; ?></h4>
              <p class="card-text"><?php echo $movie_data['movie_desc']; ?></p>

              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                  <!-- View button (visible to everyone) -->
                  <a href="details.php?id=<?php echo $movie_data['id']; ?>" 
                     class="btn btn-sm btn-outline-secondary">
                     View
                  </a>

                  <!-- Edit button (ONLY ADMIN CAN SEE) -->
                  <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { ?>
                      <a href="edit.php?id=<?php echo $movie_data['id']; ?>" 
                         class="btn btn-sm btn-outline-secondary">
                         Edit
                      </a>
                  <?php } ?>

                </div>

                <small class="text-muted">
                    Rating: <?php echo $movie_data['movie_rating']; ?>
                </small>
              </div>

            </div>
          </div>
        </div>

      <?php } ?>

      </div>
    </div>
</div>

</body>
</html>