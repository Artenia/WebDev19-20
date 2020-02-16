<?php

class ProductsController extends BaseController
{
    protected $name = 'Products';

    protected function getTemplateVars()
    {
        return array(
            "controller" => $this->name,
            "products" => Product::getEntities(),
        );
    }
}