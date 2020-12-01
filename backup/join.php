<html>

<head>
    <title>Tabel Join</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 line-height='50%'>Inner Join</h2>

    <table class="table1">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Nama CS</th>
            <th>Shift CS</th>
        </tr>
        <?php
        include_once("config.php");
        $result = mysqli_query($mysqli, "SELECT A.username, A.email, B.nama, B.shift FROM betatester A INNER JOIN cs B
     ON A.username = B.nama ");
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['username'] . "</td>";
            echo "<td>" . $user_data['email'] . "</td>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['shift'] . "</td>";
        }
        ?>
    </table>
    <h2 line-height='50%'>Left Join</h2>

    <table class="table1">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Nama CS</th>
            <th>Shift CS</th>
        </tr>
        <?php
        include_once("config.php");
        $result = mysqli_query($mysqli, "SELECT A.username, A.email, B.nama, B.shift FROM betatester A LEFT JOIN cs B
     ON A.id = B.id ");
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['username'] . "</td>";
            echo "<td>" . $user_data['email'] . "</td>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['shift'] . "</td>";
        }
        ?>
    </table>
    <h2 line-height='50%'>Right Join</h2>

    <table class="table1">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Nama CS</th>
            <th>Shift CS</th>
        </tr>
        <?php
        include_once("config.php");
        $result = mysqli_query($mysqli, "SELECT A.username, A.email, B.nama, B.shift FROM betatester A RIGHT JOIN cs B
     ON A.id = B.id ");
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['username'] . "</td>";
            echo "<td>" . $user_data['email'] . "</td>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['shift'] . "</td>";
        }
        ?>
    </table>
    <br>
    <button><a weight='50px' href="index.php">Kembali</a></button>

</body>

</html>
