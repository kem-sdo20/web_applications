<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>пример обработки форм</title>
</head>
<body>
    <form action="" method = "post">
        <div></div>
        <Label for="login">Введите логин</Label>
        <input type="text" name = "login" id = "login">
        </div>
        <div>
        <Label for="password">Введите пароль</Label>
        <input type="password" name = "password" id = "password">
        </div>
        <input type="submit" value = "Зарегистрироваться">
    </form>
    <?php
    session_start();
    // echo "Location: ".$SERVER['REQUES_URI'];
    if(isset($_POST['login']) && isset($_POST['password']))
    {
       $login = $_POST['login'];
       $password = $_POST['password'];
       if($login != "" && $password != "")
       {

           $mysqli = new mysqli("localhost", "root", "", "SDO_2023");
        //    $result_login = $mysqli->query("SELECT * FROM users WHERE login = $login");
        //    $_SESSION['login'] = $login;
        //    if(!$result_login->fetch_assoc()){
                $result_insert = $mysqli->query("INSERT INTO users(login, password) VALUES ('$login', '$password')");
           }
           echo "Пользователь с таким логином уже существует";
           //    header("Location: ".$SERVER['REQUES_URI']);       
           //    $result = $mysqli->query("SELECT * from test");
        //    while ($row = $result->fetch_assoc()){
        //             echo $row['test'];
        //    }
       }
       else{
           header("Location: ".$SERVER['REQUES_URI']);
       }
    
    else{
        // $mysqli = new mysqli("localhost", "root", "", "SDO_2023");
        // $result = $mysqli->query("SELECT * from test");
        // while ($row = $result->fetch_assoc()){
        //     echo $row['test'];
        // }
    }
    ?>
    
</body>
</html>