<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController{

    private $product;

    public function __construct()
    {
        $this->product = new ProductModel();
    }
    public function readProducts(){
        $products =  $this->product->findAll();

        $data= [
            'products' => $products
        ];

        return view('product',  $data);
    }
    // public function insertProduct(){
        
    //     $data = [
    //         'nama_product' => 'Smartphone',
    //         'description' => 'merupakan smartphone merk Samsung'

    //     ];

    //     $this->product->insertProduct($data);
    // }

    public function insertProductORM()
    {
        $data = [
            'nama_product' => 'Laptop',
            'description' => 'merupakan laptop merk MAC'

        ];

        $this->product->insertProductORM($data);
    }
    
}

?>