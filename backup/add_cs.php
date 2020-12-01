<html>

<head>
    <title>Daftar Customer Service</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 line-height='50%'>Tambah Data Customer Service</h2>

    <div class="kotak">
        <form action="add_cs.php" method="post" class="form_login">
            <label>Nomor Identitas</label>
            <input type="text" name="id" class="form_login">
            <label>Nama</label>
            <input type="text" name="nama" class="form_login">
            <label>Shift</label>
            <input type="text" name="shift" class="form_login">

            <input type="submit" name="Submit" class="submit" value="Simpan"></td>

        </form>

    </div>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $shift = $_POST['shift'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO cs(id, nama, shift) VALUES('$id','$nama', '$shift')");

        // Show message when user added
        echo "CS added successfully. <a href='cs.php'>View CS</a>";
        header("Location: cs.php");
    }
    ?>
</body>

</html>
