<?php
/**
 * Это будет фронт контроллер, единственный пхп файл доступный из веба.
 * больше никакого кода в нём небудет, пока ;)
 */
require_once __DIR__ . '/src/autoload.php';

$app = new T13\Mvc\Application([
    'app_namespace' => 'FirstApp',
]);
$app();
