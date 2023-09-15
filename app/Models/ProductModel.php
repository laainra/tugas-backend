<?php

namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $returnType = 'object';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'nama_product', 'description'];




    // public function insertProduct($data)
    // {
    //     $query = "INSERT INTO product (nama_product, description) VALUES (?, ?)";
    //     $this->db->query($query, [$data["nama_product"], $data["description"]]);
    
    //     if ($this->db->affectedRows() == 1) {
    //         return $this->db->insertID();
    //     } else {
    //         // Handle the error here
    //         $error = $this->db->error();
    //         return $error['message'];
    //     }
    // }

    public function insertProductORM($data){
        return $this->insert($data);
    }
    
    

}

?>