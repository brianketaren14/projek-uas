<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="icon" href="../item-web/logo.png">
    <link rel="stylesheet" href="../style.css">
    <title>Tambah Data</title>
  </head>
  <body>
  <div class="loader-container">
  <div class="loader">
      </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="../item-web/logo.png" width="30" height="30" class="d-inline-block align-text-top" />
          Yediza
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="visi.php">Visi dan Misi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="berita.php">Berita</a>
            </li>
                <li class="nav-item">
              <a class="nav-link" href="admin.php">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
  <h1>Tambah Berita</h1>
    <form action="../proses/proses_tambah.php" method="POST" enctype="multipart/form-data" >
      <label for="judul">judul</label>
      <input type="text" name="judul" class="form-control" required>
      <label for="deskripsi">deskripsi</label>
      <input type="text" name="deskripsi" class="form-control" required>
      <label for="isi">isi</label>
      <textarea name="isi"  cols="30" rows="20" class="form-control" required></textarea>
      
      <label for="thumbnail">thumbnail</label>
      <input type="file" name="thumbnail" class="form-control">
      <button type="submit" name="tambah" class="btn btn-danger mt-3">Tambah data</button>
      <a href="admin.php" class="btn btn-primary mt-3">Kembali</a>
    </form>
  </div>
  <footer class="pt-5 mt-5">
      <div class="container">
        <div class="row text-light justify-content-between " style="border-top: 3px solid #fff; ">
          <div class="col-md-5 mt-5">
            <p>Created by Brian Maxwell Ketaren</p>
            <p>201401041 KOM A</p>
          </div>
          <div class="col-md-6 sosmed mt-5">
            <ul class="ms-auto" style="list-style: none; display: flex; justify-content: flex-end">
              <li>
                <a href="#" class="text-white me-1"><img src="../item-web/fb.png" alt=""></i></a>
              </li>
              <li>
                <a href="#" class="text-white me-1"><img src="../item-web/ig.png" alt=""></i></a>
              </li>
              <li>
                <a href="#" class="text-white me-1"><img src="../item-web/tw.png" alt=""></i></a>
              </li>
              <li>
                <a href="#" class="text-white me-1"><img src="../item-web/yt.png" alt=""></i></a>
              </li>
             
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../script.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>