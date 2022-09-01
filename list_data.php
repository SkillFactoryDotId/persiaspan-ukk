<!DOCTYPE html>
  <html>
  <head>
   <title>List Data User</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  </head>
  <body>

  <div class="container" >
  <h1 class="text-center mb-5 mt-5">List Data User</h1>
  <a href="create_data.php" >Tambah Data</a>
  <table class="table table-striped">
    <tr>
     <th>NO</th>
     <th>Nama</th>
     <th>Email</th>
    </tr>
    <?php
      $no = 1;
      include 'koneksi.php';
      $data = mysqli_query($koneksi, "select * from user");
      while($d = mysqli_fetch_array($data)){ ?>
     <tr>
      <td><?= $no++; ?></td>
      <td><?= $d['nama']; ?></td>
      <td><?= $d['email']; ?></td>
     </tr>
    <?php } ?>
   </table>
  </div>
  </body>
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  </html>