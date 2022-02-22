<?php


namespace App\classes;


class Products
{

    protected $allProducts;
    protected $result =[];
    public function index(){
        return [
            0=>[
                "id"=>1,
                "category-id"=>1,
                "name"=>"T-shirt 1",
                "price"=>400,
                "description"=>"product description 1",
                "image"=>"assets/img/t-shirt1.jpg"
            ],
            1=>[
                "id"=>2,
                "category-id"=>1,
                "name"=>"T-shirt 2",
                "price"=>700,
                "description"=>"product description 2",
                "image"=>"assets/img/t.jpg"
            ],
            2=>[
                "id"=>3,
                "category-id"=>2,
                "name"=>"Sari 1",
                "price"=>800,
                "description"=>"product description 3",
                "image"=>"assets/img/s3.jpg"
            ],
            3=>[
                "id"=>4,
                "category-id"=>2,
                "name"=>"Sari 2",
                "price"=>1200,
                "description"=>"product description 3",
                "image"=>"assets/img/s5.jpg"
            ],
            4=>[
                "id"=>5,
                "category-id"=>2,
                "name"=>"Sari 3",
                "price"=>800,
                "description"=>"product description 3",
                "image"=>"assets/img/s4.jpg"
            ],
            5=>[
                "id"=>6,
                "category-id"=>3,
                "name"=>"Dress 1",
                "price"=>1200,
                "description"=>"product description 3",
                "image"=>"assets/img/d1.jpg"
            ],
            6=>[
                "id"=>7,
                "category-id"=>3,
                "name"=>"Dress 2",
                "price"=>800,
                "description"=>"product description 3",
                "image"=>"assets/img/d4.jpg"
            ],
            7=>[
                "id"=>8,
                "category-id"=>3,
                "name"=>"Dress 3",
                "price"=>1200,
                "description"=>"product description 3",
                "image"=>"assets/img/d2.jpg"
            ]
        ];
    }

    public function shortProducts($category_Id)
    {
        $this->allProducts =$this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product["category-id"] == $category_Id)
            {
                array_push($this->result,$product);
            }
        }
        return $this->result;

    }
    public function getProductDetails($product_id)
    {
        $this->allProducts =$this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product["id"] == $product_id)
            {
                return $product;
            }
        }


    }

}