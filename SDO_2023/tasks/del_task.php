<?php
require_once('../boot.php');
if (isset($_SESSION['login']) and isset($_POST['task']))
{
    $login = mysqli_real_escape_string($login, $_POST["task"]);
    $sql = "DELETE FROM Users WHERE id = '$login'";
    if(mysqli_query($login, $sql)){
         
        header("Location: index.php");
    } else
    }
?>