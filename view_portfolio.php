<?php
include "header.php";
include "connect.php";
$id = $_GET['id'];
$getdata = mysqli_query($conn, "SELECT * FROM portfolio WHERE id='$id'");
$rows = mysqli_fetch_array($getdata);
?>

<div class="container">
  <h2 class="mt-5 mb-3"><?php echo $rows['title'] ?></h2>

  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description" rows="3" readonly><?php echo $rows['description'] ?></textarea>
  </div>
  <div class="mb-3">
    <label for="link" class="form-label">Link</label>
    <a href="<?php echo $rows['link'] ?>" target="_blank" class="mt-2 link-style"><?php echo $rows['link'] ?></a>
  </div>

  <label for="currentImage" class="form-label">Photo</label>
  <div class="card" style="width: 18rem;">
    <img src="./assets/img/<?= $rows['file']; ?>" class="card-img-top" alt="...">
  </div>
  <div class="mb-3">
    <div>
      <!-- <img src="./assets/img/<?= $rows['file']; ?>" alt="Current Image" class="img-fluid styled-image"> -->
    </div>
  </div>


</div>