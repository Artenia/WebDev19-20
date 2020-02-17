<?php

class HomeController extends BaseController
{
    protected $name = 'Home';

    protected function getTemplateVars()
    {
        return array(
            "controller" => $this->name,
            "products"=> Product::getEntities(),
        );
    }
}