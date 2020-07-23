<?php
require_once 'model.php';
require_once 'controllers.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($uri === '/index.php') {
    listAction();
} elseif ($uri === '/index.php/show' && isset($_GET['id'])) {
    showAction($_GET['id']);
} else {
    header('HTTP/2.0 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}
