<!DOCTYPE html>
<html lang="fa">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ثبت‌نام</title>

<style>
body {
    background: linear-gradient(90deg, rgba(42, 123, 155, 1) 0%, rgba(87, 199, 133, 1) 50%, rgba(237, 221, 83, 1) 100%);
    direction: rtl;
    font-family: 'Vazir', tahoma, sans-serif;
    margin: 0;
    padding: 0;
}

.loginall {
    border-radius: 50px;
    margin: 8% auto;
    width: 30%;
    background: linear-gradient(90deg, rgba(52, 134, 166, 0.542) 0%, rgba(150, 160, 12, 0.454) 50%, rgba(237, 221, 83, 0.552) 100%);
    text-align: center;
    padding: 40px 20px;
    box-shadow: 0 0 20px rgba(0,0,0,0.3);
}

.loginall h1 {
    margin-bottom: 25px;
}

.input-field {
    width: 70%;
    height: 45px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-sizing: border-box;
    margin-top: 10px;
    font-size: 15px;
}

#taeed {
    width: 40%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 18px;
    margin-top: 25px;
    transition: background-color 0.3s, transform 0.1s;
}

#taeed:hover {
    background-color: #0056b3;
    transform: scale(1.05);
}

a {
    display: block;
    margin-top: 15px;
    text-decoration: none;
    color: #000;
    font-weight: bold;
}

a:hover {
    color: #F84F66;
}
</style>
</head>

<body>

    <div class="loginall">
        <form action="user_register_action.php" method="post">
            <h1>ثبت‌نام</h1>

            <p>نام کامل</p>
            <input type="text" class="input-field" name="name" placeholder="نام کامل خود را وارد کنید" required>

            <p>نام کاربری</p>
            <input type="text" class="input-field" name="username" placeholder="نام کاربری خود را وارد کنید" required>

            <p>رمز عبور</p>
            <input type="password" class="input-field" name="password" placeholder="رمز عبور خود را وارد کنید" required>

            <p>تکرار رمز عبور</p>
            <input type="password" class="input-field" name="repassword" placeholder="تکرار رمز عبور" required>

            <input id="taeed" type="submit" value="ثبت‌نام">
        </form>

        <a href="user_login.php">بازگشت به ورود</a>
    </div>

</body>
</html>
