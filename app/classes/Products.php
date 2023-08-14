<?php


namespace App\classes;


class Products
{
    public $products=[];
    public  function __construct()
    {
        $this->products=[
            0=>[
                'id'=>1,
                'name'=>'Nature Honey',
                'description'=>'Nature Honey',
                'price'=>'$500',
                'image'=>'assets/img/product/1.jpg',
            ],
            1=>[
                'id'=>2,
                'name'=>'Olive Oil',
                'description'=>'Olive Oil',
                'price'=>'$255',
                'image'=>'assets/img/product/2.jpg',
            ],
            2=>
                [
                    'id'=>3,
                    'name'=>'Coconut Oil',
                    'description'=>'Coconut Oil',
                    'price'=>'$125',
                    'image'=>'assets/img/product/4.jpg',
                ],
            3=>[
                'id'=>4,
                'name'=>'Olive Oil',
                'description'=>'Olive Oil',
                'price'=>'$125',
                'image'=>'assets/img/product/3.jpg',
            ],
            4=>[
                'id'=>5,
                'name'=>'Nature Honey',
                'description'=>'Nature Honey',
                'price'=>'$450',
                'image'=>'assets/img/product/1.jpg',
            ],
            5=>[
                'id'=>6,
                'name'=>'Olive Oil',
                'description'=>'Olive Oil',
                'price'=>'$125',
                'image'=>'assets/img/product/2.jpg',
            ],
            ];
    }
    public  function getAllProducts()
    {
        return $this->products;
    }

}