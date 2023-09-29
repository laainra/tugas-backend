<?php

namespace App\Models;

use CodeIgniter\Model;

class StoreModel extends Model
{
    protected $table = 'stores';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['name', 'description'];


    public function insertStore($data)
    {
        return $this->insert($data);
    }


    public function getAllStores()
    {
        return $this->findAll();
    }



}
