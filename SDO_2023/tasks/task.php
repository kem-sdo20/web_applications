<?php
require_once('../boot.php');
$title = "Список задач ";
$page_title = "Список задач (Скрытая страница)";
if(isset($_SESSION['login'])){
     $content = "
    <form action = 'add_task.php' method= 'post'>
    <textarea cols = 20 rows = 5 name = 'task'>
    </textarea><br>
    <input type= 'submit' class='btn btn-warning' value = 'Отправить'>
    </form>";
    
    $sql = "SELECT * FROM tasks";
    $stmt = get_mysqli()->query($sql);
    $content = $content."<table border = '1' class='table'>";
       $count = 0;
    while ($row = $stmt->fetch_row())
    {
        $html_row = "";
        $html_row = $html_row . '<tr>'; 
        $html_row = $html_row . '<td>' . $row[0] . '</td><td>' . $row[1] . '</td>';
        $html_row = $html_row . '</tr>'; 

        $content = $content.$html_row;
      }
    $content = $content."</table>";
}

else
{
    // $content = "Данные доступны толко после авторизации";
        header("Location: ../login/login.php");
}
include ("../components/layout.php");
?>