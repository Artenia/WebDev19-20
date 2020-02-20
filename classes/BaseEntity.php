<?php

abstract class BaseEntity
{
    /**
     * @var array définissant la structure de notre entité
     */
    public static $definition = array();

    /**
     * BaseEntity constructor.
     * @param int $id de l'entité à instancier
     */
    public function __construct($id = 0)
    {
        if(!is_null($id))
        {
            $data = Db::getInstance()->query("SELECT * FROM panier.".static::$definition['table']." WHERE id = {$id} LIMIT 1")->fetch(PDO::FETCH_ASSOC);
            foreach (static::$definition['fields'] as $field)
            {
                if(isset($data[$field]))
                {
                    $this->{$field} = $data[$field];
                }
            }
        }
    }

    /**
     * @param int $limit du nombre max d'entité à retournée
     * @return array d'entités
     */
    public static function getEntities($limit = 100)
    {
        $ids = Db::getInstance()->query("SELECT id FROM panier.".static::$definition['table']." LIMIT $limit")->fetchAll(PDO::FETCH_COLUMN);
        $entities = array();
        foreach ($ids as $id)
        {
            $entities[] = new static($id);
        }
        return $entities;
    }

    public static function search($keyword)
    {
        $db = DB::getInstance();
        $sql = 'SELECT * FROM '.static::$definition['table'].' WHERE '.static::$definition['fields']['name'].' like "%'.$keyword.'%"';
        $st = $db->query($sql);
        return $st->fetchAll(PDO::FETCH_ASSOC);

    }
}
