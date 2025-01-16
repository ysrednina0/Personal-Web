<?php
include "connect.php";
session_start();
$sql = mysqli_query($conn, "SELECT * FROM admin WHERE id = '$_SESSION[admin]'");
$role = mysqli_fetch_array($sql)['role'];
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anindya's Personal Web</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100..900&family=Major+Mono+Display&display=swap"
    rel="stylesheet">

  <script>
    function confirmLogout() {
      if (confirm("Are you sure you want to log out?")) {
        window.location.href = "logout.php";
      }
    }
  </script>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-body-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="home.php">{ anindya }</a>
      <!-- <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="Logo" height="40px"></a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="home.php#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php#projects">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php#contact">Contact</a>
          </li>

          <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
            <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-black"></div>
            <hr class="d-lg-none my-2 text-black-50">
          </li>
          
          <?php if ($role == "admin") : ?>
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Dashboard</a></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#dropdown-menu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Other
              </a>
              <ul class="dropdown-menu" id="dropdown-menu">
                <!-- <li><a class="dropdown-item" href="add_portfolio.php">Add Portfolio</a></li> -->
                <!-- <li><a class="dropdown-item" href="admin.php">Dashboard</a></li> -->
                <li><a class="dropdown-item" href="#" onclick="confirmLogout()">Log Out</a></li>
              </ul>
            </li>
          <?php elseif($role == "user"): ?>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="confirmLogout()">Log Out</a>
            </li>

          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Log In</a>
            </li>
          <?php endif; ?>

        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

</body>


</html>