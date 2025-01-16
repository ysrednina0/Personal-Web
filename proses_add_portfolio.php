<?php
session_start();
if (!isset($_POST['title'])) {
  header("Location: add_portfolio.php");
  exit;
}

include "connect.php";

date_default_timezone_set('Asia/Bangkok');

$title = $_POST['title'];
$description = $_POST['description'];
$link = $_POST['link'];
// $file = $_FILES['file']['name'];  

// if ($_FILES['file']['size'] == 0 && $_FILES['file']['error'] == 0 || $_FILES['file']['name'] == "") {
if ($_FILES['file']['error'] === UPLOAD_ERR_NO_FILE) {

  $newfilename = "1.png";
  // var_dump($file);
  $insert = mysqli_query($conn, "INSERT INTO `portfolio` (`title`, `description`, `file`, `link`) VALUES ('$title', '$description', '$newfilename', '$link');");
  if ($insert) {
    echo "<script>alert('Data berhasil ditambahkan!');</script>";
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=home.php">';
  } else {
    echo "<script>alert('Data gagal ditambahkan 1!');</script>";
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=add_portfolio.php">';
  }
} else {
  $target_dir = "./assets/img/";
  $target_file = $target_dir . basename($_FILES['file']['name']);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES['file']['tmp_name']);
    if ($check !== false) {
      $uploadOk = 1;
    } else {
      $uploadOk = 0;
    }
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    $uploadOk = 0;
    echo "<script>alert('File sudah ada!');</script>";
  }

  // Check file size
  if ($_FILES['file']['size'] > 5000000) {
    $uploadOk = 0;
    echo "<script>alert('Ukuran file terlalu besar!');</script>";
  }

  // Allow certain file formats
  if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    $uploadOk = 0;
    echo "<script>alert('Hanya file JPG, JPEG, PNG & GIF yang diperbolehkan!');</script>";
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "<script>alert('Cek ukuran dan tipe file!');</script>";
    echo "<META HTTP-EQUIV='Refresh' Content='0; URL=add_portfolio.php'>";
  } else {
    $temp = explode(".", $_FILES["file"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    // $file = $target_dir . $newfilename;
    if (move_uploaded_file($_FILES["file"]["tmp_name"], "$target_dir" . $newfilename)) {
      $insert = mysqli_query($conn, "INSERT INTO `portfolio` (`title`, `description`, `file`, `link`) VALUES ('$title', '$description', '$newfilename', '$link');");
      if ($insert) {
        echo "<script>alert('Data berhasil ditambahkan!');</script>";
        echo "<META HTTP-EQUIV='Refresh' Content='0; URL=home.php'>";
      } else {
        echo "<script>alert('Data gagal ditambahkan 3!');</script>";
        echo "<META HTTP-EQUIV='Refresh' Content='0; URL=add_portfolio.php'>";
      }
    } else {
      $error_message = mysqli_error($conn);
      echo "<script>alert('Data gagal ditambahkan 4! Error: $error_message');</script>";
      echo "<META HTTP-EQUIV='Refresh' Content='0; URL=add_portfolio.php'>";
    }
  }
}
