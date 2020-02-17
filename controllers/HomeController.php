<?php

class HomeController extends BaseController
{
    protected $name = 'Home';

    protected function getBests()
    {
        return Product::getBests();
    }

    protected function getTemplateVars()
    {
        return array(
            "controller" => $this->name,
            "products"=> Product::getEntities(),
            "bests" => $this->getBests(),
        );
    }
}