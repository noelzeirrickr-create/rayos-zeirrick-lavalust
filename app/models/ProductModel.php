<?php
<<<<<<< HEAD

=======
>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductModel extends Model
{
    protected $table = 'products';

<<<<<<< HEAD
    // Get all products
    public function getAll()
    {
        return $this->db
            ->table($this->table)
            ->get_all();
    }

    // Get product by ID
    public function getById($id)
    {
        return $this->db
            ->table($this->table)
            ->where('id', $id)
            ->get();
    }

    // Add product
    public function create($data)
=======
    public function get_all_products()
    {
        return $this->db
            ->table($this->table)
            ->order_by('created_at', 'DESC')
            ->get_all();
    }

    public function get_product($id)
    {
        return $this->db
            ->table($this->table)
            ->where('id', (int) $id)
            ->get();
    }

    public function create_product($data)
>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1
    {
        return $this->db
            ->table($this->table)
            ->insert($data);
    }

<<<<<<< HEAD
    // Update product
    public function update($id, $data)
    {
        return $this->db
            ->table($this->table)
            ->where('id', $id)
            ->update($data);
    }

    // Delete product
    public function delete($id)
    {
        return $this->db
            ->table($this->table)
            ->where('id', $id)
=======
    public function update_product($id, $data)
    {
        return $this->db
            ->table($this->table)
            ->where('id', (int) $id)
            ->update($data);
    }

    public function delete_product($id)
    {
        return $this->db
            ->table($this->table)
            ->where('id', (int) $id)
>>>>>>> 5f947b47838874ac030a0f4b7c0502e7ffdbc1b1
            ->delete();
    }
}