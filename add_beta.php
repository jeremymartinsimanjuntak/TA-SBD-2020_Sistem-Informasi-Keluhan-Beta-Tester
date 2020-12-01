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
    <h2 line-height='50%'>Tambah Data Beta Tester</h2>

    <div class="kotak">
        <form action="add_beta.php" method="post" class="form_login">
            <label>ID</label>
            <input type="text" name="id" class="form_login">
            <label>Username</label>
            <input type="text" name="username" class="form_login">
            <label>Email</label>
            <input type="text" name="email" class="form_login">

            <input type="submit" name="Submit" class="submit" value="Simpan"></td>

        </form>

    </div>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO betatester(id, username, email) VALUES('$id','$username', '$email')");

        // Show message when user added
        echo "Beta Tester added successfully. <a href='index.php'>View Beta Tester</a>";
        header("Location: index.php");
    }
    ?>
</body>

</html>
