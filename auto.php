<?php
/* include autoloader normally */
require_once("vendor/autoload.php");

use \Auto\Autoloader;
use \Auto\Task;

/* create pool of workers of the specified class, passing the specified
    path to autoloader */
$pool = new Pool(4, Autoloader::class, ["vendor/autoload.php"]);
/* submit a task to the pool */
$pool->submit(new Task("Hello World!"));

/* in the real world, do some ::collect somewhere */

/* shutdown, because explicit is good */
$pool->shutdown();
?>
