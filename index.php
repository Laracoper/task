<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список дел</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <h2 class="title">список дел</h2>
        <form action="/add.php" method="post">
            <input type="text" name="task" placeholder="впишите ваше дело...">
            <button type="submit" name="sendtask" class="btn btn-green">отправить</button>
        </form>
        <?php 
        require 'config.php';
        echo'<ul>';
        $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC LIMIT 3');
        while($row = $query ->fetch(PDO::FETCH_OBJ)){
            echo '<li>'.$row->tasks.'
            <a href="/delete.php?id='.$row->id.'"><button class="btn btn-red">удалить</button></a></li>';
        }
        echo'</ul>';
        ?>
    </div>
</body>

</html>