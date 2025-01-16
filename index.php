<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal Web</title>

</head>

<body>
  <main>
    <?php
    if (isset($_GET['page'])) {
      if ($_GET['page'] == 'login') {
        include 'login.php';
      // } elseif ($_GET['page'] == 'home') {
      //   include 'home.php';
      // } elseif ($_GET['page'] == 'about') {
      //   include 'about.php';
      // } elseif ($_GET['page'] == 'projects') {
      //   include 'projects.php';
      // } elseif ($_GET['page'] == 'contact') {
      //   include 'contact.php';
      }
    } else {
      include 'login.php';
    }

    ?>
  </main>
</body>

</html>