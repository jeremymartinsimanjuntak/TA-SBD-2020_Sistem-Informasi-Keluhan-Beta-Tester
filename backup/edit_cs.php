<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $shift = $_POST['shift'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE cs SET id='$id',nama='$nama',shift='$shift' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: cs.php");
}
?>
<?php

$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM cs WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
   $id = $user_data['id'];
    $nama = $user_data['nama'];
    $shift = $user_data['shift'];
}
?>
<html>

<head>
    <title>Edit CS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 line-height='50%'>Edit Data Peminjam</h2>

    <div class="kotak">
        <form action="edit_cs.php" method="post" class="form_login">
            <input type="hidden" name="id" class="form_login" value=<?php echo $id; ?>>
            <label>Nama</label>
            <input type="text" name="nama" class="form_login" value=<?php echo $nama; ?>>
            <label>Shift</label>
            <input type="text" name="shift" class="form_login" value=<?php echo $shift; ?>>

            <input type="submit" name="update" class="submit" value="update">
        </form>
    </div>
</body>
</html>
