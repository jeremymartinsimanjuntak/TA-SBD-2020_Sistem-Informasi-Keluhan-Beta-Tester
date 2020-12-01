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
    $username = $_POST['username'];
    $email = $_POST['email'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE betatester SET id='$id',username='$username',email='$email' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM betatester WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
   $id = $user_data['id'];
    $username = $user_data['username'];
    $email = $user_data['email'];
}
?>
<html>

<head>
    <title>Edit Beta Tester</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2 line-height='50%'>Edit Beta Tester</h2>

    <div class="kotak">
        <form action="edit_beta.php" method="post" class="form_login">
            <input type="hidden" name="id" class="form_login" value=<?php echo $id; ?>>
            <label>Username</label>
            <input type="text" name="username" class="form_login" value=<?php echo $username; ?>>
            <label>Email</label>
            <input type="text" name="email" class="form_login" value=<?php echo $email; ?>>

            <input type="submit" name="update" class="submit" value="update">
        </form>
    </div>
</body>
</html>
