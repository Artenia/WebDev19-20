<?php

class SearchController extends BaseController
{
    protected $name = 'search';

    protected function search()
    {
        $keyword = ($_GET['keyword']);
        var_dump($keyword);
        if (!isset($keyword))
        {
            return false;
        }
        return Product::search($keyword);
    }

    protected function getTemplateVars()
    {
        return array(
            'controller' => $this->name,
            'products' => $this->search(),
            'keyword' => $_GET['keyword'],
        );
    }
}