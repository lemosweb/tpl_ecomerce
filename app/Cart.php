<?php
/**
 * Created by PhpStorm.
 * User: danielolemos
 * Date: 11/03/16
 * Time: 11:39
 */

namespace CodeCommerce;


class Cart
{
    private $items;

    public function __construct()
    {
        $this->items = [];

    }

    public function add($id, $name, $price)
    {
        $this->items + [
            $id => [
                    'qtd' => isset($this->items[$id]['qtd']) ? $this->items[$id]['qtd']++ : 1,
                    'price' => $price,
                    'name' =>  $name
            ]
        ];


    }

    public function remove($id)
    {
        unset($this->items[$id]);
    }

    public function getTotal()
    {
        $total = 0;
        foreach($this->items as $items)
        {
            $total += $items['qtd'] * $items['price'];
        }

        return $total;
    }



}