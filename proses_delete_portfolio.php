<?php
$id = $_GET['id'];
session_start();

include 'connect.php';

$query = mysqli_query($conn, "DELETE FROM portfolio WHERE id = '$id'");

echo "<script>
alert ('Data berhasil dihapus');
</script>";
echo "<meta http-equiv='refresh' content='0;url=admin.php'>";
?>