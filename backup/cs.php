<html>

<head>
    <title>Daftar Customer Service</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 line-height='50%'>Data Customer Service</h2>

    <table class="table1">
        <tr>
            <th>Nomor Identitas</th>
            <th>Nama</th>
            <th>Shift</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include_once("config.php");
        $result = mysqli_query($mysqli, "SELECT * FROM cs ORDER BY id ASC");
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td align='center'>" . $user_data['id'] . "</td>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['shift'] . "</td>";
            echo "<td align='center'><a href='edit_cs.php?id=$user_data[id]'>Edit</a></td>";
            echo "<td align='center'><a href='delete_cs.php?id=$user_data[id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
    <br>
    <button><a href="add_cs.php">Tambah CS</a></button>
    <button><a href="index.php">Lihat Beta Tester</a></button>
</body>

</html>
