<?php
    require_once('../boot.php');
    if (isset($_SESSION['login']) and isset($_POST['task']))
    {
       $login = $_SESSION['login'];
       $sql = "SELECT * FROM users WHERE login = '$login'";
       $stmt = get_mysqli()->query("$sql");
       $user_id = $stmt->fetch_row()[0];
    
       $task = $_POST['task'];
       $sql = "INSERT INTO tasks(user_id, task) VALUES ('$user_id', '$task')";
       $stmt = get_mysqli()->query("$sql");
       
       header("Location: task.php");
    }
?>