<?php

$username = $_POST["username"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];
$name = $_POST["name"];
if ($password == $repassword) {
    $link = mysqli_connect("localhost", "root", "", "login");
    $result = mysqli_query($link, "INSERT INTO `user`( `username`, `password`) VALUES ('$username','$password')");
    mysqli_close($link);
    if ($result) {
?>
        <script>
            location.replace("index.php");
        </script>
<?php
    } else {
        echo ("ثبت نام نشد");
    }
}else{
    echo ("کلمه عبور و تکرار آن همسان نیستند");
}
?>
