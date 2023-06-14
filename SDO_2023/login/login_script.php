<?php
    require_once('../boot.php');
    if(isset($_POST['login']) && isset($_POST['password']))
    {
       $login = $_POST['login'];
       $password = $_POST['password'];
       $sql = "SELECT * FROM users WHERE login = '$login' and password = '$password'";
       $stmt = get_mysqli()->query("$sql");
       if ($stmt->fetch_row())
       {
              $_SESSION['login'] = $login;
             header("Location: ../tasks/task.php");
       }
    else
    {
        header("Location: ../reg/reg.php");
    }
    }
?>