<?php

class Categorie extends BaseEntity
{
    protected $cat_id;
    protected $cat_nom;

    public static $definition = array(
        'table' => 'categories',
        'primary' => 'cat_id',
        'fields' => array(
            'cat_id' => 'cat_id',
            'cat_nom' => 'cat_nom',
        )
    );

    public static function getCategories()
    {
        $db = DB::getInstance();
        $sql = 'SELECT * FROM categories';
        $st = $db->query($sql);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getIdCat()
    {
        return $this->cat_id;
    }

    public function getNameCat()
    {
        return $this->cat_nom;
    }

    public static function getDefinition()
    {
        return self::$definition;
    }

    public static function getFields()
    {
        return self::$definition['fields'];
    }

}