<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>$title</title>
</head>
<body class="container">
    <nav class = "navbar">
        <ol class = "navbar-nav">
            <li class="nav-item">
                <a href="http://localhost/SDO_2023/reg/reg.php">Регистрация</a>
            </li> 
            <li class="nav-item">
                <a href="http://localhost/SDO_2023/login/login.php">Авторизация</a>
            </li> 
            <li class="nav-item">
                <a href="http://localhost/SDO_2023/tasks/task.php">Список задач</a>
            </li> 
            <li class="nav-item">
                <a href="http://localhost/SDO_2023/tasks/task_async.php">Список задач (ассинхроно)</a>
            </li> 
            <li class="nav-item">
                <a href="http://localhost/SDO_2023/login/logout.php">Выход</a>
            </li> 
        </ol>
    </nav>
        
    <h1><?= $page_title ?></h1>
    <main>
        <?= $content ?>
    </main>
</body>
</html>