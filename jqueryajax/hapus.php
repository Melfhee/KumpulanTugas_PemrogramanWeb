<?php  
$con = new mysqli('localhost','root','','pendidikanajax');
$tingkat = $_POST['tingkat'];

$data = $con->query("DELETE FROM pendidikan WHERE tingkat='$tingkat'");
echo json_encode($data);