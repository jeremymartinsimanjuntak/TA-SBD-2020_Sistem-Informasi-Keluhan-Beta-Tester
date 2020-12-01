<?php
session_start();
include 'config.php';
if ( $_SESSION['username']) {
    ;
  
}else {
  echo "Login Gagal:(";
       header("location:login_admin.php");}
?>
<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $masalah = $_POST['masalah'];
    $tanggal = $_POST['tanggal'];
    $username = $_POST['username'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE keluhan SET id='$id',masalah='$masalah',tanggal='$tanggal',username='$username' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: keluhan.php");
}
?>
<?php

$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM keluhan WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
   $id = $user_data['id'];
    $masalah = $user_data['masalah'];
    $tanggal = $user_data['tanggal'];
    $username = $user_data['username'];
}
?>
<html>

 <head>
    <title>Edit Keluhan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 line-height='50%'>Edit Keluhan</h2>

    <div class="kotak">
        <form action="edit_keluhan.php" method="post" class="form_login">
            <input type="hidden" name="id" class="form_login" value=<?php echo $id; ?>>
            <label>Keluhan</label>
            <input type="text" name="masalah" class="form_login" value=<?php echo $masalah; ?>>
            <label>Tanggal</label>
            <input type="text" name="tanggal" class="form_login" value=<?php echo $tanggal; ?>>
            <label>Username</label>
            <input type="text" name="username" class="form_login" value=<?php echo $username; ?>>


            <input type="submit" name="update" class="submit" value="update">
        </form>
    </div>
</body>
</html>
