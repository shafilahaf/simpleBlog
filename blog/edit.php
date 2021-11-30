<?php 
include 'koneksi.php';
if (isset($_GET['id'])) {
	if ($_GET['id'] != "") {
		
		$id = $_GET['id'];

		$query = mysqli_query($koneksi,"SELECT * FROM article WHERE id='$id'");
		$row = mysqli_fetch_array($query);

	}else{
		header("location:index.php");
	}
}else{
	header("location:index.php");
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit Blog Page</title>
  </head>
  <body>
  <div class="container mt-5 ">
  <center class="mb-5" ><h2>Update Article</h2></center>
		<hr>
		<form action="edit_act.php" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<label class="form-label">Judul</label>
				<input type="text" name="judulBlog" class="form-control" value="<?php echo $row['judul']; ?>" >
				<input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>" >
			</div>
			<div class="mb-3">
				<label class="form-label">Penulis</label>
				<input type="text" name="penulisBlog" class="form-control" value="<?php echo $row['penulis']; ?>">
			</div>
			<div class="mb-3">
				<label class="form-label">Isi</label>
				<textarea class="form-control" name="isiBlog" rows="3"><?php echo $row['isi']; ?></textarea>
			</div>
			<div class="mb-3">
				<label class="form-label">Media</label>
				<input type="file" name="fotoBlog" class="form-control">
				<br>
				<?php 
				if ($row['foto'] == "") { ?>
					<img src="http://grahailmu.id/wp-content/uploads/woocommerce-placeholder-500x500.png" style="width:100px;height:100px;">
				<?php }else{ ?>
					<img src="foto/<?php echo $row['foto']; ?>" style="width:100px;height:100px;">
				<?php } ?>
			</div>
			<div class="mb-3">
				<button class="btn btn-success" type="submit">Edit</button>
				<a href="index.php" class="btn btn-danger">Kembali</a>
			</div>
		</form>
		
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