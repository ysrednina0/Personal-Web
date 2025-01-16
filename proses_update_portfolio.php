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
      <label for="file" class="form-label">Upload File</label>
      <input type="file" class="form-control" id="file" name="file">
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

<?php
// include "footer.php";
// include "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_GET['id'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $link = $_POST['link'];
  $file = $_FILES['file']['name'];
  $tmp = $_FILES['file']['tmp_name'];
  $dir = "./assets/img/";

  if (!empty($file)) {

    $path = $dir . basename($file);


    if (move_uploaded_file($tmp, $path)) {

      $old_file = $dir . $rows['file'];
      if (file_exists($old_file) && $rows['file'] !== 'default.png') {
        unlink($old_file);
      }

      $query ="UPDATE portfolio SET title='$title', description='$description', link='$link', file='$file' WHERE id='$id'";
    } else {
      echo "<script>alert('Gagal upload file')</script>";
      exit;
    }
  } else {
    
    $query ="UPDATE portfolio SET title='$title', description='$description', link='$link' WHERE id='$id'";
  }

  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "<script>alert('Data berhasil diupdate')</script>";
    echo "<meta http-equiv='refresh' content='0;url=admin.php'>";
  } else {
    echo "<script>alert('Data gagal diupdate')</script>";
    // echo "<meta http-equiv='refresh' content='0;url=proses_upadate_portfolio.php?id=' . $id   >";
  }

}


// include "connect.php"; // File koneksi ke database

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $id = $_GET['id'];
//     $title = mysqli_real_escape_string($conn, $_POST['title']);
//     $description = mysqli_real_escape_string($conn, $_POST['description']);
//     $link = mysqli_real_escape_string($conn, $_POST['link']);
//     $file_name = $_FILES['file']['name'];
//     $file_tmp = $_FILES['file']['tmp_name'];
//     $upload_dir = "./assets/img/";

//     if (!empty($file_name)) {
//         // Jika ada file baru yang diupload
//         $file_path = $upload_dir . basename($file_name);

//         // Validasi file (opsional, bisa ditambah seperti cek format dan ukuran file)
//         if (move_uploaded_file($file_tmp, $file_path)) {
//             // Hapus file lama jika ada
//             $old_file = $upload_dir . $rows['file'];
//             if (file_exists($old_file) && $rows['file'] !== 'default.png') {
//                 unlink($old_file);
//             }

//             // Update dengan file baru
//             $query = "UPDATE portfolio SET title='$title', description='$description', link='$link', file='$file_name' WHERE id='$id'";
//         } else {
//             echo "<script>alert('Gagal mengupload file baru!');</script>";
//             exit;
//         }
//     } else {
//         // Jika tidak ada file baru, update tanpa mengganti file
//         $query = "UPDATE portfolio SET title='$title', description='$description', link='$link' WHERE id='$id'";
//     }

//     $result = mysqli_query($conn, $query);

//     if ($result) {
//         echo "<script>alert('Data berhasil diperbarui!');</script>";
//         echo "<script>window.location.href = 'home.php';</script>";
//     } else {
//         echo "<script>alert('Data gagal diperbarui!');</script>";
//     }
// }
?>