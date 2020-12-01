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
    <title>Daftar Keluhan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 line-height='50%'>Daftar Keluhan</h2>
 
    <form action="keluhan.php" method="get">
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
            <th>Nomor Keluhan</th>
            <th>Keluhan</th>
            <th>Tanggal</th>
            <th>Username</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include_once("config.php");
        if(isset($_GET['cari'])){
            $result = mysqli_query($mysqli, "SELECT * FROM keluhan WHERE masalah LIKE '%".$cari."%' ORDER BY id ASC");
        } else {
            $result = mysqli_query($mysqli, "SELECT * FROM keluhan ORDER BY id ASC");
        }
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td align='center'>" . $user_data['id'] . "</td>";
            echo "<td>" . $user_data['masalah'] . "</td>";
            echo "<td>" . $user_data['tanggal'] . "</td>";
            echo "<td>" . $user_data['username'] . "</td>";
            echo "<td align='center'><a href='edit_keluhan.php?id=$user_data[id]'>Edit</a></td>";
            echo "<td align='center'><a href='delete_keluhan.php?id=$user_data[id]'>Delete</a></td></tr>";
        }
        ?>
 
    </table>
    <br>
    <button><a href="add_keluhan.php">Tambah data Keluhan</a></button>
    <button><a href="index.php">Lihat Data Beta Tester</a></button>
    <button><a href="keluhan.php">Lihat Data Keluhan</a></button>
    <button><a href="developer.php">Lihat Developer</a></button>
    <button><a href="logout_admin.php">Logout</a></button>

</body>

</html>
