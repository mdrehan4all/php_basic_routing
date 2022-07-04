<a href="./">Home</a> <a href="about">About</a> <a href="contact">Contact</a>
<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '':
    case '/route/':
        require __DIR__ . '/views/index.php';
        break;
        
    case '/route/about':
        require __DIR__ . '/views/about.php';
        break;

    case '/route/contact':
        require __DIR__ . '/views/contact.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}