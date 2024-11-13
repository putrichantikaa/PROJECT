?<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <?php include 'navbar.php'; ?>


<div class="container">
   <div class="row mt-5">
        <div class="col-6 m-auto">
            <div class="card">
            <div class="card-header text-center">
                <h3>Sistem Informasi Mahasiswa</h3>
            </div>
            <div class="card-body">
                <form action="proses_pertemuan3.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Selamat Datang di Sistem Informasi Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
                </form>
            </div>
            </div>
        </div>
   </div>
</div>

    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

</body>
</html>