<?php
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php');

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['idbarang'])) {
          //query SQL
          $id_upd = $_GET['idbarang'];
          $query = "SELECT * FROM makanan WHERE idbarang = '$id_upd'";

          //eksekusi query
          $result = mysqli_query(connection(),$query);
      }
  }

  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $idbarang = $_POST['idbarang'];
      $namabarang = $_POST['namabarang'];
      $kategori = $_POST['kategori'];
      $jumlahstok = $_POST['jumlahstok'];
      $harga = $_POST['harga'];
      //query SQL
      $sql = "UPDATE makanan SET namabarang='$namabarang', kategori='$kategori', jumlahstok='$jumlahstok', harga='$harga' WHERE idbarang='$idbarang'";

      //eksekusi query
      $result = mysqli_query(connection(),$sql);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }

      //redirect ke halaman lain
      header('Location: index.php?status='.$status);
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
                <a class="nav-link active" href="<?php echo "index.php"; ?>">Makanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo "dataminuman.php"; ?>">Minuman</a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">


          <h2 style="margin: 30px 0 30px 0;">Update Data Makanan</h2>
          <form action="update.php" method="POST">
            <?php while($data = mysqli_fetch_array($result)): ?>
            <div class="form-group">
              <label>ID Makanan</label>
              <input type="text" class="form-control" placeholder="ID Makanan" name="idbarang" value="<?php echo $data['idbarang'];  ?>" required="required" readonly>
            </div>
            <div class="form-group">
              <label>Nama Makanan</label>
              <input type="text" class="form-control" placeholder="Nama Makanan" name="namabarang" value="<?php echo $data['namabarang'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Kategori</label>
              <input type="text" class="form-control" placeholder="Kategori" name="kategori" value="<?php echo $data['kategori'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Jumlah Stock</label>
              <input type="text" class="form-control" placeholder="Jumlah Stock" name="jumlahstok" value="<?php echo $data['jumlahstok'];  ?>" required="required">
            </div>
            <div class="form-group">
              <label>Harga</label>
              <input type="text" class="form-control" placeholder="Harga" name="harga" value="<?php echo $data['harga'];  ?>" required="required">
            </div>
            <?php endwhile; ?>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </main>
      </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>
