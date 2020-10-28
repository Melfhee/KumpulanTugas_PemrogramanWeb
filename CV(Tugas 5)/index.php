<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 
?>

<!DOCTYPE html>
<?php
	$name="Melinda Shilatil Fauziyah";
	$univ="UPN Veteran Jawa Timur";
	$bio="Halo nama saya Melinda Shilatil Fauziyah lahir pada tanggal 02 bulan November di kota Sumenep Madura. Saat ini saya adalah salah satu mahasiswa semester 5 jurusan Teknik Informatika di UPN Veteran Jawa Timur, Surabaya";
	$fotoku="./me.jpeg";
	$sidebar="./side.png";
	$skills="My Skills";
	$skill1="HTML5";
	$skill2="CSS";
	$skill3="JQUERY";
	$skill4="Desain";
	$experience1 ="UI/UX Designer";
	$experience2 ="Front End Developer";
	$education="Education";
	$sd="SDN Masalima 1";
	$smp="SMPN1 Masalembu";
	$sma="SMAN1 Sumenep";
	$tahunsd="2006 - 2012";
	$tahunsmp="2012 - 2015";
	$tahunsma="2015 - 2018";
	$tahununiv="2018 - Sekarang";
	$uiux="./uiux.jpg";
	$fontend="./fontend.png";

?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo "$name";?></title>
	<style type="text/css"></style>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="960.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
	<!-- Memasukkan File CSS Bootstrap -->
    <link rel="stylesheet" href="asset/bootstrap-4/css/bootstrap.min.css">
    <!-- Memasukkan file CSS DataTable -->
    <link rel="stylesheet" href="asset/DataTables/css/dataTables.bootstrap4.min.css"> 
</head>
<body>
	<div class="container">
	<div class="container_16">
		<div class="grid_16">
			<div class="header"> 
				<?php
				print "MY PROFIL";
				?>
			</div>
		</div>
		<div class="grid_16">
			<div class="nav-bar">
				<div class="menu">
					<ul class="">
						<li><a href="https://www.facebook.com/profile.php?id=100005278038663"><i class="fab fa-facebook"></i></a></li>
						<li><a href="https://www.instagram.com/melindaashifa"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
						<li><a href="https://github.com/Melfhee"><i class="fab fa-github"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="grid_16">
			<div class="banner">
				<div class="gambar">
					<img src="<?php echo "$fotoku";?>">
					<div class="bio">
					<p><?php echo "$bio";?></p>
				</div>
				</div>
				
				<div class="pendidikan">
					<div class="table-responsive-sm">          
			            <table class="table table-bordered table-striped table-hover">
			                <thead>
			                    <tr class="table-primary">
			                        <th>Pendidikan</th>
			                        <th>Tahun</th>
			                    </tr>
			                </thead>
			                <tbody>
						       <?php 
				                  //proses menampilkan data dari database:
				                  //siapkan query SQL
				                  $query = mysqli_query($connect, "SELECT * FROM pendidikan");
				                  $no=0;
			                    while($data = mysqli_fetch_array($query)){
			                		?>
			                    <tr>
			                        <td><?= $data['sekolah'] ?></td>
			                        <td><?= $data['tahun'] ?></td>
			                    </tr>
				                 <?php } ?>
			                </tbody>
			            </table>
			        </div>
				</div>
			</div>
		</div>
	<div class="container_16">
		<div class="grid_8">
			<div class="skills">
				<h1><?php echo "$skills";?></h1>
					<h3><?php echo "$skill1";?></h3><span class="bar"><span class="html"></span></span>
					<h3><?php echo "$skill2";?></h3><span class="bar"><span class="css"></span></span>
					<h3><?php echo "$skill3";?></h3><span class="bar"><span class="jquery"></span></span>
					<h3><?php echo "$skill4";?></h3><span class="bar"><span class="desain"></span></span>
			</div>
		</div>
		<div class="grid_8">
			<div class="sidebar">
				<img src="<?php echo "$sidebar";?>">
			</div>
		</div>
	</div>
	<div class="container_16">
		<div class="footer"> 

			<h2>Work Experience</h2>
			<div class="kotak1">
				<div class="keterangan">
				<h3><?php echo "$experience1";?></h3>
				</div>
			</div>
			<div class="kotak2"> 
				<div class="keterangan">
				<h3><?php echo "$experience2";?></h3>
				</div>

			</div>
		</div>
	</div>
	</div>
    

    <!-- Penggunaan DataTable dengan jQuery -->
    <script>
        $(function(){
            $('.table').DataTable();
        });
    </script>
</body>
</html>