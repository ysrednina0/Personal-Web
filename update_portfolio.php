<?php
include "header.php";
include "connect.php";
$id = $_GET['id'];
$getdata = mysqli_query($conn, "SELECT * FROM portfolio WHERE id='$id'");
$rows = mysqli_fetch_array($getdata);
?>

<div class="container mt-5">
  <h2 class="text-center mb-4">Edit Portfolio</h2>
  <form class="w-50 mx-auto" action="" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="<?php echo $rows['title'] ?>">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description" rows="3"><?php echo $rows['description'] ?></textarea>
    </div>
    <div class="mb-3">
      <label for="link" class="form-label">Link</label>
      <input type="text" class="form-control" id="link" name="link" value="<?php echo $rows['link'] ?>">
    </div>
    <div class="mb-3">
      <label for="currentImage" class="form-label">Current Image</label>
      <div>
        <img src="./assets/img/<?= $rows['file']; ?>" alt="Current Image" class="img-fluid">
      </div>
    </div>
    <div class="mb-3">
      <label for="File" class="form-label">Upload File</label>
      <input type="file" class="form-control" id="File" name="File" value="<?php echo $rows['file'] ?>" multiple>
    </div>
    <!-- <img src="1.png" alt=""> -->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>