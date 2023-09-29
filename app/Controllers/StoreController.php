<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\StoreModel;

class StoreController extends BaseController
{

    public function __construct()
    {
        $this->store = new StoreModel();
    }

    public function index()
    {
        
        $stores =  $this->store->findAll();
        $data = [
            'stores' => $stores
        ];

        return view('store', $data);
    }

    public function insertPage(){
        return view('insertstore');
    }

    public function insertStore()
    {

        if ($this->request->getMethod() === 'post') {


            $data = [
                'name' => $this->request->getPost('name'),
                'description' => $this->request->getPost('description'),
            ];

            $this->store->insertStore($data);

            return redirect()->to('store');

        }
    }

    public function getStore($id){
        $store = $this->store->find($id);
        $data = [
            'store' => $store
        ];

        return view('edit-store', $data);
    }
    public function updateStore($id)
    {
        $name = $this->request->getVar('name');
        $description = $this->request->getVar('description');
        $data = [
            'name'=>$name,
            'description'=>$description
        ];
        $this->store->update($id,$data);
        return redirect()->to(base_url("store"));

    }

    public function deleteStore($id){
        $this->store->delete($id);
        return redirect()->to(base_url("store"));
    }

}
