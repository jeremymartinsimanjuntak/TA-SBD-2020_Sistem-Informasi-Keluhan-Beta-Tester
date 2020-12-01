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
    <h2 line-height='50%'>Tambah Data Keluhan</h2>

    <div class="kotak">
        <form action="add_keluhan.php" method="post" class="form_login">
            <label>Nomor Keluhan</label>
            <input type="text" name="id" class="form_login">
            <label>Keluhan</label>
            <input type="text" name="masalah" class="form_login">
            <label>Tanggal</label>
            <input type="text" name="tanggal" class="form_login">
            <label>Username</label>
            <input type="text" name="username" class="form_login">

            <input type="submit" name="Submit" class="submit" value="Simpan"></td>

        </form>

    </div>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $masalah = $_POST['masalah'];
        $tanggal = $_POST['tanggal'];
        $username = $_POST['username'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO keluhan (id, masalah, tanggal, username) VALUES('$id','$masalah', '$tanggal', '$username')");

        // Show message when user added
        echo "Beta Tester added successfully. <a href='keluhan.php'>View Keluhan</a>";
        header("Location: keluhan.php");
    }
    ?>
</body>

</html>
