<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    private $product;

    public function __construct()
    {
        $this->product = new ProductModel();
    }

    public function readProducts()
    {
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

    public function getProduct($id)
    {
        $product = $this->product->find($id);
        $data = [
            'product' => $product
        ];
    
        return view("edit-product", $data);
    }
    

    public function updateProduct($id)
    {
        $nama_product = $this->request->getVar('nama_product');
        $description = $this->request->getVar('description');
        $data = [
            'nama_product'=>$nama_product,
            'description'=>$description
        ];
        $this->product->update($id,$data);
        return redirect()->to(base_url("readproduct"));

    }

    public function deleteProduct($id){
        $this->product->delete($id);
        return redirect()->to(base_url("readproduct"));
    }
}
