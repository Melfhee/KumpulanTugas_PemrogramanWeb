<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 

  $status = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $idbarang = $_POST['idbarang'];
      $namabarang = $_POST['namabarang'];
      $kategori = $_POST['kategori'];
      $jumlahstok = $_POST['jumlahstok'];
      $harga = $_POST['harga'];
      //query SQL
       $query = "INSERT INTO minuman (idbarang, namabarang, kategori, jumlahstok, harga) VALUES('$idbarang','$namabarang','$kategori','$jumlahstok','$harga')";  

      //eksekusi query
      $result = mysqli_query(connection(),$query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Minimarket</title>
    <!-- load css boostrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Minimarket</a>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column" style="margin-top:100px;">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "index.php"; ?>">Makanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo "dataminuman.php"; ?>">Minuman</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          
          <?php 
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Minuman berhasil disimpan</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Minuman gagal disimpan</div>';
              }
           ?>

          <h2 style="margin: 30px 0 30px 0;">Tambah Data Minuman</h2>
          <form action="formminuman.php" method="POST">
            
            <div class="form-group">
              <label>ID Minuman</label>
              <input type="text" class="form-control" placeholder="id minuman" name="idbarang" required="required">
            </div>
            <div class="form-group">
              <label>Nama Minuman</label>
              <input type="text" class="form-control" placeholder="nama minuman" name="namabarang" required="required">
            </div>
            <div class="form-group">
              <label>Kategori</label>
              <input type="text" class="form-control" placeholder="kategori" name="kategori" required="required">
            </div>
            <div class="form-group">
              <label>Jumlah Stock</label>
              <input type="text" class="form-control" placeholder="jumlahstok" name="jumlahstok" required="required">
            </div>
            <div class="form-group">
              <label>Harga</label>
              <input type="text" class="form-control" placeholder="harga" name="harga" required="required">
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>