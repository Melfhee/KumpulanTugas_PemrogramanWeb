<?php  
$con = new mysqli('localhost','root','','pendidikanajax');

$tingkat = $_POST['tingkat'];
$nama = $_POST['nama'];
$tahun = $_POST['tahun'];

$data = $con->query("INSERT INTO pendidikan (tingkat,nama,tahun) VALUES ('$tingkat','$nama','$tahun')");
echo json_encode($data);

?>