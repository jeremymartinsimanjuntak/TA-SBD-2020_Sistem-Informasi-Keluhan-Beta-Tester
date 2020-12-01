<?php
session_start();
include 'config.php';
if ( $_SESSION['username']) {
    ;
  
}else {
  echo "Login Gagal:(";
       header("location:login_admin.php");}
?>
<html>

<head>
    <title>Daftar Developer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 line-height='50%'>Daftar Developer</h2>
 
    <form action="developer.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
    <table class="table1">
        <tr>
            <th>Nomor Identitas</th>
            <th>Nama</th>
            <th>Bidang</th>
        </tr>

        <?php
        include_once("config.php");
        if(isset($_GET['cari'])){
            $result = mysqli_query($mysqli, "SELECT * FROM developer WHERE nama LIKE '%".$cari."%' ORDER BY id ASC");
        } else {
            $result = mysqli_query($mysqli, "SELECT * FROM developer ORDER BY id ASC");
        }
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td align='center'>" . $user_data['id'] . "</td>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['bidang'] . "</td>";
        }
        ?>
 
    </table>
    <br>
    <button><a href="index.php">Lihat Data Beta Tester</a></button>
    <button><a href="keluhan.php">Lihat Data Keluhan</a></button>
    <button><a href="developer.php">Lihat Developer</a></button>
    <button><a href="logout_admin.php">Logout</a></button>

</body>

</html>
