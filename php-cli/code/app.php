<?php

//---------------------------------
// подключение файлов логики
// require_once('src/main.function.php');
// require_once('src/template.function.php');
// require_once('src/file.function.php');

// docker run -it --rm -v "${PWD}/php-cli/code:/code" -w /code php:8.2-cli php app.php add

require_once __DIR__ . '/vendor/autoload.php';

//вызов корневой функции
$result = main(__DIR__ . "/config.ini");
//вывод результата
echo $result;

