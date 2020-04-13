<?php

require '/Library/WebServer/Documents/CircRef/vendor/autoload.php';

$Dispatcher = new App\Controller\Dispatch();

echo $Dispatcher->dispatch();

echo '<p>done</p>';


