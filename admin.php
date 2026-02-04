<?php include 'koneksi.php'; ?>
<h2>Data Pasien</h2>

<table border="1" cellpadding="10">
<tr>
  <th>No</th><th>Nama</th><th>Treatment</th><th>Tanggal</th>
</tr>

<?php
$no=1;
$q = mysqli_query($conn,"SELECT * FROM pasien ORDER BY id DESC");
while($p = mysqli_fetch_assoc($q)){
?>
<tr>
  <td><?= $no++ ?></td>
  <td><?= $row['treatment'] ?? '-'; ?></td>
<td><?= $row['tanggal'] ?? '-'; ?></td>

</tr>
<?php } ?>
</table>
