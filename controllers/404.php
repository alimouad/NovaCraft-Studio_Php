<?php
http_response_code(404);

$title = "Page Not Found";
$view = 'views/404.php';

require 'templates/layout.php';
exit;