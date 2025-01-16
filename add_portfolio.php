<?php
include "header.php"; 
?>

<div class="container mt-5">
  <h2 class="text-center mb-4">Add Portfolio</h2>
  <form class="w-50 mx-auto" action="./proses_add_portfolio.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <div class="mb-3">
      <label for="link" class="form-label">Link</label>
      <input type="text" class="form-control" id="link" name="link">
    </div>
    <div class="mb-3">
      <label for="file" class="form-label">Upload File</label>
      <input type="file" class="form-control" id="file" name="file" multiple>
    </div>
    <!-- <img src="1.png" alt=""> -->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<footer>
  <?php
  include "footer.php";
  ?>
</footer>