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
    <title>Daftar Beta Tester</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 line-height='50%'>Daftar Beta Tester</h2>
 
    <form action="index.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
<?php 
// ini merupakan data tabel beta tester
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
    <table class="table1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include_once("config.php");
        if(isset($_GET['cari'])){
            $result = mysqli_query($mysqli, "SELECT * FROM betatester WHERE username LIKE '%".$cari."%' ORDER BY id ASC");
        } else {
            $result = mysqli_query($mysqli, "SELECT * FROM betatester ORDER BY id ASC");
        }
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td align='center'>" . $user_data['id'] . "</td>";
            echo "<td>" . $user_data['username'] . "</td>";
            echo "<td>" . $user_data['email'] . "</td>";
            echo "<td align='center'><a href='edit_beta.php?id=$user_data[id]'>Edit</a></td>";
            echo "<td align='center'><a href='delete_beta.php?id=$user_data[id]'>Delete</a></td></tr>";
        }
        ?>
 
    </table>
    <br>
    <button><a href="add_beta.php">Tambah data Beta Tester</a></button>
    <button><a href="index.php">Lihat Data Beta Tester</a></button>
    <button><a href="keluhan.php">Lihat Data Keluhan</a></button>
    <button><a href="developer.php">Lihat Developer</a></button>
    <button><a href="logout_admin.php">Logout</a></button>

</body>

</html>
