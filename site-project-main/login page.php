<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="site.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include("meno.php")
    ?>
    <style>
        body{
            
            
background: linear-gradient(90deg, rgba(42, 123, 155, 1) 0%, rgba(87, 199, 133, 1) 50%, rgba(237, 221, 83, 1) 100%);
        
        }
        #aicons {
            background-color: #666;
    font-size: large;
    border-radius: 15%;
        }

        #al1 {
            text-decoration: none;
    color: #000000;
    margin: 0 15px;
    font-weight: bold;
    transition: color 0.3s;
    margin: bottom 10px; ;
    font-size: 16px;
        }

        #al1:hover {
            color: #F84F66; 
        }

        .loginall {
            
            border-radius: 50px;
            margin-left: 35%;
            margin-right: 35%;
            margin-top: 10%;
            background: linear-gradient(90deg, rgba(52, 134, 166, 0.542) 0%, rgba(150, 160, 12, 0.454) 50%, rgba(237, 221, 83, 0.552) 100%);

            text-align: center;
            justify-content: center;
            
        }

        .loginall h1 {
            text-align: center;
        } 

        #username {
          
            width: 50%;
            height: 50px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #loginp {
            font-weight: bold;
        }

        #taeed {
            width: 30%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 20px;
            margin-top: 15px;
        }

        #taeed:hover{
            background-color: #0056b3;
        }

    </style>
</head>

<body>

    <div class="loginall"  >
        <form >

            <h1>Login</h1>
            <p id="loginp" >نام یا ایمیل</p>
            <input type="text" id="username"  placeholder="نام یا ایمیل خود را وارد کنید">
            <p id="loginp" >رمز</p>
            <input type="text" id="username" placeholder="رمز خود را وارد کنید" >
    
            <p></p>
            <input id="taeed" type="reset" value="تایید">
        </form>

    </div>

    
</body>
</html>