<?php


use Todo\Models\Task;
use Todo\Storage\MySqlDatabaseTaskStorage;

require 'vendor/autoload.php';


try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=todo', 'root', '');

    $storage = new MySqlDatabaseTaskStorage($db);

    /*$task = new Task();

    $task->setDescription("Learn Css");
    $task->setDue(new DateTime('+ 10 minutes'));

    $taskId = $storage->store($task);
*/

    $task = $storage->get(2);

    $task->setDescription('learn c++ c++');
    $task->setComplete();
    $task->setDue(new DateTime('+1 year'));


   $task= $storage->update($task);
    var_dump($task);

} catch (PDOException $e) {

    die($e->getMessage());
}
