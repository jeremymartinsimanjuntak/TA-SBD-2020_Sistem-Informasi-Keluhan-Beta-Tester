<?php
session_start();
include 'config.php';
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);

$query_admin = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
$query_admin_go = mysqli_query($mysqli,$query_admin);
// cek apakah username dan password di temukan pada database
if (mysqli_num_rows($query_admin_go) > 0) 
{
  while ($row = mysqli_fetch_array($query_admin_go)) {
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['nama'] = $row['nama'];
    header("location:lihat.php");
  }
 }else {
   header("location:login_developer.php?pesan=gagal");
 }
?>
