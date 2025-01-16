<?php
include "header.php";
include "connect.php";
?>

<main class="container">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="mt-5 mb-5">Dashboard</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="row mb-2">
    <div class="col-md-3">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <?php
          $query = mysqli_query(
            $conn,
            "SELECT COUNT(id) as jumlah FROM portfolio"
          );
          $dataBerita = mysqli_fetch_array($query, MYSQLI_ASSOC);
          ?>
          <h2 class="mb-0">
            <?php echo $dataBerita["jumlah"]; ?>
          </h2>

          <strong class="d-inline-block mb-2 text-primary-emphasis">Portfolio</strong>

          <!-- <a href="#portfolio-table" class="icon-link gap-1 icon-link-hover stretched-link">
            More info
            <svg class="bi">
              <use xlink:href="#chevron-right"></use>
            </svg>
          </a> -->
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static" onclick="window.location.href='add_portfolio.php';">
          <h2 class="mb-0">
            +
          </h2>
          <strong class="d-inline-block mb-2 text-primary-emphasis">Add Portfolio</strong>

        </div>
      </div>
    </div>
  </div>

  <table class="table" id="portfolio-table">
    <thead>
      <tr>
        <!-- <th scope="col">#</th> -->
        <th>Title</th>
        <th>Description</th>
        <th>Link</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = mysqli_query($conn, "SELECT * FROM portfolio");
      while ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)):
      ?>
        <tr>
          <td><?php echo htmlspecialchars($rows['title']) ?></td>
          <td><?php echo htmlspecialchars($rows['description']) ?></td>
          <td><?php echo htmlspecialchars($rows['link']) ?></td>
          <td>
            <a class="show-image-btn" data-image-src="./assets/img/<?= $rows['file']; ?>" data-title="<?= $rows['title']; ?>">Show Image</a>
            <script>
              document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.show-image-btn').forEach(function(a) {
                  a.addEventListener('click', function() {
                    const imgSrc = this.getAttribute('data-image-src');
                    const imgAlt = this.getAttribute('data-title');
                    const imgElement = document.createElement('img');
                    imgElement.src = imgSrc;
                    imgElement.alt = imgAlt;
                    imgElement.classList.add('card-img-top', 'img-portfolio');

                    const closea = document.createElement('a');
                    closea.textContent = 'Close';
                    closea.classList.add('btn', 'btn-secondary', 'close-image-btn');
                    closea.addEventListener('click', function() {
                      this.parentNode.replaceChild(a, imgElement);
                      this.remove();
                    });

                    this.parentNode.replaceChild(imgElement, this);
                    imgElement.parentNode.appendChild(closea);
                  });
                });
              });
            </script>
          </td>
          <td class="action">
            <a href="proses_update_portfolio.php?id=<?php echo $rows['id'] ?>" class="edit-btn">Edit</a>
            <span class="separator">|</span>
            <a href="proses_delete_portfolio.php?id=<?php echo $rows['id'] ?>" class="delete-btn">Delete</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>


</main>

<footer>
  <?php
  include "footer.php";
  ?>
</footer>