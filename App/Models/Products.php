<?php 




class Products
{
    private $db;
    private $table = "products";

    public function __construct()
    {
        $this->db = new DB();
    }

    public function getAllProducts()
    {
        
        return $this->db->connect()->get($this->table);
    }


    /**
         * 
         * insert new product in db
         * @param array $data => fileds and values of product row 
         * 
    */
    public function insertProducts($data)
    {
        return $this->db->connect()->insert($this->table,$data);
    }


    /**
         * 
         * delete product from db 
         * @param int $id => id of product 
         * 
    */
    public function deleteProduct($id)
    {
        $delete = $this->db->connect()->where('id',$id);
        return $delete->delete($this->table);
    }


    /**
     * get data of product from database
     * @param int $id 
     * @return array 
     */

    public function getProduct($id)
    {
        $product = $this->db->connect()->where('id', $id);
        return $product->get($this->table);
    }

    public function updateProduct($id,$data)
    {
        $product = $this->db->connect()->where('id', $id);
        return $product->update($this->table,$data);
    }
}