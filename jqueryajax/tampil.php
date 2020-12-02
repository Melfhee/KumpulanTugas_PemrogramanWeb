<?php  
$con = new mysqli('localhost','root','','pendidikanajax');
$data = $con->query("SELECT * FROM pendidikan");
foreach ($data as $isi): ?>
<tr>
	<td><?= $isi['tingkat'] ?></td>
	<td><?= $isi['nama'] ?></td>
	<td><?= $isi['tahun'] ?></td>
	<td>
		<button type="button" class="btn btn-danger" onclick="hapusData('<?= $isi['tingkat'] ?>')">Hapus</button>
	</td>
</tr>

<?php endforeach ?>