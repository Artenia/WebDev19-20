<?php

class ProductController extends BaseController
{
    public function getProduct($i)
    {
        return new Product($i);
    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'product' => $this->getProduct($_GET['id']),
        );
    }

    protected $name = 'product';
}