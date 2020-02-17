<?php

class CategorieController extends BaseController
{
    protected function getProducts($id)
    {
        return Product::getCategorie($id);
    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'products'=> $this->getProducts($_GET['id']),
        );
    }

    protected $name = 'categorie';
}