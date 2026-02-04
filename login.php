<?php
session_start();
$conn = mysqli_connect("localhost","root","","db_klinik");

if(isset($_POST['login'])){
  $u = $_POST['username'];
  $p = $_POST['password'];

  $q = mysqli_query($conn,
    "SELECT * FROM admin WHERE username='$u' AND password='$p'"
  );

  if(mysqli_num_rows($q) > 0){
    $_SESSION['admin'] = $u;
    header("Location: admin.php");
    exit;
  } else {
    echo "LOGIN SALAH";
  }
}
?>

<h2>Login Admin</h2>

<form method="post">
  <input type="text" name="username" placeholder="Username"><br><br>
  <input type="password" name="password" placeholder="Password"><br><br>
  <button type="submit" name="login">Login</button>
</form>
