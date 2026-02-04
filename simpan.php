<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$treatment = $_POST['treatment'];

mysqli_query($conn,"INSERT INTO pasien VALUES(NULL,'$nama','$treatment',NOW())");

$wa = urlencode("Halo, saya $nama ingin booking $treatment");
header("Location:https://wa.me/6285771779882?text=$wa");
