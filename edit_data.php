<!DOCTYPE html>
    <html>
    <head>
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    </head>
    <body>

		<?php
			include 'koneksi.php';
			$id = @$_GET['id'];
			$data = mysqli_query($koneksi,"select * from user where id='$id'");
			$d = mysqli_fetch_array($data);
		?>


    <div class="container" >
    <h1 class="text-center mb-5 mt-5">Edit Data User</h1>

		<center>
			<table class="table table-striped">
				<div class="card p-3 w-50 text-start">
				<form action="edit.php?id=<?php echo $id ?>" method="post">
					<label for="inputPassword5" class="form-label">Nama</label>
					<input type="text" class="form-control mb-3" value="<?php echo $d['nama']; ?>" name="nama">

					<label for="inputPassword5" class="form-label">Email</label>
					<input type="email" class="form-control mb-3" value="<?php echo $d['email']; ?>" name="email">
					<button type="submit" class="btn btn-primary mb-3">Update Data</button>
					<a href="list_data.php" class="btn btn-danger">cancel</a>
					
				</form>
				</div>
			</table>
		</center>
    </div>
    </body>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    </html>