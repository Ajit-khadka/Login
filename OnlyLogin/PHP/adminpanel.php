<?php

$username = $_POST['username'];
$password = $_POST['password'];

$db = mysqli_connect("localhost", "root", "", "login");
if ($db->connect_error) {

    die("failed to connect: " . $db->connect_error);
} else {
    $sql = "SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "'";
    $result = mysqli_query($db, $sql);

    $row = mysqli_fetch_array($result);
    if ($row) {
        $_SESSION['id'] = $row['id'];
        echo '<script>windows: location="main.html"</script>';
    } else {
        echo "Your password or username doesnot match";
    }
}
