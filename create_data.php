<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5 w-25">
    <div class="card p-3">
      
      <form action="create.php" method="post">
        <h1 class="text-center">Tambah Data User</h1>
        <label for="inputPassword5" class="form-label">Nama</label>
        <input type="text" id="inputPassword5" class="form-control mb-3" name="nama" aria-describedby="passwordHelpBlock">

        <label for="inputPassword5" class="form-label">Email</label>
        <input type="email" id="inputPassword5" class="form-control mb-3" name="email" aria-describedby="passwordHelpBlock">

        <label for="inputPassword5" class="form-label">Password</label>
        <input type="password" id="inputPassword5" class="form-control mb-3" name="password" aria-describedby="passwordHelpBlock">
        
        <button class="btn btn-primary">Masukan Data</button>
      </form>
    </div>
  </div>
  
</body>
</html>