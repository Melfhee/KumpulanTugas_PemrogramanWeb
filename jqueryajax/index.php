  <!DOCTYPE html>
  <html lang="en" id="home">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>My Profil</title>

      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


    </head>
    <body>

      <!-- Navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <a href="#home" class="navbar-brand page-scroll"> Melinda Shilatil F</a>
          </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#about" class="page-scroll">About</a></li>
            <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
            <li><a href="#pendidikan" class="page-scroll">Pendidikan</a></li>
           </ul>
         </div>

        </div>
      </nav>
      <!-- akhir Navbar -->
      
      <!-- jumbotron -->
      <div class="jumbotron text-center">
        <img src="img/me.jpeg" class="img-circle ">
        <h2>Melinda Shilatil Fauziyah</h2>
        <div class="sosmed">
          <ul class="sosmed">
              <li><a href="https://www.facebook.com/profile.php?id=100005278038663"><i class="fab fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/melindaashifa"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
              <li><a href="https://github.com/Melfhee"><i class="fab fa-github"></i></a></li>
            </ul>
        </div>
        
      </div>

      <!-- akhir jumbotron -->


      <!-- about -->
      <section class="about" id="about">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="text-center">About</h2>
              <hr>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <p> Saya adalah mahasiswa di UPN Veteran Jawatimur. Saya adalah mahasiswa semester 5 jurusan Teknik Informatika</p>
            </div>
          </div>
        </div>
      </section>
      <!-- akhir about -->

      <!-- portfolio -->
      <section class="portfolio text-center" id="portfolio">
        <div class="container">
          <div class="col-sm-12">
            <h2 class="text-center">Portfolio</h2>
            <hr>
          </div>

          <div class="gambar">
            <div class="row">
              <div class="col-sm-4">
                <a href="" class="thumbnail">
                  <img src="img/portfolio/portfolio1.jpg">
                </a>
              </div>
              <!-- gambar2 -->
              <div class="col-sm-4">
                <a href="" class="thumbnail">
                  <img src="img/portfolio/portfolio3.jpg">
                </a>
              </div>
              <!-- gambar3 -->
              <div class="col-sm-4">
                <a href="" class="thumbnail">
                  <img src="img/portfolio/portfolio2.jpg">
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- akhir portfolio -->

      <!-- Pendidikan -->

        <section class="pendidikan" id="pendidikan">
          <div class="container">
            <div class="col-sm-12">
              <h2 class="text-center">Pendidikan</h2>
              <hr>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-header">
                  <h4>Tambah Data</h4>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Jenjang Pendidikan</label>
                    <input type="text-center" name="tingkat" id="tingkat" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text-center" name="nama" id="nama" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Tahun</label>
                    <input type="text-center" name="tahun" id="tahun" class="form-control">
                  </div>
                  <div align="right">
                    <button type="button" class="btn btn-primary" onclick="simpanData()">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-8">
              <table class="table">
                <thead>
                  <tr>
                    <th>Jenjang Pendidikan</th>
                    <th>Nama Pendidikan</th>
                    <th>Tahun</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="isi"></tbody>
              </table>
            </div>

        </section>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script>
      $(document).ready(function()
      {
        tampilData()
      })

      function simpanData()
      {
        var tingkat = $('#tingkat').val()
        var nama = $('#nama').val()
        var tahun = $('#tahun').val()
        $.ajax({
          url: 'simpan.php',
          type:'POST',
          data: {'tingkat': tingkat, 'nama': nama,'tahun': tahun},
          datatype: 'JSON',
          success : function(data)
          {
            tampilData()
          }
        })
      }

      function tampilData()
      {
        $('#isi').load('tampil.php')
      }

      function hapusData(tingkat)
      {
        $.ajax({
          url: 'hapus.php',
          type: 'POST',
          data: {'tingkat':tingkat},
          dataType: 'JSON',
          success: function(data)
          {
            tampilData()
          }
        })
      }

    </script>
  </body>
</html>
    
  </body>
</html>

