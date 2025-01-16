<?php
session_start();
include "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];         

$sql = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
$data = mysqli_fetch_array($sql, MYSQLI_ASSOC);

if ($password == $data['password']) {
  $_SESSION['admin'] = $data['id'];
  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=home.php">';
  exit;
} else {
  echo "<script>alert('Login gagal!');</script>";
  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';
}
?>
