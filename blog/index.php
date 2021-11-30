<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Blog Article - Dashboard</title>
  </head>
  <body>
	<?php include 'navbar.php' ?> 
    <div class="container mt-5">
    <center class="mb-5" ><h2>Dashboard Blog Article - CRUD</h2></center>
    <hr>
		<?php if (isset($_GET['pesan'])) { ?>
			<?php if ($_GET['pesan'] == "berhasil") { ?>
				<div class="alert alert-primary" role="alert">
					Berhasil Mengubah Data Artikel
				</div>
			<?php }elseif ($_GET['pesan'] == "gagal") { ?>
				<div class="alert alert-danger" role="alert">
					Gagal Mengubah Data Artikel
				</div>
			<?php }elseif ($_GET['pesan'] == "ekstensi") { ?>
				<div class="alert alert-warning" role="alert">
					Ekstensi File Harus PNG Dan JPG
				</div>
			<?php }elseif ($_GET['pesan'] == "size") { ?>
				<div class="alert alert-warning" role="alert">
					Size File Tidak Boleh Lebih Dari 2 MB
				</div>
			<?php }elseif ($_GET['pesan'] == "hapus") { ?>
				<div class="alert alert-primary" role="alert">
					Berhasil Menghapus Data Artikel
				</div>
			<?php }elseif ($_GET['pesan'] == "gagalhapus") { ?>
				<div class="alert alert-danger" role="alert">
					Gagal Menghapus Data Artikel
				</div>
			<?php } ?>
		<?php } ?>
		<br>
		<a href="insert.php" class="btn btn-primary mb-2">Tambah Data</a>
		<table class="table table-bordered mt-4" id="myTable">
			<thead>
				<tr>
					<th scope="col" width="1%">#</th>
					<th scope="col">Judul</th>
					<th scope="col">Penulis</th>
					<th scope="col">Isi</th>
					<th scope="col" width="20%">Foto</th>
					<th scope="col" width="20%">Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include 'koneksi.php';

				$no = 1;
				$get_data = mysqli_query($koneksi,"SELECT * FROM article");
				while ($data = mysqli_fetch_array($get_data)) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['judul']; ?></td>
						<td><?php echo $data['penulis']; ?></td>
						<td><?php echo $data['isi']; ?></td>
						<td>
							<?php 
							if ($data['foto'] == "") { ?>
								<img src="http://grahailmu.id/wp-content/uploads/woocommerce-placeholder-500x500.png" style="width:100px;height:100px;">
							<?php }else{ ?>
								<img src="foto/<?php echo $data['foto']; ?>" style="width:100px;height:100px;">
							<?php } ?>
						</td>
						<td>
							<a href="view.php?id=<?php echo $data['id'] ?>" class="btn btn-warning text-white">Lihat</a>
							<a href="edit.php?id=<?php echo $data['id'] ?>" class="btn btn-info text-white">Edit</a>
							<a href="delete.php?id=<?php echo $data['id'] ?>" class="btn btn-danger">Hapus</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
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