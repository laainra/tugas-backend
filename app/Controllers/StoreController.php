<?php

namespace App\Controllers;

use App\Models\StoreModel;

class StoreController extends BaseController
{
    public function index()
    {
        $storeModel = new StoreModel();
        $data['stores'] = $storeModel->getAllStores();

        return view('store', $data);
    }

    public function insertStore()
    {
        // Handle form submission to create a new store
        if ($this->request->getMethod() === 'post') {
            $storeModel = new StoreModel();

            $data = [
                'name' => $this->request->getPost('name'),
                'description' => $this->request->getPost('description'),
            ];

            // Insert the new store into the database
            $insertedStoreId = $storeModel->insertStore($data);

            if ($insertedStoreId) {
                // Redirect to a success page or display a success message
                return redirect()->to('/store')->with('success', 'Store added successfully.');
            } else {
                // Handle the case where the insertion failed
                return redirect()->back()->withInput()->with('error', 'Failed to add the store.');
            }
        }

        // Load the view for creating a new store
        return view('insertstore');
    }
}
