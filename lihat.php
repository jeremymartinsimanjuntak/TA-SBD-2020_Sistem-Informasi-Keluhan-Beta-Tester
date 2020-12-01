<?php
session_start();
include 'config.php';
if ( $_SESSION['username']) {
    ;
  
}else {
  echo "Login Gagal:(";
       header("location:login_developer.php");}
?>
<html>

<head>
    <title>Tabel Join</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 line-height='50%'>Daftar Keluhan</h2>

    <table class="table1">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Keluhan</th>
            <th>Tanggal</th>
        </tr>
        <?php
        include_once("config.php");
        $result = mysqli_query($mysqli, "SELECT A.masalah, A.tanggal, B.username, B.email FROM keluhan A LEFT JOIN betatester B
     ON A.username = B.username ");
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['username'] . "</td>";
            echo "<td>" . $user_data['email'] . "</td>";
            echo "<td>" . $user_data['masalah'] . "</td>";
            echo "<td>" . $user_data['tanggal'] . "</td>";
        }
        ?>
    </table>

    <h2 line-height='50%'>Daftar ID Beta Tester yang sama dengan Developer </h2>

    <table class="table1">
        <tr>
            <th>Beta Tester</th>
            <th>Email</th>
            <th>Developer</th>
            <th>Bidang</th>
        </tr>
        <?php
        include_once("config.php");
        $result = mysqli_query($mysqli, "SELECT A.username, A.email, B.nama, B.bidang FROM betatester A INNER JOIN developer B
     ON A.id = B.id ");
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['username'] . "</td>";
            echo "<td>" . $user_data['email'] . "</td>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['bidang'] . "</td>";
        }
        ?>
        </table>
        </br>
        <button><a href="logout_developer.php">Logout</a></button>


</body>
</html>
