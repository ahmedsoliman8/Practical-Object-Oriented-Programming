<?php


use Todo\Models\Task;
use Todo\Storage\MySqlDatabaseTaskStorage;
use Todo\TaskManager;

require 'vendor/autoload.php';


try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=todo', 'root', '');

    $storage = new MySqlDatabaseTaskStorage($db);

    /* $task = new Task();

      $task->setDescription("Learn Database");
      $task->setDue(new DateTime('+ 10 minutes'));

      $taskId = $storage->store($task);

      $task = $storage->get(10);

      $task->setDescription('learn MySql');
      $task->setComplete(true);
      $task->setDue(new DateTime('+2 year'));


     $task= $storage->update($task);
      var_dump($task);

  */

    $manager = new TaskManager($storage);

    $task = new Task();



    $task = $manager->getTask(11);

    $task->setComplete(false);
    $task->setDescription('Learn Linux Linux');

    $taskUpdated=$manager->updateTask($task);
    var_dump($taskUpdated);


} catch (PDOException $e) {

    die($e->getMessage());
}
