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

switch ($request) {
    case 'home' :
        $controller = new HomeController();
        break;

    case 'products' :
        $controller = new ProductsController();
        break;

    case (preg_match('/product*/', $request) ? true : false) :
        $controller = new ProductController();
        break;

    case (preg_match('/categorie*/', $request) ? true : false) :
        $controller = new CategorieController();
        break;

    default:
        http_response_code(404);
        echo '404';
        break;
}

