<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];
$link = mysqli_connect("localhost", "root", "", "login");
$result = mysqli_query($link, "SELECT * FROM `user` WHERE username='$username' and `password`='$password'");
mysqli_close($link);
$row = mysqli_fetch_array($result);
if ($row) {
    $_SESSION["name"]=$row["name"];
?>
    <script>
        location.replace("index.php");
    </script>
<?php
} else {
    echo ("نام کاربری یا کلمه عبور صحیحح نیست");
}
?>
