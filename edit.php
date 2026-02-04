<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($conn,"SELECT * FROM booking WHERE id='$id'");
$d = mysqli_fetch_array($data);

if(isset($_POST['update'])){
  mysqli_query($conn,"UPDATE booking SET
    nama='$_POST[nama]',
    no_hp='$_POST[no_hp]',
    treatment='$_POST[treatment]',
    pesan='$_POST[pesan]'
    WHERE id='$id'
  ");
  header("location:admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Booking</title>
<style>
body{font-family:Arial;background:#f6f6f6}
.box{width:400px;margin:80px auto;background:#fff;padding:25px;border-radius:10px}
input,select,textarea,button{width:100%;padding:10px;margin-top:10px}
button{background:#c28b8b;color:#fff;border:none}
</style>
</head>
<body>

<div class="box">
<h3>Edit Booking</h3>

<form method="post">
<input name="nama" value="<?= $d['nama'] ?>">
<input name="no_hp" value="<?= $d['no_hp'] ?>">

<select name="treatment">
  <option><?= $d['treatment'] ?></option>
  <option>Acne Treatment</option>
  <option>Facial Glow</option>
  <option>Laser Treatment</option>
</select>

<textarea name="pesan"><?= $d['pesan'] ?></textarea>

<button name="update">Update</button>
</form>
</div>

</body>
</html>
