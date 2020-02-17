<?php

class Product extends BaseEntity
{
    protected $id;
    protected $name;
    protected $price;
    protected $stock;
    protected $short_description;
    protected $long_description;

    public static $definition = array(
        "table" => "product",
        "primary" => "id",
        "fields" => array(
            "id",
            "name",
            "price",
            "stock",
            "short_description",
            "long_description",
        ),
    );

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function getShortDescription()
    {
        return $this->short_description;
    }

    public function getLongDescription()
    {
        return $this->long_description;
    }

    public static function getBests()
    {
        $db = DB::getInstance();
        $st = $db->query('SELECT * FROM product LIMIT 4');
        $arr = $st->fetchAll(PDO::FETCH_ASSOC);
        foreach ($arr as $pid)
        {
            $bests[] = new self($pid['id']);
        }
        return $bests;
    }
}
