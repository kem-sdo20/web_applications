<?php
require_once('../boot.php');
$title = "Скрытая страница";
$page_title = "Список задач (Скрытая страница)";
if(isset($_SESSION['login'])){
$content = file_get_contents("task_async_content.php");
}
else
{
    header("Location: ../login/login.php");
}
include ("../components/layout.php");
?>