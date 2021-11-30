<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome to my Blogger</title>
  </head>
  <body>

  <div class="container mt-5">
      <div class="row">
          <div class="col-md-12">
          <?php
              include 'koneksi.php';
              $sql = "SELECT * FROM article WHERE id='" . $_GET["id"] . "'"; // Fetch data from the table article using id
              $result=mysqli_query($koneksi,$sql);
              $singleRow = mysqli_fetch_assoc($result);

          ?>

            <div class="card mx-auto" style="width: 50%;">
            <img src="foto/<?php echo $singleRow['foto']; ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?php echo $singleRow['judul'] ?></h5>
                <p class="card-text"><?php echo $singleRow['isi'] ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">By : <?php echo $singleRow['penulis'] ?></li>
            </ul>

            <div class="card-body">
              <a href="index.php" class="card-link">Kembali ke Index</a>
            </div>
            </div>
            
          </div>
      </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>