<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Blog</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Siswa
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Siswa Kelas 1</a>
          <a class="dropdown-item" href="#">Siswa Kelas 2</a>
          <a class="dropdown-item" href="#">Siswa Kelas 2</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Alumni</a>
        </div>
      </li>   -->
    </ul>
    <span class="navbar-text mr-3">
      <?php
          if (isset($_SESSION['name'])) {
          echo "Halo admin ".$_SESSION['name'];
          }
      ?>
    </span>

  </div>
</nav>