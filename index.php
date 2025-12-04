<?php
require $_SERVER['DOCUMENT_ROOT'] . '/' . 'router/router.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

route($uri);

?>
