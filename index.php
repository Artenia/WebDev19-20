<?php

foreach (glob(__DIR__."/controllers/*.php") as $filename)
{
    include_once $filename;
}

foreach (glob(__DIR__."/classes/*.php") as $filename)
{
    include_once $filename;
}

$request = explode('/', $_SERVER['REQUEST_URI'])[2];

var_dump(request);
switch ($request) {
    case '' :
        $controller = new HomeController();
        break;

    case 'products' :
        $controller = new ProductsController();
        break;

    default:
        http_response_code(404);
        echo '404';
        break;
}

