<?

$task = $_POST['task'];
if ($task == '') {
    echo 'введите задание';
    exit();
}


require 'config.php';

$sql = 'INSERT INTO tasks(tasks) VALUES (?)';

$query = $pdo->prepare($sql);

$query->execute([$task]);

header('location: /');