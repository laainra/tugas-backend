<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    use ResponseTrait;

    private $product;

    public function __construct()
    {
        $this->product = new ProductModel();
    }

    public function readProducts()
    {
        $products =  $this->product->findAll();

        $data = [
            'products' => $products
        ];

        return view('product',  $data);
    }
    public function readProductsApi()
    {
        $products =  $this->product->findAll();

        return $this->respond(
            [
                'code' => 200,
                'status' => "ok",
                'data' => $products
            ]
        );
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
            'nama_product' => $this->request->getPost('nama_product'),
            'description' => $this->request->getPost('description')
        ];

        $this->product->insertProductORM($data);

        return redirect()->to('readproduct');
    }

    public function insertProductApi()
    {
        $requestData = $this->request->getJSON();
        $validation = $this->validate([
            'nama_product' => 'required|max_length[15]',
            'description' => 'required|min_length[10]'

        ]);

        if (!$validation) {
            $this->response->setStatusCode(400);
            return $this->response->setJSON([
                'code' => 400,
                'status' => "BAD REQUEST",
                'data' => null
            ]);
        }

        $data = [
            'nama_product' => $requestData->nama_product,
            'description' => $requestData->description
        ];


        $insert = $this->product->insertProductORM($data);
        if ($insert) {
            return $this->respond(
                [
                    'code' => 200,
                    'status' => "ok",
                    'data' => $data
                ]
            );
        } else {
            return $this->respond(
                [
                    'code' => 500,
                    'status' => "Failed to insert, Internal Server Error ",
                    'data' => null
                ]
            );
        }

        return redirect()->to('readproduct');
    }


    public function insertPage()
    {
        return view('insertproduct');
    }

    public function getProduct($id)
    {
        $product = $this->product->find($id);
        $data = [
            'product' => $product
        ];

        return view("edit-product", $data);
    }
    public function getProductApi($id)
    {
        $product = $this->product->find($id);

        if (!$product) {
            $this->response->setStatusCode(404);
            return $this->response->setJSON([
                'code' => 404,
                'status' => "NOT FOUND",
                'data' => null
            ]);
        }

        return $this->response->setJSON([
            'code' => 200,
            'status' => "OK",
            'data' => $product
        ]);
    }



    public function updateProduct($id)
    {
        $nama_product = $this->request->getVar('nama_product');
        $description = $this->request->getVar('description');
        $data = [
            'nama_product' => $nama_product,
            'description' => $description
        ];
        $this->product->update($id, $data);
        return redirect()->to(base_url("readproduct"));
    }

    public function deleteProduct($id)
    {
        $this->product->delete($id);
        return redirect()->to(base_url("readproduct"));
    }

    public function updateProductApi($id)
    {
        $requestData = $this->request->getJSON();
        $validation = $this->validate([
            'nama_product' => 'required|max_length[15]',
            'description' => 'required|min_length[10]'

        ]);

        if (!$validation) {
            $this->response->setStatusCode(400);
            return $this->response->setJSON([
                'code' => 400,
                'status' => "BAD REQUEST",
                'data' => null
            ]);
        }

        $data = [
            'nama_product' => $requestData->nama_product,
            'description' => $requestData->description
        ];


        $update = $this->product->update($id, $data);
        if ($update) {
            return $this->respond(
                [
                    'code' => 200,
                    'status' => "uPDATE SUCCESSUL",
                    'data' => $data
                ]
            );
        } else {
            return $this->respond(
                [
                    'code' => 500,
                    'status' => "Failed to update, Internal Server Error ",
                    'data' => null
                ]
            );
        }
        return redirect()->to(base_url("readproduct"));
    }
}
